<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:42:22
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\shopconfig.html" */ ?>
<?php /*%%SmartyHeaderCode:294735ae14a9e6be282-14875961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65fc2e02dc8a1ca8fdcef7788655b5ae855bdefb' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\shopconfig.html',
      1 => 1453972877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294735ae14a9e6be282-14875961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'config_tab_arr' => 0,
    'key' => 0,
    'list' => 0,
    'config_tab_num' => 0,
    'info' => 0,
    'info_select' => 0,
    'cfg_markswitch' => 0,
    'cfg_markminwidth' => 0,
    'cfg_markminheight' => 0,
    'cfg_marktype' => 0,
    'cfg_markpicurl' => 0,
    'cfg_marktext' => 0,
    'cfg_markcolor' => 0,
    'cfg_marksize' => 0,
    'cfg_markwhere' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae14a9e839165_88865765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae14a9e839165_88865765')) {function content_5ae14a9e839165_88865765($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['shop_set'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="templates/default/js/mgr.func.js"></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script src="templates/default/js/getuploadify.js"></script>
<script src="templates/default/js/getjcrop.js"></script>



</head>
<body style="padding:20px">
<div class="gray_header" style="margin:0;">
	<span class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['shop_set'];?>
</span>
</div>
<div class="gray_tabs">
	<ul id="tabs">
    	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_tab_arr']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
		<li id="tabs_title<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="tabs('tabs',this);" <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>class="on"<?php }?>><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</a></li><li class="line">-</li>	
		<?php } ?>
		<li id="tabs_title<?php echo $_smarty_tpl->tpl_vars['config_tab_num']->value;?>
" onclick="tabs('tabs',this);"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['watermark'];?>
</a></li>
		<li class="line">-</li>
		<li id="tabs_title<?php echo $_smarty_tpl->tpl_vars['config_tab_num']->value+1;?>
" onclick="tabs('tabs',this);"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_set'];?>
</a></li>
	</ul>
</div>
<!--cfg_var-->
<form name="form_cfg_var" method="post" action="">
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_tab_arr']->value['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<div class="<?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?>undis<?php }?>" id="tabs_content<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
		<!--使用DIV兼容chrome firefox等浏览器-->
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['info']->value['varinfo'];?>
：</td>
				<td width="40%" class="pro_tbr">
                <?php if ($_smarty_tpl->tpl_vars['info']->value['vartype']=='string'){?>
                
                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['varvalue'];?>
"  class="v5-input in180"/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['vartype']=='number'){?>
                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['varvalue'];?>
"  class="v5-input in180"/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['vartype']=='bool'){?>
                <input name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" type="radio" value="Y"<?php if ($_smarty_tpl->tpl_vars['info']->value['varvalue']=='Y'){?> checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                <input name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" type="radio" value="N"<?php if ($_smarty_tpl->tpl_vars['info']->value['varvalue']=='N'){?> checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['vartype']=='bstring'){?>
                <textarea name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" class="v5-textarea tin60 w360" style="margin:5px auto"><?php echo $_smarty_tpl->tpl_vars['info']->value['varvalue'];?>
</textarea>
                <?php }?>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['vartype']=='upload'){?>
                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['varvalue'];?>
"  class="v5-input in180"/>
                <span class="cnote">
                    <span class="gray_btn" onclick="GetUploadify('uploadify','<?php echo $_smarty_tpl->tpl_vars['lang']->value['thumupload'];?>
','image','image',1,20000000,'<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uploadpic'];?>
</span>
                    <span class="reimg">
                        <input type="checkbox" name="rempic" id="rempic" value="true" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['remote'];?>

                    </span> 
                    <span class="cutimg">
                        <a href="javascript:;" onclick="GetJcrop('jcrop','picurl');return false;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tailor'];?>
</a>
                    </span>
                </span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['vartype']=='select'){?>
                <select name="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
" class="v5-select">
					<?php  $_smarty_tpl->tpl_vars['info_select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['varoption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_select']->key => $_smarty_tpl->tpl_vars['info_select']->value){
$_smarty_tpl->tpl_vars['info_select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info_select']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['varvalue']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['info_select']->value;?>
</option>
					<?php } ?>
                </select>
                <?php }?>
               <br /><?php echo $_smarty_tpl->tpl_vars['info']->value['varcontent'];?>

				</td>
				<td width="35%" class="pro_tbr"><span class="cnote conftag">$<?php echo $_smarty_tpl->tpl_vars['info']->value['varname'];?>
</span></td>
			</tr>
            <?php } ?>
			<tr>
				<td colspan="3" ><div class="subbtn_area">
						<input type="submit" class="blue_submit_btn" value="" />
						<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
						<input name="act" type="hidden" id="act" value="update" />
					</div></td>
			</tr>
		</table>
	</div>
    <?php } ?>
</form>
<!--/cfg_var end-->
<!--setwatermark-->
<form name="form_watermark" method="post" action="">
	<div class="undis" id="tabs_content<?php echo $_smarty_tpl->tpl_vars['config_tab_num']->value;?>
">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['markswitch'];?>
：</td>
				<td width="75%" class="pro_tbr"><input type="radio" name="markswitch" id="markswitch" value="Y" <?php if ($_smarty_tpl->tpl_vars['cfg_markswitch']->value=='Y'){?> checked="checked"<?php }?>/>
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
 &nbsp;
					<input type="radio" name="markswitch" id="markswitch" value="N" <?php if ($_smarty_tpl->tpl_vars['cfg_markswitch']->value=='N'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</td>
			</tr>
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['markmin'];?>
：</td>
				<td width="75%" class="pro_tbr">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['markminwidth'];?>
&nbsp;<input type="text" name="markminwidth" id="markminwidth" value="<?php echo $_smarty_tpl->tpl_vars['cfg_markminwidth']->value;?>
" class="v5-input in60" /> px&nbsp;&nbsp;
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['markminheight'];?>
&nbsp;<input type="text" name="markminheight" id="markminheight" value="<?php echo $_smarty_tpl->tpl_vars['cfg_markminheight']->value;?>
"  class="v5-input in60" /> px
					</td>
			</tr>
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['marktype'];?>
：</td>
				<td width="75%" class="pro_tbr">
                <input name="marktype" type="radio" id="marktype" value="0" onclick="document.getElementById('watermarkimgarea').style.display='block';document.getElementById('watermarktextarea').style.display='none';" <?php if ($_smarty_tpl->tpl_vars['cfg_marktype']->value=='0'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['marktype_pic'];?>
 &nbsp;
					<input type="radio" name="marktype" id="marktype" value="1" onclick="document.getElementById('watermarkimgarea').style.display='none';document.getElementById('watermarktextarea').style.display='block';" <?php if ($_smarty_tpl->tpl_vars['cfg_marktype']->value=='1'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['marktype_size'];?>
</td>
			</tr>
			<tr>
				<td height="35" colspan="2"><div id="watermarkimgarea" <?php if ($_smarty_tpl->tpl_vars['cfg_marktype']->value=='0'){?>style="display:block"<?php }else{ ?>style="display:none"<?php }?>>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['watermark_prew'];?>
：</td>
								<td width="75%" class="pro_tbr"><img src="../<?php echo $_smarty_tpl->tpl_vars['cfg_markpicurl']->value;?>
" id="watermark_prew" />
									<input name="markpicurl" type="hidden" id="markpicurl" value="<?php echo $_smarty_tpl->tpl_vars['cfg_markpicurl']->value;?>
" /></td>
							</tr>
							<tr >
								<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_watermark'];?>
：</td>
								<td class="pro_tbr"><iframe style="top:2px" src="upload_watermark.php" frameborder="0" scrolling="no" width="100%" height="22"></iframe></td>
							</tr>
						</table>
					</div>
					<div id="watermarktextarea" <?php if ($_smarty_tpl->tpl_vars['cfg_marktype']->value=='1'){?> style="display:block"<?php }else{ ?> style="display:none"<?php }?>>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['marktext'];?>
：</td>
								<td width="75%" class="pro_tbr">
                                <input name="marktext" type="text" id="marktext" value="<?php echo $_smarty_tpl->tpl_vars['cfg_marktext']->value;?>
" style="color:<?php echo $_smarty_tpl->tpl_vars['cfg_markcolor']->value;?>
" class="v5-input in180" /></td>
							</tr>
							<tr>
								<td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['markcolor'];?>
：</td>
								<td><input name="markcolor" type="text" id="markcolor"  value="<?php echo $_smarty_tpl->tpl_vars['cfg_markcolor']->value;?>
" class="v5-input in180" />
									&nbsp;
									<div class="title_panel">
										<div onclick="colorpicker('colorpanel','markcolor','marktext');" class="color_ico"><span id="colorpanel"></span></div>
									</div></td>
							</tr>
							<tr >
								<td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['marksize'];?>
：</td>
								<td><input name="marksize" type="text" id="marksize"  value="<?php echo $_smarty_tpl->tpl_vars['cfg_marksize']->value;?>
"  class="v5-input in180"/></td>
							</tr>
						</table>
					</div></td>
			</tr>
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere'];?>
：</td>
				<td width="75%" class="pro_tbr"><input type="radio" name="markwhere" id="markwhere" value="1" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='1'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_1'];?>

					&nbsp;
					<input type="radio" name="markwhere" id="markwhere" value="2" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='2'){?> checked="checked"<?php }?>/>
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_2'];?>

					&nbsp;
					<input type="radio" name="markwhere" id="markwhere" value="3" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='3'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_3'];?>
</td>
			</tr>
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr">&nbsp;</td>
				<td width="75%" class="pro_tbr"><input type="radio" name="markwhere" id="markwhere" value="4" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='4'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_4'];?>

					&nbsp;
					<input type="radio" name="markwhere" id="markwhere" value="5" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='5'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_5'];?>

					&nbsp;
					<input type="radio" name="markwhere" id="markwhere" value="6" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='6'){?> checked="checked"<?php }?>/>
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_6'];?>
</td>
			</tr>
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr">&nbsp;</td>
				<td width="75%" class="pro_tbr"><input type="radio" name="markwhere" id="markwhere" value="7" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='7'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_7'];?>

					&nbsp;
					<input type="radio" name="markwhere" id="markwhere" value="8" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='8'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_8'];?>

					&nbsp;
					<input name="markwhere" type="radio" id="markwhere" value="9" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='9'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_9'];?>
</td>
			</tr>
			<tr >
				<td width="25%" height="35" align="right" class="pro_tbr">&nbsp;</td>
				<td width="75%" class="pro_tbr"><input type="radio" name="markwhere" id="markwhere" value="0" <?php if ($_smarty_tpl->tpl_vars['cfg_markwhere']->value=='0'){?> checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['markwhere_0'];?>
</td>
			</tr>
			<tr >
				<td colspan="2"><div class="subbtn_area">
						<input type="submit" class="blue_submit_btn" value="" />
						<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
						<input name="act" type="hidden" id="act" value="update_wmk" />
					</div></td>
			</tr>
		</table>
	</div>
</form>
<!--/setwatermark end-->
<!--addvarname-->
<form name="form_addvarname" method="post" action="">
  <div class="undis" id="tabs_content<?php echo $_smarty_tpl->tpl_vars['config_tab_num']->value+1;?>
">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="25%" height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['varname'];?>
：</td>
				<td width="75%" class="pro_tbr"><input type="text" name="varname" id="varname" value="" class="v5-input in180" />
					<span class="maroon">*</span></td>
			</tr>
			<tr>
				<td height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['varinfo'];?>
：</td>
				<td class="pro_tbr"><input type="text" name="varinfo" id="varinfo" value="" class="v5-input in180" />
					<span class="maroon">*</span></td>
			</tr>
			<tr>
				<td height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['varcontent'];?>
：</td>
				<td class="pro_tbr"><input type="text" name="varcontent" id="varcontent" value=""  class="v5-input in180" /></td>
			</tr>
            <tr>
				<td height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['varvalue'];?>
：</td>
				<td class="pro_tbr"><input type="text" name="varvalue" id="varvalue" value=""  class="v5-input in180" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['varvalue_tips'];?>
</td>
			</tr>
			<tr>
				<td height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['vartype'];?>
：</td>
				<td class="pro_tbr">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang']->value['vartype_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                	<input type="radio" name="vartype" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value=='string'){?> checked="checked" <?php }?>/>
					<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
&nbsp;
				<?php } ?>
				</td>
			</tr>
			<tr >
				<td height="35" align="right" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['lang']->value['vargroup'];?>
：</td>
				<td class="pro_tbr"><select name="vargroup" class="v5-select">
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_tab_arr']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</option>
					<?php } ?>
                    </select>
                    </td>
			</tr>
			<tr >
				<td colspan="2"><div class="subbtn_area">
						<input type="submit" class="blue_submit_btn" value="" />
						<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
						<input type="hidden" name="act"  id="act" value="add" />
					</div></td>
			</tr>
		</table>
	</div>
</form>
<!--/addvarname end-->
</body>
</html><?php }} ?>