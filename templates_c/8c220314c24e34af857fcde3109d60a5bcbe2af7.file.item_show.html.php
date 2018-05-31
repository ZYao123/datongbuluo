<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:16:12
         compiled from "F:\WWW\shopx\templates\default\item_show.html" */ ?>
<?php /*%%SmartyHeaderCode:1131259f1a7dce5f791-82404262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c220314c24e34af857fcde3109d60a5bcbe2af7' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\item_show.html',
      1 => 1462851157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131259f1a7dce5f791-82404262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'GetPosStr' => 0,
    'info' => 0,
    'pic' => 0,
    'from' => 0,
    'ks' => 0,
    'v' => 0,
    'template_dir' => 0,
    'Rank' => 0,
    'counts' => 0,
    'month_sale' => 0,
    'final_info' => 0,
    'left_ads' => 0,
    'left_ads_list' => 0,
    'flag_info' => 0,
    'comments' => 0,
    'list1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a7dd069467_09205620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a7dd069467_09205620')) {function content_59f1a7dd069467_09205620($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<link href="templates/default/style/suggest.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
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
<style>
.shopcart_popup1{
position:absolute;background:url(templates/default/images/tanchuang2.png) 
no-repeat; width:83px; height:38px; overflow:hidden; line-height:45px; color:#F00; 
font-weight:bold;margin-left:10px; text-align:center; top:37px; left:70px; 
}

</style>
<script type="text/javascript">
$(function(){
    $(".jqzoom img").LoadImage({width:309,height:305});
});
</script>
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
    <div class="body">
        <div class="helps"><img src="templates/default/images/index_38_.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['GetPosStr']->value;?>
></div>
        <div class="det_top">
            <div class="det_top_left">
            <div class="det_top_tp">
<SCRIPT src="js/jquery-1.2.6.pack.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/163css.base.js" type=text/javascript></SCRIPT>
	<div class=jqzoom id=spec-n1>
    <IMG src="<?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
" jqimg="<?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
" width=309 height="305">
	</div>
	<div id=spec-n5>
		<div class=control id=spec-left>
			<img src="templates/default/images/left.gif" />
		</div>
		<div id=spec-list style='height:56px; overflow:hidden'>
			<ul class=list-h>
            	<?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['picarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value){
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>
				<li><img src="<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" style="cursor:pointer" onmouseover="chengimg(this.src)" /></li>
                <?php } ?>
			</ul>
		</div>
		<div class=control id=spec-right>
			<img src="templates/default/images/right.gif" />
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
                  
                </div>
                <div class="det_top_link">
                    <ul>
                        <li>
                        <div class="bshare-custom">
                        <a class="bshare-more bshare-more-icon more-style-addthis">
                       分享
                        </a>
                        </div>
                        </li>
                        <li>
                        <img src="templates/default/images/index_64.jpg" />
                        <a href="member.php?act=add_collect&gid=<?php echo $_GET['id'];?>
&uri=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" >&nbsp;收藏商品&nbsp;</a>
                        <span class="det_color"><?php echo collect_num($_smarty_tpl->tpl_vars['info']->value['id']);?>

                        </span>
                        </li>
                    </ul>
                </div>
                <SCRIPT type=text/javascript charset=utf-8
    src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></SCRIPT> 
        <SCRIPT type=text/javascript charset=utf-8
    src="http://static.bshare.cn/b/bshareC0.js"></SCRIPT> 
            </div>
            <div class="det_top_middle">
                <ul>
                    <li><span class="size1"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</span></li>
                    <li class="size2">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['retitle'];?>
</li>
                    <li><span class="det_top_wz">价格：</span><span class="size3" id="price">￥
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['salesprice'];?>

                    </span>
                      <input type="hidden" name="show_housenum" id="show_housenum" 
                      value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tot_housenum'];?>
">
                    </li>
                   <?php if ($_smarty_tpl->tpl_vars['info']->value['integral']){?> <li><span class="det_top_wz">赠送积分：</span><span class="color10"><?php echo $_smarty_tpl->tpl_vars['info']->value['integral'];?>
分/件</span></li><?php }?>
                    <li style="position:relative"><span class="det_top_wz">数量：</span><A href="javascript:;jian()" class="tl"><img src="templates/default/images/index_42.jpg" /></A>
                           <input name="goods_num" class="text4" type="text" id="goods_num" value="1" size="5" onKeyUp="value=value.replace(/[^\d]/g,'')" onblur="num_blur()"/>
                           <input name="goods_id" type="hidden" id="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
                           <input name="goods_price" type="hidden" id="goods_price"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['hideprice'];?>
" />
							<input type="hidden" name="goods_from" id="goods_from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
">
                        <A href="javascript:;jia()"><img src="templates/default/images/index_43.jpg" /></A> 
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
                     <li style="padding-left:100px;">
                        <span  id="NowBuy">
                          <a href="javascript:;" onclick="NowBuy('shopcar_popup')">
                          <input type="image" name="imageField3" id="imageField3" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/btn_buy.jpg" /></td>
                          </a>
                        </span>
                    </li>
                    <li >
                        <span class="gwc" id="gwc">
                        <a href="javascript:;" onclick="AddShopCart('shopcar_popup')"><img src="templates/default/images/index_44.jpg" /></a>
                        </span>
                        <span id="shopcar_popup" >弹出层</span> 
                    </li>
                </ul>
            </div>
           
         
           
          <div class="det_top_right">
                <table width="179" border="0" cellspacing="0" cellpadding="0">
                    
                    <tr>
                        <td height="40" align="left">销售排行<span class="size4">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['Rank']->value;?>
</span></td>
                    </tr>
                    <tr>
                        <td height="27" align="left" valign="top">商品评分&nbsp;&nbsp;<img src="templates/default/images/index_45.jpg" /><img src="templates/default/images/index_45.jpg" /><img src="templates/default/images/index_45.jpg" /><img src="templates/default/images/index_45.jpg" /><img src="templates/default/images/index_45.jpg" /></td>
                    </tr>
                    <tr>
                        <td height="18" align="left" valign="top">用户点评&nbsp;&nbsp;(<span class="color11">共<?php echo $_smarty_tpl->tpl_vars['counts']->value;?>
条评论</span>)</td>
                    </tr>
                    <tr>
                        <td align="left" valign="top"><span class="det_t_r_wz">会员01：<br />
                            挺满意的，之前买的一个，结果家人都说很好，又来帮他们买了两个、、</span></td>
                    </tr>
                    <tr>
                        <td height="47" align="left" valign="middle">月销量&nbsp;&nbsp;<span class="color11"><?php echo $_smarty_tpl->tpl_vars['month_sale']->value;?>
件</span></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">全国联保</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="det_bottom">
            <div class="left">
                <div class="yl"><span class="yl_title">浏览<span class="color12"><?php echo $_smarty_tpl->tpl_vars['info']->value['classid'];?>
</span>最终购买了</span>
                    <div class="yl_list">
                        <?php if ($_smarty_tpl->tpl_vars['final_info']->value){?>
                        <ul>
                         <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['final_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>                        
                            <li><span class="yl_tp"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" border="0" width="98" height="68" /></a></span><span class="yl_wz"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a><br />
                                <strong class="color13">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</strong></span></li>
                          <?php } ?>
                        </ul>
                        <?php }?>
                    </div>
                </div>
                <!--<div class="sg"><span class="sg_title">搜过的用户还看过</span>
                    <div class="sg_list">
                        <ul>
                            <li><span class="sg_sz">1</span><span class="sg_tp"><img src="templates/default/images/index_49.jpg" /></span><span class="sg_wz">三洋（SANYO）<br />
                                42CE530BLEDsd<br />
                                <strong class="color14">￥5999.00</strong></span></li>
                            <li><span class="sg_sz">2</span><span class="sg_tp"><img src="templates/default/images/index_49.jpg" /></span><span class="sg_wz">三洋（SANYO）<br />
                                42CE530BLEDsd<br />
                                <strong class="color14">￥5999.00</strong></span></li>
                            <li><span class="sg_sz">3</span>
                            <span class="sg_tp"><img src="templates/default/images/index_49.jpg" /></span>
                            <span class="sg_wz">三洋（SANYO）<br />
                                42CE530BLEDsd<br />
                                <strong class="color14">￥5999.00</strong>
                                </span></li>
                            <li><span class="sg_sz1">4</span><span class="sg_tp"><img src="templates/default/images/index_49.jpg" /></span><span class="sg_wz">三洋（SANYO）<br />
                                42CE530BLEDsd<br />
                                <strong class="color14">￥5999.00</strong></span></li>
                            <li><span class="sg_sz1">5</span><span class="sg_tp"><img src="templates/default/images/index_49.jpg" /></span><span class="sg_wz">三洋（SANYO）<br />
                                42CE530BLEDsd<br />
                                <strong class="color14">￥5999.00</strong></span></li>
                            <li><span class="sg_sz1">6</span><span class="sg_tp"><img src="templates/default/images/index_49.jpg" /></span><span class="sg_wz">三洋（SANYO）<br />
                                42CE530BLEDsd<br />
                                <strong class="color14">￥5999.00</strong></span></li>
                        </ul>
                    </div>
                </div>-->
                <?php if ($_smarty_tpl->tpl_vars['left_ads']->value){?>
                <?php  $_smarty_tpl->tpl_vars['left_ads_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_ads_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_ads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['left_ads_list']->key => $_smarty_tpl->tpl_vars['left_ads_list']->value){
$_smarty_tpl->tpl_vars['left_ads_list']->_loop = true;
?>
                <div class="sg"><?php echo $_smarty_tpl->tpl_vars['left_ads_list']->value;?>
</div>
                <?php } ?>
                <?php }?>
            </div>
            <div class="right">
                <!--<div class="yhtz"><span class="yhtz_title">优惠套餐</span>
                    <div class="yhtz_bottom"><span class="yhtz_tp"><img src="templates/default/images/index_54.jpg" width="122" height="122" /></span><span class="jh"><img src="templates/default/images/index_55.jpg" /></span>
                        <div class="yhtz_list">
                            <ul>
                                <li><span class="yhtz_list_tp"><img src="templates/default/images/index_56.jpg" /></span>SKG KX1701 电烤箱<br />
                                    <br />
                                    <span class="zt">现价</span><strong class="size5">￥299.00</strong></li>
                                <li><span class="yhtz_list_tp"><img src="templates/default/images/index_56.jpg" /></span>SKG KX1701 电烤箱<br />
                                    <br />
                                    <span class="zt">现价</span><strong class="size5">￥299.00</strong></li>
                                <li><span class="yhtz_list_tp"><img src="templates/default/images/index_56.jpg" /></span>SKG KX1701 电烤箱<br />
                                    <br />
                                    <span class="zt">现价</span><strong class="size5">￥299.00</strong></li>
                                <li><span class="yhtz_list_tp"><img src="templates/default/images/index_56.jpg" /></span>SKG KX1701 电烤箱<br />
                                    <br />
                                    <span class="zt">现价</span><strong class="size5">￥299.00</strong></li>
                            </ul>
                        </div>
                        <span class="dh"><img src="templates/default/images/index_57.jpg" /></span>
                        <div class="yhtz_wz"><strong class="size6">强烈推荐为您搭配</strong><br />
                            已搭配  0件<br />
                            共计<strong class="size5">￥299.00</strong><br />
                            <a href="#"><img src="templates/default/images/index_58.jpg" /></a></div>
                    </div>
                </div>-->
                <div class="yhtz">
                	<span class="yhtz_title">
                    <a href="javascript:;" id="goods_nav_1" onclick="dis('1')" class="on">产品介绍</a>
                    <a href="javascript:;" id="goods_nav_2" onclick="dis('2')">规格参数</a>
                        <a href="javascript:;" id="goods_nav_3" onclick="dis('3')">售后服务</a>
                        <a href="#m">商品评价</a>
                    </span>
                    <div class="yhtz_tps" id="goods_content_1">
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

                    </div>
                    <div class="yhtz_tps" id="goods_content_2" style="display:none">
                        <?php if ($_smarty_tpl->tpl_vars['flag_info']->value){?>
                        <table width="95%" border="0" cellpadding="0" cellspacing="1" bgcolor="#d7d7d7" align="center">
                          <tr>
                            <td colspan="2" bgcolor="#f3f3f3" width="30%" height="30">&nbsp;商品属性</td>
                          </tr>
                          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flag_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                          <tr>
                            <td bgcolor="#FFFFFF" height="30">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</td>
                            <td bgcolor="#FFFFFF">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['val'];?>
</td>
                          </tr>
                          <?php } ?>
                        </table>
                        <?php }?>
                    </div>
                  <div class="yhtz_tps" id="goods_content_3" style="display:none">
                  	<?php echo $_smarty_tpl->tpl_vars['info']->value['ser_conent'];?>

                  </div>
                </div>
                <div class="yhtz">	
                	<span class="yhtz_title"><a href="javascript:;" class="on">商品评价</a></span><a name="m" id="m"></a>
                    <div class="sppj">
                        <ul>
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
                            <?php }?>
                      </ul>
                  </div>
              </div>
            </div>
        </div>
    <div style="clear:both"></div>    
    </div>
    <!--  body  结束  -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>