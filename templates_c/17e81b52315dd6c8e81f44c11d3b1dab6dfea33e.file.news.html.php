<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 15:25:34
         compiled from "F:\WWW\20180426datong\templates\default\news.html" */ ?>
<?php /*%%SmartyHeaderCode:180325ae18dae304cc8-44846274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e81b52315dd6c8e81f44c11d3b1dab6dfea33e' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\news.html',
      1 => 1524813932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180325ae18dae304cc8-44846274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae18dae3fae78_35613322',
  'variables' => 
  array (
    'getposstr' => 0,
    'info' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18dae3fae78_35613322')) {function content_5ae18dae3fae78_35613322($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <div class="body" style="min-height: 400px;">
        <div class="ltitle"><?php echo $_smarty_tpl->tpl_vars['getposstr']->value;?>
</div>
        <div class="news_listl">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <li><a href="news.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['posttime'],'%Y-%m-%d %H:%M:%S');?>
</li>
			<?php } ?>
            </ul>
        </div>
        <div class="page tr"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
    </div>
    <div style="clear:both;"></div>
    <!--  body  结束  -->
	<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>