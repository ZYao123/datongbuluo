<?php /* Smarty version Smarty-3.1.14, created on 2017-12-01 16:57:40
         compiled from "F:\WWW\shopx\templates\default\news.html" */ ?>
<?php /*%%SmartyHeaderCode:310535a211984934b37-85408109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18007d8b0855fbc3bb0b3794bca2a383ae723c28' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\news.html',
      1 => 1448327154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310535a211984934b37-85408109',
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
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a211984f18991_31986126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a211984f18991_31986126')) {function content_5a211984f18991_31986126($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\shopx\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <div class="linkl1"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
    </div>
    <!--  body  结束  -->
	<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>