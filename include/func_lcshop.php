<?php
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');

}
/**
 * 返回无限分类数据
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
function getallcat($table, $field = 'id', $count = 10000, $string = '--', $parentid = 0, $field2 = 'parentstr', $orderby = ' ORDER BY orderid ASC', $num = 0)
{
	global $dosql, $arr;
	$num++;
	$sql = "SELECT * FROM `$table` WHERE `parentid`= $parentid ".$orderby;
	
	$dosql->Execute($sql, $parentid);
	$total = $dosql->gettotalrow($parentid);
	if($total){
		while ($row = $dosql->GetArray($parentid))
		{
			$str = '';
			$par = explode(",", $row[$field2]);
			for ($i=2; $i<count($par); $i++)
			{
				$str .= $string;
			}
			$row['str'] = $str;	
			$arr[] = $row;
			if($num < $count){
				getallcat($table, $field, $count, $string, $row[$field], $field2, $orderby, $num);
			}
		}
	}
	if($parentid == 0)
	{
		return $arr;
	}
	
}

function attrbuie($id=0){
   global $dosql;
   $dosql->Execute("select * from `#@__attribute`");  
    while($row = $dosql->GetArray()){
		 $selec='';
		if($id == $row['id']){
		  $selec = 'selected="selected"';
		}
	  $str.='<option value="'.$row['id'].'"  '.$selec.'>'.$row['name'].'</option>';
		
   }
   	
	echo  $str;
}


/*
 * 获取产品当前页面位置
 *
 * @access  public
 * @param   $tbname  string  表名
 * @param   $url     string  位置链接地址
 * @param   $cid     int     当前页面栏目id
 * @param   $id      int     当前页面产品id
 * @param   $sign    string  栏目之间分隔符
 * @return           string
 */
function getposstr($tbname, $url='', $cid=0, $id=0, $sign='&nbsp;&gt;&nbsp;')
{
	global $dosql, $cfg_webpath;


	//设置首页链接
	$pos_str = '<a href="/">首页</a>';


	//如果cid为空，获取串，否则视为首页
	if(!empty($cid))
	{
		
		//获取当前栏目信息
		$r = $dosql->GetOne("SELECT * FROM `#@__$tbname` where `id`=$cid");
		if(empty($r['parentstr']))
		{
			return $pos_str.$sign.'栏目不存在';
		}
		else
		{
			//构成上级栏目字符
			if($r['parentstr'] != '0,')
			{
				$pid_arr = explode(',', $r['parentstr']);
		
				foreach($pid_arr as $v)
				{
					if(!empty($v))
					{
						$r = $dosql->GetOne("SELECT * FROM `#@__$tbname` where `id`=$v");
						if(empty($url))
							$pos_str .= $sign.$r['classname'];
						else
							$pos_str .= $sign.'<a href="'.$url.'.php?cid='.$r['id'].'">'.$r['classname'].'</a>';
					}
				}
			}

			//构成本级栏目字符
			$r = $dosql->GetOne("SELECT * FROM `#@__$tbname` WHERE `id`=$cid");
			if(isset($r) && is_array($r))
			{
				if(empty($url))
					return $pos_str.$sign.$r['classname'];
				else
					return $pos_str.$sign.'<a href="'.$url.'.php?cid='.$r['id'].'">'.$r['classname'].'</a>';
			}
			else
			{
				return $pos_str.$sign.'栏目不存在';
			}
		}
	}
	else
	{
		return $pos_str;
	}
}

