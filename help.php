<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');
$cid = empty($cid) ? 0 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);

$sql = "SELECT * FROM `#@__article` WHERE checkinfo='true'";
if($id>0)
{
	$sql .= " AND `id` = $id";
	$up_sql="update `#@__article` set hits=hits+1 where id='{$id}'";
	$dosql->QueryNone($up_sql);	
}else
{
	$sql .= " AND (`classid` = $cid OR `parentstr` like '%,".$cid.",%')";
}	
$info = array();
$info = $dosql->getone($sql);	
if($info)
{
	/* 左侧分类 */
	$help_class = array();
	$dosql->execute("select id,classname from `#@__article_category` where parentid = 1 and checkinfo='true' order by orderid ASC");
	$i=0;
	while($row = $dosql->GetArray())
	{
		$i++;
		$help_class[$i]['classname'] = $row['classname'];
		$help_class[$i]['list'] 	 = $dosql->getall("select id,title from `#@__article` where classid = ".$row['id']." and checkinfo='true' order by orderid DESC", $row['id']);
	}
	$smarty->assign("getposstr"		, getposstr('article_category', '', $cid, $id));
	$smarty->assign("info"		, $info);
	$smarty->assign("help_class", $help_class);
	$smarty->display('help.html');
}
else
{
	$smarty->display('404.html');
}
?>