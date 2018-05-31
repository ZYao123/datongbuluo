<?php
if (!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/*
 * 函数说明：获取一维或多维数组某个特定键(数组下标)的所有值
 *
 * @param  array   $array   要查找的数组
 * @param  string  $string  要查找的键名
 * @return array
 */
 
function array_get_by_key(array $array, $string){
	if (!trim($string)) return false;
	preg_match_all("/\"$string\";\w{1}:(?:\d+:|)\"(.*?)\";/", serialize($array), $res);
	return $res[1];
}
?>