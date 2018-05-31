<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:27:35
         compiled from "D:\freehost\datongbuluo\web\templates\default\shopcarthead.html" */ ?>
<?php /*%%SmartyHeaderCode:50455ae3dc177606d7-99436036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40888a737372a8dc5318730b23663a3265f822b4' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\templates\\default\\shopcarthead.html',
      1 => 1524824902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50455ae3dc177606d7-99436036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'fromurl' => 0,
    'webname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3dc1777ef28_38685400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3dc1777ef28_38685400')) {function content_5ae3dc1777ef28_38685400($_smarty_tpl) {?>        <div class="gwc_tb">
            <div class="gwc_tb_link">
                <a href='index.php' style="color:#F00">商城首页</a>
                <?php if ($_smarty_tpl->tpl_vars['username']->value){?>
                <a href="member.php?act=default"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a href="member.php?act=logout&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">退出</a>
                <?php }else{ ?>
                <a href="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">登录</a>|<a href="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">注册</a>
                <?php }?>
                <a href="member.php?act=default">我的订单</a>|<a href="member.php?act=default">会员中心</a>
           
            </div>
            您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
！
        </div>
<?php }} ?>