<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 18:35:01
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\privilege_list.html" */ ?>
<?php /*%%SmartyHeaderCode:287615ae1ab55b2b8f0-60544936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f527d648206535fdbd5aa1bb6b613eda49de5a7' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\privilege_list.html',
      1 => 1448327058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287615ae1ab55b2b8f0-60544936',
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
  'unifunc' => 'content_5ae1ab55beee14_90600158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1ab55beee14_90600158')) {function content_5ae1ab55beee14_90600158($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
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
                	<a href="javascript:DialogIframe('privilege.php?act=add','<?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_add'];?>
','80%','95%','','','','dosubmit');">
                    <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_add'];?>
</a>
                </span>
                <span class="pro_tbl3">
                    <a href="javascript:;" onclick="return ConfDelAll('form');">
                    <img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                </span>
            </div>
            <div class="tr">
                 <a href="javascript:Upselect('privilege.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                <input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="5%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">&nbsp; <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="15%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['mobile'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['regtime'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['logintime'];?>
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
                    <td width="5%" height="35" align="left" valign="middle" class="pro_tbr">
                    	<span class="tl">&nbsp;
                        <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span>
                        <a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a>
                    </td>
                    <td width="15%" align="left" valign="middle" class="pro_tbr pro_l5">
                    	&nbsp;<a href="log.php?userid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['log'];?>
</a>
            			&nbsp;<a href="javascript:DialogIframe('privilege.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_edit'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['list']->value['id']==1){?>
                        &nbsp;<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pri'];?>
</a> 
                        &nbsp;<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                    <?php }else{ ?>
            		&nbsp;<a href="javascript:DialogIframe('privilege.php?act=allot&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_allot'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pri'];?>
</a> 
                	&nbsp;<a href="javascript:;" onclick="return ConfDel('privilege.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
            <?php }?>
                    </td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['email'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['mobile'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['regtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['logintime'],'%Y-%m-%d %H:%M:%S');?>
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