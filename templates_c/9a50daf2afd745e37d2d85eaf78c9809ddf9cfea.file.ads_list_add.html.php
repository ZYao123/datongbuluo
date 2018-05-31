<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 18:56:34
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\ads_list_add.html" */ ?>
<?php /*%%SmartyHeaderCode:116065ae1b062101ac6-61619002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a50daf2afd745e37d2d85eaf78c9809ddf9cfea' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\ads_list_add.html',
      1 => 1448327038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116065ae1b062101ac6-61619002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'js' => 0,
    'k' => 0,
    'list' => 0,
    'class_info' => 0,
    'parentid' => 0,
    'admode_list' => 0,
    'posttime' => 0,
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1b0621c8e71_30267975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1b0621c8e71_30267975')) {function content_5ae1b0621c8e71_30267975($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_list_add'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" ></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
<script src="templates/default/js/getuploadify.js"></script>
<script src="templates/default/js/getjcrop.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
</head>
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
<body onload="GetMode('image')">     
<form action="" method="post" id="form" name="form" onsubmit="return cfm_ads_list();">
<div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
	  <tr>
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
        <td><input type="text" name="title" class="v5-input in180" id="title"/></td>
      </tr>
      <tr>
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['classid'];?>
</td>
        <td>
        <select name="classid" id="classid" class="v5-select">
        <option value="0">--</option>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
            <?php if ($_smarty_tpl->tpl_vars['parentid']->value){?>
                <?php if ($_smarty_tpl->tpl_vars['parentid']->value==$_smarty_tpl->tpl_vars['list']->value['id']){?>
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
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['admode'];?>
</td>
        <td>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admode_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <input type="radio" name="admode" <?php if ($_smarty_tpl->tpl_vars['k']->value=='image'){?> checked="checked" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="GetMode('<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
');" /><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
 &nbsp;
        <?php } ?>
        </td>
      </tr>
      <tr id="adpic">
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
</td>
        <td> <input type="text" name="picurl" class="v5-input in180" id="picurl" />
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
            </span></td>
      </tr>
      <tr id="adlink">
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['linkurl'];?>
</td>
        <td><input type="text" name="linkurl" class="v5-input in180" id="linkurl"/>
        </td>
      </tr>
      <tr id="adtext">
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['adtext'];?>
</td>
        <td><textarea name="adtext" id="adtext" class="v5-textarea tin60 w360"></textarea>
        </td>
      </tr>
      <tr id="adwidth">
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['width'];?>
</td>
        <td><input type="text" name="width"  class="v5-input in60" id="width"/></td>
        </tr>
        <tr id="adheight">
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['height'];?>
</td>
        <td><input type="text" name="height"  class="v5-input in60" id="height"/></td>
        </tr>
      
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
</td>
        <td>
        <input type="text" name="posttime" class="v5-input in150" id="posttime"   readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['posttime']->value;?>
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
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['starttime'];?>
</td>
        <td><input type="text" name="starttime" class="v5-input in150" id="starttime"   readonly="readonly"  />
        		
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "starttime",
					ifFormat       :    "%Y-%m-%d",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                </td>
      </tr>
       <tr>
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['endtime'];?>
</td>
        <td><input type="text" name="endtime" class="v5-input in150" id="endtime"  readonly="readonly"  />
        
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "endtime",
					ifFormat       :    "%Y-%m-%d",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                
        </td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact'];?>
</td>
        <td><input type="text" name="contact" class="v5-input in180" id="contact" /></td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['tel'];?>
</td>
        <td><input type="text" name="tel" class="v5-input in180" id="tel" /></td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</td>
        <td><input type="text" name="email" class="v5-input in180" id="email" /></td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
        <td><input type="text" name="orderid" class="v5-input in60" id="orderid" value="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
"  onKeyUp="value=value.replace(/[^\d]/g,'')" /></td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
        <td>
       		<input name="checkinfo" type="radio" value="true" checked="checked" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
            <input name="checkinfo" type="radio" value="false" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

        </td>
      </tr>
        </table>
	</div>
    
	<input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="">
    <input name="act" id="act" type="hidden" value="subadd" />
</form>
</body>
</html>
<?php }} ?>