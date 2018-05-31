<?php /* Smarty version Smarty-3.1.14, created on 2017-11-19 14:30:53
         compiled from "F:\WWW\shopx\m\templates\web\member_info.html" */ ?>
<?php /*%%SmartyHeaderCode:136785a11251da35437-66525182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a569361c68345ec348a1cd580cc2513879ae9b5' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\member_info.html',
      1 => 1448326868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136785a11251da35437-66525182',
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
    'row_member' => 0,
    'name_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a11251dad9566_77403306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a11251dad9566_77403306')) {function content_5a11251dad9566_77403306($_smarty_tpl) {?><!doctype html>
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
	ReadyValidator('form');
	isempty('email','',emailblank,'','false','false','',emailblank);
}
</script>
</head>

<body style="max-width:640px;margin:0 auto;background:#fff;" onload="checkform()">

<!--头部 开始-->
<header class="m_pro_title">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
<!--头部 结束--> 
<!--内容 开始-->
<form method="post" action="?act=info_update" id='form' name='form'>
<div class="yjfk_nr">
	<div style="padding:3% 0;" class="my_part">
		<?php if ($_smarty_tpl->tpl_vars['row_member']->value['picurl']){?>
		<img src="../<?php echo $_smarty_tpl->tpl_vars['row_member']->value['picurl'];?>
" width="100" height="100" />
		<?php }else{ ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
img/more.png" width="100" height="100" />
		<?php }?>
		<span>
			<strong><?php echo $_smarty_tpl->tpl_vars['name_title']->value;?>
</strong><br />
			积分：<?php echo getMemberPoint();?>
   
		</span>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" class="my_part">
		<div class="yjfk_t1" style="line-height: inherit;">性别：</div>
		<div class="">
			<input type="radio" name="sex" value="0" id="sex" <?php if ($_smarty_tpl->tpl_vars['row_member']->value['sex']==0){?>checked="checked"<?php }?>/>保密
			<input type="radio" name="sex" value="1" id="sex" <?php if ($_smarty_tpl->tpl_vars['row_member']->value['sex']==1){?>checked="checked"<?php }?> />男
			<input type="radio" name="sex" value="2" id="sex" <?php if ($_smarty_tpl->tpl_vars['row_member']->value['sex']==2){?>checked="checked"<?php }?> />女
		</div>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" >
		<div class="yjfk_t1">手机号码：</div>
		<div class="yjfk_bg2">
			<input type="text" name="mobile" id="mobile" class="yjfk_bd1"  placeholder="您的手机号码" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['mobile'];?>
">
		</div>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" >
		<div class="yjfk_t1">邮箱：</div>
		<div class="yjfk_bg2">
			<input type="text" name="email" id="email" class="yjfk_bd1"  placeholder="您的邮箱" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['email'];?>
">
		</div>
		<div class="cl"></div>
		<div class="yjfk_bg2" style="border: none;">
			<span id="emailTip"></span>
		</div>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" >
		<div class="yjfk_t1">出生日期：</div>
		<div class="yjfk_bg2">
			<input type="text" name="birthday" id="birthday" class="yjfk_bd1"  placeholder="您的出生日期" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['birthday'];?>
">
		</div>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" >
		<div class="yjfk_t1">QQ：</div>
		<div class="yjfk_bg2">
			<input type="text" name="QQ" id="QQ" class="yjfk_bd1"  placeholder="您的QQ" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['QQ'];?>
">
		</div>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" >
		<div class="yjfk_t1">固定电话：</div>
		<div class="yjfk_bg2">
			<input type="text" name="telephone" id="telephone" class="yjfk_bd1"  placeholder="您的电话" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['telephone'];?>
">
		</div>
		<div class="cl"></div>
	</div>
	<div style="padding:3% 0;" >
		<div class="yjfk_t1">MSN：</div>
		<div class="yjfk_bg2">
			<input type="text" name="MSN" id="MSN" class="yjfk_bd1"  placeholder="您的MSN" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['MSN'];?>
">
		</div>
		<div class="cl"></div>
	</div>
	<div class="s_f_mian02">
		<div class="fbpj_btn">
			<input type="submit" class="login_submit" value="提交" style="cursor:pointer;">
		</div>
	</div>
</div>
	<input name="picurl" type="hidden" class="hyxx_text" id="picurl" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['picurl'];?>
" />
</form>
<!--内容 结束--> 
<!--底部 开始-->

<!--底部 结束-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>