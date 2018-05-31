<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:00:47
         compiled from "F:\WWW\shopx\manage\templates\default\Charts\MSColumn3D.xml" */ ?>
<?php /*%%SmartyHeaderCode:2917959f1a43fd795a1-42310832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc37cb259dc9dbc600816b300bccd1613215249' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\Charts\\MSColumn3D.xml',
      1 => 1448326956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2917959f1a43fd795a1-42310832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xmcaption' => 0,
    'month' => 0,
    'list' => 0,
    'reg_user' => 0,
    'reg_count' => 0,
    'order_user' => 0,
    'order_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a43fdbfab7_97303658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a43fdbfab7_97303658')) {function content_59f1a43fdbfab7_97303658($_smarty_tpl) {?><graph baseFontSize='12' xaxisname='' yaxisname='' hovercapbg='DEDEBE' hovercapborder='889E6D' rotateNames='0' yAxisMaxValue='100' numdivlines='9' divLineColor='CCCCCC' divLineAlpha='80' decimalPrecision='0' showAlternateHGridColor='1' AlternateHGridAlpha='30' AlternateHGridColor='CCCCCC' caption='<?php echo $_smarty_tpl->tpl_vars['xmcaption']->value;?>
' subcaption='' >
   <categories font='Arial' fontColor='000000'>
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['month']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	  <category name='<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
'/>
	  <?php } ?>
   </categories>
   <dataset seriesname='<?php echo $_smarty_tpl->tpl_vars['reg_user']->value;?>
' color='f19e29' >
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg_count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	  <set value='<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
' />
	  <?php } ?>
   </dataset>
    <dataset seriesname='<?php echo $_smarty_tpl->tpl_vars['order_user']->value;?>
' color='ff6868' >
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	  <set value='<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
' />
	  <?php } ?>
   </dataset>
<!--    <dataset seriesname='Grain' color='C9198D' >
      <set value='27' />
      <set value='25' />
      <set value='28' />
      <set value='26' />
      <set value='10' />
   </dataset>-->
</graph><?php }} ?>