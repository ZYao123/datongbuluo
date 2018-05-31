<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 10:06:32
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goodstype_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:30115ae285a825ca30-95432160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0656891dfece367707035b2393eb5b5163ad9f4' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goodstype_edit.html',
      1 => 1448327050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30115ae285a825ca30-95432160',
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
    'type_info' => 0,
    'key' => 0,
    'info' => 0,
    'brand_info' => 0,
    'keys' => 0,
    'type_list' => 0,
    'list_norm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae285a83896f1_49168883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae285a83896f1_49168883')) {function content_5ae285a83896f1_49168883($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_type_edit'];?>
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
i=<?php echo count($_smarty_tpl->tpl_vars['type_info']->value);?>
;
function Addattr(id)
{
	i++;
	attr_str  = '<tr>';
	attr_str += '	<td><input type="hidden" name="attr['+i+'][id]"/><input type="text" name="attr['+i+'][attrname]" class="v5-input in150"/></td>';
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
                    <input type="text" name="classname" class="v5-input in180" id="classname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['classname'];?>
"/>
                </td>
            </tr>
            <tr>
                <td width="150" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['rename'];?>
：</td>
                <td>
                    <input type="text" name="rename" class="v5-input in180" id="rename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['rename'];?>
"/>
                </td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
：</td>
                <td>
                    <input type="text" id="orderid" name="orderid" class="v5-input in60" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
" onKeyUp="value=value.replace(/[^\d]/g,'')"></td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
：</td>
                <td>
                    <input name="checkinfo" type="radio" value="true"  <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']){?><?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']==true){?>checked="checked" <?php }?><?php }else{ ?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                    <input name="checkinfo" type="radio" value="false"  <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']){?><?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']==false){?>checked="checked" <?php }?><?php }?>  />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

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
" <?php if (in_array(((string)$_smarty_tpl->tpl_vars['list']->value['id']),$_smarty_tpl->tpl_vars['info']->value['brand'])){?>checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</span>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <h3><a href="javascript:Addattr('attr_strs');">[+]</a><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_attr'];?>
</h3>
      <table width="100%" border="0" class="v5-table05" id="attr_strs">
            <tr>
                <td width="15%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['attrname'];?>
</td>
                <td width="15%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['rename'];?>
</td>
                <td width="15%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['showtype'];?>
</td>
                <td width="15%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['intype'];?>
</td>
                <td width="10%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['attrvalue'];?>
</td>
                <td width="10%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
                <td width="10%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
                <td width="10%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['type_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_list']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_list']->key => $_smarty_tpl->tpl_vars['type_list']->value){
$_smarty_tpl->tpl_vars['type_list']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['type_list']->key;
?>
            <tr>
               <td><input type="hidden" name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][id]" value="<?php echo $_smarty_tpl->tpl_vars['type_list']->value['id'];?>
"/><input type="text" name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][attrname]" class="v5-input in150" value="<?php echo $_smarty_tpl->tpl_vars['type_list']->value['attrname'];?>
"/></td>
               <td><input type="text" name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][rename]" class="v5-input in150" value="<?php echo $_smarty_tpl->tpl_vars['type_list']->value['rename'];?>
"/></td>
               <td><select name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][showtype]" class="v5-select">
               <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang']->value['showtype_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['type_list']->value['showtype']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</option>
               <?php } ?>
               </select>
               </td>
               <td><select name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][intype]" class="v5-select" onchange="setattrvalue(this.value,'<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
');">
               <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang']->value['intype_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['type_list']->value['intype']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</option>
               <?php } ?>
               </select><input type="hidden" name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][attrvalue]" id="attrvalue_input_<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['type_list']->value['attrvalue'];?>
"/></td>
               <td><a href="javascript:dialog_data('<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
');DialogIframe('goodstype.php?act=addattr&attr_i=<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_edit_name'];?>
','80%','95%','','','','dosubmit');" id="attrvalue_a_<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a><span id="attrvalue_span_<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"></span></td>
               <td>
               <input name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][checkinfo]" type="radio" value="true" <?php if ($_smarty_tpl->tpl_vars['type_list']->value['checkinfo']=='true'){?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
               <input name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][checkinfo]" type="radio" value="false" <?php if ($_smarty_tpl->tpl_vars['type_list']->value['checkinfo']=='false'){?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</td>
               <td><input type="text" name="attr[<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
][orderid]" class="v5-input in60" value="<?php echo $_smarty_tpl->tpl_vars['type_list']->value['orderid'];?>
"/></td>
               <td><a href="javascript:;" onclick="DelDmTr2($(this),'<?php echo $_smarty_tpl->tpl_vars['type_list']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</a></td>
            </tr>  
            <?php } ?>
        </table>

                   </td></tr></table> 
        <h3><a href="javascript:AddDmTr('tboption',str);">[+]</a><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_norm'];?>
</h3>
      <table width="100%" border="0" class="v5-table05" id="tboption">
      <?php  $_smarty_tpl->tpl_vars['list_norm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_norm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['norm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_norm']->key => $_smarty_tpl->tpl_vars['list_norm']->value){
$_smarty_tpl->tpl_vars['list_norm']->_loop = true;
?>
          <tr><td><span class="delvote">[<a href="javascript:;" onclick="DelDmTr2($(this),'')">-</a>]</span> <select name="norm[]" id="norm[]" class="v5-select">
          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['norm_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value['id']==$_smarty_tpl->tpl_vars['list_norm']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
</option>
          <?php } ?>
          </select></td></tr>
      <?php } ?>
      </table>
  </div>
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subedit" />
    <input name="id" id="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
</form>
</body>
</html>
<?php }} ?>