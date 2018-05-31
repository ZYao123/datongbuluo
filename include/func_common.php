<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

include("func_string.php");
include("func_time.php");
include("func_file.php");
include("func_array.php");
include("func_data.php");
include("func_lcshop.php");

/*
 * 函数说明：截取指定长度的字符串
 *         utf-8专用 汉字和大写字母长度算1，其它字符长度算0.5
 *
 * @param  string  $str  原字符串
 * @param  int     $len  截取长度
 * @param  string  $etc  省略字符...
 * @return string        截取后的字符串
 */
if(!function_exists('ReStrLen'))
{
	function ReStrLen($str, $len=10, $etc='...')
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


/* 清除HTML */
if(!function_exists('ClearHtml'))
{
	function ClearHtml($str)
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

/* 获得当前的页面文件的url */
function getcururl()
{
	if(!empty($_SERVER['REQUEST_URI']))
	{
		//$nowurls = explode('?',$_SERVER['REQUEST_URI']);
		$nowurl = $_SERVER['REQUEST_URI'];
	}
	else
	{
		$nowurl = $_SERVER['PHP_SELF'];
	}

	return $nowurl;
}


/* 获取IP */
function getip()
{
	static $ip = NULL;
	if($ip !== NULL) return $ip;

	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		$pos =  array_search('unknown',$arr);
		if(false !== $pos) unset($arr[$pos]);
		$ip   =  trim($arr[0]);
	}
	else if(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	else if(isset($_SERVER['REMOTE_ADDR']))
	{
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	//IP地址合法验证
	$ip = (false !== ip2long($ip)) ? $ip : '0.0.0.0';
	return $ip;
}

//显示信息

function showmsg($msg='', $gourl='0')
{
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n<link href=\"templates/default/style/admin.css\" rel=\"stylesheet\" type=\"text/css\" />\n<script src=\"templates/default/js/artDialog.js?skin=default\"></script>\n<script src=\"templates/default/js/iframeTools.source.js\"></script>\n<script src=\"templates/default/js/artDialog_js.php\"></script>\n</head>\n<body>";
	if($gourl != '0')
		echo '<script class="javascript">DialogAlert("'.$msg.'","'.$gourl.'",title,button,"succeed","")</script>';
	else
		echo '<script class="javascript">dialog_close();</script>';
	echo "</body>\n</html>";
}


function showsucceed($content='', $title='',$url='')
{
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n<link href=\"templates/default/style/admin.css\" rel=\"stylesheet\" type=\"text/css\" />\n<script src=\"templates/default/js/artDialog.js?skin=default\"></script>\n<script src=\"templates/default/js/iframeTools.source.js\"></script>\n<script src=\"templates/default/js/artDialog_js.php\"></script>\n</head>\n<body>";
	
	echo '<script class="javascript">DialogIframeSucceed("'.$content.'","'.$title.'","'.$url.'")</script>';
	
	echo "</body>\n</html>";
}

/**
 * 验证输入的URL是否包含HTTP
 *
 * @access  public
 * @param   string      $url      需要验证的URL
 *
 * @return bool
 */
function is_http($url)
{
    if(!preg_match("/^(http|ftp):/", $url))
	{
		$url = 'http://'.$url;
	}

	return $url;
}


/**
 * 验证输入的邮件地址是否合法
 *
 * @access  public
 * @param   string      $email      需要验证的邮件地址
 *
 * @return bool
 */
function is_email($email)
{
    $chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
    if (strpos($email, '@') !== false && strpos($email, '.') !== false)
    {
        if (preg_match($chars, $email))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

/**
 * 验证输入的域名地址是否合法
 *
 * @access  public
 * @param   string      $url      需要验证的域名地址
 *
 * @return bool
 */
function is_url($url)
{
	$chars = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
    if (strpos($url, '.') !== false)
    {
        if (preg_match($chars, $url))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

/**
 * 验证输入的IPv4地址是否合法
 *
 * @access  public
 * @param   string      $ip      需要验证的ip地址
 *
 * @return bool
 */
function is_ip($ip)
{
	$chars = "/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";
    if (strpos($ip, '.') !== false)
    {
        if (preg_match($chars, $ip))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

/**
 * 验证输入的用户名地址是否合法
 *
 * @access  public
 * @param   string      $username      需要验证的用户名称
 *
 * @return bool
 */
function is_username($username)
{
	
	$chars = "/^[a-z\d_]{5,20}$/i";
	if (preg_match($chars, $username))
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 * 验证输入的手机号码是否合法
 *
 * @access  public
 * @param   string      $mobile      需要验证的手机号码
 *
 * @return bool
 */
function is_mobile($mobile)
{
	
	$chars = "/^1[3|4|5|7|8][0-9]\d{8}$/i";
	if (preg_match($chars, $mobile))
	{
		return true;
	}
	else
	{
		return false;
	}
}


/**
 * 验证输入的会员名地址是否合法
 *
 * @access  public
 * @param   string      $username      需要验证的会员名称
 *
 * @return bool
 */
function is_Uname($username)
{
	$chars = "/^([{\x{4e00}-\x{9fa5}]|[0-9a-zA-Z])+$/u";
	if (preg_match($chars, $username))
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 * 验证输入的货币是否合法
 *
 * @access  public
 * @param   string      $money      需要验证的货币
 *
 * @return bool
 */
function is_money($money)
{
	$chars = "=/^d*.?d{1,2}$/i";
	if (preg_match($chars, $money))
	{
		return true;
	}
	else
	{
		return false;
	}
}
/**
 * 获得所有模块的名称以及链接地址
 *
 * @access      public
 * @param       string      $directory      插件存放的目录
 * @return      array
 */
function read_module($directory = '.')
{
    global $_LANG;

    $dir        = @opendir($directory);
    $set_module = true;
    $module     = array();

    while(false !== ($file = @readdir($dir)))
    {
        if (preg_match("/^.*?\.php$/", $file))
        {
            include_once($directory. '/' .$file);
        }
    }
    @closedir($dir);
    unset($set_module);

    foreach ($module AS $key => $value)
    {
        ksort($module[$key]);
    }
    ksort($module);

    return $module;
}

/**
 * 验证输入的邮件地址或者是否合法
 *
 * @access  public
 * @param   string      $email      需要验证的邮件地址/用户名
 *
 * @return bool
 */
function is_emailorname($email)
{
	$chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
	$chars_name = "/^([{\x{4e00}-\x{9fa5}]|[0-9a-zA-Z])+$/u";

	if (strpos($email, '@') !== false && strpos($email, '.') !== false)
	{
		if (preg_match($chars, $email) )
		{
			return true;
		}
	}else
	{
		if ( preg_match($chars_name, $email))
		{
			return true;
		}
	}
	return false;
}

//字符串替换只一次从右侧

function str_replace_once($needle, $replace, $haystack) {

		$pos = strrpos($haystack, $needle);
		if ($pos === false) {
			return $haystack;
		}
		return substr_replace($haystack, $replace, $pos, strlen($needle));
    }
	
	
	
	
//添加会员积分记录
/*$integral 积分
 *$zt       发生状态  1为增加积分 0为减积分
 *$jianjie  简介
 *$uid      会员id
 */
function integral_notes($integral,$zt,$jianjie,$uid){
	global $dosql;
	$posttime = GetMkTime(date("Y-m-d H:i:s"));
	if($zt==1){
	 $integral = $integral;	
	}else{
	  $integral = -$integral;	
	}
	
	$sql="insert into `#@__integral_notes` (`integral`,`posttime`,`zt`,`jianjie`,`uid`) values('{$integral}','{$posttime}','{$zt}','{$jianjie}','{$uid}')";
	$dosql->execnonequery($sql);
}


//会员升级
/**
 *  $levelid  会员当前等级
 *  $uid      会员id
 *  $price    当前消费总金额 
 */
function update_level($uid,$price,$levelid){
	global $dosql;
	$price   = (int)$price;
	$levelid = (int)$levelid;
	
	$sql="select levelname,id from `#@__member_level` where  levelprice<=".$price." order by levelprice desc";
	$row = $dosql->getone($sql);
	
	
	if($row['id'] != ''){
		
		$dosql->execnonequery("update `#@__member` set user_rank='".$row['id']."' where id=".$uid);
	}
}
	
//退货判断会员是否应该降级
/**
 *  $levelid  会员当前等级
 *  $uid      会员id
 *  $price    当前消费总金额 
 */
function update_level2($uid,$price,$levelid){
	global $dosql;
	$price   = (int)$price;
	$levelid = (int)$levelid;
	
	$sql="select levelname,id from `#@__member_level` where  levelprice<=".$price." order by levelprice desc";
	$row = $dosql->getone($sql);
	if($row['id'] != ''){
		
		$dosql->execnonequery("update `#@__member` set user_rank='".$row['id']."' where id=".$uid);
	}
}
		
	
?>