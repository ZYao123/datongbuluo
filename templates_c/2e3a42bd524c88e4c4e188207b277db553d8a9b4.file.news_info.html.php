<?php /* Smarty version Smarty-3.1.14, created on 2018-05-11 16:34:49
         compiled from "C:\wamp64\www\templates\default\news_info.html" */ ?>
<?php /*%%SmartyHeaderCode:20975af555a9d9b0b0-10555980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3a42bd524c88e4c4e188207b277db553d8a9b4' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\news_info.html',
      1 => 1524814256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20975af555a9d9b0b0-10555980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getposstr' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af555a9e1b077_05588823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af555a9e1b077_05588823')) {function content_5af555a9e1b077_05588823($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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