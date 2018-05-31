<?php

if (!isset($_COOKIE['username']))
{
	$str="<script>window.location.href='member.php?act=login&from=".$from."'</script>";
	echo $str;
	exit();
}
?>