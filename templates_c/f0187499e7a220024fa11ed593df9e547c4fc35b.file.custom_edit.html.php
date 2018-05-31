<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 13:56:18
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\custom_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:190635ae16a02378bd7-43603174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0187499e7a220024fa11ed593df9e547c4fc35b' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\custom_edit.html',
      1 => 1448327042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190635ae16a02378bd7-43603174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'menu' => 0,
    'key' => 0,
    'list' => 0,
    'k' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae16a025322b2_46141530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae16a025322b2_46141530')) {function content_5ae16a025322b2_46141530($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['00_custom'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
</head>
<body>
<form action="" method="post" id="form" name="form">
    <div class="Form02">
    <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>                
          <tr>
            <td width="100"><input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="chk_privilege('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['label'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['list']->value['children']){?>
                    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['child']->key;
?>
                        <div class="custom_li">
                             <input name="custom[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[]" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['child']->value['checked']=='1'){?> checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['child']->value['linkurl'];?>
"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['child']->value['label'];?>

                        </div>
                    <?php } ?>
                    
                <?php }?>
              </td>
          </tr>
      <?php } ?>
    </table>
    <input name="act" id="act" type="hidden" value="subedit" />
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
">
</form>
</body>
</html>
<?php }} ?>