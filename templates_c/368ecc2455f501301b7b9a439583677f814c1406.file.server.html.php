<?php /* Smarty version Smarty-3.1.14, created on 2017-11-13 11:37:30
         compiled from "F:\WWW\shopx\templates\default\server.html" */ ?>
<?php /*%%SmartyHeaderCode:232885a09137ad37058-37354579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368ecc2455f501301b7b9a439583677f814c1406' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\server.html',
      1 => 1448327156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232885a09137ad37058-37354579',
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
  'unifunc' => 'content_5a09137adb0e51_00295294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a09137adb0e51_00295294')) {function content_5a09137adb0e51_00295294($_smarty_tpl) {?>	<?php $_smarty_tpl->tpl_vars['result'] = new Smarty_variable(GetArticle_show($_GET['cid']), null, 0);?>  
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