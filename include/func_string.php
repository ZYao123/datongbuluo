<?php
if (!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/*
 * 函数说明：截取指定长度的字符串
 *         utf-8专用 汉字和大写字母长度算1，其它字符长度算0.5
 *
 * @param  string  $str  原字符串
 * @param  int     $len  截取长度
 * @param  string  $etc  省略字符...
 * @return string        截取后的字符串
 */
if(!function_exists('restrlen'))
{
	function restrlen($str, $len=10, $etc='...')
	{
		$restr = '';
		$i = 0;
		$n = 0.0;
	
		//字符串的字节数
		$strlen = strlen($str);
		while(($n < $len) and ($i < $strlen))
		{
		   $temp_str = substr($str, $i, 1);
	
		   //得到字符串中第$i位字符的ASCII码
		   $ascnum = ord($temp_str);
	
		   //如果ASCII位高与252
		   if($ascnum >= 252) 
		   {
				//根据UTF-8编码规范，将6个连续的字符计为单个字符
				$restr = $restr.substr($str, $i, 6); 
				//实际Byte计为6
				$i = $i + 6; 
				//字串长度计1
				$n++; 
		   }
		   elseif($ascnum >= 248)
		   {
				$restr = $restr.substr($str, $i, 5);
				$i = $i + 5;
				$n++;
		   }
		   elseif($ascnum >= 240)
		   {
				$restr = $restr.substr($str, $i, 4);
				$i = $i + 4;
				$n++;
		   }
		   elseif($ascnum >= 224)
		   {
				$restr = $restr.substr($str, $i, 3);
				$i = $i + 3 ;
				$n++;
		   }
		   elseif ($ascnum >= 192)
		   {
				$restr = $restr.substr($str, $i, 2);
				$i = $i + 2;
				$n++;
		   }
	
		   //如果是大写字母 I除外
		   elseif($ascnum>=65 and $ascnum<=90 and $ascnum!=73)
		   {
				$restr = $restr.substr($str, $i, 1);
				//实际的Byte数仍计1个
				$i = $i + 1; 
				//但考虑整体美观，大写字母计成一个高位字符
				$n++; 
		   }
	
		   //%,&,@,m,w 字符按1个字符宽
		   elseif(!(array_search($ascnum, array(37, 38, 64, 109 ,119)) === false))
		   {
				$restr = $restr.substr($str, $i, 1);
				//实际的Byte数仍计1个
				$i = $i + 1;
				//但考虑整体美观，这些字条计成一个高位字符
				$n++; 
		   }
	
		   //其他情况下，包括小写字母和半角标点符号
		   else
		   {
				$restr = $restr.substr($str, $i, 1);
				//实际的Byte数计1个
				$i = $i + 1; 
				//其余的小写字母和半角标点等与半个高位字符宽
				$n = $n + 0.5; 
		   }
		}
	
		//超过长度时在尾处加上省略号
		if($i < $strlen)
		{
		   $restr = $restr.$etc;
		}
	
		return $restr;
	}
}


//清除HTML
if(!function_exists('clearhtml'))
{
	function clearhtml($str)
	{
		$str = strip_tags($str);

		//首先去掉头尾空格
		$str = trim($str);

		//接着去掉两个空格以上的
		$str = preg_replace('/\s(?=\s)/', '', $str);

		//最后将非空格替换为一个空格
		$str = preg_replace('/[\n\r\t]/', ' ', $str);

		return $str;
	}
}


//获取指定长度随机字符串
if(!function_exists('getrandstr'))
{
	function getrandstr($length=6)
	{
		//'!@#$%^&*()-_ []{}<>~`+=,.;:/?|';
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$random_str = '';
	
		for($i=0; $i<$length; $i++)
		{
			//这里提供两种字符获取方式
			//第一种是使用 substr 截取$chars中的任意一位字符；
			//第二种是取字符数组 $chars 的任意元素
			//$password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
			$random_str .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
	
		return $random_str;
	}
}
/*加密*/
function encode64($str)
{
	return base64_encode($str);
}
/*解密*/
function dencode64($str)
{
	return base64_decode($str);
}
/*加密*/
function urlen($str=false)
{
	!$str AND $str=$_SERVER['REQUEST_URI'];
	return urlencode($str);
}
/*解密*/
function urlde($str)
{
	return urldecode($str);
}
function collect_num($gid=false,$mid=false)
{
	GLOBAL $dosql;
	$sql="";
	is_numeric($gid) and $sql="select count(m_id) as tot from #@__member_good where g_id='{$gid}'";
	is_numeric($mid) and $sql="select count(g_id) as tot from #@__member_good where m_id='{$mid}'";
	$sql and $result = $dosql->GetOne($sql);
	return (int)$result["tot"];
}
/*取出需要参数*/
function get_uri($preg)
{
	global $str;
	preg_match($preg,$str,$arry);
	$result="";
	if($arry[0])
	{
		$result=preg_replace($preg,"$1",$arry[0]);
		$str=preg_replace($preg,"",$str);
	}
	return $result;
}
/* 参数解释
   $string： 明文 或 密文
   $operation：DECODE表示解密,其它表示加密
   $key： 密匙
   $expiry：密文有效期*/
if(!function_exists('AuthCode'))
{
	function AuthCode($string, $operation='DECODE', $key='', $expiry=0)
	{
		// 动态密匙长度，相同的明文会生成不同密文就是依靠动态密匙
		// 加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
		// 取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
		// 当此值为 0 时，则不产生随机密钥
		$ckey_length = 4;
		// 密匙
		//$key = md5($key ? $key : $GLOBALS['cfg_auth_key']);
		// 密匙a会参与加解密
		$keya = md5(substr($key, 0, 16));
		// 密匙b会用来做数据完整性验证
		$keyb = md5(substr($key, 16, 16));
		// 密匙c用于变化生成的密文
		$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
		// 参与运算的密匙
		$cryptkey = $keya.md5($keya.$keyc);
		$key_length = strlen($cryptkey);
		// 明文，前10位用来保存时间戳，解密时验证数据有效性，10到26位用来保存$keyb(密匙b)，解密时会通过这个密匙验证数据完整性
		// 如果是解码的话，会从第$ckey_length位开始，因为密文前$ckey_length位保存 动态密匙，以保证解密正确
		$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
		$string_length = strlen($string);
		$result = '';
		$box = range(0, 255);
		$rndkey = array();
	
		// 产生密匙簿
		for($i = 0; $i <= 255; $i++)
		{
			$rndkey[$i] = ord($cryptkey[$i % $key_length]);
		}
	
		// 用固定的算法，打乱密匙簿，增加随机性，好像很复杂，实际上并不会增加密文的强度
		for($j = $i = 0; $i < 256; $i++)
		{
			//$j是三个数相加与256取余
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}
	
		// 核心加解密部分
		for($a = $j = $i = 0; $i < $string_length; $i++)
		{
			//在上面基础上再加1 然后和256取余
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;//$j加$box[$a]的值 再和256取余
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp;
			// 从密匙簿得出密匙进行异或，再转成字符，加密和解决时($box[($box[$a] + $box[$j]) % 256])的值是不变的。
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}
		if($operation == 'DECODE')
		{
			// substr($result, 0, 10) == 0 验证数据有效性
			// substr($result, 0, 10) - time() > 0 验证数据有效性
			// substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16) 验证数据完整性
			// 验证数据有效性，请看未加密明文的格式
			if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16))
			{
				return substr($result, 26);
			}
			else
			{
				return '';
			}
		}
		else
		{
			// 把动态密匙保存在密文里，这也是为什么同样的明文，生产不同密文后能解密的原因
			// 因为加密后的密文可能是一些特殊字符，复制过程可能会丢失，所以用base64编码
			return $keyc.str_replace('=', '', base64_encode($result));
		}
	}
}





