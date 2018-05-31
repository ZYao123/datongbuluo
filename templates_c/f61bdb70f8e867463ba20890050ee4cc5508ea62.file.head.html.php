<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:16:13
         compiled from "F:\WWW\shopx\templates\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:836159f1a7dd09ff67-12626669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61bdb70f8e867463ba20890050ee4cc5508ea62' => 
    array (
      0 => 'F:\\WWW\\shopx\\templates\\default\\head.html',
      1 => 1459843579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '836159f1a7dd09ff67-12626669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'keywords' => 0,
    'hotkeywords' => 0,
    'shop_item_num' => 0,
    'template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a7dd0f5e89_02998640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a7dd0f5e89_02998640')) {function content_59f1a7dd0f5e89_02998640($_smarty_tpl) {?><!--  header  开始  -->
<div class="header">
    <?php echo $_smarty_tpl->getSubTemplate ("head_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="header_middle">
       <div style="width:410px;float:left;position: relative!important;">
                <h1 class="logo">
                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = GetArticle_list(28,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>

                        <?php } ?>
                </h1>
                <div style="float:left;">
                        <div style="color:#999;float:left;padding-right:10px;height:46px;line-height:46px;">点击扫描二维码</div>
                        <div style="float:left;cursor:pointer;" onmouseover="javascript:chengimg_ewm(0);" onmouseout="javascript:chengimg_ewm(1);">
                                <img src="templates/default/images/tel_erm.jpg" id="erm_img"/>
                                <div class="sn-qrcode" style="display: none;">
                                        <div class="sn-qrcode-content" style="background: url(include/qr_code.php)">
                                                
                                        </div>
                                </div>
                        </div>
                </div>
                <script>
				function checkSearchForm(){
					var key = $('#keyword').val();
					if(key==''|| key==undefined){
						alert('搜索不能为空');
						$('#keyword').focus();
						return false;
					}
					return true;
				}
                function chengimg_ewm(sign)
                {
                        if(!sign)
                        {
                                $("#erm_img").attr("src",'templates/default/images/tel_erm_hover.jpg');
                                $('.sn-qrcode').show();
                        }else
                        {
                                $("#erm_img").attr("src",'templates/default/images/tel_erm.jpg');
                                $('.sn-qrcode').hide();
                        }

                }
                </SCRIPT>
        </div>
        <div class="ss">
            <div class="ss_top">
            	<form id="searchForm" name="searchForm" method="get" action="item_list.php" onSubmit="return checkSearchForm()">
            
                 <input name="keywords" type="text" id="keyword" onkeyup="keyupdeal(event,this.value);" onkeydown="keydowndeal(event);" onclick="keyupdeal(event,this.value);" onblur="closediv();"  autocomplete="off" class="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
                 
                 <input name="" type="image" src="templates/default/images/index_3.jpg" />
                </form>
                <div id="search_suggest" style="display:none;top:200px;left:757px;" onmouseover='javascript:_over();' onmouseout='javascript:_out();'></div>     
            </div>
            <div class="ss_link">热门搜索：<?php if ($_smarty_tpl->tpl_vars['hotkeywords']->value){?>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotkeywords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
        <a href='item_list.php?keywords=<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</a>&nbsp;
        <?php } ?>
        <?php }?></div>
        </div>
        
        <div class="header_right">
                <span class="header_wz">
                        <span class="cd_dw" 
                        style="background:url(templates/default/images/index_4.jpg) center no-repeat; color:#FFF; text-align:center;" 
                        id='shop_item_num'>
                        <?php echo $_smarty_tpl->tpl_vars['shop_item_num']->value;?>

                        </span>
                </span>
                <span class="cd">
                        <a href="shopcart.php?act=list">去购物车结算</a>
                </span>
        </div>        
        
        
        
    </div>
    <div class="header_bottom">

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/functions.js"></script>
        <div class="fl">
                <a href="javascript::void(0);" onmouseover="mopen('dw')" onmouseout="mclosetime()" >
                <span class="fl_title" ><img src="templates/default/images/tb13.jpg" />全部分类</span>
                </a>
	<?php echo $_smarty_tpl->getSubTemplate ("head_class.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div class="header_b_right">
            <div class="nav">
                <ul>
                    <li><a href="index.php">首页</a></li>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = GetNav('middle'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['list']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--  header  结束  -->

<?php }} ?>