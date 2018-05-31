<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 商店设置 */
$_LANG['shop_nav'][0] 		= '网店信息';
$_LANG['shop_nav'][1] 		= '附件设置';
/*$_LANG['shop_nav'][2] 		= '基本设置';
$_LANG['shop_nav'][3] 		= '显示设置';
$_LANG['shop_nav'][4] 		= '购物流程';*/

$_LANG['watermark']   		= '水印设置';
$_LANG['add_set']     		= '增加新变量';
$_LANG['markswitch']  		= '是否开启水印';
$_LANG['markmin'] 	  		= '水印添加条件';
$_LANG['markminwidth']		= '宽';
$_LANG['markminheight']		= '高';
$_LANG['marktype']			= '水印类型';
$_LANG['marktype_pic']		= '图片';
$_LANG['marktype_size']		= '文字';
$_LANG['watermark_prew']	= '水印预览';
$_LANG['upload_watermark']	= '上传水印';
$_LANG['marktext']			= '水印文字';
$_LANG['markcolor']			= '文字颜色';
$_LANG['marksize']			= '文字大小';
$_LANG['markwhere']			= '水印位置';
$_LANG['markwhere_0']		= '随机';
$_LANG['markwhere_1']		= '左上';
$_LANG['markwhere_2']		= '中上';
$_LANG['markwhere_3']		= '右上';
$_LANG['markwhere_4']		= '左中';
$_LANG['markwhere_5']		= '中间';
$_LANG['markwhere_6']		= '右中';
$_LANG['markwhere_7']		= '左下';
$_LANG['markwhere_8']		= '中下';
$_LANG['markwhere_9']		= '右下';

$_LANG['varname']			= '变量名称';
$_LANG['varinfo']			= '参数说明';
$_LANG['varcontent']		= '参数提示';
$_LANG['varvalue']			= '变量值';
$_LANG['varinfo']			= '参数说明';
$_LANG['vartype']			= '变量类型';
$_LANG['vartype_list']['string']	= '文本';
$_LANG['vartype_list']['number']	= '数字';
$_LANG['vartype_list']['bool']		= '布尔(Y/N)';
$_LANG['vartype_list']['bstring']	= '多行文本';
$_LANG['vartype_list']['upload']	= '上传文件';
$_LANG['vartype_list']['select']	= '下拉列表';
$_LANG['vargroup']= '所属组';

$_LANG['js']['config']				= '变量成功保存，但由于 config.php 无法写入，因此不能更新配置！';

$_LANG['varvalue_tips']				= '下拉菜单填值，格式：“选项，”每个选项用","分割';
?>