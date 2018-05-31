<?php /* Smarty version Smarty-3.1.14, created on 2017-11-19 11:16:31
         compiled from "F:\WWW\shopx\m\templates\web\address_update.html" */ ?>
<?php /*%%SmartyHeaderCode:84855a10f78f1f08b1-59453529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb9b0b28d041e56fb626e7730dd3fc17ee5d9bd' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\address_update.html',
      1 => 1448326858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84855a10f78f1f08b1-59453529',
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
    'row_add_up' => 0,
    'lang' => 0,
    'TemAddressIDS' => 0,
    'TemAddressID' => 0,
    'fromurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a10f78f5829b7_17220529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a10f78f5829b7_17220529')) {function content_5a10f78f5829b7_17220529($_smarty_tpl) {?><!doctype html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="../js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="../js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="../js/checkform.js" type="text/javascript" charset="UTF-8"></script>
<style>
input:-moz-placeholder,
textarea:-moz-placeholder {
	color: #9c9c9c;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
	color: #9c9c9c;
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
	color: #9c9c9c;
}
</style>
<script type="text/javascript">
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
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
  <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</header>
<!--头部 结束--> 
<!--内容 开始-->
<section class="innerContent">			
	<form action="member.php" id="form1" method="post" onsubmit="return checkaddr_m()">
		<div class="add-addr">
			<div class="add-itm">
				<label for="">收货人：</label>
				<div class="input">
					<input name="rec_name" id="rec_name" class="rq" placeholder="请填写收货人姓名" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row_add_up']->value['rec_name'];?>
">
				</div>
			</div>
			<div class="add-itm">
				<label for="">手机号码：</label>
				<div class="input">
					<input name="phone" id="phone" class="rq" placeholder="请填写11位手机号码" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row_add_up']->value['phone'];?>
"> 
				</div>
			</div>
			<div class="add-itm">
				<label for="province">选择国家：</label>
				<div class="select">
					<select name="AddrCountry" class="rq" id="AddrCountry" onchange="do_area('AddrCountry','AddrProvince','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrProvince'];?>
')" class="in100 sf_b">
						<option value="">请选择</option>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[1]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
						<?php } ?>     
					</select>
				</div>
			</div>
			<div class="add-itm">
				<label for="province">选择省份：</label>
				<div class="select">
					<select name="AddrProvince" class="rq" id="AddrProvince" onchange="do_area('AddrProvince','AddrCity','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCity'];?>
')">
						<option value="">选择省</option>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[2]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
						<?php } ?>     
					</select>
				</div>
			</div>
			<div class="add-itm">
				<label for="area">选择城市：</label>
				<div class="select">
					<select class="rq" name="AddrCity" id="AddrCity" onchange="do_area('AddrCity','AddrArea','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrArea'];?>
')">
						<option value="">请选择城市</option>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[3]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
						<?php } ?>          											
					</select>
				</div>
			</div>
			<div class="add-itm">
				<label for="city">选择区/县：</label>
				<div class="select">
					<select class="rq" name="AddrArea" id="AddrArea">	
						<option value="">请选择区/县</option>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[4]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
						<?php } ?>       										
					</select>
				</div>
			</div>	
			<div class="add-itm">
				<label for="">邮政编码：</label>
				<div class="input">
				<input name="zipcode" id="zipcode" class="rq" placeholder="请填写邮政编码" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row_add_up']->value['zipcode'];?>
">
				</div>
			</div>			
			<div class="add-itm">
				<label for="det-addr-ipt">详细地址：</label>
				<div class="input">
				<textarea class="rq" placeholder="请填详细地址" name="cur_address" id="cur_address" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['row_add_up']->value['cur_address'];?>
</textarea>
				</div>
			</div>
		</div>			
			<div class="btn-area">
				<input type="submit" class="ui-btn orange-btn" value="保存">
			</div>		
		<input name="act" type="hidden" id="act" value="addr_update" />
		<input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row_add_up']->value['id'];?>
" />
		<input name="uri" type="hidden" id="uri" value="<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
" />
	</form>		
</section>
<!--内容 结束--> 
<!--底部 开始--> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--底部 结束-->

</body>
</html><?php }} ?>