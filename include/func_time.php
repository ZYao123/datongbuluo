<?php
if (!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/**
 * 检查是否为一个合法的时间格式
 *
 * @access  public
 * @param   string  $time
 * @return  void
 */
function is_time($time)
{
    $pattern = '/[\d]{4}-[\d]{1,2}-[\d]{1,2}\s[\d]{1,2}:[\d]{1,2}:[\d]{1,2}/';

    return preg_match($pattern, $time);
}

/**
 * 获得当前格林威治时间的时间戳
 *
 * @return  integer
 */
if(!function_exists('gmtime'))
{
	function gmtime()
	{
		return (time() - date('Z'));
	}
}


/**
 * 返回格式化(Y-m-d H:i:s)的时间
 *
 * @return  String
 */
if(!function_exists('getdateTime'))
{
	function getdateTime($mktime)
	{
		return date('Y-m-d H:i:s',$mktime);
	}
}


/**
 * 返回格式化(Y-m-d)的时间
 *
 * @return  String
 */
if(!function_exists('getdatemk'))
{
	function getdatemk($mktime)
	{
		return date('Y-m-d', $mktime);
	}
}


/**
 * 从普通时间转换为Linux时间截
 *
 * @return  integer
 */
if(!function_exists('getmktime'))
{
	function getmktime($dtime)
	{
		if(!preg_match("/[^0-9]/", $dtime))
		{
			return $dtime;
		}
		
		$dtime = trim($dtime);
		$dt = array(1970, 1, 1, 0, 0, 0);
		$dtime = preg_replace("/[\r\n\t]|日|秒/", " ", $dtime);
		$dtime = str_replace("年", "-", $dtime);
		$dtime = str_replace("月", "-", $dtime);
		$dtime = str_replace("时", ":", $dtime);
		$dtime = str_replace("分", ":", $dtime);
		$dtime = trim(preg_replace("/[ ]{1,}/", " ", $dtime));
		$ds = explode(" ", $dtime);
		$ymd = explode("-", $ds[0]);
		if(!isset($ymd[1])) $ymd = explode(".", $ds[0]);
		if(isset($ymd[0])) $dt[0] = $ymd[0];
		if(isset($ymd[1])) $dt[1] = $ymd[1];
		if(isset($ymd[2])) $dt[2] = $ymd[2];
		if(strlen($dt[0])==2) $dt[0] = '20'.$dt[0];
		if(isset($ds[1]))
		{
			$hms = explode(":", $ds[1]);
			if(isset($hms[0])) $dt[3] = $hms[0];
			if(isset($hms[1])) $dt[4] = $hms[1];
			if(isset($hms[2])) $dt[5] = $hms[2];
		}
		foreach($dt as $k=>$v)
		{
			$v = preg_replace("/^0{1,}/", '', trim($v));
			if($v == '')
			{
				$dt[$k] = 0;
			}
		}
		$mt = mktime($dt[3], $dt[4], $dt[5], $dt[1], $dt[2], $dt[0]);
		if(!empty($mt)) return $mt;
		else return time();
	}
}



/**
 * 获得服务器的时区
 *
 * @return  integer
 */
if(!function_exists('server_timezone'))
{
	function server_timezone()
	{
		if (function_exists('date_default_timezone_get'))
		{
			return date_default_timezone_get();
		}
		else
		{
			return date('Z') / 3600;
		}
	}
}


/**
 * 转换字符串形式的时间表达式为GMT时间戳
 *
 * @param   string  $str
 *
 * @return  integer
 */
function gmstr2time($str)
{
    $time = strtotime($str);

    if ($time > 0)
    {
        $time -= date('Z');
    }

    return $time;
}


/**
 * 获得用户所在时区指定的时间戳
 *
 * @param   $timestamp  integer     该时间戳必须是一个服务器本地的时间戳
 *
 * @return  array
 */
function local_gettime($timestamp = NULL)
{
    $tmp = local_getdate($timestamp);
    return $tmp[0];
}

/**
 * 获得用户所在时区指定的日期和时间信息
 *
 * @param   $timestamp  integer     该时间戳必须是一个服务器本地的时间戳
 *
 * @return  array
 */
function local_getdate($timestamp = NULL)
{
    $timezone = isset($_SESSION['timezone']) ? $_SESSION['timezone'] : $GLOBALS['_CFG']['timezone'];

    /* 如果时间戳为空，则获得服务器的当前时间 */
    if ($timestamp === NULL)
    {
        $timestamp = time();
    }

    $gmt        = $timestamp - date('Z');       // 得到该时间的格林威治时间
    $local_time = $gmt + ($timezone * 3600);    // 转换为用户所在时区的时间戳

    return getdate($local_time);
}


//执行时间函数
if(!function_exists('ExecTime'))
{
	function ExecTime()
	{
		$time = explode(" ", microtime());
		$usec = (double)$time[0];
		$sec = (double)$time[1];
		return $sec + $usec;
	}
}

?>