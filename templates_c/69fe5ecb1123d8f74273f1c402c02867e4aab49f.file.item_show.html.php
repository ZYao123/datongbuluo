<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:48
         compiled from "F:\WWW\shopx\m\templates\web\item_show.html" */ ?>
<?php /*%%SmartyHeaderCode:507659f1a56c45e080-84223264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fe5ecb1123d8f74273f1c402c02867e4aab49f' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\item_show.html',
      1 => 1463109277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '507659f1a56c45e080-84223264',
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
    'info' => 0,
    'from' => 0,
    'counts' => 0,
    'ks' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a56c544842_88472565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a56c544842_88472565')) {function content_59f1a56c544842_88472565($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<script type="text/javascript" src="../js/goods.js"></script>
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
<script type="text/javascript">
function jian()
{
	if ($("#goods_num").val() > 1)
	{
		$("#goods_num").val(parseInt($("#goods_num").val())-1);
	}
}

function jia()
{
	if (parseInt($("#goods_num").val()) < parseInt($("#show_housenum").val()))
	{
		$("#goods_num").val(parseInt($("#goods_num").val())+1);
	}
}



	$(document).ready(function(e) {
		var h = $(window).height();

		$("#contents").css("top",h*0.3-30);	
		
		

	$("#gwc,#gwc1,#gwc2").click(function (){
		$("#guige").height(h*0.7-50-$("#pic").height());
		//alert($("#pic2").height());
		$("#gray").fadeIn(2000);
		$("#buy").animate({height:h},"slow");
		})
		$("#close1,#close2").click(function (){
			$("#gray").fadeOut(2000);
			$("#buy").animate({height:'0px'},"slow");
		
		})
	});	
	


</script>
</head>


<body style="max-width:640px;margin:0 auto;background:#f7f7f7;">
<!--header start-->
<header class="m_pro_title">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  商品详细</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end--> 

<!--index start-->

<section>
  <div class="spxx_pic"><?php echo $_smarty_tpl->getSubTemplate ("item_show_img.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
  <div class="spxx_text4"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<br>
    <span class="spxx_text5">¥<?php echo $_smarty_tpl->tpl_vars['info']->value['salesprice'];?>
</span>
    <div class="spxx_icon2"><a onclick="add_collect('<?php echo $_GET['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon27.png"></a></div>
  </div>
   <div class="spxx_text1" style="color:#3a3a3a" >库存：<span class="spxx_text2"><?php echo $_smarty_tpl->tpl_vars['info']->value['tot_housenum'];?>
</span></div>
  <div class="spxx_text1" style="color:#3a3a3a"  id="gwc2">查看：尺码，主要颜色</div>
  <ul class="spxx_list">
    <li> <a href="index.php">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon23.png"></div>
      <span class="fl"><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
直供</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="spxx_text3">进入首页</div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="item_show.php?act=goods_content&id=<?php echo $_GET['id'];?>
">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon24.png"></div>
      <span class="fl">查看商品详情</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="item_show.php?act=comments&id=<?php echo $_GET['id'];?>
">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon25.png"></div>
      <span class="fl">累计评价（<?php echo $_smarty_tpl->tpl_vars['counts']->value;?>
）</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
  </ul>
</section>

<!--index end--> 

<!--footer start-->
<?php echo $_smarty_tpl->getSubTemplate ("copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<ul class="jrgm_btn">
  <li id="gwc1"><a >立即购买</a></li>
  <li id="gwc"><a >加入购物车</a></li>
  <div class="cl"></div>
</ul>
<div class="top"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/top.jpg"></a></div>
<!--footer end-->
<!--层-->
<div id="gray" style="display:none;position:fixed;width:100%; height:900px; background:#444;top:0px;z-index:9999; background-color:rgba(0, 0, 0, 0.5)">&nbsp;</div>
<div id="buy" style="width:100%; height:0px;z-index:10000;position:fixed;  bottom:0px;">

	<div id="close1" style="width:100%; height:30%;">
		&nbsp;
	</div>
    
    <div style=" background:#fff;height:70%;">&nbsp;</div>
    
    <div id="contents" style="height:70%; position:absolute;">
     <div id="close2" style=" width:30px; margin-top:33px; border-radius:15px; height:30px; text-align:center; float:right; font-size:18px;  cursor:pointer; padding-right:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon22.png "></div>
        <div id="pic">
            <img src="../<?php echo $_smarty_tpl->tpl_vars['info']->value['phone_picurl'];?>
"  id = 'pic2' style="border-radius:5px; margin-left:1%;float:left; width:30%" />
            <div style="margin-top:50px;width:53%; float:left; margin-left:10px;">
              <span style="font-size:medium"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</span><br>
              <span style="font-size:medium">库存<em style="color:#dc3330;"><?php echo $_smarty_tpl->tpl_vars['info']->value['tot_housenum'];?>
</em> 件</span><br>
               <?php if ($_smarty_tpl->tpl_vars['info']->value['integral']){?><span style="font-size:medium">赠送积分<em style="color:#dc3330;"><?php echo $_smarty_tpl->tpl_vars['info']->value['integral'];?>
</em> 分/件</span><br><?php }?>
              
              <span style="color:#dc3330;" id="price">￥<?php echo $_smarty_tpl->tpl_vars['info']->value['salesprice'];?>
</span>
              
            </div>
           
            <input type="hidden" name="show_housenum" id="show_housenum" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tot_housenum'];?>
">
            <input name="goods_id" type="hidden" id="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
            <input name="goods_price" type="hidden" id="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['hideprice'];?>
" />
            <input type="hidden" name="goods_from" id="goods_from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
"/>
            <input type="hidden" name="shownums" id="shownums" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shownums'];?>
">
            <input type="hidden" name="zhekou" id="zhekou" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['zhekou'];?>
">
            <div style="clear:both"></div>
        </div>
        <div style="height:10px;"></div>  
        
        
      <div id="guige" style=" overflow-y:auto;border-top:solid 1px #ccc; padding-bottom:10px; ">
           
            <?php if ($_smarty_tpl->tpl_vars['info']->value['norm']){?>
        <form name="form">
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-bottom:solid 1px #ccc;">
                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['norm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                          <tr>
                            <td valign="middle" style="line-height:300%;font-size:16px;"> <?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
</td>
                          </tr>
                        <tr>
                            <td align="center" valign="middle" class="xxy_bj" id = 'attr'>
                               
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
" style="font-size:12px;">
                                                <?php if ($_smarty_tpl->tpl_vars['v']->value['pic']!=''){?>
                                                    <a href="#" >
                                                        <img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" height="30" width="30" />
                                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['attrname'];?>

                                                    </a>
                                                <?php }else{ ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['pic']==''&&$_smarty_tpl->tpl_vars['v']->value['color']==''){?>
                                                        <a href="javascript:;" ><?php echo $_smarty_tpl->tpl_vars['v']->value['attrname'];?>
</a>
                                                    <?php }else{ ?>
                                                        <a href="javascript:;" style=" background:<?php if ($_smarty_tpl->tpl_vars['v']->value['color']){?><?php echo $_smarty_tpl->tpl_vars['v']->value['color'];?>
<?php }?>">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </a>
                                                    <?php }?>
                                                <?php }?>
                                            </li>
                                        <?php } ?> 
                                    </ul>
                                </span><input id="goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
" size="15" name="goods_norm" type="hidden" />
                            </td>
                        </tr>
                        <script>
                                var goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
 = new Select("goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
",{
                                    Radio :true	,									
                                    OnClick:function(selected){
                                        document.form.goods_norm_<?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
.value = selected.join(",")
                                        getprice(<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
,"phone");
                                    }
                                    
                                });	
                        </script>
                        <?php } ?>
                    </table>  
              </form>
            
              <?php }?>

               <div class="jrgm_gmsl" style="margin-bottom:2%"> <span class="fl">购买数量</span>
                    
<div style="width:120px;border:solid 1px #c0c0c0;border-radius:5px;float:right;height:35px;line-height:35px;">
                    <div onClick="jian()" style="width:40px;float:left;text-align:center;color:#a2a2a2;font-size:30px;">－</div>
<div onclick='jia()' style="width:40px;float:right;text-align:center;color:#454545;font-size:30px;">＋</div>
<input min="1" class="s_num_for" name="goods_num" type="text" id="goods_num" value="1" disabled onKeyUp="value=value.replace(/[^\d]/g,'')" onblur="num_blur()" style="width:38px;height:35px;line-height:35px;border:none;border-left:solid 1px #c0c0c0;border-right:solid 1px #c0c0c0;float:right;text-align:center;color:#454545;font-size:18px;background:none;">
</div>                 
  <div class="cl"></div>
        </div>   
        <div style=" margin:0 auto;width:100%; padding:0;" class="jrgm_btn" >
            <div class="pro_gm" id="NowBuy" style=" margin:0px;">
               <li> <a href="javascript:;" onclick="NowBuy('shopcar_popup','phone')">
                    立即购买
                </a></li>
            </div>
            <div class="pro_gm" style=" margin:0px;">
              <li>  <a href="javascript:;"   onclick="AddShopCart('shopcar_popup','phone');">
                    加入购物车
                </a></li>
            </div>
        </div>
    </div>
  <div id="goodsnum" style="background:#000;background-color:rgba(0, 0, 0, 0.5);color:#fff; border-radius:20px; width:90%; font-weight:normal; position: absolute; bottom:50px; left:5%; padding-top:7px; padding-bottom:7px; display:none"></div>
</div>
</div>

</body>
</html>
<?php }} ?>