<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 			= '编号';
$_LANG['classname'] 	= '类型名称';
$_LANG['orderid'] 		= '排序';
$_LANG['checkinfo'] 	= '审核';
$_LANG['attrname'] 		= '属性名';
$_LANG['rename'] 		= '属性别名';
$_LANG['showtype'] 		= '前台列表页表现类型';
$_LANG['intype'] 		= '录入方式';
$_LANG['attrvalue'] 	= '选择项可选值';

$_LANG['submit'] 		= '保存';
$_LANG['del'] 			= '删除';
$_LANG['edit'] 			= '编辑';
$_LANG['nav_brand'] 	= '关联品牌';
$_LANG['nav_attr'] 		= '扩展属性';
$_LANG['nav_norm'] 		= '规格';
$_LANG['nav_name'] 		= '名称';
$_LANG['nav_add_name'] 	= '添加属性值';
$_LANG['nav_edit_name'] = '编辑属性值';
/* js验证 */          
$_LANG['js']['classname']		= '请输入类型名称!';

$_LANG['showtype_value'] = array(0 => '不作为筛选项', 1 => '可筛选--平铺', 2 => '可筛选--下拉');
$_LANG['intype_value']   = array(0 => '单选项', 1 => '多选项', 2 => '单行录入', 3 => '多行录入');
?>