<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:03:49
         compiled from "F:\WWW\shopx\manage\templates\default\privilege_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:503159f1a4f5401090-42227434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956fa93a8b953b6ed7149338e8dc0f4adfa26535' => 
    array (
      0 => 'F:\\WWW\\shopx\\manage\\templates\\default\\privilege_edit.html',
      1 => 1448327058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503159f1a4f5401090-42227434',
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
    'role_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a4f54cc2c1_58180460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a4f54cc2c1_58180460')) {function content_59f1a4f54cc2c1_58180460($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_edit'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" type="text/javascript"></script>
<script src="templates/default/js/artDialog.js?skin=default"></script>
<script src="templates/default/js/iframeTools.source.js"></script>
<script src="templates/default/js/artDialog_js.php"></script>
<script src="templates/default/js/checkf.func.js"></script>
<script src="templates/default/js/mgr.func.js"></script>
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

<form action="" method="post"  id="form" name="form" onsubmit="return cfm_upadmin();">
    <div class="Form02">
      <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['basic'];?>
</h3>
      <table width="100%" border="0" class="v5-table05">
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['info']->value['username']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
<?php }?><input type="hidden" name="username" id="username" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['username']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
<?php }?>"/></td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
</td>
        <td><input type="password" name="password" class="v5-input in180" id="password"/></td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['repassword'];?>
</td>
        <td><input type="password" name="repassword" class="v5-input in180" id="repassword" /></td>
      </tr>
      <tr>
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</td>
        <td><span class="con_name">
          <input type="text" name="email" class="v5-input in180" id="email"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['email']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
<?php }?>"/>
        </span></td>
      </tr><tr>
        <td><span class="red">*</span><?php echo $_smarty_tpl->tpl_vars['lang']->value['mobile'];?>
</td>
        <td><span class="con_name">
          <input type="text" name="mobile" class="v5-input in180" id="mobile"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['mobile']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['mobile'];?>
<?php }?>"/>
        </span></td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['role_id'];?>
</td>
        <td><span class="con_name">
          <select name="role_id" id="role_id" class="v5-select">
            <option value="0">--</option>
            
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                        
            <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['role_id']){?>
                        	<?php if ($_smarty_tpl->tpl_vars['info']->value['role_id']==$_smarty_tpl->tpl_vars['list']->value['id']){?>
                            selected="selected"
                            <?php }?>
                        <?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['list']->value['rolename'];?>

            </option>
            
            <?php } ?>
                    
          </select>
        </span></td>
      </tr>
    </table><input type="hidden" name="id" id="id"  value="<?php if ($_smarty_tpl->tpl_vars['info']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
<?php }?>"/>
            <input type="submit" name="dosubmit" id="dosubmit"  class="dialog" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
">
            <input name="act" id="act" type="hidden" value="subedit" />
</form>  
</body>
</html>
<?php }} ?>