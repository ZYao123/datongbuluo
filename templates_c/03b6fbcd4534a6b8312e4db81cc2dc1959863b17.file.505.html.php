<?php /* Smarty version Smarty-3.1.14, created on 2017-11-16 11:45:15
         compiled from "F:\WWW\shopx\templates\default\505.html" */ ?>
<?php /*%%SmartyHeaderCode:228245a0d09cbd0faa0-42254345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b6fbcd4534a6b8312e4db81cc2dc1959863b17' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\505.html',
      1 => 1448327144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228245a0d09cbd0faa0-42254345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0d09cbdfa0d6_44226185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d09cbdfa0d6_44226185')) {function content_5a0d09cbdfa0d6_44226185($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body>
<div class="help_bj">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--  body  开始  -->
<div class="body" style="clear:both;background:url(templates/default/images/404.jpg) no-repeat center ; height:230px;">
<div style=" padding-left:575px;padding-top:180px;line-height:50px; font-size:20px; font-weight:bold; color:#F00 ; ">
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>