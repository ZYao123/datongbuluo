<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 16:59:58
         compiled from "F:\WWW\shopx\manage\templates\default\login.html" */ ?>
<?php /*%%SmartyHeaderCode:942859f1a40eddfb14-51704901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '697ceb8ddafa1b583dba5fbd02c0d53a16805ea8' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\login.html',
      1 => 1448327052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '942859f1a40eddfb14-51704901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home' => 0,
    'lang_js' => 0,
    'lang_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a40ee9f1c5_50531520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a40ee9f1c5_50531520')) {function content_59f1a40ee9f1c5_50531520($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['home']->value['title'];?>
</title>
<link href="templates/default/style/login.css" rel="stylesheet" type="text/css" />
<link href="templates/default/style/main.css" rel="stylesheet" type="text/css">
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/login.js" type="text/javascript"></script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<script>
var u="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['username'];?>
";
var p="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['password'];?>
";
var validate="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['validate'];?>
";
var tips="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['password'];?>
";
var favorite="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['favorite'];?>
";
</script>
</head>
<body>
<div class="header_area">
  <div class="header_bot">
    <div class="notice_area">
    </div>
  </div>
  <div class="header">
    <div class="logo"><img src="templates/default/images/logo.png" /></div>
    <div class="top"><a href="javascript:;" onclick="addfavorite();" class="top_icon01"><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['favorite'];?>
</a> <a href="index.php?act=desktop"  class="top_icon02"><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['desktop'];?>
</a></div>
    <div class="leftpic"><img src="templates/default/images/leftpic.png" /></div>
    <div class="login_area">
        <form action="?act=sublogin" method="post" id="form" onSubmit="return CheckForm()">
        <div class="title"><a href="#" class="on"><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['email'];?>
</a><a href="#" class="on"><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['mobile'];?>
</a></div>
        <div class="input_area">
        <input name="username" type="text" class="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['username'];?>
" maxlength="20" />
        </div>
        <div class="input_area">
        <input name="password" type="text" class="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['password'];?>
" maxlength="20"/>
        </div>
       <div class="input_area">
        
        <div class="remember"><input name="validate" type="text" class="validate" id="validate" maxlength="6" value="<?php echo $_smarty_tpl->tpl_vars['lang_js']->value['validate'];?>
" />
        <img id="ckstr" name="ckstr" src="../data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer; float:right;" onClick="this.src=this.src+'?'" /></div>
        
        </div>
        <div class="btn_area">
            <input name="s" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang_login']->value['submit'];?>
"  class="fl"/>
            <div class="banben"></div>
        </div>
        
        </form>
    </div>
  </div>
  <div class="focus" id="focus">

	<div id="focus_m" class="focus_m">
		<ul>

		<li><img src="templates/default/images/qh/2.jpg" width="100%" height="613" /></li>
		<li><img src="templates/default/images/qh/3.jpg" width="100%" height="613" /></li>
		<li><img src="templates/default/images/qh/8.jpg" width="100%" height="613" /></li>
		<li><img src="templates/default/images/qh/10.jpg" width="100%" height="613" /></li>

		</ul>
	</div>


</div>
<!--focus end-->
<script type="text/javascript" src="templates/default/js/script.js"></script>
  </div>
<div class="bot">
  <div class="help"><a href="http://help.longcai.pw/forum.php" class="help_icon01" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['support'];?>
</a> <a href="http://help.longcai.pw/forum.php" class="help_icon02" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['help'];?>
</a></div>
  <div class="browser">
    <ul>
      <li><?php echo $_smarty_tpl->tpl_vars['lang_login']->value['browser'];?>
</li>
      <li>
          <a href="http://www.360.cn/" target="_blank">
            <img onmousemove="src='templates/default/images/browser01_on.jpg'" onmouseout="src='templates/default/images/browser01.jpg'" src="templates/default/images/browser01.jpg" width="32" height="32" />
          </a>
      </li>
      <li>
      	<a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">
        	<img onmousemove="src='templates/default/images/browser02_on.jpg'" onmouseout="src='templates/default/images/browser02.jpg'" src="templates/default/images/browser02.jpg" width="32" height="32" />
        </a>
      </li>
      <li>
          <a href="https://www.google.com/intl/zh-CN/chrome/browser/" target="_blank">
          	<img onmousemove="src='templates/default/images/browser03_on.jpg'" onmouseout="src='templates/default/images/browser03.jpg'" src="templates/default/images/browser03.jpg" width="32" height="32" />
          </a>
      </li>
      <li>
          <a href="http://www.firefox.com.cn/download/" target="_blank">
          	<img onmousemove="src='templates/default/images/browser04_on.jpg'" onmouseout="src='templates/default/images/browser04.jpg'" src="templates/default/images/browser04.jpg" width="32" height="32" />
          </a>
      </li>
      <li>
          <a href="http://www.opera.com/zh-cn/o/ie-simple" target="_blank">
          	<img onmousemove="src='templates/default/images/browser05_on.jpg'" onmouseout="src='templates/default/images/browser05.jpg'" src="templates/default/images/browser05.jpg" width="32" height="32" />
          </a>
      </li>
      <li>
          <a href="http://ie.sogou.com/" target="_blank">
          	<img onmousemove="src='templates/default/images/browser06_on.jpg'" onmouseout="src='templates/default/images/browser06.jpg'" src="templates/default/images/browser06.jpg" width="32" height="32" />
          </a>
      </li>
    </ul>
  </div>
</div>
</body>
</html>
<?php }} ?>