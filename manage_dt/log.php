<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/log.php');
include_once(LCSHOP_LANG . 'admin/index.php');

/* 此页公共变量 */
$tbname	= '#@__admin_log';
$act 	= isset($act)    ? $act    : 'list';
$action = isset($action) ? $action : '';

if($act == 'list')
{
	//验证权限
	chk_privilege("log_manage");
		
	$info 	= array();
	$sql 	= "SELECT * FROM `$tbname` WHERE 1=1 "; 
	if (isset($userid) && is_numeric($userid))
	{
		$sql .= " AND `userid` = $userid";
	}
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND username like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql   .= " order by `id` desc";
	$info=$dopage->getpage($sql);
	
	$smarty->assign("lang", $_LANG);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("info", $info);
	$smarty->assign("from", encode64(getcururl()));	
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('log.html');
	
}
else if($act == 'subdel')
{
	//验证权限
	chk_privilege("log_del");
	
	if(empty($id))
	{
		$arrtips = JSON(array('0',$_LANG['php']['inexistence']));
		exit($arrtips);
		
	}
	if(is_array($id))
	{
		$id = implode(",", $id);
	}
	
	$sql = "DELETE FROM `$tbname` WHERE `id` in( $id ) ";
	$dosql->execnonequery($sql);
	$from = dencode64($from);
	header("location:$from");
}

?>