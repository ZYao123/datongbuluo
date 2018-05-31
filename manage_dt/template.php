<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/template.php');
include_once(LCSHOP_INC . 'templates/config.php');

/* 此页公共变量 */
$act 		   = isset($act) 			  ? $act 			  : 'list';
$curr_template = isset($_CFG['template']) ? $_CFG['template'] : '';

	
/* 模板列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("template_manage");
			
	/* 获得可用的模版 */
    $templates = array();
	$template_dir  = @opendir(LCSHOP_INC . 'templates/');
    while ($file = readdir($template_dir))
    {
        if ($file != '.' && $file != '..' && is_dir(LCSHOP_INC. 'templates/' . $file) && $file != '.svn' && $file != 'index.htm')
        {
            $templates[] = array('pic'=> '../templates/' . $file . '/images/temp.jpg', 'file'=>'/templates/' . $file);
        }
    }
    @closedir($template_dir);

	$smarty->assign("curr_template" , $curr_template);
	$smarty->assign("templates" , $templates);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('templates.html');
}

if($act == 'setup')
{
	$str  = '<?php	if(!defined(\'IN_LCSHOP\')) exit(\'Request Error!\');'."\r\n\r\n";
	$str .= '$_CFG[\'template\'] = \''.$file.'\';'."\r\n";
	$str .= '?>';

	if(Writef(LCSHOP_INC. 'templates/config.php',$str))
	{
		ShowMsg($_LANG['js']['config'], 'template.php');
		exit();
	}
}
?>