<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:19
         compiled from "F:\WWW\shopx\m\templates\web\inc\type.html" */ ?>
<?php /*%%SmartyHeaderCode:1721959f1a54fddd311-55404205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f10d70099386fe7937c95e685efcfbdd5ed557c' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\inc\\type.html',
      1 => 1448326852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721959f1a54fddd311-55404205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a54fe0ffa8_51707661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a54fe0ffa8_51707661')) {function content_59f1a54fe0ffa8_51707661($_smarty_tpl) {?><div id="ceng2" style="display:none; width:100%; height:100%;z-index:100;position:absolute; top:0;  right:0; bottom:0;">
	<div id="close2" style="width:55%; background:#444;height:100%; float:left; background-color:rgba(0, 0, 0, 0.5)">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
img/close.png" style="padding:15px;width:auto;cursor:pointer;" width="100%">
	</div>
	<div style="width:45%;background:#000;height:100%; float:left;opacity: 0.8;" class="s_type">
		<ul>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('428',10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
			<li><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></li>
		<?php } ?>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(e) {
	$("#tubiao2").bind("click",function (){
		$("#ceng2").toggle(500);
		$("#ceng2").css(document.body.scrollHeight);
		})
		$("#close2").bind("click",function (){
		$("#ceng2").toggle(500);
		
		})
	});	
</script>   <?php }} ?>