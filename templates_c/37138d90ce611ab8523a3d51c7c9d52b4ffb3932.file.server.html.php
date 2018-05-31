<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 18:14:28
         compiled from "F:\WWW\20180426datong\templates\default\server.html" */ ?>
<?php /*%%SmartyHeaderCode:129515ae1a684e4a576-14532929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37138d90ce611ab8523a3d51c7c9d52b4ffb3932' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\server.html',
      1 => 1448327156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129515ae1a684e4a576-14532929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'webname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1a684f157a2_35807246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1a684f157a2_35807246')) {function content_5ae1a684f157a2_35807246($_smarty_tpl) {?>	<?php $_smarty_tpl->tpl_vars['result'] = new Smarty_variable(GetArticle_show($_GET['cid']), null, 0);?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<meta name="generator" content="{$generator}" />
<meta name="keywords" content="{$keyword}" />
<meta name="description" content="{$description}" />
</head>
<body>
<div>

	<!--  body  开始  -->


	<?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>



	<!--  body  结束  -->

</body>
</html>
<?php }} ?>