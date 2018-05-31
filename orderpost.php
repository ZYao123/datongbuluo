<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
require_once(dirname(__FILE__).'/include/checkmember.php');
include_once(LCSHOP_LANG . '/orderpost.php');
include_once('bottom.php');
if (@$aid == '')
{
	$smarty->assign("error",$_LANG['error']['addrnone']);
	$smarty->display('505.html');
	exit();	
}

$addr = array();
$addr = $dosql->getone("select * from `#@__member_address` where id = ".$aid);


if($addr)
{
	$rec_name    = $addr["rec_name"];
	$cur_address = $addr['road_address'].$addr["cur_address"];
	
	$povearr= explode(' ',$addr['road_address']); 
	$povestr = implode('&',$povearr);
	$addressstr = $povestr.'&'.$addr["cur_address"];
	$phone       = $addr["phone"];
	$telephone   = $addr["telephone"];
	$zipcode     = $addr["zipcode"];
	
}
else
{
	$smarty->assign("error",$_LANG['error']['addrnone']);
	$smarty->display('505.html');
	exit();
}

$totalprice = AuthCode($totalprice,'DECODE',14,60*60*24);//总额
$yunfei = 	AuthCode($yunfei,'DECODE',14,60*60*24);//运费
if(is_numeric($totalprice) && is_numeric($yunfei)){
//生成订单编号
$orderlistnum = time()+rand(1,9999);
$orderlistnum.=$_COOKIE['userid'];
//更新购物车表
$sql = "select `#@__goodsshopcart`.id, `#@__goodsshopcart`.gid,`#@__goods`.picurl,`#@__goods`.title,`#@__goodsattr`.price,`#@__goods`.integral 
from `#@__goodsshopcart`,`#@__goods`, 
`#@__goodsattr` where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid
AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm
AND `#@__goods`.id = `#@__goodsshopcart`.gid AND `#@__goodsshopcart`.id in ( ".$cartids." ) and `#@__goodsshopcart`.Status = 'cart' 
AND `#@__goodsshopcart`.uid='{$_COOKIE['userid']}'";
$dosql->Execute($sql);
$totalnum = $dosql->GetTotalRow();
if ($totalnum != 0)
{
	$cart_info = array();
	while ($v = $dosql->GetArray())
	{
		$price = $v['price'];
		$sql0 = "UPDATE `#@__goodsshopcart` SET `gtitle` = '".$v['title']."' , `gpicurl` = '".$v['picurl']."' ,`gorderlistnum` = '$orderlistnum' ,`price` = '$price', `edit_date`=now(),Status = 'order',gintegral = '".$v['integral']."' WHERE id = " . $v['id'];
		$dosql->execnonequery($sql0);
	}	
	
	$posttime = GetMkTime(time());
	$sql = "INSERT INTO `#@__goodsorder` (`username`,`userid`,`rec_name`,`cur_address`,`telephone`,`phone`,`zipcode`,`postmode`,`orderamount`,`buyremark`,`posttime`,`checkinfo`,`orderlistnum`,`Invoice`,`companyname`, `cost`,`message`,`addressstr`) VALUES ('".AuthCode($_COOKIE['username'])."','".$_COOKIE['userid']."','$rec_name','$cur_address','$telephone','$phone','$zipcode','$postmode','$totalprice','$buyremark','$posttime','0','$orderlistnum','$Invoice','$companyname','$yunfei','".$message."','".$addressstr."')";
	if ($dosql->execnonequery($sql) )
	{
		$order_id=$dosql->GetLastID();//更改购物券信息
		
		$sql="UPDATE `#@__member_point` SET o_id='{$order_id}' WHERE m_id='{$_COOKIE['userid']}' and  `password`='{$pointnum}'";
		$dosql->QueryNone($sql);
		
		if($cfg_delhouse==0)//用户设为待付款减库存
		{
			/*待付款减库存*/
			$sql="SELECT `gid`,`num`,`norm` FROM `#@__goodsshopcart` 
			WHERE `gorderlistnum`='{$orderlistnum}' AND `Status`='order'";
			$row=$dosql->GETALL($sql);
			foreach($row as $v)
			{
				$sql="UPDATE `#@__goodsattr` SET `housenum`=housenum-{$v['num']}
					WHERE `goodsid`='{$v['gid']}' AND `attrname`='{$v['norm']}'" ;
				$dosql->execnonequery($sql);
				if($v['norm']=="")//再更新商品表的库存字段
				{
					$sql="UPDATE `#@__goods` SET `housenum`=housenum-{$v['num']}
					WHERE `id`='{$v['gid']}'" ;
					$dosql->execnonequery($sql);
				}
			}
	  	}
		
		//header("Location:pay.php?olnum=".$orderlistnum);
		header("Location:member.php?act=default");
	}

}
else
{
	
	//$smarty->assign("error",$_LANG['error']['shopcartnone']);
	//$smarty->display('405.html');
	header("Location:member.php?act=default");
	exit();	
}

}else{
	$smarty->assign("error",$_LANG['error']['shopcartnone']);
	$smarty->display('505.html');
	//header("Location:shopcart.php?act=list");
	exit();	
}
?>
