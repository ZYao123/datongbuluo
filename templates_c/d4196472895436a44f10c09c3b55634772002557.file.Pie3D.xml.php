<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:00:47
         compiled from "F:\WWW\shopx\manage\templates\default\Charts\Pie3D.xml" */ ?>
<?php /*%%SmartyHeaderCode:1225959f1a43fb528a9-43287023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4196472895436a44f10c09c3b55634772002557' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\Charts\\Pie3D.xml',
      1 => 1448326956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225959f1a43fb528a9-43287023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkinfo0' => 0,
    'countPayfor' => 0,
    'checkinfo1' => 0,
    'countShip' => 0,
    'checkinfo2' => 0,
    'countReceipt' => 0,
    'checkinfo3' => 0,
    'countReceipted' => 0,
    'checkinfoOther' => 0,
    'countOther' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a43fba0ab5_78273300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a43fba0ab5_78273300')) {function content_59f1a43fba0ab5_78273300($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="gb2312"<?php echo '?>';?>

<graph baseFontSize='12' showNames='1'  decimalPrecision='0'  >
	<set name='<?php echo $_smarty_tpl->tpl_vars['checkinfo0']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['countPayfor']->value;?>
' />
	<set name='<?php echo $_smarty_tpl->tpl_vars['checkinfo1']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['countShip']->value;?>
'  />
	<set name='<?php echo $_smarty_tpl->tpl_vars['checkinfo2']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['countReceipt']->value;?>
' />
	<set name='<?php echo $_smarty_tpl->tpl_vars['checkinfo3']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['countReceipted']->value;?>
' />
	<set name='<?php echo $_smarty_tpl->tpl_vars['checkinfoOther']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['countOther']->value;?>
' />
</graph><?php }} ?>