<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/link.php');

/* 此页公共变量 */
$tbname	  = '#@__link';
$act 	  = isset($act) ? $act : 'list';

/* 友情链接列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("link_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " WHERE webname like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= "order by orderid desc";
	$info = $dopage->getpage($sql);
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('link.html');
}

/* 添加友情链接界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("link_add");
	
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("posttime"  , date("Y-m-d H:i:s",time()));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('link_add.html');
}

/* 添加友情链接 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("link_add");
	
	if($webname=='')
	{
		showmsg($_LANG['js']['webname'], '1');
		exit();
	}
	if($linkurl=='')
	{
		showmsg($_LANG['js']['linkurl'], '1');
		exit();
	}
		
	$sql = "INSERT INTO `$tbname` (
									`webname`,
									`webnote`,
									`picurl`,
									`linkurl`,
									`orderid`,
									`posttime`,
									`checkinfo`
								) VALUES (
									'$webname',
									'$webnote',
									'$picurl',
									'$linkurl',
									'$orderid',
									'$posttime',
									'$checkinfo'
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($webname, 'add', 'link');
		showsucceed($_LANG['php']['add_succeed'], '','link.php?act=add');
		exit();
	}
}



/* 修改友情链接 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("link_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");

	$smarty->assign("info"		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('link_edit.html');

}

/* 修改友情链接 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("link_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if($webname=='')
	{
		showmsg($_LANG['js']['webname'], '1');
		exit();
	}
	if($linkurl=='')
	{
		showmsg($_LANG['js']['linkurl'], '1');
		exit();
	}
								
	$sql = "UPDATE `$tbname` SET 
								`webname`   = '$webname',
								`webnote`   = '$webnote',
								`picurl`   	= '$picurl',
								`linkurl`   = '$linkurl',
								`orderid`   = '$orderid',
								`posttime`  = '$posttime',
								`checkinfo` = '$checkinfo'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($webname, 'edit', 'link');
		showsucceed($_LANG['php']['add_succeed'], '','link.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除友情链接 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("link_del");
	
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
		$r = $dosql->getone("SELECT `webname` FROM `$tbname` WHERE `id` = $v ");
		$webname = empty($r['webname']) ? '' : $r['webname'];
		
		//添加日志
		insert_log($webname, 'del', 'link');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
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