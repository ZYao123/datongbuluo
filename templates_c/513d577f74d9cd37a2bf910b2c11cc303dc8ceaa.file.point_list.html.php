<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:58:54
         compiled from "F:\WWW\shopx\templates\default\point_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2561759f1b1de0e8289-59894323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '513d577f74d9cd37a2bf910b2c11cc303dc8ceaa' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\point_list.html',
      1 => 1448327156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2561759f1b1de0e8289-59894323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1b1de126a94_25491701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b1de126a94_25491701')) {function content_59f1b1de126a94_25491701($_smarty_tpl) {?>
<style>
.coupons-list .coupon .left, 
.coupons-list .coupon .right span b, 
.coupons-list{ position:relative; margin-left:-1px; margin-bottom:-2px; overflow:hidden; zoom:1}
.coupons-list a{color:#1163A3}
.coupons-list em{ font-style:normal}
.coupons-list li{ float:left; display:inline; margin-left:1px; width:300px; border-bottom:dashed 2px #D9D9D9; cursor:default;overflow:hidden;}
.coupons-list .coupon-wrapper{ float:left; width:300px; height:240px; position:relative;}
.coupons-list .coupon-wrapper a:hover{text-decoration: none;}
.coupons-list li .scissors{ position:absolute; display:none; left:195px; top:169px; width:20px; height:20px; overflow:hidden; background-position:-100px -80px}
.coupons-list h2{ padding-top:15px; padding-left:0px; padding-bottom:0; line-height:20px; font-size:14px; height:20px; overflow:hidden}
.coupons-list h2 a{float:left;}
i.hot,i.new{width:21px;height:11px;overflow: hidden;text-indent: -9999px;float:left;margin-left:2px;margin-top:5px;}
#main_l_l .coupons-list h2{ padding-bottom:0}
.coupons-list .coupon{ display:block; margin:15px auto; width:314px; height:124px;  text-decoration:none; background-color:white; cursor:pointer}
.coupons-list .coupon:hover{ border-color:#f8ded5}
.coupons-list .coupon:hover .right {background:#fbf2ef}






.coupons-list .coupon-wrapper .info{ margin-left:5px; color:#666}
.coupons-list .coupon-wrapper .info span{margin-right:3px;}
.coupons-list .coupon-wrapper .info i{color:#07f;font-style: normal;}

.coupons-list li:hover .scissors, .coupons-list li.hover .scissors{ display:block}
.coupons-list li .scissors{ position:absolute; display:none; left:184px; top:169px; width:20px; height:20px; overflow:hidden; background-position:-100px -80px}
</style>

<div class="main_l_c_c">
<ul id="J_CouponsList" class="coupons-list">
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	<li>
		<div class="coupon-wrapper">
			<div class="scissors">
			</div>
			<h2>
				<a target="_blank" href="<?php if ($_smarty_tpl->tpl_vars['list']->value['linkurl']){?><?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
<?php }else{ ?>point_info.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
			</h2>
			<div class="coupon">
			<a target="_blank" href="<?php if ($_smarty_tpl->tpl_vars['list']->value['linkurl']){?><?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
<?php }else{ ?>point_info.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="286" height="124" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
				</a>
			</div>
			
			<div class="info">
				
				<span>还剩 <i>
					<?php echo $_smarty_tpl->tpl_vars['list']->value['day'];?>
</i> 天 </span>
				
				<span>已领数量：<i><?php echo $_smarty_tpl->tpl_vars['list']->value['tot'];?>
</i></span> 
			</div>
			
		</div>
	</li>
	<?php } ?>

	</ul>
</div><?php }} ?>