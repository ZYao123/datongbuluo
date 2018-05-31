<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(ADMIN_INC . '/inc_menu.php');
include_once(ADMIN_INC . '/inc_privilege.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/member_level.php');


/* 此页公共变量 */
$tbname	= '#@__member_level';
$act 	= isset($act) ? $act : 'list';

if(isset($phone_sign_s))
{
	 $_SESSION['phone_sign']=$phone_sign_s ? 1: 0;//1:移动管理 0:所有
}
$public_where=$_SESSION['phone_sign']==1 ? " AND `$tbname`.phone='1' " : " ";

/* ajax判断会员名，手机号，邮箱的唯一性 */
if($act == 'Unique')
{
	$teval = 0;
	$id = $_GET[$_GET['id']];
	if (@$tid != '')
	{
		$sql = "SELECT id FROM `$tbname` WHERE ".$_GET['id']."='".$id."' and id <> ".$tid."";
	}
	else
	{
		$sql = "SELECT id FROM `$tbname` WHERE ".$_GET['id']."='".$id."'";
	}	
	if(empty($_GET[$_GET['id']]))
	{
		$teval = 1;
	}
	if($dosql->getone($sql))
	{
		$teval = 1;
	}
	echo $teval;
}


/* 会员等级 */
if($act == 'list')
{
	//验证权限
	chk_privilege("member_level_manage");
	 
	$info = array();
	$sql = "SELECT * FROM `$tbname` where 1=1 ";
	
	$sql .= " {$public_where} order by orderid desc";

	$info=$dopage->GetPage($sql,14);

	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('member_level_list.html');
}

/* 添加会员页面 */
if ($act == 'add')
{
	//验证权限
	
	chk_privilege("member_level_add");
	
	$smarty->assign("act"       , 'subadd');
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("from"      , $from);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("refun"     , "cfm_member_level");
	$smarty->display('member_level_add.html');
}

/* 添加会员 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("member_level_add");
	
	if($levelname=='')
	{
		showmsg($_LANG['js']['levelnameblank'], '1');
		exit();
	}
	
	if($levelprice=='')
	{
		showmsg($_LANG['js']['levelpriceblank'], '1');
		exit();
	}
	$isbuy = isset($isbuy)?$isbuy:0;
	
	$sql = "INSERT INTO `$tbname` (
									`levelname`,
									`levelprice`,
									`isbuy`,
									`ispoint`,
									`orderid`
																	
								) VALUES (
									'$levelname',
									'$levelprice',
									'$isbuy',
									'$ispoint',
									'$orderid'								
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($levelname, 'add', 'user_level');
		showsucceed($_LANG['php']['add_succeed'], '','member_level.php?act=add');
		//header("location:member.php?act=list");
		exit();
	}
}



/* 修改会员界面 */
if ($act == 'edit')
{
	//验证权限
	
	chk_privilege("member_level_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id {$public_where}");	
		
	$smarty->assign("info"		, $info);
	$smarty->assign("act"       , 'subedit');
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("id"        , $id);
	$smarty->assign("from"      , $from);
	$smarty->assign("refun"     , "cfm_member_level");
	$user_rank_mr = '<option value="0">非特殊等级</option>';
	$smarty->assign("user_rank_mr",$user_rank_mr);
	$smarty->display('member_level_edit.html');	
	

}

/* 修改会员信息*/
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("member_level_edit");
	
	if($levelname=='')
	{
		showmsg($_LANG['js']['levelnameblank'], '1');
		exit();
	}
	
	if($levelprice=='')
	{
		showmsg($_LANG['js']['levelpriceblank'], '1');
		exit();
	}
	$isbuy = isset($isbuy)?$isbuy:0;
	$sql = "UPDATE `$tbname` SET 
								`levelname`   = '$levelname',
								`levelprice`  = '$levelprice',
								`isbuy`       = '$isbuy',
								`ispoint`     = '$ispoint',
								`orderid`     = '$orderid'
								 WHERE `id`   = $id {$public_where}";
								
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($levelname, 'edit', 'user_level');
		showsucceed($_LANG['php']['edit_succeed'], '','member_level.php?act=edit&id='.$id.'&from='.$from);
		//header("location:member.php?act=edit&id=".$id);
		exit();
	}
}


/* 删除产品分类 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("member_level_del");
	 
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
		//添加日志
		$rsu = $dosql->getone("SELECT levelname FROM `$tbname` WHERE `id` = $v {$public_where}");
		$levelname = $rsu['levelname'];
		insert_log($levelname, 'del', 'user_level');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE (`id` = $v ) {$public_where}");
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>