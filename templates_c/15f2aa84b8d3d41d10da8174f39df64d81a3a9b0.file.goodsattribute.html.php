<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 18:16:25
         compiled from "F:\WWW\shopx\manage\templates\default\goodsattribute.html" */ ?>
<?php /*%%SmartyHeaderCode:1405459f1b5f944bd73-20041092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f2aa84b8d3d41d10da8174f39df64d81a3a9b0' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\goodsattribute.html',
      1 => 1451525833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405459f1b5f944bd73-20041092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'result' => 0,
    'from' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1b5f94d0a99_55234317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b5f94d0a99_55234317')) {function content_59f1b5f94d0a99_55234317($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_attribute_add'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/mgr.func.js"></script>
</head>
<script>

<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
	= "<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
";
<?php } ?>

str = '<tr><td width="805" align="left"><input name="name[]" id="attr_value[]" name="attr_value" type="text" class="v5-input in300" /></td><td width="193" valign="middle"><a href="javascript:;" onclick="$(this).parent().parent().remove()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a></td></tr>';
</script>

<body>
<form action="goodsattribute.php?act=subadd" method="post" id="form" name="form">
    <div class="Form02">
      <h3><a href="javascript:AddDmTr('tboption',str);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_attribute_add'];?>
</a></h3>
      <table width="100%" border="0" class="v5-table05" id="tboption">
            <tr>
                <td width="805" align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_attribute_name'];?>
</td>
                <td width="193" valign="middle" colspan="2" align="center">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>

                </td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<tr>
				<td width="605" align="left">
				<input name="edit_name[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
]" id="attr_value[]" name="attr_value" type="text" class="v5-input in300" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"/>
				</td>
				<td width="200" align="left">
				<a href="goods.php?act=list&buie=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" target="main"><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkgoods'];?>
</a>
				</td>
				<td width="193" valign="middle">
				<?php if ($_smarty_tpl->tpl_vars['list']->value['built_in']=='true'){?>
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['built_in'];?>

				<?php }else{ ?>
				<a href="javascript:;" 
				onclick="return ConfDel('goodsattribute.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>

				</a>
				<?php }?>
				</td>
			</tr>
			<?php } ?>
        </table>
	</div>
	<div style="text-align:center;">
	<input type="submit" name="dosubmit" id="dosubmit" class="blue_submit_btn" value>
	</div>
</form>
</body>
</html>
<?php }} ?>