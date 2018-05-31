<?php
error_reporting(E_ALL & ~E_NOTICE);
if(!isset($_SESSION)) session_start();

header("Content-Type:text/html;charset=utf-8");

if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

define('ADMIN_INC'		, preg_replace("/[\/\\\\]{1,}/", '/', dirname(__FILE__)));			//admin/include
define('ADMIN'			, preg_replace("/[\/\\\\]{1,}/", '/', substr(ADMIN_INC, 0, -7)));	//admin
define('LCSHOP_INC'		, ADMIN 	 . '../');												//根目录
define('LCSHOP_DATA'	, LCSHOP_INC . 'data/');											
define('LCSHOP_TEMP'	, LCSHOP_INC . 'templates/');
define('LCSHOP_UPLOAD'	, LCSHOP_INC . 'uploads/');
define('LCSHOP_BACKUP'	, LCSHOP_INC . 'data/backup/');
define('LCSHOP_LANG'	, LCSHOP_INC . 'language/zh_cn/');
date_default_timezone_set('Asia/Shanghai');

if(!file_exists(LCSHOP_DATA . '/install_lock.txt')){
header("location:http://".$_SERVER['HTTP_HOST']."/install/");
}
require_once(LCSHOP_DATA . '/config.php'); 					//全局配置文件
require_once(LCSHOP_DATA . '/conn.inc.php');     			//数据库配置文件
require_once(LCSHOP_INC . 'include/func_common.php');  		//全局常用函数
require_once(LCSHOP_INC . 'include/libs/Smarty.class.php'); //引入smarty类
require_once(LCSHOP_INC . 'include/cls_mysql.php');			//mysql类
require_once(ADMIN_INC . '/cls_page.php');					//分页类
require_once(ADMIN_INC . '/func_common.php');  				//后台常用函数
require_once(LCSHOP_LANG . 'admin/uploadfile.php');			//上传类语言库
include_once(LCSHOP_LANG . 'admin/log_action.php');			//操作日志语言库
$config_cache = LCSHOP_DATA . '/config.php';

/* Session保存路径 */
$sess_savepath = LCSHOP_DATA.'sessions/';
if(is_writable($sess_savepath) &&
   is_readable($sess_savepath))
   session_save_path($sess_savepath);

/* 上传文件保存路径 */
$cfg_image_dir = LCSHOP_UPLOAD.'image';
$cfg_soft_dir  = LCSHOP_UPLOAD.'soft';
$cfg_media_dir = LCSHOP_UPLOAD.'media';


/* 系统版本号 */
$cfg_vernum  = file_get_contents(LCSHOP_DATA.'version/version.txt');
$cfg_vertime = file_get_contents(LCSHOP_DATA.'version/vertime.txt');

/* 设置默认时区 */
if(PHP_VERSION > '5.1')
{
	//$time51 = $cfg_timezone * -1;
   // @date_default_timezone_set('Etc/GMT'.$time51);
}


/* 直接应用变量名称替代 */
foreach(array('_GET','_POST') as $_request)
{
	foreach($$_request as $_k => $_v)
	{
		if(strlen($_k)>0 &&
		   preg_match('#^(GLOBALS|_GET|_POST|_SESSION|_COOKIE)#',$_k))
		{
			exit('不允许请求的变量名!');
		}

		${$_k} = _RunMagicQuotes($_v);
	}
}

/* 检测是否登录 */
if(isset($act) && $act != 'login' && $act != 'sublogin' && $act != 'desktop' && $act != 'reset'){
	if(!isset($_SESSION['admin']) || !isset($_SESSION['admin_pri']) || !isset($_SESSION['adminid']) || !isset($_SESSION['adminpwd']))
	{
		$_SESSION = array();
		session_unset();
		
		if(strstr(GetCurUrl(), '/plugin/') or
		   strstr(GetCurUrl(), '/editor/'))
		{
			echo '<script type="text/javascript">window.top.location.href="../../index.php";</script>';
		}
		else
		{
			echo '<script type="text/javascript">window.top.location.href="index.php";</script>';
		}
	
		exit();
	}
	else
	{
		$r = $dosql->getone("SELECT `password` FROM `#@__admin` WHERE `id` = ".$_SESSION['adminid']." and `username` = '".$_SESSION['admin']."'");
		if(isset($r['password']))
		{
			if (md5($r['password']) != $_SESSION['adminpwd'])
			{
				echo '<script type="text/javascript">window.top.location.href="index.php";</script>';
				exit();
			}
		}
		else
		{
			echo '<script type="text/javascript">window.top.location.href="index.php";</script>';
			exit();
		}
	}
}


$smarty = new Smarty;
$smarty->template_dir	 = ADMIN      .  'templates/default/';				//设置模板目录
$smarty->compile_dir	 = LCSHOP_INC . 'templates_c/';						//设置编译目录
$smarty->config_dir		 = LCSHOP_INC . 'configs/';							//配置文件目录
$smarty->cache_dir		 = LCSHOP_INC . 'cache/';							//设置缓存目录
$smarty->left_delimiter	 = '{'; 				//左右边界符
$smarty->right_delimiter = '}';					//左右边界符
//$smarty->force_compile = true;
$smarty->debugging		 = false;				//是否开启debug
$smarty->caching		 = false;				//是否开启缓存
$smarty->cache_lifetime	 = 120;					//缓存时间	
?>