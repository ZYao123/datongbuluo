<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:42:22
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\upload_watermark.html" */ ?>
<?php /*%%SmartyHeaderCode:725ae14a9ea542e7-34816046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73b0c6ed11420030cfeaa1ffde590298f89df12f' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\upload_watermark.html',
      1 => 1448327062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725ae14a9ea542e7-34816046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'upload' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae14a9ea96972_37752422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae14a9ea96972_37752422')) {function content_5ae14a9ea96972_37752422($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_title'];?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/mgr.func.js"></script>
</head>
<body style="margin:0;padding:0;">
<div style="float:left;margin-right:12px;">
		<form name="form" enctype="multipart/form-data" method="post" action="">
				<input type="file" name="upfile" style="height:21px;width:195px;">
				<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['upload'];?>
" style="height:21px;width:45px;">
		</form>
</div>
<div class="uploading" style="line-height:21px;">
	<span style="color:#999;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_file_type'];?>
</span>
    <span style="color:#ff0000;">
    <?php echo $_smarty_tpl->tpl_vars['upload']->value;?>

    </span>
</div>
</body>
</html><?php }} ?>