<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/order.php');

/* 此页公共变量 */
$tbname	= '#@__goodsorder';
$act 	= isset($act) ? $act : 'list';

/* 订单列表 */
if($act == 'list')
{
	
	if (@$endtime == '' && @$starttime == '')
	{
		$starttime = date("Y-m-d",strtotime('-30 day'));	
		$endtime = date("Y-m-d",time());	
	}	
	$smarty->assign("endtime",$endtime);
	$smarty->assign("starttime",$starttime);
	$smarty->assign("lang", $_LANG);
	$smarty->display('chart_order.html');
}
elseif ($act == 'xml')
{
	
	$search = '';
	if (@$endtime != '' && @$starttime != '')
	{
		$endtime = GetMkTime($endtime);
		$starttime = GetMkTime($starttime);
		$search = " and posttime >= ".$starttime." and posttime<= ".$endtime." ";
	}
	
	
	$info = array();
	/*验证登录用户角色标识*/
	$order_where="";
	if($_SESSION['sign'])//订单
	{
		$order_where="  AND `#@__goodsorder`.orderlistnum IN (select gorderlistnum from #@__goodsshopcart inner join 
		#@__goods 
		on #@__goodsshopcart.gid=#@__goods.id
		where #@__goods.uid='{$_SESSION['adminid']}'
		group by #@__goodsshopcart.gorderlistnum) ";
	}
	/*验证登录用户角色标识END*/
	//待付款
	$sql2 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 0 ".$search." {$order_where}";
	$payfor = $dosql->GetOne($sql2);
	$countPayfor = $payfor['count(*)'];
	$smarty->assign("countPayfor", $countPayfor);
	$smarty->assign("checkinfo0", iconv("utf-8","gb2312",$_LANG['checkinfo0']));
	
	//待发货
	$sql4 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 1 ".$search." {$order_where}";
	$Ship = $dosql->GetOne($sql4);
	$countShip = $Ship['count(*)'];
	$smarty->assign("countShip", $countShip);	
	$smarty->assign("checkinfo1", iconv("utf-8","gb2312",$_LANG['checkinfo1']));
	
	//待收货
	$sql3 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 2 ".$search." {$order_where}";
	$Receipt = $dosql->GetOne($sql3);
	$countReceipt = $Receipt['count(*)'];
	$smarty->assign("countReceipt", $countReceipt);		
	$smarty->assign("checkinfo2", iconv("utf-8","gb2312",$_LANG['checkinfo2']));
	
	//已收货
	$sql4 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 3 ".$search." {$order_where}";
	$Receipted = $dosql->GetOne($sql4);
	$countReceipted = $Receipted['count(*)'];
	$smarty->assign("countReceipted", $countReceipted);		
	$smarty->assign("checkinfo3", iconv("utf-8","gb2312",$_LANG['checkinfo3']));	
	

	//其它状态
	$sql5 = "SELECT count(*) FROM `$tbname` where delstate='' and not checkinfo in(0,1,2,3) ".$search." {$order_where}";
	$Other = $dosql->GetOne($sql5);
	$countOther = $Other['count(*)'];
	
	$smarty->assign("countOther", $countOther);		
	$smarty->assign("checkinfoOther", iconv("utf-8","gb2312",$_LANG['checkinfoOther']));	
	$smarty->display('Charts/Pie3D.xml');

	
		
}
?>