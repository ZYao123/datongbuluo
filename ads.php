<?php

define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');

if(!isset($id) || !is_numeric($id)) $id = 0;
$ad = $dosql->getone("SELECT linkurl FROM `#@__ads_list` WHERE `id` = $id");
if(is_array($ad))
{
	$dosql->execnonequery("UPDATE `#@__ads_list` SET `hits`=hits+1 WHERE `id` = $id");
	if($ad['linkurl'] != '')
	{
		header("location:".$ad['linkurl']);
	}
	else
	{
		echo '无连接';
	}
}
else
{
	$smarty->display('404.html');
}
?>