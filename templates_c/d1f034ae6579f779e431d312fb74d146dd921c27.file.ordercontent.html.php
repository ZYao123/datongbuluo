<?php /* Smarty version Smarty-3.1.14, created on 2017-11-27 17:29:23
         compiled from "F:\WWW\shopx\m\templates\web\ordercontent.html" */ ?>
<?php /*%%SmartyHeaderCode:137545a1bdaf3a192d6-48518382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1f034ae6579f779e431d312fb74d146dd921c27' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\ordercontent.html',
      1 => 1467360977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137545a1bdaf3a192d6-48518382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'expressno' => 0,
    'order' => 0,
    'goodslist' => 0,
    'list' => 0,
    'postmode_info' => 0,
    'type' => 0,
    'expressid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a1bdaf3bedf42_00979063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bdaf3bedf42_00979063')) {function content_5a1bdaf3bedf42_00979063($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
style/webstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/lcshopz.js"></script>
<?php if ($_smarty_tpl->tpl_vars['expressno']->value!=''){?>
	<script language="javascript">
	
	$(document).ready(function()
	{

			$("#retData").html('loading...');
 
			var expressid = $("#expressid").val();
            var expressno = $("#expressno").val();
			var type = $("#type").val();
			$.get("../data/kuaidi/get.php",{com:expressid,nu:expressno,type:type,rn:Math.floor(1+Math.random()*(99999-1))},
				function(data)
				{					
					$("#genzong").html(data);
				}
			);
 
			return false;

	});
	
	</script>

<?php }?>
</head>
<style>
#genzong table{
	width:100% !important;	
}
</style>
<body style="max-width:640px;margin:0 auto;background:#f3f4f6;">

<!--头部 开始-->
<div class="yjfk_title">
	<?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==0){?>
	付款
	<?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==1){?>
	待发货
	<?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==2){?>
	待收货，&nbsp;<a href='member.php?act=yes_order&oid=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
' onclick="return confirm('确认要收货吗?')">确认收货</a>
	<?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==3){?>
	已收货
	<?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==4){?>
	申请退货中
	 <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==5){?>
	申请退款中
	 <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==6){?>
	已退款
	 <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==7){?>
	已退货
	<?php }else{ ?>
	无效订单
	<?php }?>
  <div class="yjfk_icon"><a href="javascript:void(0)" onclick="history.back();"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon31.png"></a></div>
</div>

<!--头部 结束--> 
<!--内容 开始-->
<div class="s_dfh">
  <ul>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
	<li>
	  <div class="dfh_list">
		<div class="dfh_img"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['gpicurl'];?>
" width="100%" /></a></div>
		<div class="bus_fon">
			<a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['gtitle'];?>
</a>
			<br />
			<?php if ($_smarty_tpl->tpl_vars['list']->value['attrname']){?>
			<?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>

			<br />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['list']->value['consume_points']){?>(积分兑换所得，消耗积分:<?php echo $_smarty_tpl->tpl_vars['list']->value['consume_points']*$_smarty_tpl->tpl_vars['list']->value['num'];?>
)
			<?php }else{ ?>
			单价：￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
元
			<br />
			  <span class="dfh_gj">共<?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
件商品 </span>
			  <br>
			  <span class="dfh_gj">总价：￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price']*$_smarty_tpl->tpl_vars['list']->value['num'];?>
元 </span>
			  <?php if ($_smarty_tpl->tpl_vars['list']->value['integral']){?>
			  <br>
			  <span class="dfh_gj">赠送<?php echo $_smarty_tpl->tpl_vars['list']->value['num']*$_smarty_tpl->tpl_vars['list']->value['integral'];?>
积分 </span>
			  <?php }?>
			<?php }?>
		</div>
		<div class="payment"><?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==3){?><a href="member.php?act=evaluation&gid=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
">评价</a><?php }?></div>
		<div class="cl"></div>
	  </div>
	</li>
<?php } ?>
  </ul>
</div>
<div class="s_dfh_gray"></div>
<div class="fon_top">收货地址：</div>
<div class="fon_part"> 
	<span>地址</span><?php echo $_smarty_tpl->tpl_vars['order']->value['cur_address'];?>
<br />
	<span class="fon_part_left"> 邮编 </span><?php echo $_smarty_tpl->tpl_vars['order']->value['zipcode'];?>
<br />
	<span class="fon_part_left">姓名</span><?php echo $_smarty_tpl->tpl_vars['order']->value['rec_name'];?>
<br />
	<span class="fon_part_left">电话</span><?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
<br />
	<span class="fon_part_left">配送方式</span><?php echo $_smarty_tpl->tpl_vars['postmode_info']->value;?>

</div>
<div class="s_dfh_gray"></div>
<div class="fon_top">订单信息：</div>
<div class="fon_part"> 
	<span class="fon_part_left">订单号</span><?php echo $_smarty_tpl->tpl_vars['order']->value['orderlistnum'];?>
<br />
	<span class="fon_part_left">订单日期</span><?php echo getdateTime($_smarty_tpl->tpl_vars['order']->value['posttime']);?>
<br />
	<span class="fon_part_left">商品总额</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['orderamount'];?>
<br />
	<span class="fon_part_left">运费</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['cost'];?>
<br />
	<span class="fon_part_left">应付金额</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['orderamount']+$_smarty_tpl->tpl_vars['order']->value['cost'];?>

</div>
<div class="s_dfh_gray"></div>
<div class="fon_top">物流信息：</div>
<div class="fon_part"> 
	<span class="fon_part_left">您的物流</span><?php echo $_smarty_tpl->tpl_vars['postmode_info']->value;?>
<br />
	<span class="fon_part_left">订单编号</span><?php echo $_smarty_tpl->tpl_vars['expressno']->value;?>
<br />
	<span class="fon_part_left">查询数据由</span>快递100提供  如没有查询到物流信息可以登录<a href="http://www.kuaidi100.com/" target="_blank" style="color:#F00">http://www.kuaidi100.com/</a>进行查询<br />
	<div id="genzong" style="display:block">
                <?php if ($_smarty_tpl->tpl_vars['expressno']->value==''){?>
                还没有发货
                <?php }else{ ?>
                信息加载中...
            	  <input name="type" type="hidden" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/> 
                <input name="expressid" type="hidden" id="expressid" value="<?php echo $_smarty_tpl->tpl_vars['expressid']->value;?>
"/> 
                <input name="expressno" type="hidden" id="expressno" value="<?php echo $_smarty_tpl->tpl_vars['expressno']->value;?>
"/>
                <?php }?>
              </div>
</div>

           
          

<!--内容 结束--> 
<!--底部 开始--> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--底部 结束-->
</body>
</html><?php }} ?>