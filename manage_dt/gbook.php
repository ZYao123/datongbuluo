<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/gbook.php');
/* 此页公共变量 */
$tbname	  = '#@__gbook';
$act 	  = isset($act) ? $act : 'list';

/* BUG列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("gbook");
	$info = array();
	$sql = "SELECT * FROM `$tbname` ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " WHERE lc_title like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= " order by lc_datetime DESC";
	$info = $dopage->getpage($sql);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('gbook.html');
}



/* 反馈查看详细 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("gbook_edit");
	
	if(!is_numeric($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	
	$info = array();
	$sql="SELECT  lc_content as content
			FROM `$tbname` WHERE lc_id='{$id}'";
	$info = $dosql->getone($sql);
	$smarty->assign("info" 		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('gbook_edit.html');

}

/* 修改反馈评论状态 */
if ($act == 'edit_com_sta')
{
	//验证权限
	chk_privilege("gbook_edit");
	
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}	
	$id=(int)$id;
	$sign=(int)$sign;
	$sql="UPDATE `$tbname` SET `checkinfo`='{$sign}' WHERE id='{$id}' ";
	if($dosql->execnonequery($sql))
	{
		$sql="SELECT title FROM `$tbname` WHERE id='{$id}'";
		$row=$dosql->getone($sql);
		$row['title'].=$sign==0?"属性:不通过":"属性:通过";
		insert_log($row['title'], 'edit', 'bug');
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}
/* 删除商品 */
if ($act == 'subdel')
{
	//验证权限
	chk_privilege("gbook_del");
	
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
		$sql="DELETE FROM `$tbname` WHERE `lc_id` = $v";
		$r = $dosql->getone("SELECT `lc_title` FROM `$tbname` WHERE `lc_id` = $v ");
		$title = $r['lc_title'];
		if($dosql->execnonequery($sql))
		{
			//添加日志
			insert_log($title, 'del', "gbook");
		}
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>