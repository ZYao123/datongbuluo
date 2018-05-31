<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/article.php');

/* 此页公共变量 */
$tbname	  = '#@__article';
$act 	  = isset($act) ? $act : 'list';

/* 新闻列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("article_manage");
	
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
	$sql .= "order by orderid desc";
	$info = $dopage->getpage($sql);
	foreach($info as $key => $val)
	{
		$info[$key]['classid'] = get_field_value('classname', 'article_category', $info[$key]['classid']);
	}
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('article.html');
}

/* 添加新闻界面 */
if ($act == 'add')
{
	//验证权限
	chk_privilege("article_add");
	if(!isset($parentid)) $parentid = 0;
	$class_info = array();
	$class_info = getallcat('#@__article_category', 'id');

	$smarty->assign("posttime"  , date("Y-m-d H:i:s"));
	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	
	$smarty->display('article_add.html');
}

/* 添加新闻 */
if ($act == 'subadd')
{
	if(!isset($rempic))        $rempic = '';
	if(!isset($remote))        $remote = '';
	if(!isset($autothumb))     $autothumb = '';
	if(!isset($autodesc))      $autodesc = '';
	if(!isset($autodescsize))  $autodescsize = '';
	if(!isset($autopage))      $autopage = '';
	if(!isset($autopagesize))  $autopagesize = '';
	
	//验证权限
	chk_privilege("article_add");
	
	if($title=='')
	{
		showmsg($_LANG['js']['title'], '1');
		exit();
	}
	if($classid=='')
	{
		showmsg($_LANG['js']['classid'], '1');
		exit();
	}
	$phone or $phone=0;
	$parentstr	= getparentstr('#@__article_category', $classid);
	$parentid 	= getparentid('#@__article_category' , $classid);

	//保存远程缩略图
	if($rempic=='true' and
	   preg_match("#^http:\/\/#i", $picurl))
	{
		$picurl = GetRemPic($picurl);
	}
		$phone_picurl=$picurl;

	//保存远程资源
	if($remote == 'true')
	{
		$content = GetContFile($content);
		$phone and $phone_content = GetContFile($phone_content);
		
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
		if($phone)
		{
			$cont_str = stripslashes($phone_content);
			preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/', $cont_str, $imgurl);

			//如果存在图片
			if(isset($imgurl[1][0]))
			{
				$phone_picurl = $imgurl[1][0];
				$phone_picurl = substr($phone_picurl, strpos($phone_picurl, 'uploads/'));
			}
		}
	}


	//自动提取内容到摘要
	if($autodesc == 'true')
	{
		$autodescsize=(int)$autodescsize;
		if(empty($autodescsize) or $autodescsize >200)
		{
			$autodescsize = 200;
		}

		$descstr     = ClearHtml($content);
		$description = ReStrLen($descstr, $autodescsize);
		if($phone)
		{
			$descstr     = ClearHtml($phone_content);
			$phone_desc = ReStrLen($descstr, $autodescsize);
		}
	}
	isset($phone_desc) or $phone_desc=$description;

	//自动分页
    if($autopage == 'true')
    {
        $content = ContAutoPage($content, $autopagesize*1024);
		$phone and $phone_content = ContAutoPage($phone_content, $autopagesize*1024);
    }
	$posttime  = GetMkTime($posttime);

	$sql = "INSERT INTO `$tbname` (
									`classid`,
									`parentid`,
									`parentstr`,
									`title`,
									`colorval`,
									`boldval`,
									`author`,
									`linkurl`,
									`keywords`,
									`description`,
									`content`,
									`picurl`,
									`hits`,
									`orderid`,
									`posttime`,
									`checkinfo`,
									`phone_content`,
									`phone`,
									`phone_picurl`,
									`phone_desc`
								) VALUES (
									'$classid',
									'$parentid',
									'$parentstr',
									'$title',
									'$colorval',
									'$boldval',
									'$author',
									'$linkurl',
									'$keywords',
									'$description',
									'$content',
									'$picurl',
									'$hits',
									'$orderid',
									'$posttime',
									'$checkinfo',
									'{$phone_content}',
									'{$phone}',
									'{$phone_picurl}',
									'{$phone_desc}'
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($title, 'add', 'article');
		showsucceed($_LANG['php']['add_succeed'], '','article.php?act=add&parentid='.$classid);
		exit();
	}
}



