<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 			= '编号';
$_LANG['classname'] 	= '栏目名称';
$_LANG['linkurl'] 		= '链接地址';
$_LANG['position'] 		= '位置';
$_LANG['target'] 		= '打开方式';
$_LANG['orderid'] 		= '排序';
$_LANG['checkinfo'] 	= '是否显示';

$_LANG['position_child']= array("top" => "顶部", "middle" => "中间", "bottom" => "底部");
$_LANG['target_child'] 	= array("_self" => "本窗口", "_blank" => "新窗口");

/* js验证 */          
$_LANG['js']['classname']	= '请输入栏目名称!';
$_LANG['js']['linkurl']		= '请输入链接地址!';

$_LANG['system_content']	= '系统内容';
?>