<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/bug.php');
/* 此页公共变量 */
$tbname	  = '#@__bug';
$act 	  = isset($act) ? $act : 'list';

/* BUG列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("bug_list");
	$info = array();
	$sql = "SELECT `$tbname`.*,`#@__admin`.username FROM `$tbname` INNER JOIN `#@__admin` 
		ON `$tbname`.u_id=`#@__admin`.id";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " WHERE title like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= " order by checkinfo DESC,time desc";
	$info = $dopage->getpage($sql);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('bug.html');
}

/* 添加bug界面 */
if ($act == 'add')
{
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('bug_add.html');
}
/* 提交BUG信息*/
if ($act == 'subadd')
{
	if(!isset($title))        $title = '';
	if(!isset($content))      $content = '';
	if($title=='')
	{
		showmsg($_LANG['js']['title'], '1');
		exit();
	}
	$u_id=$_SESSION['adminid'];
	$time=GetMkTime(date("Y-m-d H:i:s"));
	$sql = "INSERT INTO `$tbname` VALUES (null,'{$title}','{$content}','{$u_id}','{$time}','0')";
	if($dosql->execnonequery($sql))
	{
		showsucceed($_LANG['php']['add_succeed'], '','bug.php?act=add');
		exit();
	}
}

/* 反馈查看详细 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("bug_edit");
	
	if(!is_numeric($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	
	$info = array();
	$sql="SELECT  content
			FROM `$tbname` WHERE id='{$id}'";
	$info = $dosql->getone($sql);
	$smarty->assign("info" 		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('bug_edit.html');

}

/* 修改反馈评论状态 */
if ($act == 'edit_com_sta')
{
	//验证权限
	chk_privilege("bug_edit");
	
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
	chk_privilege("bug_del");
	
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
		$sql="DELETE FROM `$tbname` WHERE `id` = $v";
		$r = $dosql->getone("SELECT `title` FROM `$tbname` WHERE `id` = $v ");
		$title = $r['title'];
		if($dosql->execnonequery($sql))
		{
			//添加日志
			insert_log($title, 'del', "bug");
		}
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>