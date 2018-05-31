<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/ads_category.php');

/* 此页公共变量 */
$tbname	  = '#@__ads_category';
$act 	  = isset($act) ? $act : 'list';
$parentid = isset($parentid) ? $parentid : 0;

/* 广告位置列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("ads_category_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` WHERE 1=1 ";
	if(isset($parentid))
	{
		$sql .= "AND parentid=".$parentid;
	}
	else
	{
		$sql .= "AND parentid=0";
	}
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND classname like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= " order by orderid desc";
	$info = $dopage->getpage($sql);
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('ads_category.html');
}

/* 添加广告位置界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("ads_category_add");
	
	$class_info = array();
	$class_info = getallcat($tbname, 'id');

	if (!isset($parentid)) $parentid = 0;
	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	
	$smarty->display('ads_category_add.html');
}

/* 添加广告位置 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("ads_category_add");
	
	$parentstr	= getparentstr($tbname, $parentid);
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
		
	$sql = "INSERT INTO `$tbname` (
									`parentid`,
									`parentstr`,
									`classname`,
									`orderid`,
									`checkinfo`,
									`description`,
									`temp`
								) VALUES (
									'$parentid',
									'$parentstr',
									'$classname',
									'$orderid',
									'$checkinfo',
									'$description',
									'$temp'
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'add', 'ads_position');
		showsucceed($_LANG['php']['add_succeed'], '','ads_category.php?act=add&parentid='.$parentid);
		exit();
	}
}



/* 修改广告位置界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("ads_category_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$class_info = array();
	$class_info = getallcat($tbname, 'id');

	$smarty->assign("info"		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("js"        , $_LANG['js']);
	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('ads_category_edit.html');

}

/* 修改广告位置 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("ads_category_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
		
	$parentstr	= getparentstr($tbname, $parentid);								
	$sql = "UPDATE `$tbname` SET 
								`parentid`   = '$parentid',
								`parentstr`  = '$parentstr',
								`classname`  = '$classname',
								`orderid`    = '$orderid',
								`checkinfo`  = '$checkinfo',
								`description`= '$description',
								`temp`  = '$temp'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'edit', 'ads_position');
		showsucceed($_LANG['php']['add_succeed'], '','ads_category.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除广告位置 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("ads_category_del");
	
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if (!is_array($id))
	{
		$id = explode(",", $id);
	}	

	foreach ($id as $v)
	{
		$r = $dosql->getone("SELECT `classname` FROM `$tbname` WHERE `id` = $v ");
		$classname = empty($r['classname']) ? '' : $r['classname'];
		
		//添加日志
		insert_log($classname, 'del', 'ads_position');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE (`id` = $v or `parentid` = $v  or parentstr like '%,$v,%') ");
	}
	
	
	$from = dencode64($from);
	header("location:$from");
	exit();
}
/* 更新分类排序 */
if ($act == 'uporder')
{
	foreach($ids as $k => $v)
	{
		$dosql->ExecNoneQuery("UPDATE `$tbname` SET orderid=".$orderid[$k]." WHERE id=$v");
	}
	$from = dencode64($from);
	header("location:$from");
}
?>