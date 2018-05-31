<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:20
         compiled from "F:\WWW\shopx\m\templates\web\copyright.html" */ ?>
<?php /*%%SmartyHeaderCode:1580859f1a5500063f7-19191157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee3d2fe30613cfa77053dc6e602599e89f5ed461' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\copyright.html',
      1 => 1448326858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580859f1a5500063f7-19191157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'con' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a550011f77_47551808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a550011f77_47551808')) {function content_59f1a550011f77_47551808($_smarty_tpl) {?><div class="copyright">
<?php $_smarty_tpl->tpl_vars['con'] = new Smarty_variable(GetArticle_show(46), null, 0);?>
  <?php echo $_smarty_tpl->tpl_vars['con']->value['phone_content'];?>

</div><?php }} ?>