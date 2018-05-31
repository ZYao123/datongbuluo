<?php /* Smarty version Smarty-3.1.14, created on 2018-05-12 10:23:38
         compiled from "C:\wamp64\www\templates\default\item_show.html" */ ?>
<?php /*%%SmartyHeaderCode:302575af6502a7b3ee8-79826350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20b5625a4bd8cfda318d160604e89aebc4d370f' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\item_show.html',
      1 => 1524899054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302575af6502a7b3ee8-79826350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'info' => 0,
    'pic' => 0,
    'from' => 0,
    'ks' => 0,
    'v' => 0,
    'comments' => 0,
    'list1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af6502aa6a999_20654165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af6502aa6a999_20654165')) {function content_5af6502aa6a999_20654165($_smarty_tpl) {?><!doctype html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="js/loadimage.js"></script>
<script type="text/javascript" src="js/loadimage.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
<script type="text/javascript" src="js/goods.js"></script>
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
<script type="text/javascript">
$(function(){
    $(".jqzoom img").LoadImage({width:318,height:318});
});
</script>
<style>
.shopcart_popup1{
position:absolute;background:url(templates/default/images/tanchuang2.png) 
no-repeat; width:83px; height:38px; overflow:hidden; line-height:45px; color:#F00; 
font-weight:bold;margin-left:10px; text-align:center; top:37px; left:70px; 
}
/*购物车*/
#shopcar_popup{width:auto; display:block; float:left;height:120px;border:3px #e43a3d solid;display:none;background:#fff url(templates/default/images/tuc_03.jpg) 10px center no-repeat ; line-height:30px; font-size:14px; font-family:"微软雅黑"; margin-left:75px; padding-left:63px; padding-bottom:10px; padding-right:10px; padding-top:10px; position:absolute}

#shopcar_popup span{ cursor:pointer; color:#e43a3d; font-weight:bold}
.attrlink td{ min-height:38px;line-height:38px}
</style>
</head>

<body>
<!--header start-->
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end-->

<!--main start-->

<div class="main">
	<div class="path"><i class="fa fa-map-marker red"></i> <a href="index.php">首页</a> > 商品详情 </div>
	<div class="clearfix pro_xx">
		<div class="pro_xx_l fl">
			<div class="bigpic">
				  <div class="v_show">
						<div class="v_cont">
						  	<!--<ul>
						  	 <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['picarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value){
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>		  			
							    <li><img src="<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" width="318" height="318"></li>
							    <?php } ?>
														
							</ul>-->
<SCRIPT src="js/jquery-1.2.6.pack.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/163css.base.js" type=text/javascript></SCRIPT>
							<div class=jqzoom id=spec-n1>
    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
" jqimg="<?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
" width=318 height="318">
	</div>
						</div>
				  </div>       
			</div>
     	 	<div class="pic_bot" id="spec-list">
		        <ul class="circle clearfix list-h">	
		        <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['picarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value){
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>		  
		            <li><a href="javascript:void(0)"><img src="<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" width="76" height="76" style="cursor:pointer" onmouseover="chengimg(this.src)"></a></li>
		             <?php } ?>

				</ul>
      		</div>
		</div>
<SCRIPT type=text/javascript>
$(function(){			
   $(".jqzoom").jqueryzoom({
		xzoom:400,
		yzoom:400,
		offset:10,
		position:"right",
		preload:1,
		lens:1
	});
	$("#spec-list").jdMarquee({
		deriction:"left",
		width:289,
		height:56,
		step:2,
		speed:4,
		delay:10,
		control:true,
		_front:"#spec-right",
		_back:"#spec-left"
	});

})
function chengimg(src)
{
	$("#spec-n1 img").attr("src",src);
	$("#spec-n1 img").attr("jqimg",src);
	//$("#spec-n1 img").css("border","1px solid #ff6600");
}
</SCRIPT>
<SCRIPT src="js/163css.lib.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/163css.js" type=text/javascript></SCRIPT>

		<div class="pro_xx_r fr">
			<h2><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h2>
			<h4><?php echo $_smarty_tpl->tpl_vars['info']->value['retitle'];?>
</h4>
			<p>价格：<span class="red" id="price">￥<?php echo $_smarty_tpl->tpl_vars['info']->value['salesprice'];?>
</span></p>
			<div class="pro_xx_con">
				<ul>
					<li class="clearfix">
					<!--	<h3 class="fl">送至：</h3>
						<p class="fl"><select name="" class="select">
							<option value="">哈尔滨市道里区派出所</option>
						</select>预计18：56到达！</p>-->
					</li>
					<li class="clearfix">
					<input type="hidden" name="show_housenum" id="show_housenum" 
                      value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tot_housenum'];?>
