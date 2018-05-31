<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:30:32
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\Charts\MSColumn3D.xml" */ ?>
<?php /*%%SmartyHeaderCode:283795ae3dcc8af3f43-29659366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddc7a73ce10ccea6e6a008219286d823da68f42' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\Charts\\MSColumn3D.xml',
      1 => 1448326956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283795ae3dcc8af3f43-29659366',
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
  'unifunc' => 'content_5ae3dcc8b6e061_55622562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3dcc8b6e061_55622562')) {function content_5ae3dcc8b6e061_55622562($_smarty_tpl) {?><graph baseFontSize='12' xaxisname='' yaxisname='' hovercapbg='DEDEBE' hovercapborder='889E6D' rotateNames='0' yAxisMaxValue='100' numdivlines='9' divLineColor='CCCCCC' divLineAlpha='80' decimalPrecision='0' showAlternateHGridColor='1' AlternateHGridAlpha='30' AlternateHGridColor='CCCCCC' caption='<?php echo $_smarty_tpl->tpl_vars['xmcaption']->value;?>
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