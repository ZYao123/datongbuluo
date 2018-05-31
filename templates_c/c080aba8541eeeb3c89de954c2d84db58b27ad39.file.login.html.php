<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:25
         compiled from "F:\WWW\shopx\m\templates\web\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1809359f1a555998b96-44784614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c080aba8541eeeb3c89de954c2d84db58b27ad39' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\login.html',
      1 => 1459481064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809359f1a555998b96-44784614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'from' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a555aa6444_50288066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a555aa6444_50288066')) {function content_59f1a555aa6444_50288066($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
input:-moz-placeholder,
textarea:-moz-placeholder {
	color: #afafaf;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
	color: #afafaf;
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
	color: #afafaf;
}
</style>
</head>

<body style="max-width:640px;height:100%;margin:0 auto;position:relative;overflow:hidden;">
<div > 
	<img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/bg4.jpg" width="100%" height="100%">
  	<div style="width:100%;max-width:640px;position:absolute;left:0;top:0;">
		<div class="zc_nr">
	  		<div class="zc_title" style="margin-bottom:15%;">
				<div class="zc_icon">
					<a href="javascript:void(0);" onclick="history.back();">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/con1.png">
					</a>
				</div>登录
			</div>
			<form id="form1" method="post" action="member.php">
			<input name="act" type="hidden" value="login_acc" />
			<input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
			<?php if ($_GET['error']){?><div  class="err_mes"><?php echo $_GET['error'];?>
</div><?php }?>
				<div class="zc_zj">
					<ul>
					  <li>
						<div class="zc_zj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/con13.png"></div>
						<input name="username" type="text" id="username" class="zc_zj_bd1" 
						placeholder="账号或注册的邮箱" required>
						<div class="cl"></div>
					  </li>
					  <li style="border-bottom:none;">
						<div class="zc_zj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/con3.png"></div>
						<input name="password" type="password" class="zc_zj_bd1" id="password" placeholder="请输入密码" required>
						<div class="cl"></div>
					  </li>
					</ul>
				</div>
			</form>
	  		<div class="dl_zh"><a href="member.php?act=find">找回密码</a></div>
			<a href="javascript:void()" onclick="document.getElementById('form1').submit()">
			<div class="dl_but">登录</div>
			</a> 
			<a href="member.php?act=regist">
			<div class="zc_but1">注册新用户</div>
			</a> 
	  	</div>
  	</div>
</div>
<script>
function checkform()
{
	ReadyValidator('form1');
	isempty('username',username_first,username_input,'','false','false','',username_input);
	isempty('password',password,password,'','false','false','',password);
}
</script>
</body>
</html><?php }} ?>