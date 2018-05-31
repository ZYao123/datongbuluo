<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/shopconfig.php');
$watermark_inc = LCSHOP_DATA . 'watermark/watermark.inc.php';
include_once($watermark_inc);
$act = isset($act) ? $act : 'list';

/* 更新配置函数 */
function WriteConfig()
{
	global $dosql, $config_cache;

	$str = '<?php	if(!defined(\'IN_LCSHOP\')) exit(\'Request Error!\');'."\r\n\r\n";
	$dosql->Execute("SELECT `varname`,`vartype`,`varvalue`,`vargroup` FROM `#@__webconfig` ORDER BY orderid ASC");
	while($row = $dosql->GetArray())
	{
		if($row['vartype'] == 'number')
		{
			if($row['varvalue'] == '')
			{
				$row['varvalue'] = 0;
			}

			$str .= "\${$row['varname']} = ".$row['varvalue'].";\r\n";
		}
		else
		{
			$str .= "\${$row['varname']} = '".str_replace("'",'',$row['varvalue'])."';\r\n";
		}
	}
	$str .= '?>';

	if(!Writef($config_cache,$str))
	{
		ShowMsg($_LANG['js']['config'], 'shopconfig.php');
		exit();
	}

}

/* 过滤特殊字符函数 */
function HtmlCode($str)
{
	$str = addslashes($str);
	$str = str_replace('\\\'','\'\'',$str);
	$str = str_replace('\\\\','\\\\\\\\',$str);
	$str = str_replace('$','\$',$str);
	return $str;
}

/* 更新变量 */
if($act == 'update')
{
	
	foreach($_POST as $k=>$v)
	{
	
		if(!$dosql->ExecNoneQuery("UPDATE `#@__webconfig` SET `varvalue`='$v' WHERE varname='$k'"))
		{
			ShowMsg('更新变量失败，可能有非法字符！', 'shopconfig.php');
			exit();
		}
	}

	WriteConfig();
	ShowMsg('成功保存变量并更新配置文件！', 'shopconfig.php');
	exit();
}


/*增加新变量 */
if($act == 'add')
{
	$varname = 'cfg_'.$varname;

	if(preg_match('/[^\S$]/', $varname))
	{
		ShowMsg('变量名不能为空！', 'shopconfig.php');
		exit();
	}
	if($vartype=='bool' && ($varvalue!='Y' && $varvalue!='N'))
	{
		ShowMsg('布尔变量值必须为\'Y\'或\'N\'！', 'shopconfig.php');
		exit();
	}

	if($dosql->GetOne("SELECT `varname` FROM `#@__webconfig` WHERE varname='$varname'"))
	{
		ShowMsg('该变量名称已经存在！', 'shopconfig.php');
		exit();
	}
	
	if($vartype == 'select')
	{
		if(!empty($varvalue))
		{
			$varvalue_arr = array();
			$arr = explode(",",$varvalue);			
			$varoption = array2string($arr);
		}	
		$varvalue = '0';
	}
	else
	{
		$varoption = '';
	}
	
	//获取OrderID
	$row = $dosql->GetOne("SELECT MAX(orderid) AS orderid FROM `#@__webconfig`");
	$orderid = $row['orderid'] + 1;

	$sql = "INSERT INTO `#@__webconfig` (`varname`, `varinfo`, `vargroup`, `vartype`, `varvalue`, `varcontent`, `varoption`, `orderid`) VALUES ('$varname', '$varinfo', '$vargroup', '$vartype', '$varvalue', '$varcontent', '$varoption', '$orderid')";
	
	if($dosql->ExecNoneQuery($sql))
	{
		WriteConfig();
		ShowMsg('成功保存变量并更新配置文件！', 'shopconfig.php');
		exit();
	}
	else
	{
		ShowMsg('新增变量失败，可能有非法字符！', 'shopconfig.php');
		exit();
	}
	

}


/* 保存水印设置 */
if($act == 'update_wmk')
{
	$vars = array('markswitch','marktype','markminwidth','markminheight','markpicurl','marktext','markcolor','marksize','markwhere');
	$str = '';

	foreach($vars as $v)
	{
		${$v} = str_replace("'", "", ${$v});
		$str .= "\$cfg_{$v} = '".${$v}."';\r\n";
	}

	$str = '<?php	if(!defined(\'IN_LCSHOP\')) exit(\'Request Error!\');'."\r\n\r\n".$str."\r\n".'?>';
	
	if(Writef($watermark_inc, $str))
	{
		ShowMsg('成功更新水印配置！', 'shopconfig.php');
		exit();
	}
	else
	{
		ShowMsg('保存 watermark.inc.php 文件失败，可能是由于没有写入权限，因此不能更新配置！', 'shopconfig.php');
		exit();
	}
}

/* 配置列表 */
if($act == 'list')
{

	//验证权限
	chk_privilege("shop_manage");
	$config_tab_arr = array();
	foreach($_LANG['shop_nav'] as $key => $val)
	{
		$config_tab_arr['name'][] = $_LANG['shop_nav'][$key];
		
		$r = $dosql->getall("SELECT * FROM `#@__webconfig` WHERE `vargroup`=".$key." ORDER BY `orderid` ASC");
		if($r)
		{	
			foreach($r as $k => $v)
			{
				if($r[$k]['vartype'] == 'select')
				{
					$r[$k]['varoption']=string2array($r[$k]['varoption']);
				}
			}
			$config_tab_arr['val'][$key]  = $r;
		}
		else
		{
			$config_tab_arr['val'][$key]  = array();
		}
		
	}

	$config_tab_num = count($_LANG['shop_nav']);
	//print "<pre>";
	//print_r($config_tab_arr);die;
	$smarty->assign("config_tab_arr", $config_tab_arr);	
	$smarty->assign("config_tab_num", $config_tab_num);	
	$smarty->assign("lang", $_LANG);	
	
	$smarty->assign("cfg_markswitch", $cfg_markswitch);
	$smarty->assign("cfg_marktype", $cfg_marktype);
	$smarty->assign("cfg_markminwidth", $cfg_markminwidth);
	$smarty->assign("cfg_markminheight", $cfg_markminheight);
	$smarty->assign("cfg_markpicurl", $cfg_markpicurl);
	$smarty->assign("cfg_marktext", $cfg_marktext);
	$smarty->assign("cfg_markcolor", $cfg_markcolor);
	$smarty->assign("cfg_marksize", $cfg_marksize);
	$smarty->assign("cfg_markwhere", $cfg_markwhere);
	//$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('shopconfig.html');
}
?>