<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 18:16:13
         compiled from "F:\WWW\shopx\manage\templates\default\goods_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:4059f1b5ededc587-89979691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ca1538adc64b5e0dd8cd9145b1eae03e22490e' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\goods_edit.html',
      1 => 1448327046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4059f1b5ededc587-89979691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'info' => 0,
    'class_info' => 0,
    'attr_info' => 0,
    'goods_attr_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1b5ee15b572_80138018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1b5ee15b572_80138018')) {function content_59f1b5ee15b572_80138018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\shopx\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_edit'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" ></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js?default=Math.random()"></script>
<script src="templates/default/js/getuploadify.js"></script>
<script src="templates/default/js/getjcrop.js"></script>
<script src="templates/default/js/jquery.formatCurrency-1.4.0.js" type="text/javascript" ></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
<script type="text/javascript" src="templates/default/js/goods.js"></script>
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
$(document).ready(function() { 
	add_select('<?php echo $_smarty_tpl->tpl_vars['info']->value['classid'];?>
','<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');
});
</script>
</head>

<body> 
    
<form action="" method="post" id="form" name="form" onsubmit="return cfm_goods();">
	<div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
            <tr>
                <td width="150" align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['classid'];?>
：</td>
                <td>
                    <select name="classid" id="classid" class="v5-select"  onchange="add_select(this.value,'<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');">
                    <option value="0">--</option>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['classid']){?>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['classid']==$_smarty_tpl->tpl_vars['list']->value['id']){?>
                            selected="selected"
                            <?php }?>
                        <?php }?>><?php if ($_smarty_tpl->tpl_vars['list']->value['str']){?>|-<?php echo $_smarty_tpl->tpl_vars['list']->value['str'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</option>
                    <?php } ?>
                    </select>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td id="add_select">
                	
                </td>
              </tr>
               <tr>
                <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_attribute'];?>
：</td>
                <td>
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <input name="attribute[<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
]" type="checkbox"  <?php if (in_array($_smarty_tpl->tpl_vars['list']->value['id'],$_smarty_tpl->tpl_vars['goods_attr_info']->value)){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"/>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
&nbsp;
                <?php } ?>
                </td>
              </tr>
            <tr>
                <td align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
：</td>
                <td>
                <input type="text" name="title" id="title" class="v5-input in300" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                <div class="title_panel">
                    <input type="hidden" name="colorval" id="colorval"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['colorval'];?>
"/>
                    <input type="hidden" name="boldval" id="boldval"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['boldval'];?>
"/>
                    <span onclick="colorpicker('colorpanel','colorval','title');" class="color"></span>
                    <span id="colorpanel"></span> 
                    <span onclick="blodpicker('boldval','title');" class="blod"> </span> 
                    <span onclick="clearpicker()" class="clear" title="清除属性">[#]</span>
                </div>
               </td>
        </tr>
              <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['retitle'];?>
：</td>
                <td>
                <input type="text" name="retitle" id="retitle" class="v5-input in300" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['retitle'];?>
" />
                </div>
               </td>
        </tr>
      <tr style="display:none">
        <td align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['goodsNO'];?>
：</td>
        <td><input type="text" name="goodsNO" class="v5-input in180" id="goodsNO"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goodsNO'];?>
" /></td>
      </tr>
       <tr>
        <td> </td>
        <td>
        <input name="phone" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['phone']==1){?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
</td>
        </td>
      </tr>
      <tr id="tr_buyprice">
        <td align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['buyprice'];?>
：</td>
        <td>
        <input type="text" name="buyprice" class="v5-input in180 checkKey" id="buyprice" 
        value="<?php echo $_smarty_tpl->tpl_vars['info']->value['buyprice'];?>
" />
         <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tips']['price'];?>

        </td>
      </tr>
      <tr id="tr_salesprice">
        <td align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['salesprice'];?>
：</td>
        <td><input type="text" name="salesprice" class="v5-input in180 checkKey" id="salesprice"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['salesprice'];?>
" />
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tips']['price'];?>

        </td>
      </tr>
        <tr id="old_price">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['old_price'];?>
：</td>
        <td>
        <input type="text" name="old_price" class="v5-input in180 checkKey" 
        value='<?php echo $_smarty_tpl->tpl_vars['info']->value['old_price'];?>
'/>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tips']['price'];?>

        </td>
      </tr>
      <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['integral'];?>
