<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:10:18
         compiled from "D:\freehost\datongbuluo\web\templates\default\member_pswedit.html" */ ?>
<?php /*%%SmartyHeaderCode:137595ae3d80a8ed286-34366343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e2a824800680a0bd5272d42f98c11b36ccc11c' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\templates\\default\\member_pswedit.html',
      1 => 1524812710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137595ae3d80a8ed286-34366343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'suc' => 0,
    'username' => 0,
    'row_member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3d80a9673a8_14324275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3d80a9673a8_14324275')) {function content_5ae3d80a9673a8_14324275($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>
<link type="text/css" rel="stylesheet" href="js/validator.css"></link>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/getarea.js"></script>
<script src="js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/checkform.js" type="text/javascript" charset="UTF-8"></script>
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

function checkform()
{
	ReadyValidator('form');
	checkpsw('oldpsw',oldpsw,oldpsw,'',oldpsw,'member.php',oldpsw_w,check,'checkpsw');
	isempty('newpsw',newpsw,newpsw,'','false','false','',newpsw);
	//isempty('password',password,password,'','false','false','',password);
	Comparetext('renewpsw',renewpsw,password_no,'','false','false','',renewpsw,'newpsw','=',password_no);
}
</script>

<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body onload="checkform()">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <!--  body  开始  -->
    <div class="bodys">
        <div class="help"><span class="help_top">首页 >  会员中心 > <span class="help_color">账号管理</span></span>
            <div class="help_bottom">
                <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
<div class="dd">
                    <div class="help_right">
                        <div class="dd_top"><span class="dd_t">修改密码</span></div>
                        <div class="hyxx_list">
                        <span style="color:#F00; font-weight:bold; margin-left:100px; font-size:16px"><?php if ($_smarty_tpl->tpl_vars['suc']->value){?>
                        <?php echo $_smarty_tpl->tpl_vars['suc']->value;?>

                        <?php }?></span>
                        <form id="form" method="post" action="?act=subpswedit" >
                            <table width="60%" border="0" cellspacing="0" cellpadding="0" class="tl">
                                
                                <tr>
                                    <td width="162" height="56" align="right" valign="top">用户名：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top" class="hyxx_size"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">原密码：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="oldpsw" type="password" class="hyxx_text" id="oldpsw" /><span id="oldpswTip"></span></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">新密码：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="newpsw" type="password" class="hyxx_text" id="newpsw" /><span id="newpswTip"></span></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">确认新密码：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="renewpsw" type="password" class="hyxx_text" id="renewpsw" /><span id="renewpswTip"></span></td>
                                </tr>
<!--                                <tr>
                                    <td height="56" align="right" valign="top">信用额度：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="user_money" type="text" class="hyxx_text" id="user_money" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['user_money'];?>
" /></td>
                                </tr>-->
                                <tr>
                                    <td height="56" align="right" valign="top">&nbsp;</td>
                                    <td align="left" valign="top">
                                      <input type="image" name="imageField" id="imageField" src="templates/default/images/hyxx_4_1.jpg" />
                                    </td>
                                </tr>
                                
                            </table>
                        </form>



                        </div>
                    </div>
                </div>                
                
                
                
                
            </div>
        </div>
    </div>
    <!--  body  结束  -->
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




</body>
</html>
<?php }} ?>