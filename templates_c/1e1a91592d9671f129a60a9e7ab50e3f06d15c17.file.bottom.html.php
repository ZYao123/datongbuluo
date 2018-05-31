<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 14:02:18
         compiled from "F:\WWW\20180426datong\templates\default\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:193605ae160ede17b61-29128822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1a91592d9671f129a60a9e7ab50e3f06d15c17' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\bottom.html',
      1 => 1524808936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193605ae160ede17b61-29128822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae160ede46972_35403531',
  'variables' => 
  array (
    'list' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae160ede46972_35403531')) {function content_5ae160ede46972_35403531($_smarty_tpl) {?><div class="footer_bg">
    <div class="content clearfix">
        <ul class="footer_nav clearfix fl">
            <li>
                <h3><a>购物指南</a></h3>
                <p>
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(18,4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                    <a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a>
                                <?php } ?>
                    <a href="member.php?act=default">会员中心</a>
                                </p>
                    
            </li>
            <li>
                <h3><a href="">配送相关</a></h3>
                <p><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(20,4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                    <a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a>
                                <?php } ?></p>
            </li>
            <li>
                <h3><a href="">售后相关</a></h3>
                <p>
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(7,4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                    <a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a>
                                <?php } ?>
                </p>
            </li>
            <li>
                <h3><a href="">帮助中心</a></h3>
                <p><a href="">忘记密码</a><?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(19,2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                    <a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a>
                                <?php } ?></p>
            </li>
        </ul>
        <div class="code fr">
            <!--<p class="fl tc"><img src="templates/default/images/code.jpg" width="100" height="100"><span>手机客户端</span></p>-->
            <p class="fr tc"><img src="templates/default/images/code.jpg" width="100" height="100"><span>官方微信号</span></p>
        </div>
        <div class="tel fr">
            <strong>TEL：<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(27,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

        <?php } ?></strong>
            <p>服务时间：每天9:00---21:00</p>
            <b>免费服务热线</b>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="content tc">
 <?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

     </div>
</div><?php }} ?>