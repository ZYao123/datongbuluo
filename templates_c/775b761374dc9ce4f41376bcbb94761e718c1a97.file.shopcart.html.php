<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:11:56
         compiled from "F:\WWW\shopx\m\templates\web\shopcart.html" */ ?>
<?php /*%%SmartyHeaderCode:2719859f1a6dce31fe2-42955081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '775b761374dc9ce4f41376bcbb94761e718c1a97' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\shopcart.html',
      1 => 1459845338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2719859f1a6dce31fe2-42955081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'cart_info' => 0,
    'list' => 0,
    'k' => 0,
    'totalnum' => 0,
    'totalprice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a6dcf3f8a5_13992629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a6dcf3f8a5_13992629')) {function content_59f1a6dcf3f8a5_13992629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\WWW\\shopx\\include\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../js/lcshopz.js"></script>
</head>

<body style="max-width:640px;margin:0 auto;background:#fff;">
<!--header start-->
<header class="m_pro_title">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  购物车</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--header end--> 

<!--index start-->

<section class="gwc">
  <div class="gwc_title"><span class="fl">店铺：<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
直供</span><a href="index.php" class="fr">继续购物</a>
    <div class="cl"></div>
  </div>
  <form id="form1" method="post" action="orderinfo.php">
  <ul class="gwc_list sljs">
    <?php if ($_smarty_tpl->tpl_vars['cart_info']->value){?>
     <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
    <li class="gwc_actual_z" style="height:130px;" id = 'tr<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
'>
      <div class="gwc_icon">
        <input name="id[]" id="id<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" checked="CHECKED" onclick="cart_chk_one(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)" class="s_checked s_checkbox"/></div>
         <input type="hidden" id='housenum<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
">
      <div class="gwc_pic"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
"></a></div>
      <div style=" width:60%; float:right">
      <div class="gwc_r"> <span class="gwc_text1" style="font-size:14px; display:block; height:19px; overflow:hidden"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['title'],35,'...',true);?>
</span><br>
        <span class="gwc_text2">单价：¥<span id='Unit_price<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</span></span> </div>
        <div class="jrgm_gmsl_r" style="width:95px; float:left; margin-left:2%; margin-top:2%; z-index:9999" > <a href="javascript:;" onclick="UpdateShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'-1',<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)"  class="jrgm_gmsl_icon1" style="width:30px; line-height:30px; height:30px;">-</a>
      <input type="text"  name="num<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" id="num<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  class="jrgm_gmsl_icon3" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
" onkeyup="UpdateShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'0',<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" disabled style="width:33px; line-height:30px;">
      <a href="javascript:;" onclick="UpdateShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,'1',<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" class="jrgm_gmsl_icon2" style="width:30px; line-height:30px; height:30px;">+</a> </div>
       <div class="cl"></div>
      <div class="gwc_text3" style="padding-bottom:0px; height:40px; line-height:50px;">
      <div class="fl" ><div>¥<span id='total<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' ><?php echo $_smarty_tpl->tpl_vars['list']->value['total'];?>
</span></div></div>
      <div class="gwc_text4 fr" ><div class="jrgm_gmsl" style="border-bottom:none">
      
    <div class="jrgm_gmsl_r" style=" border:none;  text-align:right; width:90%" > <a href="javascript:;" onclick="DelShopCart(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/del.png" style="width:40px;" /></a></div>
    <div class="cl"></div>
    </div>
  </div></div></div>
      <div class="cl"></div>
    </li>
   <?php } ?>
     <?php }else{ ?>
    <div style=" width:100%; height:60px; line-height:60px; text-align:center; font-size:16px;">亲，购物车里什么也没有！快去<a href="item_list.php">购物</a>吧</div>
    <?php }?>
  </ul>
  </form>
</section>
<div class="gwc_bot">
  <div class="gwc_icon" style=" padding:2%;">
  <input type="checkbox" name="checkbox"   id ='checkall'  onclick="cart_chk_all($(this).attr('checked'),<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" checked="CHECKED" class="s_checked s_checkbox" />
  </div>
  <label for="radio" class="gwc_text7">全选</label>
  <span class="gwc_text7">合计:</span><span class="gwc_text6">¥<span id="totalprice"><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</span></span>
 <?php if ($_smarty_tpl->tpl_vars['cart_info']->value){?><div class="gwc_btn" id="jiesuan"><a  onclick=" $('#form1').submit()">结算(<span id="totalnum"><?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
</span>)</a></div><?php }?>
  <span class="gwc_text5">不含运费</span>
  <div class="cl"></div>
</div>
<!--index end--> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/common.js"></script>
<!--footer start-->
<?php echo $_smarty_tpl->getSubTemplate ("copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--footer end-->
</body>
</html>
<?php }} ?>