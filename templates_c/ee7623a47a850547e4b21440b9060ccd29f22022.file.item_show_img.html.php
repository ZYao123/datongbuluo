<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:48
         compiled from "F:\WWW\shopx\m\templates\web\item_show_img.html" */ ?>
<?php /*%%SmartyHeaderCode:1471759f1a56c55fdc6-25364438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee7623a47a850547e4b21440b9060ccd29f22022' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\item_show_img.html',
      1 => 1448326866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471759f1a56c55fdc6-25364438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
    'info' => 0,
    'pic' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a56c586ed0_78150583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a56c586ed0_78150583')) {function content_59f1a56c586ed0_78150583($_smarty_tpl) {?><!--商品多图-->
<link href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
style/banner.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/script.js"></script>
<div class="pro_title">
<div class="pro_pic">
	
    <?php if ($_smarty_tpl->tpl_vars['info']->value['picarr']){?>
    <div class="box" id="Banner">
	  <ul class="touchslider-viewport">
		<?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['picarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value){
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>
	   
		<li class="touchslider-item"> 
				<img src="../<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" width="100%" />
		 </li>
		<?php } ?>
		<div style="clear:both"></div>
	  </ul>
	  <div class="touchslider-nav"> 
	  <div class="sonpic"> 
	  <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['picarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value){
$_smarty_tpl->tpl_vars['pic']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pic']->key;
?>
	  <a class="touchslider-nav-item <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>touchslider-nav-item-current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</a> 
	  <?php } ?>
	  </div>
	 </div>
</div>

    <?php }else{ ?>
    <a href="../<?php echo $_smarty_tpl->tpl_vars['info']->value['phone_picurl'];?>
"><img src="../<?php echo $_smarty_tpl->tpl_vars['info']->value['phone_picurl'];?>
" width="100%" /></a>
    <?php }?>
</div>




<script type="text/javascript">
$(function(){

  $("#Banner").touchSlider({mouseTouch:true,autoplay:true});

  var b_width=$(window).width();

  if(b_width>640){

	b_width=640;

	}

  $("#Banner>ul>li>img").width(b_width);

  var b_height=(817*b_width)/1200;

  $(".touchslider-viewport").height(b_height);

  $(".touchslider-item").height(b_height);

  $(".touchslider-item>img").height(b_height);

  })
</script>

<?php }} ?>