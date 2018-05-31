<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(ADMIN_INC . '/inc_menu.php');
include_once(ADMIN_INC . '/inc_privilege.php');
include_once(LCSHOP_LANG . 'admin/role.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/privilege.php');
include_once(LCSHOP_LANG . 'admin/allot_privilege.php');

/* 此页公共变量 */
$tbname	= '#@__admin_role';
$act = isset($act) ? $act : 'list';

/* 管理员角色列表 */
if ($act == 'list')
{
	//验证权限
	chk_privilege("role_manage");
	
	$info = array();
	$sql="SELECT * FROM `$tbname`  WHERE 1=1 ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND rolename like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$info=$dopage->getpage($sql);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('role_list.html');
}

/* 添加角色界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("role_add");
	
    $smarty->assign('menu', getmenu());	
	
	$smarty->assign("lang", $_LANG);
	$smarty->display('role_add.html');
}


/* 添加角色 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("role_add");
	if($rolename=='')
	{
		ShowMsg($_LANG['js']['rolename'], '1');
		exit();
	}
	
	if($roledescription=='')
	{
		ShowMsg($_LANG['js']['roledescription'], '1');
		exit();
	}
	if(!isset($pri))
	{
		$pri = '';
	}
	else
	{
		$pri = implode(",", $pri);
	}

	$sign=(int)$sign;
	$sql = "INSERT INTO `$tbname` (rolename, roledescription, privilege,sign) VALUES ('$rolename', '$roledescription', '$pri','{$sign}')";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($rolename, 'add', 'role');
		showsucceed($_LANG['php']['add_succeed'], '','role.php?act=add');
		exit();
	}
}

/* 删除角色 */
if ($act == 'subdel')
{
	//验证权限
	chk_privilege("role_del");
	
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '-1');
		exit();
	}

	
	if (!is_array($id))
	{
		$id = explode(",", $id);
	}	
	foreach ($id as $v)
	{
		$r = $dosql->getone("SELECT `rolename` FROM `$tbname` WHERE `id` = $v");
		//添加日志
		insert_log($r['rolename'], 'del', 'role');
		$dosql->ExecNoneQuery("DELETE FROM `$tbname` WHERE `id` =$v");
	}
	
	header("location:role.php?act=list");
	exit();
}

/* 角色修改页面 */
if ($act == 'edit')
{	
	//验证权限
	chk_privilege("role_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['js']['nocheck'], '1');
		exit();
	}
	//获取该权限
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id`=".$id);
	$privilege_arr = explode(",", $info['privilege']);
	$info_admin = $dosql->getall("SELECT * FROM `#@__admin` WHERE `id`<>1 order by `id` desc");
	
	$smarty->assign('info_admin', $info_admin);	
	
	$smarty->assign('info'      , $info);	
    $smarty->assign('menu'		, getmenu($privilege_arr));	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('role_edit.html');
}

/* 修改角色 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("role_edit");
	
	$pri 				= isset($pri) ? implode(",", $pri) : '';
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['js']['nocheck'], '1');
		exit();
	}
	
	if($rolename=='')
	{
		showmsg($_LANG['js']['rolename'], '1');
		exit();
	}
	
	if($roledescription=='')
	{
		showmsg($_LANG['js']['roledescription'], '1');
		exit();
	}
	
	if(isset($userid) && is_array($userid))
	{
		foreach($userid as $val)
		{
			$dosql->execnonequery("UPDATE `#@__admin` SET `privilege`='$pri', `role_id`='$id' WHERE `id` = $val");
		}
	}
	$sign=(int)$sign;
	$dosql->execnonequery("UPDATE `$tbname` SET `rolename`='$rolename', `roledescription`='$roledescription', `privilege`='$pri',`sign`='{$sign}' WHERE `id` = $id ");
	
	//添加日志
	insert_log($rolename, 'edit', 'role');
	showsucceed($_LANG['php']['edit_succeed'], '','role.php?act=edit&id='.$id);
	exit();

}

?>