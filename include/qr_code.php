<?php
require_once(dirname(dirname(__FILE__)).'/include/phpqrcode.php');
$qrdata="http://".$_SERVER['HTTP_HOST'].str_replace("include/qr_code.php","",$_SERVER['REQUEST_URI'])."m";//二维码数据
$Level = "M";//纠错级别：L、M、Q、H
$size = "4";//点的大小：1到10
$margin = "0";//生成的二维码离边框的距离
QRcode::png($qrdata,false,$Level,$size,$margin);
?>