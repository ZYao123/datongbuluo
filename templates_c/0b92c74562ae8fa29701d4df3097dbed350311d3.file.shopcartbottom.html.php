<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:17:34
         compiled from "F:\WWW\shopx\templates\default\shopcartbottom.html" */ ?>
<?php /*%%SmartyHeaderCode:1442759f1a82e7e2034-39771588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b92c74562ae8fa29701d4df3097dbed350311d3' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\shopcartbottom.html',
      1 => 1448327156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442759f1a82e7e2034-39771588',
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
  'unifunc' => 'content_59f1a82e7f58b1_91650757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a82e7f58b1_91650757')) {function content_59f1a82e7f58b1_91650757($_smarty_tpl) {?><!--  bot  开始  -->
<div class="bot" >
    <div class="bot_links">
    
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
    </div>
    <div class="bot_wz"> <?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
</div>
  
</div>
<!--  bot  结束  -->
<?php }} ?>