<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 14:03:11
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goods_com.html" */ ?>
<?php /*%%SmartyHeaderCode:204685ae16b9f4bb808-69886194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e6f9caa8dabb33505254bad31428985964ed96' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goods_com.html',
      1 => 1451529039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204685ae16b9f4bb808-69886194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'keyword' => 0,
    'class_info' => 0,
    'list' => 0,
    'classid' => 0,
    'nav' => 0,
    'info' => 0,
    'from' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae16b9f5b19b2_02393271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae16b9f5b19b2_02393271')) {function content_5ae16b9f5b19b2_02393271($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
?><div class="pro_xx">
			<div class="tl">
				
				<span class="pro_tbl1">
					<a href="javascript:;" onclick="return ConfDelAll('form');">
						<img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['com_goods_del'];?>

					</a>
				</span>
			
			</div>
			<div class="tr">
				<a href="javascript:Upselect('goods.php','list')" class="tr">
					<img src="templates/default/images/pro_7.jpg" />
				</a>
				<input type="text" name="keyword" id="keyword" class="pro_text v5-input in180" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
				<select class="pro_text1 v5-select" name="classid" id="classid">
					<option value="">--</option>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
						<?php if ($_smarty_tpl->tpl_vars['classid']->value){?>
							<?php if ($_smarty_tpl->tpl_vars['classid']->value==$_smarty_tpl->tpl_vars['list']->value['id']){?>
							selected="selected"
							<?php }?>
						<?php }?>><?php if ($_smarty_tpl->tpl_vars['list']->value['str']){?>|-<?php echo $_smarty_tpl->tpl_vars['list']->value['str'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
					<?php } ?>
				</select>
				<input type="hidden" name="nav" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
" id="nav"/>
				<span class="pro_wz1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
:</span>
			</div>
		</div>
		
		<div class="pro_bt1">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr align="center">
					<td width="5%" height="30"  valign="middle" class="pro_rb">
						<span class="tl">
							 &nbsp; <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
						</span>
						<a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
					</td>
					<td width="4%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
					<td width="11%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['com_tit'];?>

					<td width="10%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['con_username'];?>
</td>
					<td width="22%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>

					</td>
					<td width="4%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
</td>
					<td width="14%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['salesprice'];?>
</td>
					<td width="5%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['show'];?>
</td>
					<td width="7%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['com_reply'];?>
</td>
					<td width="10%"  valign="middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['com_posttime'];?>
</td>
				</tr>
			</table>
		</div>
	</div>
	
	<div style="height:149px;"></div>
	<div class="pro_nr">
		<div class="pro_bottom">
			<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				 <tr class="pro_bt2" align="center">
					<td width="6%" height="35" align="center" valign="middle" class="pro_tbr">
						<span class="tl">
							&nbsp; <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
						</span>
						<a href="#"><img src="templates/default/images/pro_9.jpg" /></a>
					</td>
					<td width="4%"  valign="middle" class="pro_tbr">
						<a href="javascript:;" onclick="return ConfDel('goods.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&sign=com&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><img src="templates/default/images/pro_12.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
" /></a>
					</td>
					<td width="11%"  valign="middle" class="pro_tbr" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
					&nbsp;<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['title'],30,"...",true);?>

					</td>
					<td width="10%" valign="middle" class="pro_tbr">
					&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>

					</td>
					<td width="22%"  valign="middle" class="pro_tbr" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">&nbsp;<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['g_title'],30,"...",true);?>

					</td>
					<td width="4%"  valign="middle" class="pro_tbr">
						&nbsp;<img src="templates/default/images/pro_13.jpg" alt="/<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" class="tip" />
					</td>
					
					<td width="14%"  valign="middle" class="pro_tbr">&nbsp;￥<?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</td>
					<td width="5%"  valign="middle" class="pro_tbr">
					&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['list']->value['isshow']==1){?>
					<a href="javascript:;" onclick="return Confcom_n('goods.php?act=edit_com_sta&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&sign=0&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
					<font color="green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</font>
					</a>
					<?php }else{ ?>
					<a href="javascript:;" 
					onclick="return Confcom_y('goods.php?act=edit_com_sta&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&sign=1&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</font>
					</a>
					<?php }?>
					</td>
					<td width="7%"  valign="middle" class="pro_tbr">
					&nbsp;
					<a href="javascript:DialogIframe('goods.php?act=com_edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['com_edit'];?>
','80%','95%','','','','dosubmit');">
					<?php if ($_smarty_tpl->tpl_vars['list']->value['reply']!=''){?>
					<font color="green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['see'];?>
</font>
					<?php }else{ ?>				
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['reply'];?>
</font>
					<?php }?>
					</a>
					</td>
					<td width="10%"  valign="middle" class="pro_tbr">&nbsp;
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['posttime'],'%Y/%m/%d %H:%M:%S');?>
</td>
				</tr>  
				<?php } ?>
			
			</table>
			<?php }else{ ?>
		  <div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
			<?php }?>
			<div class="footheight"></div>
		</div>
		<div class="pro_bot" id="footer">
			<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

		</div><?php }} ?>