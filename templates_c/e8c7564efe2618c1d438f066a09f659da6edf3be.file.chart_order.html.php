<?php /* Smarty version Smarty-3.1.14, created on 2018-04-26 11:37:47
         compiled from "F:\WWW\20180426datong\manage_dt\templates\default\chart_order.html" */ ?>
<?php /*%%SmartyHeaderCode:212975ae1498b690569-64649020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c7564efe2618c1d438f066a09f659da6edf3be' => 
    array (
      0 => 'F:\\WWW\\20180426datong\\manage_dt\\templates\\default\\chart_order.html',
      1 => 1448327042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212975ae1498b690569-64649020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'endtime' => 0,
    'starttime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ae1498b6bf378_41214359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae1498b6bf378_41214359')) {function content_5ae1498b6bf378_41214359($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		   var chart = new FusionCharts("templates/default/Charts/Pie3D.swf", "ChartId", "600", "480");
		   //chart.setDataURL("templates/default/Charts/Pie3D.xml");
		   chart.setDataURL(escape("chart_order.php?act=xml&endtime=<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
&starttime=<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
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
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['starttime'];?>

                    </td>
                    <td width="150"><input type="text" name="starttime" class="v5-input in150" id="starttime" value="<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
" readonly="readonly" />
        		
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
                    <td width="80" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['endtime'];?>
</td>
                    <td width="150"><input type="text" name="endtime" class="v5-input in150" id="endtime" value="<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
" readonly="readonly"/>
        
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
                    <td valign="top"style="padding-left:10px;"><input type="image" name="imageField" id="imageField" src="templates/default/images/pro_7.jpg" /></td>
                  </tr>
                </table>
        </form>            
            
        </div>    
    
</body>
</html>
<?php }} ?>