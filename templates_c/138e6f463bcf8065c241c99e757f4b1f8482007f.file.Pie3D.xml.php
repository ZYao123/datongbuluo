<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:30:31
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\Charts\Pie3D.xml" */ ?>
<?php /*%%SmartyHeaderCode:310275ae3dcc7985be0-71283008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '138e6f463bcf8065c241c99e757f4b1f8482007f' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\Charts\\Pie3D.xml',
      1 => 1448326956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310275ae3dcc7985be0-71283008',
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
  'unifunc' => 'content_5ae3dcc79e14c8_05176818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3dcc79e14c8_05176818')) {function content_5ae3dcc79e14c8_05176818($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="gb2312"<?php echo '?>';?>

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