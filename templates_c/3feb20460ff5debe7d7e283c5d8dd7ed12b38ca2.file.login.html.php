<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:26:29
         compiled from "D:\freehost\datongbuluo\web\templates\default\login.html" */ ?>
<?php /*%%SmartyHeaderCode:248255ae3d715b6e063-32806845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3feb20460ff5debe7d7e283c5d8dd7ed12b38ca2' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\templates\\default\\login.html',
      1 => 1524882386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248255ae3d715b6e063-32806845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3d715bc9944_30825460',
  'variables' => 
  array (
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'fromurl' => 0,
    'from' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3d715bc9944_30825460')) {function content_5ae3d715bc9944_30825460($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="js/validator.css"></link>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
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
<script>
function checkform()
{
	ReadyValidator('form1');
	isempty('username',username_first,username_input,'','false','false','',username_input);
	isempty('password',password,password,'','false','false','',password);
}
</script>

</head>
<style type="text/css">
	.reg_btn{display: block;}
</style>
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

				<p><input type="text" placeholder="请输入用户名" name="username" id="username" class="reg_user user_bg1" />
				<span id="usernameTip">
				</p>
				<tr>
                              <td height="35" align="left" valign="top"><span id="usernameTip"></span></td>
                          </tr>
				<p><input type="password" placeholder="请输填写密码" class="reg_user user_bg2" name="password" id="password"/><span id="passwordTip"></span></p>
				<!--<label for=""><input type="checkbox">自动登录</label>-->
				<input type="image" class="reg_btn" value="登  录" name="imageField" id="imageField"/>

				<div class="tc forget"><a href="member.php?act=find">忘记密码？</a></div>
				 <input name="act" type="hidden" value="login_acc" style="display: block;" />
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