<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:12:24
         compiled from "F:\WWW\shopx\m\templates\web\member_collect.html" */ ?>
<?php /*%%SmartyHeaderCode:2063959f1a6f873b153-47761105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac84f3189c3ade1810d5dbc21ef5189b0eff2a86' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\member_collect.html',
      1 => 1459837844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063959f1a6f873b153-47761105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'info' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a6f882d497_14360907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a6f882d497_14360907')) {function content_59f1a6f882d497_14360907($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body style="max-width:640px;margin:0 auto;background:#fff;">
<!--头部 开始-->
<header class="m_pro_title" style="background:#fff;">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
 <!-- <div class="m_pro_t1"><a href="#">关闭</a></div>-->
  <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部 结束--> 
<!--内容 开始-->
<div class="wdgz">
	<?php $_smarty_tpl->tpl_vars['info'] = new Smarty_variable(get_collect(6,1,1), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
		<li style="cursor:pointer; margin:0;" >
		  <div class="qbdd_nr">
			<div class="qbdd_list" style="border-bottom:none; padding:1% 0 5% 0;">
			  <div class="qbdd_pic" onClick="window.open('item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','_self')"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
"></div>
			  <div class="qbdd_r" style="padding-left:5%; width:59%" onClick="window.open('item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','_self')"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
<br>
				<span style="color:#c70000">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</span></div>
               <div style="float:right; width:10%"> <a  href="member.php?act=collect&gid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&del" onClick="return confirm('确定删除收藏商品？')"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/del.png" style="width:40px;padding-top:40%" /></a></div>
			  <div class="cl"></div>
			</div>
		  </div>
		</li>
		<?php } ?>
	</ul>
	<?php }else{ ?>
	<center style="padding-top:20px;">暂未添加任何收藏</center>
	<?php }?>
	<div class="cl"></div>
	<div class="s_page"  ><?php echo $_smarty_tpl->tpl_vars['info']->value['page'];?>
</div>
</div>

<!--内容 结束--> 
<!--底部 开始--> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--底部 结束-->
</body>
</html><?php }} ?>