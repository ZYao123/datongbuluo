<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 18:40:48
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\article_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:292585ae1acb07d7597-76359611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d08fc1b651850d8f6fee8a4a45f509efc9c543' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\article_edit.html',
      1 => 1448327040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292585ae1acb07d7597-76359611',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1acb09d7194_11497301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1acb09d7194_11497301')) {function content_5ae1acb09d7194_11497301($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\20180426datong\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['article_edit'];?>
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

<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
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
<body>  
<form action="" method="post" id="form" name="form" onsubmit="return cfm_article();">
    <div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
        <table width="100%" border="0" class="v5-table05">
<tr>
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
        <td>
        	<input type="text" name="title" class="v5-input in180" id="title" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<?php }?>" />
            <div class="title_panel">
                <input type="hidden" name="colorval" id="colorval"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['colorval']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['colorval'];?>
<?php }?>"/>
                <input type="hidden" name="boldval" id="boldval"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['boldval']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['boldval'];?>
<?php }?>"/>
                <span onclick="colorpicker('colorpanel','colorval','title');" class="color"></span>
                <span id="colorpanel"></span> 
                <span onclick="blodpicker('boldval','title');" class="blod"> </span> 
                <span onclick="clearpicker()" class="clear" title="清除属性">[#]</span>
            </div>
       </td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['classid'];?>
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
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['picurl'];?>
</td>
        <td><input type="text" name="picurl" class="v5-input in180" id="picurl" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['picurl']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['picurl'];?>
<?php }?>"/>
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
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['linkurl'];?>
</td>
        <td><input type="text" name="linkurl" class="v5-input in180" id="linkurl" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['linkurl']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['linkurl'];?>
<?php }?>"/>
        </td>
      </tr> 
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
</td>
        <td><input type="text" name="keywords" class="v5-input in180" id="keywords" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['keywords']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['keywords'];?>
<?php }?>"/>
        </td>
      </tr>
      <tr>
        <td width="150" height="38"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
        <td width="878"><textarea name="description" id="description" class="v5-textarea tin60 w657"><?php if ($_smarty_tpl->tpl_vars['info']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
<?php }?></textarea></td>
      </tr>
      <tr>
        <td> </td>
        <td>
        <input name="phone" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['phone']==1){?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
</td>
        </td>
      </tr>
       <tr>
        <td width="150" height="38"><?php echo $_smarty_tpl->tpl_vars['lang']->value['content'];?>
</td>
        <td width="878">
                <input name="checkinfo" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['pc'];?>
"  id="show1" onclick="select_con('con1','con2')"/>
                <input name="checkinfo" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
" id="show2" onclick="select_con('con2','con1')"/>
        <div id='con1'>
        <textarea name="content" id="content" class="kindeditor"><?php if ($_smarty_tpl->tpl_vars['info']->value['content']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
<?php }?></textarea>
       			
		  		<script>
				var editor;
				KindEditor.ready(function(K) {
					editor = K.create('textarea[name="content"]', {allowFileManager : true,width:'667px',height:'280px'});
				});
				</script>
                
        </div>
        <div style="display:none;" id="con2">
        <textarea name="phone_content" id="phone_content" class="kindeditor"><?php if ($_smarty_tpl->tpl_vars['info']->value['phone_content']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['phone_content'];?>
<?php }?></textarea>
                        
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
</div>	
        </td>
      </tr>
      
      
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['posttime'];?>
</td>
        <td>
        <input type="text" name="posttime" class="v5-input in150" id="posttime"   readonly="readonly" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['posttime']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['posttime'],'%Y-%m-%d %H:%M:%S');?>
<?php }?>"/>
       			
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
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</td>
        <td><input type="text" name="author" class="v5-input in60" id="author"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['author']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
<?php }?>"/></td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['orderid'];?>
</td>
        <td><input type="text" name="orderid" class="v5-input in60" id="orderid"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['orderid']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
<?php }?>"  onKeyUp="value=value.replace(/[^\d]/g,'')" /></td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['hits'];?>
</td>
        <td><input type="text" name="hits" class="v5-input in60" id="hits"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['hits']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['hits'];?>
<?php }?>" /></td>
      </tr>
       <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['checkinfo'];?>
</td>
        <td>
        	<input name="checkinfo" type="radio" value="true"  
                <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']=='true'){?>checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
&nbsp;
            <input name="checkinfo" type="radio" value="false" 
            <?php if ($_smarty_tpl->tpl_vars['info']->value['checkinfo']=='false'){?>checked="checked" <?php }?>  />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

        </td>
      </tr>
        </table>
	</div>
    	<input type="hidden" name="id" id="id"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php }?>"/>
        <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
">
        <input name="act" id="act" type="hidden" value="subedit" />
</form>
</body>
</html>
<?php }} ?>