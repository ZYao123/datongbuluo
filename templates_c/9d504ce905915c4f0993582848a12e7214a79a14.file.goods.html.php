<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:42:24
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\goods.html" */ ?>
<?php /*%%SmartyHeaderCode:165465ae14aa06801a8-63029790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d504ce905915c4f0993582848a12e7214a79a14' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\goods.html',
      1 => 1461899245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165465ae14aa06801a8-63029790',
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
    'nav' => 0,
    'goodsnav' => 0,
    'buie' => 0,
    'keyword' => 0,
    'class_info' => 0,
    'classid' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae14aa0860994_06593124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae14aa0860994_06593124')) {function content_5ae14aa0860994_06593124($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_list'];?>
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
<form action="" method="post" id="form" name="form">
	<input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
    <input type="hidden" name="act" id="act" value="subdel" />
    <?php if ($_smarty_tpl->tpl_vars['nav']->value=="com"){?>
    <input type="hidden" name="sign" id="sign" value="com" />
    <?php }?>
    <div id="header" class="pro_nr">
   		<span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>
        <div class="pro_top">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsnav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                <li><A href="goods.php?act=list&nav=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&buie=<?php echo $_smarty_tpl->tpl_vars['buie']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['nav']->value){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value[$_smarty_tpl->tpl_vars['k']->value];?>
(<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
)</A></li>
            <?php } ?>
            </ul>
            <span class="pro_ck">
                <span class="pro_fk"></span>
                <span class="pro_fk_wz"><?php echo $_smarty_tpl->tpl_vars['lang']->value['oos'];?>
</span>
                <span class="pro_fks"></span>
                <span class="pro_fk_wz"><?php echo $_smarty_tpl->tpl_vars['lang']->value['warn'];?>
</span>
            </span>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['nav']->value=="com"||$_smarty_tpl->tpl_vars['nav']->value=="showcom"||$_smarty_tpl->tpl_vars['nav']->value=="hidecom"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("goods_com.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }else{ ?>
        <div class="pro_xx">
            <div class="tl">
                <span class="pro_tbl1">
                    <a href="javascript:DialogIframe('goods.php?act=add','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_add'];?>
','80%','95%','','','','dosubmit');">
                        <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_add'];?>

                    </a>  
                </span>
                <span class="pro_tbl1">
                    <a href="javascript:;" onclick="return ConfDelAll('form');">
                        <img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_del'];?>

                    </a>
                </span>
            </div>
            <div class="tr">
                <a href="javascript:Upselect('goods.php','list')" class="tr">
                    <img src="templates/default/images/pro_7.jpg" />
                </a>
                <select class="pro_text1 v5-select" name="buie" id="buie" style=" width:90px; margin-right:10px;">
                    <option value="">--</option>
                    <?php echo attrbuie($_smarty_tpl->tpl_vars['buie']->value);?>

                </select>
                 <span class="pro_wz1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['goodbute'];?>
:</span>
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
                    <td width="5%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">
                             &nbsp; <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="8%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['view'];?>
</td>
                    <td width="4%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>               
                    <td width="22%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>

</td>
                    <td width="4%" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
</td>
                    <td width="14%" valign="middle" class="pro_rb">
                    &nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['buyprice'];?>

                    </td>
                    <td width="14%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['salesprice'];?>
</td>
                    <td width="10%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['payfreight'];?>
</td>
                    <td width="4%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
                    <td width="7%"  valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['housenum'];?>
</td>
                    <td width="10%"  valign="middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
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
                    <td width="7%"  valign="middle" class="pro_tbr">
                        <img src="templates/default/images/pro_10.jpg" />
                    </td>
                    <td width="4%" align="center" valign="middle" class="pro_tbr">
                        <a href="javascript:DialogIframe('goods.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_edit'];?>
','80%','95%','','','','dosubmit');"><img src="templates/default/images/pro_11.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
" /></a>
                        <a href="javascript:;" onclick="return ConfDel('goods.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><img src="templates/default/images/pro_12.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
" /></a>
                    </td>
                    <td width="22%"  valign="middle" class="pro_tbr" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
">
                    &nbsp;<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['title'],30,"...",true);?>
             
                    </td>
                    <td width="4%"  valign="middle" class="pro_tbr">
                        &nbsp;<img src="templates/default/images/pro_13.jpg" alt="/<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" class="tip" />
                    </td> 
                     <td width="14%"  valign="middle" class="pro_tbr">
                     &nbsp;￥
                     <?php if ($_smarty_tpl->tpl_vars['list']->value['min_buyprice']==$_smarty_tpl->tpl_vars['list']->value['max_buyprice']){?>
                     <?php echo $_smarty_tpl->tpl_vars['list']->value['max_buyprice'];?>

                     <?php }else{ ?>
                     <?php echo $_smarty_tpl->tpl_vars['list']->value['min_buyprice'];?>
-￥<?php echo $_smarty_tpl->tpl_vars['list']->value['max_buyprice'];?>

                     <?php }?>
                     </td>
                    <td width="14%" valign="middle" class="pro_tbr">
                    &nbsp;￥
                     <?php if ($_smarty_tpl->tpl_vars['list']->value['min_price']==$_smarty_tpl->tpl_vars['list']->value['max_price']){?>
                     <?php echo $_smarty_tpl->tpl_vars['list']->value['max_price'];?>

                     <?php }else{ ?>
                     <?php echo $_smarty_tpl->tpl_vars['list']->value['min_price'];?>
-￥<?php echo $_smarty_tpl->tpl_vars['list']->value['max_price'];?>

                     <?php }?>
                    </td>
                    <td width="10%"  valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['payfreight']=='true'){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php }?></td>
                    <td width="4%"  valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']=='true'){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php }?></td>
                    <td width="7%"  valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['housenum'];?>
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

        </div>
    <?php }?>
    </div>
</form>
</body>
</html>
<?php }} ?>