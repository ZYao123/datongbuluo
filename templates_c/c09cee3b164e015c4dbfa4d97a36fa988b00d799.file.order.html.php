<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:29:02
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\order.html" */ ?>
<?php /*%%SmartyHeaderCode:185945ae3dc6eb4f821-19721613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09cee3b164e015c4dbfa4d97a36fa988b00d799' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\order.html',
      1 => 1467344682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185945ae3dc6eb4f821-19721613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'sign' => 0,
    'checkinfo' => 0,
    'countAll' => 0,
    'countPayfor' => 0,
    'countShip' => 0,
    'countReceipt' => 0,
    'countReceipted' => 0,
    'countTuikuan' => 0,
    'countReturned' => 0,
    'countOther' => 0,
    'countnew' => 0,
    'counttask' => 0,
    'url' => 0,
    'info' => 0,
    'from' => 0,
    'act' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3dc6ed37ca5_22175049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3dc6ed37ca5_22175049')) {function content_5ae3dc6ed37ca5_22175049($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\datongbuluo\\web\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\freehost\\datongbuluo\\web\\include\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['order_list'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
<script src="templates/default/laydate/laydate.js"></script>
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
</head>
<body>
    <div class="pro_nr" id="header">
   		<span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>
        <div class="pro_top">
            <ul>
                <li>
                    <A href="order.php?act=list" <?php if (!isset($_smarty_tpl->tpl_vars['sign']->value)&&$_smarty_tpl->tpl_vars['checkinfo']->value==''){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfoall'];?>
(<?php echo $_smarty_tpl->tpl_vars['countAll']->value;?>
)</A>
                </li>
                <li>
                    <A href="order.php?act=list&checkinfo=0"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='0'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo0'];?>
(<?php echo $_smarty_tpl->tpl_vars['countPayfor']->value;?>
)</A>
                </li>
                <li>
                    <A href="order.php?act=list&checkinfo=1"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='1'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo1'];?>
(<?php echo $_smarty_tpl->tpl_vars['countShip']->value;?>
)</A>
                </li>
                <li>
                    <A href="order.php?act=list&checkinfo=2"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='2'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo2'];?>
(<?php echo $_smarty_tpl->tpl_vars['countReceipt']->value;?>
)</A>
                </li>
                <li>
                    <A href="order.php?act=list&checkinfo=3"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='3'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo3'];?>
(<?php echo $_smarty_tpl->tpl_vars['countReceipted']->value;?>
)</A>
                </li>
                 <li>
                    <A href="order.php?act=list&checkinfo=5"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='5'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>>退款(<?php echo $_smarty_tpl->tpl_vars['countTuikuan']->value;?>
)</A>
                </li>           
                <li>
                    <A href="order.php?act=list&checkinfo=4"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='4'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo4'];?>
(<?php echo $_smarty_tpl->tpl_vars['countReturned']->value;?>
)</A>
                </li>                            
                <li>
                    <A href="order.php?act=list&checkinfo=-1"<?php if ($_smarty_tpl->tpl_vars['checkinfo']->value=='-1'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfoOther'];?>
(<?php echo $_smarty_tpl->tpl_vars['countOther']->value;?>
)</A>
                </li>     
                <li>
                    <A href="order.php?act=list&sign=new"<?php if ($_smarty_tpl->tpl_vars['sign']->value=='new'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['sign']['new'];?>
(<?php echo $_smarty_tpl->tpl_vars['countnew']->value;?>
)</A>
                </li>
                <li>
                    <A href="order.php?act=list&sign=task"<?php if ($_smarty_tpl->tpl_vars['sign']->value=='task'){?>style="color:#073164; background:url(templates/default/images/pro_4.jpg) no-repeat;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['sign']['task'];?>
(<?php echo $_smarty_tpl->tpl_vars['counttask']->value;?>
)</A>
                </li>     
            </ul>
        </div>
        <div class="pro_xx">
            <div class="tl">
                <span class="pro_tbl1">
                    <a href="javascript:;" onclick="return ConfDelAll('form');">
                        <img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>

                    </a>
                </span>
                <span class="pro_tbl2">
                    <a href="javascript:;" onclick="$('#act').val('Invalid');$('#form').submit();">
                        <img src="templates/default/images/tbl3.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_Invalid'];?>

                    </a>
                </span>
<!--                <span class="pro_tbl1">
                    <a href="#">&nbsp;删除</a>
                </span> -->
                <span class="pro_tbl1">
                    <a   href="javascript:;" onclick="fun_excel('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
')" ><img src="templates/default/images/tbl4.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_excel'];?>
</a>
                </span>
            </div>
            <div class="tr" style="width:977px;">
                <form action="order.php?act=list" style="border :0px; margin:0px; padding:0px;">
               
                    <input type="image" class="tr" name="imageField" id="imageField" src="templates/default/images/pro_7.jpg" />
                <input name="orderlistnum" type="text" class="pro_text" id="orderlistnum" style="color:#666" onfocus="if (this.value == '<?php echo $_smarty_tpl->tpl_vars['lang']->value['searchnum'];?>
') {this.value='';this.style.color='#000'} "  value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['searchnum'];?>
" />
                <input name="rec_name" type="text" class="pro_text" id="rec_name" style="color:#666" onfocus="if (this.value == '<?php echo $_smarty_tpl->tpl_vars['lang']->value['searchname'];?>
') {this.value='';this.style.color='#000'} "   value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['searchname'];?>
"/>
                <input type="hidden" name="checkinfo" value="<?php echo $_smarty_tpl->tpl_vars['checkinfo']->value;?>
">  
                <input type="hidden" name="sign" value="<?php echo $_smarty_tpl->tpl_vars['sign']->value;?>
"> 
                    <input class="laydate-icon" id="demo1"  name="endtime" style=" float:right" > 
                  <div style="float:right">&nbsp;&nbsp;结束时间：</div>    
             
                  <input class="laydate-icon" id="demo" name="starttime" style=" float:right"> 
                  <div style="float:right">开始时间：</div>
                  
                <script src="templates/default/laydate/pf.js"></script> 
                </form>
            </div>
         </div>
        <div class="pro_bt1" style="margin-top:4px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="5%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">
                            &nbsp; <input type="checkbox" name="checkbox" value="checkbox" onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['orderlistnum'];?>
</td>
                    <td width="7%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="12%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
</td>
                    <td width="22%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['rec_name'];?>
</td>
                  <td width="19%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['orderamount'];?>
</td>
                    <td width="15%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div style="height:134px;"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
        <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <form action="" method="post" id="form" name="form"> 
            <input type="hidden" id="act" name="act" value="subdel" />
            <input type="hidden" name="from" id="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />          
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                 <tr class="pro_bt2">
                    <td height="35" align="center" valign="middle" class="pro_tbr">
                        <span class="tl">
                            &nbsp;<input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span></td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">
                      &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['orderlistnum'];?>
 
                    </td>
                    <td width="7%" align="left" valign="middle" class="pro_tbr"><?php if ($_smarty_tpl->tpl_vars['act']->value=='recycle'){?>
                        <a href="goods.php?act=recycleedit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">	
                            <img src="templates/default/images/pro_11.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_restore'];?>
" />
                        </a>
                        <a href="javascript:;" onclick="return ConfDel('goods.php?act=recycledel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');">
                            <img src="templates/default/images/pro_12.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
" />
                        </a>
                    <?php }else{ ?>
                        <a href="javascript:DialogIframe('order.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['order_edit'];?>
','1000px','','','','','dosubmit');"><img src="templates/default/images/pro_11.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
" /></a>
                        <a href="order.php?act=Invalid&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
"><img src="templates/default/images/pro_12.jpg" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_Invalid'];?>
" /></a>
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']==2){?>
                        <a href="javascript:;" onclick="return DialogIframe('wuliu.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_wuliu'];?>
','550px','','','NULL','','dosubmit');"><img src="templates/default/images/wuliu.png" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_wuliu'];?>
" /></a>
                        <?php }?>
                    <?php }?>
                    </td>
                    <td width="12%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['posttime'],'%Y/%m/%d %H:%M:%S');?>
</td>
                    <td width="22%" align="left" valign="middle" class="pro_tbr"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['username'],20);?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr"><?php echo $_smarty_tpl->tpl_vars['list']->value['rec_name'];?>
</td>
                    <td width="19%" align="left" valign="middle" class="pro_tbr">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['list']->value['orderamount']);?>
元</td>
                    <td width="15%" align="left" valign="middle" class="pro_tbr">
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['checkinfo']==0){?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo0'];?>

                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==1){?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo1'];?>

                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==2){?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo2'];?>

                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==3){?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo3'];?>
 
                            <span style="color:#F00">
                            <?php if ($_smarty_tpl->tpl_vars['list']->value['returnid']==1){?>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['NoReturn'];?>

                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['YesReturn'];?>

                            <?php }?>
                            </span>
                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==4){?> 
                        需要退货
                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==5){?> 
                        需要退款
                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==6){?> 
                        已退款 
                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==7){?> 
                       已退货
                        <?php }elseif($_smarty_tpl->tpl_vars['list']->value['checkinfo']==-1){?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo_1'];?>
                                       
                        <?php }?>                
                    </td>
                </tr>  
                <?php } ?></form>
            </table>
            <?php }else{ ?>
            	<div class="no_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_info'];?>
</div>
            <?php }?>
            <div class="footheight"></div>
        </div>
        <div class="pro_bot" id="footer">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        </div>
	</div>
</body>
</html>
<?php }} ?>