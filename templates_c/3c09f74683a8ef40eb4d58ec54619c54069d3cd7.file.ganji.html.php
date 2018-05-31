<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:08:18
         compiled from "D:\freehost\datongbuluo\web\templates\default\ganji.html" */ ?>
<?php /*%%SmartyHeaderCode:106375ae3d79212d837-57822218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c09f74683a8ef40eb4d58ec54619c54069d3cd7' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\templates\\default\\ganji.html',
      1 => 1524796488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106375ae3d79212d837-57822218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'k' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3d7921a7950_67485260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3d7921a7950_67485260')) {function content_5ae3d7921a7950_67485260($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>


</body>

<div class="main_bg1"></div>
<div class="main_bg2 rel">
	<div class="ldy">
		<ul class="ldy_list">
		 <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
			<li style="background:url(templates/default/images/main<?php echo $_smarty_tpl->tpl_vars['k']->value+3;?>
.png) no-repeat;">
				<div>
					<div class="ldy_list_pic"><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="550" height="647"></a></div>
					<div class="ldy_list_con">
						<h2><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h2>
						<h3 style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;width:330px;"><?php echo $_smarty_tpl->tpl_vars['list']->value['retitle'];?>
</h3>
						<p><?php echo $_smarty_tpl->tpl_vars['list']->value['weight'];?>
ml/瓶</p>
						<h4>优惠价：￥<span><?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span></h4>
						<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
"><img src="templates/default/images/main8.png"></a>
					</div>
				</div>
			</li>
			 <?php } ?>   
					   <?php }else{ ?>
					   <li>
				<div style="text-align: center;">
					暂无商品
				</div>
			</li>
                       <?php }?>
			
		</ul>
	</div>
	<img src="templates/default/images/main9.png" class="backtop">
</div>
<script type="text/javascript">
	$('.backtop').click(function(event) {
		$('html, body').animate({scrollTop: 0}, 1000);
	});
</script>
</html>
<?php }} ?>