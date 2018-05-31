<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 08:51:21
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\uplodepic.html" */ ?>
<?php /*%%SmartyHeaderCode:255615ae3c589835574-15167541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf248a04d43a5252aa408607658d015d311795a' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\uplodepic.html',
      1 => 1451975480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255615ae3c589835574-15167541',
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
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3c589a15d31_91263660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3c589a15d31_91263660')) {function content_5ae3c589a15d31_91263660($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['uplodepic'];?>
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
   <div class="pro_nr" id="header">
        <div class="pro_bt">
            <a href="javascript:location.reload();"><img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </div>
        <div class="pro_xx">
            <div class="tl">
                <span class="pro_tbl3">
                    <a href="javascript:;" onclick="return DelAll3('uplodepic.php','<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
                    	<img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>

                    </a>
                </span>
            </div>
            <div class="tr">
              
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="8%" height="30" align="left" valign="middle" class="pro_rb">&nbsp; 
                       <span class="tl">&nbsp;
                            <input type="checkbox" name="checkbox" value="checkbox"
                             onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span></td>
                    <td width="28%" height="30" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
</td>
                    <td width="23%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
 </td>
                    <td width="23%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['size'];?>
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
                <tr class="pro_bt2">
                    <td width="8%" height="35" align="left" valign="middle" class="pro_tbr">
                        <span class="tl">
                            &nbsp; <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span>
                    </td>
                    <td width="28%" align="left" valign="middle" class="pro_tbr pro_l5">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</td>
                    <td width="23%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['posttime'],'%Y-%m-%d %H:%M:%S');?>
</td>
                    <td width="23%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['size'];?>
<?php $_tmp1=ob_get_clean();?><?php echo GetRealSize($_tmp1);?>
</td>
                    <td width="18%" align="left" valign="middle" class="pro_tbr">&nbsp;<a href="../<?php echo $_smarty_tpl->tpl_vars['list']->value['path'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yl'];?>
</a>&nbsp;
    				<!--<a href="javascript:;" onclick="return ConfDel('uplodepic.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>--></td>
                </tr>
            <?php } ?> 
            </table>
            <?php }else{ ?>
            	<div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
            <?php }?>
        </div>
         <div class="pro_bot" id="footer">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

       </div>
    </div>
</form>
</body>
</html>
<?php }} ?>