<?php /* Smarty version Smarty-3.1.14, created on 2017-10-27 09:14:07
         compiled from "F:\WWW\shopx\templates\default\member_info.html" */ ?>
<?php /*%%SmartyHeaderCode:1917259f2885f6997e5-86070086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d437eaa15776636fad599c07cac40179d73043' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\member_info.html',
      1 => 1467361784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917259f2885f6997e5-86070086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'row_member' => 0,
    'user_rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f2885f722388_82201368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f2885f722388_82201368')) {function content_59f2885f722388_82201368($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
-会员中心</title>
<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
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

</script>
<script>
function checkform()
{
	ReadyValidator('form');
	isempty('email','',emailblank,'','false','false','',emailblank);
}
</script>


<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body onload="checkform()">
<div class="help_bj">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <!--  body  开始  -->
    <div class="bodys">
        <div class="help"><span class="help_top">首页 >  会员中心 > <span class="help_color">账号管理</span></span>
            <div class="help_bottom">
                <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
<div class="dd">
                    <div class="help_right">
                        <div class="dd_top"><span class="dd_t">会员信息</span></div>
                        <div class="hyxx_list"><form id="form" method="post" action="?act=info_update" >
                            <table width="60%" border="0" cellspacing="0" cellpadding="0" class="tl">
                                
                                <tr>
                                    <td width="162" height="56" align="right" valign="top">用户名：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top" class="hyxx_size"><?php echo $_smarty_tpl->tpl_vars['row_member']->value['username'];?>
</td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">会员等级：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top" class="hyxx_size1"><?php echo $_smarty_tpl->tpl_vars['user_rank']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">性别：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top" class="hyxx_size1">
                                    <input type="radio" name="sex" value="0" id="sex" <?php if ($_smarty_tpl->tpl_vars['row_member']->value['sex']==0){?>checked="checked"<?php }?>/>保密
                                    <input type="radio" name="sex" value="1" id="sex" <?php if ($_smarty_tpl->tpl_vars['row_member']->value['sex']==1){?>checked="checked"<?php }?> />男
                                    <input type="radio" name="sex" value="2" id="sex" <?php if ($_smarty_tpl->tpl_vars['row_member']->value['sex']==2){?>checked="checked"<?php }?> />女
                              
                                    </td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">手机号码：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="mobile" type="text" class="hyxx_text" id="mobile" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['mobile'];?>
" /></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">邮箱：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="email" type="text" class="hyxx_text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['email'];?>
" /><span id="emailTip"></span></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">出生日期：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="birthday" type="text" class="hyxx_text" id="birthday" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['birthday'];?>
" /></td>
                                </tr>
<!--                                <tr>
                                    <td height="56" align="right" valign="top">信用额度：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="user_money" type="text" class="hyxx_text" id="user_money" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['user_money'];?>
" /></td>
                                </tr>-->
                                <tr>
                                    <td height="56" align="right" valign="top">MSN：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="MSN" type="text" class="hyxx_text" id="MSN" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['MSN'];?>
" /></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">QQ：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="QQ" type="text" class="hyxx_text" id="QQ" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['QQ'];?>
" /></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">固定电话：&nbsp;&nbsp;</td>
                                    <td align="left" valign="top"><input name="telephone" type="text" class="hyxx_text" id="telephone" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['telephone'];?>
" /></td>
                                </tr>
                                <tr>
                                    <td height="56" align="right" valign="top">&nbsp;</td>
                                    <td align="left" valign="top">
                                      <input type="image" name="imageField" id="imageField" src="templates/default/images/hyxx_4_1.jpg" />
                                    </td>
                                </tr>
                                
                            </table>
                            <table width="40%" border="0" cellspacing="0" cellpadding="0" class="tr" >
                              <tr>
                                <td height="120">
                                
                            <table width="120" border="0"  cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="120" align="center" id = 'screenshotsShow'>
                                <?php if ($_smarty_tpl->tpl_vars['row_member']->value['picurl']){?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['picurl'];?>
" width="100" height="100" />
                                <?php }else{ ?>
                                <img src="face/i_include/userface_default.gif" width="100" height="100" />
                                <?php }?>
                                </td>
                              </tr>
                              <tr>
                                <td align="center" height="30"><a href='javascript:;' onclick="faceshow()">请上传您的头像</a></td>
                              </tr>
                            </table>                                
                            <input name="picurl" type="hidden" class="hyxx_text" id="picurl" value="<?php echo $_smarty_tpl->tpl_vars['row_member']->value['picurl'];?>
" />
                                </td>
                              </tr>
                            </table>   
                                                 
                            </form>

<div id='face'>
     <div class="face_close tr" onclick="facehide()"></div>
     <div class="cl">
     <div class="dd_top" style="width:330px;"><span class="dd_t">上传头像</span></div>
     <iframe src="face/start.html" width="330" height="277" frameborder="0" scrolling="no"></iframe>
     </div>
</div>


                        </div>
                    </div>
                </div>                
                
                
                
                
            </div>
        </div>
    </div>
    <!--  body  结束  -->
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


</body>
</html>
<?php }} ?>