：</td>
        <td><input type="text" name="integral" class="v5-input in180" id="integral"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['integral'];?>
"  
        onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="return false"
        /><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tips']['integral'];?>
</td>
      </tr>
       <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['need_integral'];?>
：</td>
        <td>
        <input type="text" name="need_integral" class="v5-input in180" id="integral"  
        onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="return false" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['need_integral'];?>
"/>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tips']['need_integral'];?>

        </td>
      </tr>
      <tr style="display:none">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['promotionprice'];?>
：</td>
        <td><input type="text" name="promotionprice" class="v5-input in180" id="promotionprice"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['promotionprice'];?>
"/></td>
      </tr>
      <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['promotiontime'];?>
：</td>
        <td>
        <input type="text" name="starttime" class="v5-input in150" id="starttime"  readonly="readonly"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['starttime']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['starttime'],'%Y-%m-%d %H:%M:%S');?>
<?php }?> " />
		<script type="text/javascript">
            date = new Date();
            Calendar.setup({
                inputField     :    "starttime",
                ifFormat       :    "%Y-%m-%d %H:%M:%S",
                showsTime      :    true,
                timeFormat     :    "24"
            });
            </script>
        -
        <input type="text" name="endtime" class="v5-input in150" id="endtime"  readonly="readonly"   value="<?php if ($_smarty_tpl->tpl_vars['info']->value['endtime']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['endtime'],'%Y-%m-%d %H:%M:%S');?>
<?php }?> "/>
		<script type="text/javascript">
            date = new Date();
            Calendar.setup({
                inputField     :    "endtime",
                ifFormat       :    "%Y-%m-%d %H:%M:%S",
                showsTime      :    true,
                timeFormat     :    "24"
            });
            </script>
        
        </td>
      </tr>
      
      <tr>
        <td align="right"><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['weight'];?>
：</td>
        <td><input type="text" name="weight" class="v5-input in180" id="weight"   value="<?php echo $_smarty_tpl->tpl_vars['info']->value['weight'];?>
"/><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tips']['weight'];?>
</td>
      </tr>
      <tr id="tr_housenum">
        <td align="right"><span class="red">*</span> <?php echo $_smarty_tpl->tpl_vars['lang']->value['housenum'];?>
：</td>
        <td><input type="text" name="housenum" class="v5-input in180" id="housenum"   value="<?php echo $_smarty_tpl->tpl_vars['info']->value['housenum'];?>
"/></td>
      </tr>
      
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['warnnum'];?>
：</td>
        <td><input type="text" name="warnnum" class="v5-input in180" id="warnnum" value="5" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['warnnum'];?>
