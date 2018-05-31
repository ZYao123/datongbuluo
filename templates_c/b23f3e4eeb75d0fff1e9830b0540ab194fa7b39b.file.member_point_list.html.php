<?php /* Smarty version Smarty-3.1.14, created on 2017-12-07 17:12:01
         compiled from "F:\WWW\shopx\templates\default\member_point_list.html" */ ?>
<?php /*%%SmartyHeaderCode:130215a2905e1f30873-81864447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23f3e4eeb75d0fff1e9830b0540ab194fa7b39b' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\member_point_list.html',
      1 => 1448327152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130215a2905e1f30873-81864447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'template_dir' => 0,
    'membercoll' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2905e20e07a4_73798282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2905e20e07a4_73798282')) {function content_5a2905e20e07a4_73798282($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
style/suggest.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="js/suggest.js"></script>
<script type="text/javascript" src="js/transport.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
</head>
<body>
<div class="help_bj">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <!--  body  开始  -->
	<div class="bodys">
		<div class="help"><span class="help_top">首页 >  会员中心 > <span class="help_color">我的优惠券</span></span>
			<div class="help_bottom">
				<?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="dd">
					<div class="help_right"><span class="dd_wz">我的优惠券</span>
						<div class="dd_top"><span class="dd_t">全部购物券</span><a href="point.php" target="_blank">查看商家购物券</a></div>
							 <div class="help_list">
						<?php if ($_smarty_tpl->tpl_vars['membercoll']->value){?>
							<table width="1065" border="0" cellspacing="0" cellpadding="0">							
								<tr>
									<td  height="28" align="center" valign="middle" class="help_back">购物券标题</td>
									<td width="10%" align="center" valign="middle" class="help_back">券码</td>
									<td width="10%" align="center" valign="middle" class="help_back">面值</td>
									<td width="10%" align="center" valign="middle" class="help_back">条件</td>
									<td width="10%" align="center" valign="middle" class="help_back">有效期</td>
									<td width="10%" align="center" valign="middle" class="help_back">状态</td>
									<td width="5%" align="center" valign="middle" class="help_back">操作</td>
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
									<td align="center" valign="middle" class="help_bor">
									<?php echo $_smarty_tpl->tpl_vars['list']->value['password'];?>

									</td>
									<td align="center" valign="middle" class="help_bor"><span class="ys3">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['money'];?>
</span>
									</td>
									<td align="center" valign="middle" class="help_bor">
									<span class="ys3">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['meet_money'];?>
</span>
									</td>
									<td align="center" valign="middle" class="help_bor">
									<span class="ys3"><?php echo $_smarty_tpl->tpl_vars['list']->value['day'];?>
天</span>
									</td>
									<td align="center" valign="middle" class="help_bor">
									<span class="ys3"><?php echo $_smarty_tpl->tpl_vars['list']->value['o_id'];?>
</span>
									</td>
									<td align="center" valign="middle" class="help_bor ys4">
									<a href="point_info.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">查看</a>
									<br />
									   <!-- <a href="javascript:;" onclick="AddShopCart('shopcar_popup')"><img src="templates/default/images/index_35.jpg" alt="还要买"/></a> --></td>
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
										暂无信息！
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