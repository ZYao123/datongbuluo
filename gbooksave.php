<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
$lc_ip = getip();
$sql = "insert into `#@__gbook` (lc_title,lc_content,lc_name,lc_tel,lc_email,lc_ip,lc_datetime) values ('{$lc_title}','{$lc_content}','{$lc_name}','{$lc_tel}','{$lc_email}','{$lc_ip}',NOW())";
$rs=$dosql->Query($sql);
	echo "<script>alert('留言成功！');location.href='gbook.php';</script>";
?>