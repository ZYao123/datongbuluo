<?php /* Smarty version Smarty-3.1.14, created on 2017-11-24 13:13:51
         compiled from "F:\WWW\shopx\templates\default\news_info.html" */ ?>
<?php /*%%SmartyHeaderCode:29325a17aa8f508257-94633133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd640a922d9fc8821bae9ab5e5c49f94675cd9e08' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\news_info.html',
      1 => 1448327154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29325a17aa8f508257-94633133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'getposstr' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a17aa8f6f45c9_49308721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a17aa8f6f45c9_49308721')) {function content_5a17aa8f6f45c9_49308721($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="templates/default/style/suggest.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<script type="text/javascript" src="js/transport.js"></script>
<script type="text/javascript" src="js/loadimage.js"></script>
</head>
<body>
<div class="help_bj">
   <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--  body  开始  -->
    <div class="body">
        <div class="ltitle"><?php echo $_smarty_tpl->tpl_vars['getposstr']->value;?>
</div>
        <div class="xwxxy">
        	<?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

        </div>
    </div>
    <!--  body  结束  -->
   <?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>