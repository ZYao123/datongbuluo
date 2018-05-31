<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:16:49
         compiled from "F:\WWW\shopx\templates\default\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1470659f1a801d62017-25467043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1bbad68a0c184221ac9f057beeaa648010ba1e9' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\login.html',
      1 => 1448327150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470659f1a801d62017-25467043',
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
    'username' => 0,
    'fromurl' => 0,
    'error' => 0,
    'from' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a801eb5de5_39302556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a801eb5de5_39302556')) {function content_59f1a801eb5de5_39302556($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
-登录</title>
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
<script type="text/javascript" src="js/lcshopz.js"></script>
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
	ReadyValidator('form1');
	isempty('username',username_first,username_input,'','false','false','',username_input);
	isempty('password',password,password,'','false','false','',password);
}
</script>


<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body onload="checkform()">
<div class="login_bj">
    <div class="login_header">
    <div class="header_tops">
                <div class="header_links">
                    <a href='index.php' style="color:#F00">商城首页</a>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
                    <a href="member.php?act=default"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a href="member.php?act=logout&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">退出</a>
                    <?php }else{ ?>
                    <a href="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">登录</a>|<a href="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">注册</a>
                    <?php }?>
                    <a href="member.php?act=default">我的订单</a>|<a href="member.php?act=default">会员中心</a>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = GetNav('top'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        |<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['list']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
        <?php } ?>
        
                </div>
                您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
！
            </div>
        <h1 class="login_logo">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(28,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

        <?php } ?>
        </h1>
        <span class="login_wz"><img src="templates/default/images/index_27.jpg" /></span>
     </div>
    <div class="login_body">
        <div class="login_top">
            <div class="login_left">
                <div class="login_left_top"><span class="tl"><img src="templates/default/images/index_28.png" /></span>
                    <div class="khs" style="display:none"> 
                        <span class="khs_wz">
                            <img src="templates/default/images/index_29.jpg" />
                        </span> 
                        <span class="ewm">
                            <img src="templates/default/images/index_30.jpg" />
                        </span>
                        <div class="login_link"><a href="#" class="iph"></a><a href="#" class="and"></a></div>
                    </div>
                </div>
                <div class="login_bottom" style="display:none"><a href="#"></a><a href="#"></a><a href="#"></a><a href="#"></a></div>
            </div>
            <div class="login_right">
                <div class="dlk">
                    <div class="dlk_list">                  
                      <form id="form1" method="post" action="">
                        <table width="500" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="37" align="left" valign="top"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</td>
                            </tr>
                            <tr>
                                <td height="35" align="left" valign="top"><input name="username" type="text" class="text1" id="username" value="" maxlength="20" />
                                </td>
                            </tr>
                            <tr>
                              <td height="35" align="left" valign="top"><span id="usernameTip"></span></td>
                          </tr>
                            <tr>
                                <td height="35" valign="top"><input name="password" type="password" class="text1" id="password" maxlength="20" /></td>
                            </tr>
                            <tr>
                              <td height="35" valign="top"><span id="passwordTip"></span></td>
                          </tr>
                            <tr>
                                <td height="68" align="left" valign="top"><input type="image" name="imageField" id="imageField" src="templates/default/images/index_32.jpg" />
                                
                                
                                </td>
                            </tr>
                            <tr>
                                <td height="56" align="left" valign="top" class="xblj">
                                    <!--<input name="" type="checkbox" value="" style="vertical-align:middle" />
                                    &nbsp;记住密码&nbsp;--><a href="member.php?act=find"><span class="color5">忘记密码？</span></a>
                                    <a href="member.php?act=regist"><span class="color6">免费注册</span></a></td>
                            </tr>
                        </table>
                        
                        <input name="act" type="hidden" value="login_acc" />
                        <input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
	</form>
                    </div>
                   <!-- <div class="hz"><span class="hz_wz">合作账号登录：</span><a href="#"><span class="hz_tb1"></span></a> <a href="#"><span class="hz_tb2"></span></a> <a href="#"><span class="hz_tb3"></span></a> <a href="#"><span class="hz_tb4"></span></a> <a href="#"><span class="hz_tb5"></span></a> <a href="#"><span class="hz_tb6"></span></a> 
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("lrbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>