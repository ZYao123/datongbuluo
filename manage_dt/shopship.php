<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/shopship.php');

/* 此页公共变量 */
$tbname	= '#@__shopship';
$act 	= isset($act) ? $act : 'list';

/* 配送方式列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("ship_manage");
	
	
	/**显示所有配送公司**/
	$postmodeinfo = $dosql->getall("SELECT * FROM `#@__postmode` ORDER BY orderid ASC");
	$smarty->assign("postmodeinfo", $postmodeinfo);
	$smarty->assign("postmodecount"  , $dosql->GetTableRow("#@__postmode"));
	$smarty->assign("orderidadd"  , GetOrderID('#@__postmode'));

	$sql = "SELECT * FROM `$tbname` order by id desc";
	$info = $dosql->getall($sql);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('shopship.html');
}


/* 修改订单页面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("ship_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$smarty->assign("id"		, $id);
	$smarty->assign("info"		, $info);
	$smarty->assign("from"		,$from);	//页面来源
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("act"       , "subedit");
	$smarty->display('shopship_edit.html');

}

/* 修改属性 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("ship_edit");
	$sqlstr = '';
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}	
	
	if (@$checkinfo == 'true')
	{
		$checkinfo = 'true';
		
		if(empty($apikey))
		{
			showmsg($_LANG['php']['apikey'], '-1');
			exit();			
		}
	}
	else
	{
		$checkinfo = 'false';	
	}
	$sql = "UPDATE `$tbname` SET 
								`apikey`    = '$apikey',
								`description`  	 = '$description',
								`checkinfo` 	 = '$checkinfo'
								 WHERE `id`	 	 = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($title, 'edit', 'ship');
		showsucceed($_LANG['php']['edit_succeed'], '','shopship.php?act=edit&id='.$id.'&from='.$from);
		exit();
	}
}

if($act == 'save')
{
	
	chk_privilege("ship_edit");
	$tbname = '#@__postmode';
	if($classnameadd != '')
	{
		chk_privilege("ship_add");
		$dosql->ExecNoneQuery("INSERT INTO `$tbname` (classid, classname, orderid, checkinfo) VALUES ('$classidadd', '$classnameadd', '$orderidadd', '$checkinfoadd')");
		//insert_log($classnameadd, 'add', 'postmode');
	}

	if(isset($checkid))
	{
		chk_privilege("ship_add");
		$ids = count($checkid);
		for($i=0; $i<$ids; $i++)
		{
			$dosql->ExecNoneQuery("UPDATE `$tbname` SET orderid='$orderid[$i]', classid='$classid[$i]', classname='$classname[$i]' WHERE id=$checkid[$i]");
			
		}
		
	}
	insert_log($_LANG['edit_more'], 'edit', 'postmode');

	header("location:".dencode64($from));
	exit();
}
//删除快递公司
if ($act == 'PostmodeDel')
{
	chk_privilege("ship_del");
	$tbname = '#@__postmode';
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
		$r = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $v ");
		$classname = empty($r['classname']) ? '' : $r['classname'];
		
		//添加日志
		insert_log($classname, 'del', 'postmode');
		$deltime = GetMkTime(time());
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
		//删除运费模板中相关的数据
		$dosql->execnonequery("DELETE FROM `#@__shipinfo` WHERE `pid` = $v ");
	}
	$from = dencode64($from);
	header("location:$from");
	exit();	
	
	
	
}





?>