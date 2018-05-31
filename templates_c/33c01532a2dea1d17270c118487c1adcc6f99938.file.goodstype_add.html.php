<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 10:06:47
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goodstype_add.html" */ ?>
<?php /*%%SmartyHeaderCode:27475ae285b746f5c4-45309010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c01532a2dea1d17270c118487c1adcc6f99938' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goodstype_add.html',
      1 => 1448327050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27475ae285b746f5c4-45309010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'norm_info' => 0,
    'key' => 0,
    'orderid' => 0,
    'brand_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae285b74f8167_55832653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae285b74f8167_55832653')) {function content_5ae285b74f8167_55832653($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_type_add'];?>
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
str='<tr><td><span class="delvote">[<a href="javascript:;" onclick="DelDmTr2($(this),\'\')">-</a>]</span> <select name="norm[]" id="norm[]" class="v5-select"><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['norm_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
</option><?php } ?></select></td></tr>';
i=0;
function Addattr(id)
{
	i++;
	attr_str  = '<tr>';
	attr_str += '	<td><input type="text" name="attr['+i+'][attrname]" class="v5-input in150"/></td>';
	attr_str += '   <td><input type="text" name="attr['+i+'][rename]" class="v5-input in150"/></td>';
	attr_str += '   <td><select name="attr['+i+'][showtype]" class="v5-select">';
	attr_str += '   <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang']->value['showtype_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>';
	attr_str += '   <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</option>';
	attr_str += '   <?php } ?>';
	attr_str += '   </select>';
	attr_str += '   </td>';
	attr_str += '   <td><select name="attr['+i+'][intype]" class="v5-select" onchange="setattrvalue(this.value,\''+i+'\');">';
	attr_str += '   <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang']->value['intype_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>';
	attr_str += '   <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</option>';
	attr_str += '   <?php } ?>';
	attr_str += '   </select><input type="hidden" name="attr['+i+'][attrvalue]" id="attrvalue_input_'+i+'" /></td>';
	attr_str += '   <td><a href="javascript:dialog_data(\''+i+'\');DialogIframe(\'goodstype.php?act=addattr&attr_i='+i+'\',\'<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_edit_name'];?>
\',\'80%\',\'95%\',\'\',\'\',\'\',\'dosubmit\');" id="attrvalue_a_'+i+'"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a><span id="attrvalue_span_'+i+'"></span></td>';
	attr_str += '   <td><input name="attr['+i+'][checkinfo]" type="radio" value="true" checked="checked" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;';
	attr_str += '   <input name="attr['+i+'][checkinfo]" type="radio" value="false" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</td>';
	attr_str += '   <td><input type="text" name="attr['+i+'][orderid]" class="v5-input in60" value="'+i+'"/></td>';
	attr_str += '   <td><a href="javascript:;" onclick="DelDmTr2($(this),\'\')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</a></td>';
	attr_str += '</tr>';   
	$("#"+id).append(attr_str);   
	
}

</script>
<body>     
<form action=""  id="form" name="form" method="post" onsubmit="return cfm_goodstype();">
    <div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
            <tr>
                <td width="150" align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
：</td>
                <td>
                    <input type="text" name="classname" class="v5-input in180" id="classname"/>
                </td>
            </tr>
            <tr>
                <td width="150" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['rename'];?>
：</td>
                <td>
                    <input type="text" name="rename" class="v5-input in180" id="rename"/>
                </td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
：</td>
                <td>
                    <input type="text" id="orderid" name="orderid" class="v5-input in60" value="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
" onKeyUp="value=value.replace(/[^\d]/g,'')"></td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
：</td>
                <td>
                    <input name="checkinfo" type="radio" value="true" checked="checked" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                    <input name="checkinfo" type="radio" value="false" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

                </td>
            </tr>
        </table>
        <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_brand'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
            <tr>
                <td>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                    <span class="brand_info"><input type="checkbox" name="brand[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</span>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <h3><a href="javascript:Addattr('attr_strs');">[+]</a><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_attr'];?>
</h3>
      <table width="100%" border="0" class="v5-table05" id="attr_strs">
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['attrname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['rename'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['showtype'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['intype'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['attrvalue'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</td>
            </tr>
        </table>

                   </td></tr></table> 
        <h3><a href="javascript:AddDmTr('tboption',str);">[+]</a><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_norm'];?>
</h3>
      <table width="100%" border="0" class="v5-table05" id="tboption">
      </table>
  </div>
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subadd" />
</form>

</body>
</html>
<?php }} ?>