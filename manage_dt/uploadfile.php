<?php 
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
require(LCSHOP_INC.'/include/cls_watermark.php');	//引入水印配置文件
require(LCSHOP_INC.'/include/cls_upload.php');		//引入上传类
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/uploadfile.php');

$smarty->assign("lang", $_LANG);
$smarty->display('uploadfile.html');

	
if(!empty($_FILES))
{
	$upload_info = UploadFile('upfile');
	$inputname = isset($inputname) ? $inputname : 'pic1';
	if(!is_array($upload_info))
	{
		echo '
			<script>
				UploadPrompt("'.$upload_info.'");
			</script>';
	}
	else
	{
		echo '
			<script>
				var aValue = "'.$upload_info[2].'";
				var origin = artDialog.open.origin;
				var input = origin.document.getElementById("'.$inputname.'");			
				input.value = aValue;
				input.select();
				art.dialog.close();
			</script>';
	}
}
?>
