<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 09:51:56
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goodsnorm_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:320205ae2823cefeca8-95557653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e08715d77453907895c5b64cdb627a6ef89c27' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goodsnorm_edit.html',
      1 => 1473835226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320205ae2823cefeca8-95557653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'countcheck' => 0,
    'info' => 0,
    'norm' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae2823d0d5ce1_67065647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2823d0d5ce1_67065647')) {function content_5ae2823d0d5ce1_67065647($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_norm_edit'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>

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
i=<?php echo $_smarty_tpl->tpl_vars['countcheck']->value;?>
;
</script>
<body onload="shownorm('<?php echo $_smarty_tpl->tpl_vars['info']->value['rdotype'];?>
')" >   
<form action="" method="post" id="form" name="form" onsubmit="return cfm_goodsnorm();">
  <div class="Form02">
    <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
          <tr>
              <td width="150" align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['normname'];?>
：</td>
              <td>
                  <input type="text" name="normname" class="v5-input in180" id="normname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['normname'];?>
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
              <td width="150" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
：</td>
              <td>
                  <input type="text" name="classname" class="v5-input in180" id="classname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['classname'];?>
"/>
              </td>
          </tr>
          <tr>
              <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['rdotype'];?>
：</td>
              <td>
                  <input name="rdotype" type="radio" value="text" onclick="shownorm('text')"<?php if ($_smarty_tpl->tpl_vars['info']->value['rdotype']=='text'){?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['rdotype_text'];?>
&nbsp;
                  <input name="rdotype" type="radio" value="color" onclick="shownorm('color')"<?php if ($_smarty_tpl->tpl_vars['info']->value['rdotype']=='color'){?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['rdotype_color'];?>
&nbsp;
                  <input name="rdotype" type="radio" value="image" onclick="shownorm('image')"<?php if ($_smarty_tpl->tpl_vars['info']->value['rdotype']=='image'){?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['rdotype_image'];?>

              </td>
          </tr>
            
          <tr>
              <td align="right">
           		  <?php echo $_smarty_tpl->tpl_vars['lang']->value['spec'];?>
<span class="cnote"><a href="javascript:AddDmTr('tboption', '');">[+]</a></span>：
              </td>
              <td>
               	  <table border="0" cellspacing="0" cellpadding="0" align="left" id="tboption" >
                  <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(0, null, 0);?>
                     <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['norm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                      <tr>
                          <td> 
                              <span class="delvote">[<a href="javascript:;" onclick="DelDmTr($(this),<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
)">-</a>]</span>
                              <span class="delvote"><span class="red" data='<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
'>*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
：<input type="hidden" name="norm[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][id]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"/><input type="text" name="norm[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][name]"  class="v5-input in180" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"/>&nbsp;</span>
                              <span class="dn" name="color[]"><?php echo $_smarty_tpl->tpl_vars['lang']->value['color'];?>
：<input type="text" name="norm[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][color]" id="color_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['color'];?>
"  class="v5-input in180" onclick="colorpicker('colorpanel_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
', 'color_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
', 'color_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" /> <span id="colorpanel_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"></span> &nbsp;</span>
                             <span class="dn" name="image[]"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pic'];?>
：<input type="text" name="norm[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][pic]" id="pic_<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"  class="v5-input in180"  value="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
"/> <a href="javascript:;" onclick="showupload('pic_<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uploadpic'];?>
</a></span>
                          </td>
                      </tr>
                      <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['c']->value+1, null, 0);?>
                      <?php } ?>
                  </table>
              </td>
          </tr>
          <tr>
              <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
：</td>
              <td>
                  <input type="text" id="orderid" name="orderid" class="v5-input in60" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
" onKeyUp="value=value.replace(/[^\d]/g,'')">
                  </td>
          </tr>
          <tr>
              <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['compile'];?>
：</td>
              <td>
                  <input name="compile" type="radio" value="true"  <?php if ($_smarty_tpl->tpl_vars['info']->value['compile']){?><?php if ($_smarty_tpl->tpl_vars['info']->value['compile']=='true'){?>checked="checked" <?php }?><?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                    <input name="compile" type="radio" value="false" <?php if ($_smarty_tpl->tpl_vars['info']->value['compile']){?><?php if ($_smarty_tpl->tpl_vars['info']->value['compile']=='false'){?>checked="checked" <?php }?><?php }?>  />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
                  
              </td>
          </tr>
          <tr>
              <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
：</td>
              <td>
                  <input name="checkinfo" type="radio" value="true"  <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']){?><?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']==true){?>checked="checked" <?php }?><?php }else{ ?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                    <input name="checkinfo" type="radio" value="false" <?php if ($_smarty_tpl->tpl_vars['info']->value['compile']){?><?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']==false){?>checked="checked" <?php }?><?php }?>  />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
                  
              </td>
          </tr>
      </table>
	</div>
    <input type="hidden" name="id" id="id"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php }?>"/>
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subedit" />
</form>
</body>
</html>
<?php }} ?>