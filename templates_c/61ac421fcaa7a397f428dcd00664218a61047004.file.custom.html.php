<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:37:46
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\custom.html" */ ?>
<?php /*%%SmartyHeaderCode:53615ae1498a386ba6-24842785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61ac421fcaa7a397f428dcd00664218a61047004' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\custom.html',
      1 => 1448327042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53615ae1498a386ba6-24842785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'custom_info' => 0,
    'i' => 0,
    'list' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1498a50d603_69725397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1498a50d603_69725397')) {function content_5ae1498a50d603_69725397($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['custom'];?>
</title>
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
</head>
<body>
  	<div class="menu_top">
    <a href="javascript:DialogIframe('index.php?act=edit','<?php echo $_smarty_tpl->tpl_vars['lang']->value['custom'];?>
','80%','95%','','','','dosubmit');" class="tr"><img src="templates/default/images/menu_1.jpg" /></a><?php echo $_smarty_tpl->tpl_vars['lang']->value['custom'];?>
</div>
    <div class="menu_list">
        <ul>
        	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
        	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custom_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
            	<li class="menu<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</a></li>
            <?php } ?>
        </ul>
    </div>

</body>
</html>
<?php }} ?>