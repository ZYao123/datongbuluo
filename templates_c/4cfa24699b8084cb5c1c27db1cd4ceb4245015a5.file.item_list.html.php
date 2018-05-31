<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 14:30:10
         compiled from "F:\WWW\20180426datong\templates\default\item_list.html" */ ?>
<?php /*%%SmartyHeaderCode:312915ae174783defb2-91342815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfa24699b8084cb5c1c27db1cd4ceb4245015a5' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\item_list.html',
      1 => 1524810608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312915ae174783defb2-91342815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1747851f502_04650127',
  'variables' => 
  array (
    'list' => 0,
    'orderurl' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1747851f502_04650127')) {function content_5ae1747851f502_04650127($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
<!--header start-->

<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end-->

<!--main start-->
<div class="main_bg">
	<div class="main">
		<div class="path"><i class="fa fa-map-marker red"></i> <a href="index.php">首页</a> > 商品列表</div>
		<div class="clearfix">
			<div class="left fl bgw">
				<h3>商品精选</h3>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(436,'',4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="160" height="160">
						<p>¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</p>
						<h4><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h4>
					</a></li>
					<?php } ?>
					
				</ul>
			</div>
			<div class="right fr">
				<ul class="order clearfix">
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
">综合 <i class="fa fa-long-arrow-down"></i></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=sumer&ordersort=desc">销量 <i class="fa fa-long-arrow-down"></i></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=price&ordersort=desc">价格 <i class="fa fa-long-arrow-down"></i></a></li>
				</ul>
				<div class="m_pro bgw">
					<ul class="clearfix">
					<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li>
							<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="225" height="225"></a>
							<p><em class="red">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</em><span class="fr">销量 <span class="red">219</span></span></p>
							<h3><a href=""><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></h3>
						</li>
						<?php } ?>   
					   <?php }else{ ?>
                      <li style=" width:100%; text-align:center; color:#F00">暂无商品</li>
                       <?php }?>
						
					</ul>					
				</div>
				<?php if ($_smarty_tpl->tpl_vars['info']->value){?>

				<div class="page tr"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> <?php }?>
				<!--<div class="page tr">

				<a href="">上一页</a><a href="">1</a><a href="">2</a><a href="">下一页</a> 共20页 到第<input type="text" value="1">页<a href="">确定</a></div>-->
			</div>
		</div>
	</div>
</div>
<div class="content"><img src="templates/default/images/index_16.jpg"></div>
<!--main end-->

<!--footer start-->
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--footer end-->
</body>


</html>
<?php }} ?>