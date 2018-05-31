<?php /* Smarty version Smarty-3.1.14, created on 2017-11-13 15:49:59
         compiled from "F:\WWW\shopx\templates\default\regist.html" */ ?>
<?php /*%%SmartyHeaderCode:214095a09137a150239-76985093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ccdc1c30685252634a9177d5d04014afb0f0594' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\regist.html',
      1 => 1510555915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214095a09137a150239-76985093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a09137a280d32_64082295',
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
    'top_nav' => 0,
    'reshop' => 0,
    'template_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a09137a280d32_64082295')) {function content_5a09137a280d32_64082295($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
-注册</title>
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

<script type="text/javascript">
function checkform()
{
	ReadyValidator('form1');
	checkemail('email',emailblank,email_ero,email_right,email_ero,'member.php',email_re,check,
    'email_jud');
	checkuname('username',username_input,username_ero,username_right,username_ero,'member.php',username_re,check,'regist_jud');
	isempty('yzm','','请输入验证码','','false','false','','验证码不能为空');
	passwd('password','11111','请输入密码！','','密码不能少于6!','member.php','密码不能少于6!','验证中。。。','regist_pwd');
	Comparetext('repassword',password_re,'请确认密码!','','false','false','',password_le,'password','=',password_no);
	checkboxs("reshop","xqah_one","",shop_service,"",shop_service);
}

function newgdcode(pic) {
	var obj = document.getElementById('pic');
	var url = document.getElementById('pic').src;
	obj.src = url+ '?nowtime=' + new Date().getTime();//后面传递一个随机参数，否则在IE7和火狐下，不刷新图片
}
</script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<style type="text/css">
.regist_suc
{
position:fixed;
+position:absolute;
+top:expression(eval(document.documentElement.scrollTop||document.body.scrollTop)+50);
}
</style>
<body id = "gy_bldy" onload="checkform()">
<div  id="regist_suc" style = "position:absolute;z-index:8888;display:none;">
	<div class="regist_suc"  style = "width:100%; height:100%; left:0px;background:url(templates/default/images/reg_bg.png);">
		<div style = "width:799px;height:482px;margin:0 auto;background:url(templates/default/images/reg_g_bg.png) no-repeat;">
		<div style = "padding:280px 0 0 230px;">
			<span id = "reg_return" class="regist_res">
            
            </span>
		</div>
		</div>
	</div>
</div>


<div class="zc">
    <div class="zc_header">
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
                    <a href="member.php?act=default">我的订单</a>|<a href="member.php?act=default">会员中心</a><?php if ($_smarty_tpl->tpl_vars['top_nav']->value){?>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        |<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['list']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
        <?php } ?>
        <?php }?>
                </div>
                您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
！
            </div>
        <div class="zc_top">
        <span class="tl">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(28,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

        <?php } ?>
        </span>
        <span class="zc_wz"><img src="templates/default/images/index_27.jpg" /></span></div>
    </div>
    <div class="zc_body">
        <div class="zc_left">
        <form id="form1" method="post" action="member.php">
            <table width="550" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="48" colspan="2" align="left" valign="top">如有账号，请登录<span class="login_text4"><?php echo $_smarty_tpl->tpl_vars['reshop']->value;?>
</span></td>
                </tr>
                 <tr>
                    <td height="56"  align="right" valign="top" class="color8">邮箱：&nbsp;&nbsp;</td>
                    <td align="left" valign="top">
                    <input name="email" type="text" class="text2" id="email" maxlength="30" />
                    <span id="emailTip"></span>
                    </td>
                 </tr>
                <tr>
                    <td width="97" height="63" align="right" valign="top" class="color8">用户名：&nbsp;</td>
                    <td align="left" valign="top"><input name="username" type="text" class="text2" id="username" value="" maxlength="20" />
                    <input type="hidden" class="text2" name="username_f" id="username_f" />
                    <span id="usernameTip"></span>
                    </td>
                </tr>
                <tr>
                    <td height="63" align="right" valign="top" class="color8">请设置密码：&nbsp;</td>
                  <td align="left" valign="top"><input name="password" type="password" class="text2" id="password" maxlength="20"/><span id="passwordTip"></span></td>
                </tr>
                <tr>
                    <td height="63" align="right" valign="top" class="color8">请确认密码：&nbsp;</td>
                    <td align="left" valign="top"><input name="repassword" type="password" class="text2" id="repassword" maxlength="20"/><span id="repasswordTip"></span>
                    </td>
                </tr>
                <tr>
                    <td height="63" align="right" valign="top" class="color8">验 证 码：&nbsp;</td>
                    <td align="left" valign="top"><input name="yzm" type="text" class="text2" id="yzm" maxlength="20" style="width:64px;"/>&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
../../include/imgcode.php" id="pic"  onClick="newgdcode('pic')"/><span id="yzmTip" style="vertical-align:top"></span>
                    </td>
                </tr>
                <tr>
                    <td height="62">&nbsp;</td>
                    <td align="left" valign="top"><input type="image" name="imageField" id="imageField" src="templates/default/images/reg.jpg" style="vertical-align:middle; " />
                    <span id="reshop"></span></td>
                </tr>
                <tr>
                    <td height="56">&nbsp;</td>
                    <td align="left" valign="top" class="color5">
                    <input name="act" type="hidden" value="regist_acc" />
                    <input name="gourl" type="hidden" value="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
" />
                    <input name="url" type="hidden" value="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
&reshop=lost" />
                    <input name="xqah_one" type="checkbox" value="1" id="xqah_one" />
                        &nbsp;我已阅读并接受<span class="color9"><a href='javascript:;' onclick="faceshow()">服务条款</a></span></td>
                </tr>
            </table>

        </form>
        <div id='face' style="width:500px;height:360px;">
     <div class="face_close tr" onclick="facehide()"></div>
     <div class="cl">
     <div class="dd_top" style="width:330px;"><span class="dd_t">服务条款</span></div>
     <iframe src="server.php?cid=7" width="500" height="300" frameborder="0" scrolling="yes"></iframe>
     </div>
</div>
        </div>
        <div class="zc_right">
            <div class="zc_right_top">
            <span class="color5">已注册？</span>&nbsp;<a href="member.php?act=login"><span class="color6">登录</span></a>
            </div>
            <div class="login_left_top">
                <span class="tl"><img src="templates/default/images/index_28.png" /></span>
                <div class="khs" style="display:none"> 
                    <span class="khs_wz"><img src="templates/default/images/index_29.jpg" /></span> 
                    <span class="ewm"><img src="templates/default/images/index_30.jpg" /></span>
                    <div class="login_link"><a href="#" class="iph"></a><a href="#" class="and"></a></div>
                </div>
            </div>
            <!--<div class="zc_bottom">
                <div class="zc_ks"><img src="templates/default/images/zc_3.jpg" align="left" /></div>
                <div class="zc_wz1">中国大陆手机用户，编辑短信"<span class="zc_color">LC</span>"<br />
                    发送到：<span class="zc_color">1234567890123l</span> </div>
            </div>-->
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("lrbottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>