<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:38:36
         compiled from "F:\WWW\shopx\templates\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1975259f1a377240618-98383653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ed2bd56d53b0c0827b08b5987bd250bf9d178d' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\index.html',
      1 => 1509010605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1975259f1a377240618-98383653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a3774bd227_98913522',
  'variables' => 
  array (
    'webname' => 0,
    'list' => 0,
    'keywords' => 0,
    'hotkeywords' => 0,
    'shop_item_num' => 0,
    'k' => 0,
    'list1' => 0,
    'i' => 0,
    'list_article' => 0,
    'goodslist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a3774bd227_98913522')) {function content_59f1a3774bd227_98913522($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
$(function(){
	$(".product_tp img").LoadImage({width:116,height:89});
	$(".xsqg img").LoadImage({width:162,height:131});
	$(".handout01 img").LoadImage({width:181,height:146});
});
function checkSearchForm(){
   	var key = $('#keyword').val();
	if(key=='' || key==undefined){
		alert('搜索不能为空');
		$('#keyword').focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
<!--  header  开始  -->
<div class="header">
	<?php echo $_smarty_tpl->getSubTemplate ("head_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="header_middle">
    
	<div style="width:410px;float:left;position: relative!important;">
		<h1 class="logo">
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(28,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

			<?php } ?>
		</h1>
		<div style="float:left;">
			<div style="color:#999;float:left;padding-right:10px;height:46px;line-height:46px;">点击扫描二维码</div>
			<div style="float:left;cursor:pointer;" onmouseover="javascript:chengimg(0);" onmouseout="javascript:chengimg(1);">
				<img src="templates/default/images/tel_erm.jpg" id="erm_img"/>
				<div class="sn-qrcode" style="display: none;">
					<div class="sn-qrcode-content" style="background: url(include/qr_code.php)">
						
					</div>
				</div>
			</div>
		</div>
		<script>
		function chengimg(sign)
		{
			if(!sign)
			{
				$("#erm_img").attr("src",'templates/default/images/tel_erm_hover.jpg');
				$('.sn-qrcode').show();
			}else
			{
				$("#erm_img").attr("src",'templates/default/images/tel_erm.jpg');
				$('.sn-qrcode').hide();
			}

		}
		</SCRIPT>
	</div>
	<div class="ss">
		<div class="ss_top">
		<form id="searchForm" name="searchForm" method="get" action="item_list.php" onSubmit="return checkSearchForm()">
			
			 <input name="keywords" type="text" id="keyword" onkeyup="keyupdeal(event,this.value);" onkeydown="keydowndeal(event);" onclick="keyupdeal(event,this.value);" onblur="closediv();"  autocomplete="off" class="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
			 <input name="" type="image" src="templates/default/images/index_3.jpg" />
		</form>
		<div id="search_suggest" style="display:none;top:200px;left:757px;" onmouseover='javascript:_over();' onmouseout='javascript:_out();'></div>
		</div>
		<div class="ss_link">热门搜索：<?php if ($_smarty_tpl->tpl_vars['hotkeywords']->value){?>
		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotkeywords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
		<a href='item_list.php?keywords=<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</a>&nbsp;
		<?php } ?>
		<?php }?></div>
	</div>
	<div class="header_right">
		<span class="header_wz">
			<span class="cd_dw" style="background:url(templates/default/images/index_4.jpg) center no-repeat; color:#FFF; text-align:center;">
			<?php echo $_smarty_tpl->tpl_vars['shop_item_num']->value;?>

			</span>
		</span>
		<span class="cd"><a href="shopcart.php?act=list">去购物车结算</a> </span>
	</div>
</div>

<div class="header_bottom">
	<div class="fl">
		<span class="fl_title"><a href="#"><img src="templates/default/images/tb13.jpg" /></a>全部分类</span>
		<div class="fl_list">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('428',6); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
				<li>
					<span class="tb2_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></span>&nbsp;<strong>
					<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></strong><br />
					<?php  $_smarty_tpl->tpl_vars['list1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType($_smarty_tpl->tpl_vars['list']->value['id'],6); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list1']->key => $_smarty_tpl->tpl_vars['list1']->value){
$_smarty_tpl->tpl_vars['list1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list1']->key;
?>
					<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list1']->value['classname'];?>
</a>
					<?php } ?>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
	<div class="header_b_right">
		<div class="nav">
			<ul>
				<li><a href="index.php">首页</a></li>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = GetNav('middle'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['list']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="xbnr">
			<div class="xbnr_left">
				<div class="tpqh">
					<!-- 幻灯片代码开始 -->
				<script language='javascript'>
				linkarr = new Array();
				picarr = new Array();
				//textarr = new Array();
				var swf_width=730;
				var swf_height=341;
				//文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
				var configtg='0xffffff|2|0xcecece|8|0xffffff|0xDA202C|0x000033|4|3|1|_blank';
				var files = "";
				var links = "";
				var texts = "";
				//这里设置调用标记

				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetArticle_list(30,5,'image'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>  
				linkarr[<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
]='ads.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
';
				picarr[<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
]='<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
';
				<?php } ?>		
				
				
				for(i=1;i<linkarr.length;i++){
				if(links=="") links = linkarr[i];
				else links += "|"+linkarr[i];
				}
				for(i=1;i<picarr.length;i++){
				if(files=="") files = picarr[i];
				else files += "|"+picarr[i];
				}
				document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
				document.write('<param name="movie" value="templates/default/images/bcastr3.swf"><param name="quality" value="high">');
				document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
				document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'">');
				document.write('<embed src="templates/default/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'&menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');
				</script>
				<!--幻灯片代码结束-->
				</div>
				<div class="product">
					<span class="an" style="cursor: pointer;z-index:999;" onClick="r_left1()">
					<img src="templates/default/images/index_7.jpg" />
					</span>
					<div class="product_list">
						<DIV id=demo style="OVERFLOW: hidden; WIDTH:100%; COLOR: #ffffff; float:left">
						<TABLE cellSpacing=0 cellPadding=0 align=left border=0 cellspace="0">
						  <TBODY>
							<TR>
							  <TD id=demo1 vAlign=top><table width="663" border="0" cellpadding="0" cellspacing="0">
								  <tr>
									  <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
										<td><span class="product_border x" style="width:115px;padding:0 17px;">
										<span class="product_wz" style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;width:120px;">
											<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>

										</span>
									  <span class="product_tp" style="width:120px;"> 
									  <a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="120" height="89" /></a></span></span></td>
									  <?php } ?>
								  </tr>
								</table></TD>
							  <TD id=demo2 vAlign=top>&nbsp;</TD>
							</TR>
						  </TBODY>
						</TABLE>
					  </DIV>
						<script language=JavaScript src="js/scrollpic.js"></script>
					</div>
					<span class="an1" style="cursor: pointer;z-index:999;" onClick="r_right1()"><img src="templates/default/images/index_11.jpg" /></span></div>
				</div>
				<div class="xbnr_right">
					<div class="new">
						<span class="new_title">最新消息</span>
						<div class="new_list">
							<ul>
								<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(14,4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
								<li><a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">·<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a></li>
								<?php } ?>
							</ul>
						</div>
						<span class="new_more"><A href="news.php?cid=14">查看更多>></A></span>
					</div>
					<div class="tp">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(31,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<span class="tl"><?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>
</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--  header  结束  --> 

<!--  body  开始  -->
<div class="body">
	<div class="top">
		<div class="qg">
			<div class="qg_title"><span class="qg_bt">精品推荐</span>
				<div class="qg_link">
					<table width="576" border="0" >
						<tr>
							<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('436',5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
								<td width="104" align="center" valign="middle" class="qg_link1">
								<a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
								</td>
							<?php } ?>
						</tr>
					</table>
				</div>
				<div class="qg_list">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetGoods(0,8,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li class="handout" onmousemove="this.className='handon'" onmouseout="this.className='handout'"><span class="tl"><a href="item_show.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="xsqg"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="162" height="131" /></a></span><span class="qg_wz"><span class="qq_wz02"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span> <span class="color3">抢购价：</span><span class="color2">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</span></span></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!--品牌推荐-->      
		<div class="link">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = get_brand(0,14); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" width="90" height="28" /></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<!-- 楼层开始-->
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType(428,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<div class="floor">
	
		<div class="floor_title<?php if ($_smarty_tpl->tpl_vars['i']->value!=0){?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php }?>">
			<div class="floor_link">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['list1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list1']->_loop = false;
 $_from = GetGoodsType($_smarty_tpl->tpl_vars['list']->value['id'],5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list1']->key => $_smarty_tpl->tpl_vars['list1']->value){
$_smarty_tpl->tpl_vars['list1']->_loop = true;
?>
					<li><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list1']->value['classname'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
F<?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>

		</div>
		
		<div class="floor_bottom">
			<div class="floor_left">
				<div class="floor_wz"><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
>></a></div>
				<ul>
					<?php ob_start();?><?php echo 33+$_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp1=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['list_article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_article']->_loop = false;
 $_from = GetArticle_list($_tmp1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_article']->key => $_smarty_tpl->tpl_vars['list_article']->value){
$_smarty_tpl->tpl_vars['list_article']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['list_article']->value['content'];?>
</li>
					<?php } ?>
				</ul>
			</div>
			
			<div class="floor_list">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['goodslist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodslist']->_loop = false;
 $_from = GetGoods($_smarty_tpl->tpl_vars['list']->value['id'],3,8); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodslist']->key => $_smarty_tpl->tpl_vars['goodslist']->value){
$_smarty_tpl->tpl_vars['goodslist']->_loop = true;
?>
					<li class="handout01" onmousemove="this.className='handon01'" onmouseout="this.className='handout01'"><span class="floor_tp"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['classid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['picurl'];?>
" width="181" height="146" /></a></span><span class="floor_wz1"><span class="floor_wz102"><?php echo $_smarty_tpl->tpl_vars['goodslist']->value['title'];?>
</span>
					<strong class="color4">￥<?php echo $_smarty_tpl->tpl_vars['goodslist']->value['price'];?>
</strong></span></li>
					<?php } ?>
				</ul>
			</div>
			
			<div class="floor_right">
				<div class="floor_tp1"></div>
				<div class="floor_right_list">
					<ul>
						<?php ob_start();?><?php echo 38+$_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list($_tmp2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>
</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- 楼层结束-->
</div>
<!--  body  结束  --> 
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>