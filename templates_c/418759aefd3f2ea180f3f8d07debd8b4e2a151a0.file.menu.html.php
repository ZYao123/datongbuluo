<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:37:34
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:253695ae1497eac39f3-25122738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418759aefd3f2ea180f3f8d07debd8b4e2a151a0' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\menu.html',
      1 => 1448327054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253695ae1497eac39f3-25122738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home' => 0,
    'session' => 0,
    'menu' => 0,
    'list' => 0,
    'k' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1497eb38d06_10814760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1497eb38d06_10814760')) {function content_5ae1497eb38d06_10814760($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['home']->value['title'];?>
-<?php echo $_smarty_tpl->tpl_vars['home']->value['menu'];?>
</title>
<link href="templates/default/style/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/tinyscrollbar.js"></script>
<script type="text/javascript" src="templates/default/js/leftmenu.js"></script>
</head>

<body style="background-color:transparent">
    <div class="tGradient"></div>
    <div id="scrollmenu">
        <div class="scrollbar">
            <div class="track" >
                <div class="thumb">
                    <div class="end"></div>
                </div>
            </div>
        </div>
        <div class="viewport">
            <div class="overview">
            <!--开始-->
                <div class="leftl">
                    <span class="leftl_top">
                        <div class="leftl_text">
                            <a href="index.php?act=mywork" class="wo" target="_parent">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['home']->value['mywork'];?>
</a>
                            <a href="developer.php" class="wo1" target="main">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['home']->value['box'];?>
</a>
                        </div>
                    </span>
                    <div class="leftl_yh">
                        <span class="tl"><img src="templates/default/images/hy_5.jpg" /></span>
                        <span class="leftl_yh_wz"><?php echo $_smarty_tpl->tpl_vars['session']->value['admin'];?>
<br />
<a href="index.php?act=unlogin" target="_parent"><?php echo $_smarty_tpl->tpl_vars['home']->value['unlogin'];?>
</a></span>
                    </div>
                    <div class="leftl_list">
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['list']->value['children']){?>
                                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['child']->key;
?>
                                    <li class="leftl_bj2" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['linkurl'];?>
" target="main" onclick="setmenuclass('<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">
                                            <div class="leftl_tp">
                                            	<div class="ico" id="ico_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></div>
                                            </div>
                                            <?php echo $_smarty_tpl->tpl_vars['child']->value['label'];?>

                                        </a>
                                    </li>
                                <?php } ?>
                            <?php }?>
                    	<?php } ?>
                        </ul>
                    </div>
                </div>
         	<!--结束-->
            </div>
        </div>
    </div>
    <div class="bGradient"></div>
    <div class="left_bot">
        <div><img src="templates/default/images/left_btn.png" width="100%" height="16" /></div>
        <div class="cprt_bg"><?php echo $_smarty_tpl->tpl_vars['home']->value['copyright'];?>
</div>
    </div>
</body>
</html>
<?php }} ?>