//获取除page参数外的其他参数
function seturlquery($str,$v)
{
	$v=urlencode($v);
	$url = $_SERVER["REQUEST_URI"];
	//URL分析：
	$parse_url = parse_url($url);
	
	
	if(array_key_exists("query",$parse_url))
	{
		$query_strs ='';
		$url_query = $parse_url["query"]; //单独取出URL的查询字串
		$query_str = explode('&', $url_query);
		foreach($query_str as $v1)
		{
			$query_str_arr = explode('=', $v1);
			//if(array_key_exists("keyword", $query_str_arr)) $query_str_arr['keyword']='';
			if(strstr($query_str_arr[0],$str) == '')
			{
				$query_str_arr[0] = isset($query_str_arr[0]) ? $query_str_arr[0] : '';
				$query_str_arr[1] = isset($query_str_arr[1]) ? $query_str_arr[1] : '';
				if($query_str_arr[0]!='keyword'){
					$query_strs .= $query_str_arr[0].'='.$query_str_arr[1].'&';		
				}
			}
		}
		$nowurl = '?'.$query_strs;
	
	}
	else
	{
		$nowurl = '?';
	}
	$nowurl .= $str.'='.$v;
	return $nowurl;
}

/**
 * 计算优惠价格
 *
 * 返回值可为正、负数，总价做加法处理
 * 
 */
function Preferential()
{
	return 0;
}
/**
 * 添加购物车cookies版
 *
 * @goods_id 　　　商品id
 * @goods_num   订购数量
 * 
 */
function AddShopCart($goods_id, $goods_num, $goods_norm,$goods_price,$phone=false)
{
	$goods_price = AuthCode($goods_price,'DECODE',14,60*60*24);
	if(is_numeric($goods_price)){
	$cur_cart_array = unserialize(stripslashes(@$_COOKIE['shop_cart']));  
	if($cur_cart_array == "")
	{
		$cart_info[0][] = $goods_id;
		$cart_info[0][] = $goods_num;
		$cart_info[0][] = $goods_norm;
		$cart_info[0][] = $goods_price;
		setcookie("shop_cart",serialize($cart_info),time()+3600*24);
		//$shop_cart = $cart_info;
	}
	elseif($cur_cart_array != "")
	{
		//返回数组键名倒序取最大 
		$ar_keys = array_keys($cur_cart_array);
		rsort($ar_keys);
		$max_array_keyid = $ar_keys[0]+1; 
		//遍历当前的购物车数组
		//遍历每个商品信息数组的0值，如果键值为0且货号相同则购物车存在相同货品
		$Same = 0;//相同计数
		foreach($cur_cart_array as $keys=>$goods_current_cart)
		{		
			if ($cur_cart_array[$keys][0] == $goods_id and $cur_cart_array[$keys][2]==$goods_norm)
			{
				//存在相同商品时，数量相加
				$cur_cart_array[$keys][1] += $goods_num;
				$Same++;
			}
		}
		if ($Same < 1 )
		{
			$cur_cart_array[$max_array_keyid][] = $goods_id;
			$cur_cart_array[$max_array_keyid][] = $goods_num; 
			$cur_cart_array[$max_array_keyid][] = $goods_norm;
			$cur_cart_array[$max_array_keyid][] = $goods_price; 
		}
		setcookie("shop_cart",serialize($cur_cart_array),time()+3600*24);  
		//$shop_cart = $cur_cart_array;
	}
	//print_r($shop_cart);
	$item_num = count($cur_cart_array);
	echo "{\"nums\":\"".$item_num."\",\"act\":\"1\"}";
	}
}

