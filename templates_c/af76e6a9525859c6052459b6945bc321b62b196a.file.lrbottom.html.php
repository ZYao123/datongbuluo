<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:16:49
         compiled from "F:\WWW\shopx\templates\default\lrbottom.html" */ ?>
<?php /*%%SmartyHeaderCode:2502759f1a801ed51f1-56059811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af76e6a9525859c6052459b6945bc321b62b196a' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\lrbottom.html',
      1 => 1448327150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2502759f1a801ed51f1-56059811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
    'list' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a801ef0778_09778271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a801ef0778_09778271')) {function content_59f1a801ef0778_09778271($_smarty_tpl) {?>    <div class="zc_bot">
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = GetNav('bottom'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>|<?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['list']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
        <?php } ?>
    <br />
        <span class="size"><?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
</span></div>
<?php }} ?>