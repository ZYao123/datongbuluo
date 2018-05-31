<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 13:32:16
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\templates.html" */ ?>
<?php /*%%SmartyHeaderCode:92885ae164607b0f78-76947435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48877bf4bcec275523703bb1ceac9ef697c37345' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\templates.html',
      1 => 1448327062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92885ae164607b0f78-76947435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'templates' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae164607e7a81_47818873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae164607e7a81_47818873')) {function content_5ae164607e7a81_47818873($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['select_template'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
</head>
<body>

  	<div class="template_top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cur_template'];?>
</div>
    <div class="template_list">
        <ul>
           <li>
           <table><tr><td width="160"><img src="../templates/default/images/temp.jpg" width="150" height="150" /></td><td valign="top"></td></tr></table></li>
        </ul>
    </div>
    
	<div class="template_top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select_template'];?>
</div>
    <div class="template_list">
        <ul>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
           <li>
           <table>
           <tr><td width="160"><a href="?act=setup&file=<?php echo $_smarty_tpl->tpl_vars['list']->value['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
" width="150" height="150" /></a></td><td valign="top"></td></tr></table></li>
        <?php } ?>
        </ul>
    </div>
</body>
</html>
<?php }} ?>