<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 18:13:40
         compiled from "F:\WWW\shopx\manage\templates\default\bug.html" */ ?>
<?php /*%%SmartyHeaderCode:79459f1b554ac27a7-42147443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3175bb102676160139d967f904b803f7adc7d70e' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\bug.html',
      1 => 1448327042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79459f1b554ac27a7-42147443',
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
  'unifunc' => 'content_59f1b554bb4ad5_04605643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b554bb4ad5_04605643')) {function content_59f1b554bb4ad5_04605643($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\shopx\\include\\libs\\plugins\\modifier.date_format.php';
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
				<span class="pro_tbl3">
					<a href="javascript:;" onclick="return ConfDelAll('form');">
					<img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
				</span>
			</div>
			<div class="tr">
				 <a href="javascript:Upselect('bug.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
				<input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
			</div>
		</div>
		<div class="pro_bt1">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr align="center">
					<td width="8%" height="30" align="center" valign="middle" class="pro_rb">
						<span class="tl">&nbsp;<input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
						</span>
						<a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
					</td>
					<td width="8%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
					<td width="25%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
					<td width="20%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['bug_name'];?>
</td>
					<td width="8%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
</td>
					<td width="8%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
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
				<tr class="pro_bt2" align="center">
					<td width="8%" height="35"  valign="middle" class="pro_tbr">
						<span class="tl">&nbsp;
						<input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
						</span>
						<a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a>
					</td>
					<td width="8%"  valign="middle" class="pro_tbr pro_l5">
						&nbsp;<a href="javascript:DialogIframe('bug.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['see_con'];?>
','80%','75%','','','','');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_see'];?>
</a>
						&nbsp;<a href="javascript:;" onclick="return ConfDel('bug.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
					</td>
					<td width="25%" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</td>
					<td width="20%"  valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>
</td>
					<td width="8%"  valign="middle" class="pro_tbr">
					&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['time'],'%Y-%m-%d %H:%M:%S');?>

					</td>
					<td width="8%"  valign="middle" class="pro_tbr">
					&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']==1){?>
					<a href="javascript:;" onclick="return Confcom_n('bug.php?act=edit_com_sta&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&sign=0&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
					<font color="green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</font>
					</a>
					<?php }else{ ?>
					<a href="javascript:;" 
					onclick="return Confcom_y('bug.php?act=edit_com_sta&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&sign=1&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</font>
					</a>
					<?php }?>
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