<?php /* Smarty version Smarty-3.1.14, created on 2018-05-11 16:34:57
         compiled from "C:\wamp64\www\templates\default\shopcart.html" */ ?>
<?php /*%%SmartyHeaderCode:69345af555b19ea3e6-44744519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ef8e0f0df97073ca870f131c524863d6f766cae' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\shopcart.html',
      1 => 1524827488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69345af555b19ea3e6-44744519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'totalnum' => 0,
    'cart_info' => 0,
    'list' => 0,
    'k' => 0,
    'totalgoodsprice' => 0,
    'totalprice' => 0,
    'quality_goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5af555b1bbd565_02065596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af555b1bbd565_02065596')) {function content_5af555b1bbd565_02065596($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<link href="templates/default/style/shopcart.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
<script type="text/javascript" src="js/getarea.js"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
</head>
<body>
<div class="gwc1">
    <!--  header  开始  -->
    <div class="gwc_header">
        <?php echo $_smarty_tpl->getSubTemplate ("shopcarthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="gwc_top">
            <div class="gwc_top_left">
           
                <span class="gwc_top_wz"><img src="templates/default/images/gwc_2.jpg" align="left" />&nbsp;<a href="#">我的购物车</a></span></div>
            <div class="gwc_top_right">
                <div class="gwc_lc"><span class="gwc_lc_w1 color_white"><img src="templates/default/images/gwc_4.jpg" align="left" />&nbsp;我的购物车</span><span class="gwc_lc_w2"><img src="templates/default/images/gwc_5.jpg" align="left" />&nbsp;确认订单信息</span><span class="tl"><img src="templates/default/images/gwc_6.jpg" align="left" />&nbsp;付款</span></div>
            </div>
        </div>
    </div>
    <!--  header  结束  -->
    <!--  body  开始  -->
    <div class="gwc_body">
    <!-- loading -->
	<div class="regist_suc" style=" display:none"><img src="templates/default/images/loading.gif"  /> </div>
    <!-- loading -->    
    <div class="gwc" style="clear:both">
        <div class="gwc_tops">
            <table width="960" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="152" height="26" align="left" valign="top"><span class="gwc_jl">
                        <input type="checkbox" id ='checkall' onclick="cart_chk_all($(this).attr('checked'),<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" value="" checked="CHECKED" />
                        </span> &nbsp;全选</td>
                    <td width="262" align="left" valign="top">商品信息</td>
                    <td width="85" align="left" valign="top">单价</td>
                    <td width="140" align="left" valign="top" class="gwc_color">哈尔滨市</td>
                    <td width="128" align="left" valign="top">数量</td>
                    <td width="120" align="left" valign="top">小计（元）</td>
                    <td align="left" valign="top">操作</td>
                </tr>
            </table>
        </div>
        <form id="form1" method="post" action="orderinfo.php">
        <div class="gwc_b"><!--<span class="gwc_b2">
            <input name="" type="checkbox" class="tl" value="" />
            &nbsp;活动商品已购满3500.00元，再加50.00元领取赠品</span>-->
            <div class="gwc_tops_list" >
                <table width="960" border="0" cellspacing="0" cellpadding="0">
                  <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                    <tr id = 'tr<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
' class="gwc_actual_z" style="position:relative">
                        <td width="54" height="82" align="right" valign="middle" >
						<input name="id[]" id="id<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" checked="CHECKED" onclick="cart_chk_one(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)" /></td>
                        <td width="90" align="left" valign="middle" ><span class="tp01"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="60" height="60" /></span></td>
                        <td width="195" align="left" valign="middle" ><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
<strong class="color05"><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
</strong></td>
                        <td width="170" align="center" valign="middle" >¥<span id='Unit_price<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</span></td>
                        <td width="103" align="left" valign="middle" >库存:<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
</td>
                        <td width="140" align="center" valign="middle"  >
                        
                        <input type="hidden" id='housenum<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
">
                        <a href="javascript:;" onclick="UpdateShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'-1',<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" class="tl"><img src="templates/default/images/gwc_9.jpg" /></a>
                        <input name="num<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" type="text" class="text04" id="num<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
"  onkeyup="UpdateShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'0',<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)"/>
                        <a href="javascript:;" onclick="UpdateShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'1',<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" class="tl"><img src="templates/default/images/gwc_10.jpg" /></a>
                        
                      </td>
                        <td width="99" align="center" valign="middle"><div id='kc<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' class="shopcart_popup1" style=" display:none"></div><strong class="color05">¥<span id='total<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value['total'];?>
</span></strong></td>
                        <td align="center" valign="middle" ><!--<a href="#">收藏</a> --><a href="javascript:;" onclick="DelShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)">删除</a></td>
                    </tr>
                    <?php } ?>
                </table>
          </div>
      </div>
      
      <div class="gwc_b3">
      <span class="gwc_l1">&nbsp;&nbsp;<a href="javascript:;" onclick="DelShopCartAll()">删除选中商品</a>
      &nbsp;&nbsp;<a href="javascript:;" onclick="DelShopCartAll1(<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)">清空购物车</a></span>
      <span class="gwc_wzl" style="padding-left:120px;"><span id = 'totalnum' class="color13"><?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
</span>&nbsp;件商品&nbsp;&nbsp;总计：<span class="color06">¥<span id = 'totalgoodsprice'><?php echo $_smarty_tpl->tpl_vars['totalgoodsprice']->value;?>
</span></span><br />
            <strong>应付总额</strong>（不含运费）：<strong class="color13">¥<span id = 'totalprice'><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</span></strong></span><span class="gwc_an"><a href="index.php"><img src="templates/default/images/gwc_11.jpg" /></a>&nbsp;<input type="image" name="imageField" id="jiesuan" src="templates/default/images/gwc_12.jpg"  /></span> 
      </div></form>
      <div style="clear:both"></div>
      </div>
        <div class="wntj"><span class="wntj_title">为您推荐</span>
            <div class="wntj_list">
                <TR>
                    <TD><DIV id=demo style="OVERFLOW: hidden; WIDTH:96%; COLOR: #ffffff; float:left">
                            <TABLE cellSpacing=0 cellPadding=0 align=left border=0 cellspace="0">
                                <TBODY>
                                    <TR>
                                        <TD id=demo1 vAlign=top><table width="910" border="0" cellpadding="0" cellspacing="0"> 
                                       <tr>                                                                                                       
                                       <?php if ($_smarty_tpl->tpl_vars['quality_goods']->value){?> 
                                       <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quality_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>      
                                            <td>
                                            <span class="wntj_border">
                                                <span class="wntj_tp">
                                                    <a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" border="0" width="162" height="131" />
                                                    </a>
                                                </span>
                                                <span class="wntj_wz">
                                                    <a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a>
                                                </span>
                                                <span class="wntj_wz1">
                                               ￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>

                                                </span>
                                                </span>
                                            </td>                                               
                                       <?php } ?>
                                       <?php }?>
                                        </tr>
                                            </table></TD>
                                        <TD id=demo2 vAlign=top>&nbsp;</TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </DIV>
                        <script language=JavaScript src="js/scrollpic.js"></script>
                    </TD>
                </TR>
            </div>
        </div>
    </div>
    <div style="clear:both"></div>
    <!--  body  结束  -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("shopcartbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>