">
						<h3 class="fl">数量：</h3>
    					<p class="pro_num">
						
    					<a href="javascript:;jian()">-</a>
    					<input type="text" id="goods_num" value="1" size="5" onKeyUp="value=value.replace(/[^\d]/g,'')" onblur="num_blur()" name="goods_num" type="text" value="1"><a href="javascript:;jia()">+</a>

    					</p>
							<input name="goods_id" type="hidden" id="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
                           <input name="goods_price" type="hidden" id="goods_price"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['hideprice'];?>
" />
							<input type="hidden" name="goods_from" id="goods_from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
">
							<span id='show_kc' class="shopcart_popup1" style="display:none"></span>
					</li>


   <li id="attr">
                    <form name="form">
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['norm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                    <table>
                        <tr>
                        	<td><span class="det_top_wz"><?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
：</span></td>
                            <td>
                                <span style="clear:both">
                                    <ul id="goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
">
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['selected']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            	<li datavalue="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['pic']!=''){?><a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" height="30" width="30" /><?php echo $_smarty_tpl->tpl_vars['v']->value['attrname'];?>
</a><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['v']->value['pic']==''&&$_smarty_tpl->tpl_vars['v']->value['color']==''){?><a href="javascript:;" ><?php echo $_smarty_tpl->tpl_vars['v']->value['attrname'];?>
</a><?php }else{ ?><a href="javascript:;" style=" background:<?php if ($_smarty_tpl->tpl_vars['v']->value['color']){?><?php echo $_smarty_tpl->tpl_vars['v']->value['color'];?>
<?php }?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><?php }?><?php }?></li>
                                        <?php } ?> 
                                    </ul>
                                    
                                </span><input id="goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
" size="15" name="goods_norm" type="hidden" />
                          </td>
                      </tr>
                     </table>
                     <script>
							var goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
 = new Select("goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
",{
								Radio :true	,									
								OnClick:function(selected){
									document.form.goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
.value = selected.join(",")
									getprice(<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
);
								}
								
							});	
                     </script>
                     <?php } ?> 
                     </form>
                    </li>
                    <li>
                        <span id="goodsnum">&nbsp;</span>
                    </li>
               
                   <!-- <li >
                        <span class="gwc" id="gwc">
                        <a href="javascript:;" onclick="AddShopCart('shopcar_popup')"><img src="templates/default/images/index_44.jpg" /></a>
                        </span>
                        <span id="shopcar_popup" >弹出层</span> 
                    </li>-->
				</ul>
			</div>
			<div class="pro_xx_btn gwc"  id="gwc"><a href="javascript:;" onclick="AddShopCart('shopcar_popup')">加入购物车</a>
<span id="shopcar_popup" >弹出层</span> 
			</div>
		</div>
	</div>
	<div class="clearfix mar30">
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
			<ul class="pro_xx_head clearfix">
				<li class="active">产品详情</li>
				<!--<li>累计评价</li>-->
			</ul>
			<div class="pro_xx_txt bgw"> <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</div>
			<div class="pro_xx_txt bgw" style="display: none;">  
			 <?php if ($_smarty_tpl->tpl_vars['comments']->value){?>
                        <?php  $_smarty_tpl->tpl_vars['list1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list1']->key => $_smarty_tpl->tpl_vars['list1']->value){
$_smarty_tpl->tpl_vars['list1']->_loop = true;
?>
                            <li>
                                <div class="sppj_left"><span class="tl"><img src="<?php echo $_smarty_tpl->tpl_vars['list1']->value['uid']['picurl'];?>
" width="50" height="51" /></span><span class="sppj_left_wz"><?php echo $_smarty_tpl->tpl_vars['list1']->value['uid']['username'];?>
</span></div>
                                <div class="sppj_right"><span class="sppj_right_top"><strong class="sppj_color"><?php echo $_smarty_tpl->tpl_vars['list1']->value['title'];?>
</strong><?php echo getdateTime($_smarty_tpl->tpl_vars['list1']->value['posttime']);?>
</span>
                                    <div class="sppj_wz"><?php echo $_smarty_tpl->tpl_vars['list1']->value['content'];?>
</div>
                                    <?php if ($_smarty_tpl->tpl_vars['list1']->value['reply']){?>
                                    <div class="sppj_wz" style="border-top: 1px dotted #d9d9d9;"><?php echo $_smarty_tpl->tpl_vars['list1']->value['reply'];?>
</div>
                                    <?php }?>
                                   
                                </div>
                            </li>
                            <?php } ?>
                            <?php }else{ ?>
                            <li>
                               暂无评论
                            </li>
                            <?php }?></div>
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