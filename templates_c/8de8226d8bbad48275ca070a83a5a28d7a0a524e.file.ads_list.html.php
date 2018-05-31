<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 16:03:31
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\ads_list.html" */ ?>
<?php /*%%SmartyHeaderCode:23515ae42ad3057e45-32201376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8de8226d8bbad48275ca070a83a5a28d7a0a524e' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\ads_list.html',
      1 => 1448327038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23515ae42ad3057e45-32201376',
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
    'keyword' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae42ad316a8c3_48630315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae42ad316a8c3_48630315')) {function content_5ae42ad316a8c3_48630315($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\datongbuluo\\web\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_list'];?>
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
                	<a href="javascript:DialogIframe('ads_list.php?act=add','<?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_list_add'];?>
','80%','95%','','','','dosubmit');">
                    <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_list_add'];?>
</a>
                </span>
                <span class="pro_tbl1">
                	<a href="javascript:UpOrderID('ads_list.php');">
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
                 <a href="javascript:Upselect('ads_list.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                <input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="4%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">&nbsp;<input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
                     <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
</td>
                    <td width="16%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
                    <td width="17%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['classid'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['starttime'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['endtime'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['hits'];?>
</td>
                    <td width="9%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['order'];?>
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
                    <td width="4%" height="35" align="left" valign="middle" class="pro_tbr">
                    	<span class="tl">&nbsp;
                        <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span>
                        <a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a>
                    </td>
                    <td width="8%" align="left" valign="middle" class="pro_tbr pro_l5">
                    	&nbsp;<a href="javascript:DialogIframe('ads_list.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_list_edit'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a>
        				&nbsp;<a href="javascript:;" onclick="return ConfDel('ads_list.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
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
                    <td width="8%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
                    <td width="16%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</td>
                    <td width="17%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['starttime'],'%Y-%m-%d');?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['endtime'],'%Y-%m-%d');?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['hits'];?>
</td>
                    <td width="9%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['order'];?>
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