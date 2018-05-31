<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 18:58:01
         compiled from "F:\WWW\20180426datong\templates\default\ordercontent.html" */ ?>
<?php /*%%SmartyHeaderCode:12935ae2c991a49854-44895048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2812ecfce916e383d1736d107d494d3e54407ba2' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\ordercontent.html',
      1 => 1524826678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12935ae2c991a49854-44895048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae2c991b57114_22542409',
  'variables' => 
  array (
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'expressno' => 0,
    'order' => 0,
    'invalid' => 0,
    'postmode_info' => 0,
    'expressid' => 0,
    'type' => 0,
    'goodslist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2c991b57114_22542409')) {function content_5ae2c991b57114_22542409($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lcshopz.js"></script>
<script type="text/javascript" src="js/evaluation.js"></script>
<script>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
	= "<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
";
<?php } ?>
</script>
<?php if ($_smarty_tpl->tpl_vars['expressno']->value!=''){?>
<script language="javascript">	
	//用户查询
	function uslook()
		{
		$("#retData").html('loading...');
	
			var expressid = $("#expressid").val();
			
            var expressno = $("#expressno").val();
			if(expressid!=''){
				$.get("./data/kuaidi/get.php",{com:expressid,nu:expressno,rn:Math.floor(1+Math.random()*(99999-1))},
					function(data)
					{
						
						$("#retData").html(data);
					}
				);
			}
		}
</script>
<?php }?>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body  onload="uslook()">

<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--  body  开始  -->
<div class="body" >
<div class="bodys">
        <div class="help1"><span class="help_tops"><strong class="lsize">会员中心</strong> ><a href="#"> 订单中心</a> > 订单：<?php echo $_smarty_tpl->tpl_vars['order']->value['orderlistnum'];?>
</span></span></div>
        <div class="ddxq_top">
            <div class="ddxq_top_t">
            <a href="javascript:;" onclick="window.print();" class="tr"><img src="templates/default/images/ddxq_1.jpg" />&nbsp;</a>
            
            订单号：<?php echo $_smarty_tpl->tpl_vars['order']->value['orderlistnum'];?>
  状态：<span class="lcolor"> 
    
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==0){?>
                    等待付款
                    <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==1){?>
                    已付款，待发货
                    <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==2){?>
                    已发货，待收货
                    <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==3){?>
                    已收货
                     <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==4){?>
                    申请退货           
                     <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==5){?>
                   买家申请退款
                    <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==6){?>
                   已退款
                   <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']==7){?>
                   已退货
                   <?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']=='-1'){?>
                    无效订单                                                                              
                    <?php }?>
              
</span>&nbsp;&nbsp;<a href="#"><img src="templates/default/images/ddxq_3.jpg" /></a></div>
            <div class="ddxq_top_b"><?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==0){?>订单已经生成，请在下单后的<?php echo $_smarty_tpl->tpl_vars['invalid']->value;?>
小时内完成付款！<?php }elseif($_smarty_tpl->tpl_vars['order']->value['checkinfo']=='-1'){?>您的订单超过<?php echo $_smarty_tpl->tpl_vars['invalid']->value;?>
小时未付款，现为无效订单。<?php }else{ ?>订单已经完成，感谢您在本商城购物，欢迎您对本次交易及所购商品进行评价。<?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==1){?>
                <a href='javascript:;' onclick="tuikuan_show(<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
)">申请退款</a>
                <div id='tuikuan<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
' class="evaluation">
                     <div class="evaluation_close tr" onclick="tuikuan_hide(<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
)"></div>
                     <div class="cl">
                     <div class="dd_top" style="width:500px;"><span class="dd_t">申请退款</span></div>
                     <iframe src="member.php?act=tuikuan&oid=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" width="500" height="277" frameborder="0" scrolling="no"></iframe>
                     </div>
                </div>
                <?php }?>
       
                <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==2){?>
                <a href='javascript:;' onclick="tuihuo_show(<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
)">申请退货</a>
                <a href='member.php?act=yes_order&oid=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
' onclick="return confirm('确认要收货吗?')">确认收货</a>
                <div id='tuihuo<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
' class="evaluation">
                     <div class="evaluation_close tr" onclick="tuihuo_hide(<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
)"></div>
                     <div class="cl">
                     <div class="dd_top" style="width:500px;"><span class="dd_t">申请退货</span></div>
                     <iframe src="member.php?act=tuihuo&oid=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" width="500" height="277" frameborder="0" scrolling="no"></iframe>
                     </div>
                </div>
                <?php }?>
             
            </div>
        </div>
        <!--  进度条  -->
        <div class="ddxq_jd">&nbsp;</div>
        <div class="ddxq_list" style="margin-left:115px;">
            <ul>
            
                <li>提交订单<br />
                    <span class="lcolor1">&nbsp;</span></li>
        
                <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==0){?>
                <li>
                    等待付款
                 </li>
                 <?php }?>  
                <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==1){?>
                <li>
                    等待付款
                 </li>
                <li>
                    已付款
                 </li>
                 <?php }?>
                 
                <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==2){?>
                <li>
                    等待付款
                 </li>
                <li>
                    已付款
                 </li>
                <li>
                       商品出库
                 </li>
                 <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==4){?>
                <li>
                    等待付款
                 </li>
                <li>
                    已付款
                 </li>
                <li>
                       商品出库
                 </li>
                  <li>
                       申请退货中
                 </li>
                 <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==7){?>
                <li>
                    等待付款
                </li>
                <li>
                    已付款
                 </li>
                <li>
                       商品出库
                </li>
                <li>
                       已退货
                </li>
                <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==3){?>
                <li>
                    等待付款
                 </li>
                <li>
                    已付款
                 </li>
                <li>
                       商品出库
                 </li>
                 <li>
                       交易完成
                 </li>
                 <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==5){?>
                 <li>
                    已付款
                 </li>
                 <li>
                    买家申请退款
                 </li>
                 <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==6){?>
                 <li>
                    已付款
                 <li>
                    买家申请退款
                 </li>
                 <li>
                    已退款
                 </li>
                 <?php }?>
         
            </ul>
        </div>
        <!--  跟踪  -->
        <div class="ddgz">
            <div class="ddgz_top">
                <div class="ddgz_link">
                    <ul>
                        <li><span id="ddgz_bj" style="  display:block;width:76px;background:#fff; border-bottom: solid 1px #fff;"><a href="#" onclick="genzong();"><span id="lcolor2" style="color:#000;">订单跟踪</span></a></span></li>
                       <!-- <li><span id="ddgz_bj2"><a href="#" onclick="info();"><span id="lcolor22">付款信息</span></a></span></li>-->
                        <!--<li><a href="#"> 订单轨迹</a></li>-->
                    </ul>
                </div>
                <!--<div class="ddgz_top_wz"><img src="templates/default/images/ddxq_6.jpg" align="left" /><a href="#">订单状态，掌握手中，手机龙采</a></div>-->
            </div>
            <div class="ddgz_bottom"> 
            <?php if ($_smarty_tpl->tpl_vars['expressno']->value==''){?>
             还没有发货
            <?php }else{ ?>
            <div style="font-size:14px; line-height:35px;">您的物流：<?php echo $_smarty_tpl->tpl_vars['postmode_info']->value;?>

            
            <br /> 
            订单编号：<?php echo $_smarty_tpl->tpl_vars['expressno']->value;?>

           <input name="expressid" type="hidden" id="expressid" value="<?php echo $_smarty_tpl->tpl_vars['expressid']->value;?>
"/>
           <input name="expressno" type="hidden" id="expressno" value="<?php echo $_smarty_tpl->tpl_vars['expressno']->value;?>
"/> 
            <br />
            查询数据由：快递100提供  如没有查询到物流信息可以登录<a href="http://www.kuaidi100.com/" target="_blank" style="color:#F00">http://www.kuaidi100.com/</a>进行查询</div>
            	<script type="text/javascript">
                	function info(){
						$("#lcolor22").css("color", "#333");
						$("#ddgz_bj2").css({
							 "width": "76px",
							 "height": "31px",
							 "float": "left",
							 "background": "#fff",
							 "color": "#333",
						});
						$("#lcolor2").css("color", "#999");
						$("#ddgz_bj").css("background", "url(../images/ddxq_5.jpg) repeat-x top left");
						$("#genzong").css("display", "none");
						$("#info").css("display", "block");
						}
					function genzong(){
						$("#lcolor2").css("color", "#333");
						$("#ddgz_bj").css({
							 "width": "76px",
							 "height": "31px",
							 "float": "left",
							 "background": "#fff",
							 "color": "#333",
						});
						$("#lcolor22").css("color", "#999");
						$("#ddgz_bj2").css("background", "url(../images/ddxq_5.jpg) repeat-x top left");
						$("#genzong").css("display", "block");
						$("#info").css("display", "none");
						}
                </script>
            	<div id="genzong" style="display:block">
                
               
            	  <input name="type" type="hidden" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/> 
        
                <?php }?>
                 <div id="retData"></div>
              </div>
                <div id="info" style="display:none;">
                	<div class="ddxx_list">
                        <ul>
                            <li>支付及配送方式<br />
                           
                                配送方式：<?php echo $_smarty_tpl->tpl_vars['postmode_info']->value;?>
<br />
                                运    费：￥<?php echo $_smarty_tpl->tpl_vars['order']->value['cost'];?>
<br />
                                送货日期：无</li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="ddxx"><span class="ddxx_title">订单信息</span>
            <div class="ddxx_list">
                <ul>
                    <li><strong>收货人信息</strong><br />
                        收 货 人：<?php echo $_smarty_tpl->tpl_vars['order']->value['rec_name'];?>
<br />
                        地    址：<?php echo $_smarty_tpl->tpl_vars['order']->value['cur_address'];?>
<br />
                        固定电话：<?php echo $_smarty_tpl->tpl_vars['order']->value['telephone'];?>
<br />
                        手机号码：<?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
<br />
                        <!--电子邮件：<?php echo $_smarty_tpl->tpl_vars['order']->value['orderlistnum'];?>
--></li>
                    <li>支付及配送方式<br />
                       
                        配送方式：<?php echo $_smarty_tpl->tpl_vars['postmode_info']->value;?>
<br />
                        运    费：￥<?php echo $_smarty_tpl->tpl_vars['order']->value['cost'];?>
<br />
                        送货日期 ：无</li>
                 
                </ul>
            </div>
            <div class="spqd"><span class="ddxx_title">商品清单</span>
                <div class="spqd_lists">
                    <table cellpadding="0" cellspacing="0" width="1098">
                        <tbody>
                            <tr class="spqd_bk">
                                <th width="113" height="35" align="center" valign="middle"> 商品编号 </th>
                                <th width="171" align="center" valign="middle"> 商品图片 </th>
                                <th width="335" align="center" valign="middle"> 商品名称 </th>
                                <th width="104" align="center" valign="middle"> 售　价 </th>
                                <th width="76" align="center" valign="middle"> 赠送积分 </th>
                                <th width="70" align="center" valign="middle"> 商品数量 </th>
                                <th width="227" align="center" valign="middle"> 操作 </th>
                            </tr>
                            
                            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                            <tr>
                                <td align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
</td>
                                <td height="60" align="center" valign="middle"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['gpicurl'];?>
" width="50" height="30" /></a></td>
                                <td class="spqds"><a href="item_show.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['gtitle'];?>
</a><strong style="color:#d00; font-family:Arial;"><?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
</strong></td>
                                <td align="center" valign="middle" class="lcolor3"> ￥<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
</td>
                                <td align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
</td>
                                <td align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['list']->value['num'];?>
</td>
                                <td align="center" valign="middle" class="spqd1"><?php if ($_smarty_tpl->tpl_vars['order']->value['checkinfo']==3){?><a href='javascript:;' onclick="evaluation_show(<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
)">
                                
评价</a><?php }else{ ?><em style="color:#999">评价</em><?php }?><br />
<div id='evaluation<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
' class="evaluation">
     <div class="evaluation_close tr" onclick="evaluation_hide(<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
)"></div>
     <div class="cl">
     <div class="dd_top" style="width:500px;"><span class="dd_t">添加评论</span></div>
     <iframe src="member.php?act=evaluation&gid=<?php echo $_smarty_tpl->tpl_vars['list']->value['gid'];?>
" width="500" height="277" frameborder="0" scrolling="no"></iframe>
     </div>
</div>
                                    <!--<a href="#">申请返修/退换货</a> <br />-->
                                   <!-- <a href="javascript:;" onclick="AddShopCart('shopcar_popup')"><img src="templates/default/images/ddxq_7.jpg" alt="还要买" /></a> --> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="spqd_wz"></div>
            </div>
            <!--金额-->
            <div class="total">
                <ul>
                    <li><span>商品总额：</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['orderamount'];?>
</li>
                    <li><span>+ 运费：</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['cost'];?>
</li>
<!--                    <li><span>- 返现：</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['cost'];?>
</li>
                    <li><span>- 余额：</span>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['cost'];?>
</li> -->
                </ul>
            </div>
            <div class="total">
                <div class="extra"> 应付金额：<span class="ftx04"><b>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['orderamount']+$_smarty_tpl->tpl_vars['order']->value['cost'];?>
</b></span> </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>