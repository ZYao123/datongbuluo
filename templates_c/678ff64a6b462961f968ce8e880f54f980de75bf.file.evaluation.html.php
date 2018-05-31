<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:19:37
         compiled from "F:\WWW\shopx\templates\default\evaluation.html" */ ?>
<?php /*%%SmartyHeaderCode:772759f1a8a98536f6-90196631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678ff64a6b462961f968ce8e880f54f980de75bf' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\evaluation.html',
      1 => 1448327144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772759f1a8a98536f6-90196631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'gid' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a8a98efb25_85212126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a8a98efb25_85212126')) {function content_59f1a8a98efb25_85212126($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{ background:none;}
</style>
</head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
function cfm_msg()
{

	if($("#title").val() == "")
	{
		alert("请填写评论标题！");
		$("#title").focus();
		return false;
	}
	
	if($("#content").val() == "")
	{
		alert("请填写评论内容！");
		$("#content").focus();
		return false;
	}
	$("#form").submit();
}

$(function(){

	
	$("#title").focus(function(){
		$("#title").attr("class", "msg_input_on"); 
	}).blur(function(){
		$("#title").attr("class", "msg_input"); 
	});
	
	$("#content").focus(function(){
		$("#content").attr("class", "msg_input_on"); 
	}).blur(function(){
		$("#content").attr("class", "msg_input"); 
	});

	$("#title").focus();
});
</script>
<body >
<div class="subCont">
			
			<form name="form" id="form" method="post" action="member.php?act=evaluation_add">
            	<span class="msgtitle">评论标题：</span><input name="title" type="text" id="title" class="msg_input" /><div class="hr_10"></div><div class="hr_10"></div>
				<span class="msgtitle">评论内容：</span><textarea name="content" class="msg_input" style="width:400px;height:60px;overflow:auto;" id="content" ></textarea>
				<div class="msg_btn_area"> <a href="javascript:void(0);" onclick="cfm_msg();return false;">提　交</a></div>
                <input type="hidden" name="gid"  value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" />
                <input type="hidden" name="userid"  value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
			</form>
		
			
		</div>
</body>
</html><?php }} ?>