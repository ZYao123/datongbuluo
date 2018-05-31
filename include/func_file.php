<?php
if (!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

//查看数据大小
if(!function_exists('getrealsize'))
{
	function getrealsize($size)
	{
		$kb = 1024;          // Kilobyte
		$mb = 1024 * $kb;    // Megabyte
		$gb = 1024 * $mb;    // Gigabyte
		$tb = 1024 * $gb;    // Terabyte
	
		if($size < $kb)
			return $size.'B';

		else if($size < $mb)
			return round($size/$kb,2).'KB';

		else if($size < $gb)
			return round($size/$mb,2).'MB';

		else if($size < $tb)
			return round($size/$gb,2).'GB';

		else
			return round($size/$tb,2).'TB';
	}
}


//获取文件夹大小
if(!function_exists('getdirsize'))
{
	function getdirsize($dir)
	{
		$handle = opendir($dir);
		$fsize  = '';
	
		while(($fname = readdir($handle)) !== false)
		{
			if($fname != '.' && $fname != '..')
			{
				if(is_dir("$dir/$fname"))
					$fsize += GetDirSize("$dir/$fname");

				else
					$fsize += filesize("$dir/$fname");
			}
		}
	
		closedir($handle);
		if(empty($fsize)) $fsize = 0;
	
		return $fsize;
	}
}


//创建多级目录
if(!function_exists('mkdirs'))
{
	function mkdirs($dir)
	{ 
		return is_dir($dir) or (mkdirs(dirname($dir)) and mkdir($dir, 0777)); 
	}
}


//读取文件内容
if(!function_exists('readf'))
{
	function readf($file)
	{
		if(file_exists($file) && is_readable($file))
		{
			if(function_exists('file_get_contents'))
			{
				$str = file_get_contents($file);
			}
			else
			{
				$str = '';
	
				$fp = fopen($file, 'r');
				while(!feof($fp))
				{
					$str .= fgets($fp, 1024);
				}
				fclose($fp);
			}
			return $str;
		}
		else
		{
			return false;
		}
	}
}


//写入文件内容
if(!function_exists('writef'))
{
	function writef($file,$str,$mode='w')
	{
		if(file_exists($file) && is_writable($file))
		{
			$fp = fopen($file, $mode);
			flock($fp, 3);
			fwrite($fp, $str);
			fclose($fp);
			return true;
		}
		else
		{
			return false;
		}
	}
}


?>