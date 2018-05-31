<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 14:48:27
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goodsbrand.html" */ ?>
<?php /*%%SmartyHeaderCode:159295ae1763b0f40c4-73446808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc4ce4558069780799ba11c8d144286478c19f7' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goodsbrand.html',
      1 => 1448327048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159295ae1763b0f40c4-73446808',
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
    'parentid' => 0,
    'goodsid' => 0,
    'keyword' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1763b19fee2_65321377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1763b19fee2_65321377')) {function content_5ae1763b19fee2_65321377($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_brand'];?>
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
<body>
<form action="" method="post" id="form" name="form">   
	<input type="hidden" name="from" id="from"value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
    <input type="hidden" name="act" id="act" value="subdel" />      
    <div class="pro_nr" id="header">
        <span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" 
            src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>
        <div class="pro_xx">
            <div class="tl">
                <span class="pro_tbl1">
                	<a href="javascript:DialogIframe('goodsbrand.php?act=add&parentid=<?php echo $_smarty_tpl->tpl_vars['parentid']->value;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['goodsid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_brand_add'];?>
','80%','95%','','','','dosubmit');">
                    <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_brand_add'];?>
</a>
                </span>
                <span class="pro_tbl1">
                	<a href="javascript:UpOrderID('goodsbrand.php');">
                    	<img src="templates/default/images/flgl_1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_orderid'];?>

                    </a>
                </span>
                <span class="pro_tbl3">
                    <a href="javascript:;" onclick="return ConfDelAll('form');">
                    <img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                </span>
            </div>
            <div class="tr">
                <a href="javascript:Upselect('goodsbrand.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                <input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="8%" height="30" align="center" valign="middle" class="pro_rb"><span class="tl">&nbsp;
                        <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>
                        &nbsp;</span><a href="#"><img src="templates/default/images/pro_8.jpg" /></a></td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
                    <td width="16%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
</td>
                    <td width="17%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['rename'];?>
</td>
                    <td width="15%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['logo'];?>
</td>
                    <td width="26%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['url'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="topheight"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
            <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <tr class="pro_bt2">
                    <td width="8%" height="35" align="left" valign="middle" class="pro_tbr"><span class="tl">&nbsp;
                        <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span><a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a></td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr pro_l5">
                    	&nbsp;<a href="goodsbrand.php?act=list&parentid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['list']->value['goodsid'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_manage'];?>
</a>
        				&nbsp;<a href="javascript:DialogIframe('goodsbrand.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['list']->value['goodsid'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_brand_edit'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a>
        				&nbsp;<a href="javascript:;" onclick="return ConfDel('goodsbrand.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                    </td>
                    <td width="8%" align="left" valign="middle" class="pro_tbr">&nbsp;
                    	<input type="hidden" name="ids[]" id="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" />
                        <input type="text" name="orderid[]" id="orderid[]" class="input_gray_short" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['orderid'];?>
" />
                    </td>
                    <td width="16%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</td>
                    <td width="17%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['rename'];?>
</td>
                    <td width="15%" align="left" valign="middle" class="pro_tbr">&nbsp;<img src="templates/default/images/pro_13.jpg"  alt="/<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" class="tip" /></td>
                    <td width="26%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
</td>
                </tr>
                <?php } ?>
            </table>
            <?php }else{ ?>
            	<div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
            <?php }?>
            <div class="footheight"></div>
        </div>
        <div class="pro_bot" id="footer">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

       </div>
   </div>
</form>
</body>
</html>
<?php }} ?>