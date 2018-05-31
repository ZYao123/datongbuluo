<?php /* Smarty version Smarty-3.1.14, created on 2018-05-31 08:14:14
         compiled from "C:\wamp64\www\templates\default\show.html" */ ?>
<?php /*%%SmartyHeaderCode:248075b0ebd35c89914-03619152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b0297e5ff2c790f0ec7924615cc45ac4cac3c8' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\show.html',
      1 => 1527725651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248075b0ebd35c89914-03619152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b0ebd35ce99b1_86865479',
  'variables' => 
  array (
    'username' => 0,
    'fromurl' => 0,
    'template_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0ebd35ce99b1_86865479')) {function content_5b0ebd35ce99b1_86865479($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <title>大同部落手机app演示页</title>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <style type="text/css">
        button {
            color: #444444;
            background: #F3F3F3;
            border: 1px #DADADA solid;
            padding: 5px 10px;
            border-radius: 2px;
            font-weight: bold;
            font-size: 9pt;
            outline: none;
        }
    </style>
</head>

<body>
<!--header start-->
<div class="top_bg">
    <div class="content">
        <div class="fl">您好，欢迎来到大同部落！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
            <a href="member.php?act=default"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>|<a href="member.php?act=logout&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">退出</a>
            <?php }else{ ?>
            <a href="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">请登录</a>|<a href="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">免费注册</a>
            <?php }?>
        </div>
        <div class="fr"><a href="member.php?act=default">会员中心</a></a><a href="news.php?cid=17">联系我们 <i
                class="fa fa-caret-down"></i></a><a href="news.php?cid=15&id=5">客户服务 <i
                class="fa fa-caret-down"></i></a></div>
    </div>
</div>
<!--header end-->

<!--index start-->
<div class="content" id="main">
    <div style="float: right;width: 60%">
        <div style="font-size: 2em;padding: 10%;width: auto">大同部落手机app演示页</div>
        <div style="padding: 10%;margin-top: 50%;">
            <button id="1" type="button">注册</button>
            <button id="2" type="button">下单</button>
        </div>
    </div>
    <br/>
    <video src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
video/001.mp4" id="v" controls="controls" width="30%" style="float: left;margin-left: 10%">
        您的浏览器不支持 video 标签。
    </video>
    <div style="clear: both;"></div>
</div>
<!--index end-->

<!--footer start-->


<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--footer end-->
</body>
<script type="application/javascript">
    $("button").click(function () {
        var id = $(this).get(0).id;
        if (id == 1) {
            $("#v").get(0).src = "<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
video/001.ogg";
        }
        if (id == 2) {
            $("#v").get(0).src = "<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
video/002.ogg";
        }
    })
    $(function () {
        var wid = $("#main").width();
        $("#main").height(wid*0.58667)
    })
</script>
</html>
<?php }} ?>