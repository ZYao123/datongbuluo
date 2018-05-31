<?php /* Smarty version Smarty-3.1.14, created on 2017-11-16 15:04:34
         compiled from "F:\WWW\shopx\templates\default\member_points.html" */ ?>
<?php /*%%SmartyHeaderCode:214295a0d3882b1f9a3-81623052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a383a5f48c2758fbdce7f5551b7429e95cde5dc0' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\member_points.html',
      1 => 1466589046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214295a0d3882b1f9a3-81623052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webname' => 0,
    'generator' => 0,
    'keyword' => 0,
    'description' => 0,
    'points_member' => 0,
    'points' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0d3882b90e40_86607450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d3882b90e40_86607450')) {function content_5a0d3882b90e40_86607450($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['webname']->value;?>
-会员中心</title>
<meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>

<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<body>
<div class="help_bj">
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

</div>
</body>
</html>
<?php }} ?>