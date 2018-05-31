<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:58:53
         compiled from "F:\WWW\shopx\templates\default\point.html" */ ?>
<?php /*%%SmartyHeaderCode:1541659f1b1ddef9b47-29740125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bffde34fe672096390245fd86cd64ea3504d840' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\point.html',
      1 => 1448327154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1541659f1b1ddef9b47-29740125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1b1de01d055_57997718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b1de01d055_57997718')) {function content_59f1b1de01d055_57997718($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>
<body>
<div class="help_bj">
	<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--  body  开始  -->
	<div class="body">
		<div class="zh_right" style="float:left;width:887px;"><span class="zh_right_wz" style="width:887px;">商城首页 > <span class="zh_color">购物券</span></span>
			<div class="zh_title" style="width:887px;"><span class="zh_title_wz">购物券</span></div>
			<div class="zh_wz">
				<?php echo $_smarty_tpl->getSubTemplate ("point_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="linkl1"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
				
			</div>
		</div>
	</div>
	<!--  body  结束  -->
	<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>