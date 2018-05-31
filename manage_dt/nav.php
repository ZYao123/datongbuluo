<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/nav.php');

/* 此页公共变量 */
$tbname	  = '#@__nav';
$act 	  = isset($act) ? $act : 'list';

/* 列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("nav_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " WHERE classname like '%".$keyword."%'";
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
	$smarty->display('nav.html');
}

/* 添加界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("nav_add");
	$article = getallcat("#@__article_category", 'id');
	$goods   = getallcat("#@__goodscategory", 'id');
	$smarty->assign("article"	, $article);
	$smarty->assign("goods"		, $goods);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('nav_add.html');
}

/* 添加 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("nav_add");
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
	if($linkurl=='')
	{
		showmsg($_LANG['js']['linkurl'], '1');
		exit();
	}
		
	$sql = "INSERT INTO `$tbname` (
									`classname`,
									`linkurl`,
									`position`,
									`target`,
									`orderid`,
									`checkinfo`
								) VALUES (
									'$classname',
									'$linkurl',
									'$position',
									'$target',
									'$orderid',
									'$checkinfo'
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'add', 'nav');
		showsucceed($_LANG['php']['add_succeed'], '','nav.php?act=add');
		exit();
	}
}

/* 修改 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("nav_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");

	$article = getallcat("#@__article_category", 'id');
	$goods   = getallcat("#@__goodscategory", 'id');
	
	$smarty->assign("article"	, $article);
	$smarty->assign("goods"		, $goods);
	$smarty->assign("info"		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('nav_edit.html');

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
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
	if($linkurl=='')
	{
		showmsg($_LANG['js']['linkurl'], '1');
		exit();
	}
			
														
	$sql = "UPDATE `$tbname` SET 
								`classname` = '$classname',
								`linkurl`   = '$linkurl',
								`position`  = '$position',
								`target`    = '$target',
								`orderid`   = '$orderid',
								`checkinfo` = '$checkinfo'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'edit', 'nav');
		showsucceed($_LANG['php']['edit_succeed'], '','nav.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除 */
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
		$r = $dosql->getone("SELECT `classname` FROM `$tbname` WHERE `id` = $v ");
		$classname = empty($r['classname']) ? '' : $r['classname'];
		
		//添加日志
		insert_log($classname, 'del', 'nav');
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