/**
 * 添加购物车sql版
 *
 * @goods_id 　　　商品id
 * @goods_num   订购数量
 * 
**/
function AddShopCartSql($goods_id, $goods_num, $goods_norm,$goods_price,$phone=false)
{
	global $dosql;
	$goods_price = AuthCode($goods_price,'DECODE',14,60*60*24);
	if(is_numeric($goods_price)){
	//将数据库购物车表中的数据取出，将所有商品id放在字符串中
	$sql1 = "select gid,id from `#@__goodsshopcart` where uid = ".$_COOKIE['userid']." AND gid = ".$goods_id." and Status = 'cart' 
		AND norm='{$goods_norm}' AND consume_points=0";
	$dosql->Execute($sql1);
	if ($dosql->GetTotalRow() >= 1)
	{
		$sql = "UPDATE `#@__goodsshopcart` SET num = num + ".$goods_num." WHERE uid = ".$_COOKIE['userid']." and gid = ".$goods_id." and Status = 'cart' AND norm='{$goods_norm}'";
		$result=$dosql->GetOne($sql1);
		$cart_id=$result['id'];
		$dosql->ExecNoneQuery($sql);
	}
	else
	{
		$sql="select title,picurl,phone_picurl FROM `#@__goods` WHERE id='{$goods_id}'";
		$row=$dosql->getone($sql);
		$title=$row['title'] ?$row['title']:"";
		if($phone)
		{

			$picurl=$row['phone_picurl'] ?$row['phone_picurl']:"";
		}else
		{
			$picurl=$row['picurl'] ?$row['picurl']:"";
		}
		
		$sql="select buyprice FROM `#@__goodsattr` WHERE goodsid='{$goods_id}' and attrname='{$goods_norm}'";
		$attr_row=$dosql->getone($sql);
		$buyprice=$attr_row['buyprice'] ?$attr_row['buyprice']:0;
		$sql = "INSERT INTO `#@__goodsshopcart` (`gtitle`,`gpicurl`,`price`,`gid`,`num`,`uid`,`Status`,`norm`,`buyprice`) 
		VALUES ('{$title}','{$picurl}','".$goods_price."','".$goods_id."','".$goods_num."','".$_COOKIE['userid']."','cart','".$goods_norm."','{$buyprice}')";
		$dosql->ExecNoneQuery($sql);
		$cart_id=$dosql->GetLastID();
	}
	
	/*$sql1 = "select gid from `#@__goodsshopcart`,`#@__goods` where `#@__goods`.id = `#@__goodsshopcart`.gid AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and Status = 'cart'";*/
	$sql1 = "select gid from `#@__goodsshopcart`,`#@__goods`,`#@__goodsattr`  where `#@__goods`.id = `#@__goodsshopcart`.gid AND `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid  and  `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm  and Status = 'cart'";
	$dosql->Execute($sql1,1);
	echo "{\"nums\":\"".$dosql->GetTotalRow(1)."\",\"act\":\"1\",\"cart_id\":\"".$cart_id."\"}";
	}
}


/**
 * 修改购物车sql版
 *
 * @goods_num 　其值可以是-1,0,1三种，当值为０时接num中的值计算，为-1或1时分别做商品数量加1或减1操作
 * @num   商品数量
 * @id    本条商品信息在购物车表中的id
 * 
 */
function update_cart($goods_num,$num,$id,$housenum)
{
	global $dosql;
	$More = 0 ;
	if ( $goods_num == -1 && $num == 1)
	{
		//delcart($id);
		echo "{\"num\":\"1\",\"More\":\"".$More."\"}";
		exit();			
	}
	if ( $goods_num == 0)
	{
		if (!is_numeric($num))
		{
			$row = array();
			$row = $dosql->getone("SELECT * FROM `#@__goodsshopcart` WHERE id=$id");
			if ($row != '') 
			{
				$num = $row['num'];
			}
			if ($housenum < $num)
			{
				$More = 1;
				$num = $housenum;
			}
			echo "{\"num\":\"".$num."\",\"More\":\"".$More."\"}";
			exit();	
		}
	}
	elseif (is_numeric($goods_num) && is_numeric($num))
	{
		$num = $num + $goods_num;
	}
	
	if ($housenum < $num)
	{
		$More = 1;
		$num = $housenum;
	}

	$sql = "UPDATE `#@__goodsshopcart` SET num = ".$num." WHERE id = ".$id."";
	if($dosql->ExecNoneQuery($sql))
	{
		echo "{\"num\":\"".$num."\",\"More\":\"".$More."\"}";
	}
	
}