/* 修改新闻界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("article_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$class_info = array();
	$class_info = getallcat('#@__article_category', 'id');

	$smarty->assign("info"		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("js"        , $_LANG['js']);
	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('article_edit.html');

}

/* 修改新闻 */
if ($act == 'subedit')
{
	if(!isset($rempic))        $rempic = '';
	if(!isset($remote))        $remote = '';
	if(!isset($autothumb))     $autothumb = '';
	if(!isset($autodesc))      $autodesc = '';
	if(!isset($autodescsize))  $autodescsize = '';
	if(!isset($autopage))      $autopage = '';
	if(!isset($autopagesize))  $autopagesize = '';
	
	//验证权限
	chk_privilege("article_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	if($title=='')
	{
		showmsg($_LANG['js']['title'], '1');
		exit();
	}
	if($classid=='')
	{
		showmsg($_LANG['js']['classid'], '1');
		exit();
	}

	$parentstr	= getparentstr('#@__article_category', $classid);
	$parentid 	= getparentid('#@__article_category' , $classid);
	$phone or $phone=0;
		
	//保存远程缩略图
	if($rempic=='true' and
	   preg_match("#^http:\/\/#i", $picurl))
	{
		$picurl = GetRemPic($picurl);
	}
		$phone_picurl=$picurl;

	//保存远程资源
	if($remote == 'true')
	{
		$content = GetContFile($content);
		$phone and $phone_content = GetContFile($phone_content);
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
		if($phone)
		{
			$cont_str = stripslashes($phone_content);
			preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/', $cont_str, $imgurl);

			//如果存在图片
			if(isset($imgurl[1][0]))
			{
				$phone_picurl = $imgurl[1][0];
				$phone_picurl = substr($phone_picurl, strpos($phone_picurl, 'uploads/'));
			}
		}
	}


	//自动提取内容到摘要
	if($autodesc == 'true')
	{
		$autodescsize=(int)$autodescsize;
		if(empty($autodescsize) or $autodescsize >200)
		{
			$autodescsize = 200;
		}
		
		$descstr     = ClearHtml($content);
		$description = ReStrLen($descstr, $autodescsize);
		if($phone)
		{
			$descstr     = ClearHtml($phone_content);
			$phone_desc = ReStrLen($descstr, $autodescsize);
		}
	}
	isset($phone_desc) or $phone_desc=$description;

	//自动分页
    if($autopage == 'true')
    {
        $content = ContAutoPage($content, $autopagesize*1024);
		$phone and $phone_content = ContAutoPage($phone_content, $autopagesize*1024);
    }
	
	$posttime  = GetMkTime($posttime);		
			
	$sql = "UPDATE `$tbname` SET 
								`classid`   = '$classid',
								`parentid`  = '$parentid',
								`parentstr` = '$parentstr',
								`title`  	= '$title',
								`colorval`  = '$colorval',
								`boldval`  	= '$boldval',
								`author`  	= '$author',
								`linkurl`  	= '$linkurl',
								`keywords`  = '$keywords',
								`description`= '$description',
								`content`  	= '$content',
								`picurl`  	= '$picurl',
								`hits`  	= '$hits',
								`orderid`  	= '$orderid',
								`posttime`  = '$posttime',
								`checkinfo` 	= '$checkinfo',
								`phone_content`  	= '$phone_content',
								`phone`  	= '$phone',
								`phone_picurl`  = '$phone_picurl',
								`phone_desc` 	= '$phone_desc'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($title, 'edit', 'article');
		showsucceed($_LANG['php']['add_succeed'], '','article.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除新闻 */
if ($act == 'subdel')
{
	
	//验证权限
	chk_privilege("article_del");
	
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
		$r = $dosql->getone("SELECT `title` FROM `$tbname` WHERE `id` = $v ");
		$title = empty($r['title']) ? '' : $r['title'];
		
		//添加日志
		insert_log($title, 'del', 'article');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
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