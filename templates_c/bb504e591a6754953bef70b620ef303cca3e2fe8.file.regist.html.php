<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:06:14
         compiled from "F:\WWW\shopx\m\templates\web\regist.html" */ ?>
<?php /*%%SmartyHeaderCode:3161559f1a586628fe0-21249727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb504e591a6754953bef70b620ef303cca3e2fe8' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\regist.html',
      1 => 1459492852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3161559f1a586628fe0-21249727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'template_dir' => 0,
    'fromurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a5866a9e85_06877059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a5866a9e85_06877059')) {function content_59f1a5866a9e85_06877059($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="../js/validator.css"></link>
<script src="../js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="../js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="../js/checkform.js" type="text/javascript" charset="UTF-8"></script>
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
<script>
function checkform()
{
	ReadyValidator('form1');
	checkemail('email',emailblank,email_ero,email_right,email_ero,'member.php',email_re,check,'email_jud');
	checkuname('username',username_input,username_ero,username_right,username_ero,'member.php',username_re,check,'regist_jud');
	//isempty('password',password,password,'','false','false','',password);
	passwd('password','11111','请输入密码！','','密码不能少于6!','member.php','密码不能少于6!','验证中。。。','regist_pwd');
	Comparetext('repassword',password_re,'请确认密码!','','false','false','',password_le,'password','=',password_no);
	checkboxs("reshop","xqah_one","",shop_service,"",shop_service);
}
</script>
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
.onError,.onFocus{
	background-color:transparent;
}
.onFocus
{
   
	line-height:22px; 
	color:#999;
	
}
.onError
{
    
	line-height:22px; 
	color:#999;
	
}
.onCorrect
{
   
	line-height:22px; 
	color:#999;
	
}
</style>
</head>

<body onload="checkform()" style="max-width:640px;height:100%;margin:0 auto;position:relative;overflow:hidden;">
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
				</div>
				注册
			</div>
			<form id="form1" method="post" action="member.php" >
				<?php if ($_GET['error']){?><div  class="err_mes"><?php echo $_GET['error'];?>
</div><?php }?>
				<div class="zc_zj" style="margin-top:5%;">
					<ul>
						<li>
							<div class="zc_zj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/reg.png"></div>
							<input  name="email" type="text" id="email" class="zc_zj_bd1"  placeholder="请输入邮箱" required>
							<div class="cl"></div>
                            <div class="zc_zj_icon">&nbsp;</div><span id="emailTip" style="float:left;"></span>
							
							<div class="cl"></div>
						</li>
						<li>
							<div class="zc_zj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/con13.png"></div>
							<input name="username" type="text" class="zc_zj_bd1" id="username" placeholder="请输入会员名" required>
							<div class="cl"></div>
							<div class="zc_zj_icon">&nbsp;</div><span id="usernameTip" style="float:left;"></span>
							<div class="cl"></div>
						</li>
						<li>
							<div class="zc_zj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/con3.png"></div>
							<input name="password" type="password" class="zc_zj_bd1" id="password" placeholder="请输入密码" required>
							<div class="cl"></div>
							<div class="zc_zj_icon">&nbsp;</div><span id="passwordTip" style="float:left;"></span>
							<div class="cl"></div>
						</li>
						<li style="border-bottom:none;">
							<div class="zc_zj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/con3.png"></div>
							<input name="repassword" type="password" class="zc_zj_bd1" id="repassword" placeholder="请确认密码" required>
							<div class="cl"></div>
							 <div class="zc_zj_icon">&nbsp;</div><span id="repasswordTip" style="float:left;"></span>
							<div class="cl"></div>
						</li>
					</ul>
				</div>
				<input name="act" type="hidden" value="regist_acc" />
				<input name="gourl" type="hidden" value="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
" />
				<input name="url" type="hidden" value="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
&reshop=lost" />
				<div >
					<input type="submit" value="注册" class="regist_submit" style="cursor:pointer;border-radius: 5px;margin-top:5%;-webkit-appearance: none; ">
				</div>
			</form>
	  	</div>
  	</div>
</div>
</body>
</html><?php }} ?>