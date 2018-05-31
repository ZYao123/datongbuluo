<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 上传类提示框 */
$_LANG['nochechfile'] 			= '请选择上传文件或您上传的文件超过php.ini设定最大文件上传限制';
$_LANG['filetype'][0]			= '您上传的文件类型为：';
$_LANG['filetype'][1]			= '，该类文件不允许通过后台上传！';
$_LANG['maxfile'] 				= '您上传的文件超过系统设定最大文件上传限制';
$_LANG['nopri'] 				= '上传目录没有可写权限!';
$_LANG['alike'] 				= '同名文件已经存在了！';
$_LANG['unknown'] 				= '发生未知错误，上传失败！';
$_LANG['upload_succeed'] 		= '上传成功！ 文件大小为：';

/* 页面显示信息 */   
$_LANG['upload_title'] 			= '上传文件';     
$_LANG['check_file'] 			= '请选择上传文件：';  
$_LANG['upload'] 				= '上传'; 

$_LANG['upload_file_type'] 		= '仅支持 gif / jpg / png 格式'; 
$_LANG['watermark_select'] 		= '请选择要上传的水印文件！'; 
$_LANG['watermark'] 			= '文件创建失败，可能上传文件容量超过了ini文件定义的最大文件限制[{%s}]或最大文件传递限制[{%s1}]'; 
?>