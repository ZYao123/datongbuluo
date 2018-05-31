<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/ads_list.php');

/* 此页公共变量 */
$tbname	  = '#@__ads_list';
$act 	  = isset($act) ? $act : 'list';
$parentid = isset($parentid ) ? $parentid  : 0;

/* 广告列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("ads_list_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` WHERE 1=1";
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
	foreach($info as $key => $val)
	{
		$info[$key]['classid'] = get_field_value('classname', 'ads_category', $info[$key]['classid']);
	}
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('ads_list.html');
}

/* 添加广告界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("ads_list_add");
	
	$class_info = array();
	$class_info = getallcat('#@__ads_category', 'id');

	$smarty->assign("posttime"  , date("Y-m-d H:i:s"));
	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("admode_list", $_LANG['admode_list']);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	
	$smarty->display('ads_list_add.html');
}

/* 添加广告 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("ads_list_add");
	
	if($title=='')
	{
		showmsg($_LANG['js']['title'], '1');
		exit();
	}
	if($classid=='')
	{
		showmsg($_LANG['js']['classid'], '1');
		exit();
	}
	if($starttime=='')
	{
		showmsg($_LANG['js']['starttime'], '1');
		exit();
	}
	if($endtime=='')
	{
		showmsg($_LANG['js']['endtime'], '1');
		exit();
	}

	$parentstr	= getparentstr('#@__ads_category', $classid);
	$parentid 	= getparentid('#@__ads_category' , $classid);

	$posttime  = GetMkTime($posttime);
	$starttime = GetMkTime($starttime);
	$endtime   = GetMkTime($endtime);
	
	$sql = "INSERT INTO `$tbname` (
									`classid`,
									`parentid`,
									`parentstr`,
									`title`,
									`admode`,
									`picurl`,
									`adtext`,
									`linkurl`,
									`orderid`,
									`posttime`,
									`checkinfo`,
									`starttime`,
									`endtime`,
									`contact`,
									`tel`,
									`email`,
									`width`,
									`height`
								) VALUES (
									'$classid',
									'$parentid',
									'$parentstr',
									'$title',
									'$admode',
									'$picurl',
									'$adtext',
									'$linkurl',
									'$orderid',
									'$posttime',
									'$checkinfo',
									'$starttime',
									'$endtime',
									'$contact',
									'$tel',
									'$email',
									'$width',
									'$height'
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($title, 'add', 'ads');
		showsucceed($_LANG['php']['add_succeed'], '','ads_list.php?act=add&parentid='.$parentid);
		exit();
	}
}



/* 修改广告界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("ads_list_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$class_info = array();
	$class_info = getallcat('#@__ads_category', 'id');

	$smarty->assign("info"		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("admode_list", $_LANG['admode_list']);
	$smarty->assign("js"        , $_LANG['js']);
	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('ads_list_edit.html');

}

/* 修改广告 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("ads_list_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	if($title=='')
	{
		showmsg($_LANG['js']['title'], '1');
		exit();
	}
	if($classid=='')
	{
		showmsg($_LANG['js']['classid'], '1');
		exit();
	}
	if($starttime=='')
	{
		showmsg($_LANG['js']['starttime'], '1');
		exit();
	}
	if($endtime=='')
	{
		showmsg($_LANG['js']['endtime'], '1');
		exit();
	}

	$parentstr	= getparentstr('#@__ads_category', $classid);
	$parentid 	= getparentid('#@__ads_category' , $classid);
	
	if($title=='')
	{
		showmsg($_LANG['js']['title'], '1');
		exit();
	}
	$posttime  = GetMkTime($posttime);
	$starttime = GetMkTime($starttime);
	$endtime   = GetMkTime($endtime);
									
	$sql = "UPDATE `$tbname` SET 
								`classid`   = '$classid',
								`parentid`  = '$parentid',
								`parentstr` = '$parentstr',
								`title`  	= '$title',
								`admode`   	= '$admode',
								`picurl`    = '$picurl',
								`adtext`    = '$adtext',
								`linkurl`   = '$linkurl',
								`orderid`	= '$orderid',
								`posttime`	= '$posttime',
								`checkinfo`	= '$checkinfo',
								`starttime`	= '$starttime',
								`endtime`	= '$endtime',
								`contact`	= '$contact',
								`tel`		= '$tel',
								`email`  	= '$email',
								`width`		= '$width',
								`height`  	= '$height'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($title, 'edit', 'ads');
		showsucceed($_LANG['php']['add_succeed'], '','ads_list.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除广告 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("ads_list_del");
	
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
		$r = $dosql->getone("SELECT `title` FROM `$tbname` WHERE `id` = $v ");
		$title = empty($r['title']) ? '' : $r['title'];
		
		//添加日志
		insert_log($title, 'del', 'ads_position');
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