/**
 * 从购物车删除选中商品sql版
**/
function delcart($goods_array_id)
{
	global $dosql;
	if (is_array($goods_array_id))
	{
		$goods_array_id = implode(',',$goods_array_id);
	}
	
	$sql = 'DELETE FROM `#@__goodsshopcart` WHERE id in ( ' .$goods_array_id. ' ) ' ;
	if($dosql->ExecNoneQuery($sql))
	{
		$row = array();
		$sql = "select `#@__goodsattr`.price as salesprice,`#@__goodsshopcart`.num from `#@__goodsshopcart`,`#@__goodsattr` where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm AND uid = ".$_COOKIE['userid']." AND Status = 'cart'";
		$dosql -> Execute($sql);
		$totalnum = $dosql -> GetTotalRow();
		$totalgoodsprice = 0;
		while ($row = $dosql->GetArray())
		{
			$totalgoodsprice += $row['salesprice'] * $row['num'];
		}		
		$totalprice = $totalgoodsprice + Preferential();
		echo "{\"Success\":\"1\",\"totalnum\":\"".$totalnum."\",\"totalgoodsprice\":\"".$totalgoodsprice."\",\"totalprice\":\"".$totalprice."\",\"ids\":\"".$goods_array_id."\"}";
	}
	else
	{
		echo "{\"Success\":\"0\"}";
	}

}
/**
 *清空购物车 
**/
function delcartall()
{
	global $dosql;
	$sql = "DELETE FROM `#@__goodsshopcart` WHERE uid = ".$_COOKIE['userid']." AND Status = 'cart' ";
	if($dosql->ExecNoneQuery($sql))
	{
		echo "{\"Success\":\"1\"}";
	}
}
/*
 * 广告函数
**/
function get_ads($cid,$num=0)
{
	global $dosql;
	$ads = array();
	$limit= $num ? " limit {$num}":"" ;
	$r = $dosql->getone("SELECT * FROM `#@__ads_category` WHERE `id`=$cid");
	if(is_array($r))
	{
		$now=GetMkTime(date("Y-m-d"));
		$dosql->execute("SELECT * FROM `#@__ads_list` WHERE `classid`=".$r['id']." AND `checkinfo`='true' 
		AND starttime<='{$now}' AND endtime>='{$now}'
		ORDER BY orderid DESC {$limit}", $r['id']);
		while($row = $dosql->getarray($r['id']))
		{
			if($row['admode'] == 'image')
			{
				if($row['linkurl'])
				{
					$linkurl=$row['linkurl'];
					$ads[$row['id']] = '<a href="'.$linkurl.'" target="_blank"><img src="'.$row['picurl'].'" width="'.$row['width'].'" height="'.$row['height'].'" /></a>';
				}else
				{
					$ads[$row['id']] = '<img src="'.$row['picurl'].'" width="'.$row['width'].'" height="'.$row['height'].'" />';
				}
				
			}	
			if($row['admode'] == 'flash')
			{
				$ads[$row['id']] = '<object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0 height='.$row['height'].' width='.$row['width'].'>
											 <param name="movie" value="'.$row['picurl'].'">
											 <param name="quality" value="high">
											 <param name="wmode" value="transparent">
											 <embed src="'.$row['picurl'].'" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="'.$row['width'].'" height="'.$row['height'].'" wmode="transparent">
											 </embed>
											 </object>';
			}	
			if($row['admode'] == 'writing')
			{
				if($row['linkurl'])
				{
					$linkurl=$row['linkurl'];
					$ads[$row['id']] = '<a href="'.$linkurl.'" target="_blank">'.$row['title'].'</a>';
				}else
				{
					$ads[$row['id']] = "{$row['title']}";
				}
			}	
			if($row['admode'] == 'html')
			{
				$ads[$row['id']] = $row['adtext'];
			}	
		}
	}
	return $ads;
}


/* 获取字段值
 * string field   字段名
 * string tbname  表名
 * int    id	  id编号
 * return string
**/
function get_field_value($field, $tbname, $id)
{
	global $dosql;
	$r = $dosql->getone("SELECT `$field` FROM `#@__$tbname` WHERE `id`=$id");
	if(is_array($r))
	{
		return $r[$field];
	}
	else
	{
		return ;
	}
}

/**
 * 立刻购买
 *
 * @goods_id 　　　商品id
 * @goods_num   订购数量
 * 
**/
function NowBuyShopCartSql($goods_id, $goods_num, $goods_norm,$goods_price)
{
	global $dosql;
	$goods_price = AuthCode($goods_price,'DECODE',14,60*60*24);
	if(is_numeric($goods_price)){
	$sql="select title,picurl FROM `#@__goods` WHERE id='{$goods_id}'";
	$row=$dosql->getone($sql);
	$title=$row['title'] ?$row['title']:"";
	$picurl=$row['picurl'] ?$row['picurl']:"";
	
	$sql="select buyprice FROM `#@__goodsattr` WHERE goodsid='{$goods_id}' and attrname='{$goods_norm}'";
	$attr_row=$dosql->getone($sql);
	$buyprice=$attr_row['buyprice'] ?$attr_row['buyprice']:0;
	$sql = "INSERT INTO `#@__goodsshopcart` (`gtitle`,`gpicurl`,`price`,`gid`,`num`,`uid`,`Status`,`norm`,`buyprice`) 
	VALUES ('{$title}','{$picurl}','".$goods_price."','".$goods_id."','".$goods_num."','".$_COOKIE['userid']."','cart','".$goods_norm."','{$buyprice}')";
	$dosql->ExecNoneQuery($sql);
	$cart_id=$dosql->GetLastID();
	
	$sql1 = "select gid from `#@__goodsshopcart`,`#@__goods` where `#@__goods`.id = `#@__goodsshopcart`.gid AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and Status = 'cart'";
	$dosql->Execute($sql1,1);
	echo "{\"nums\":\"".$dosql->GetTotalRow(1)."\",\"act\":\"1\",\"cart_id\":\"".$cart_id."\"}";
	}
}

/**
 * 积分换购
 *
 * @goods_id 　　　商品id
 * @goods_num   订购数量
 * 
**/
function PointsConvertShopCartSql($goods_id, $goods_num, $goods_norm,$goods_price)
{
	global $dosql;
	$userid = $_COOKIE['userid'];
	/*会员积分*/
	$jifen=getMemberPoint();
	$sql="select title,picurl,need_integral FROM `#@__goods` WHERE id='{$goods_id}' and need_integral>0";
	$row=$dosql->getone($sql);
	if(empty($row))
	{
			echo "{\"error\":1}";die;
	}
	$title=$row['title'] ?$row['title']:"";
	$picurl=$row['picurl'] ?$row['picurl']:"";
	$need_integral=(int)$row['need_integral'];//每个产品所需积分
	$tot_need_integral=$need_integral*$goods_num;//总共消耗积分
	if($jifen<$tot_need_integral)//积分不够
	{
			echo "{\"points\":1}";die;
	}
	

	$sql="select buyprice FROM `#@__goodsattr` WHERE goodsid='{$goods_id}' and attrname='{$goods_norm}'";
	$attr_row=$dosql->getone($sql);
	$buyprice=$attr_row['buyprice'] ?$attr_row['buyprice']:0;
	
	
	$sql = "INSERT INTO `#@__goodsshopcart` (`gtitle`,`gpicurl`,`price`,`gid`,`num`,`uid`,`Status`,`norm`,`buyprice`,`consume_points`) 
	VALUES ('{$title}','{$picurl}','".$goods_price."','".$goods_id."','".$goods_num."','".$_COOKIE['userid']."','cart','".$goods_norm."','{$buyprice}','{$need_integral}')";
	$dosql->ExecNoneQuery($sql);
	$cart_id=$dosql->GetLastID();
	
	
	echo "{\"cart_id\":\"".$cart_id."\"}";die;
}
?>