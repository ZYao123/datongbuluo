<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:17:34
         compiled from "F:\WWW\shopx\templates\default\shopcarthead.html" */ ?>
<?php /*%%SmartyHeaderCode:2749859f1a82e755605-52072961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a719435a636472ad72f8775b4ffd2d361e4cc1' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\shopcarthead.html',
      1 => 1448327158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2749859f1a82e755605-52072961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'fromurl' => 0,
    'list' => 0,
    'webname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a82e774a11_99880619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a82e774a11_99880619')) {function content_59f1a82e774a11_99880619($_smarty_tpl) {?>        <div class="gwc_tb">
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
<?php }} ?>