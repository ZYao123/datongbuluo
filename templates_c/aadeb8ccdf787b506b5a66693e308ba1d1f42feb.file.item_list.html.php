<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:59:10
         compiled from "F:\WWW\shopx\templates\default\item_list.html" */ ?>
<?php /*%%SmartyHeaderCode:3109459f1b1eee74c62-27299543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aadeb8ccdf787b506b5a66693e308ba1d1f42feb' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\item_list.html',
      1 => 1459844619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3109459f1b1eee74c62-27299543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'webname' => 0,
    'GetPosStr' => 0,
    'list' => 0,
    'son' => 0,
    'class_son' => 0,
    'brand_info' => 0,
    'section_info' => 0,
    'attr_info' => 0,
    'list_sectio' => 0,
    'k' => 0,
    'cklist' => 0,
    'class1' => 0,
    'orderurl' => 0,
    'class2' => 0,
    'class3' => 0,
    'class4' => 0,
    'class5' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1b1ef0bd143_52683671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b1ef0bd143_52683671')) {function content_59f1b1ef0bd143_52683671($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable(GetGoodsType_show($_GET['cid']), null, 0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['type']->value['classname'];?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="js/loadimage.js"></script>
<script type="text/javascript" src="js/goods.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>

<script type="text/javascript">
$(function(){
	$(".links_tp img").LoadImage({width:184,height:147});
});
</script>

<body>
<div class="help_bj">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--  body  开始  -->
<div class="body">
	<div class="helps">
	<img src="templates/default/images/index_38_.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['GetPosStr']->value;?>
</div>
	<div class="det_bottom">
		<div class="left">
			<div class="jydq">
			   
				<div class="jydq_list">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('428'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
						<li><img src="templates/default/images/index_66.png" align="left" class="img" /><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
						<ul class="jydq_top">
					        <?php  $_smarty_tpl->tpl_vars['son'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['son']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType($_smarty_tpl->tpl_vars['list']->value['id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['son']->key => $_smarty_tpl->tpl_vars['son']->value){
$_smarty_tpl->tpl_vars['son']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['son']->key;
?>
								<li><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['son']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['son']->value['classname'];?>
</a></li>
							<?php } ?> 
						</ul>
					</li>
					<?php } ?> 
					</ul>
				</div>
			</div>
			<div class="yl">
				<div class="yl_title">新品上市</div>
				<div class="yl_list">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(0,4,6); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li>
							<span class="yl_tp">
								<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" border="0" width="98" height="68" />
								</a>
							</span>
							<span class="yl_wz">
								<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
								<br />
								<strong class="color13">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</strong>
							</span>
						</li>
					  <?php } ?>
					</ul>
				</div>
			</div>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetAds(6,'image',2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<div class="sg"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="205" height="205"></a></div>
			<?php } ?>
		</div>
	  <div class="right">
			
			<?php if ($_smarty_tpl->tpl_vars['class_son']->value){?>
			<div class="right_top">
			 	<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="attrlink">
					<tr>
						<td width="100" align="right" valign="top" class="right_border">分类：</td>
						<td width="850" align="left" class="right_border">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_son']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a> 
						<?php } ?></td>
					</tr>
				</table>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['brand_info']->value||$_smarty_tpl->tpl_vars['section_info']->value||$_smarty_tpl->tpl_vars['attr_info']->value){?>
			<div class="right_top">
				<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="attrlink">
				<?php if ($_smarty_tpl->tpl_vars['brand_info']->value){?>
					<tr>
						<td width="100" align="right" class="right_border" valign="top">品牌：</td>
						<td align="center"  class="right_border" valign="top">
							<a href="<?php echo $_smarty_tpl->tpl_vars['brand_info']->value['b']['nocheckurl'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['brand_info']->value['b']['nocheckstyle'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand_info']->value['b']['nocheck'];?>
</a>
						</td>
						<td width="785" align="left" class="right_border">
							<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand_info']->value['p']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['list']->value['stylename'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a> 
							<?php } ?>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['section_info']->value){?>
					<tr>
						<td width="100" align="right" class="right_border" valign="top">价格：</td>
						<td align="center"  class="right_border" valign="top">
							<a href="<?php echo $_smarty_tpl->tpl_vars['section_info']->value['b']['nocheckurl'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['section_info']->value['b']['nocheckstyle'];?>
"><?php echo $_smarty_tpl->tpl_vars['section_info']->value['b']['nocheck'];?>
</a>
						</td>
						<td align="left" class="right_border">
							<?php  $_smarty_tpl->tpl_vars['list_sectio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_sectio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section_info']->value['p']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_sectio']->key => $_smarty_tpl->tpl_vars['list_sectio']->value){
$_smarty_tpl->tpl_vars['list_sectio']->_loop = true;
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['list_sectio']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['list_sectio']->value['stylename'];?>
"><?php echo $_smarty_tpl->tpl_vars['list_sectio']->value['name'];?>
元</a>
							<?php } ?>
						</td>
					</tr>
				 <?php }?>
				 <?php if ($_smarty_tpl->tpl_vars['attr_info']->value){?>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attr_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
						<tr>
							<td width="100" align="right"  class="right_border" valign="top"><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
：</td>
							<td align="center"  class="right_border" valign="top">
								<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['nocheckurl'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['list']->value['nocheckstyle'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['nocheck'];?>
</a>
							</td>
							<td align="left" class="right_border"> 
							<?php if ($_smarty_tpl->tpl_vars['list']->value['showtype']==2){?>
							<span class="attr_text" onmouseover="attrshow('atr_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">
							<span><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
</span>
							</span>                        
							
							<div id="atr_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="attr_text_1" onmouseover="attrshow('atr_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')" onmouseout="attrhide('atr_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">
							<span class="attr_text attr_text_2">
							<span><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
</span>
							</span>
							<span style=" display:block;border: 1px solid #b2b2b2; background:#fff;clear:both;">
								<?php  $_smarty_tpl->tpl_vars['cklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cklist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['attrvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cklist']->key => $_smarty_tpl->tpl_vars['cklist']->value){
$_smarty_tpl->tpl_vars['cklist']->_loop = true;
?>
									 <a href="<?php echo $_smarty_tpl->tpl_vars['cklist']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['cklist']->value['stylename'];?>
"><?php echo $_smarty_tpl->tpl_vars['cklist']->value['name'];?>
</a>
								<?php } ?>
							</span>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['showtype']==1){?>
							<?php  $_smarty_tpl->tpl_vars['cklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cklist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['attrvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cklist']->key => $_smarty_tpl->tpl_vars['cklist']->value){
$_smarty_tpl->tpl_vars['cklist']->_loop = true;
?>
								 <a href="<?php echo $_smarty_tpl->tpl_vars['cklist']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['cklist']->value['stylename'];?>
"><?php echo $_smarty_tpl->tpl_vars['cklist']->value['name'];?>
</a>
							<?php } ?>
							<?php }?>
							</td>
						</tr>
					<?php } ?>
				  <?php }?>
			  	</table>
			</div>
			<?php }?>
		
			<div class="links">
				<div class="links_title">
					<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="66" height="30" align="center" valign="middle" class="links_border <?php echo $_smarty_tpl->tpl_vars['class1']->value;?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
">综合</a>
							</td>
							<td width="66" height="30" align="center" valign="middle" class="links_border <?php echo $_smarty_tpl->tpl_vars['class2']->value;?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=sumer&ordersort=desc">销量</a>
								&nbsp;<img src="templates/default/images/index_70.jpg" />
							</td>
							<td width="66" height="30" align="center" valign="middle" class="links_border <?php echo $_smarty_tpl->tpl_vars['class3']->value;?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=counter&ordersort=desc">评价</a>
								&nbsp;<img src="templates/default/images/index_70.jpg" />
							</td>
							<td width="66" height="30" align="center" valign="middle" class="links_border <?php echo $_smarty_tpl->tpl_vars['class4']->value;?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=id&ordersort=desc">最新</a>
								&nbsp;<img src="templates/default/images/index_70.jpg" />
							</td>
							<td width="66" height="30" align="center" valign="middle" class="links_border <?php echo $_smarty_tpl->tpl_vars['class5']->value;?>
"><div class="tl" style="margin-left:15px;">价格</div><div style="width:4px; margin-top:3px; margin-right:15px;" class='tr'><a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=price&ordersort=asc"><img src="templates/default/images/index_71.jpg" style="margin-bottom:2PX;"/></a><a href="<?php echo $_smarty_tpl->tpl_vars['orderurl']->value;?>
ordername=price&ordersort=desc"><img src="templates/default/images/index_72.jpg" /></a></div></td>
							
						</tr>
					</table>
				</div>
				<div class="links_list">
					<ul>
                     <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li>
						<span class="links_tp">
							<span class="tcl"></span>
							<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="184" height="147" /></a>
						</span>
						<span class="links_wz"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
</span>
						<strong class="color13 tl">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</strong>
						<br><span class="colorl2">已有<?php echo $_smarty_tpl->tpl_vars['list']->value['counter'];?>
条评价</span>
						<br><span class="colorl2">已售出<?php if ($_smarty_tpl->tpl_vars['list']->value['sumer']){?><?php echo $_smarty_tpl->tpl_vars['list']->value['sumer'];?>
<?php }else{ ?>0<?php }?>件</span>
						</li>
					 <?php } ?>   
					   <?php }else{ ?>
                      <li style=" width:100%; text-align:center; color:#F00">暂无商品</li>
                       <?php }?>
					</ul>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['info']->value){?><div class="linkl1"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> <?php }?>
			</div>
	  </div>
	</div>
	<!--  body  结束  -->
	<div style="clear:both"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>