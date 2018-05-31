<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 19:09:58
         compiled from "F:\WWW\20180426datong\templates\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:279515ae17478536c02-57246202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97e80d54a28d2446f6ac7e00512ab21d2b616e2' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\head.html',
      1 => 1524827382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279515ae17478536c02-57246202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1747855dd10_29022281',
  'variables' => 
  array (
    'username' => 0,
    'fromurl' => 0,
    'shop_item_num' => 0,
    'keywords' => 0,
    'hotkeywords' => 0,
    'list' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1747855dd10_29022281')) {function content_5ae1747855dd10_29022281($_smarty_tpl) {?><div class="top_bg">
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
        <div class="fr"><a href="member.php?act=default">会员中心</a></a><a href="news_info.php?cid=17&id=12">联系我们 <i class="fa fa-caret-down"></i></a><a href="news.php?cid=15&id=5">客户服务 <i class="fa fa-caret-down"></i></a></div>
    </div>
</div>
<div class="content clearfix">
    <div class="fl"><img src="templates/default/images/logo.jpg" width="211" height="115" /></div>
    <div class="shopcar fr"><a href="shopcart.php?act=list"><img src="templates/default/images/index_01.jpg"></a>购物车<span class="red">  <?php echo $_smarty_tpl->tpl_vars['shop_item_num']->value;?>
</span>件</div>
    <div class="search_box fr">
        <form id="searchForm" class="search" name="searchForm" method="get" action="item_list.php" onSubmit="return checkSearchForm()">
            
            <input type="text" class="fl ss" name="keywords" id="keyword" onkeyup="keyupdeal(event,this.value);" onkeydown="keydowndeal(event);" onclick="keyupdeal(event,this.value);" onblur="closediv();"  autocomplete="off"  value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
            <input type="submit" value="搜 索" class="ss_btn">
            <p>热词推荐：<?php if ($_smarty_tpl->tpl_vars['hotkeywords']->value){?>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotkeywords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <a href='item_list.php?keywords=<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</a>&nbsp;
        <?php } ?>
        <?php }?></p>
        </form>
    </div>
</div>
<div class="nav_bg">
    <div class="content clearfix">
        <div class="fl menu tc rel"><i class="fa fa-home"></i> 所有商品分类 >
            <div class="subnav tl abs" style="display: none;">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('428',3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                    <li>
                        <h3><img src="templates/default/images/icon1.png"><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></h3>
                        <p>
                    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
 $_from = GetGoodsType($_smarty_tpl->tpl_vars['list']->value['id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['ks']->value = $_smarty_tpl->tpl_vars['child']->key;
?>
                        <a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['classname'];?>
</a>/
                    <?php } ?> 
                        </p>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
        <script>
            $(".menu").click(function(){
                $(".subnav").fadeToggle()
            })
        </script>
        <ul class="nav fl">
                       <li><a href="index.php">首页</a></li>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = GetGoodsType('428',3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
            <li><a href="item_list.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></li>
            <?php } ?>
            <li><a href="ganji.php?cid=452">网上赶集</a></li>
        </ul>
        
    </div>
</div>
 <script>
                function checkSearchForm(){
                    var key = $('#keyword').val();
                    if(key==''|| key==undefined){
                        alert('搜索不能为空');
                        $('#keyword').focus();
                        return false;
                    }
                    return true;
                }
</script><?php }} ?>