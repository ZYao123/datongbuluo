<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 18:14:30
         compiled from "F:\WWW\shopx\manage\templates\default\member_integral.html" */ ?>
<?php /*%%SmartyHeaderCode:2823559f1b5868f4f76-67409787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2cedea653b6c3faa4439c6d6bf229dbcda64e27' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\member_integral.html',
      1 => 1467343513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2823559f1b5868f4f76-67409787',
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
    'zt' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1b586995211_08695027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b586995211_08695027')) {function content_59f1b586995211_08695027($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\shopx\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_list'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/mgr.func.js"></script>
<script src="templates/default/laydate/laydate.js"></script>
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
<form action="" method="post" id="form" onsubmit="return ConfDelAll('form');">
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
            <div class="tr">
                <a href="javascript:Upselectorder('member_integral.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                 <input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="会员用户名"/>
                  <input class="laydate-icon" id="demo1"  style=" float:right" > 
                  <div style="float:right">&nbsp;&nbsp;结束时间：</div>    
             
                  <input class="laydate-icon" id="demo" style=" float:right"> 
                  <div style="float:right">开始时间：</div>
                  
                <script src="templates/default/laydate/pf.js"></script>
                 积分状态：
                <select name="zt" id="zt">
                  <option value="0">--全部--</option>
                  <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['zt']->value)&&$_smarty_tpl->tpl_vars['zt']->value==1){?>selected<?php }?>>--增加--</option>
                  <option value="2" <?php if (isset($_smarty_tpl->tpl_vars['zt']->value)&&$_smarty_tpl->tpl_vars['zt']->value==2){?>selected<?php }?>>--扣除--</option>
                </select>
                 &nbsp;
            </div>
           
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="10%"  height="35"  align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['mobile'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['zt'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['jifen'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
</td>
                    <td width="30%" align="center" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['jianjie'];?>
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
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <tr class="pro_bt2">
                    <td width="10%" height="35"  align="center" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['email'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['mobile'];?>
</td>
                    <td width="10%" align="center" valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['zt']==1){?>增加<?php }else{ ?><font color="#FF0000">扣除</font><?php }?></td>
                    <td width="10%" align="center" valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['zt']==2){?><font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['list']->value['integral'];?>
</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['list']->value['integral'];?>
<?php }?></td>
                    <td width="10%" align="center" valign="middle" class="pro_tbr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['posttime'],'%Y-%m-%d');?>
</td>
                    <td width="30%" align="center" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['jianjie'];?>
</td>
                </tr>
            <?php } ?> 
            </table>
            <div class="footheight"></div>
      </div>
        <div class="pro_bot" id="footer">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

       </div>
   </div>  
</form>
</body>
</html><?php }} ?>