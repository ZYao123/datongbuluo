<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/../../include/config.php');

$typeCom = $_GET["com"];//快递公司
$typeNu = $_GET["nu"];  //快递单号
$type = $_GET['type']; //回值方式 0 json 2 表格

//echo $typeCom.'<br/>' ;
//echo $typeNu ;
$row = array();
$row = $dosql->getone("select apikey from `#@__shopship` where id = 1 AND checkinfo = 'true'");
if ($row == '')
{
	echo "对不起，没有开启运单查询功能！！！";
	exit();
}
$AppKey = $row['apikey'];//请将XXXXXX替换成您在http://kuaidi100.com/app/reg.html申请到的KEY
$url ='http://api.kuaidi100.com/api?id='.$AppKey.'&com='.$typeCom.'&nu='.$typeNu.'&show='.$type.'&muti=1&order=asc';

//请勿删除变量$powered 的信息，否者本站将不再为你提供快递接口服务。
$powered = '查询数据由：<a href="http://kuaidi100.com" target="_blank">KuaiDi100.Com （快递100）</a> 网站提供 ';


//优先使用curl模式发送数据
if (function_exists('curl_init') == 1){
  $curl = curl_init();
  curl_setopt ($curl, CURLOPT_URL, $url);
  curl_setopt ($curl, CURLOPT_HEADER,0);
  curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
  curl_setopt ($curl, CURLOPT_TIMEOUT,5);
  $get_content = curl_exec($curl);
  curl_close ($curl);
}else{
  include("snoopy.php");
  $snoopy = new snoopy();
  $snoopy->referer = 'http://www.google.com/';//伪装来源
  $snoopy->fetch($url);
  $get_content = $snoopy->results;
}
print_r($get_content . '<br/>' . $powered);
exit();
?>
