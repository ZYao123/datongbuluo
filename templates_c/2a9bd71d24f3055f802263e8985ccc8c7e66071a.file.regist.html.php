<?php /* Smarty version Smarty-3.1.14, created on 2018-05-11 16:34:25
         compiled from "C:\wamp64\www\templates\default\regist.html" */ ?>
<?php /*%%SmartyHeaderCode:237685af555914b9686-58263134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9bd71d24f3055f802263e8985ccc8c7e66071a' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\regist.html',
      1 => 1525317493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237685af555914b9686-58263134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'fromurl' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af5559153f447_39502952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af5559153f447_39502952')) {function content_5af5559153f447_39502952($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/getarea.js"></script>
<script src="js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/checkform.js" type="text/javascript" charset="UTF-8"></script>
</head>
<style type="text/css">
	.reg_btn{display: block;}
</style>
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
	checkemail('email',emailblank,email_ero,email_right,email_ero,'member.php',email_re,check,
    'email_jud');
	checkuname('username',username_input,username_ero,username_right,username_ero,'member.php',username_re,check,'regist_jud');
	isempty('yzm','','请输入验证码','','false','false','','验证码不能为空');
	passwd('password','11111','请输入密码！','','密码不能少于6!','member.php','密码不能少于6!','验证中。。。','regist_pwd');
	Comparetext('repassword',password_re,'请确认密码!','','false','false','',password_le,'password','=',password_no);
	checkboxs("reshop","xqah_one","",shop_service,"",shop_service);
}

function newgdcode(pic) {
	var obj = document.getElementById('pic');
	var url = document.getElementById('pic').src;
	obj.src = url+ '?nowtime=' + new Date().getTime();//后面传递一个随机参数，否则在IE7和火狐下，不刷新图片
}
</script>
<style type="text/css">
.regist_suc
{
position:fixed;
+position:absolute;
+top:expression(eval(document.documentElement.scrollTop||document.body.scrollTop)+50);
}
</style>
<body  onload="checkform()"  id = "gy_bldy">
<div  id="regist_suc" style = "position:absolute;z-index:8888;display:none;">
	<div class="regist_suc"  style = "width:100%; height:100%; left:0px;background:url(templates/default/images/reg_bg.png);">
		<div style = "width:799px;height:482px;margin:0 auto;background:url(templates/default/images/reg_g_bg.png) no-repeat;">
		<div style = "padding:280px 0 0 230px;">
			<span id = "reg_return" class="regist_res">
            
            </span>
		</div>
		</div>
	</div>
</div>
<div class="main clearfix">
	<div class="fl"><img src="templates/default/images/main15.jpg" alt="" /></div>
	<div class="login_head fl">欢迎登录</div>
</div>
<div class="login_bg">
	<div class="main">
		<div class="reg fr">
			<ul class="reg_tit clearfix">
				<a href="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
"><li >用户登录</li></a>
				<li class="active">立即注册</li>
			</ul>

		 <form id="form1" method="post" action="member.php" class="reg_con">
			 <p><input type="text" placeholder="请输入邮箱" class="reg_user user_bg1" name="email" id="email"/><span id="emailTip"></span></p>
				<p><input type="text" placeholder="请输入用户名" class="reg_user user_bg1" name="username" id="username"/> <span id="usernameTip"> </p>
				          <input type="hidden" class="text2" name="username_f" id="username_f" />
				<p><input type="password" placeholder="请输填写密码" class="reg_user user_bg2" name="password" id="password"/><span id="passwordTip"></span></p>
				<p><input type="password" placeholder="请确认密码" class="reg_user user_bg2" name="repassword" id="repassword"/><span id="repasswordTip"></span></p>
				<input name="act" type="hidden" value="regist_acc" />
                    <input name="gourl" type="hidden" value="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
" />
                    <input name="url" type="hidden" value="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
&reshop=lost" />
				<label for=""><input name="xqah_one" type="checkbox" value="1" id="xqah_one">我已阅读并同意《大同部落网络服务使用协议》</label>
				<input type="submit" name="imageField" id="imageField" class="reg_btn" value="注 册" />
			</form>

			  
		</div>
	</div>
</div>




	<div class="content tc" style="padding: 15px 0;"> <?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
 </div>

<!--footer end-->
</body>


</html>
<?php }} ?>