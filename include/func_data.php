<?php
if(!defined('IN_LCSHOP'))
{
	exit('Request Error!');

}
/**
 * 返回商品月销量
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
function GetMonthSale($gid,$day=false)
{
	global $dosql;
	$starttime = (int)$day * 86400;
	$endtime = GetMkTime(date("Y-m-d H:i:s"));
	$where=$starttime!=0 ? " AND #@__goodsorder.POSTTIME >=$endtime-$starttime ": "";
	$sql = " SELECT sum(#@__goodsshopcart.num) as num FROM #@__goodsshopcart INNER JOIN #@__goodsorder
			ON #@__goodsorder.orderlistnum=#@__goodsshopcart.gorderlistnum  
			WHERE GID='{$gid}' AND `Status`='order'
			{$where}
			";
	$result=$dosql->getone($sql);
	return $result['num'] ? $result['num']:0;
}


function my_array_search($needle, $haystack) {
		 if (empty($needle) || empty($haystack)) {
			 return false;
		 }
		foreach ($haystack as $key => $value) {
			 $exists = 0;
			 foreach ($needle as $nkey => $nvalue) {
				 if (!empty($value[$nkey]) && $value[$nkey] == $nvalue) {
					 $exists = 1;
				 } else {
					 $exists = 0;
				 }
			 }
			 if ($exists) return $key+1;
		 }
		 
		return false;
	 }

/**
 * 返回导航
 *
 * @return  position 导航位置
 * @return  num 商品数量
 */
function GetNav($position=false,$num=false)
{
	global $dosql;
	$where="";
	$position and  $where.=" AND position = '{$position}'";
	$limit=$num ? " LIMIT {$num} ": "";
	$sql="SELECT * FROM `#@__nav` WHERE `checkinfo`='true' {$where} ORDER BY orderid DESC {$limit}";
	$result = $dosql->getall($sql);
	return $result;
}

/**
 * 返回广告列表
 *
 * @return  classid 广告位置
 * @return  num 商品数量
 * @return  admode 展示类型
 */
function GetAds($classid=0,$admode=false,$num=false)
{
	global $dosql;
	$where="";
	$admode and $where.=" AND admode='{$admode}' ";
	$limit=$num ? " LIMIT {$num} ": "";
	$result = array();
	$time = GetMkTime(date("Y-m-d"));
	$result = $dosql->getall("SELECT id,picurl,title,linkurl FROM `#@__ads_list` WHERE `classid` = {$classid} AND `checkinfo`='true' AND `starttime`<=$time AND `endtime`>=$time  {$where} ORDER BY orderid DESC {$limit}");
	return $result;
}



