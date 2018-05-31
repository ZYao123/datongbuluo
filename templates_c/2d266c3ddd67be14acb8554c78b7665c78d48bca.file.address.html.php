<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:39:07
         compiled from "F:\WWW\shopx\m\templates\web\address.html" */ ?>
<?php /*%%SmartyHeaderCode:2063559f1ad3bc2b8e5-12997775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d266c3ddd67be14acb8554c78b7665c78d48bca' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\address.html',
      1 => 1459836699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063559f1ad3bc2b8e5-12997775',
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
    'addr' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1ad3bceaf95_47567432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1ad3bceaf95_47567432')) {function content_59f1ad3bceaf95_47567432($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../js/scrollto.js"></script>
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
</head>

<body style="max-width:640px;margin:0 auto;background:#f7f7f7;">

<!--头部 开始-->
<header class="m_pro_title" style="background:#fff;">
  <div class="m_icon1"></div>
  <div class="m_icon2" style="width:50px; line-height:5px; font-size:15px;"><a href="member.php?act=address_add" >添加</a></div>
  <div class="m_pro_t"></div>
  收货地址</header>
<!--头部 结束--> 
<!--内容 开始-->
<section class="innerContent">
	<section id="address">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['addr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
		<div class="area-box address-area">	
			<ul class="addr-list">	  	
				<li>
					<span class="mobile">
						<?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['phone']){?>
						<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['phone'];?>

						<?php }else{ ?>
						&nbsp;
						<?php }?>
					</span>
					<span class="name ">
					<?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['rec_name']){?>
					<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['rec_name'];?>

					<?php }else{ ?>
					&nbsp;
					<?php }?>
					</span>
				</li>		
				<li class="dt-addr">
				<?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['road_address']){?>
				<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['road_address'];?>

				<?php }else{ ?>
				&nbsp;
				<?php }?>
				</li>		
				<li class="dt-addr">
				<?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cur_address']){?>
				<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cur_address'];?>

				<?php }else{ ?>
				&nbsp;
				<?php }?>
				</li>		
				<li class="postCode">
				<?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['zipcode']){?>
				<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['zipcode'];?>

				<?php }else{ ?>
				&nbsp;
				<?php }?>
				</li>		
				<li class="action-itm">
					<?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_first']==1){?>
					<a href="javascript:;" data-id="23a8c207cf87ce97fda102680eecab71" class="default">默认地址</a>			
					<?php }else{ ?>
					<a href="member.php?act=is_first&id=<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" data-id="876500a40b529ea337303de660cd9ec0" class="setDefaultBtn">设置默认</a>
					<?php }?>			
					<a class="s_icons delete" data-id="876500a40b529ea337303de660cd9ec0" href="member.php?act=address_delete&id=<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" onclick="return confirm('确定删除该收货地址？')">
					删除
					</a>			
					<a href="member.php?act=address_update&id=<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" data-id="876500a40b529ea337303de660cd9ec0" class="s_icons edit">
					编辑
					</a>			
				</li>	
			</ul>	
			<a class="edit" href="javascript:;"></a>
		</div>
		<?php endfor; endif; ?>
	</section>
	<div class="cl"></div>
	<div class="s_page"  ><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</section> 
<!--内容 结束--> 
<!--底部 开始--> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--底部 结束-->

</body>
</html><?php }} ?>