/*
 * 函数说明：使用特定function对数组中所有元素做处理
 *
 * @param  string  &$array   			要处理的字符串
 * @param  string  $function 			要执行的函数
 * @param  boolean $apply_to_keys_also  是否也应用到key上
 * @return public        
 */
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
 
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}
 

 /*
 * 函数说明：将数组转换为JSON字符串（兼容中文）
 *
 * @param  array  $array   			要转换的数组
 * @return string         			转换得到的json字符串
 */
function JSON($array) {
 arrayRecursive($array, 'urlencode', true);
 $json = json_encode($array);
 return urldecode($json);
}

/**
 * 返回经addslashes处理过的字符串或数组
 * @param $string 需要处理的字符串或数组
 * @return mixed
 */
function new_addslashes($string){
	if(!is_array($string)) return addslashes($string);
	foreach($string as $key => $val) $string[$key] = new_addslashes($val);
	return $string;
}

/**
 * 返回经stripslashes处理过的字符串或数组
 * @param $string 需要处理的字符串或数组
 * @return mixed
 */
function new_stripslashes($string) {
	if(!is_array($string)) return stripslashes($string);
	foreach($string as $key => $val) 
	{
		$string[$key] = new_stripslashes($val);
	}
	return $string;
}


/**
* 将字符串转换为数组
*
* @param	string	$data	字符串
* @return	array	返回数组格式，如果，data为空，则返回空数组
*/
function string2array($data) {
	if($data == '') return array();
	@eval("\$array = $data;");
	return $array;
}
/**
* 将数组转换为字符串
*
* @param	array	$data		数组
* @param	bool	$isformdata	如果为0，则不使用new_stripslashes处理，可选参数，默认为1
* @return	string	返回字符串，如果，data为空，则返回空
*/
function array2string($data, $isformdata = 1) {
	if($data == '') return '';
	if($isformdata) $data = new_stripslashes($data);
	return addslashes(var_export($data, true));
}
?>
