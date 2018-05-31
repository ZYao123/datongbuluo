<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(ADMIN_INC . '/inc_menu.php');
include_once(ADMIN_INC . '/inc_privilege.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/privilege.php');
include_once(LCSHOP_LANG . 'admin/allot_privilege.php');

/* 此页公共变量 */
$tbname = '#@__admin';
$act 	 = isset($act) 		? $act 		: 'list';

/* 管理员列表 */
if ($act == 'list')
{
	//验证权限
	chk_privilege("admin_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " WHERE username like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= "order by id desc";
	
	$info=$dopage->GetPage($sql);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('privilege_list.html');
}

/* 添加管理员界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("admin_add");
		
	$role_info = array();
	$role_info = $dosql->getall("SELECT * FROM `#@__admin_role` order by id desc");
	
	$smarty->assign("role_info", $role_info);
	
	$smarty->assign("js"       , $_LANG['js']);
	$smarty->assign("lang"     , $_LANG);
	$smarty->display('privilege_add.html');
}

/* 验证管理员是否存在 */
if ($act == 'usernameexist')
{
	if(empty($_GET['username']))
	{
		echo 1;
	}
	if($dosql->getone("SELECT id FROM `$tbname` WHERE username='".$_GET['username']."'"))
	{
		echo 1;
	}
}

/* 添加管理员 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("admin_add");

	$loginip 	= getip();
	$logintime 	= '';
	$regtime   	= time();
	$checkadmin = true;
	

	if(!is_username($username))
	{
		showmsg($_LANG['js']['usernameformat'], '1');
	}
	
	
	if(!is_username($password))
	{
		showmsg($_LANG['js']['passwordformat'], '1');
		exit();
	}
	
	if($password != $repassword)
	{
		showmsg($_LANG['js']['nopassword'], '1');
		exit();
	}
	
	if(!is_email($email))
	{
		showmsg($_LANG['js']['emailformat'], '1');
		exit();
	}
	

	if(!is_mobile($mobile))
	{
		showmsg($_LANG['js']['mobileformat'], '1');
		exit();
	}
	
	if($dosql->GetOne("SELECT id FROM `$tbname` WHERE username='$username'"))
	{
		showmsg($_LANG['js']['usernameexist'], '1');
		exit();
	}

	$password  = md5(md5($_POST['password']));
	
	if($role_id>0)
	{
		$r = $dosql->getone("SELECT privilege FROM `#@__admin_role` WHERE `id` = $role_id");
		$pri = $r['privilege'];
	}
	else
	{
		$pri = '';
	}
	
	$sql = "INSERT INTO `$tbname` (username, password, loginip, logintime, regtime, checkadmin, email, mobile, privilege, role_id) VALUES ('$username', '$password', '$loginip', '$logintime', '$regtime', '$checkadmin', '$email', '$mobile', '$pri', '$role_id')";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($username, 'add', 'adminuser');

		showsucceed($_LANG['php']['add_succeed'], '','privilege.php?act=add');
		exit();
	}
}

/* 删除管理员 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("admin_del");
	
	if(empty($id))
	{
		showmsg($_LANG['js']['nocheck'], '-1');
		exit();
	}
	
	if(is_array($id))
	{
		$id = implode(",", $id);
	}

	$arr = array();
	$dosql->execute("SELECT `username` FROM `#@__admin` WHERE id in (" . $id . ") ");
	while($row = $dosql->getarray())
	{
		$arr[] = $row['username'];
	}
	$username = implode(",", $arr);
	//添加日志
	insert_log($username, 'del', 'adminuser');
	$dosql->execnonequery("DELETE FROM `$tbname` WHERE id in (" . $id . ") and id <> 1");	$from = dencode64($from);
	header("location:$from");
	exit();
}

/* 分配管理员权限页面 */
if ($act == 'allot')
{
	//验证权限
	chk_privilege("allot_priv");

	//获取该管理员权限
	$r = $dosql->GetOne("SELECT `username`,`privilege` FROM `$tbname` WHERE `id`=".$_REQUEST['id']);
	$username = $r['username'];
	$privilege_arr = explode(",", $r['privilege']);

	$smarty->assign('id'  , $_REQUEST['id']);	
    $smarty->assign('menu', getmenu($privilege_arr));	
	
	$smarty->assign("lang", $_LANG);
	$smarty->display('privilege_allot.html');
}

/* 分配管理员权限操作 */
if ($act == 'suballot')
{
	
	//验证权限
	chk_privilege("allot_priv");
	if(isset($pri))
		$pri = implode(",", $pri);
	else
		$pri = '';
	$dosql->execnonequery("UPDATE `$tbname` SET `privilege`='$pri' WHERE id=".$_GET['id']);
	
	$arr = array();
	$dosql->execute("SELECT `username` FROM `#@__admin` WHERE id in (" . $id . ") ");
	while($row = $dosql->getarray())
	{
		$arr[] = $row['username'];
	}
	$username = implode(",", $arr);
	//添加日志
	insert_log($username, 'edit', 'privilege');
	showsucceed($_LANG['php']['edit_succeed'], '','privilege.php?act=allot&id='.$id);
	exit();

}

/* 修改管理员界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("admin_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '-1');
		exit();
	}
	$info 		= array();
	$role_info 	= array();
	$info=$dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$role_info=$dosql->getall("SELECT * FROM `#@__admin_role` order by id desc");

	$smarty->assign("id", 			$id);
	$smarty->assign("info", 		$info);
	$smarty->assign("role_info", 	$role_info);
	
	$smarty->assign("js", 			$_LANG['js']);
	$smarty->assign("lang", 		$_LANG);
	$smarty->display('privilege_edit.html');
}

/* 修改管理员 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("admin_edit");
	
	if ($password != '')
	{
		if(!is_username($password))
		{
			showmsg($_LANG['js']['passwordformat'], '1');
			exit();
		}
		
		if($password != $repassword)
		{
			showmsg($_LANG['js']['nopassword'], '1');
			exit();
		}
	}
	
	if(!is_email($email))
	{
		showmsg($_LANG['js']['emailformat'], '1');
		exit();
	}
	

	if(!is_mobile($mobile))
	{
		showmsg($_LANG['js']['mobileformat'], '1');
		exit();
	}
	
	if($role_id>0)
	{
		$r = $dosql->getone("SELECT privilege FROM `#@__admin_role` WHERE `id` = $role_id");
		$pri = $r['privilege'];
	}
	else
	{
		$pri = '';
	}
	
	$sql = "UPDATE `$tbname` SET ";
	if($password!='')
	{
		$sql .= "`password`='".md5(md5($password))."', ";
	}
	$sql .= "`email`='$email', `mobile`='$mobile', `privilege`='$pri', `role_id`='$role_id' WHERE `id` = $id";
	
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($username, 'edit', 'adminuser');
		showsucceed($_LANG['php']['edit_succeed'], '','privilege.php?act=edit&id='.$id);
		exit();
	}
}
?>