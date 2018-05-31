<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 16:33:02
         compiled from "F:\WWW\20180426datong\templates\default\lrbottom.html" */ ?>
<?php /*%%SmartyHeaderCode:64775ae18ebe27a570-55411275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a504a25f2ec0df6d50774831567934232cb05aed' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\lrbottom.html',
      1 => 1448327150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64775ae18ebe27a570-55411275',
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
  'unifunc' => 'content_5ae18ebe28ddf9_29674977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18ebe28ddf9_29674977')) {function content_5ae18ebe28ddf9_29674977($_smarty_tpl) {?>    <div class="zc_bot">
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