<?php
error_reporting(0);
session_start();
require_once('yzm.php');
$image = new ValidationCode('77','34','4');    //图片长度、宽度、字符个数
$image->outImg();
$_SESSION['yzm'] = $image->checkcode; //存贮验证码到 $_SESSION 中
?>