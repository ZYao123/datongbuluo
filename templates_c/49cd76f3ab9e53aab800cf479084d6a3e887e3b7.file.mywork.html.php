<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:00:46
         compiled from "F:\WWW\shopx\manage\templates\default\mywork.html" */ ?>
<?php /*%%SmartyHeaderCode:2691259f1a43e89af71-64279904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49cd76f3ab9e53aab800cf479084d6a3e887e3b7' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\mywork.html',
      1 => 1469848317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2691259f1a43e89af71-64279904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home' => 0,
    'session' => 0,
    'nav' => 0,
    'k' => 0,
    'list' => 0,
    'name' => 0,
    'NewOrderCount' => 0,
    'Unit' => 0,
    'MemberCount' => 0,
    'OrderCount' => 0,
    'CommentCount' => 0,
    'SalesTotal' => 0,
    'ProfitsMoney' => 0,
    'HouseCount' => 0,
    'BugCount' => 0,
    'time1' => 0,
    'time2' => 0,
    'time3' => 0,
    'time4' => 0,
    'time5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a43e962326_74434663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a43e962326_74434663')) {function content_59f1a43e962326_74434663($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎</title>
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript" ></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkz.func.js" type="text/javascript"></script>
<script language="JavaScript" src="templates/default/js/FusionCharts.js"></script>
</head>
<body >
<div class="hy">
    <div class="headerl_bj">
        <div class="headerl">
        <div class="logo03">
        <img src="templates/default/images/hy_21.png" />
        </div>
        <div class="icon_list" >
            <ul>
                <li class="icon01">
                <a href="javascript:DialogIframe('bug.php?act=add','<?php echo $_smarty_tpl->tpl_vars['home']->value['bug'];?>
','80%','95%','','','','dosubmit');">
<?php echo $_smarty_tpl->tpl_vars['home']->value['bug'];?>
</a></li>
                <li class="icon02"><a href="../" target="_blank"><?php echo $_smarty_tpl->tpl_vars['home']->value['index'];?>
</a></li>
                <li class="icon03"><a href="index.php?act=clearcache" target="main"><?php echo $_smarty_tpl->tpl_vars['home']->value['cache'];?>
</a></li>
                <li class="icon04"><a href="index.php?act=unlogin"><?php echo $_smarty_tpl->tpl_vars['home']->value['unlogin'];?>
</a></li>
            </ul>
        </div>
        </div>
        
    </div>
    <div class="bodyl_bj">
        <div class="leftl">
           <span class="leftl_top">
                <div class="leftl_text">
                    <a href="index.php?act=default" class="wo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['home']->value['manage'];?>
</a>
                    <a href="#" class="wo1">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['home']->value['box'];?>
</a>
                </div>
            </span>
            <div class="leftl_yh"><span class="tl"><img src="templates/default/images/hy_5.jpg" /></span><span class="leftl_yh_wz"><?php echo $_smarty_tpl->tpl_vars['session']->value['admin'];?>
<br />
<a href="index.php?act=unlogin"><?php echo $_smarty_tpl->tpl_vars['home']->value['unlogin'];?>
</a></span></div>
            <div class="leftl_list">
                <ul>
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                    <li class="leftl_bj2">
                    <span class="leftl_tp">
                    	<div class="ico" id="ico_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></div>
                    </span>
                    <a href="index.php?act=default&from=mywork&menukey=<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="_self"><?php echo $_smarty_tpl->tpl_vars['list']->value['label'];?>
</a>
                    <span class="leftl_sz" style="display:none">7</span></li>
                 <?php } ?>   
                </ul>
                <div style="margin-top:20px;float:left;">
                        <table width="200" align="celter" cellpadding="5" cellspacing="5" style="background:#f5f5f5;color:#616161" >
                            <tr align="left" height="30px" >
                                <td colspan="2" style="padding-left:10px;"><b>服务器信息</b></td>
                            </tr>
                             <tr align="center">
                                <td style="border:1px solid #ccc;padding:3px;">程序名称</td>
                                <td style="border:1px solid #ccc;padding:3px;">SHOPX商城管理系统</td>
                            </tr>
                             <tr align="center">
                                <td style="border:1px solid #ccc;padding:3px;">系统安全</td>
                                <td style="border:1px solid #ccc;padding:3px;">防SQL攻击，后台双重验证 <span style="color:red">★★★★★</span></td>
                            </tr>
                             <tr align="center">
                                <td style="border:1px solid #ccc;padding:3px;">操作系统</td>
                                <td style="border:1px solid #ccc;padding:3px;">Windows XP Linux</td>
                            </tr>
                             <tr align="center">
                                <td style="border:1px solid #ccc;padding:3px;">PHP|MYSQL</td>
                                <td style="border:1px solid #ccc;padding:3px;">iis7.0,MYSQL 5.0以上版本</td>
                            </tr>
                        </table>
                </div>
                <div style="margin-top:20px;float:left;">
                        <table width="200" align="celter" cellpadding="5" cellspacing="5" style="background:#f5f5f5;color:#616161" >
                            <tr align="left" height="30px" >
                                <td colspan="2" style="padding-left:10px;"><b>开发团队</b></td>
                            </tr>
                             <tr   align="center">
                                <td style="border:1px solid #ccc;padding:3px;">总策划</td>
                                <td style="border:1px solid #ccc;padding:3px;">HM</td>
                            </tr>
                             <tr  align="center">
                                <td style="border:1px solid #ccc;padding:3px;">程序开发及UI交互设计</td>
                                <td style="border:1px solid #ccc;padding:3px;">大旭、丹丹、丹妮、Mis Lee、阿雪、小王子、大爽、蒙哥、亮亮</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
        <div class="rightl"> 
        <span class="rightl_top">
        <img src="templates/default/images/hy_010.jpg" align="left" />&nbsp;
        <b>系统版本：V7.3  <a href="http://shopx.longcai.pw" target="_blank" style="color:#0f0">已是最新版本</a></b>
        </span>
            <div class="rightl_bottom">
                <div class="rightl_lists">
                    <ul>
                        <li onclick="window.open('index.php?act=default&from=mywork&menukey=09_orders&sign=new')" style="cursor:pointer;">
                                <span class="hys_tiele2"><?php echo $_smarty_tpl->tpl_vars['name']->value['NewOrderCount'];?>
</span>
                                <div class="hys_bottom2">
                                        <span class="hys_tp"><img src="templates/default/images/hy_tb3.jpg" width="99%" /></span>
                                        <?php echo $_smarty_tpl->tpl_vars['NewOrderCount']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['Article'];?>

                                </div>
                        </li>
                        <li onclick="window.open('index.php?act=default&from=mywork&menukey=05_member')" style="cursor:pointer;">
                               <span class="hys_tiele" ><?php echo $_smarty_tpl->tpl_vars['name']->value['MemberCount'];?>
</span>
                                <div class="hys_bottom">
                                        <span class="hys_tp"><img src="templates/default/images/hy_tb1.jpg" width="100%" /></span>
                                        <?php echo $_smarty_tpl->tpl_vars['MemberCount']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['People'];?>

                                </div>
                        </li>
                        <li onclick="window.open('index.php?act=default&from=mywork&menukey=09_orders&sign=task')" style="cursor:pointer;">
                                <span class="hys_tiele3"><?php echo $_smarty_tpl->tpl_vars['name']->value['OrderCount'];?>
</span>
                                <div class="hys_bottom3">
                                        <span class="hys_tp"><img src="templates/default/images/hy_tb4.jpg" width="100%" /></span>
                                        <?php echo $_smarty_tpl->tpl_vars['OrderCount']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['Article'];?>

                                </div>
                        </li>
                        <li onclick="window.open('index.php?act=default&from=mywork&menukey=10_goods&sign=com')" style="cursor:pointer;">
                            <span class="hys_tiele1">新评论</span>
                            <div class="hys_bottom1">
                                <span class="hys_tp"><img src="templates/default/images/hy_tb2.jpg" width="100%" /></span>
                                <?php echo $_smarty_tpl->tpl_vars['CommentCount']->value;?>
条
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="rightl_lists">
                    <ul>
                         <li><span class="hys_tiele7"><span class="hys_an">
                            </span><?php echo $_smarty_tpl->tpl_vars['name']->value['SalesTotal'];?>
</span>
                            <div class="hys_bottom7"><span class="hys_tp"><img src="templates/default/images/hy_tb8.jpg" width="100%" /></span><?php echo $_smarty_tpl->tpl_vars['SalesTotal']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['Yuan'];?>
                        </div>
                        </li>
                        <li><span class="hys_tiele5"><span class="hys_an">
                            </span>利润总额</span>
                            <div class="hys_bottom5"><span class="hys_tp"><img src="templates/default/images/hy_tb6.jpg" width="100%" /></span>
                            <?php echo $_smarty_tpl->tpl_vars['ProfitsMoney']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['Yuan'];?>
</div>
                        </li>
                        <li onclick="window.open('index.php?act=default&from=mywork&menukey=10_goods')" style="cursor:pointer;">
                                <span class="hys_tiele4">
                                <span class="hys_an">
                            </span><?php echo $_smarty_tpl->tpl_vars['name']->value['HouseCount'];?>
</span>
                            <div class="hys_bottom4"><span class="hys_tp"><img src="templates/default/images/hy_tb5.jpg" width="100%" /></span><?php echo $_smarty_tpl->tpl_vars['HouseCount']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['A'];?>
</div>
                        </li>
                        <li onclick="window.open('index.php?act=default&from=mywork&menukey=11_bug')" style="cursor:pointer;">
                            <span class="hys_tiele6">待审核BUG</span>
                            <div class="hys_bottom6">
                                    <span class="hys_tp">
                                    <img src="templates/default/images/hy_tb7.jpg" width="80%" /></span>
                                    <?php echo $_smarty_tpl->tpl_vars['BugCount']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Unit']->value['Article'];?>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="product" style="padding-top:1%;">
                    <div class="product_title"><span class="product_btwz">报表</span><img src="templates/default/images/hy_16.jpg" width="100%" /></div>
                    <div class="product_tp">
                        <div class="product_tps">   
                            
                            <ul>
                                <li>
                                <span id="userdiv">&nbsp;</span>
				<script type="text/javascript">
								 var chart = new FusionCharts("templates/default/Charts/MSColumn3D.swf", "ChartId", "500", "254");
								 chart.setDataURL(escape("chart_user.php?act=xml&time1=<?php echo $_smarty_tpl->tpl_vars['time1']->value;?>
&time2=<?php echo $_smarty_tpl->tpl_vars['time2']->value;?>
&time3=<?php echo $_smarty_tpl->tpl_vars['time3']->value;?>
&time4=<?php echo $_smarty_tpl->tpl_vars['time4']->value;?>
&time5=<?php echo $_smarty_tpl->tpl_vars['time5']->value;?>
"));
								 chart.addParam("wmode","Opaque");   
								 chart.addParam("wmode","transparent");
								 chart.render("userdiv");
                                </script>                                
                                </li>
                                <li>
                                <span id="orderdiv">&nbsp;</span>	
								<script type="text/javascript">
								 var chart = new FusionCharts("templates/default/Charts/Pie3D.swf", "ChartId", "500", "254");
								 //chart.setDataURL("templates/default/Charts/Pie3D.xml");
								 chart.setDataURL(escape("chart_order.php?act=xml"));
								 chart.addParam("wmode","Opaque"); 
								 chart.addParam("wmode","transparent");  
								 chart.render("orderdiv");
                                </script>  
                                </li>
                                <!--<li><a href="#">走势图<br />
                                    <span class="wz1">Chart</span></a></li> -->
                            </ul> 
                        </div>
                        <img src="templates/default/images/hy_17.jpg" width="100%" height="254" />                   
                    </div>
                    <div class="product_list">
                        <div class="product_lists">
                            <ul>
                                <li><a href="index.php?act=default&from=mywork&menukey=05_member">客户统计<br />
                                    <span class="wz1">Customer</span></a></li>
                                <li style="width:49%;"><a href="index.php?act=default&from=mywork&menukey=09_orders">订单统计<br />
                                    <span class="wz1">Orders</span></a></li>
                                <!--<li><a href="#">走势图<br />
                                    <span class="wz1">Chart</span></a></li> -->
                            </ul>
                        </div>
                        <img src="templates/default/images/hy_18.jpg" width="100%" /></div>
                    <div class="product_db">&nbsp;</div>

                </div>
            </div>
            <div class="hy_bot" style="margin:0px;">Copyright  2009 - 2016 SHOPX All Rights Reserved <span class="color01" style="display:none">longcai</span></div>
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>