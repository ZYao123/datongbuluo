<?php
/**调用商品数据***/
/*
 * 获取单个商品

**/
function getGoodsShow($id,$phone=false)
{
	global $dosql,$dopage,$smarty;
	$id=(int)$id;
	if(!$id)
	{
		echo '错误请求';die;
	}
	$info = array();
	$where="";
	$phone and  $where=" AND `#@__goods`.phone=1 ";
	$info = $dosql->getone("SELECT `#@__goods`.norm,`#@__goods`.picarr,`#@__goods`.classid,`#@__goods`.flag,`#@__goods`.need_integral,
		`#@__goods`.id,`#@__goods`.retitle,`#@__goods`.phone_content,`#@__goods`.ser_conent,
		`#@__goods`.picurl,`#@__goods`.title,`#@__goods`.phone_picurl,`#@__goods`.content,
		min(`#@__goodsattr`.price) as min_price,
		max(`#@__goodsattr`.price) as max_price,
		sum(`#@__goodsattr`.housenum) as tot_housenum
		FROM `#@__goods` 
		left join `#@__goodsattr` on `#@__goods`.id=`#@__goodsattr`.goodsid
		WHERE `#@__goods`.`id` = $id AND `#@__goods`.checkinfo='true' 
		and `#@__goods`.delstate = '' {$where} group by `#@__goods`.id");	
		$info['picarr']  = string2array($info['picarr']);
		if($info['min_price']==$info['max_price'])
		{
			$info['salesprice']=$info['max_price'];
		}else
		{
			$info['salesprice']=$info['min_price']."-".$info['max_price'];
		}
	return $info;
}

/**
 * 返回商品分类（每两个分类定义到一个数组里）
 *
 * @param   c_id         类别ID
  * @param   num         显示数目
 */
function GetGoodsType_two($c_id=false,$num=false)
{
	$result=GetGoodsType($c_id,$num);
	$last_result=array();
	
	$i=0;
	foreach ($result as $k=>$v)
	{
		$last_result[$i]['list'][]=$v;
		$k%2==1 and $i++;
	}
	return $last_result;
}

/**
 * 返回商品销售排行榜
 *
 * @access  public
 * @param   string   $table      数据表名称
 * @param   int      $parentid   父类id
 * @param   string   $field      主键字段名称
 * @param   string   $field2     祖父类id
 * @param   string   $orderby    排序规则
 * @param   int      $count      循环次数
 * @param   int      $num        计数器
 * @param   string   $string     名称缩进
 * @return  array
 */
function GetGoodsRank_list($c_id=false,$num=5,$day=false)
{
	global $dosql;
	$starttime = (int)$day * 86400;
	$endtime = GetMkTime(date("Y-m-d H:i:s"));
	$where="";
	$starttime!=0 and $where.=" AND #@__goodsorder.POSTTIME >=$endtime-$starttime ";
	$c_id and $where.=" AND #@__goods.classid='{$c_id}' ";
	$limit=$num ? " LIMIT {$num} ": "";
	$sql = " SELECT SUM(`#@__goodsshopcart`.num)as sumer,#@__goods.id,`#@__goodsattr`.price,#@__goods.picurl,#@__goods.classid,#@__goods.title 
		FROM #@__goodsshopcart INNER JOIN (#@__goodsorder,#@__goods,#@__goodsattr)
		ON #@__goodsorder.orderlistnum=#@__goodsshopcart.gorderlistnum  
		AND #@__goodsshopcart.gid=#@__goods.id
		AND #@__goodsattr.goodsid=#@__goodsshopcart.gid
		WHERE   #@__goodsshopcart.`Status`='order'
		{$where}
		GROUP BY #@__goodsshopcart.gid ORDER BY sumer DESC {$limit}
		";
	$result=$dosql->getall($sql);

	return $result;
}

/**
 * 返回一二级分类
 *
 * @return  parentid 父ID
 * @return  num 商品数量
 */
function GetGoods_type($parentid=0,$num=false)
{
	global $dosql;
	$where="";
	$limit=$num ? " LIMIT {$num} ": "";
	$goods_class = array();
	$goods_class = $dosql->getall("SELECT id,classname,keywords FROM `#@__goodscategory` WHERE `parentid` = {$parentid} AND `checkinfo`='true' ORDER BY orderid ASC {$limit}");
	foreach($goods_class as $key => $val)
	{
		$goodscid = $val['id'];
		$goods_class[$key]['child_class'] = $dosql->getall("SELECT id,classname FROM `#@__goodscategory` WHERE `parentid`=$goodscid  AND `checkinfo`='true' ORDER BY orderid ASC",2);
		
	}
	return $goods_class;
}

/**
 * 返回分类
 *
 * @return  c_id 商品类别ID
 * @return  num 商品数量
 * @return  child 查询所有分类包括子分类   
 */
function GetGoodsType($c_id=false,$num=false,$child=false)
{
	global $dosql;
	$where="";
	if($c_id>0){ $where.=" AND parentid = '{$c_id}'";}else{ $where.=" AND parentid = '428'";}
	$child and  $where.=" or  parentstr like '%,{$c_id},%' ";
	$limit=$num ? " LIMIT {$num} ": "";
	$sql="SELECT id,classname,picurl FROM `#@__goodscategory` WHERE  `checkinfo`='true' {$where} ORDER BY orderid ASC {$limit}";
	$result = $dosql->getall($sql);
	return $result;
}


/**
 * 返回某一类别 某一属性下图片
 *
 * @return  c_id 商品类别ID
 * @return  a_id 商品属性ID
 * @return  num 商品数量
  * @return  phone 手机
  * @return  point 积分兑换
  * @return  page 分页
 */
function GetGoods($c_id=false,$a_id=false,$num=false,$page=false,$phone=false,$point=false,$keywords=false)
{
	global $dosql,$dopage,$smarty;
	
	$where="";
	$c_id and  $where.=" AND (`#@__goods`.classid='{$c_id}' OR `#@__goods`.parentstr like '%,{$c_id},%')";
	if($a_id)
	{
		$a_id_array=explode(',',$a_id);
		if(is_array($a_id_array))
		{
			foreach ($a_id_array as $v)
			{
				if($v)
				{
					$where.=" AND `#@__goodsattribute`.a_id like '%,{$v},%'";
				}
			}
		}
	}
	$phone and  $where.=" AND `#@__goods`.phone=1";
	$point and  $where.=" AND `#@__goods`.`need_integral`>0";
	($page and $num) or $limit=$num ? " LIMIT {$num} ": "";
	$keywords and $where.=" AND `#@__goods`.`title` like '%"._RunMagicQuotes($keywords)."%'";
	$sql="SELECT `#@__goods`.id,`#@__goods`.phone_picurl,`#@__goods`.title,picurl,retitle,description,classid,need_integral,`#@__goodsattr`.`price`,`#@__goodsattr`.`old_price`,
	sum(`#@__goodsattr`.housenum) as housenum 
	,(SELECT SUM(num)  FROM `#@__goodsshopcart` WHERE `gid` = `#@__goods`.`id` and `#@__goodsshopcart`.norm = `#@__goodsattr`.attrname and `#@__goodsshopcart`.Status='order') AS sumer,
	 `#@__goodsattr`.`price`/`#@__goodsattr`.`old_price`*10 as discount
	FROM `#@__goodsattr`,
	`#@__goods` LEFT JOIN
	`#@__goodsattribute`  ON    `#@__goodsattribute`.g_id=`#@__goods`.id
	 WHERE `#@__goods`.`id`=`#@__goodsattr`.`goodsid` AND `#@__goodsattr`.housenum>0   
	 AND `#@__goods`.`checkinfo`='true' AND `#@__goods`.`delstate` = '' 
	 {$where}
	 GROUP BY `#@__goods`.id ORDER BY  orderid DESC {$limit}";
	if($page and $num)
	{
		$result =$dopage->GetPage($sql,$num);
		$page=$dopage->GetList1_S();
		$result=array("info"=>$result,"page"=>$page);
	}else
	{
		$result = $dosql->getall($sql);
	}
	return $result;
}


/**
 * 返回具体商品属性的商品
 *
 * @return  a_id 商品属性ID
 * @return  num 商品数量
 */
function GetGoodsAttribute($a_id=false,$num=false)
{
	global $dosql;
	$where=$a_id ? " AND `#@__goodsattribute`.a_id={$a_id} ":"";
	$limit=$num ? " LIMIT {$num} ": "";
	$sql="SELECT `#@__goods`.id,picurl,title,description,classid,`#@__goodsattr`.`price` FROM `#@__goods` 
	INNER JOIN (`#@__goodsattr`,`#@__goodsattribute`) 
	ON `#@__goods`.`id`=`#@__goodsattr`.`goodsid`
	AND `#@__goodsattribute`.g_id=`#@__goods`.id
	 WHERE `#@__goodsattr`.housenum>0  AND `#@__goods`.`checkinfo`='true' AND `#@__goods`.`delstate` = '' 
	{$where}
	  ORDER BY RAND() {$limit}";
	$result = $dosql->getall($sql);
	return $result;
}

/**
 * 返回商品销售排行
 *
 * @access  public
 * @param   string   $table      数据表名称
 * @param   int      $parentid   父类id
 * @param   string   $field      主键字段名称
 * @param   string   $field2     祖父类id
 * @param   string   $orderby    排序规则
 * @param   int      $count      循环次数
 * @param   int      $num        计数器
 * @param   string   $string     名称缩进
 * @return  array
 */
function GetGoodsRank($gid)
{
	global $dosql;
	$sql = "select sum(num) as s_num,gid from #@__goodsshopcart where `Status`='order' GROUP BY gid order by  s_num desc";
	$result=$dosql->getall($sql);
	$needle=array('gid'=>$gid);
	return my_array_search($needle, $result);
}

/**
 * 返回分类
 *
 * @return  c_id 商品类别ID
 * @return  num 商品数量
 */
function GetGoodsType_show($c_id=false)
{
	global $dosql;
	$sql="SELECT * FROM `#@__goodscategory` WHERE  `checkinfo`='true' AND id = '{$c_id}'";
	$result = $dosql->getone($sql);
	return $result;
}

//获取商品评论总数
//gid 商品ID
function GetGoodsCommentTotal($gid)
{
	global $dosql;
	$gid=(int)$gid;
	if(!$gid)
	{
		echo '错误请求';die;
	}
	$row=$dosql->getone("SELECT  count(gid) as gid  FROM `#@__usercomment` where gid ='{$gid}'"); //产品评论总数
	return $row['gid'];
}

//获取商品评论列表
//gid 商品ID
function GetGoodsCommentList($gid)
{
	global $dosql;
	$gid=(int)$gid;
	if(!$gid)
	{
		echo '错误请求';die;
	}
	$comments=$dosql->getall("SELECT * FROM `#@__usercomment` where isshow=1 AND gid ='{$gid}'"); //循环商品评论
	foreach($comments as $key => $val)
	{
		$comments[$key]['uid'] = $dosql->getone("select * from `#@__member` where id=".$comments[$key]['uid']);
	}
	return $comments;
}

//获取商品规格
//norm 商品规格 商品表 norm字段值
//gid 商品ID
function GetGoodsAttrValue($gid,$norm)
{
	global $dosql;
	$gid=(int)$gid;
	if(!$gid)
	{
		echo '错误请求';die;
	}
	$norm_arr = string2array($norm);
	foreach($norm_arr as $key => $val)
	{			
		foreach($val as $k => $v)
		{	
			unset($norm_arr[$key]['normid']);
			if($k == 'selected')
			{
				foreach($v as $ks => $vs)
				{
					if(is_numeric($ks))
					{
						
						$r = $dosql->getone("SELECT color,pic FROM `#@__goodsattr_value` WHERE `goodsid`= $gid and `attrid` = $ks ORDER BY id DESC");	
						unset($norm_arr[$key]['selected'][$ks]);
						if($r)
						{
							$norm_arr[$key]['selected'][$ks]['attrname']   =  $vs;
							$norm_arr[$key]['selected'][$ks]['color'] 	  =  $r['color'];
							$norm_arr[$key]['selected'][$ks]['pic']        =  $r['pic'];
						}
					}
				}
			}
		}
	}
	return $norm_arr;
}


//获取商品属性
//flag 商品属性 商品表 flag字段值
function GetGoodsFlagValue($flag)
{
	global $dosql;
	$flag = string2array($flag);
	$flag_info = array();
	if(count($flag)>0)
	{
		foreach($flag as $key => $val)
		{
			if(is_array($val)) $val = implode(" ", $val);
			$flag_info[] = array('name'=>get_field_value('attrname', 'goodstypeattr', $key), 'val'=>$val);
		}
	}
	return $flag_info;
}

/**
 * 返回某一属性下的分类
 *
 * @return  aid 商品属性ID
 * @return  num 商品数量
 */
function GetGoodsAttrType($aid=false,$num=false)
{
	global $dosql;
	$limit=$num ? " LIMIT {$num} ": "";
	$sql="select count(#@__goods.classid) as class_num,#@__goods.classid ,#@__goodscategory.classname 
			from #@__goodsattribute right join #@__goods 
			right join #@__goodscategory ON #@__goodscategory.id=#@__goods.classid
			on #@__goods.id=#@__goodsattribute.g_id
			where #@__goodsattribute.a_id='{$aid}'
			GROUP BY #@__goods.classid order by  class_num desc {$limit}";
	$result = $dosql->getall($sql);
	return $result;
}


/**
 * 返回商品规格
 * @return normid 规格字符串
 */
 
function cartnorm($normid){
  global $dosql;
  if($normid){
	  $sql="select `#@__goodsnorm_value`.name ,`#@__goodsnorm`.normname from `#@__goodsnorm_value` left join  `#@__goodsnorm` on `#@__goodsnorm_value`.normid=`#@__goodsnorm`.id where `#@__goodsnorm_value`.id in (".$normid.") ";
  $result = $dosql->getall($sql);
  $i=1;
  foreach($result as $volist){
	  if($i!=1){
		   $normstr .=',';
	  }
	  $normstr .=$volist['normname'].':'.$volist['name'];
	  $i++;
  }
     return $normstr;  
  }else{
	 return '';  
  }
 
} 


function ordergoods($orderlistnum){
	global $dosql;
	$sql = "select `#@__goodsshopcart`.id, `#@__goodsshopcart`.gid,`#@__goodsshopcart`.gpicurl AS picurl,`#@__goodsshopcart`.gtitle as title,`#@__goodsshopcart`.price,`#@__goodsshopcart`.num,`#@__goodsshopcart`.norm,`#@__goodsshopcart`.consume_points ,`#@__goodsattr`.housenum
	from `#@__goodsshopcart`, 
	`#@__goodsattr` where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid
	AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm
	AND `#@__goodsshopcart`.gorderlistnum = '".$orderlistnum."' and `#@__goodsshopcart`.Status = 'order'";
	$dosql->Execute($sql);
	 $str = '';
	while ($v = $dosql->GetArray())
	{   $normname ='';
		if($v['norm']!=''){
			$normname = cartnorm($v['norm']);
		}
	   $str .= $v['title'].'　'.$normname.'　'.$v['price'].'元*'.$v['num'].'　';	
	}
	return $str;
}
?>