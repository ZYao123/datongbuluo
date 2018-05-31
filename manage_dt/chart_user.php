<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/chart_user.php');

/* 此页公共变量 */
$act 	= isset($act) ? $act : 'list';

/* 订单列表 */
if($act == 'list')
{
	if (@$time1 == '')
	{
		$time1 = date("Y-m",time());	
	}	
	$smarty->assign("time1",$time1);
	$smarty->assign("time2",@$time2);
	$smarty->assign("time3",@$time3);
	$smarty->assign("time4",@$time4);
	$smarty->assign("time5",@$time5);
	$smarty->assign("lang", $_LANG);
	
	$smarty->display('chart_user.html');
}
elseif ($act == 'xml')
{

	//全部会员数
	$sqlall = "select count(id) from `#@__member`";
	$rowall = $dosql->GetOne($sqlall);
	$reg_count[] = $rowall['count(id)'];
	
	//全部下订会员数
	$sqlall_1 = "select count(distinct userid) from `#@__member` , `#@__goodsorder` where `#@__member`.id = `#@__goodsorder`.userid";
	$rowall_1 = $dosql->GetOne($sqlall_1);
	$order_count[] = $rowall_1['count(distinct userid)'];	
	$month[] = iconv("utf-8","gb2312",'全部');	

	if (@$time1 != '')
	{
		$time1_s = GetMkTime($time1."-1");
		$time1_e = GetMkTime($time1."-31");
		$month[] = iconv("utf-8","gb2312",date('m',$time1_s).'月');

		//全部会员数
		$sql1 = "select count(id) from `#@__member` where regtime >= ".$time1_s." and regtime<= ".$time1_e."";
		$row1 = $dosql->GetOne($sql1);
		$reg_count[] = $row1['count(id)'];
		
		//全部下订会员数
		$sql1_1 = "select count(distinct userid) from `#@__member` , `#@__goodsorder` where `#@__member`.id = `#@__goodsorder`.userid and `#@__member`.regtime >= ".$time1_s." and `#@__member`.regtime<= ".$time1_e."";
		$row1_1 = $dosql->GetOne($sql1_1);
		$order_count[] = $row1_1['count(distinct userid)'];			
		
	}
	if (@$time2 != '')
	{
		$time2_s = GetMkTime($time2."-1");
		$time2_e = GetMkTime($time2."-31");
		$month[] = iconv("utf-8","gb2312",date('m',$time2_s).'月');

		//全部会员数
		$sql2 = "select count(id) from `#@__member` where regtime >= ".$time2_s." and regtime<= ".$time2_e."";
		$row2 = $dosql->GetOne($sql2);
		$reg_count[] = $row2['count(id)'];
		
		//全部下订会员数
		$sql2_1 = "select count(distinct userid) from `#@__member` , `#@__goodsorder` where `#@__member`.id = `#@__goodsorder`.userid and `#@__member`.regtime >= ".$time2_s." and `#@__member`.regtime<= ".$time2_e."";
		$row2_1 = $dosql->GetOne($sql2_1);
		$order_count[] = $row2_1['count(distinct userid)'];			
		
	}	
	if (@$time3 != '')
	{
		$time3_s = GetMkTime($time3."-1");
		$time3_e = GetMkTime($time3."-31");
		$month[] = iconv("utf-8","gb2312",date('m',$time3_s).'月');

		//全部会员数
		$sql2 = "select count(id) from `#@__member` where regtime >= ".$time3_s." and regtime<= ".$time3_e."";
		$row2 = $dosql->GetOne($sql2);
		$reg_count[] = $row2['count(id)'];
		
		//全部下订会员数
		$sql2_1 = "select count(distinct userid) from `#@__member` , `#@__goodsorder` where `#@__member`.id = `#@__goodsorder`.userid and `#@__member`.regtime >= ".$time3_s." and `#@__member`.regtime<= ".$time3_e."";
		$row2_1 = $dosql->GetOne($sql2_1);
		$order_count[] = $row2_1['count(distinct userid)'];			
		
	}		
	if (@$time4 != '')
	{
		$time4_s = GetMkTime($time4."-1");
		$time4_e = GetMkTime($time4."-31");
		$month[] = iconv("utf-8","gb2312",date('m',$time4_s).'月');

		//全部会员数
		$sql2 = "select count(id) from `#@__member` where regtime >= ".$time4_s." and regtime<= ".$time4_e."";
		$row2 = $dosql->GetOne($sql2);
		$reg_count[] = $row2['count(id)'];
		
		//全部下订会员数
		$sql2_1 = "select count(distinct userid) from `#@__member` , `#@__goodsorder` where `#@__member`.id = `#@__goodsorder`.userid and `#@__member`.regtime >= ".$time4_s." and `#@__member`.regtime<= ".$time4_e."";
		$row2_1 = $dosql->GetOne($sql2_1);
		$order_count[] = $row2_1['count(distinct userid)'];			
		
	}		
	if (@$time5 != '')
	{
		$time5_s = GetMkTime($time5."-1");
		$time5_e = GetMkTime($time5."-31");
		$month[] = iconv("utf-8","gb2312",date('m',$time5_s).'月');

		//全部会员数
		$sql2 = "select count(id) from `#@__member` where regtime >= ".$time5_s." and regtime<= ".$time5_e."";
		$row2 = $dosql->GetOne($sql2);
		$reg_count[] = $row2['count(id)'];
		
		//全部下订会员数
		$sql2_1 = "select count(distinct userid) from `#@__member` , `#@__goodsorder` where `#@__member`.id = `#@__goodsorder`.userid and `#@__member`.regtime >= ".$time5_s." and `#@__member`.regtime<= ".$time5_e."";
		$row2_1 = $dosql->GetOne($sql2_1);
		$order_count[] = $row2_1['count(distinct userid)'];			
		
	}		
	
	
/*	print_r($month);
	echo "<br>";
	print_r($reg_count);
	echo "<br>";
	print_r($order_count);*/
	$smarty->assign("xmcaption", iconv("utf-8","gb2312",$_LANG['client_statistics']));	
	$smarty->assign("reg_user", iconv("utf-8","gb2312",$_LANG['reg_user']));
	$smarty->assign("order_user", iconv("utf-8","gb2312",$_LANG['order_user']));
	$smarty->assign("month", $month);
	$smarty->assign("reg_count", $reg_count);
	$smarty->assign("order_count", $order_count);
	$smarty->display('Charts/MSColumn3D.xml');
}
?>