<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');
$id=(int)$id;
$info = array();
$history=array();
if($id>0)
{
	$now=GetMkTime(date("Y-m-d"));
	$sql = "SELECT `#@__point`.id,title,picurl,endtime,integral,content,count(`#@__member_point`.id) as tot FROM `#@__point` left join `#@__member_point` on #@__point.id=#@__member_point.p_id WHERE checkinfo='true' AND starttime<='{$now}'  AND endtime>='{$now}' AND `#@__point`.id={$id}
	GROUP BY `#@__member_point`.p_id
	";
	$info = $dosql->getone($sql);	
	if($info['endtime'])
	{
	$info['date']=getdatemk($info['endtime']);
	$info['date'].=" 23:59:00";
	}
	$sql="SELECT `#@__member`.username,`#@__member_point`.posttime FROM `#@__member_point` left join `#@__member`
	ON `#@__member_point`.m_id=`#@__member`.id
	WHERE `#@__member_point`.p_id='{$id}' ORDER BY `#@__member_point`.id DESC limit 5
	";
	$history = $dosql->getall($sql);
}
$smarty->assign("from"		, $from);
$smarty->assign("info"		, $info);
$smarty->assign("history"		, $history);
$smarty->display('point_info.html');

?>