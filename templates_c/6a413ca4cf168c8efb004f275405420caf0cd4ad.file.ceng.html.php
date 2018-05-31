<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:19
         compiled from "F:\WWW\shopx\m\templates\web\inc\ceng.html" */ ?>
<?php /*%%SmartyHeaderCode:1253059f1a54fcd38d9-66358459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a413ca4cf168c8efb004f275405420caf0cd4ad' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\inc\\ceng.html',
      1 => 1455700790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253059f1a54fcd38d9-66358459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a54fdc1d93_38475908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a54fdc1d93_38475908')) {function content_59f1a54fdc1d93_38475908($_smarty_tpl) {?><div id="ceng" style="display:none; width:100%; height:100%;z-index:100;position:absolute; top:0;  right:0; bottom:0;">
	<div id="close" style="width:55%; background:#444;height:100%; float:left; background-color:rgba(0, 0, 0, 0.5)">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
img/close.png" style="padding:15px;width:auto;cursor:pointer;" width="100%">
	</div>
	<div style="width:45%;background:#000;height:100%; float:left;opacity: 0.8;" class="s_type">
		<ul>
			<li><a href="index.php">首页</a></li>
			<li><a href="member.php?act=message">我的消息</a></li>
			<li><a href="gbook.php">留言反馈</a></li>
			<li><a href="member.php?act=memberinfo">个人资料</a></li>
			<li><a href="member.php?act=pswedit">修改密码</a></li>
			<li><a href="member.php?act=collect">我的收藏</a></li>
			<li><a href="point.php">购物券</a></li>
			<li><a href="member.php?act=points">积分中心</a></li>
			<li><a href="member.php?act=order">订单中心</a></li>
			<li><a href="shopcart.php?act=list">购物车</a></li>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(e) {
	$("#tubiao").bind("click",function (){
		$("#ceng").toggle(500);
		$("#ceng").css(document.body.scrollHeight);
		})
		$("#close").bind("click",function (){
		$("#ceng").toggle(500);
		
		})
	});	
</script>   <?php }} ?>