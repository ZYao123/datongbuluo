<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 14:18:38
         compiled from "D:\freehost\datongbuluo\web\templates\default\news.html" */ ?>
<?php /*%%SmartyHeaderCode:271075ae4123e371599-80316492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c6f530b51480c4fe72d67058e2445a05668aedd' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\templates\\default\\news.html',
      1 => 1524813934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271075ae4123e371599-80316492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getposstr' => 0,
    'info' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae4123e3eb6b3_01275178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae4123e3eb6b3_01275178')) {function content_5ae4123e3eb6b3_01275178($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\datongbuluo\\web\\include\\libs\\plugins\\modifier.date_format.php';
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