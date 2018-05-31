<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');

/* 此页公共变量 */
$tbname	= '#@__goodsorder';
if ($id != '')
{
	$info = '';
	$row = array();
	$Courierid = '';
	$postid = '';
	$sql = "SELECT * FROM `$tbname` where id = ".$id." order by id desc";
	$row = $dosql->getone($sql);
	if ($row != '')
	{
		$Courierid = $row['Courierid'];
		$postid = $row['postid'];
	}
	if ($Courierid != '' && $postid != '')
	{
		$info = '';
	}
	else
	{
		$info = '条件不足，无法查询！';
	}
}
else
{
	$info = '非法操作！';
}
$smarty->assign("type", '2');
$smarty->assign("expressid", $Courierid);
$smarty->assign("expressno", $postid);
$smarty->assign("info", $info);
$smarty->display('wuliu.html');


?>