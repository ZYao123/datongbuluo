<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:06:03
         compiled from "F:\WWW\shopx\m\templates\web\member.html" */ ?>
<?php /*%%SmartyHeaderCode:1649859f1a57bc77d10-50858065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473ebc2f9296bee7067d438899f657ae7a8cd7e3' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\member.html',
      1 => 1467361263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649859f1a57bc77d10-50858065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webname' => 0,
    'template_dir' => 0,
    'sign' => 0,
    'user_rank' => 0,
    'fromurl' => 0,
    'name_title' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a57bdd7662_80488225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a57bdd7662_80488225')) {function content_59f1a57bdd7662_80488225($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link href="style/webstyle.css" rel="stylesheet" type="text/css" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
</title>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body style="max-width:640px;margin:0 auto;background:#f7f7f7;">
<!--header start-->
<header class="m_pro_title" style="background:#fff;">
  <div class="m_icon1"><a href="javascript:history.go(-1);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon16.png"></a></div>
  <div class="m_icon2"><a id="tubiao" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon17.png"></a></div>
  <div class="m_pro_t"><a href="javascript:history.go(-1);">返回</a></div>
 <!-- <div class="m_pro_t1"><a href="#">关闭</a></div>-->
  个人设置</header>
<?php echo $_smarty_tpl->getSubTemplate ("inc/ceng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end--> 

<!--index start-->
<section>
  <div class="grsz_pic">
    <div class="grsz_bg"><?php if ($_smarty_tpl->tpl_vars['sign']->value!=1){?><span class="fl">尊贵的会员</span><a href="member.php?act=regist">注册</a><a href="member.php?act=login">登录</a><?php }else{ ?><span class="fl"><?php echo $_smarty_tpl->tpl_vars['user_rank']->value;?>
</span><a href="member.php?act=logout&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">退出账号</a><a><?php echo $_smarty_tpl->tpl_vars['name_title']->value;?>
</a><?php }?></div>
   <?php $_smarty_tpl->tpl_vars['banner'] = new Smarty_variable(GetArticle_show(50), null, 0);?>
   <img src="../<?php echo $_smarty_tpl->tpl_vars['banner']->value['picurl'];?>
"></div>
  <ul class="grsz_list">
    <li><a href="member.php?act=collect"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon37.png"><br>
      我的收藏</a></li>
    <li><a href="point.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon38.png"><br>
      购物券</a></li>
    <li><a href="member.php?act=points"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon39.png"><br>
      积分中心</a></li>
    <li><a href="member.php?act=order"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon40.png"><br>
      订单中心</a></li>
    <div class="cl"></div>
  </ul>
  </ul>
  <ul class="spxx_list">
    <li> <a href="member.php?act=order">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon28.png"></div>
      <span class="fl">我的订单</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
  </ul>
  <ul class="spxx_list">
    <li> <a href="member.php?act=points">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon29.png"></div>
      <span class="fl">我的积分</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="member.php?act=point_list">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon30.png"></div>
      <span class="fl">我的购物券</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="member.php?act=address">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon45.png"></div>
      <span class="fl">收货地址管理</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>  
    <li> <a href="member.php?act=evaluation_list">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon31.png"></div>
      <span class="fl">我的点评</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="member.php?act=message">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon32.png"></div>
      <span class="fl">我的消息</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
  </ul>
  <ul class="spxx_list">
    <li> <a href="member.php?act=memberinfo">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon33.png"></div>
      <span class="fl">个人资料</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="member.php?act=pswedit">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon34.png"></div>
      <span class="fl">修改密码</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
    <li> <a href="gbook.php">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon35.png"></div>
      <span class="fl">留言反馈</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
  </ul>
  <ul class="spxx_list">
    <li> <a href="http://longcai.com/">
      <div class="spxx_icon"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon36.png"></div>
      <span class="fl">SHOPX(1.0.0)</span>
      <div class="spxx_icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
images/icon26.png"></div>
      <div class="cl"></div>
      </a></li>
  </ul>
</section>

<!--index end--> 

<!--footer start-->
<?php echo $_smarty_tpl->getSubTemplate ("copyright.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--footer end-->
</body>
</html>
<?php }} ?>