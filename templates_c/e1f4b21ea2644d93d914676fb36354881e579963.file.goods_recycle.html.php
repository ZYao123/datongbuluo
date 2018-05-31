<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 14:48:52
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goods_recycle.html" */ ?>
<?php /*%%SmartyHeaderCode:250255ae17654d1b474-47609061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f4b21ea2644d93d914676fb36354881e579963' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goods_recycle.html',
      1 => 1451525406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250255ae17654d1b474-47609061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'from' => 0,
    'total' => 0,
    'keyword' => 0,
    'class_info' => 0,
    'classid' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae17654e09931_50270638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae17654e09931_50270638')) {function content_5ae17654e09931_50270638($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_recycle'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
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
<body>
<div class="ml">
<form action="" method="post" id="form" name="form">
	<input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
    <input name="act" id="act" type="hidden" value="recycledel" />
    <div id="header" class="pro_nr">
   		<span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>
        <div class="pro_nr">
        	<div class="pro_top">
                <ul>
                    <li><A class="on"><?php echo $_smarty_tpl->tpl_vars['lang']->value['total'];?>
(<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
)</A></li>
                </ul>
            </div>
            <div class="pro_xx">
                <div class="tl">
                    <span class="pro_tbl1">
                        <a href="javascript:;" onclick="return ConfDelAll('form');">
                        	<img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_del'];?>

                        </a>
                    </span>
                    
           		</div>
                <div class="tr">
                    <a href="javascript:Upselect('goods.php','recycle')" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                    <input type="text" name="keyword" id="keyword" class="pro_text v5-input in180" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
                    <select class="pro_text1 v5-select" name="classid">
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
                    <span class="pro_wz1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
:</span>
                </div>
             </div>
        </div>
        
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="5%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">
                             &nbsp; <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['view'];?>
</td>
                    <td width="4%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="22%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>

</td>
                    <td width="4%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
</td>
                    <td width="14%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['salesprice'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['payfreight'];?>
</td>
                    <td width="8%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
                    <td width="7%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['housenum'];?>
</td>
                    <td width="18%" align="left" valign="middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    
    <div style="height:160px;"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
        	<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                 <tr>
                    <td width="6%" height="35" align="center" valign="middle" class="pro_tbr">
                        <span class="tl">
                            &nbsp; <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span>
                        <a href="#"><img src="templates/default/images/pro_9.jpg" /></a>
                    </td>
                    <td width="7%" align="left" valign="middle" class="pro_tbr">
                        <img src="templates/default/images/pro_10.jpg" />
                    </td>
                    <td width="4%" align="center" valign="middle" class="pro_tbr">
                        <a href="goods.php?act=recycleedit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
">	
                            <img src="templates/default/images/pro_11.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_restore'];?>
" />
                        </a>
                        <a href="javascript:;" onclick="return ConfDel('goods.php?act=recycledel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
                            <img src="templates/default/images/pro_12.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
" />
                        </a>
                    
                    </td>
                    <td width="22%" align="left" valign="middle" class="pro_tbr" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">&nbsp;<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['title'],30,"...",true);?>

</td>
                    <td width="4%" align="left" valign="middle" class="pro_tbr">
                        &nbsp;<img src="templates/default/images/pro_13.jpg" alt="/<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" class="tip" />
                    </td>
                    
                    <td width="14%" align="left" valign="middle" class="pro_tbr">&nbsp;￥<?php echo $_smarty_tpl->tpl_vars['list']->value['salesprice'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['payfreight']){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php }?></td>
                    <td width="8%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php }?></td>
                    <td width="7%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
</td>
                    <td width="18%" align="left" valign="middle" class="pro_tbr">&nbsp;
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['posttime'],'%Y/%m/%d %H:%M:%S');?>
</td>
                </tr>  
                <?php } ?>
            
            </table>
            <?php }else{ ?>
            	<div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
            <?php }?>
            <div style="height:41px;"></div>
        </div>
        <div class="pro_bot" id="footer">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        </div>
    </div>
</form>
</div>
</body>
</html>
<?php }} ?>