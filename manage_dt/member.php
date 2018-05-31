<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(ADMIN_INC . '/inc_menu.php');
include_once(ADMIN_INC . '/inc_privilege.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/member.php');


/* 此页公共变量 */
$tbname	= '#@__member';
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


/* 会员列表 */
if($act == 'list')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_manage") : chk_privilege("member_list_manage");
	 
	$where='';
	
	$url = 'excelmember.php?act=list';
	
	if(@$kstime!='' && @$jstime!=''){
		$starttime = strtotime($kstime.' 00:00:00');
		$endtime = strtotime($jstime.' 23:59:59');
		if($endtime>=$starttime){
		   $where.=" and `$tbname`.`regtime`>='{$starttime}' and  `$tbname`.`regtime`<='{$endtime}' ";	
		   $url.='&starttime='.$starttime.'&endtime='.$endtime;
		}else{
			echo '<script>
			   alert("请选择正确的时间区间");
			  window.history.back(-1); 
			</script>';	 
    	}
	   $url.='';	
	}else if(@$kstime!='' && @$jstime==''){
		$starttime = strtotime($kstime.' 00:00:00');
		$where.=" and `$tbname`.`regtime`>='{$starttime}' ";
		$url.='&starttime='.$starttime;
	}else if(@$kstime=='' && @$jstime!=''){
		$endtime = strtotime($jstime.' 23:59:59');
		$where.=" and `$tbname`.`regtime`<'{$endtime}' ";
		$url.='&endtime='.$endtime;
	
	} 
	 
	if(isset($user_rank) && $user_rank>0){
	    $where.=" and `$tbname`.`user_rank`='".$user_rank."' ";	
		$url.='&user_rank='.$user_rank;
    } 
	 
	$info = array();
	$sql = "SELECT * FROM `$tbname` where 1=1 ".$where;
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND username like '%".$keyword."%'";
		$url.='&keyword='.$keyword;
	}
	else
	{
		$keyword = '';
		
	}
	
	
	$sql .= " {$public_where} order by id desc";

	$info=$dopage->GetPage($sql,14);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("url"  , $url);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('member_list.html');
}

/* 添加会员页面 */
if ($act == 'add')
{
	//验证权限
	
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_add") : chk_privilege("member_list_add");
	
	$smarty->assign("act"       , 'subadd');
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("from"      , $from);
	$smarty->assign("refun"     , "cfm_member");
	$smarty->display('member_add.html');
}

/* 添加会员 */
if ($act == 'subadd')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_add") : chk_privilege("member_list_add");
	
	if(!is_Uname($username))
	{
		showmsg($_LANG['js']['usernameformat'], '1');
		exit();
	}
	if(!is_email($email))
	{
		showmsg($_LANG['js']['emailblank'], '1');
		exit();
	}
	if($password=='')
	{
		showmsg($_LANG['js']['password'], '1');
		exit();
	}	
	if($repassword=='')
	{
		showmsg($_LANG['js']['repassword'], '1');
		exit();
	}	
	if($password != $repassword)
	{
		showmsg($_LANG['js']['nopassword'], '1');
		exit();
	}
	if($mobile!='')
	{	
		if(!is_mobile($mobile))
		{
			showmsg($_LANG['js']['mobileformat'], '1');
			exit();
		}
	}
	$password = md5(md5($password));
	$regtime = GetMkTime($regtime);
	$regtime1 = time();
	$sql = "INSERT INTO `$tbname` (
									`username`,
									`email`,
									`password`,
									`user_rank`,
									`sex`,
									`birthday`,
									`credit_line`,
									`MSN`,
									`QQ`,
									`telephone`,
									`mobile`,
									`regtime`,
									`checkuser`									
								) VALUES (
									'$username',
									'$email',
									'$password',
									'$user_rank',
									'$sex',
									'$birthday',
									'$credit_line',
									'$MSN',
									'$QQ',
									'$telephone',
									'$mobile',
									'$regtime1',
									'$checkuser'									
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($username, 'add', 'user');
		showsucceed($_LANG['php']['add_succeed'], '','member.php?act=add');
		//header("location:member.php?act=list");
		exit();
	}
}



/* 修改会员界面 */
if ($act == 'edit')
{
	//验证权限
	
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_edit") : chk_privilege("member_list_edit");
	
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
	$smarty->assign("refun"     , "cfm_upmember");
	$smarty->display('member_edit.html');	
	

}

/* 修改会员信息*/
if ($act == 'subedit')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_edit") : chk_privilege("member_list_edit");
	$sqlstr = '';
	if(!is_Uname($username))
	{
		showmsg($_LANG['js']['usernameformat'], '1');
		exit();
	}
	if(!is_email($email))
	{
		showmsg($_LANG['js']['emailblank'], '1');
		exit();
	}
	if($password!='' || $repassword!='')
	{
		if($password != $repassword)
		{
			showmsg($_LANG['js']['nopassword'], '1');
			exit();
		}
		$password = md5(md5($password));
		$sqlstr = "`password` = '$password',";	
	}	
	if($mobile!='')
	{	
		if(!is_mobile($mobile))
		{
			showmsg($_LANG['js']['mobileformat'], '1');
			exit();
		}
	}
	$sql = "UPDATE `$tbname` SET 
								`username`    = '$username',
								`email`       = '$email',
								".$sqlstr."
								`user_rank`   = '$user_rank',
								`sex`         = '$sex',
								`birthday`    = '$birthday',
								`credit_line` = '$credit_line',
								`MSN`         = '$MSN',
								`QQ`          = '$QQ',
								`telephone`   = '$telephone',
								`mobile`      = '$mobile',
								`checkuser`   = '$checkuser'
								 WHERE `id`   = $id {$public_where}";
								
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($username, 'edit', 'user');
		showsucceed($_LANG['php']['edit_succeed'], '','member.php?act=edit&id='.$id.'&from='.$from);
		//header("location:member.php?act=edit&id=".$id);
		exit();
	}
}


/* 删除产品分类 */
if ($act == 'subdel')
{
	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_del") : chk_privilege("member_list_del");
	 
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
		$rsu = $dosql->getone("SELECT username FROM `$tbname` WHERE `id` = $v {$public_where}");
		$username = $rsu['username'];
		insert_log($username, 'del', 'user');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE (`id` = $v ) {$public_where}");
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>