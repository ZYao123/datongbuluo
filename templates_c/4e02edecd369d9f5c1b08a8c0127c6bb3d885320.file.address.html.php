<?php /* Smarty version Smarty-3.1.14, created on 2018-04-27 15:06:27
         compiled from "F:\WWW\20180426datong\templates\default\address.html" */ ?>
<?php /*%%SmartyHeaderCode:117495ae18eee2003f9-35065621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e02edecd369d9f5c1b08a8c0127c6bb3d885320' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\templates\\default\\address.html',
      1 => 1524812785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117495ae18eee2003f9-35065621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae18eee2eaa28_09096335',
  'variables' => 
  array (
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'lang' => 0,
    'info' => 0,
    'addr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae18eee2eaa28_09096335')) {function content_5ae18eee2eaa28_09096335($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate ("inc_link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="templates/default/style/webstyle.css" rel="stylesheet" type="text/css" />
</head>
<link type="text/css" rel="stylesheet" href="js/validator.css"></link>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/checkform.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
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
function checkform()
{
	ReadyValidator('form1');
	
	isempty('rec_name','',rec_name,'','true','true','',rec_name);
	isempty('AddrCountry','',AddrCountry,'','true','true','',AddrCountry);
	isempty('AddrProvince','',AddrProvince,'','true','true','',AddrProvince);
	isempty('AddrCity','',AddrCity,'','true','true','',AddrCity);
	isempty('AddrArea','',AddrArea,'','true','true','',AddrArea);
	isempty('cur_address','',cur_address,'','true','true','',cur_address);
	checkzipcode('zipcode',zipcode,zipcode,'',zipcodeerror);
	telandphone('phone',phone,phone,'');
}
</script>
<!--[if IE 6]> 
<script type="text/javascript" src="png.js"></script>
<script>
PNG.fix('*');
</script>
<![endif]-->
<style type="text/css">
.regist_suc
{
position:fixed;
+position:absolute;
+top:expression(eval(document.documentElement.scrollTop||document.body.scrollTop)+50);
}
</style>
<body onload="checkform()">

<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--  body  开始  -->
    <div class="bodys">
        <div class="help"><span class="help_top">首页 >  会员中心 > <span class="help_color">账号管理</span></span>
            <div class="help_bottom">
                <?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
                
<div class="dd">
                    <div class="help_right"><div class="dd_top"><span class="dd_t">收货地址</span></div>
                      <div class="help_list">
<form id="form1" method="post" action="member.php">
            <div class="shdz_nr">
                            <ul>
                                <li><strong class="shdz_color">新增收货地址</strong>&nbsp;电话号码、手机号选填一项 其余均为必填项</li>
                                <li><span class="shdz_wz">收货人姓名:</span>
                                  <input type="text" class="shdz_text" name="rec_name" id="rec_name" style="vertical-align: middle" />
                                  <span id="rec_nameTip"></span></li>
                                <!--<li><span class="shdz_wz">所在地区:</span><span class="shdz_sr">
                                    <select class="shdz_text1">
                                        <option>黑龙江省</option>
                                        &nbsp;
                                    </select>
                                    <select class="shdz_text1">
                                        <option>哈尔滨市</option>
                                        &nbsp;
                                    </select>
                                    <select class="shdz_text1">
                                        <option>道里区</option>
                                        &nbsp;
                                    </select>
                                    *</span></li>-->
                                <li style="height:70px;"><span class="shdz_wz">收货地址<!--街道地址-->:</span><span class="shdz_sr">
         <select name="AddrCountry" id="AddrCountry" onchange="do_area('AddrCountry','AddrProvince','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrProvince'];?>
')" class="in100">
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCountry'];?>
</option>
          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
          <?php } ?>
        </select>
        <select name="AddrProvince" id="AddrProvince" onchange="do_area('AddrProvince','AddrCity','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCity'];?>
')" class="in100">
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrProvince'];?>
</option>
        </select>    
        <select name="AddrCity" id="AddrCity"  class="in100" onchange="do_area('AddrCity','AddrArea','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrArea'];?>
')" >
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCity'];?>
</option>
        </select>          
        <select name="AddrArea" id="AddrArea" class="in100">
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrArea'];?>
</option>
        </select><span id="AddrCountryTip" ></span><span id="AddrProvinceTip" ></span><span id="AddrCityTip" ></span><span id="AddrAreaTip" ></span><br><input  name="cur_address" type="text" class="shdz_text" id="cur_address" value="" style=" clear:both;width:400px" /><span id="cur_addressTip" ></span>
                              </span></li>
                              <li><span class="shdz_wz">邮政编码:</span><span class="shdz_sr">
                                    <input type="text" class="shdz_text3" name="zipcode" id="zipcode" />
                                    &nbsp;&nbsp;</span><span id="zipcodeTip" ></span></li>
                                <li><span class="shdz_wz">手机号码:</span><span class="shdz_sr">
                                    <input type="text" class="shdz_text" name="phone" id="phone" />
                                    &nbsp;&nbsp;</span><span id="phoneTip" style="width:250px"></span></li>
                                <li><span class="shdz_wz">电话号码:</span><span class="shdz_sr">
                                    <input type="text" class="shdz_text" name="telephone" id="telephone" />
                                    <!--<span class="shdz_g">-</span>
                                    <input type="text" class="shdz_text5" />
                                    <span class="shdz_g">-</span>
                                    <input type="text" class="shdz_text4" />
                                    &nbsp;&nbsp;<span class="shdz_color1">区号-电话号码-分机</span>--></span></li>
                                <!--<li><span class="shdz_wz">设为默认:</span><span class="shdz_sr">
                                    <input name="is_first" id="is_first" type="checkbox" value="1" />
                                    </span><span class="login_text3" id="rephone"></span></li>-->
                                <li><span class="shdz_bc"><input type="image" name="imageField" id="imageField" src="templates/default/images/shdz_2.jpg" /></span>
                                  <input name="act" type="hidden" id="act" value="address_jud" />
                                </li>

                            </ul>
                </div>
            </form>
                            
                    <div class="shdz_ybc">已保存的有效地址</div>
                    <div class="shdz_t">
                        <ul>
                            <li class="shdz_l1">收货人</li>
                            <li class="shdz_l2">所在地区</li>
                            <li class="shdz_l3">街道地址</li>
                            <li class="shdz_l4">邮编</li>
                            <li class="shdz_l5">电话/手机</li>
                            <li class="shdz_l55">&nbsp;</li>
                            <li class="shdz_l6">操作</li>
                            <li class="cl"></li>
                        </ul>
                    </div>                            
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['addr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
                    <form id="form" method="post" action="?a=address" onsubmit="return CheckReg();">
                    <div class="shdz_list" onmousemove="this.className = 'shdz_list_on'" onmouseout="this.className = 'shdz_list'">
                        <ul>
                            <li <?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_first']=='1'){?> class='first' <?php }?>>
                            <span class="shdz_l1">
                            <?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['rec_name']){?>
                            <?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['rec_name'];?>

                            <?php }else{ ?>
                            &nbsp;
                            <?php }?>
                            </span>
                            <span class="shdz_l2">
                            <?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['road_address']){?>
                            <?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['road_address'];?>

                            <?php }else{ ?>
                            &nbsp;
                            <?php }?>                            
                            </span>
                            <span class="shdz_l3">
                            <?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cur_address']){?>
                            <?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cur_address'];?>

                            <?php }else{ ?>
                            &nbsp;
                            <?php }?>                            
                            </span>
                            <span class="shdz_l4">
                            <?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['zipcode']){?>
                            <?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['zipcode'];?>

                            <?php }else{ ?>
                            &nbsp;
                            <?php }?>                            
                            </span>
                            <span class="shdz_l5"><?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['telephone'];?>

                            <?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['phone']&&$_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['telephone']){?>/<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['phone'];?>
</span>
                            <span class="shdz_l55"><a href="member.php?act=is_first&id=<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_first']=='1'){?>默认地址<?php }?><?php if ($_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_first']!='1'){?>设为默认<?php }?></a></span>
                            <span class="shdz_l6"><a href="member.php?act=address_update&id=<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
">修改</a>|<a href="member.php?act=address_delete&id=<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" id="address_del" onclick="return confirm('确定删除该收货地址？')">删除</a></span>
                            </li>
                        </ul>
                    </div>
                    <input type="hidden" name="delid" id="delid" value="<?php echo $_smarty_tpl->tpl_vars['addr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" />
                    </form>
                    <?php endfor; endif; ?>
                            
                            
                      </div>
                        <div class="help_tp"></div>
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