" /></td>
      </tr>
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['housewarn'];?>
：</td>
        <td><input name="housewarn" type="radio" value="true" <?php if ($_smarty_tpl->tpl_vars['info']->value['housewarn']=='true'){?>checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
        <input name="housewarn" type="radio" value="false" <?php if ($_smarty_tpl->tpl_vars['info']->value['housewarn']=='false'){?>checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</td>
      </tr>
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['payfreight'];?>
：</td>
        <td><input name="payfreight" type="radio" value="true" <?php if ($_smarty_tpl->tpl_vars['info']->value['payfreight']=='true'){?>checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
        <input name="payfreight" type="radio" value="false" <?php if ($_smarty_tpl->tpl_vars['info']->value['payfreight']=='false'){?>checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</td>
      </tr>
            <tr>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
：</td>
                <td>
                    <input name="checkinfo" type="radio" value="true"  <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']=='true'){?>checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
                    <input name="checkinfo" type="radio" value="false"  <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']=='false'){?>checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

                </td>
            </tr>
        </table>
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['depict'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
                  
       
       <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
：</td>
        <td><input type="text" name="orderid" class="v5-input in60" id="orderid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
" onKeyUp="value=value.replace(/[^\d]/g,'')"/></td>
      </tr>
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
：</td>
        <td>
        	<input type="text" name="posttime" class="v5-input in150" id="posttime"  readonly="readonly" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
 " />
            
          <script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "posttime",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
            
        </td>
      </tr>
      <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
：</td>
        <td>
       	  <input type="text" name="picurl" class="v5-input in180" id="picurl"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
"/>
        	<span class="cnote">
                <span class="gray_btn" onclick="GetUploadify('uploadify','<?php echo $_smarty_tpl->tpl_vars['lang']->value['thumupload'];?>
','image','image',1,20000000,'picurl')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uploadpic'];?>
</span>
                <span class="reimg">
                	<input type="checkbox" name="rempic" id="rempic" value="true" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['remote'];?>

                </span> 
                <span class="cutimg">
                	<a href="javascript:;" onclick="GetJcrop('jcrop','picurl');return false;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tailor'];?>
</a>
                </span> 
            </span>
        </td>
      </tr>
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
：</td>
        <td><input type="text" name="keywords" class="v5-input in360" id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['keywords'];?>
"/></td>
      </tr>
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
：</td>
        <td><textarea name="description" id="description" class="v5-textarea tin60 w657"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</textarea></td>
      </tr>
     
     
      
       <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['remark'];?>
：</td>
        <td><textarea name="remark" id="remark" class="v5-textarea tin60 w657"><?php echo $_smarty_tpl->tpl_vars['info']->value['remark'];?>
</textarea></td>
      </tr>
     
      <tr>
        <td align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['picarr'];?>
：</td>
        <td>
            <fieldset class="picarr">
                <legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['list'];?>
</legend>
                <div><?php echo $_smarty_tpl->tpl_vars['lang']->value['most'];?>
<strong>50</strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['spread'];?>
<span onclick="GetUploadify('uploadify2','<?php echo $_smarty_tpl->tpl_vars['lang']->value['uploadphotos'];?>
','image','image',50,200000000,'picarr','picarr_area')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['startupload'];?>
</span></div>
                <ul id="picarr_area">
                	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['picarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li rel="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
"><input type="text" name="picarr[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
"><a href="javascript:void(0);" onclick="ClearPicArr('<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action_del'];?>
</a></li>
                    <?php } ?>
                </ul>
            </fieldset>
        </td>
      </tr>
      <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['content'];?>
：</td>
        <td>
        <input name="checkinfo" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['pc'];?>
"  id="show1" onclick="select_con('con1','con2')"/>
        <input name="checkinfo" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
" id="show2" onclick="select_con('con2','con1')"/>
        <div id="con1">
        <textarea name="content" id="content" class="kindeditor"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</textarea>
        
	<script>
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="content"]', {allowFileManager : true,width:'667px',height:'280px'});
		});
	</script>
        
        </div>
         <div id="con2" style="display:none;">
        <textarea name="phone_content" id="phone_content" class="kindeditor"><?php echo $_smarty_tpl->tpl_vars['info']->value['phone_content'];?>
</textarea>
        
        <script>
                var editor;
                KindEditor.ready(function(K) {
                        editor = K.create('textarea[name="phone_content"]', {allowFileManager : true,width:'667px',height:'280px'});
                });
        </script>
        
        </div>
				<div class="features">
					<input type="checkbox" name="remote" id="remote" value="true" />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['downloadpic'];?>

					&nbsp;
					<input type="checkbox" name="autothumb" id="autothumb" value="true" />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['fristpic'];?>

					&nbsp;
					<input type="checkbox" name="autodesc" id="autodesc" value="true" />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['draw'];?>

					<input type="text" name="autodescsize" id="autodescsize" value="200" size="3" class="input_gray_short" />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['toword'];?>

					&nbsp;
					<input type="checkbox" name="autopage" id="autopage" value="true" />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['autopage'];?>

					<input type="text" name="autopagesize" id="autopagesize" value="5" size="6" class="input_gray_short" />
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['kb'];?>
</div></td>
      </tr>
      <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ser_conent'];?>
：</td>
        <td><textarea name="ser_conent" id="ser_conent" class="kindeditor"><?php echo $_smarty_tpl->tpl_vars['info']->value['ser_conent'];?>
</textarea>
        		
		  <script>
				var editor;
				KindEditor.ready(function(K) {
					editor = K.create('textarea[name="ser_conent"]', {allowFileManager : true,width:'667px',height:'280px'});
				});
				</script>
                </td>
      </tr>
      </table>
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"/>
    <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subedit" />
</form>
</div>
</body>
</html>
<script>

</script><?php }} ?>