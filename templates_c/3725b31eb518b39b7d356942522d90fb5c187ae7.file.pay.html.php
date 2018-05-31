<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:20:29
         compiled from "F:\WWW\shopx\m\templates\web\pay.html" */ ?>
<?php /*%%SmartyHeaderCode:1581359f1a8dda04f43-53325790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3725b31eb518b39b7d356942522d90fb5c187ae7' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\pay.html',
      1 => 1467007268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581359f1a8dda04f43-53325790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'olnum' => 0,
    'info' => 0,
    'list' => 0,
    'bankId' => 0,
    'paymode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a8dda72561_05367418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a8dda72561_05367418')) {function content_59f1a8dda72561_05367418($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../js/lcshopz.js"></script>
</script>
</head>

<body style="max-width:640px;margin:0 auto;background:#fff;">
<!--header start-->


<!--头部 开始-->
<header class="m_pro_title" style="background:#fff;">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  支付</header>
<!--头部 结束--> 
<!--内容 开始-->
<div>
	<div class="s_f_mian02">
		<form action="pay.php?act=setpay&olnum=<?php echo $_smarty_tpl->tpl_vars['olnum']->value;?>
" method="post" target="_blank" onsubmit="return pay()">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				<li>
					 <input id="pay_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" type="radio" name="paytype" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
					 <?php if ($_smarty_tpl->tpl_vars['bankId']->value==0||$_smarty_tpl->tpl_vars['bankId']->value==''){?>
					 	<?php if ($_smarty_tpl->tpl_vars['paymode']->value==$_smarty_tpl->tpl_vars['list']->value['id']){?> checked="checked"<?php }?>
					 <?php }?> onclick="document.getElementById('bankId').value='0'"/>
					<a href="#">
					<label for="pay_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" onclick="document.getElementById('bankId').value='0'">
					<img src="../data/bankimage/<?php echo $_smarty_tpl->tpl_vars['list']->value['code'];?>
.gif" width="100%"  alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
" style=" border:2px solid #CCC; border-radius:8px"/>
					</a>
				</li>
				<?php } ?>
			</ul>
			<input name="bankId" id="bankId" value="<?php echo $_smarty_tpl->tpl_vars['bankId']->value;?>
" type="hidden"/>
			<input name="" type="image" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
img/btn-submit.gif" />
		</form>
	</div>
</div>
<!--内容 结束--> 
<!--底部 开始-->

<!--底部 结束-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>