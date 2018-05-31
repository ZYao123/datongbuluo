<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 13:57:28
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\default.html" */ ?>
<?php /*%%SmartyHeaderCode:92745ae1497e83b256-14271345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26910d778e853fbde6887c874b10ac49f58afb20' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\default.html',
      1 => 1524722229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92745ae1497e83b256-14271345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1497e8d37f1_02909477',
  'variables' => 
  array (
    'home' => 0,
    'nav' => 0,
    'list' => 0,
    'lefturl' => 0,
    'righturl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1497e8d37f1_02909477')) {function content_5ae1497e8d37f1_02909477($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['home']->value['title'];?>
</title>
<link href="templates/default/style/frame.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/frame.js"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>

</head>
<body>

<div class="header">
    <div class="mb_header">
            <div class="mb_header_r">
           		<div class="logo03"><img src="templates/default/images/hy_21.png" /></div>
                <div class="icon_list" >
                    <ul>
                    	<li class="icon01">
                        <a href="javascript:DialogIframe('bug.php?act=add','<?php echo $_smarty_tpl->tpl_vars['home']->value['bug'];?>
','80%','95%','','','','dosubmit');">
<?php echo $_smarty_tpl->tpl_vars['home']->value['bug'];?>
</a></li>
                        <li class="icon02"><a href="../" target="_blank"><?php echo $_smarty_tpl->tpl_vars['home']->value['index'];?>
</a></li>
                    	<li class="icon03"><a href="index.php?act=clearcache" target="main"><?php echo $_smarty_tpl->tpl_vars['home']->value['cache'];?>
</a></li>
                    	<li class="icon04"><a href="index.php?act=unlogin"><?php echo $_smarty_tpl->tpl_vars['home']->value['unlogin'];?>
</a></li>
                    </ul>
                </div>
                
            	<div class="nav">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                <a href="javascript:;" onclick="TopMenu('index.php?act=menu&menukey=<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['righturl'];?>
')"><?php echo $_smarty_tpl->tpl_vars['list']->value['label'];?>
</a>
                <?php } ?>
                </div>
            </div>
    	</div>
    </div>
    
    <div class="left">
        <div class="menu">
            <iframe name="menu" id="menu" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['lefturl']->value;?>
" scrolling="no" allowTransparency="true" ></iframe>
        </div>
    </div>
    <div class="right">
        <div class="main">
        	<div class="left_btn02"><a href="javascript:;" class="togglemenu"><img src="templates/default/images/left_btn02.png" border="0" /></a></div>
            <iframe name="main" id="main" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['righturl']->value;?>
" allowTransparency="true" ></iframe>
   
        </div>
    </div>
    <div class="cl"></div>
</body>
</html><?php }} ?>