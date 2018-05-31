<?php /* Smarty version Smarty-3.1.14, created on 2018-05-01 19:11:46
         compiled from "D:\freehost\datongbuluo\web\manage_dt\templates\default\chart_user.html" */ ?>
<?php /*%%SmartyHeaderCode:261205ae84b729fc654-76362564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80ffaffa7f1aa54fcf4603b5fdfad62df0b49a0' => 
    array (
      0 => 'D:\\freehost\\datongbuluo\\web\\manage_dt\\templates\\default\\chart_user.html',
      1 => 1448327042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261205ae84b729fc654-76362564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'time1' => 0,
    'time2' => 0,
    'time3' => 0,
    'time4' => 0,
    'time5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae84b72a76778_46083751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae84b72a76778_46083751')) {function content_5ae84b72a76778_46083751($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['chart_order'];?>
</title>
<link href="templates/default/style/admin.css" rel="stylesheet" type="text/css" />
<script src="templates/default/js/jquery.min.js" ></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script> 
<script language="JavaScript" src="templates/default/js/FusionCharts.js"></script>
</head>
<body>
    <div class="pro_nr">
   		<span class="pro_bt">
            <a href="javascript:location.reload();">
            <img onmousemove="src='templates/default/images/pro_2.jpg'" onmouseout="src='templates/default/images/pro_1.jpg'" src="templates/default/images/pro_1.jpg" width="47" height="16"/>
            </a>
        </span>

    </div>

    <div class="pro_nr">
        <div class="pro_bottom">
      <div id="chartdiv" align="center">FusionCharts. </div>
      <script type="text/javascript">
		   var chart = new FusionCharts("templates/default/Charts/MSColumn3D.swf", "ChartId", "900", "450");
		   //chart.setDataURL("templates/default/Charts/MSColumn3D.xml");
		   chart.setDataURL(escape("chart_user.php?act=xml&time1=<?php echo $_smarty_tpl->tpl_vars['time1']->value;?>
&time2=<?php echo $_smarty_tpl->tpl_vars['time2']->value;?>
&time3=<?php echo $_smarty_tpl->tpl_vars['time3']->value;?>
&time4=<?php echo $_smarty_tpl->tpl_vars['time4']->value;?>
&time5=<?php echo $_smarty_tpl->tpl_vars['time5']->value;?>
"));
		   chart.addParam("wmode","Opaque");   
		   chart.render("chartdiv");
		</script>
        </div>
	</div>
        <div class="pro_bot" id="footer" style="clear:both; text-align:left; z-index:1000;">
        <form action="?act=list" method="post" id="form" name="form" >
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="80" align="center">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['datetime'];?>

                    </td>
                    <td width="60"><input type="text" name="time1" class="v5-input in60" id="time1" value="<?php echo $_smarty_tpl->tpl_vars['time1']->value;?>
" readonly="readonly" />
        		
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "time1",
					ifFormat       :    "%Y-%m",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                </td>
                    <td width="10" align="center">+</td>
                    <td width="60"><input type="text" name="time2" class="v5-input in60" id="time2" value="<?php echo $_smarty_tpl->tpl_vars['time2']->value;?>
" readonly="readonly"/>
        
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "time2",
					ifFormat       :    "%Y-%m",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                </td>
                    <td width="10" align="center">+</td>
                    <td width="60"><input type="text" name="time3" class="v5-input in60" id="time3" value="<?php echo $_smarty_tpl->tpl_vars['time3']->value;?>
" readonly="readonly"/>
        
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "time3",
					ifFormat       :    "%Y-%m",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                </td>                
                    <td width="10" align="center">+</td>
                    <td width="60"><input type="text" name="time4" class="v5-input in60" id="time4" value="<?php echo $_smarty_tpl->tpl_vars['time4']->value;?>
" readonly="readonly"/>
        
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "time4",
					ifFormat       :    "%Y-%m",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                </td>
                    <td width="10" align="center">+</td>
                    <td width="60"><input type="text" name="time5" class="v5-input in60" id="time5" value="<?php echo $_smarty_tpl->tpl_vars['time5']->value;?>
" readonly="readonly"/>
                
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "time5",
					ifFormat       :    "%Y-%m",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
                </td>                
                    <td valign="top" style="padding-left:10px;"><input type="image" name="imageField" id="imageField" src="templates/default/images/pro_7.jpg" /></td>
                  </tr>
                </table>
        </form>            
        </div>    
</body>
</html>
<?php }} ?>