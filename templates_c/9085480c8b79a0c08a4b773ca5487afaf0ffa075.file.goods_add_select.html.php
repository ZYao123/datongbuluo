<?php /* Smarty version Smarty-3.1.14, created on 2018-04-28 13:56:39
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\goods_add_select.html" */ ?>
<?php /*%%SmartyHeaderCode:156135ae40d17c9f339-17720538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9085480c8b79a0c08a4b773ca5487afaf0ffa075' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\goods_add_select.html',
      1 => 1468403160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156135ae40d17c9f339-17720538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand_info' => 0,
    'lang' => 0,
    'list' => 0,
    'attr_info' => 0,
    'list1' => 0,
    'norm_info' => 0,
    'k' => 0,
    'cklist3' => 0,
    'goodsid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae40d17e2bee7_04196847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae40d17e2bee7_04196847')) {function content_5ae40d17e2bee7_04196847($_smarty_tpl) {?>
<table width="100%" border="1" cellspacing="0" cellpadding="0" id="classlist">
	<?php if ($_smarty_tpl->tpl_vars['brand_info']->value){?>
    <tr>
        <td width="60"><?php echo $_smarty_tpl->tpl_vars['lang']->value['brandid'];?>
</td>
        <td id="brand">                  
            <select name="brandid" id="brandid">
            <option value="0">--</option>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['list']['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value['selected']==$_smarty_tpl->tpl_vars['list']->value['list']['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['list']['classname'];?>
</option>
            <?php } ?>
            </select>
        </td>
    </tr>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['attr_info']->value){?>
    <tr>
        <td width="60"><?php echo $_smarty_tpl->tpl_vars['lang']->value['attrname'];?>
</td>    
        <td>    
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>  
            <div class="attrheight">            
                <?php echo $_smarty_tpl->tpl_vars['list']->value['attrname'];?>
:
                <?php if ($_smarty_tpl->tpl_vars['list']->value['intype']=='0'){?>
                    <?php if ($_smarty_tpl->tpl_vars['list']->value['attrvalue']){?>
                        <select name="flag[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
]">
                            <option value="" >--</option>
                            <?php  $_smarty_tpl->tpl_vars['list1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['attrvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list1']->key => $_smarty_tpl->tpl_vars['list1']->value){
$_smarty_tpl->tpl_vars['list1']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['list1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value['selected']==$_smarty_tpl->tpl_vars['list1']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list1']->value;?>
</option>
                            <?php } ?>
                        </select>
                    <?php }?> 
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['list']->value['intype']=='1'){?>
                    <?php if ($_smarty_tpl->tpl_vars['list']->value['attrvalue']){?>
                        <?php  $_smarty_tpl->tpl_vars['list1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['attrvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list1']->key => $_smarty_tpl->tpl_vars['list1']->value){
$_smarty_tpl->tpl_vars['list1']->_loop = true;
?>
                            <input name="flag[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
][]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['list1']->value;?>
" 
                            <?php if (!empty($_smarty_tpl->tpl_vars['list']->value['selected'])&&in_array($_smarty_tpl->tpl_vars['list1']->value,$_smarty_tpl->tpl_vars['list']->value['selected'])){?>checked="checked" <?php }?>/><?php echo $_smarty_tpl->tpl_vars['list1']->value;?>

                        <?php } ?>
                    <?php }?> 
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['intype']=='2'){?>
                    <input type="text" name="flag[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
]" class="v5-input in360" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['selected'];?>
" />
                <?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['list']->value['intype']=='3'){?>
                    <textarea name="flag[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
]" class="v5-textarea tin60 w657"><?php echo $_smarty_tpl->tpl_vars['list']->value['selected'];?>
</textarea>
                <?php }?>
            </div>
            <?php } ?>
        </td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['norm_info']->value){?>
    <tr>
        <td width="60"><?php echo $_smarty_tpl->tpl_vars['lang']->value['normname'];?>
</td>
        <td>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['norm_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>  
               <script type="text/javascript">
                    list[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = new Array();
                    listname[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = '<?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
';
                    /*验证可带长度为2位的小数表单*/

                </script>
                <div class="attrheight">
                    <div style="float:left;margin: 0 3px;">
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
:
                        <input name="norm[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
][normid]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"/>
                        <input name="norm[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
][normname]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['normname'];?>
"/>
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['cklist3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cklist3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['normvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cklist3']->key => $_smarty_tpl->tpl_vars['cklist3']->value){
$_smarty_tpl->tpl_vars['cklist3']->_loop = true;
?>  
                        <script type="text/javascript">
                            normsname[<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
]   		 = new Array();
                            normsname[<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
]['id']   = '<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
';
                            normsname[<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
]['name'] = '<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['name'];?>
';
                            normsname[<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
]['color']= '<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['color'];?>
';
                            normsname[<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
]['pic']  = '<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['pic'];?>
';
                        </script>
                     <div class="attrnameid"> 
                        <div style="float:left;margin:3px;" >
                            <input name="norm[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
][selected][<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['name'];?>
" onclick="setattr(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['compile'];?>
',<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['goodsid']->value;?>
)" style="margin-top:11px" <?php if (array_key_exists($_smarty_tpl->tpl_vars['cklist3']->value['id'],$_smarty_tpl->tpl_vars['list']->value['selected'])){?>checked="checked" <?php }?>/> 
                            <?php if (array_key_exists($_smarty_tpl->tpl_vars['cklist3']->value['id'],$_smarty_tpl->tpl_vars['list']->value['selected'])){?>
                            <script>
							$(document).ready(function() { 
                               setattr(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['compile'];?>
',<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['goodsid']->value;?>
)
							});
							</script>
                            <?php }?>  
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['rdotype']=='color'){?>
                            <div style="width:11px; height:11px; float:left;background-color: <?php echo $_smarty_tpl->tpl_vars['cklist3']->value['color'];?>
; border:1px #333333 solid; margin:14px 3px 0 3px;"></div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['rdotype']=='pic'){?>
                            <div style="width:11px; height:11px; float:left; background:<?php echo $_smarty_tpl->tpl_vars['cklist3']->value['pic'];?>
 border:1px #333333 solid; margin:14px 3px 0 3px;"></div>
                        <?php }?>           
                        <div style="float:left;" >
                            <?php echo $_smarty_tpl->tpl_vars['cklist3']->value['name'];?>
&nbsp;&nbsp;
                        </div>
                         </div>
                    <?php } ?> 
                </div>
                <div style="clear:both"></div>
            <?php } ?>
        </td>
    </tr>

    <?php }else{ ?>
    <script type="text/javascript">
      $("#tr_salesprice").show();
      $("#tr_buyprice").show();
      $("#old_price").show();
      $("#tr_housenum").show();                     
    </script>
    <?php }?>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" id="normsedit" style="margin-top:10px">
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="attrlist" style="margin-top:10px">
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none">
<tr><td id="norm_attr"></td></tr>
</table>

<?php }} ?>