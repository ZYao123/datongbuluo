<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:20
         compiled from "F:\WWW\shopx\m\templates\web\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:3148159f1a550039076-67116298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd96fd1451e964448058e89666ec66a043410a27' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\footer.html',
      1 => 1448326858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3148159f1a550039076-67116298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
    'arrtype1' => 0,
    'arrtype2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a550067e89_12928467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a550067e89_12928467')) {function content_59f1a550067e89_12928467($_smarty_tpl) {?><style>
.bjb_s{
    width: 20px;
    height: 20px;
    color: #fff;
    line-height: 20px;
    text-align: center;
    position: absolute;
    left: 52px;
    top: -7px;
    background: #E22E2F;
    font-size: 12px;
    border-radius: 50px;
}
</style>
<div id="dialog" class="layer" style="display:none">
	<div class="layer-bg" style="background: rgba(0, 0, 0, 0);"></div>
	<div id="dialogInner" class="layer-main" style="left: 0%; top: 45%; width: auto; height: auto;">	
		<div class="tip-loadding">
			<span class="txt" id="dialog_ext"></span>
		</div>
	</div>
</div>
<div style="height:70px;"></div>
<footer class="footer">
  <ul>
    <li><a href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon11.png"><br>
      首页</a></li><?php $_smarty_tpl->tpl_vars['arrtype1'] = new Smarty_variable(GetArticle_show(0,'40'), null, 0);?>
    <li><a href="sms:<?php echo $_smarty_tpl->tpl_vars['arrtype1']->value['keywords'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon12.png"><br>
      一键短信</a></li>
      <?php $_smarty_tpl->tpl_vars['arrtype2'] = new Smarty_variable(GetArticle_show(0,39), null, 0);?>
    <li><a href="tel:<?php echo $_smarty_tpl->tpl_vars['arrtype2']->value['keywords'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon13.png"><br>
      一键拨号</a></li>
    <li style="position:relative"><a href="shopcart.php?act=list"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon14.png"><br>
      <div class="bjb_s" id="gmnums" <?php if (shopcartnums()<=0){?>style="display:none"<?php }?> ><?php echo shopcartnums();?>
</div>购物车</a></li>
    <li><a href="member.php?act=default"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon15.png"><br>
      会员中心</a></li>
    <div class="cl"></div>
  </ul>
</footer>
<div class="top"><a href="#top"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/top.jpg"></a></div>

<?php }} ?>