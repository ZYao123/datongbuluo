<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 15:49:26
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\area.html" */ ?>
<?php /*%%SmartyHeaderCode:114835ae18486d03443-63744148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd83b01f032c67feeeae56f398a3d9ff6b1421ecb' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\area.html',
      1 => 1451524935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114835ae18486d03443-63744148',
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
    'count' => 0,
    'parentid' => 0,
    'area_add' => 0,
    'keyword' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae18486db6f74_80025565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18486db6f74_80025565')) {function content_5ae18486db6f74_80025565($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['area'];?>
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
            <a href="javascript:location.reload();" style="float:right;height:25px;">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" 
            src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        <div class="pro_xx">
            <div class="tl">
            	<?php if ($_smarty_tpl->tpl_vars['count']->value>0){?>
                <span class="pro_tbl1">
                    <a href="javascript:history.go(-1);"><img src="templates/default/images/fh.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a>
                </span>
                <?php }?>
                <span class="pro_tbl1">
                	<a href="javascript:DialogIframe('area.php?act=add&parentid=<?php echo $_smarty_tpl->tpl_vars['parentid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['area_add'];?>
<?php echo $_smarty_tpl->tpl_vars['area_add']->value;?>
','80%','95%','','','','dosubmit');">
                    <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['area_add'];?>
<?php echo $_smarty_tpl->tpl_vars['area_add']->value;?>
</a>
                </span>
                <span class="pro_tbl3">
                    <a href="javascript:;" onclick="return ConfDelAll('form');">
                    <img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                </span>
            </div>
            <div class="tr">
                 <a href="javascript:Upselect('area.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                <input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="10%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">&nbsp; <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
</td>
                    <td width="60%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['classname'];?>
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
                    <td width="10%" height="35" align="left" valign="middle" class="pro_tbr">
                    	<span class="tl">&nbsp;
                        <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span>
                        <a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a>
                    </td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr pro_l5">
                    	&nbsp;<a href="javascript:DialogIframe('area.php?act=add&parentid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['area_add'];?>
<?php echo $_smarty_tpl->tpl_vars['area_add']->value;?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_add'];?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['count']->value<4){?>
                        &nbsp;<a href="area.php?act=list&parentid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_manage'];?>
</a>
                        <?php }?>
        				&nbsp;<a href="javascript:DialogIframe('area.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['area_edit'];?>
<?php echo $_smarty_tpl->tpl_vars['area_add']->value;?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a>
        				&nbsp;<a href="javascript:;" onclick="return ConfDel('area.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                    </td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
                    <td width="60%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
&nbsp;</td>
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