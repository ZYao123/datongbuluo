<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');
$cid = empty($cid) ? 0 : intval($cid);
$id=0;
$info = array();
$sql = "SELECT `#@__article`.id,`#@__article`.title,`#@__article`.content,`#@__article`.linkurl,`#@__article`.description,`#@__article`.picurl,`#@__article_category`.classname,`#@__article`.classid FROM `#@__article` LEFT JOIN  `#@__article_category` ON `#@__article_category`.id=`#@__article`.classid WHERE `#@__article`.checkinfo='true' AND (`#@__article`.`classid` = $cid OR `#@__article`.`parentstr` like '%,".$cid.",%') ORDER BY `#@__article`.orderid DESC";
	
$info = $dopage->getpage($sql,10);	
$smarty->assign("getposstr"	, getposstr('article_category', '', $cid, $id));
$smarty->assign("info"		, $info);
$smarty->assign("page"		, $dopage->getlist());
$smarty->display('cook.html');

?>