<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/goodsattribute.php');

/* 此页公共变量 */
$tbname	= '#@__attribute';
$act 	= isset($act) ? $act : 'list';
$attrtypelist = array('attr'=>1, 'specification'=>2);		//属性类型，（属性，规格，品牌扩展）, 'brand'=>3


/* 产品属性列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("goodsattr_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname`";
	$result=$dosql->getall($sql);
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("result", $result);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('goodsattribute.html');
}


/* 添加产品分类 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("goodsattr_add");
	//添加属性	
	$str="";
	 if(!empty($name))
	 {
	 	foreach($name as $v)
		{
			$v and $str.="(null,'{$v}','false'),";
		}
	 }
	$str=rtrim($str,",");
	if($str)
	{
		$sql = "INSERT INTO `$tbname` VALUES {$str}";
					
		if($dosql->execnonequery($sql))
		{
			//添加日志
			foreach($name as $v)
			{
				$v and insert_log($v, 'add', 'goods_attribute');
			}
		}
	}
	//编辑属性
	$str="";
	$sql = "SELECT * FROM `$tbname`";
	$result=$dosql->getall($sql);
	$h_id_array=array();
	$id_name_array=array();
	$built_in_array=array();
	foreach($result as $v)
	{
		$h_id_array[]=$v['id'];
		$id_name_array[$v['id']]=$v['name'];
		$built_in_array[$v['id']]=$v['built_in'];
	}
	 if(!empty($edit_name))
	 {
		foreach($edit_name as $k=>$v)
		{
			$v and in_array($k,$h_id_array) and $v!=$id_name_array[$k] and $str.="('{$k}','{$v}','{$built_in_array[$k]}'),";
		}
	 }
	$str=rtrim($str,",");
	if($str)
	{
		$sql = "REPLACE INTO `$tbname` VALUES {$str}";
					
		if($dosql->execnonequery($sql))
		{
			//添加日志
			foreach($edit_name as $k=>$v)
			{
				$v and in_array($k,$h_id_array) and $v!=$id_name_array[$k]  and insert_log($v, 'edit', 'goods_attribute');
			}
		}
	}
	ShowMsg($_LANG['php']['submit_succeed'], 'goodsattribute.php?act=list');
	exit();
}
/* 删除商品 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("goodsattr_del");
	
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
		$r = $dosql->getone("SELECT `name` FROM `$tbname` WHERE `id` = $v ");
		$title = empty($r['name']) ? '' : $r['name'];
		
		//添加日志
		insert_log($title, 'del', 'goods_attribute');
		$deltime = GetMkTime(time());
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
	}	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>