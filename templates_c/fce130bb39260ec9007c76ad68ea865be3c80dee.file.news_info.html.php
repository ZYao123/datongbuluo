<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 15:31:48
         compiled from "F:\WWW\20180426datong\templates\default\news_info.html" */ ?>
<?php /*%%SmartyHeaderCode:230855ae18ddc5225b1-44976128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce130bb39260ec9007c76ad68ea865be3c80dee' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\news_info.html',
      1 => 1524814254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230855ae18ddc5225b1-44976128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae18ddc5b6cd8_21955888',
  'variables' => 
  array (
    'getposstr' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18ddc5b6cd8_21955888')) {function content_5ae18ddc5b6cd8_21955888($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<link href="templates/default/style/suggest.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<script type="text/javascript" src="js/transport.js"></script>
<script type="text/javascript" src="js/loadimage.js"></script>
</head>
<body>

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


</body>
</html>
<?php }} ?>