<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 14:39:23
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goodscategory.html" */ ?>
<?php /*%%SmartyHeaderCode:319495ae1741b427f55-47616348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe3101ecb30c7d701394d1f401578f3e8a21787' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goodscategory.html',
      1 => 1448327048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319495ae1741b427f55-47616348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'from' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1741b4b4976_94146735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1741b4b4976_94146735')) {function content_5ae1741b4b4976_94146735($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
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

</head>
<body>
<form action="" method="post" id="form" name="form">       
   <input type="hidden" name="from" id="from"value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" /> 
   <input type="hidden" name="act" id="act"value="" /> 
   <div class="pro_nr" id="header">
        <div class="pro_bt">
            <a href="javascript:location.reload();"><img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </div>
        <div class="pro_xxs">
            <div class="tl">
            	<span class="pro_tbl1">
                	<a href="javascript:DialogIframe('goodscategory.php?act=add','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category_add'];?>
','80%','95%','','','','dosubmit');">
                    <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category_add'];?>
</a>
                </span>
                <span class="pro_tbl1">
                	<a href="javascript:UpOrderID('goodscategory.php');">
                    	<img src="templates/default/images/flgl_1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_orderid'];?>

                    </a>
                </span>
                <span class="pro_tbl3">
                	<a href="javascript:ShowAllRows();"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_show'];?>
&nbsp;<img src="templates/default/images/flgl_3.jpg" /></a>
                </span>
                <span class="pro_tbl3">
                	<a href="javascript:HideAllRows();"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_hide'];?>
&nbsp;<img src="templates/default/images/flgl_3.jpg" /></a>
                </span>
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="23%" height="30" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
</td>
                    <td width="26%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['parentname'];?>
 </td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
</td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
                    <td width="17%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['goodsnum'];?>
</td>
                    <td width="18%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="topheight"></div>
    <div class="pro_nr">
        <div class="pro_bottoms">
        	<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
              <tr class="pro_bt2" rel="rowpid_<?php echo $_smarty_tpl->tpl_vars['list']->value['parentid'];?>
" 
              name="str_<?php echo str_replace(',','_',$_smarty_tpl->tpl_vars['list']->value['parentstr']);?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" >
                    <td width="23%" height="35" align="left" valign="middle" class="pro_tbr">
                        <span class="disimg" id="rowid_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
                        onclick="Hide_Srows(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'<?php echo str_replace(',','_',$_smarty_tpl->tpl_vars['list']->value['parentstr']);?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" name="hide"></span>                   
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['str']){?>|<?php echo $_smarty_tpl->tpl_vars['list']->value['str'];?>
<?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>

                    </td>
                    <td width="26%" align="left" valign="middle" class="pro_tbr pro_l5">
                    &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['parentname'];?>
</td>
                     <td width="8%" align="left" valign="middle" class="pro_tbr pro_l5">
                    &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
                    <td width="8%" align="left" valign="middle" class="pro_tbr">&nbsp;<input type="hidden" name="id[]" id="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" />
                        <input type="text" name="orderid[]" id="orderid[]" class="input_gray_short" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['orderid'];?>
" /></td>
                    <td width="17%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['goodsnum'];?>
</td>
                    <td width="18%" align="left" valign="middle" class="pro_tbr"><a href="javascript:DialogIframe('goodscategory.php?act=add&amp;parentid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category_add'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category_add'];?>
</a> &nbsp;&nbsp; <a href="javascript:DialogIframe('goodscategory.php?act=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_category_edit'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a> &nbsp;&nbsp; <a href="javascript:;" onclick="return ConfDel('goodscategory.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&goodsnum=<?php echo $_smarty_tpl->tpl_vars['list']->value['goodsnum'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a></td>
                    
                </tr>
              <?php } ?>
            </table>
            <?php }else{ ?>
       	  <div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
            <?php }?>
        </div>
    </div>
</form>
</body>
</html>
<?php }} ?>