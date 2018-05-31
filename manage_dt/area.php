<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/area.php');

/* 此页公共变量 */
$tbname	  = '#@__area';
$act 	  = isset($act) ? $act : 'list';
$parentid = isset($parentid) ? $parentid : 0;

/* 地区列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("area_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` WHERE 1=1 ";
	if(isset($parentid))
	{
		$sql .= " AND parentid=".$parentid;
	}
	else
	{
		$sql .= " AND parentid=0";
	}
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND classname like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= " order by orderid desc";
	$info = $dopage->getpage($sql);
	
	if (count($info) > 0)//是否为空数组
	{
		$count = count(explode(',',$info[0]['parentstr']))-1;
	}
	else
	{
		$count = 1;
	}
	
	switch($count)
	{
		case 1 :
			$area_add = @$cfg_one_area;
			break;
		case 2 :
			$area_add = @$cfg_two_area;
			break;
		case 3 :
			$area_add = @$cfg_three_area;
			break;
		case 4 :
			$area_add = @$cfg_four_area;
			break;
		default:
			$area_add = @$cfg_one_area;
			break;
	}
	$smarty->assign("area_add"  , $area_add);
	$smarty->assign("count"  	, $count);
	$smarty->assign("js"  		, $_LANG['js']);
	$smarty->assign("lang"		, $_LANG);
	$smarty->assign("info"		, $info);
	$smarty->assign("keyword"	, $keyword);
	$smarty->assign("page"		, $dopage->getlist());
	$smarty->assign("parentid"	, $parentid);
	$smarty->assign("from"		, encode64(getcururl()));	//页面来源
	$smarty->display('area.html');
}

/* 添加地区界面 */
if ($act == 'add')
{	
	//验证权限
	chk_privilege("area_add");
	
	$class_info = array();
	$class_info = getallcat($tbname, 'id', 3);

	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('area_add.html');
}

/* 添加地区 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("area_add");
	
	$parentstr	= getparentstr($tbname, $parentid);
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
		
	$classname = trim($classname);
	$arr = explode("\n",$classname);
	if(count($arr)>0)
	{
		foreach($arr as $key => $val)
		{
			if(!empty($val))
			{
				$val = trim($val);
				$order_id = $orderid+$key;
				$sql = "INSERT INTO `$tbname` (`parentid`,`parentstr`,`classname`,`orderid`,`checkinfo`) VALUES ('$parentid','$parentstr','$val','$order_id','$checkinfo')";
				$dosql->execnonequery($sql);
				//添加日志
				insert_log($val, 'add', 'area');
			}
		}
		showsucceed($_LANG['php']['add_succeed'], '','area.php?act=add&parentid='.$parentid);
		exit();
	}
	else
	{
		$sql = "INSERT INTO `$tbname` (`parentid`,`parentstr`,`classname`,`orderid`,`checkinfo`) VALUES ('$parentid','$parentstr','$classname','$orderid','$checkinfo')";
		if($dosql->execnonequery($sql))
		{
			//添加日志
			insert_log($classname, 'add', 'area');
			showsucceed($_LANG['php']['add_succeed'], '','area.php?act=add&parentid='.$parentid);
			exit();
		}
	}
}



/* 修改地区界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("area_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$class_info = array();
	$class_info = getallcat($tbname, 'id', 3);

	$smarty->assign("info"		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('area_edit.html');

}

/* 修改地区 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("area_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	

	$parentstr	= getparentstr($tbname, $parentid);
	
	if($classname=='')
	{
		showmsg($_LANG['js']['classname'], '1');
		exit();
	}
		
	$sql = "UPDATE `$tbname` SET 
								`parentid`   = '$parentid',
								`parentstr`  = '$parentstr',
								`classname`  = '$classname',
								`orderid`  	 = '$orderid',
								`checkinfo`  = '$checkinfo'
								  WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'edit', 'area');
		showsucceed($_LANG['php']['add_succeed'], '','area.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除地区 */
if ($act == 'subdel')
{
	//验证权限
	chk_privilege("area_del");
	
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
		insert_log($classname, 'del', 'area');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE (`id` = $v or `parentid` = $v  or parentstr like '%,$v,%') ");
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>