<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:19:33
         compiled from "F:\WWW\shopx\templates\default\left.html" */ ?>
<?php /*%%SmartyHeaderCode:256959f1a8a544f242-01470866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a02879d24b7fadaa17c1675763ef4abdf374c5f' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\left.html',
      1 => 1448327150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256959f1a8a544f242-01470866',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a8a54530c1_97824660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a8a54530c1_97824660')) {function content_59f1a8a54530c1_97824660($_smarty_tpl) {?><div class="help_left">
  <span class="help_title">会员中心</span>
    <div class="ddzx"><span class="ddzx_title">订单中心</span>
        <div class="ddzx_list">
            <ul>
                <li><a href="member.php?act=default">我的订单</a></li>
                <li><a href="member.php?act=collect"> 我的收藏</a></li>
		   <li ><a href="member.php?act=point_list">我的优惠券</a></li>
                <li><a href="member.php?act=points"> 我的积分</a></li>
<!--                <li><a href="#"> 商品咨询</a></li>
                <li><a href="#"> 价格举报</a></li>
                <li><a href="#"> 价格保护</a></li>
 -->                <!--<li><a href="#"> 我的账户</a></li>-->
<!--                <li><a href="#"> 到货通知</a></li>
 -->            </ul>
        </div>
    </div>
    <div class="service"><span class="service_title">服务中心</span>
        <div class="ddzx_list">
            <ul>
                <li><a href="member.php?act=memberinfo">账户信息</a></li>
                <li><a href="member.php?act=pswedit"> 账户安全</a></li>
<!--                <li><a href="#"> 在线投诉</a></li>
                <li><a href="#"> 上门安装</a></li> -->
                <li><a href="member.php?act=address"> 收货地址</a></li>
                <!--<li><a href="#"> 礼品卡</a></li>-->
<!--                <li><a href="#"> 消费记录</a></li> -->
            </ul>
        </div>
    </div>
</div><?php }} ?>