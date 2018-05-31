<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:19:09
         compiled from "F:\WWW\shopx\templates\default\pay.html" */ ?>
<?php /*%%SmartyHeaderCode:2913759f1a88d612d54-05643634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ebf252f4064abcfa22205266dbb2a63022b214e' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\pay.html',
      1 => 1467007278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2913759f1a88d612d54-05643634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'LOGO' => 0,
    'id' => 0,
    'olnum' => 0,
    'online_bank' => 0,
    'i' => 0,
    'key' => 0,
    'bankId' => 0,
    'list' => 0,
    'info' => 0,
    'paymode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a88d6e1e04_55646030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a88d6e1e04_55646030')) {function content_59f1a88d6e1e04_55646030($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<link href="templates/default/style/shopcart.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
</head>
<body>
<div class="gwc1">
    <!--  header  开始  -->
    <div class="gwc_header">
        <?php echo $_smarty_tpl->getSubTemplate ("shopcarthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="gwc_top">
            <div class="gwc_top_left"><a href='index.php'><img src="<?php echo $_smarty_tpl->tpl_vars['LOGO']->value['picurl'];?>
"class="tl" /></a></div>
            <div class="gwc_top_right">
                <div class="gwc_lc gwc_lc_3"><span class="gwc_lc_w1"><img src="templates/default/images/1.jpg" align="left" />&nbsp;我的购物车</span><span class="gwc_lc_w2"><img src="templates/default/images/gwc_5.jpg" align="left" />&nbsp;确认订单信息</span><span class="tl color_white" ><img src="templates/default/images/3.jpg" align="left" />&nbsp;付款</span></div>
            </div>
        </div>
    </div>
    <!--  header  结束  -->
    <!--  body  开始  -->
    <div class="gwc_body">
    <div id='face'>
         <div class="face_close tr" onclick="facehide()"></div>
         <div class="cl">
            <div class="dd_top" style="width:100%;">
                <span class="dd_t">付款</span>
            </div>
            <div style="width:350px; height:95px; margin-top:10px; text-align:left; line-height:30px">
            如果您已经完成付款，请点完成付款安钮前往订单详情页面。
            <div align="center"><input type="button" value="完成付款" onclick="location.href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'" class="payinput"/>
            </div></div>
         </div>
    </div>
<!--------------------网上支付iframe---------------------------->
<form action="pay.php?act=setpay&olnum=<?php echo $_smarty_tpl->tpl_vars['olnum']->value;?>
" method="post" target="_blank" onsubmit="return pay()">
<?php if (count($_smarty_tpl->tpl_vars['online_bank']->value)){?>
<table width="100%" cellpadding="0" cellspacing="0" valign="top">
<tr>
<td height="40" align="left" colspan="6" valign="middle"><span class="font1">还差一步，请点击以下银行去支付：</span></td>
</tr>
<tr>

<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['online_bank']->value['config']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
<td>
<input id="bank_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="radio" name="paytype" value="<?php echo $_smarty_tpl->tpl_vars['online_bank']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['bankId']->value==$_smarty_tpl->tpl_vars['list']->value){?> checked="checked"<?php }?> onclick="document.getElementById('bankId').value='<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
'"/>
<label for="bank_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="document.getElementById('bankId').value='<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
'"><img src="data/bankimage/bank_<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
.jpg" border=0 width="129" height="42" style="border:2px #CCC solid; border-radius:8px"/></label>
    
<a href="pay.php?bankId=<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
&act=setpay&olnum=<?php echo $_smarty_tpl->tpl_vars['olnum']->value;?>
&paytype=<?php echo $_smarty_tpl->tpl_vars['online_bank']->value['id'];?>
" target="_blank"></a></td>
<?php if ($_smarty_tpl->tpl_vars['i']->value%6==0){?>
</tr><tr>
<?php }?>
<?php } ?>
</tr>	
</table>  
<?php }?>

<table width="100%" cellpadding="0" cellspacing="0" valign="top">
<tr>
<td height="40" align="left" colspan="6" valign="middle"><span class="font1">其他支付方式：</span></td>
</tr>
<tr>

<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
<td style="height:70px;">
 <input id="pay_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" type="radio" name="paytype" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['bankId']->value==0||$_smarty_tpl->tpl_vars['bankId']->value==''){?><?php if ($_smarty_tpl->tpl_vars['paymode']->value==$_smarty_tpl->tpl_vars['list']->value['id']){?> checked="checked"<?php }?><?php }?> onclick="document.getElementById('bankId').value='0'"/>
    <label for="pay_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" onclick="document.getElementById('bankId').value='0'"><img src="data/bankimage/<?php echo $_smarty_tpl->tpl_vars['list']->value['code'];?>
.gif" border=0 alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
" width="129" height="42" style="border:2px #CCC solid; border-radius:8px"/></label>
</td>
<?php if ($_smarty_tpl->tpl_vars['i']->value%6==0){?>
</tr><tr>
<?php }?>
<?php } ?>
</tr>	
</table> 
<table width="100%" cellpadding="0" cellspacing="0" valign="top">
<tr>
<td height="40" align="center" align="center">
<input name="bankId" id="bankId" value="<?php echo $_smarty_tpl->tpl_vars['bankId']->value;?>
" type="hidden"/>

<input name="" type="image" src="templates/default/images/btn-submit.gif" />
</td></tr></table>
</form>          
    </div>
    <div style="clear:both"></div>
    <!--  body  结束  -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("shopcartbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>