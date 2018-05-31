<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:19:20
         compiled from "F:\WWW\shopx\templates\default\go_pay.html" */ ?>
<?php /*%%SmartyHeaderCode:1491259f1a8984f4365-07389290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e017111cd2d90e2cd6b3990e5d746ff08bc10e' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\go_pay.html',
      1 => 1448327144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491259f1a8984f4365-07389290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'LOGO' => 0,
    'html_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a898551f84_47291425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a898551f84_47291425')) {function content_59f1a898551f84_47291425($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<link href="templates/default/style/shopcart.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
</head>
<body>
<div class="gwc1">
    <!--  header  开始  -->
    <div class="gwc_header">
        <?php echo $_smarty_tpl->getSubTemplate ("shopcarthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="gwc_top">
            <div class="gwc_top_left"><a href='index.php'><img src="<?php echo $_smarty_tpl->tpl_vars['LOGO']->value['picurl'];?>
"class="tl" /></a></div>
            <div class="gwc_top_right">
                <div class="gwc_lc gwc_lc_3"><span class="gwc_lc_w1"><img src="templates/default/images/1.jpg" align="left" />&nbsp;我的购物车</span><span class="gwc_lc_w2"><img src="templates/default/images/gwc_5.jpg" align="left" />&nbsp;确认订单信息</span><span class="tl color_white" ><img src="templates/default/images/3.jpg" align="left" />&nbsp;付款</span></div>
            </div>
        </div>
    </div>
    <!--  header  结束  -->
    <!--  body  开始  -->
    <div class="gwc_body">
    <?php echo $_smarty_tpl->tpl_vars['html_text']->value;?>

    </div>
    <div style="clear:both"></div>
    <!--  body  结束  -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("shopcartbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>