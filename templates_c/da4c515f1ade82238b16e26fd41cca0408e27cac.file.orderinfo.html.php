<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 10:59:23
         compiled from "F:\WWW\shopx\templates\default\orderinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2184559f1a82e68e264-19488017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4c515f1ade82238b16e26fd41cca0408e27cac' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\orderinfo.html',
      1 => 1512703910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2184559f1a82e68e264-19488017',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a82e741d85_50571946',
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'LOGO' => 0,
    'postmode_info' => 0,
    'sid' => 0,
    'TemPricing' => 0,
    'totalgoodsprice' => 0,
    'cartids' => 0,
    'cart_info' => 0,
    'totalprice' => 0,
    'hidetotalprice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a82e741d85_50571946')) {function content_59f1a82e741d85_50571946($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<link href="templates/default/style/shopcart.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
<script type="text/javascript" src="js/getarea.js"></script>
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
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
</head>
<body onload="Getphp('orderinfo.php?act=addr&act1=update','address')">

<div class="gwc1">
    <!--  header  开始  -->
    <div class="gwc_header">
        <?php echo $_smarty_tpl->getSubTemplate ("shopcarthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="gwc_top">
            <div class="gwc_top_left"><a href='index.php'><img src="<?php echo $_smarty_tpl->tpl_vars['LOGO']->value['picurl'];?>
"class="tl" /></a></div>
            <div class="gwc_top_right">
                <div class="gwc_lc gwc_lc_2"><span class="gwc_lc_w1"><img src="templates/default/images/1.jpg" align="left" />&nbsp;我的购物车</span><span class="gwc_lc_w2 color_white"><img src="templates/default/images/2.jpg" align="left" />&nbsp;确认订单信息</span><span class="tl"><img src="templates/default/images/gwc_6.jpg" align="left" />&nbsp;付款</span></div>
            </div>
        </div>
    </div>
    <!--  header  结束  -->
    <!--  body  开始  -->
    <form id="form2" method="post" action="orderpost.php">
    <div class="gwc_body" style="clear:both">
   	  <div class="mt">填写并核对订单信息</div>
      <div class="mt_padding" id='souhuoren'>
           <div class='title'>收货人信息&nbsp;&nbsp;<a href='javascript:;' onclick="Getphp('orderinfo.php?act=addr&act1=update','address')">[修改]</a><span style="color:#F00" id="contact"></span></div>
           <div id = 'address' class='content'></div>
      </div>
      <?php if (get_menmberPoint()){?>							
     <div class="mt_padding" >
       <div class='title'>购物券</div>
       <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr >
          <td width="40%" height="28" align="center" valign="middle" class="help_back">标题</td>
          <td width="10%" height="28" align="center" valign="middle" class="help_back">券码</td>
          <td width="15%" align="center" valign="middle" class="help_back">面值</td>
          <td width="15%" align="center" valign="middle" class="help_back">条件</td>
          <td width="10%" align="center" valign="middle" class="help_back">有效期</td>
        </tr>
        <?php $_smarty_tpl->tpl_vars["list"] = new Smarty_variable(get_menmberPoint(), null, 0);?>
        <tr>
          <td height="81" align="center" valign="middle" class="help_bor ys1">
            <span class="ys"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </span></td>
          <td align="center" valign="middle" class="help_bor"><span class="ys3"><?php echo $_smarty_tpl->tpl_vars['list']->value['password'];?>
</span>
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
        </tr>
      </table>											
    </div>
   <?php }?>
      <div class="mt_padding" id='peisong'>
           <div class='title'>配送方式</div>
           
           <div class='content'>
             
             <div class='content_title1'>送货方式：<span style="color:#F00" id='postmode'></span></div>
             <?php if ($_smarty_tpl->tpl_vars['postmode_info']->value){?>
             <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['postmode_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>             
               　　<input name="postmode" type="radio" id="postmode" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" onclick="Calculate()"/><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
<br>
             <?php } ?>
             <?php }?>
             <input id="sid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" />    
             <input id="TemPricing" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TemPricing']->value;?>
" />            
             <div class='content_title1'>时间要求：</div>
               　　<input name="buyremark" type="radio" value="1" checked="checked" />只工作日送货（双休日与假日不用送货）（注：写字楼/商用地址客户请选择） <br>
               　　<input name="buyremark" type="radio" value="2" />工作日、双休日与节假日均可送货<br>
               　　<input name="buyremark" type="radio" value="3" />只双休日、假日送货（工作日不用送货）
           </div>
      </div>      
      <div class="mt_padding">
           <div class='title'>发票信息</div>
           <div class='content'>
           发票类型：<input name="InvoiceType" type="radio" value="1" checked="checked" />普通发票<br>
           发票抬头：<input name="Invoice" type="radio" value="1" checked="checked"  onclick="javascript:$('#companyname').hide()" />个人<input name="Invoice" type="radio" value="2" onclick="javascript:$('#companyname').show()"/>单位&nbsp;&nbsp;<input id = 'companyname' name="companyname" type="text" style="display:none; border:solid 1px #ccc; height:20px; line-height:20px;" />
        </div>
      </div>   
      <div class="mt_padding">
           <div class='title'>备注信息</div>
           <div class='content'>
           <textarea name="message" id="message" style=" width:400px; height:100px; border:1px solid #a0a0a0;"></textarea>
        </div>
      </div>
      <div class="mt_padding" id='goods'>
           <div class='title' style="float:left">商品清单</div><div style="float:left; color:#F00; margin-left:10px" class='title' id='itemlist'></div><div class='title' style="float:right"><a href="javascript:;" onclick="pointshow()">使用购物券抵消部分金额</a>&nbsp;&nbsp;<a href="shopcart.php?act=list">返回修改购物车</a></div>
        <div class='content'>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ececec">
                <tr>

                    <td width="285" height="25" align="center" valign="middle">商品信息</td>
                    <td width="100" align="center" valign="middle">单价</td>
                    <td width="100" align="center" valign="middle">库存</td>
                    <td width="100" align="center" valign="middle">数量</td>
                    <td width="120" align="center" valign="middle">小计（元）</td>
                    
            </tr>
          </table>
           <input type="hidden" id="totmoney" value="<?php echo $_smarty_tpl->tpl_vars['totalgoodsprice']->value;?>
"  /><!--不含运费的总额-->
             <input type="hidden" name="pointnum" id="pointnum" value=""  /><!--购物券编号-->
           
          <input id="cartids" name="cartids" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cartids']->value;?>
" />
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                  <tr id = 'tr<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>
                      <td width="90" height="82" align="left" valign="middle" ><span class="tp01"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="60" height="60" /></span></td>
                      <td width="195" align="left" valign="middle" ><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
<strong class="color05"><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
</strong></td>
                      <td width="100" align="center" valign="middle" >¥<span id='Unit_price<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</span></td>
                      <td width="100" align="center" valign="middle" >库存:<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
</td>
                      <td width="100" align="center" valign="middle" ><?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
</td>
                      <td width="120" align="center" valign="middle"><strong class="color05">¥<span id='total<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value['total'];?>
</span></strong></td>
                     
                  </tr>
                  <?php } ?>
             </table>           
          </div>
      </div>  
      <div class="onsubmit">    提交订单 应付总额：<span>￥<span id=total><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</span><input id='intotal' name="totalprice" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hidetotalprice']->value;?>
" /><input id='inyunfei' name="yunfei" type="hidden" value="0" /></span>元&nbsp;&nbsp;  <span id="youhuiquan"> </span>  （含运费<span id='yunfei'>0.00</span>元）  
     <!-- <button type="submit" class="checkout-submit"  id="order-submit" onclick="return checkorderpost()">提交订<b></b></button> -->
      <input type="image" name="imageField" id="imageField" src="templates/default/images/btn-submit.jpg" onclick="return checkorderpost()" style=" vertical-align:middle" />
      
      </div>
<div id='point' style="height:auto;">
                        <div class="point_close tr" onclick="pointhide()"></div>
                        <div class="tl">
                        <div class="p_top" ><span class="p_t">　提示:　购物券每次只能使用一张，且订单金额达到一定金额才能使用（不包含运费）</span></div>
                        <div class="p_top" >
                        <span class="p_t">　请输入您手中的购物券券码</span>
                        </div>
                        <div class="p_top" >
                        <span class="p_t"><input type="text" name="point_pwd" id="point_pwd">
                        
                         <a style=" color:#fff;margin-left:20px;background:#d00;width:50px; padding:2px 10px; cursor:pointer" onclick="shopPoint_add()" id="anniu">添加</a> 
                        </span>
                        </div>
                        <div class="p_top" >
                        <span class="p_t" id="point_show">　</span>
                        </div>
        
                      <!--  <?php if (get_menmberPoint()){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("shopcart_point.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>-->
                        </div>
                </div>
      
    </div>
    </form>
    <div style="clear:both"></div>
    <!--  body  结束  -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("shopcartbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>