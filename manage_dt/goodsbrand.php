<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/goodsbrand.php');

/* 此页公共变量 */
$tbname	  = '#@__goodsbrand';
$act 	  = isset($act) ? $act : 'list';
$parentid = isset($parentid) ? $parentid : 0;
$goodsid = isset($goodsid) ? $goodsid : 0;

/* 产品品牌列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("goodsbrand_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` WHERE parentid=".$parentid;
	if(isset($goodsid) && $goodsid>0)
	{
		$sql .= " AND goodsid = ".$goodsid;
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
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("info", $info);
	$smarty->assign("goodsid", $goodsid);
	$smarty->assign("parentid", $parentid);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('goodsbrand.html');
}

/* 添加产品品牌界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("goodsbrand_add");
	
	$class_info = array();
	$class_info = getallcat($tbname, 'id');

	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("goodsid"   , $goodsid);
	$smarty->display('goodsbrand_add.html');
}

/* 添加产品品牌 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("goodscat_add");
	
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
			$val = trim($val);
			$r = $dosql->getone("SELECT * FROM `$tbname` WHERE `classname`='".$val."'");
			if(!is_array($r) && !empty($val))
			{
				$val = trim($val);
				$order_id = $orderid+$key;
				$sql = "INSERT INTO `$tbname` (`parentid`,`parentstr`,`classname`,`orderid`,`checkinfo`,`rename`,`logo`,`url`) VALUES ('$parentid','$parentstr','$val','$order_id','$checkinfo','$rename','$logo','$url')";
				$dosql->execnonequery($sql);
				//添加日志
				insert_log($val, 'add', 'goods_brand');
			}
		}
		showsucceed($_LANG['php']['add_succeed'], '','goodsbrand.php?act=add&parentid='.$parentid.'&goodsid='.$goodsid);
	}
	else
	{
		$r = $dosql->getone("SELECT * FROM `$tbname` WHERE `classname`='".$classname."'");
		if(is_array($r))
		{
			showmsg($_LANG['js']['exists'], '1');
			exit();
		}
		
		$sql = "INSERT INTO `$tbname` (`parentid`,`parentstr`,`classname`,`orderid`,`checkinfo`,`rename`,`logo`,`url`) VALUES ('$parentid','$parentstr','$classname','$orderid','$checkinfo','$rename','$logo','$url')";
		if($dosql->execnonequery($sql))
		{
			//添加日志
			insert_log($classname, 'add', 'goods_brand');
			showsucceed($_LANG['php']['add_succeed'], '','goodsbrand.php?act=add&parentid='.$parentid.'&goodsid='.$goodsid);
			exit();
		}
	}
}



/* 修改品牌界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("goodsbrand_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$class_info = array();
	$class_info = getallcat($tbname, 'id');

	$smarty->assign("info"		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("js"        , $_LANG['js']);
	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goodsbrand_edit.html');

}

/* 修改产品品牌 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("goodsbrand_edit");
	
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
								`orderid`    = '$orderid',
								`checkinfo`  = '$checkinfo',
								`rename`     = '$rename',
								`logo`   	 = '$logo',
								`url`   	 = '$url'
								  WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'edit', 'goods_brand');
		showsucceed($_LANG['php']['add_succeed'], '','goodsbrand.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除产品品牌 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("goodsbrand_del");
	
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
		insert_log($classname, 'del', 'goods_brand');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE (`id` = $v or `parentid` = $v  or parentstr like '%,$v,%') ");
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
?>