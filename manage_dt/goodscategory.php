<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/goodscategory.php');

/* 此页公共变量 */
$tbname	= '#@__goodscategory';
$act 	= isset($act) ? $act : 'list';

/* 产品分类列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("goodscat_manage");
	
	$info = getallcat($tbname, 'id');
	if(is_array($info))
	{
		foreach($info as $key => $val)
		{
			$r = $dosql->getone("SELECT `classname` FROM `$tbname` WHERE `id`=".$val['parentid']);
			if($r)
			{
				$classname = $r['classname'];
			}
			else
			{
				$classname = '--';
			}
			
			$info[$key]['parentname'] = $classname;
			$r = $dosql->getone("SELECT count(id) FROM `#@__goods` WHERE `classid`=".$val['id']." or parentstr like '%,".$val['id'].",%'" );
			if($r)
			{
				$goodsnum = $r['count(id)'];
			}
			else
			{
				$goodsnum = 0;
			}
			$info[$key]['goodsnum']   = $goodsnum;
		}
	}
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("info", $info);
	$smarty->display('goodscategory.html');
}

/* 添加产品分类界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("goodscat_add");
	
	$class_info = array();
	$class_info = getallcat($tbname, 'id');
	
	$brand_info = array();
	$brand_info = $dosql->getall("SELECT * FROM `#@__goodsbrand` WHERE `parentid` = 0 AND checkinfo = 'true' order by orderid desc");
	
	$type_info = array();
	$type_info = $dosql->getall("SELECT * FROM `#@__goodstype` WHERE checkinfo = 'true' order by orderid desc");
	
	if (!isset($parentid)) $parentid = 0;
	
	$smarty->assign("type_info" , $type_info);
	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("brand_info", $brand_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goodscategory_add.html');
}

/* 添加产品分类 */
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
	
		//保存远程缩略图
		if($rempic=='true' and
		   preg_match("#^http:\/\/#i", $picurl))
		{
			$picurl = GetRemPic($picurl);
		}
	


		//第一个图片作为缩略图
		if($autothumb == 'true')
		{
			$cont_str = stripslashes($content);
			preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/', $cont_str, $imgurl);

			//如果存在图片
			if(isset($imgurl[1][0]))
			{
				$picurl = $imgurl[1][0];
				$picurl = substr($picurl, strpos($picurl, 'uploads/'));
			}
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
				$sql = "INSERT INTO `$tbname` (`parentid`,`parentstr`,`classname`,`attrstr`,`orderid`,`checkinfo`,`unit`,`keywords`,`description`,`section`,`picurl`) VALUES ('$parentid','$parentstr','$val','$attrstr','$order_id','$checkinfo','$unit','$keywords','$description','$section','$picurl')";
				$dosql->execnonequery($sql);
				//添加日志
				insert_log($val, 'add', 'goods_category');
			}
		}
		showsucceed($_LANG['php']['add_succeed'], '','goodscategory.php?act=add&parentid='.$parentid);
	}
	else
	{
	
		$sql = "INSERT INTO `$tbname` (`parentid`,`parentstr`,`classname`,`attrstr`,`orderid`,`checkinfo`,`unit`,`keywords`,`description`,`section`,`picurl`) VALUES ('$parentid','$parentstr','$classname','$attrstr','$orderid','$checkinfo','$unit','$keywords','$description','$section','$picurl')";
		if($dosql->execnonequery($sql))
		{
			//添加日志
			insert_log($classname, 'add', 'goods_category');
			showsucceed($_LANG['php']['add_succeed'], '','goodscategory.php?act=add&parentid='.$parentid);
			exit();
		}
	}
}



/* 修改分类界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("goodscat_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '-1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	
	$brand_info = array();
	$brand_info = $dosql->getall("SELECT * FROM `#@__goodsbrand` WHERE `parentid` = 0 AND checkinfo = 'true' order by orderid desc");
	
	$class_info = array();
	$class_info = getallcat($tbname, 'id');
	
	$type_info = array();
	$type_info = $dosql->getall("SELECT * FROM `#@__goodstype` WHERE checkinfo = 'true' order by orderid desc");
	
	
	$smarty->assign("info"		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("brand_info", $brand_info);
	$smarty->assign("type_info" , $type_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goodscategory_edit.html');

}

/* 修改产品分类 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("goodscat_edit");
	
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
	
	 //保存远程缩略图
		if($rempic=='true' and
		   preg_match("#^http:\/\/#i", $picurl))
		{
			$picurl = GetRemPic($picurl);
		}
		

		//第一个图片作为缩略图
		if($autothumb == 'true')
		{
			$cont_str = stripslashes($content);
			preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/', $cont_str, $imgurl);

			//如果存在图片
			if(isset($imgurl[1][0]))
			{
				$picurl = $imgurl[1][0];
				$picurl = substr($picurl, strpos($picurl, 'uploads/'));
			}
		
		}
	
	$sql = "UPDATE `$tbname` SET 
								`parentid`   = '$parentid',
								`parentstr`  = '$parentstr',
								`classname`  = '$classname',
								`attrstr`    = '$attrstr',
								`orderid`    = '$orderid',
								`checkinfo`  = '$checkinfo',
								`unit`       = '$unit',
								`keywords`   = '$keywords',
								`description`= '$description',
								`section`= '$section',
								`picurl`     = '$picurl'
								WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($classname, 'edit', 'goods_category');
		showsucceed($_LANG['php']['edit_succeed'], '','goodscategory.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除产品分类 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("goodscat_del");
	$check_goodsnum = false;
	
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
		
		$rs = $dosql->getone("SELECT count(id) FROM `#@__goods` WHERE `classid`=".$v." or parentstr like '%,".$v.",%'" );
		if($rs['count(id)']==0)
		{
			$r = $dosql->getone("SELECT `classname` FROM `$tbname` WHERE `id` = $v ");
			$classname = empty($r['classname']) ? '' : $r['classname'];
			//添加日志
			insert_log($classname, 'del', 'goods_category');
			$dosql->execnonequery("DELETE FROM `$tbname` WHERE (`id` = $v or `parentid` = $v  or parentstr like '%,$v,%') ");
		}
		else
		{
			$check_goodsnum = true;	
		}
	}
		
	$from = dencode64($from);
	if($check_goodsnum)
	{
		showmsg($_LANG['php']['del_succeed'],$from);
		exit();
	}
	else
	{
		header("location:$from");
		exit();
	}
}
/* 更新分类排序 */
if ($act == 'uporder')
{
	foreach($id as $k => $v)
	{
		$dosql->ExecNoneQuery("UPDATE `$tbname` SET orderid=".$orderid[$k]." WHERE id=$v");
	}
	$from = dencode64($from);
	header("location:$from");
}
?>