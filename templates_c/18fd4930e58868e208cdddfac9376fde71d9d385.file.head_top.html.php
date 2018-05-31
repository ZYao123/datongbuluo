<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 13:17:33
         compiled from "F:\WWW\20180426datong\templates\default\head_top.html" */ ?>
<?php /*%%SmartyHeaderCode:276085ae160edcbc094-87749416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fd4930e58868e208cdddfac9376fde71d9d385' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\head_top.html',
      1 => 1448327146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276085ae160edcbc094-87749416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'username' => 0,
    'fromurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae160edce31a1_06740290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae160edce31a1_06740290')) {function content_5ae160edce31a1_06740290($_smarty_tpl) {?><div class="header_top">
    <div class="header_link">
        <span class="tl">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(27,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

        <?php } ?>
        </span>
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
    您好，欢迎来到SHOPX测试演示站！！
</div><?php }} ?>