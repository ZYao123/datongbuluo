<?php	
define('IN_LCSHOP', true);
require(dirname(__FILE__).'/../../include/config.php');
$watermark_inc = LCSHOP_DATA . 'watermark/watermark.inc.php';
include_once($watermark_inc);
$watermark_fontfile = LCSHOP_DATA . 'watermark/fontfile.inc.php';
include_once($watermark_fontfile);
require_once(LCSHOP_INC . 'include/cls_watermark.php');  		//全局常用函数

/*
**************************
(C)2010-2013 LONGCAI.com
update: 2012-9-15 10:50:00
person: Feng
**************************
*/


//初始化参数
$action      = isset($action)      ? $action      : '';
$iswatermark = isset($iswatermark) ? $iswatermark : '';
$timestamp   = isset($timestamp)   ? $timestamp   : '';
$verifyToken = md5('unique_salt'.$timestamp);


//判断上传状态
if(!empty($_FILES) && $token==$verifyToken && isset($sessionid))
{

	//引入上传类
	require(LCSHOP_INC.'/include/cls_upload.php');
	$upload_info = UploadFile('Filedata', $iswatermark);

	/* 返回上传状态，是数组则表示上传成功
	   非数组则是直接返回发生的问题 */
	if(!is_array($upload_info))
		echo '0,'.$upload_info;
	else
		echo implode(',', $upload_info);

	exit();
}


//删除元素
if($action == 'del')
{
	$dosql->ExecNoneQuery("DELETE FROM `#@__uploads` WHERE path='$filename'");
	unlink(LCSHOP_INC .'/'. $filename);
	exit();
}
?>