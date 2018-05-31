<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 16:03:12
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\member_list.html" */ ?>
<?php /*%%SmartyHeaderCode:158265ae42ac0203235-21589763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f84e67eef7ef5099ed329490101c71717e30591' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\member_list.html',
      1 => 1467355524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158265ae42ac0203235-21589763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'from' => 0,
    'url' => 0,
    'keyword' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae42ac0315cb1_20025610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae42ac0315cb1_20025610')) {function content_5ae42ac0315cb1_20025610($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\datongbuluo\\web\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_list'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/mgr.func.js"></script>
<script src="templates/default/js/checkf.func.js"></script>
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
<form action="" method="post" id="form" onsubmit="return ConfDelAll('form');">
    <input type="hidden" name="from" id="from"value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" />
    <input type="hidden" name="act" id="act" value="subdel" />
    <div class="pro_nr" id="header">
        <span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" 
            src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>
        <div class="pro_xx">
            <div class="tl">
                <span class="pro_tbl1">
                    <a href="javascript:DialogIframe('member.php?act=add&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['member_add'];?>
','80%','95%','','','','dosubmit');">
                    <img src="templates/default/images/tbl1.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['member_add'];?>
</a>
                </span>
                <span class="pro_tbl3">
                    <a href="javascript:;" onclick="return ConfDelAll('form');">
                    	<img src="templates/default/images/tbl2.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>

                    </a>
                </span>
                  <span class="pro_tbl1">
                    <a   href="javascript:;" onclick="fun_excel('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
')" ><img src="templates/default/images/tbl4.jpg" align="left" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action_excel'];?>
</a>
                </span>
            </div>
            <div class="tr">
                <a href="javascript:Upselectorder('member.php','list');" class="tr"><img src="templates/default/images/pro_7.jpg" /></a>
                <input type="text" class="pro_text v5-input in180" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
                   <input class="laydate-icon" id="demo1"  style=" float:right" > 
                  <div style="float:right">&nbsp;&nbsp;结束时间：</div>    
             
                  <input class="laydate-icon" id="demo" style=" float:right"> 
                  <div style="float:right">开始时间：</div>
                  
                <script src="templates/default/laydate/pf.js"></script>
                 会员等级：
                <select name="user_rank" id="user_rank">
                  <option value="0">--全部--</option>
                  <?php echo fun_user_rank(0);?>

                </select>
                 &nbsp;
          
            </div>
        </div>
        <div class="pro_bt1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="7%" height="30" align="center" valign="middle" class="pro_rb">
                        <span class="tl">&nbsp;
                             <input type="checkbox" name="checkbox" value="checkbox"
                             onclick="chk_all($(this).attr('checked'))"/>&nbsp;
                        </span>
                        <a href="#"><img src="templates/default/images/pro_8.jpg" /></a>
                    </td>
                    <td width="7%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
                    <td width="6%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['enteruser'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['user_money'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['frozen_money'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['rank_points'];?>
</td>
                    <!--<td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['pay_points'];?>
</td>-->
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['regtime'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_rb">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['checkuser'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="topheight"></div>
    <div class="pro_nr">
        <div class="pro_bottom">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <tr class="pro_bt2">
                    <td width="7%" height="35" align="left" valign="middle" class="pro_tbr">
                        <span class="tl">
                            &nbsp; <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  />
                        </span>
                        <a href="#">&nbsp;<img src="templates/default/images/pro_9.png" /></a>
                    </td>
                    <td width="7%" align="left" valign="middle" class="pro_tbr pro_l5">
                    	&nbsp;<a href="javascript:;"  onclick="javascript:DialogIframe('member.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lang']->value['updateTitle'];?>
','80%','95%','','','','dosubmit');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_edit'];?>
</a>
                        &nbsp;<a  onclick="return ConfDel('member.php?act=subdel&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a>
                    </td>
                    <td width="6%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>
</td>
					<td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['email'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['enteruser']=='1'){?>
                    通过认证
                    <?php }else{ ?>
                    未通过认证
                    <?php }?></td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['user_money'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['frozen_money'];?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['integral'];?>
</td>
                   <!-- <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['pay_points'];?>
</td>-->
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['regtime'],'%Y-%m-%d');?>
</td>
                    <td width="10%" align="left" valign="middle" class="pro_tbr">&nbsp;<?php if ($_smarty_tpl->tpl_vars['list']->value['checkuser']==0){?>正常<?php }else{ ?>冻结<?php }?></td>
                </tr>
            <?php } ?> 
            </table>
            <div class="footheight"></div>
      </div>
        <div class="pro_bot" id="footer">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

       </div>
   </div>  
</form>
</body>
</html><?php }} ?>