<?php /* Smarty version Smarty-3.1.14, created on 2017-11-13 11:38:14
         compiled from "F:\WWW\shopx\templates\default\member_find.html" */ ?>
<?php /*%%SmartyHeaderCode:217205a0913a6bba122-27024851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129bc0deabe661da7ab46dc9a74b38dfd8eaeecc' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\member_find.html',
      1 => 1448327152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217205a0913a6bba122-27024851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'LOGO' => 0,
    'type' => 0,
    'name' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0913a6bf7020_57146795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0913a6bf7020_57146795')) {function content_5a0913a6bf7020_57146795($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
-找回密码</title>
<link href="templates/default/style/shopcart.css" rel="stylesheet" type="text/css" />
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>
<link type="text/css" rel="stylesheet" href="js/validator.css"></link>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/checkform.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
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

<script type="text/javascript">
function checkform()
{
	ReadyValidator('form1');
	checkuname('username',username_input,username_ero,'',username_ero,'member.php',username_re,check,'name_set');
	isempty('password',password,password,'','false','false','',password);
	Comparetext('repassword',password_re,password_no,'','false','false','',password_le,'password','=',password_no);
}
</script>


<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body onload="checkform()">
<div class="gwc1" >
	<!--  header  开始  -->
	<div class="gwc_header">
		<?php echo $_smarty_tpl->getSubTemplate ("shopcarthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="gwc_top">
			<div class="gwc_top_left">
				<a href='index.php'><img src="<?php echo $_smarty_tpl->tpl_vars['LOGO']->value['picurl'];?>
"class="tl" /></a>
				<span class="gwc_top_wz"><img src="templates/default/images/gwc_2.jpg" align="left" />&nbsp;找回密码</span></div>
		</div>
	</div>
	<!--  header  结束  -->
	<!--  body  开始  -->
	<div class="gwc_body">
	<!-- loading -->
	<div class="regist_suc" style=" display:none"><img src="templates/default/images/loading.gif"  /> </div>
	<!-- loading -->    
	<div class="gwc" style="clear:both;height:400px;">
		<div class="gwc_tops">		
		</div>
		<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
		<div style="height:50%;margin-top:100px;">
        <form id="form1" method="post" action="member.php?act=find">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="97" height="63" align="right" valign="top" class="color8">用户名：&nbsp;</td>
						<td align="left" valign="top">
						<input name="username" type="text" class="text2" id="username" value="" maxlength="20" />
						<input type="hidden" class="text2" name="username_f" id="username_f" />
						<span id="usernameTip"></span>
						</td>
					</tr>
					 <tr>
					<td height="62">&nbsp;</td>
					<td align="left" valign="top"><input type="image" name="imageField" id="imageField" src="templates/default/images/find.jpg" style="vertical-align:middle; " />
					<span id="reshop"></span></td>
				</tr>
				</table>
			</form>
		</div>
		<div > 
			<span style="color:#f00;text-decoration:none;"><strong>小提示：</strong></span>
			<br>
			<span style="color:#000;text-decoration:none;font-size:18px;">您输入您的用户名（邮箱）并提交以后，注册时填写的邮箱中将会收到一封包含您用户名和密码的邮件；请您收到邮件以后尽快修改密码以确保账户安全！ 
			</span> 
	  	</div>
		<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
		<div class="center_1">
		<div class="register">密码确认信息</div>
		<div >
		  <table width="960" border="0" cellspacing="0" cellpadding="0">
			<tbody><tr>
			  <td height="170" align="center"><table width="44%" height="67" border="0" cellpadding="0" cellspacing="0">
				  <tbody><tr>
					<td> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 您好：<br>
					  <br>
					  一封标题为“密码确认信息”的邮件已经发送至您的注册邮箱。<br>
					  <br>
					  请查看您的<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
的邮箱，您可以点击邮件里的重置密码链接，来完成重置密码的操作<br><br>
					  提示：因邮件运营商政策不同，该邮件有可能在垃圾邮件箱中。 </td>
				  </tr>
				</tbody></table></td>
			</tr>
		  </tbody></table>
		</div>
		<div> <span style="color:#f00;"><strong>小提示：</strong></span><br>
		  <span class="color_4">请您收到邮件以后尽快修改密码以确保账户安全！ </span> </div>
	  </div>
	  	<?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?>
		<div style="height:50%;margin-top:100px;">
		<form id="form1" method="post" action="member.php?act=find&get=<?php echo $_GET['get'];?>
">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					<td height="63" align="right" valign="top" class="color8">请输入新密码：&nbsp;</td>
				  	<td align="left" valign="top"><input name="password" type="password" class="text2" id="password" maxlength="20"/><span id="passwordTip"></span></td>
					</tr>
					<tr>
						<td height="63" align="right" valign="top" class="color8">请确认新密码：&nbsp;</td>
						<td align="left" valign="top"><input name="repassword" type="password" class="text2" id="repassword" maxlength="20"/><span id="repasswordTip"></span>
						</td>
					</tr>
					 <tr>
					<td height="62">&nbsp;</td>
					<td align="left" valign="top"><input type="image" name="imageField" id="imageField" src="templates/default/images/find.jpg" style="vertical-align:middle; " />
					<span id="reshop"></span></td>
				</tr>
				</table>
			</form>
		</div>
		<?php }?>
	  </div>
	  
	<!--  body  结束  -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("shopcartbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>