<?php /* Smarty version Smarty-3.1.14, created on 2018-05-03 15:04:51
         compiled from "C:\wamp64\www\templates\default\head_index.html" */ ?>
<?php /*%%SmartyHeaderCode:254785aeab493ed06e5-91726357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d234ae22fbc859ade2a0e219555447a10be1b4' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\default\\head_index.html',
      1 => 1524827396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254785aeab493ed06e5-91726357',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aeab4940adc03_51018213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeab4940adc03_51018213')) {function content_5aeab4940adc03_51018213($_smarty_tpl) {?><div class="top_bg">
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
        <div class="fr"><a href="member.php?act=default">会员中心</a></a><a href="news.php?cid=17">联系我们 <i class="fa fa-caret-down"></i></a><a href="news.php?cid=15&id=5">客户服务 <i class="fa fa-caret-down"></i></a></div>
    </div>
</div>
<div class="content clearfix">
    <div class="fl"><img src="templates/default/images/logo.jpg" width="211" height="115" /></div>
    <div class="shopcar fr"><a href="shopcart.php?act=list"><img src="templates/default/images/index_01.jpg"></a>购物车<span class="red"> <?php echo $_smarty_tpl->tpl_vars['shop_item_num']->value;?>
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
            <div class="subnav tl abs">
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
        <div class="fr supr"><!--<img src="templates/default/images/index_03.jpg">手机下单惊喜更多--></div>
    </div>
</div>
<div class="rel">
    <div class="flexslider">
      <ul class="slides">
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(29,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>

                     <li><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" /></li>
                                <?php } ?>
      </ul>
    </div>
    <script>
    $(function(){
        $('.flexslider').flexslider({
            directionNav: false,
            pauseOnAction: false
        });
    });
    </script>
    <div class="content abs banner_box">
        <div class="side fr">
            <div class="login">
                <div class="vip clearfix"><img src="templates/default/images/index_04.jpg"><h3>hello您好，
欢迎光临大同部落！</h3></div>
                <div class="tc button">
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
        <a href="member.php?act=default"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a href="member.php?act=logout&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">退出</a>
        <?php }else{ ?>
         <a href="member.php?act=login&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">请登录</a>|<a href="member.php?act=regist&from=<?php echo $_smarty_tpl->tpl_vars['fromurl']->value;?>
">立即注册！</a>
        <?php }?>

                </div>
            </div>
            <div class="notice">
                <h3>活动公告 <span>NOTICE</span></h3>
                <div class="notice_list">
                    <ul id="notice_list">
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(14,4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                     <li><a href="news_info.php?cid=<?php echo $_smarty_tpl->tpl_vars['list']->value['classid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">·<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
 </a></li>
                                <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="pro">
                <ul class="pro_list">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(31,3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                        <li><a><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['picurl'];?>
" width="137" height="137"><h3><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['list']->value['description'];?>
</h3></a></li>
                        <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
</div>
<script>
                function autoScroll(obj) {
                    var height = $(obj).height();
                    $(obj).find("ul").animate({
                        marginTop: -height
                    }, 1000, function () {
                        $(this).css({ marginTop: "0" }).find("li:first").appendTo(this);
                    })
                }
                setInterval('autoScroll(".notice_list")', 2000);
            </script>

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