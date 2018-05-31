<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:01:29
         compiled from "F:\WWW\shopx\manage\templates\default\shopship.html" */ ?>
<?php /*%%SmartyHeaderCode:1417459f1a469f20d39-70675527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80cc9563d1d1305761d297e951896639fc82e14c' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\shopship.html',
      1 => 1448327062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417459f1a469f20d39-70675527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'info' => 0,
    'from' => 0,
    'postmodeinfo' => 0,
    'orderidadd' => 0,
    'postmodecount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a46a0bd3e8_53804830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a46a0bd3e8_53804830')) {function content_59f1a46a0bd3e8_53804830($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['order_list'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<link href="templates/default/style/admin1.css" rel="stylesheet" type="text/css" />
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
    <div class="pro_nr" id="header">
   		<span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>
   		<div class="pro_bt1" style="margin-top:4px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="10%" align="center" valign="middle" class="pro_rb" height="30">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
                    <td width="30%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
                    <td width="12%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['version'];?>
</td>
                    <td width="12%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</td>
                    <td width="15%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['apikey'];?>
</td>
                  <td align="center" valign="middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div style="height:54px;"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
        <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                 <tr>
                   <td width="10%" align="center" valign="middle" class="pro_tbr pro_pr">
                      &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 
                   </td>
                   <td width="30%" align="left" valign="middle" class="pro_tbr pro_pr"><?php echo $_smarty_tpl->tpl_vars['list']->value['description'];?>
</td>
                    <td width="12%" align="left" valign="middle" class="pro_tbr pro_pr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['version'];?>
</td>
                    <td width="12%" align="left" valign="middle" class="pro_tbr pro_pr"><?php echo $_smarty_tpl->tpl_vars['list']->value['author'];?>
</td>
                    <td width="15%" align="left" valign="middle" class="pro_tbr pro_pr"><?php echo $_smarty_tpl->tpl_vars['list']->value['apikey'];?>
</td>
                    <td align="center" valign="middle" class="pro_tbr pro_pr"><a href="javascript:;" onclick="javascript:DialogIframe('shopship.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['shop_ship_edit'];?>
','50%','50%','','','','dosubmit');"><?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']=='true'){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_Disabled'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_Enable'];?>
<?php }?></a></td>
                </tr>  
                <?php } ?>
            </table>
            <?php }else{ ?>
       	  <div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
            <?php }?>
            <div style="height:10px;"></div>
            <div class="pro_tbr" style="font-size:14px; text-align:center; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['SetupTitle'];?>
[<a href='https://code.google.com/p/kuaidi-api/wiki/Open_API_API_URL' style="color: #0080C0" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ViewShipCompany'];?>
</a>]</div>
<form name="form" id="form" method="post" action="shopship.php?act=save">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="mgr_table">
		<tr align="center" class="thead">
			<td width="5%" height="30" align="center"><input type="checkbox" name="checkid" id="checkid"  onclick="chk_all($(this).attr('checked'))"></td>
			<td width="5%" align="center">ID</td>
		  <td align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipCompanyCode'];?>
</td>
		  <td width="25%" align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipCompany'];?>
</td>
			<td width="20%" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipOrderid'];?>
</td>
			<td width="18%" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
		</tr>
        <?php if ($_smarty_tpl->tpl_vars['postmodeinfo']->value){?>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postmodeinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
		<tr align="center" class="mgr_tr">
			<td height="32"><input type="checkbox" name="id[]" id="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" /></td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>

			  <input type="hidden" name="checkid[]" id="checkid[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" /></td>
			<td align="left"><input type="text" name="classid[]" id="classid[]" class="input_gray" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
" /></td>
			<td align="left"><input type="text" name="classname[]" id="classname[]" class="input_gray" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
" /></td>
			<td><!--<a href="postmode_save.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['orderid'];?>
&action=up"><img src="templates/default/images/up.gif" title="向上移动" /></a> -->
			  <input type="text" name="orderid[]" id="orderid[]" class="input_gray_short" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['orderid'];?>
" />
			  <!--<a href="postmode_save.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['orderid'];?>
&action=down"><img src="templates/default/images/down.gif" title="向下移动" /></a> --></td>
			<td class="action"><span>[<a href="javascript:;" onclick="return ConfDel('shopship.php?act=PostmodeDel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>]</span></td>
		</tr>
        <?php } ?>        
        <?php }else{ ?>
		<tr align="center">
			<td colspan="6" class="mgr_nlist"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</td>
		</tr>        
        <?php }?>
                    
		<tr align="center">
			<td height="25" colspan="6" class="tr_green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipAddOne'];?>
</td>
		</tr>
		<tr align="center" class="mgr_tr">
			<td height="32">&nbsp;</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipIncrement'];?>
</td>
			<td align="left"><input type="text" name="classidadd" id="classidadd" class="input_gray" /></td>
			<td align="left"><input type="text" name="classnameadd" id="classnameadd" class="input_gray" /></td>
			<td><input type="text" name="orderidadd" id="orderidadd" class="input_gray_short" value="<?php echo $_smarty_tpl->tpl_vars['orderidadd']->value;?>
" /></td>
			<td class="mgr_action"><input type="hidden" name="checkinfoadd" value="true" checked="checked"  /><input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />  </td>
		</tr>
	</table>
</form>
      </div>
        <div class="pro_bot" id="footer">
           

	<div class="selall"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipSelect'];?>
：</span><a href="javascript:;" onclick="return PostmodeDelAll('form','shopship.php');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipTotal'];?>
<span><?php echo $_smarty_tpl->tpl_vars['postmodecount']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipCount'];?>
</div>
	<span class="mgr_btn"><a href="#" onclick="form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ShipUpdateAll'];?>
</a></span> 
  
        </div>
	</div>
</body>
</html>
<?php }} ?>