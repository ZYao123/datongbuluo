<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:17:34
         compiled from "F:\WWW\shopx\templates\default\orderaddr.html" */ ?>
<?php /*%%SmartyHeaderCode:2374759f1a82ed355f7-59058427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f4c73d644a0394fbc17b6e47ee5d719f6e0c51' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\orderaddr.html',
      1 => 1459910674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2374759f1a82ed355f7-59058427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'k' => 0,
    'totalnum' => 0,
    'list' => 0,
    'divid' => 0,
    'act1' => 0,
    'js' => 0,
    'info1' => 0,
    'lang' => 0,
    'TemAddressIDS' => 0,
    'TemAddressID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a82ee56736_88857877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a82ee56736_88857877')) {function content_59f1a82ee56736_88857877($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="js/validator.css"></link>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
    <div onclick="selectaddr(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalnum']->value;?>
)" id='div<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' <?php if (($_smarty_tpl->tpl_vars['list']->value['is_first']=="1"&&$_smarty_tpl->tpl_vars['divid']->value>="1")||($_smarty_tpl->tpl_vars['k']->value=="0"&&$_smarty_tpl->tpl_vars['divid']->value=="0")){?> class="addrlist2" <?php }else{ ?> class="addrlist" onmouseover="this.className = 'addrlist1'" onmouseout=" this.className = 'addrlist'"<?php }?>>
        <input onclick="Calculate()" type="radio" name="aid" id="aid<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['list']->value['is_first']=="1"&&$_smarty_tpl->tpl_vars['divid']->value>="1")||($_smarty_tpl->tpl_vars['k']->value=="0"&&$_smarty_tpl->tpl_vars['divid']->value=="0")){?> checked="checked" <?php }?> />
        <span><?php echo $_smarty_tpl->tpl_vars['list']->value['road_address'];?>
 <?php echo $_smarty_tpl->tpl_vars['list']->value['cur_address'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['rec_name'];?>
(收)</span>&nbsp;&nbsp;
        <?php echo $_smarty_tpl->tpl_vars['list']->value['zipcode'];?>
&nbsp;&nbsp;
        <?php echo $_smarty_tpl->tpl_vars['list']->value['phone'];?>
&nbsp;&nbsp;
        <?php echo $_smarty_tpl->tpl_vars['list']->value['telephone'];?>
 
        <?php if ($_smarty_tpl->tpl_vars['act1']->value=='update'){?>　<?php if ($_smarty_tpl->tpl_vars['list']->value['is_first']!="1"){?><a  href='javascript:;' onclick="Getphp('orderinfo.php?act=addr&act1=isfirst&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','address')">设为默认</a><?php }else{ ?>　　　　<?php }?>　
        <a href='javascript:;' onclick="Getphp('orderinfo.php?act=addr&act1=update1&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','address')">修改</a><?php }?>
    </div>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['info']->value==null||$_smarty_tpl->tpl_vars['act1']->value=='update'||$_smarty_tpl->tpl_vars['act1']->value=='update1'){?>

<script src="js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/checkform.js" type="text/javascript" charset="UTF-8"></script>
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
ReadyValidator('form1');
wenzi('rec_name',rec_name,'',rec_name);
isempty('AddrCountry','',AddrCountry,'','true','true','',AddrCountry);
isempty('AddrProvince','',AddrProvince,'','true','true','',AddrProvince);
isempty('AddrCity','',AddrCity,'','true','true','',AddrCity);
isempty('AddrArea','',AddrArea,'','true','true','',AddrArea);
isempty('cur_address','',cur_address,'','true','true','',cur_address);
checkzipcode('zipcode',zipcode,zipcode,'',zipcodeerror);
telandphone2('phone',phone,phone,'','手机号不正确');
telandphone2('telephone',phone,phone,'','电话号码不正确');
</script>  
<?php if ($_smarty_tpl->tpl_vars['info']->value==null){?><input type="hidden" name="aid" id="aid" value="0" /><?php }?>
<form id="form1" method="post">
        <div class="shdz_nr">
            <ul>
                <li><span class="shdz_wz">收货人姓名:</span><span class="shdz_sr">
                    <input type="text" class="shdz_text" name="rec_name" id="rec_name" value="<?php echo $_smarty_tpl->tpl_vars['info1']->value['rec_name'];?>
" />
                    &nbsp;*</span><span id="rec_nameTip"></span></li>
                <li style="height:67px;"><span class="shdz_wz">收货地址:</span><span class="shdz_sr">            
        <select name="AddrCountry" id="AddrCountry" onchange="do_area('AddrCountry','AddrProvince','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrProvince'];?>
')" class="in100">
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCountry'];?>
</option>
          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[1]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
          <?php } ?>
        </select>
        <select name="AddrProvince" id="AddrProvince" onchange="do_area('AddrProvince','AddrCity','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCity'];?>
')" class="in100">
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrProvince'];?>
</option>
          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[2]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
          <?php } ?>          
        </select>    
        <select name="AddrCity" id="AddrCity"  class="in100" onchange="do_area('AddrCity','AddrArea','<?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrArea'];?>
')" >
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrCity'];?>
</option>
          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[3]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
          <?php } ?>          
        </select>          
        <select name="AddrArea" id="AddrArea" class="in100">
          <option value="" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['AddrArea'];?>
</option>
          <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TemAddressIDS']->value[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['TemAddressID']->value[4]==$_smarty_tpl->tpl_vars['list']->value['id']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
          <?php } ?>          
        </select>        
              <span id="AddrCountryTip" ></span><span id="AddrProvinceTip" ></span><span id="AddrCityTip" ></span><span id="AddrAreaTip" ></span><br>
                 <input name="cur_address" type="text" class="shdz_text2" id="cur_address" style="margin-left:103px;" value="<?php echo $_smarty_tpl->tpl_vars['info1']->value['cur_address'];?>
" size="" />
                    &nbsp;*&nbsp;&nbsp;<!--<span class="shdz_color1">不需要重复填写省/市/区</span>--></span><span id="cur_addressTip" ></span></li>
                <li><span class="shdz_wz">邮政编码:</span><span class="shdz_sr">
                    <input type="text" class="shdz_text" name="zipcode" id="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['info1']->value['zipcode'];?>
" />
                    &nbsp;*&nbsp;&nbsp;</span><span id="zipcodeTip" ></span></li>
                <li><span class="shdz_wz">手机号码:</span><span class="shdz_sr">
                    <input type="text" class="shdz_text" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['info1']->value['phone'];?>
"  />
                    &nbsp;&nbsp;</span><span id="phoneTip" style="width:250px"></span></li>
                <li><span class="shdz_wz">电话号码:</span><span class="shdz_sr">
                    <input type="text" class="shdz_text" name="telephone" id="telephone" value="<?php echo $_smarty_tpl->tpl_vars['info1']->value['telephone'];?>
" />
                   </span><span id="telephoneTip" style="width:250px"></span></li>
                <li><span class="shdz_wz">设为默认:</span><span class="shdz_sr">
                    <input name="is_first" type="checkbox" id="is_first" value="1" <?php if ($_smarty_tpl->tpl_vars['info1']->value['is_first']=='1'){?>checked<?php }?>/>
                    <input type="hidden" name="act" id="act" value="addr" />
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['info1']->value['id'];?>
" />
                    <input type="hidden" name="act1" id="act1" value="<?php if ($_smarty_tpl->tpl_vars['act1']->value=='update1'){?>updatepost<?php }else{ ?>add<?php }?>" />
                    </span></li>
                <li><span class="shdz_bc">
                  <img  src="templates/default/images/shdz_2.jpg" style=" cursor: pointer" onclick="ajaxdosubmit('form1','orderinfo.php','address')" />
                 </span></li>
            </ul>
            <div style="clear:both"></div>
        </div>
      </form>
<?php }?><?php }} ?>