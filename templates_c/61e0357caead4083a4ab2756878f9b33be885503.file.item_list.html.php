<?php /* Smarty version Smarty-3.1.14, created on 2017-11-10 17:30:35
         compiled from "F:\WWW\shopx\m\templates\web\item_list.html" */ ?>
<?php /*%%SmartyHeaderCode:268145a0571bb30ede3-65926006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e0357caead4083a4ab2756878f9b33be885503' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\item_list.html',
      1 => 1469409773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268145a0571bb30ede3-65926006',
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
    'page' => 0,
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0571bb476443_96053908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0571bb476443_96053908')) {function content_5a0571bb476443_96053908($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../js/goods.js"></script>
<script type="text/javascript" src="../js/lcshopz.js"></script>
</head>
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

    	$(".pro_icon2").click(function (){
		 var $id = $(this).attr('id');
		
		 $.ajax({
		    url :"item_showajax.php?act=ajax&i=item&a=<?php echo $_SERVER['REQUEST_URI'];?>
",
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

<body style="max-width:640px;margin:0 auto;background:#f7f7f7;">
<!--header start-->
<header class="m_pro_title">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
 <!-- <div class="m_pro_t1"><a href="#">关闭</a></div>-->
  <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end--> 

<!--index start-->
<div class="m_pro_list">
<?php ob_start();?><?php echo $_GET['cid'];?>
<?php $_tmp1=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType($_tmp1,100); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php if ($_GET['aid']){?>&aid=<?php echo $_GET['aid'];?>
<?php }?>" <?php if ($_GET['cid']==$_smarty_tpl->tpl_vars['list']->value['id']){?>class="aliston"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
<?php } ?>
  <div class="cl"></div>
</div>
<div>
  <ul class="pro">
   <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
 	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?> 
    <li>
      <div class="pro_icon2"  id="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon19.png"></div>
      <a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"> <img src="../<?php echo $_smarty_tpl->tpl_vars['list']->value['phone_picurl'];?>
"> </a>
      <div class="pro_text"><div style="width:100%; height:26px; overflow:hidden"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</div>
        <span class="pro_text1">¥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span></div>
    </li>
  <?php } ?>
    <div class="cl"></div>
    <?php }else{ ?>
    <div style=" width:100%; font-size:16px; text-align:center">暂无此类商品</div>
    <?php }?>
  </ul>
  <ul class="s_page">
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    <div class="cl"></div>
  </ul>
</div>
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