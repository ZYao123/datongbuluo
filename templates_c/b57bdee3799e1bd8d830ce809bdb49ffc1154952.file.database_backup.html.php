<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:42:23
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\database_backup.html" */ ?>
<?php /*%%SmartyHeaderCode:184305ae14a9f23df80-75324372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b57bdee3799e1bd8d830ce809bdb49ffc1154952' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\database_backup.html',
      1 => 1448327042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184305ae14a9f23df80-75324372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'total_size' => 0,
    'info' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae14a9f2bee20_29789020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae14a9f2bee20_29789020')) {function content_5ae14a9f2bee20_29789020($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['db_backup'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script type="text/javascript" src="templates/default/js/db.func.js"></script>

<body>
<form action="?action=export" method="post" id="form" name="form">        
    <div class="pro_nr" id="header">
        <span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" 
            src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>       
        <div class="pro_xx">
            <div class="tl">
                <span class="pro_tbl1">
                	<a href="javascript:DialogIframe('database.php?act=repair'+tbname,'<?php echo $_smarty_tpl->tpl_vars['lang']->value['repair'];?>
','50%','50%','','NULL','NULL','dosubmit');">
                    <img src="templates/default/images/xf.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['repair'];?>
</a>
                </span>
                <span class="pro_tbl1">
                	<a href="javascript:DialogIframe('database.php?act=optimize'+tbname,'<?php echo $_smarty_tpl->tpl_vars['lang']->value['optimize'];?>
','50%','50%','','NULL','NULL','dosubmit');">
                    <img src="templates/default/images/yh.jpg" align="left" />&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['optimize'];?>
</a> 
                </span>
                <span class="pro_tbl1">
                <a href="javascript:DialogIframe('database.php?act=subbackup&isstruct='+isstruct+'&fsize='+fsize+tbname,'<?php echo $_smarty_tpl->tpl_vars['lang']->value['db_backup'];?>
','50%','50%','','NULL','NULL','dosubmit');">
                <img src="templates/default/images/bf.jpg" align="left" />&nbsp;
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['backup'];?>
</a>
                </span>
            </div>
            <div class="tr">
                 <?php echo $_smarty_tpl->tpl_vars['lang']->value['backup_structure'];?>
：
                  <input type="checkbox" name="isstruct" id="isstruct" value="1" checked="checked" />
                  <?php echo $_smarty_tpl->tpl_vars['lang']->value['volume_size'];?>
：
                  <input type="text" name="fsize" id="fsize" value="2048" size="5" class="v5-input in60" />
                  KB&nbsp;
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="5%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">&nbsp; <input type="checkbox" name="checkall" onclick="CheckAllBtn(form)" value="check" checked="checked" />&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['table_name'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['table_rows'];?>
</td>
                    <td width="20%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['table_size'];?>
[<?php echo $_smarty_tpl->tpl_vars['lang']->value['totalrow'];?>
<?php echo $_smarty_tpl->tpl_vars['total_size']->value;?>
]</td>
                    <td width="35%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="topheight"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <tr class="pro_bt2">
                    <td width="5%" height="35" align="left" valign="middle" class="pro_tbr">
                    	<span class="tl">&nbsp;
                        <input type="checkbox" name="tbname[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
" checked="checked" />
                        </span>
                        <a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a>
                    </td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr pro_l5">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 </td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr pro_l5">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['rows'];?>
 </td>
                    <td width="20%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['size'];?>
</td>
                    <td width="35%" align="left" valign="middle" class="pro_tbr">
                    <span>[<a href="javascript:DialogIframe('database.php?act=struct&tbname=<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['structure'];?>
','80%','95%','','NULL','NULL','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['structure'];?>
</a>]</span>
                    <span>[<a href="javascript:DialogIframe('database.php?act=repair&tbname=<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['repair'];?>
','50%','50%','','NULL','NULL','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['repair'];?>
</a>]</span>
                    <span>[<a href="javascript:DialogIframe('database.php?act=optimize&tbname=<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['optimize'];?>
','50%','50%','','NULL','NULL','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['optimize'];?>
</a>]</span></td>
                </tr>
            <?php } ?>
            </table>
            <div class="footheight"></div>
        </div>
        <div class="pro_bot" id="footer">
            <div class="page_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['total'];?>
<span><?php echo count($_smarty_tpl->tpl_vars['info']->value);?>
</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['table'];?>
</div>
       </div>
   </div>
</form>
</body>
</html>
<script>
if($('#isstruct').attr("checked"))
{
	isstruct = $('#isstruct').val();
}
else
{
	isstruct = '';
}
fsize    = $('#fsize').val();
tbname   = '';
$("input[name^='tbname']").each(function(index){
	if($(this).attr("checked"))
	{
		tbname +='&tbname[]='+$(this).val();
	}
});
</script><?php }} ?>