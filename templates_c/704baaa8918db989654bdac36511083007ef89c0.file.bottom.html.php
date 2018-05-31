<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 16:57:27
         compiled from "F:\WWW\shopx\templates\default\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:541559f1a377778652-10585164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '704baaa8918db989654bdac36511083007ef89c0' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\bottom.html',
      1 => 1448327144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541559f1a377778652-10585164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'k' => 0,
    'info' => 0,
    'tel' => 0,
    'qq' => 0,
    'webname' => 0,
    'key' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a3777bace8_65109607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a3777bace8_65109607')) {function content_59f1a3777bace8_65109607($_smarty_tpl) {?><!--  bot  开始  -->
<div class="bot">
	<div style="height:5px; clear:both"></div>
    <div class="partner">
        <span class="partner_title">友情链接</span>
        <div class="partner_list">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = get_link('true'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                <li style="width:170px;">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="100%" height="60" /></a>
                </li>
                <?php } ?>
            </ul>
        </div>
	</div>    
    
    <div class="bottom" style="padding-top:10px">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetArticle_lists(1,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <div class="bottom_tp<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></div>
        <div class="bottom_list">
            <ul>
                <li><strong><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</strong></li>
                <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                <li><a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['info']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 </a></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
		<div class="line"><span class="line_title">电话热线</span></div>
		<div class="line_tel"><strong><?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</strong></div>
		<div class="line_kf"><a target="_blank"href="http://wpa.qq.com/msgrd?V=1&Uin=<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
&Site=<?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
&Menu=yes">在线客服</a></div>
	</div>

    <div class="bot_link">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = GetNav('bottom'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>|<?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['list']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
        <?php } ?>
    </div>
    
    <div class="bot_wz">
        <?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

    </div>
</div>
<!--  bot  结束  --><?php }} ?>