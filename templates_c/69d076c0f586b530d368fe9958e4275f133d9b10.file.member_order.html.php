<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:15:33
         compiled from "F:\WWW\shopx\m\templates\web\member_order.html" */ ?>
<?php /*%%SmartyHeaderCode:958759f1a7b5244bd7-05330608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d076c0f586b530d368fe9958e4275f133d9b10' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\member_order.html',
      1 => 1467357258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '958759f1a7b5244bd7-05330608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'memberorder' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a7b535e010_97670079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a7b535e010_97670079')) {function content_59f1a7b535e010_97670079($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../js/lcshopz.js"></script>
</head>

<body style="max-width:640px;margin:0 auto;background:#f3f4f6;">

<!--头部 开始-->
<header class="m_pro_title">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  全部订单</header>
<!--头部 结束--> 
<!--内容 开始-->
<div class="qbdd">
  <ul>
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memberorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	<li id="tr<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
	  	<div class="qbdd_title" >
			<span class="fl" style="line-height:1.5;">订单号：<a href="member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" style="color:#36c"><?php echo $_smarty_tpl->tpl_vars['list']->value['orderlistnum'];?>
</a></span>
			<!--<div class="qbdd_icon">
				<a href="javascript:void(0);" onclick="DelShopOrder(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
)"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon33.jpg"></a>
			</div>-->
			<div class="cl"></div>
	  	</div>
	  <div class="qbdd_nr">
		
		<div class="qbdd_list" style="cursor:pointer;" onClick="window.open('member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','_self')">
		
		  <div class="qbdd_r">收货人:【<?php echo $_smarty_tpl->tpl_vars['list']->value['rec_name'];?>
】</div>
		  <div class="cl"></div>
		</div>
		<div class="qbdd_bot"> 
			<span class="fl">实付款: ￥<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['list']->value['orderamount']+$_smarty_tpl->tpl_vars['list']->value['cost']));?>
</span>
			<div class="qbdd_more">
              <?php if ($_smarty_tpl->tpl_vars['list']->value['paymode']==155){?> 
                 货到付款
              <?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']==0){?>
				<a href='pay.php?olnum=<?php echo $_smarty_tpl->tpl_vars['list']->value['orderlistnum'];?>
'>付款</a>
				<?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==1){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>待发货</a>
				<?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==2){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>待收货</a>
				<?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==3){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>已收货</a>
				<?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==4){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>申请退货中</a>
				 <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==5){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>申请退款中</a>
				 <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==6){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>已退款</a>
				 <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==7){?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>已退货</a>
				<?php }else{ ?>
				<a href='member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>无效订单</a>
				<?php }?>
              <?php }?>  
			</div>
		  	<div class="cl"></div>
		</div>
	  </div>
	</li>
	<?php } ?>
  </ul>
  <ul class="s_page">
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    <div class="cl"></div>
  </ul>
</div>

<!--内容 结束--> 
<!--底部 开始--> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--底部 结束-->
</body>
</html><?php }} ?>