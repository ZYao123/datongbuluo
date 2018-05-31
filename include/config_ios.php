<?php	
error_reporting(E_ALL & ~E_NOTICE);
header("Content-Type:text/html;charset=utf-8");
if(!defined('IN_LCSHOP'))
{
	exit('Request Error!');
}
define('LCSHOP_INC'		, str_replace('include/config_ios.php', '', str_replace('\\', '/', __FILE__)));//路径
define('ADMIN_INC'		, preg_replace("/[\/\\\\]{1,}/", '/', dirname(__FILE__)));//转义字符
define('LCSHOP_DATA'	, LCSHOP_INC . 'data/');//配置文件
define('LCSHOP_TEMP'	, LCSHOP_INC . 'ios/templates/');//模版
define('LCSHOP_UPLOAD'	, LCSHOP_INC . 'uploads/');//上传
define('LCSHOP_BACKUP'	, LCSHOP_INC . 'data/backup/');//备份
define('LCSHOP_LANG'	, LCSHOP_INC . 'language/zh_cn/');//语言包
date_default_timezone_set('Asia/Shanghai');
if(!file_exists(LCSHOP_DATA . '/install_lock.txt')){
header("location:http://".$_SERVER['HTTP_HOST']."/install/");
}
require_once(LCSHOP_DATA . '/config.php'); 					//全局配置文件
require_once(LCSHOP_DATA . '/conn.inc.php');     			//引入数据库类
require_once(LCSHOP_INC . 'include/func_common.php');  		//全局常用函数
require_once(LCSHOP_INC . 'include/libs/Smarty.class.php'); //引入smarty类
require_once(LCSHOP_INC . 'include/cls_mysql.php');			//mysql类
require_once(LCSHOP_INC . 'include/cls_page.php');			//分页类
require_once(LCSHOP_INC . 'include/cls_upload.php');		//上传类	
require_once(ADMIN_INC . '/func_common.php');  				//后台常用函数
require_once(LCSHOP_LANG . 'admin/uploadfile.php');			//上传类语言库
include_once(LCSHOP_LANG . 'admin/log_action.php');			//操作日志语言库
include_once(LCSHOP_TEMP . 'config.php');			

//网站开关
if($cfg_webswitch == 'N')
{
	echo $cfg_switchshow.'<br /><br /><i>'.$cfg_webname.'</i>';
	exit();
}


//检查外部传递的值并转义
function _RunMagicQuotes(&$svar)
{
	//PHP5.4已经将此函数移除
	if(@!get_magic_quotes_gpc())
	{
		if(is_array($svar))
		{
			foreach($svar as $_k => $_v) $svar[$_k] = _RunMagicQuotes($_v);
		}
		else
		{
			if(strlen($svar)>0 &&
			   preg_match('#^(cfg_|GLOBALS|_GET|_POST|_SESSION|_COOKIE)#',$svar))
			{
				exit('不允许请求的变量值!');
			}

			$svar = addslashes($svar);
		}
	}
	$svar =str_replace('>','〉',$svar);
	$svar =str_replace('<','〈',$svar);
	if (!is_array($svar))
	{
		$svar = trim($svar);  				//清理空格
		$svar = strip_tags($svar);   		//过滤html标签
		$svar = htmlspecialchars($svar); 	//将字符内容转化为html实体
		$svar = addslashes($svar);
	}
	else
	{
		 foreach($svar as $_k => $_v) 
		 {
			 $svar[$_k] = trim($_v);
			 $svar[$_k] = strip_tags($_v);
			 $svar[$_k] = htmlspecialchars($_v);
			 $svar[$_k] = addslashes($_v);
		 }
	}

	return $svar;
}


//直接应用变量名称替代
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

//Session保存路径
$sess_savepath = LCSHOP_DATA.'/sessions/';
if(is_writable($sess_savepath) &&
   is_readable($sess_savepath))
   session_save_path($sess_savepath);


//上传文件保存路径
$cfg_image_dir = LCSHOP_UPLOAD.'/image';
$cfg_soft_dir  = LCSHOP_UPLOAD.'/soft';
$cfg_media_dir = LCSHOP_UPLOAD.'/media';


//系统版本号
$cfg_vernum  = file_get_contents(LCSHOP_DATA.'/version/version.txt');
$cfg_vertime = file_get_contents(LCSHOP_DATA.'/version/vertime.txt');


//设置默认时区
if(PHP_VERSION > '5.1')
{
	//$time51 = $cfg_timezone * -1;
	//@date_default_timezone_set('Etc/GMT'.$time51);
}


//判断是否开启错误提示
//if($cfg_diserror == 'Y')
//	error_reporting(E_ALL);
//else
//	error_reporting(0);


//判断访问设备
/*if(IsMobile() && !strstr(GetCurUrl(),'3g.php'))
{
	header('location:3g.php');
}
*/



$smarty = new Smarty;
$smarty->template_dir	 = LCSHOP_INC . $_CFG['template'];	//设置模板目录
$smarty->compile_dir	 = LCSHOP_INC . 'templates_c/';						//设置编译目录
$smarty->config_dir		 = LCSHOP_INC . 'configs/';							//配置文件目录
$smarty->cache_dir		 = LCSHOP_INC . 'cache/';							//设置缓存目录
$smarty->left_delimiter	 = '{'; 				//左右边界符
$smarty->right_delimiter = '}';					//左右边界符
//$smarty->force_compile = true;
$smarty->debugging		 = false;				//是否开启debug
$smarty->caching		 = false;				//是否开启缓存
$smarty->cache_lifetime	 = 120;					//缓存时间


//全局变量
$smarty->assign('webname'      , $cfg_webname);		//网站名称	
$smarty->assign('generator'    , '');	//引擎
$smarty->assign('keyword'      , $cfg_keyword);		//关键词
$smarty->assign('description'  , $cfg_description);	//摘要
$smarty->assign('copyright'    , $cfg_copyright);	//版权

@$smarty->assign('username'     ,  AuthCode(@$_COOKIE['username']));//用户名
$smarty->assign('template_dir'      ,"templates/web/");		//网站名称	
if (@$from == '')
{
	$from = encode64(getcururl());
}
$smarty->assign("fromurl"         ,$from);//返回原地址

?>