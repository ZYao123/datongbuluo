<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 18:56:12
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\ads_category_add.html" */ ?>
<?php /*%%SmartyHeaderCode:84865ae1b04c1c0145-63761099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375403b306ac32c21e404b84c9ca894bd7e132b2' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\ads_category_add.html',
      1 => 1448327038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84865ae1b04c1c0145-63761099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'class_info' => 0,
    'parentid' => 0,
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1b04c26fdf5_00282798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1b04c26fdf5_00282798')) {function content_5ae1b04c26fdf5_00282798($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_category_add'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
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

</script>
<body>     
<form action="" method="post" id="form" name="form" onsubmit="return cfm_ads_category();">
    <div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
        <table width="100%" border="0" class="v5-table05">
          <tr>
            <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
</td>
            <td><input type="text" name="classname"  class="v5-input in180" id="classname"/></td>
          </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['parentid'];?>
</td>
            <td>
            <select name="parentid" id="parentid" class="v5-select">
            <option value="0">顶级分类</option>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
                <?php if ($_smarty_tpl->tpl_vars['parentid']->value){?>
                    <?php if ($_smarty_tpl->tpl_vars['parentid']->value==$_smarty_tpl->tpl_vars['list']->value['id']){?>
                    selected="selected"
                    <?php }?>
                <?php }?>><?php if ($_smarty_tpl->tpl_vars['list']->value['str']){?>|-<?php echo $_smarty_tpl->tpl_vars['list']->value['str'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
            <?php } ?>
            </select>
            </td>
          </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
            <td><input type="text" name="description"  class="v5-input in180" id="description"/></td>
          </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['temp'];?>
</td>
            <td>
    <textarea name="temp" id="temp"  class="v5-textarea tin60 w360"><table cellpadding="0" cellspacing="0">
    {foreach from=$ads item=ad}
    <tr><td>{$ad}</td></tr>
    {/foreach}
    </table></textarea>
            </td>
          </tr>
           <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
            <td><input type="text" name="orderid"  class="v5-input in60" id="orderid" value="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
" onKeyUp="value=value.replace(/[^\d]/g,'')" /></td>
          </tr>
           <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
            <td>
            	<input name="checkinfo" type="radio" value="true" checked="checked" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                <input name="checkinfo" type="radio" value="false" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

            </td>
          </tr>
        </table>
	</div>
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subadd" />
</form>
</body>
</html>
<?php }} ?>