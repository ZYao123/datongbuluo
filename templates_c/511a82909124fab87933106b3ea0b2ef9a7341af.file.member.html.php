<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 18:39:39
         compiled from "F:\WWW\20180426datong\templates\default\member.html" */ ?>
<?php /*%%SmartyHeaderCode:112205ae18ecf679ba6-91996138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511a82909124fab87933106b3ea0b2ef9a7341af' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\member.html',
      1 => 1524825577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112205ae18ecf679ba6-91996138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae18ecf740f52_07924278',
  'variables' => 
  array (
    'memberorder' => 0,
    'time' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18ecf740f52_07924278')) {function content_5ae18ecf740f52_07924278($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>

<body>
<div class="help_bj">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <!--  body  开始  -->
    <div class="bodys">
        <div class="help"><span class="help_top"><a href="index.php">首页</a> >  会员中心 > <span class="help_color">我的订单</span></span>
            <div class="help_bottom">
                <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="dd">
                    <div class="help_right"><span class="dd_wz">我的订单</span>
                        <div class="dd_top"><span class="dd_t">全部订单</span></div>
                        <div class="help_list">
                        <?php if ($_smarty_tpl->tpl_vars['memberorder']->value){?>
                            <table width="1065" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="43" colspan="5" align="left" valign="middle">&nbsp;
                                        
                                        <select onchange="window.location.href=this.options[selectedIndex].value" >
                                            <option value="member.php?act=default">全部商品</option>
                                            <option value="member.php?act=select&time=onemonth" <?php if ($_smarty_tpl->tpl_vars['time']->value=='onemonth'){?>selected="selected"<?php }?>>最近一个月订单</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="108" height="28" align="center" valign="middle" class="help_back">订单编号</td>
                                    <td width="218" align="center" valign="middle" class="help_back">收货人</td>
                                    <td width="155" align="center" valign="middle" class="help_back">订单金额</td>
                                    <td width="263" align="center" valign="middle" class="help_back">订货时间</td>
                                    <td width="133" align="center" valign="middle" class="help_back">操作</td>
                                </tr>
                                
                                
                                
                                 <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memberorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                             
                               
                                <tr id="tr<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
                                    <td height="81" align="center" valign="middle" class="help_bor ys1">普通订单<br />
                                        <span class="ys"><a href="member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" style="color:inherit"><?php echo $_smarty_tpl->tpl_vars['list']->value['orderlistnum'];?>
 </a></span></td>
                                    <td align="center" valign="middle" class="help_bor"><?php echo $_smarty_tpl->tpl_vars['list']->value['rec_name'];?>
</td>
                                    <td align="center" valign="middle" class="help_bor"><span class="ys3">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['orderamount']+$_smarty_tpl->tpl_vars['list']->value['cost'];?>
</span><br />(含<?php echo $_smarty_tpl->tpl_vars['list']->value['cost'];?>
元运费)<br />
                                        <span class="ys2"><?php if ($_smarty_tpl->tpl_vars['list']->value['paymode']==7){?>货到付款<?php }elseif($_smarty_tpl->tpl_vars['list']->value['paymode']==5||$_smarty_tpl->tpl_vars['list']->value['paymode']==6){?>银行付款<?php }else{ ?>在线支付<?php }?></span></td>
                                    <td align="center" valign="middle" class="help_bor"><?php echo getdateTime($_smarty_tpl->tpl_vars['list']->value['posttime']);?>
</td>
                                    <td align="center" valign="middle" class="help_bor ys4"><?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']==0){?> <?php }?>
                                    <a href="member.php?act=ordercontent&orderid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">查看</a> | 
                                    <a href="javascript:void(0);" onclick="DelShopOrder(<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
)">删除</a><br />
                                       <!-- <a href="javascript:;" onclick="AddShopCart('shopcar_popup')"><img src="templates/default/images/index_35.jpg" alt="还要买"/></a> --></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td height="60" colspan="5" align="right" valign="middle" class="help_links"> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</td>
                                </tr>
                            </table>
                            
                            <?php }else{ ?>
                            	<table width="1065" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="43" align="center" valign="middle">&nbsp;
                                        暂无订单信息！
                                    </td>
                                </tr>
                                </table>
                            <?php }?>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!--  body  结束  -->
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>