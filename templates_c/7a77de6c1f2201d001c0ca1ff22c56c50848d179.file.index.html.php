<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 15:04:51
         compiled from "C:\wamp64\www\templates\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:296405aeab493c6c180-38597121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a77de6c1f2201d001c0ca1ff22c56c50848d179' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\index.html',
      1 => 1524907032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296405aeab493c6c180-38597121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aeab493e704f9_12795527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeab493e704f9_12795527')) {function content_5aeab493e704f9_12795527($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
<!--header start-->
<?php echo $_smarty_tpl->getSubTemplate ("head_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end-->

<!--index start-->
<div class="content" id="main">
	<div class="mar30 floor">
		<div class="clearfix">
			<div class="tit fl tit1">网上赶集 <b>Online listing</b></div>
			<a href="ganji.php?cid=452" class="more more1 fr">更多</a>
		</div>
		<div class="clearfix">
			<div class="listing_l tc fl">
				<div><img src="templates/default/images/index_06.jpg"></div>
				<div class="tips">臻品真便宜！农民身边的大集</div>
				<div class="listing_l_type tc">
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('411',4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
            <a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
            <?php } ?>
				
				</div>

				<div><img src="templates/default/images/index_08.png"></div>
			</div>
			<div class="listing_r bor1 fr">
				<ul>

				 <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(411,2,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li><a><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="326" height="438"></a></li>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(411,3,3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="328" height="219"></a></li>
				<?php } ?>

					<li class="tujian">
						<h4 class="rel">优品推荐<a href="news.php?cid=16" class="tuijian_more fr">更多</a></h4>
						
						<div class="cl"></div>
						<ul class="tuijian_list">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(16,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                     <li><a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a></li>
                                <?php } ?>

						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="ad1"><a href=""><img src="templates/default/images/index_11.jpg"></a></div>
	</div>
	
	<div class="mar30 floor">
		<div class="clearfix">
			<div class="tit fl tit2">农产品 <b>Agricultural products</b></div>
			<a href="item_list.php?cid=409" class="more more2 fr">更多</a>
			<div class="classify bg1 fr">
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('409'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
			<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
			 <?php } ?> 

			</div>
		</div>
		<ul class="clearfix bor2 floor_list">
			<li>
				<div class="floor_tit floor_tit1 tc">
					<h4>农产品</h4>
					<h3>Agricultural & products</h3>
				</div>
				<div>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(409,2,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				<a ><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="247" height="343" alt="" /></a>
				<?php } ?>
				</div>
			</li>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(409,3,8); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<li class="product">
				<div class="pro_tit">
					<h3 class="ellipsis"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h3>
					<p class="green"><?php echo $_smarty_tpl->tpl_vars['list']->value['retitle'];?>
</p>
				</div>
				<div class="tr"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="180" height="130"></div>
				<div class="price">
					<span class="fl">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span>
					<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
" class="fr">立即抢购</a>
				</div>
			</li>
				<?php } ?>
			
			
		</ul>
	</div>
	<div class="mar30 floor">
		<div class="clearfix">
			<div class="tit fl tit1">农资 <b>Agricultural products</b></div>
			<a href="item_list.php?cid=410" class="more more1 fr">更多</a>
			<div class="classify bg2 fr">
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('410'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
			<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
			 <?php } ?></div>
		</div>
		<ul class="clearfix bor1 floor_list">
			<li>
				<div class="floor_tit floor_tit2 tc">
					<h4>农资</h4>
					<h3>Agricultural & resources</h3>
				</div>
				<div>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(410,2,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				<a ><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="247" height="343" alt="" /></a>
				<?php } ?></div>
			</li>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(410,3,8); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<li class="product">
				<div class="pro_tit">
					<h3 class="ellipsis"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h3>
					<p class="green"><?php echo $_smarty_tpl->tpl_vars['list']->value['retitle'];?>
</p>
				</div>
				<div class="tr"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="180" height="130"></div>
				<div class="price">
					<span class="fl">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span>
					<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
" class="fr">立即抢购</a>
				</div>
			</li>
				<?php } ?>
			
		</ul>
		<div class="ad1"><a href=""><img src="templates/default/images/index_15.jpg"></a></div>
	</div>
	
	<div class="mar30 floor">
		<div class="clearfix">
			<div class="tit fl tit3">日用品 <b>Daily necessities</b></div>
			<a href="item_list.php?cid=412" class="more more3 fr">更多</a>
			<div class="classify bg3 fr">
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('412'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
			<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
			 <?php } ?> 
			</div>
		</div>
		<ul class="clearfix bor3 floor_list">
			<li>
				<div class="floor_tit floor_tit3 tc">
					<h4>日用品</h4>
					<h3>Daily & necessities</h3>
				</div>
				<div>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(412,2,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				<a><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="247" height="343" alt="" /></a>
				<?php } ?>
				</div>
			</li>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(412,3,8); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<li class="product">
				<div class="pro_tit">
					<h3 class="ellipsis"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h3>
					<p class="green"><?php echo $_smarty_tpl->tpl_vars['list']->value['retitle'];?>
</p>
				</div>
				<div class="tr"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="180" height="130"></div>
				<div class="price">
					<span class="fl">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span>
					<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
" class="fr">立即抢购</a>
				</div>
			</li>
				<?php } ?>
		</ul>
	</div>
	<div><img src="templates/default/images/index_16.jpg" alt="" /></div>
</div>


<div class="lift">
	<ul id="LoutiNav">
		<li class="active">1F</li>
		<li>2F</li>
		<li>3F</li>
		<li>4F</li>
		<div class="tc"><img src="templates/default/images/top.jpg" id="goTop"></div>
	</ul>
	
</div>
<!--index end-->

<!--footer start-->


<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--footer end-->
</body>


</html>
<?php }} ?>