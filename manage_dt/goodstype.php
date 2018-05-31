<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/goodstype.php');

/* 此页公共变量 */
$tbname	= '#@__goodstype';
$act 	= isset($act) ? $act : 'list';

/* 产品类型列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("goodstype_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " WHERE classname like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= " order by orderid desc";
	$info = $dopage->getpage($sql);
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('goodstype.html');
}

/* 添加产品类型界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("goodstype_add");
	
	$brand_info = array();
	$brand_info = $dosql->getall("SELECT * FROM `#@__goodsbrand` WHERE parentid=0 and checkinfo='true' order by orderid desc");
	
	$norm_info = array();
	$norm_info = $dosql->getall("SELECT * FROM `#@__goodsnorm` WHERE checkinfo='true' order by orderid desc");
	
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("brand_info", $brand_info);
	$smarty->assign("norm_info" , $norm_info);
	$smarty->assign("from"		, encode64(getcururl()));	//页面来源
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goodstype_add.html');
}

/* 添加产品分类 */
if ($act == 'subadd')
{	
	//验证权限
	chk_privilege("goodstype_add");
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
	if(isset($brand)) $brand = array2string($brand); else $brand = '';
	if(isset($norm)) $norm = array2string($norm); else $norm = '';
	
	$sql = "INSERT INTO `$tbname` (
									`classname`,
									`rename`,
									`orderid`,
									`checkinfo`,
									`brand`,
									`norm`
								) VALUES (
									'$classname',
									'$rename',
									'$orderid',
									'$checkinfo',
									'$brand',
									'$norm'
								)";
	if($dosql->execnonequery($sql))
	{
		$lastid= $dosql->getlastid();
		if(isset($attr) && is_array($attr))
		{
			foreach($attr as $val)
			{
				$attrvalue =  explode(",",$val['attrvalue']);
				$attrvalue = array2string($attrvalue);
				
				$sql = "INSERT INTO `#@__goodstypeattr` (
																`typeid` ,
																`attrname` ,
																`rename` ,
																`showtype` ,
																`attrvalue` ,
																`intype` ,
																`orderid` ,
																`checkinfo` 
																)
																VALUES (
																 '$lastid', 
																 '".$val['attrname']."',
																 '".$val['rename']."', 
																 '".$val['showtype']."',
																 '".$attrvalue."', 
																 '".$val['intype']."',
																 '".$val['orderid']."',
																 '".$val['checkinfo']."'
																)";
				$dosql->execnonequery($sql);
			}
		}
		//添加日志
		insert_log($classname, 'add', 'goods_type');
		
		showsucceed($_LANG['php']['add_succeed'], '','goodstype.php?act=add');
		exit();
	}
}



/* 修改类型界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("goodstype_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` where `id` = $id");
	$info['brand'] = string2array($info['brand']);
	$info['norm'] = string2array($info['norm']);
	$brand_info = array();
	$brand_info = $dosql->getall("SELECT * FROM `#@__goodsbrand` WHERE parentid=0 and checkinfo='true' order by orderid asc");
	
	$norm_info = array();
	$norm_info = $dosql->getall("SELECT * FROM `#@__goodsnorm` WHERE checkinfo='true' order by orderid asc");
	
	$type_info = array();
	$type_info = $dosql->getall("SELECT * FROM `#@__goodstypeattr` WHERE typeid=".$info['id']." order by orderid asc");
	
	foreach($type_info as $key => $val)
	{
		$type_info[$key]['attrvalue']=implode(",",string2array($val['attrvalue']));
	}
	$smarty->assign("info", $info);
	$smarty->assign("type_info", $type_info);
	$smarty->assign("brand_info", $brand_info);
	$smarty->assign("norm_info", $norm_info);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("lang", $_LANG);
	$smarty->display('goodstype_edit.html');

}

/* 修改类型 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("goodstype_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
	
	if(isset($brand)) $brand = array2string($brand); else $brand = '';
	if(isset($norm)) $norm = array2string($norm); else $norm = '';
	
	
	$sql = "UPDATE `$tbname` SET 
								`classname`   = '$classname',
								`rename`      = '$rename',
								`orderid`     = '$orderid',
								`checkinfo`   = '$checkinfo',
								`brand`       = '$brand',
								`norm`        = '$norm'
								WHERE `id` = $id";
						
	if($dosql->execnonequery($sql))
	{
		if(isset($attr) && is_array($attr))
	{
		foreach($attr as $val)
		{
			$attrvalue =  explode(",",$val['attrvalue']);
			$attrvalue = array2string($attrvalue);
			if(isset($val['id']) && $val['id']>0)
			{
				$sql = "UPDATE `#@__goodstypeattr` SET `attrname` = '".$val['attrname']."',
														`rename` = '".$val['rename']."',
														`showtype` = '".$val['showtype']."',
														`attrvalue` = '".$attrvalue."',
														`intype` = '".$val['intype']."',
														`orderid` = '".$val['orderid']."',
														`checkinfo` = '".$val['checkinfo']."'
														WHERE `id` = ".$val['id'];
			}
			else
			{
				$sql = "INSERT INTO `#@__goodstypeattr` (
															`typeid` ,
															`attrname` ,
															`rename` ,
															`showtype` ,
															`attrvalue` ,
															`intype` ,
															`orderid` ,
															`checkinfo` 
															)
															VALUES (
															 '$id', 
															 '".$val['attrname']."',
															 '".$val['rename']."', 
															 '".$val['showtype']."',
															 '".$attrvalue."', 
															 '".$val['intype']."',
															 '".$val['orderid']."',
															 '".$val['checkinfo']."'
															)";
			}
			$dosql->execnonequery($sql);
		}
	}
		//添加日志
		insert_log($classname, 'edit', 'goods_type');
		
		showsucceed($_LANG['php']['add_succeed'], '','goodstype.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除类型 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("goodstype_del");
	
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if (!is_array($id))
	{
		$id = explode(",", $id);
	}	

	foreach ($id as $v)
	{
		$r = $dosql->getone("SELECT `classname` FROM `$tbname` WHERE `id` = $v ");
		$classname = empty($r['classname']) ? '' : $r['classname'];
		
		//添加日志
		insert_log($classname, 'del', 'goods_type');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
		$dosql->execnonequery("DELETE FROM `#@__goodstypeattr` WHERE `typeid` = $v ");
	}
	
	
	$from = dencode64($from);
	header("location:$from");
	exit();
}
/* 更新分类排序 */
if ($act == 'uporder')
{
	foreach($ids as $k => $v)
	{
		$dosql->ExecNoneQuery("UPDATE `$tbname` SET orderid=".$orderid[$k]." WHERE id=$v");
	}
	$from = dencode64($from);
	header("location:$from");
}

/* 添加产品属性界面 */
if ($act == 'addattr')
{
	$start=$attr_i;
	$row=1;
	$id=(int)$id;
	$r = $dosql->getone("SELECT `attrvalue` FROM `#@__goodstypeattr` WHERE `typeid` = $id  order by id asc limit $start,$row" );
	 $attrarr = '';
	 if(isset($r['attrvalue'])){
		$attrarr = string2array($r['attrvalue']);
     }
	
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("attr_i"    , $attr_i);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("result"      , $attrarr);
	$smarty->display('goodstypeattr.html');
}

/* 删除规格值 */
if ($act == 'delnorm')
{
	$dosql->ExecNoneQuery("DELETE FROM `#@__goodstypeattr` WHERE `id` = $id ");
}
?>