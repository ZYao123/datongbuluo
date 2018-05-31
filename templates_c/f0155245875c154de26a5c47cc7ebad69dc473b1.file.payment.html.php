<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:01:24
         compiled from "F:\WWW\shopx\manage\templates\default\payment.html" */ ?>
<?php /*%%SmartyHeaderCode:1858559f1a464196aa5-94280674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0155245875c154de26a5c47cc7ebad69dc473b1' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\payment.html',
      1 => 1448327056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858559f1a464196aa5-94280674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'k' => 0,
    'list' => 0,
    'from' => 0,
    'module' => 0,
    'page' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a464246753_76707845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a464246753_76707845')) {function content_59f1a464246753_76707845($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['shop_pay'];?>
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
 $_from = $_smarty_tpl->tpl_vars['lang']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['k']->value!='name'){?>var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
	= "<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
"<?php }?>;
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
                	<a href="javascript:UpOrderID('payment.php');">
                    	<img src="templates/default/images/flgl_1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_orderid'];?>

                    </a>
                </span>
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="10%" align="left" valign="middle" class="pro_rb" height="30">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</td>
                    <td width="50%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['depict'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['version'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
                    <td width="10%" align="left" valign="middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="topheight"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <tr class="pro_bt2">
                    <td width="10%" height="35" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</td>
                    <td width="50%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['depict'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['version'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['author'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;
                    	<input type="hidden" name="id[]" id="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" />
                        <input type="text" name="orderid[]" id="orderid[]" class="input_gray_short" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['orderid'];?>
" />
                    </td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr pro_l5">
                    <?php if ($_smarty_tpl->tpl_vars['list']->value['install']=='1'){?>
                        &nbsp;<a href="javascript:DialogIframe('payment.php?act=install&code=<?php echo $_smarty_tpl->tpl_vars['list']->value['code'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
','70%','80%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a>
                        &nbsp;<a href="javascript:;" onclick="return ConfDel('payment.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uninstall'];?>
</a>
                    <?php }else{ ?>
                    	&nbsp;<a href="javascript:DialogIframe('payment.php?act=install&code=<?php echo $_smarty_tpl->tpl_vars['list']->value['code'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
','70%','80%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['install'];?>
</a>
                     <?php }?>
                    </td>
                    
                </tr>
            <?php } ?>
            </table>
            <div class="footheight"></div>
        </div>
        <div class="pro_bot" id="footer" style="text-align:center">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['page'][0];?>
 <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['page'][1];?>
， <?php echo $_smarty_tpl->tpl_vars['lang']->value['page'][2];?>
 <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['page'][1];?>

       </div>
   </div>
</form>
</body>
</html>
<?php }} ?>