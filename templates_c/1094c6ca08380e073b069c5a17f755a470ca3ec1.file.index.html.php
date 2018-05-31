<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:19
         compiled from "F:\WWW\shopx\m\templates\web\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2875659f1a54fb16374-07000991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1094c6ca08380e073b069c5a17f755a470ca3ec1' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\index.html',
      1 => 1459480611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2875659f1a54fb16374-07000991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'template_dir' => 0,
    'logo' => 0,
    'ads' => 0,
    'typelist' => 0,
    'j' => 0,
    'goodslist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a54fc9cdd7_48660698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a54fc9cdd7_48660698')) {function content_59f1a54fc9cdd7_48660698($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
function checkSearchForm(){
	
   	var key = $('#keyword').val();
	
	if(key=='' || key==undefined){
		
		alert('搜索不能为空');
		$('#keyword').focus();
		return false;
	}
	return true;
}

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

    	$(".pro_icon2").click(function (){
		 var $id = $(this).attr('id');
		
		 $.ajax({
		    url :"item_showajax.php?act=ajax&i=index",
		    type:'post',
		    data:{ 'id':$id},
		    success:function(data){
			 $('#guige').html(data);
			     
		    },
		   dataType:'html',
	     }); 
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

<body style="max-width:640px;margin:0 auto;">
<!--header start-->
<header class="logo"><a id="top"></a>
  <div class="icon1"><a href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <?php $_smarty_tpl->tpl_vars['logo'] = new Smarty_variable(GetArticle_show(45), null, 0);?>
  <?php echo $_smarty_tpl->tpl_vars['logo']->value['content'];?>
</header>
<div>
<link href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
style/banner.css" rel="stylesheet" type="text/css" />
<div class="box" id="Banner">
	  <ul class="touchslider-viewport">
		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetAds(22,'image'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>  
		<li class="touchslider-item"> 
			<?php if ($_smarty_tpl->tpl_vars['list']->value['linkurl']){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
">
			<?php }?>
				<img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="100%" />
				<?php if ($_smarty_tpl->tpl_vars['list']->value['linkurl']){?>
				</a>
			<?php }?>
		 </li>
		<?php } ?>
		<div style="clear:both"></div>
	  </ul>
	  
</div>
<script type="text/javascript">
$(function(){

  $("#Banner").touchSlider({mouseTouch:true,autoplay:true});

  var b_width=$(window).width();

  if(b_width>640){

	b_width=640;

	}

  $("#Banner>ul>li>img").width(b_width);

  var b_height=(980*b_width)/1903;

  $(".touchslider-viewport").height(b_height);

  $(".touchslider-item").height(b_height);

  $(".touchslider-item>img").height(b_height);


  })
</script>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("inc/type.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end--> 

<!--index start-->
<div class="ss_k">
<form id="searchForm" name="searchForm" method="get" action="item_list.php"  onSubmit="return checkSearchForm()">
  <input type="text" name="keywords" id="keywords" class="ss_bd" placeholder="搜索商品"  >
  <div class="ss_icon"> <input type="image"  id="imageField" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon18.png" style="width:100%;vertical-align:middle;"/></div>
   </form>
</div>
<ul class="zj_list">
  <li><a id="tubiao2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon1.png"><br>
    商品分类</a></li>
  <li><a href="shopcart.php?act=list"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon2.png"><br>
    购物订单</a></li>
  <li><a href="member.php?act=points"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon3.png"><br>
    积分中心</a></li>
  <li><a href="member.php?act=default"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon4.png"><br>
    个人中心</a></li>
  <li><a href="item_list.php?aid=11"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon5.png"><br>
    今日特惠</a></li>
  <li><a href="member.php?act=collect"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon6.png"><br>
    我的收藏</a></li>
  <li><a href="about.php?id=37"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon7.png"><br>
    正品保证</a></li>
  <li><a href="about.php?id=38"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon8.png"><br>
    联系我们</a></li>
  <div class="cl"></div>
</ul>
<div>
  <div class="title line1">
    <div class="title6">精品推荐</div>
    <a href="item_list.php?aid=8" class="more1">更多></a> </div>
  <ul class="jptj">
  <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoods(0,8,6,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
    <li> <a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['k']->value<=1){?><div class="jptj_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon9.png"></div><?php }?>
      <div class="jptj_text"><span class="jptj_text1"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,4,"utf-8");?>
</span><br>
        <?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['retitle'],0,8,"utf-8");?>
</div>
      <div class="jptj_pic"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['phone_picurl'];?>
" style=" border:1px #CCCCCC solid " alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" > </div>
      </a> </li>
     <?php } ?>
    <div class="cl"></div>
  </ul>
</div>
<div>
<?php $_smarty_tpl->tpl_vars['ads'] = new Smarty_variable(GetAds(67,'image',1), null, 0);?>
  <?php if ($_smarty_tpl->tpl_vars['ads']->value[0]['linkurl']){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['ads']->value[0]['linkurl'];?>
">
  <?php }?>
    <img src="../<?php echo $_smarty_tpl->tpl_vars['ads']->value[0]['picurl'];?>
"  />
  <?php if ($_smarty_tpl->tpl_vars['ads']->value[0]['linkurl']){?>
  </a>
  <?php }?>
</div>
<div class="jrth_bg">
  <div class="title line1">
    <div class="title6">今日特惠</div>
    <a href="item_list.php?aid=11" class="more1">更多></a> </div>
 <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoods(0,11,8,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>  
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['typelist'] = new Smarty_variable(GetGoodsType_show($_tmp1), null, 0);?>
 <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
  <div class="jrth_list1">
    <ul>
      <li>
        <div class="jrth_list1_text">
          <div class="jrth_list1_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon20.png"></div>
         
          <span class="jrth_list1_text2"><?php echo $_smarty_tpl->tpl_vars['typelist']->value['classname'];?>
</span><br>
          <?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,8,"utf-8");?>
 </div>
        <span><a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['phone_picurl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"></a></span> </li>
       </ul>
   </div> 
  <?php }elseif($_smarty_tpl->tpl_vars['k']->value==1){?> 
   <div class="jrth_list1">
    <ul> 
       <li>
        <div class="jrth_list_text"><span class="jrth_list_text1"><?php echo $_smarty_tpl->tpl_vars['typelist']->value['classname'];?>
</span><br>
          <?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,8,"utf-8");?>
</div>
        <span><a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['phone_picurl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"></a></span> </li>
    </ul>
  </div> 
     
 <?php }else{ ?>  
   <div class="jrth_list">
    <ul>
      <li>
        <div class="jrth_list_text"><span class="jrth_list_text1"><?php echo $_smarty_tpl->tpl_vars['typelist']->value['classname'];?>
</span><br>
          <?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,8,"utf-8");?>
</div>
        <span><a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['phone_picurl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"></a></span> </li>
     </ul>
  </div>
  <?php }?>    
 <?php } ?>   
<div class="cl"></div>   
</div>


<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType(428,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
<div>
  <div class="title line<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
">
    <div class="title<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</div>
    <a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="more<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
">更多></a> </div>
  <ul class="pro">
  <?php  $_smarty_tpl->tpl_vars['goodslist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodslist']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = GetGoods($_smarty_tpl->tpl_vars['list']->value['id'],3,4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodslist']->key => $_smarty_tpl->tpl_vars['goodslist']->value){
$_smarty_tpl->tpl_vars['goodslist']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['goodslist']->key;
?>
    <li>
      <?php if ($_smarty_tpl->tpl_vars['j']->value<2){?> <div class="pro_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon10.png"></div><?php }?>
      <div class="pro_icon2" id="<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon19.png"></div>
      <a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['classid'];?>
"> <img src="../<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['picurl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['title'];?>
"> </a>
      <div class="pro_text"><div style="width:100%; height:26px; overflow:hidden"><?php echo $_smarty_tpl->tpl_vars['goodslist']->value['title'];?>
</div>
        <span class="pro_text1">¥<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['price'];?>
</span></div>
    </li>
 	<?php } ?>
    <div class="cl"></div>
  </ul>
</div>
<?php } ?>
<div>
<?php $_smarty_tpl->tpl_vars['ads'] = new Smarty_variable(GetAds(66,'image',1), null, 0);?>
  <?php if ($_smarty_tpl->tpl_vars['ads']->value[0]['linkurl']){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['ads']->value[0]['linkurl'];?>
">
  <?php }?>
    <img src="../<?php echo $_smarty_tpl->tpl_vars['ads']->value[0]['picurl'];?>
"  />
  <?php if ($_smarty_tpl->tpl_vars['ads']->value[0]['linkurl']){?>
  </a>
  <?php }?>
</div>

<!--index end--> 

<!--footer start-->
<?php echo $_smarty_tpl->getSubTemplate ("copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--footer end-->
<!--层-->
<div id="gray" style="display:none;position:fixed;width:100%; height:900px; background:#444;top:0px;z-index:9999; background-color:rgba(0, 0, 0, 0.5)">&nbsp;</div>
<div id="buy" style="width:100%; height:0px;z-index:10000;position:fixed;  bottom:0px;">

	<div id="close1" style="width:100%; height:30%;">
		&nbsp;
	</div>
    
    <div style=" background:#fff;height:70%;">&nbsp;</div>
    
    <div id="contents" style="height:70%; position:absolute; width:100%;overflow-y:auto; padding-bottom:20px;">
     <div id="close2" style=" width:30px; margin-top:33px; border-radius:15px; height:30px; text-align:center; float:right; font-size:18px;  cursor:pointer; padding-right:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon22.png "></div>
      <div id='guige' >
      
      </div>
  <div id="goodsnum" style="background:#000;background-color:rgba(0, 0, 0, 0.5);color:#fff; border-radius:20px; width:90%; font-weight:normal; position: absolute; bottom:50px; left:5%; padding-top:7px; padding-bottom:7px; display:none"></div>
</div>
</div>
<!--层-->
</body>
</html>
<?php }} ?>