<?php
//检测移动设备访问
/*
$touch_arr =array("mobile","android","wap","uc","wml","vnd","adr","mqqbrowser","nokiaBrowser","playbook", "blackberry","bb10","ipad","iphone");
$useragent=$_SERVER["HTTP_USER_AGENT"];//获取浏览器User-Agent (UA)
$th=str_ireplace($touch_arr,'',$useragent);
if($useragent<>$th){
	header("location:m/");
	exit;
}*/
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/index.php');
include_once('bottom.php');
$smarty->display('index.html');
?>