/*
 * 购物券
**/
function get_point($cid,$num=0,$page=false,$phone=false)
{
	global $dosql,$dopage;
	$result = array();
	($page and $num) or $limit=$num ? " LIMIT {$num} ": "";
	$where="";
	$cid=(int)$cid;
	$cid and $where.=" AND `#@__point`.classid='{$cid}'";
	$now=GetMkTime(date("Y-m-d"));
	$sql = "SELECT `#@__point`.endtime,`#@__point`.id,`#@__point`.title,`#@__point`.picurl,`#@__point`.linkurl,count(`#@__member_point`.id) as tot 
			FROM `#@__point` left join `#@__member_point` on #@__point.id=#@__member_point.p_id 
			WHERE checkinfo='true' AND starttime<='{$now}'  AND endtime>'{$now}' {$where} GROUP BY `#@__point`.ID ORDER BY orderid DESC {$limit}";
	if($page and $num)
	{
		$result =$dopage->GetPage($sql,$num);
		if($phone)
		{
			$page=$dopage->getlist();
		}else
		{
			$page=$dopage->GetList1_S();
		}
		foreach($result as $k=>$v)
		{
			$result[$k]['day']=(int)(($v['endtime']-$now)/86400);
		}
		$result and $result=array("info"=>$result,"page"=>$page);
	}else
	{
		$result = $dosql->getall($sql);
		foreach($result as $k=>$v)
		{
			$result[$k]['day']=(int)(($v['endtime']-$now)/86400);
		}
	}
	return $result;
}
/**获取购物券详细**/
function get_point_show($id)
{
	global $dosql;
	$id=(int)$id;
	$now=GetMkTime(date("Y-m-d"));
	$sql = "SELECT `#@__point`.id,title,picurl,integral,endtime,content,count(`#@__member_point`.id) as tot FROM `#@__point` left join `#@__member_point` on #@__point.id=#@__member_point.p_id WHERE checkinfo='true' AND starttime<='{$now}'  AND endtime>='{$now}' AND `#@__point`.id='{$id}'
	GROUP BY `#@__member_point`.p_id
	";
	$info = $dosql->getone($sql);	
	if($info['endtime'])
	{
		$info['date']=getdatemk($info['endtime']);
		$info['date'].=" 23:59:00";
	}
	return $info;
}
/*
 * 会员购物券(使用中的)
**/
function get_menmberPoint()
{
	global $dosql;
	$now=GetMkTime(date("Y-m-d"));
	$sql="SELECT #@__member_point.password,#@__point.title,#@__point.id,
	#@__point.endtime,
	#@__point.money,
	#@__point.meet_money
	FROM `#@__member_point` LEFT JOIN #@__point ON #@__point.id=`#@__member_point`.p_id  
	WHERE `#@__member_point`.m_id = '{$_COOKIE['userid']}' AND `#@__point`.checkinfo='true' AND starttime<='{$now}'  AND endtime>'{$now}'
	AND #@__member_point.o_id=-1
	";
	$membercoll = $dosql->getone($sql);
	if($membercoll)
	{
	$membercoll['day']=(int)(($membercoll['endtime']-$now)/86400);
	}
	return $membercoll;
}
/*
 * 获取对应支付方式的支付信息
 #@__payment表
 $id ID
**/
function get_pay_msg($alipay)
{
	global $dosql;
	$row = $dosql->getone("SELECT * FROM `#@__payment` WHERE code='{$alipay}'");
	return $row;
}
/*
 * 获取友情链接

**/
function get_link($img=false,$num=false)
{
	global $dosql;
	$where="";
	$img and $where.=" AND picurl!='' ";
	$limit=$num ? " LIMIT {$num} ": "";
	$row = $dosql->getall("SELECT webname,webnote,picurl,linkurl FROM `#@__link` WHERE checkinfo='true' {$where} ORDER BY orderid DESC {$limit}");
	return $row;
}

/*
 * 获取会员当前积分

**/
function getMemberPoint()
{
	global $dosql;
	$userid = $_COOKIE['userid'];
	//积分
	$sql="select sum(#@__goodsorder.integral) as integral,sum(#@__goodsshopcart.consume_points) as consume_points
		 from #@__goodsorder RIGHT JOIN #@__goodsshopcart
		on #@__goodsorder.orderlistnum=#@__goodsshopcart.gorderlistnum
		and  #@__goodsorder.userid=#@__goodsshopcart.uid
		 where #@__goodsshopcart.uid='{$userid}'";
	$result=$dosql->Getone($sql);
	$jifen=$result['integral']-$result['consume_points'];
	return $jifen;
}


/*
 * 存入会员浏览历史
// id 商品ID
**/
function depositMemberHistory($id)
{
	global $dosql;
	if($_COOKIE['userid'] and $id)
	{
		$userid = $_COOKIE['userid'];
		$sql = "REPLACE INTO `#@__member_good` VALUES ('{$userid}','{$id}',now(),1)";
		$dosql->query($sql);
	}
}
include("func_article_data.php");
include("func_goods_data.php");
include("func_brand_data.php");
include("func_member.php");
?>