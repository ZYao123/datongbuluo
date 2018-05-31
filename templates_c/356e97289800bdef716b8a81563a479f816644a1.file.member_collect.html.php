<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 14:53:24
         compiled from "F:\WWW\20180426datong\templates\default\member_collect.html" */ ?>
<?php /*%%SmartyHeaderCode:29755ae2c8e49a1f44-65659385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356e97289800bdef716b8a81563a479f816644a1' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\member_collect.html',
      1 => 1459838537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29755ae2c8e49a1f44-65659385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'membercoll' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae2c8e4a55a78_19253185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2c8e4a55a78_19253185')) {function content_5ae2c8e4a55a78_19253185($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
-会员中心</title>
<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body>
<div class="help_bj">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <!--  body  开始  -->
	<div class="bodys">
		<div class="help"><span class="help_top">首页 >  会员中心 > <span class="help_color">我的收藏</span></span>
			<div class="help_bottom">
				<?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="dd">
						<div class="dd_top"><span class="dd_t">我的收藏</span></div>
						<div class="help_list">
						<?php if ($_smarty_tpl->tpl_vars['membercoll']->value){?>
							<table width="1065" border="0" cellspacing="0" cellpadding="0">							
								<tr>
									<td width="35%" height="28" align="center" valign="middle" class="help_back">商品标题</td>
									<td width="15%" align="center" valign="middle" class="help_back">类别</td>
									<td width="10%" align="center" valign="middle" class="help_back">价格</td>
									<td width="20%" align="center" valign="middle" class="help_back">缩略图</td>
									<td width="10%" align="center" valign="middle" class="help_back">操作</td>
								</tr>																					
								 <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['membercoll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
							 
							   
								<tr>
									<td height="81" align="center" valign="middle" class="help_bor ys1">
										<span class="ys"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </span></td>
									
									<td align="center" valign="middle" class="help_bor"><span class="ys3"><?php echo $_smarty_tpl->tpl_vars['list']->value['class_name'];?>
</span>
									</td>
									<td align="center" valign="middle" class="help_bor">
									<span class="ys3">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</span>
									</td>
									<td align="center" valign="middle" class="help_bor">
									<span class="ys3">
									<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="30%"/>
									</span>
									</td>
									<td align="center" valign="middle" class="help_bor ys4">
									<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
">查看</a> |
									<a  href="member.php?act=collect&gid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&del" onclick="return confirm('确定删除收藏的商品？')">删除</a>
									
								   </td>
								</tr>
								<?php } ?>
								<tr>
									<td height="60" colspan="5" align="right" valign="middle" class="help_links"> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</td>
								</tr>
							</table>
							
							<?php }else{ ?>
								<table width="1065" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td height="43" align="center" valign="middle">&nbsp;
										暂无订单信息！
									</td>
								</tr>
								</table>
							<?php }?>
							
						</div>
						<div class="help_tp"><img src="templates/default/images/tp28.jpg" width="1064" 
				  height="60" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  body  结束  -->
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>