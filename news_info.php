<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');
$cid = empty($cid) ? 0 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);
if($id>0)
{
	$sql = "SELECT * FROM `#@__article` WHERE checkinfo='true' AND `id` = $id";
}else
{
	$sql = "SELECT * FROM `#@__article` WHERE checkinfo='true' AND (`classid` = $cid OR `parentstr` like '%,".$cid.",%') ORDER BY orderid DESC limit 1";
}

	$info = array();
	$info = $dosql->getone($sql);	
	$sql="update `#@__article` set hits=hits+1 where id='{$id}'";
	$dosql->QueryNone($sql);	

	$smarty->assign("getposstr"	, getposstr('article_category', '', $cid, $id));
	$smarty->assign("info"		, $info);
	$smarty->display('news_info.html');

?>