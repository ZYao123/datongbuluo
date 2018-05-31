<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 14:40:00
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goodscategory_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:36745ae17440a1fd80-16895627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b571ad1b41c3252d4b6ca54f0e6cdc04cb4ef1d0' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goodscategory_edit.html',
      1 => 1462258103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36745ae17440a1fd80-16895627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'type_info' => 0,
    'info' => 0,
    'class_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae17440adf426_60658182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae17440adf426_60658182')) {function content_5ae17440adf426_60658182($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category_add'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
<script src="templates/default/js/getuploadify.js"></script>
<script src="templates/default/js/getjcrop.js"></script>
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
str='<tr><td><span class="delvote">[<a href="javascript:;" onclick="DelDmTr($(this))">-</a>]</span> <select name="attrstr[]" id="attrstr[]" class="v5-select"> <option value="0">--</option><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option><?php } ?></select></td></tr>';
</script>
<body>     
<form action="" method="post" id="form" name="form" onsubmit="return cfm_goodscategory();">
    <div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
        <table width="100%" border="0" class="v5-table05">
            <tr>
                <td width="150" align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
：</td>
                <td>
                    <input type="text" name="classname" class="v5-input in180" id="classname" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['classname']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['classname'];?>
<?php }?>"/>
                </td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['parentid'];?>
：</td>
                <td>
                    <select name="parentid" id="parentid" class="v5-select">
                    <option value="0">--</option>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['parentid']){?>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['parentid']==$_smarty_tpl->tpl_vars['list']->value['id']){?>
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
                <td align="right">
               		<?php echo $_smarty_tpl->tpl_vars['lang']->value['attrstr'];?>
：
                </td>
                <td>
                    <select name="attrstr" id="attrstr" class="v5-select">
                        <option value="0">--</option>
                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['attrstr']){?>
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['attrstr']==$_smarty_tpl->tpl_vars['list']->value['id']){?>
                        selected="selected"
                        <?php }?>
                        <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
              <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
：</td>
        <td>
       	  <input type="text" name="picurl" class="v5-input in180" id="picurl"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
"/>
        	<span class="cnote">
                <span class="gray_btn" onclick="GetUploadify('uploadify','<?php echo $_smarty_tpl->tpl_vars['lang']->value['thumupload'];?>
','image','image',1,20000000,'picurl')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uploadpic'];?>
</span>
               
                <span class="cutimg">
                	<a href="javascript:;" onclick="GetJcrop('jcrop','picurl');return false;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tailor'];?>
</a>
                </span> 
            </span>
        </td>
      </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['section'];?>
：</td>
                <td>
                    <input type="text" name="section" class="v5-input in60" id="section" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['section'];?>
" />
                </td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['unit'];?>
：</td>
                <td>
                    <input type="text" name="unit" class="v5-input in60" id="unit"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['unit']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['unit'];?>
<?php }?>"/>
                </td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
：</td>
                <td>
                    <input type="text" id="orderid" name="orderid" class="v5-input in60" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['orderid']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
<?php }?>" onKeyUp="value=value.replace(/[^\d]/g,'')"/>
                    <label class="c01-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['php']['orderid_asc'];?>
</label>
                    </td>
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
        
        <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['depict'];?>
</h3>
        <table width="100%" border="0" class="v5-table05">
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
</td>
                <td><input type="text" id="keywords" name="keywords" class="v5-input in360"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['keywords'];?>
<?php }?>"/></td>
            </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
                <td>
                	<textarea class="v5-textarea tin60 w360" name="description" id="description"><?php if ($_smarty_tpl->tpl_vars['info']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
<?php }?></textarea>		</td>
            </tr>
        </table>
</div>
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subedit" />
    <input type="hidden" name="goodsid" id="goodsid"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['goodsid']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['goodsid'];?>
<?php }?>"/>
    <input type="hidden" name="id" id="id"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php }?>"/>
</form>
</body>
</html>
<?php }} ?>