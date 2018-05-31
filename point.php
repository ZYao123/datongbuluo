<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');
$info = array();
$now=GetMkTime(date("Y-m-d"));
$sql = "SELECT `#@__point`.endtime,`#@__point`.id,`#@__point`.title,`#@__point`.picurl,`#@__point`.linkurl,count(`#@__member_point`.id) as tot 
FROM `#@__point` left join `#@__member_point` on #@__point.id=#@__member_point.p_id WHERE checkinfo='true' AND starttime<='{$now}'  AND endtime>'{$now}' GROUP BY `#@__point`.ID ORDER BY orderid DESC";
$info = $dopage->getpage($sql,6);	
foreach($info as $k=>$v)
{
	$info[$k]['day']=(int)(($v['endtime']-$now)/86400);
}
$smarty->assign("info"		, $info);
$smarty->assign("page"		, $dopage->getlist());
$smarty->display('point.html');

?>