<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 10:10:11
         compiled from "D:\freehost\datongbuluo\web\templates\default\member_points.html" */ ?>
<?php /*%%SmartyHeaderCode:212735ae3d8034657d3-22259560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f86bb7ef3df657fa45f420a626cbb701f062d2f' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\templates\\default\\member_points.html',
      1 => 1524812428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212735ae3d8034657d3-22259560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'points_member' => 0,
    'points' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae3d8034fe138_32693750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae3d8034fe138_32693750')) {function content_5ae3d8034fe138_32693750($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>

<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body>

<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <!--  body  开始  -->
    <div class="bodys">
        <div class="help"><span class="help_top">首页 >  会员中心 > <span class="help_color">账号管理</span></span>
            <div class="help_bottom">
                <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
<div class="dd">
                    <div class="help_right"><span class="dd_wz"></span>
                        <div class="dd_top"><span class="dd_t">我的积分</span></div>
                        <div class="hyxx_list">
                            <table width="1065" border="0" cellspacing="0" cellpadding="0">
                        
                                <tr>
                                    <td width="162" height="40" align="left" valign="top">当前拥有积分：<span class="jifen"><?php echo $_smarty_tpl->tpl_vars['points_member']->value['integral'];?>
</span> 积分&nbsp;&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="56" align="right" valign="top">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <?php if ($_smarty_tpl->tpl_vars['points']->value){?>
                                 
									<tr>
                                    <td height="28" align="left" valign="middle" class="help_back"><span class="yidong">来源</span></td>
                                    <td width="218" align="center" valign="middle" class="help_back"> 积分 </td>
                                  
                                    <td width="263" align="center" valign="middle" class="help_back">日期</td>
                                    <td width="133" align="center" valign="middle" class="help_back">类型</td>
                               		</tr>
                                     <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['points']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                                	<tr>
                                  	<td height="38" align="left" valign="middle" class="help_bor ys1"><?php echo $_smarty_tpl->tpl_vars['list']->value['jianjie'];?>
</td>
                                    <td align="center" valign="middle" class="help_bor"><?php if ($_smarty_tpl->tpl_vars['list']->value['zt']==1){?><?php echo $_smarty_tpl->tpl_vars['list']->value['integral'];?>
<?php }else{ ?><font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['list']->value['integral'];?>
</font><?php }?></td>
                                 
                                    <td align="center" valign="middle" class="help_bor"><?php echo getdateTime($_smarty_tpl->tpl_vars['list']->value['posttime']);?>
</td>
                                    <td align="center" valign="middle" class="help_bor ys4"><?php if ($_smarty_tpl->tpl_vars['list']->value['zt']==1){?>增加<?php }else{ ?><font color="#FF0000">扣除</font><?php }?></td>
                                	</tr>
                                     <?php } ?>
                                	<tr>
                                	  <td height="28" colspan="5" align="right" valign="middle"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</td>
                               	    </tr>
                                    <?php }else{ ?>
                                    <tr>
                                	  <td height="28" colspan="5" align="center" valign="middle">亲，您还没有积分哦</td>
                               	    </tr>
                                    <?php }?>
                                   
								</table>
</td>
                                </tr>
                            </table>
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