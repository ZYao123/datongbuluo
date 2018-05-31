<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/goodsnorm.php');

/* 此页公共变量 */
$tbname	= '#@__goodsnorm';
$act 	= isset($act) ? $act : 'list';

/* 规格列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("norm_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` WHERE id<>'' ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND attrname like '%".$keyword."%'";
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
	$smarty->display('goodsnorm.html');
}

/* 添加规格界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("norm_add");
	
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goodsnorm_add.html');
}

/* 添加规格 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("norm_add");
	
	if($normname=='')
	{
		showmsg($_LANG['js']['normname'], '1');
		exit();
	}
		
	$norm_count = count(array_filter(array_get_by_key($norm,"name"),"norm_var"));
	if($norm_count > 0)
	{
		showmsg($_LANG['js']['norm_colorname'], '1');
		exit();
	} 																
						
	if(!isset($checkinfo)) $checkinfo = 'true'; 

	$sql = "INSERT INTO `$tbname` (
									`normname`,
									`classname`,
									`rename`,
									`rdotype`,
									`orderid`,
									`checkinfo`,
									`compile`
								) VALUES (
									'$normname',
									'$classname',
									'$rename',
									'$rdotype',
									'$orderid',
									'$checkinfo',
									'$compile'
								)";
					
	if($dosql->execnonequery($sql))
	{
		$lastid=$dosql->getlastid();
		if(is_array($norm))
		{
			foreach($norm as $val)
			{
				if(is_array($val))
				{
					$sql = "INSERT INTO `#@__goodsnorm_value`(normid,name,color,pic) VALUES('$lastid','".$val['name']."','".$val['color']."','".$val['pic']."')";
					$dosql->execnonequery($sql);
				}
				
			}
		}
		//添加日志
		insert_log($normname, 'add', 'goods_norm');
		showsucceed($_LANG['php']['add_succeed'], '','goodsnorm.php?act=add');
		exit();
	}
}



/* 修改规格界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("norm_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$norm = array();
	$norm = $dosql->getall("SELECT * FROM `#@__goodsnorm_value` WHERE `normid`=$id order by id asc");
	$countcheck = count($norm);
	$smarty->assign("countcheck", $countcheck);
	$smarty->assign("norm", $norm);
	$smarty->assign("info"		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goodsnorm_edit.html');

}

/* 修改规格 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("norm_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	

	if($normname=='')
	{
		showmsg($_LANG['js']['normname'], '1');
		exit();
	}
	
	$norm_count = count(array_filter(array_get_by_key($norm,"name"),"norm_var"));
	if($norm_count > 0)
	{
		showmsg($_LANG['js']['norm_colorname'], '1');
		exit();
	} 	
	
	if(!isset($checkinfo)) $checkinfo = 'false'; 
									
	$sql = "UPDATE `$tbname` SET 
								`normname`  = '$normname',
								`classname` = '$classname',
								`rename`    = '$rename',
								`rdotype`   = '$rdotype',
								`orderid`   = '$orderid',
								`checkinfo` = '$checkinfo',
								`compile`   = '$compile'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		if(is_array($norm))
		{
			foreach($norm as $val)
			{
				if(is_array($val)){
					if(isset($val['id']) && is_numeric($val['id']))
					{
						$sql = "UPDATE `#@__goodsnorm_value` SET `name`='".$val['name']."',`color`='".$val['color']."',`pic`='".$val['pic']."' WHERE `id`=".$val['id'];
					}
					else
					{
						$sql = "INSERT INTO `#@__goodsnorm_value`(normid, name,color,pic) VALUES('".$id."', '".$val['name']."','".$val['color']."','".$val['pic']."')";
					}
					$dosql->execnonequery($sql);
					
				}
			}
		}
		//添加日志
		insert_log($normname, 'edit', 'goods_norm');
		showsucceed($_LANG['php']['add_succeed'], '','goodsnorm.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除规格 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("norm_del");
	
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
		$r = $dosql->getone("SELECT `normname` FROM `$tbname` WHERE `id` = $v ");
		$classname = empty($r['normname']) ? '' : $r['normname'];
		
		//添加日志
		insert_log($classname, 'del', 'goods_norm');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
		$dosql->execnonequery("DELETE FROM `#@__goodsnorm_value` WHERE `normid` = $v ");
	}
	 
	
	$from = dencode64($from);
	header("location:$from");
	exit();
}
/* 删除规格值 */
if ($act == 'delnorm')
{
	$dosql->ExecNoneQuery("DELETE FROM `#@__goodsnorm_value` WHERE `id` = $id ");
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

function norm_var($var)
{	
	if(!empty($var))
	{
		return false;
	}
	return true;
}
?>