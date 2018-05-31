<?php 
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/uploadfile.php');

$upload = '';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$upload = upload_watermark();
}
$smarty->assign("upload", $upload);
$smarty->assign("lang"  , $_LANG);
$smarty->display('upload_watermark.html');

function upload_watermark()
{
	global $cfg_max_file_size, $_LANG;
	
	if(!is_uploaded_file($_FILES['upfile']['tmp_name'])) //是否存在文件
	{
		return $_LANG['watermark_select'];
	}

	$file = $_FILES['upfile'];
	$file_name = $file['name'];
	$file_type_name = substr(strrchr($file_name, '.'), 1);
	$file_size = $file['size'];
	$file_type = $file['type'];
	$file_tmp_name = $file['tmp_name'];
	
	if(!in_array($file_type_name, array('gif','jpg','png'))) //检查文件类型
	{
		return $_LANG['filetype'][0]."[$file_type_name]".$_LANG['filetype'][1];
	}
	
	if(!is_uploaded_file($file_tmp_name)) //是否存在临时文件
	{
		return str_replace("{$s}",$ini_upload_max_size,str_replace("{$s1}",$ini_post_max_size,$_LANG['watermark']));
	}
	
	if($file_size > $cfg_max_file_size) //检查文件大小
	{
		return $_LANG['maxfile']."[".GetRealSize($cfg_max_file_size)."]";
	}
	
	$file_upload_name = LCSHOP_DATA.'watermark/watermarket.'.$file_type_name; //构建上传服务器后文件地址

	if(move_uploaded_file($file_tmp_name, $file_upload_name))
	{
		return "<script>parent.document.getElementById(\"markpicurl\").value='data/watermark/watermarket.".$file_type_name."';parent.document.getElementById(\"watermark_prew\").src='../data/watermark/watermarket.".$file_type_name."';</script>".$_LANG['upload_succeed'].GetRealSize($file_size);
	}
	else
	{
		return $_LANG['unknown'];
	}
}

?>