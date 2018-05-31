<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 15:50:42
         compiled from "F:\WWW\20180426datong\templates\default\login.html" */ ?>
<?php /*%%SmartyHeaderCode:44505ae18ebe1e1fd2-16143141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd59442374bfc35ff9b7ec32359e2f684ecf6b6' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\login.html',
      1 => 1524815439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44505ae18ebe1e1fd2-16143141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae18ebe262e79_36853040',
  'variables' => 
  array (
    'fromurl' => 0,
    'from' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18ebe262e79_36853040')) {function content_5ae18ebe262e79_36853040($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>

<div class="main clearfix">
	<div class="fl"><img src="templates/default/images/main15.jpg" alt="" /></div>
	<div class="login_head fl">欢迎登录</div>
</div>
<div class="login_bg">
	<div class="main">
		<div class="reg fr">
			<ul class="reg_tit clearfix">
				<li class="active">用户登录</li>
				<a href="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
"><li> 立即注册</li></a>
			</ul>
			 <form id="form1" method="post" action="" class="reg_con">

				<p><input type="text" placeholder="请输入手机号" name="username" id="username" class="reg_user user_bg1" /></p>
				<tr>
                              <td height="35" align="left" valign="top"><span id="usernameTip"></span></td>
                          </tr>
				<p><input type="password" placeholder="请输填写密码" class="reg_user user_bg2" name="password" id="password"/></p>
				<!--<label for=""><input type="checkbox">自动登录</label>-->
				<input type="image" class="reg_btn" value="登  录" name="imageField" id="imageField"/>

				<div class="tc forget"><a href="member.php?act=find">忘记密码？</a></div>
				 <input name="act" type="hidden" value="login_acc" />
                        <input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
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