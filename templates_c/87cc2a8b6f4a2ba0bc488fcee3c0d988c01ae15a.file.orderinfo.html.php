<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:14:31
         compiled from "F:\WWW\shopx\m\templates\web\orderinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:3222659f1a777c5cb06-86844739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87cc2a8b6f4a2ba0bc488fcee3c0d988c01ae15a' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\orderinfo.html',
      1 => 1450852514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222659f1a777c5cb06-86844739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'template_dir' => 0,
    'hidetotalprice' => 0,
    'addr_info' => 0,
    'cart_info' => 0,
    'sid' => 0,
    'TemPricing' => 0,
    'postmode_info' => 0,
    'cartids' => 0,
    'totalprice' => 0,
    'totalgoodsprice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a777d75f48_71446158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a777d75f48_71446158')) {function content_59f1a777d75f48_71446158($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../js/scrollto.js"></script>
<script type="text/javascript" src="../js/lcshopz.js"></script>
<script>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
	= "<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
";
<?php } ?>
</script>
<style>

.checkbox {
  height: 30px;
  width: 52px;
  position: absolute;
  top: 12px;
  left: 12px;
  z-index: 10000;
  -moz-border-radius: 35px;
  -webkit-border-radius: 35px;
  border-radius: 35px;
  -moz-box-shadow: inset 0px 9px 15px rgba(0, 0, 0, 0.53), inset 0 -8px 10px rgba(0, 0, 0, 0.14);
  -webkit-box-shadow: inset 0px 9px 15px rgba(0, 0, 0, 0.53), inset 0 -8px 10px rgba(0, 0, 0, 0.14);
  box-shadow: inset 0px 9px 15px rgba(0, 0, 0, 0.53), inset 0 -8px 10px rgba(0, 0, 0, 0.14);
  background-color: #f28a00;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FFF28A00', endColorstr='#FFD86517');
  background-image: -moz-linear-gradient(top, #f28a00 0%, #e65300 67%, #d86517 100%);
  background-image: -webkit-linear-gradient(top, #f28a00 0%, #e65300 67%, #d86517 100%);
  background-image: linear-gradient(to bottom, #f28a00 0%, #e65300 67%, #d86517 100%);
}
.checkbox:after {
  height: 30px;
  width: 26px;
  position: absolute;
  top: 0;
  left: 0;
  content: '';
  z-index: 9999;
  -moz-border-radius: 35px 0 0 35px;
  -webkit-border-radius: 35px;
  border-radius: 35px 0 0 35px;
  -moz-box-shadow: inset 0px 9px 15px rgba(0, 0, 0, 0.53), inset 0 -8px 10px rgba(0, 0, 0, 0.14);
  -webkit-box-shadow: inset 0px 9px 15px rgba(0, 0, 0, 0.53), inset 0 -8px 10px rgba(0, 0, 0, 0.14);
  box-shadow: inset 0px 9px 15px rgba(0, 0, 0, 0.53), inset 0 -8px 10px rgba(0, 0, 0, 0.14);
  background-color: #b1dd00;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FFB1DD00', endColorstr='#FF84AD00');
  background-image: -moz-linear-gradient(top, #b1dd00 0%, #7eaf00 67%, #84ad00 100%);
  background-image: -webkit-linear-gradient(top, #b1dd00 0%, #7eaf00 67%, #84ad00 100%);
  background-image: linear-gradient(to bottom, #b1dd00 0%, #7eaf00 67%, #84ad00 100%);
}

.control {
  height: 34px;
  width: 34px;
  outline: 0;
  position: absolute;
  top: 10px;
  left: 6px;
  z-index: 10001;
  -webkit-appearance: none;
  -moz-border-radius: 36.5px;
  -webkit-border-radius: 36.5px;
  border-radius: 36.5px;
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3), 0 5px 15px rgba(0, 0, 0, 0.55), inset 0 2px 0 #fafafa, inset 0 -2px 0 #ada39d;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3), 0 5px 15px rgba(0, 0, 0, 0.55), inset 0 2px 0 #fafafa, inset 0 -2px 0 #ada39d;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3), 0 5px 15px rgba(0, 0, 0, 0.55), inset 0 2px 0 #fafafa, inset 0 -2px 0 #ada39d;
  background-color: #efefef;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FFEFEFEF', endColorstr='#FFBCB9B8');
  background-image: -moz-linear-gradient(top, #efefef 32%, #bcb9b8 100%);
  background-image: -webkit-linear-gradient(top, #efefef 32%, #bcb9b8 100%);
  background-image: linear-gradient(to bottom, #efefef 32%, #bcb9b8 100%);
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.control:checked {
  left: 34px;
}


</style>
</head>

<body style="max-width:640px;margin:0 auto;background:#f7f7f7;">
<!--header start-->
<header class="m_pro_title" style="background:#fff;">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  确认订单</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end--> 

<!--index start-->
<form id="form2" method="post" action="orderpost.php" onsubmit="return checkorderpost_m()">
<section>

	<input id='intotal' name="totalprice" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hidetotalprice']->value;?>
" /><input id='inyunfei' name="yunfei" type="hidden" value="0" />
<?php if ($_smarty_tpl->tpl_vars['addr_info']->value){?>
  <div class="dd_shr" onClick="window.open('member.php?act=address','_self')" >
    <div class="dd_icon3"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
    <div>
      <div class="dd_icon2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon42.png"></div>
      <span class="dd_text6"><?php echo $_smarty_tpl->tpl_vars['addr_info']->value['rec_name'];?>
</span>
      <div class="dd_icon2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon43.png"></div>
      <span class="dd_text6"><?php echo $_smarty_tpl->tpl_vars['addr_info']->value['phone'];?>
</span>
      <div class="cl"></div>
    </div>
    	<input type="hidden" name="aid" id="aid" value="<?php echo $_smarty_tpl->tpl_vars['addr_info']->value['id'];?>
" />
        <input type="hidden"  id="phone" value="1" />
    <div style="padding:3% 0 0 0;">
      <div class="dd_icon2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon44.png"></div>
      <div class="dd_text7"><?php echo $_smarty_tpl->tpl_vars['addr_info']->value['road_address'];?>
  <?php echo $_smarty_tpl->tpl_vars['addr_info']->value['cur_address'];?>
</div>
      <div class="cl"></div>
    </div>
  </div>
  <?php }else{ ?>
   <div class="dd_shr" onClick="window.open('member.php?act=address','_self')" >
    <div class="dd_icon3"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
    	<input type="hidden" name="aid" id="aid" value="<?php echo $_smarty_tpl->tpl_vars['addr_info']->value['id'];?>
" />
         <input type="hidden"  id="phone" value="1" />
    <div style="padding:3% 0 0 0;">
      <div class="dd_icon2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon44.png"></div>
      <div class="dd_text7">收货人信息</div>
      <div class="cl"></div>
    </div>
  </div>
  <?php }?>
 <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?> 
  <div class="dd_top2">
    <div class="gwc_pic"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
"></a></div>
    <div class="dd_r"> <span class="gwc_text1"> <?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span><br>
      <span class="gwc_text2"><?php if ($_smarty_tpl->tpl_vars['list']->value['attrname']){?><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
<?php }?></span> </div>
    <div class="dd_text1"><span class="fl">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</span><span class="gwc_text4 fr">×<?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
 </span></div>
    	<input type="hidden" id='housenum' value="<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
">
    <div class="cl"></div>
  </div>
 <?php } ?> 
  <ul class="spxx_list">
    <li style="line-height:1" id="flag_click"><span class="dd_text3 fl">配送方式</span>
      <input id="sid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" />    
	  <input id="TemPricing" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TemPricing']->value;?>
" />
      <div class="spxx_icon1"  ><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <span class="dd_text2">展开</span>
      <div id="s_flag" style="margin-top:20px; display:none">
	  <?php if ($_smarty_tpl->tpl_vars['postmode_info']->value){?>
		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['postmode_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
		<span style="line-height:40px;padding:20px 0;">             
		　<input name="postmode" type="radio" id="postmode" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" onclick="Calculate()" style="width:40px;" />
			<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>

		</span><br>
		<?php } ?>
	  <?php }?>
	  </div>
	  <div class="cl"></div>
     	<script>
					$('#flag_click').click(function() {
						var s_display=$("#s_flag").css("display");
						if(s_display=='none')
						{
							$("#s_flag").css("display",'block');
							$('.dd_text2').html('收起');
						}else{
							$("#s_flag").css("display",'none');
							$('.dd_text2').html('展开');
						}
					});
				</script>
				<input name="InvoiceType" type="radio" value="1" checked="checked" style="display:none;"/>
				<input name="buyremark" type="radio" value="2"  checked="checked" style="display:none;"/>
				<input name="Invoice" type="radio" value="1" checked="checked" style="display:none;"/>
				<input id="cartids" name="cartids" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cartids']->value;?>
" />  
     </li>
     
    <li>
      <textarea name="message" class="dd_bd" id="lc_content" placeholder="给商家留言（选填、45字以内）" maxlength="45"  ></textarea>
    </li>
    <li> <span class="dd_text4">合计：<span class="dd_text5">¥<?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
（含运费￥<span id='yunfei'>0.00</span>元）</span></span>
    <input type="hidden" id="zongmenye" value="<?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
">
    <input type="hidden" id="dezgmenye" value="<?php echo $_smarty_tpl->tpl_vars['hidetotalprice']->value;?>
">
      <div class="cl"></div>
    </li>
  </ul>
  <div class="dd_bot" > <span class="dd_text3 fl">使用SHOPX购物券</span>
    <div class="dd_icon1" style="position:relative; right:40px; bottom:15px"><input type="checkbox" id="control" class="control" onChange="yhq_click()"  >
<label for="control" class="checkbox"></label></div>
    <div id="point" style="padding:30px 5px;font-size:12px; line-height:25px; display:none" >
				提示:　购物券每次只能使用一张，且订单金额达到一定金额才能使用（不包含运费）<br>
                请输入您手中的购物券券码 : <br>
                <input type="hidden" id="totmoney" value="<?php echo $_smarty_tpl->tpl_vars['totalgoodsprice']->value;?>
"  /><!--不含运费的总额-->
                <input type="hidden" name="pointnum" id="pointnum" value=""  /><!--购物券编号-->
                <input type="text" name="point_pwd" id="point_pwd" style="width:79%; height:40px;"> <a style=" color:#fff;background:#d00;width:50px; padding:14px 16px; cursor:pointer" onclick="shopPoint_add()" id="anniu">添加</a> 
                 <span class="p_t" id="point_show">　</span>
				</div>
				<div class="cl"></div>
  </div>
  <script>
    function yhq_click(){
  		var s_display=$("#point").css("display");
		var zt = $('#control').attr('checked');
		var zongmenye = $('#zongmenye').val();
		var dezgmenye = $('#dezgmenye').val();
		if(s_display=='none')
		{
	    	$("#point").css("display",'block');
		}else{
			if(zt != 'checked'){
		
			 $('#point_pwd').val('');
			 
		    }
			$("#point").css("display",'none');
			$('#total').html(zongmenye);
			$('#youhuiquan').html('');
			$('#anniu').show();
			$('#intotal').val(dezgmenye);
		}
	}
  </script>
</section>

<!--index end--> 

<!--footer start-->
<div class="gwc_bot">
  <div class="gwc_btn"><?php if ($_smarty_tpl->tpl_vars['totalprice']->value>0){?><a href="javascript:void(0);" onclick="$('#form2').submit();">提交订单</a><?php }else{ ?>无金额<?php }?></div>
  
  <span class="gwc_text6" style="float:right;padding:0 5% 0 0;">¥<span  id='total'><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</span>&nbsp;&nbsp;<span id="youhuiquan"> </span></span><span class="gwc_text7" style="float:right;">合计: </span>
  <div class="cl"></div>
</div>
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/common.js"></script>
<div id="dialog" class="layer" style="display:none">
	<div class="layer-bg" style="background: rgba(0, 0, 0, 0);"></div>
	<div id="dialogInner" class="layer-main" style="left: 0%; top: 45%; width: auto; height: auto;">	
		<div class="tip-loadding">
			<span class="txt" id="dialog_ext"></span>
		</div>
	</div>
</div>
<!--footer end-->
</body>
</html>
<?php }} ?>