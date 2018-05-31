<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/goods.php');

/* 此页公共变量 */
$tbname		= '#@__goods';
$act 		= isset($act) 		? $act 		: 'list';
$parentid	= isset($parentid)  ? $parentid : 0;
$nav 		= isset($nav) 		? $nav 		: 'total';

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
$public_where= $_SESSION['r_sign'] ? " AND `$tbname`.uid='{$_SESSION['adminid']}'": "";//验证登录用户角色标识（是否是只能管理自己商品的用户）
if(isset($phone_sign_s))
{
	 $_SESSION['phone_sign']=$phone_sign_s ? 1: 0;//1:移动管理 0:所有
}
$_SESSION['phone_sign']==1 and $public_where.=  " AND `$tbname`.phone='1'";
/* 产品列表 */
if($act == 'list')
{
	//验证权限
	
	 $_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_manage") : chk_privilege("goods_manage");
	
	$goodsnav = array();
	if($buie)
	{
		$sql=" AND `$tbname`.id IN (SELECT g_id FROM `#@__goodsattribute` WHERE a_id like '%,".$buie.",%')";
		$public_where.=$sql;
	}
	/* 全部产品数量 */
	$sql = "SELECT * FROM `$tbname` WHERE delstate='' {$public_where} order by orderid desc";
	$dosql->execute($sql,'total');
	$goodsnav['total'] = $dosql->gettotalrow('total'); 
	
	/* 缺货商品 */
	$sql = "SELECT `id` FROM `$tbname` 
	 WHERE `delstate`='' AND 
	 (SELECT SUM(`housenum`) FROM `#@__goodsattr` WHERE `#@__goodsattr`.goodsid=`$tbname`.id)
	 <=`warnnum` 
	 AND `housewarn` = true {$public_where} order by orderid desc";
	$dosql->execute($sql,'oos');
	$goodsnav['oos'] = $dosql->gettotalrow('oos'); 
	
	/* 库存警告商品 */
	$sql = "SELECT `id` FROM `$tbname` WHERE `delstate`='' AND `housewarn`='true' {$public_where} order by orderid desc";
	$dosql->execute($sql,'warn');
	$goodsnav['warn'] = $dosql->gettotalrow('warn');
	
	/* 评论 */
	$sql="SELECT  count(`#@__usercomment`.id) as tot
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' {$public_where}";
	$row=$dosql->getone($sql);
	$goodsnav['com']=$row['tot'];
	
	/* 显示评论 */
	$sql="SELECT  count(`#@__usercomment`.id) as tot
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' {$public_where} and `#@__usercomment`.isshow=1" ;
	$row=$dosql->getone($sql);
	$goodsnav['showcom']=$row['tot'];
	
	
	/* 未显示评论 */
	$sql="SELECT  count(`#@__usercomment`.id) as tot
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' {$public_where} and `#@__usercomment`.isshow=0";
	$row=$dosql->getone($sql);
	$goodsnav['hidecom']=$row['tot'];
	
	/* 商品分页 */
	$info = array();
	if($nav != 'com' && $nav != 'showcom' && $nav != 'hidecom')
	{
		$sql = "SELECT `$tbname`.id,`$tbname`.title,`$tbname`.salesprice,`$tbname`.buyprice,			  	
			`$tbname`.picurl,`$tbname`.payfreight,`$tbname`.checkinfo,`$tbname`.posttime,
			min(`#@__goodsattr`.price) as min_price,
			max(`#@__goodsattr`.price) as max_price,
			min(`#@__goodsattr`.buyprice) as min_buyprice,
			max(`#@__goodsattr`.buyprice) as max_buyprice,
			sum(`#@__goodsattr`.housenum) as housenum 
		FROM `$tbname`  left join `#@__goodsattr` on `$tbname`.id=`#@__goodsattr`.goodsid
		WHERE `$tbname`.delstate='' {$public_where}";
		if($nav == 'oos')
		{
			$sql .= "  AND (SELECT SUM(`housenum`) FROM `#@__goodsattr` WHERE `#@__goodsattr`.goodsid=`$tbname`.id)<=`$tbname`.`warnnum` 
				AND `$tbname`.`housewarn` = true";
		}
		if($nav == 'warn')
		{
			$sql .= "  AND `$tbname`.`housewarn`='true'";
		}
		if(isset($keyword) && $keyword != '')
		{
			$sql .= " and `$tbname`.title like '%".$keyword."%'";
		}
		else
		{
			$keyword = '';
		}
		if(isset($classid) && is_numeric($classid))
		{
			$sql .= " and (`$tbname`.`classid` = $classid 
					or `$tbname`.`parentstr` like '%,$classid,%')";
		}
		
	    if(isset($buie) && is_numeric($buie))
		{
			
			$sql .=" AND `$tbname`.id IN (SELECT g_id FROM `#@__goodsattribute` WHERE a_id like '%,".$buie.",%')";
			
		}
		$sql .= " group by `$tbname`.id  order by `$tbname`.orderid desc";
		
	}else
	{
		if($nav == 'showcom'){
		$sql="SELECT  `#@__usercomment`.id,`#@__usercomment`.title,`#@__usercomment`.posttime
			,`#@__member`.username,`#@__goods`.title AS g_title,`#@__goods`.picurl,
			`#@__usercomment`.isshow,`#@__goods`.salesprice,`#@__usercomment`.reply
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' and `#@__usercomment`.isshow=1  {$public_where}
			ORDER BY `#@__usercomment`.isshow desc,`#@__usercomment`.posttime DESC";
		}else if($nav == 'hidecom'){
			$sql="SELECT  `#@__usercomment`.id,`#@__usercomment`.title,`#@__usercomment`.posttime
			,`#@__member`.username,`#@__goods`.title AS g_title,`#@__goods`.picurl,
			`#@__usercomment`.isshow,`#@__goods`.salesprice,`#@__usercomment`.reply
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' and `#@__usercomment`.isshow=0  {$public_where}
			ORDER BY `#@__usercomment`.isshow desc,`#@__usercomment`.posttime DESC";
		}else{
			$sql="SELECT  `#@__usercomment`.id,`#@__usercomment`.title,`#@__usercomment`.posttime
			,`#@__member`.username,`#@__goods`.title AS g_title,`#@__goods`.picurl,
			`#@__usercomment`.isshow,`#@__goods`.salesprice,`#@__usercomment`.reply
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' {$public_where}
			ORDER BY `#@__usercomment`.isshow desc,`#@__usercomment`.posttime DESC";
		}
	}

	$info = $dopage->getpage($sql);

	$class_info = getallcat('#@__goodscategory', 'id');

	if(!isset($classid)) $classid=0;
	if(!isset($title)) $title='';
	
	$smarty->assign("classid" , $classid);
	$smarty->assign("buie" , $buie);
	$smarty->assign("keyword" , $keyword);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("goodsnav" , $goodsnav);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("act" , $act);
	$smarty->assign("nav" , $nav);
	$smarty->display('goods.html');
}
	
/* 产品回收站 */
if($act == 'recycle')
{
	
	//验证权限
	 $_SESSION['phone_sign']==1 ? chk_privilege("phone_recycle_manage") : chk_privilege("recycle_manage");
	
	
	/* 全部产品数量 */
	$sql = "SELECT * FROM `$tbname` WHERE delstate='true' {$public_where}";
	if(isset($keyword) && $keyword != '')
	{
		$sql .= " and title like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	if(isset($classid) && is_numeric($classid))
	{
		$sql .= " and (`classid` = $classid or `parentstr` like '%,$classid,%')";
	}
	$sql .= "order by orderid desc";
	$dosql->execute($sql,'total');
	$total = $dosql->gettotalrow('total'); 
	
	$info = array();	
	$info = $dopage->getpage($sql);
	
	$class_info = getallcat('#@__goodscategory', 'id');
	if(!isset($classid)) $classid=0;
	if(!isset($title)) $title='';
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("total" , $total);
	$smarty->assign("classid" , $classid);
	$smarty->assign("keyword" , $keyword);
	$smarty->display('goods_recycle.html');
}

/* 添加产品界面 */
if ($act == 'add')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_add") : chk_privilege("goods_add");

	$class_info = array();
	$class_info = getallcat('#@__goodscategory', 'id');
	$sql = "SELECT * FROM #@__attribute";
	$attr_info=$dosql->getall($sql);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("parentid"  , $parentid);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("attr_info", $attr_info);
	$smarty->display('goods_add.html');
}


if($act == 'add_select')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_add") : chk_privilege("goods_add");

	$brand_info = array();
	$attr_info = array();
	$norm_info = array();
	
	$r = $dosql->getone("SELECT attrstr FROM `#@__goodscategory` WHERE `id`= $id");
	if($r)
	{
		$brandid = 0;
		$info['flag'] = array();
		$info['norm'] = array();
		if(isset($goodsid) && is_numeric($goodsid))
		{
			$info = $dosql->getone("SELECT brandid,flag,norm FROM `#@__goods` WHERE `id`= $goodsid  {$public_where}" );
			if($info)
			{
				$info['flag'] = string2array($info['flag']);
				$info['norm'] = string2array($info['norm']);
				$brandid	  = $info['brandid'];
			}
		}

		/* 品牌 */
		$brand = $dosql->getone('SELECT brand FROM `#@__goodstype` where `id`='.$r['attrstr'].' AND checkinfo=true ORDER BY orderid ASC');
		if($brand)
		{
			$brand = string2array($brand['brand']);
			foreach($brand as $val)
			{
				$brand_info[$val]['selected']	= $brandid;
				$brand_info[$val]['list']		= $dosql->getone('SELECT id,classname FROM `#@__goodsbrand` where `id`='.$val.' AND checkinfo=true');
			}
		}
		
		/* 属性 */	
		$attr_info = $dosql->getall('SELECT * FROM `#@__goodstypeattr` where `typeid`='.$r['attrstr'].' AND checkinfo=true');
		foreach($attr_info as $key => $val)
		{
			$attr_info[$key]['attrvalue'] = string2array($val['attrvalue']);
			if(is_array($info) && count($info)>0)
			{
				$selected = array_key_exists($val['id'],$info['flag']) ? $info['flag'][$val['id']] : '';
			}
			else
			{
				$selected =  "";
			}
			$attr_info[$key]['selected']  = $selected;
		}

		/* 规格 */
		$norm = $dosql->getone('SELECT norm FROM `#@__goodstype` where `id`='.$r['attrstr'].' AND checkinfo=true');
		if($norm)
		{
			$norm = string2array($norm['norm']);
			foreach($norm as $key => $val)
			{
				$norm_info[$key] 			  = $dosql->getone('SELECT * FROM `#@__goodsnorm` where `id`='.$val.' AND checkinfo=true');
				$norm_info[$key]['normvalue'] = $dosql->getall('SELECT * FROM `#@__goodsnorm_value` where `normid`='.$val.'');
				if(is_array($info) && count($info)>0)
				{
					$selected = array_key_exists($val,$info['norm']) ? $info['norm'][$val]['selected'] : array();
				}
				else
				{
					$selected = array();
				}
			
				$norm_info[$key]['selected']  = $selected;
			}
		}
	}
    foreach ($norm_info as $key => $vo) {
	   if(!$vo['selected']){
          $norm_info[$key]['selected'] = array();
       }
	}
	$smarty->assign("goodsid" 	 , $goodsid);
	$smarty->assign("info" 		 , $info);
	$smarty->assign("lang" 		 , $_LANG);
	
	$smarty->assign("brand_info" , $brand_info);
	$smarty->assign("attr_info"  , $attr_info);
	$smarty->assign("norm_info"  , $norm_info);
	
	$smarty->display('goods_add_select.html');
	
}


/* 添加产品 */
if ($act == 'subadd')
{	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_add") : chk_privilege("goods_add");
	if(!isset($brandid))  $brandid   = 0;
	if(!isset($colorval)) $colorval  = '';
	if(!isset($boldval))  $boldval   = '';
	if(!isset($author))   $author    = '';
	if(!isset($linkurl))  $linkurl   = '';
	if(!isset($flag))     $flag      = ''; else $flag = array2string($flag);
	if(!isset($picarr))   $picarr    = ''; else $picarr = array2string($picarr);
	if(!isset($norm))     $norm      = ''; else $norm = array2string($norm);
	if(!isset($norms))    $norms     = array();
	$hits = 0;
	if(!isset($rempic))        $rempic = '';
	if(!isset($remote))        $remote = '';
	if(!isset($autothumb))     $autothumb = '';
	if(!isset($autodesc))      $autodesc = '';
	if(!isset($autodescsize))  $autodescsize = '';
	if(!isset($autopage))      $autopage = '';
	if(!isset($autopagesize))  $autopagesize = '';
	$starttime = strtotime($starttime);
	$endtime   = strtotime($endtime);
	if($starttime==$endtime){
		   $starttime = '';
		   $endtime   = '';
	}
	//获取parentstr
	$row = $dosql->GetOne("SELECT `parentid` FROM `#@__goodscategory` WHERE `id`=$classid AND checkinfo=true");
	$parentid = isset($row['parentid']) ? $row['parentid'] : 0;

	if($parentid == 0)
	{
		$parentstr = '0,';
	}
	else
	{
		$r = $dosql->GetOne("SELECT `parentstr` FROM `#@__goodscategory` WHERE `id`=$parentid AND checkinfo=true");
		$parentstr = $r['parentstr'].$parentid.',';
	}
	
	//获取品牌brandpstr
	if(isset($brandid) && $brandid>0)
	{
		$row = $dosql->GetOne("SELECT `parentid` FROM `#@__goodsbrand` WHERE `id`=$brandid AND checkinfo=true");
		$brandpid = isset($row['parentid']) ? $row['parentid'] : 0;
		if($brandpid == 0)
		{
			$brandpstr = '0,';
		}
		else
		{
			$r = $dosql->GetOne("SELECT `parentstr` FROM `#@__goodsbrand` WHERE `id`=$brandpid AND checkinfo=true");
			$brandpstr = $r['parentstr'].$brandpid.',';
		}
	}
	else
	{
		$brandpid  = '-1';
		$brandpstr = '';
	}
	
	//文章组图
	if(is_array($picarr))
	{
		$picarr = implode(',',$picarr);
	}

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


	$posttime = GetMkTime($posttime);
	$buyprice=preg_match("/^\d+(\.\d{1,2})?$/",$buyprice) ? $buyprice : 0;
	$salesprice=preg_match("/^\d+(\.\d{1,2})?$/",$salesprice) ? $salesprice : 0;
	$old_price=preg_match("/^\d+(\.\d{1,2})?$/",$old_price) ? $old_price : 0;
	!$need_integral and $need_integral=0;
	$sql = "INSERT INTO `$tbname` (
									`classid`,
									`parentid`,
									`parentstr`,
									`brandid`,
									`brandpid`,
									`brandpstr`,
									`title`,
									`colorval`,
									`boldval`,
									`flag`,
									`goodsNO`,
									`payfreight`,
									`weight`,
									`salesprice`,
									`promotionprice`,
									`promotiontime`,
									`housenum`,
									`housewarn`,
									`warnnum`,
									`integral`,
									`author`,
									`linkurl`,
									`keywords`,
									`description`,
									`content`,
									`remark`,
									`picurl`,
									`picarr`,
									`hits`,
									`orderid`,
									`posttime`,
									`checkinfo`,
									`norm`,
									`retitle`,
									`ser_conent`,
									`buyprice`,
									`phone_content`,
									`phone`,
									`phone_picurl`,
									`phone_desc`,
									`old_price`,
									`need_integral`,
									`uid`,
									`starttime`,
									`endtime`
								) VALUES (									
									'$classid',
									'$parentid',
									'$parentstr',
									'$brandid',
									'$brandpid',
									'$brandpstr',
									'$title',
									'$colorval',
									'$boldval',
									'$flag',
									'$goodsNO',
									'$payfreight',
									'$weight',
									'$salesprice',
									'$promotionprice',
									'$promotiontime',
									'$housenum',
									'$housewarn',
									'$warnnum',
									'{$integral}',
									'$author',
									'$linkurl',
									'$keywords',
									'$description',
									'$content',
									'$remark',
									'$picurl',
									'$picarr',
									'$hits',
									'$orderid',
									'$posttime',
									'$checkinfo',
									'$norm',
									'$retitle',
									'$ser_conent',
									'$buyprice',
									'{$phone_content}',
									'{$phone}',
									'{$phone_picurl}',
									'{$phone_desc}',
									'{$old_price}',
									'{$need_integral}',
									'{$_SESSION['adminid']}',
									'{$starttime}',
									'{$endtime}'
								)";
								
	if($dosql->ExecNoneQuery($sql))
	{
		$lastid = $dosql->GetLastID();
		//添加日志
		insert_log($title, 'add', 'goods');
		$str="";
		 if(!empty($attribute))
		 {
			foreach($attribute as $v)
			{
				$v and $str.=",{$v}";
			}
		 }
		$str and $str.=",";
		if($str)
		{
			$sql = "REPLACE INTO `#@__goodsattribute` VALUES ('{$str}',$lastid)";
			$dosql->execnonequery($sql);			
		}
		if(isset($norms[0]) && is_array($norms[0]))
		{
			foreach($norms[0] as $val)
			{
				$sql="INSERT INTO `#@__goodsattr_value`(
												`goodsid`,
												`attrname`,
												`color`,
												`pic`,
												`attrid`
												) VALUES(
												'$lastid',
												'".$val['name']."',
												'".$val['color']."',
												'".$val['pic']."',
												'".$val['attrid']."'
												)";
				$dosql->execnonequery($sql);
			}
		}
		
		if(isset($norms[1]) && is_array($norms[1]))
		{
			foreach($norms[1] as $val)
			{
				if(!empty($val['num']) && !empty($val['price']))
				{
					$sql="INSERT INTO `#@__goodsattr`(
													`goodsid`,
													`attrname`,
													`housenum`,
													`price`,
													`goodsNO`,
													`buyprice`,
													`old_price`
													) VALUES(
													'$lastid',
													'".$val['attrname']."',
													'".$val['num']."',
													'".$val['price']."',
													'".$val['goodsNO']."',
													'".$val['buyprice']."',
													'".$val['old_price']."'
													)";
					$dosql->execnonequery($sql);
				}
			}
		}
		else
		{
			$sql="INSERT INTO `#@__goodsattr`(
												`goodsid`,
												`attrname`,
												`housenum`,
												`price`,
												`goodsNO`,
												`buyprice`,
												`old_price`
												) VALUES(
												'$lastid',
												'',
												'".$housenum."',
												'".$salesprice."',
												'".$goodsNO."',
												'".$buyprice."',
												'".$old_price."'
												)";
			$dosql->execnonequery($sql);
		}
		showsucceed($_LANG['php']['add_succeed'], '','goods.php?act=add&classid='.$classid);
		exit();
	}
}
/* 评论查看详细 */
if ($act == 'com_edit')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_edit") : chk_privilege("goods_edit");
	
	if(!is_numeric($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	
	$info = array();
	$sql="SELECT  `#@__usercomment`.isshow,`#@__usercomment`.id,`#@__usercomment`.title,`#@__usercomment`.posttime
			,`#@__member`.username,`#@__goods`.title AS g_title,`#@__goods`.picurl,
			`#@__usercomment`.content,`#@__usercomment`.reply,
			`#@__goods`.checkinfo,`#@__goods`.salesprice,`#@__goods`.housenum
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=#@__goods.id AND `#@__usercomment`.uid=`#@__member`.id {$public_where} WHERE `#@__usercomment`.id='{$id}'";
	$info = $dosql->getone($sql);
	
	$smarty->assign("info" 		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('goods_com_edit.html');

}

/* 修改商品评论状态 */
if ($act == 'edit_com_sta')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_edit") : chk_privilege("goods_edit");
	
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}	
	$id=(int)$id;
	$sign=(int)$sign;
	$sql="UPDATE `#@__usercomment` SET `isshow`='{$sign}' WHERE id='{$id}' ";
	if($dosql->execnonequery($sql))
	{
		$sql="SELECT title FROM `#@__usercomment` WHERE id='{$id}'";
		$row=$dosql->getone($sql);
		$row['title'].=$sign==0?"属性:不显示":"属性:显示";
		insert_log($row['title'], 'edit', 'goods_com');
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

/* 修改产品界面 */
if ($act == 'edit')
{
	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_edit") : chk_privilege("goods_edit");
	
	if(!is_numeric($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	$class_info = array();
	$class_info = getallcat('#@__goodscategory', 'id');
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `#@__goods` WHERE `id`=$id {$public_where}");
	$info['picarr'] = string2array($info['picarr']);
	//全部商品属性
	$sql = "SELECT * FROM #@__attribute";
	$attr_info=$dosql->getall($sql);
	//已选择商品属性
	$sql = "SELECT a_id FROM #@__goodsattribute where g_id='{$id}'";
	$goods_attr_res=$dosql->getone($sql);
	$goods_attr_info=array();
	if(!empty($goods_attr_res))
	{
		
		
	
		$goods_attr_res=explode(',',$goods_attr_res['a_id']);
		if(!empty($goods_attr_res))
		{
		
			foreach($goods_attr_res as $v)
			{
				$v and $goods_attr_info[]=$v;
			}
			
		}
		
	}
	
	
	$smarty->assign("info" 		, $info);
	$smarty->assign("class_info", $class_info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->assign("attr_info" , $attr_info);
	$smarty->assign("goods_attr_info", $goods_attr_info);
	$smarty->display('goods_edit.html');

}

/* 查询不同规格商品信息 */
if ($act == 'edit_select')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_edit") : chk_privilege("goods_edit");
	$info = array();
	$info = $dosql->getall("SELECT * FROM `#@__goodsattr` WHERE `goodsid`=$goodsid");
	foreach($info as $key => $val)
	{
		$info[$key]['attrname'] = str_replace(",","",$info[$key]['attrname']);
	}
	
	echo JSON($info);
}

if ($act == 'edit_norm_select')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_edit") : chk_privilege("goods_edit");
	$info = array();
	$info = $dosql->getall("SELECT * FROM `#@__goodsattr_value` WHERE `goodsid`=$goodsid");
	echo JSON($info);
}

/* 修改属性 */
if ($act == 'subedit')
{
	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_edit") : chk_privilege("goods_edit");
	
	if (!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	if(isset($sign) and $sign=='com')
	{
		$id=(int)$id;
		$isshow=(int)$isshow;
		$sql="UPDATE `#@__usercomment` SET `reply` = '{$content}',`isshow`='{$isshow}' WHERE  `id` = '{$id}'";
		$dosql->ExecNoneQuery($sql);
		$sql="SELECT title FROM  `#@__usercomment`  WHERE  `id` = '{$id}'";
		$row=$dosql->getone($sql);
		insert_log($row['title'], 'replay', 'goods_com');
		showsucceed($_LANG['php']['edit_succeed'], '','goods.php?act=com_edit&id='.$id);
		exit();
	}else
	{
		if(!isset($brandid))  $brandid   = 0;
		if(!isset($colorval)) $colorval  = '';
		if(!isset($boldval))  $boldval   = '';
		if(!isset($author))   $author    = '';
		if(!isset($linkurl))  $linkurl   = '';
		if(!isset($flag))     $flag      = ''; else $flag = array2string($flag);
		if(!isset($picarr))   $picarr    = ''; else $picarr = array2string($picarr);
		if(!isset($norm))     $norm      = ''; else $norm = array2string($norm);
		if(!isset($norms))    $norms     = array();
		if(!isset($rempic))        $rempic = '';
		if(!isset($remote))        $remote = '';
		if(!isset($autothumb))     $autothumb = '';
		if(!isset($autodesc))      $autodesc = '';
		if(!isset($autodescsize))  $autodescsize = '';
		if(!isset($autopage))      $autopage = '';
		if(!isset($autopagesize))  $autopagesize = '';
		$starttime = strtotime($starttime);
	    $endtime   = strtotime($endtime);
		if($starttime==$endtime){
		   $starttime = '';
		   $endtime   = '';
		}
		//获取parentstr
		$row = $dosql->GetOne("SELECT `parentid` FROM `#@__goodscategory` WHERE `id`=$classid AND checkinfo=true");
		$parentid = isset($row['parentid']) ? $row['parentid'] : 0;

		if($parentid == 0)
		{
			$parentstr = '0,';
		}
		else
		{
			$r = $dosql->GetOne("SELECT `parentstr` FROM `#@__goodscategory` WHERE `id`=$parentid AND checkinfo=true");
			$parentstr = $r['parentstr'].$parentid.',';
		}
		
		//获取品牌brandpstr
		if(isset($brandid) && $brandid>0)
		{
			$row = $dosql->GetOne("SELECT `parentid` FROM `#@__goodsbrand` WHERE `id`=$brandid AND checkinfo=true");
			$brandpid = isset($row['parentid']) ? $row['parentid'] : 0;
			if($brandpid == 0)
			{
				$brandpstr = '0,';
			}
			else
			{
				$r = $dosql->GetOne("SELECT `parentstr` FROM `#@__goodsbrand` WHERE `id`=$brandpid AND checkinfo=true");
				$brandpstr = $r['parentstr'].$brandpid.',';
			}
		}
		else
		{
			$brandpid  = '-1';
			$brandpstr = '';
		}
		
		//文章组图
		if(is_array($picarr))
		{
			$picarr = implode(',',$picarr);
		}

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


		$posttime = GetMkTime($posttime);
		$buyprice=preg_match("/^\d+(\.\d{1,2})?$/",$buyprice) ? $buyprice : 0;
		$salesprice=preg_match("/^\d+(\.\d{1,2})?$/",$salesprice) ? $salesprice : 0;
		$old_price=preg_match("/^\d+(\.\d{1,2})?$/",$old_price) ? $old_price : 0;
		!$need_integral and $need_integral=0;
		$sql = "UPDATE `$tbname`  SET
										`classid` = '$classid',
										`parentid` = '$parentid',
										`parentstr` = '$parentstr',
										`brandid` = '$brandid',
										`brandpid` = '$brandpid',
										`brandpstr` = '$brandpstr',
										`title` = '$title',
										`colorval` = '$colorval',
										`boldval` = '$boldval',
										`flag` = '$flag',								
										`goodsNO` = '$goodsNO',
										`payfreight` = '$payfreight',
										`weight` = '$weight',
										`salesprice` = '$salesprice',
										`promotionprice` = '$promotionprice',
										`promotiontime` = '$promotiontime',
										`housenum` = '$housenum',
										`housewarn` = '$housewarn',
										`warnnum` = '$warnnum',
										`integral` = '{$integral}',
										`author` = '$author',
										`linkurl` = '$linkurl',
										`keywords` = '$keywords',
										`description` = '$description',
										`content` = '$content',
										`remark` = '$remark',
										`picurl` = '$picurl',
										`picarr` = '$picarr',
										`orderid` = '$orderid',
										`posttime` = '$posttime',
										`checkinfo` = '$checkinfo',
										`norm` = '$norm',
										`retitle` = '$retitle',
										`ser_conent` = '$ser_conent',
										`buyprice`='{$buyprice}',
										`phone_content`  	= '$phone_content',
										`phone`  	= '$phone',
										`phone_picurl`  = '$phone_picurl',
										`phone_desc` 	= '$phone_desc',
										`old_price`='{$old_price}',
										`need_integral`='{$need_integral}',
										`uid`='{$_SESSION['adminid']}',
										`starttime` = '{$starttime}',
										`endtime`   = '{$endtime}'
										WHERE `id` = $id";
									
			if($dosql->ExecNoneQuery($sql))
			{
				$lastid = $dosql->GetLastID();
				//添加日志
				insert_log($title, 'edit', 'goods');
				$str="";
				 if(!empty($attribute))
				 {
					foreach($attribute as $v)
					{
						$v and $str.=",{$v}";
					}
				 }
				$str and $str.=",";
				
					$sql = "REPLACE INTO `#@__goodsattribute` VALUES ('{$str}',$id)";
					$dosql->execnonequery($sql);			
				
				$sql="DELETE FROM  `#@__goodsattr_value` WHERE `goodsid` = ".$id;
				$dosql->execnonequery($sql);
				if(isset($norms[0]) && is_array($norms[0]))
				{
					foreach($norms[0] as $val)
					{
						$sql="INSERT INTO `#@__goodsattr_value`(
															`goodsid`,
															`attrname`,
															`color`,
															`pic`,
															`attrid`
															) VALUES(
															'$id',
															'".$val['name']."',
															'".$val['color']."',
															'".$val['pic']."',
															'".$val['attrid']."'
															)";
						$dosql->execnonequery($sql);
					}
				}
				$sql="DELETE FROM  `#@__goodsattr` WHERE `goodsid` = ".$id;
				$dosql->execnonequery($sql);
				if(isset($norms[1]) && is_array($norms[1]))
				{
					foreach($norms[1] as $val)
					{
						if(!empty($val['num']) && !empty($val['price']) && !empty($val['buyprice']))
						{
							$dosql->execnonequery("INSERT INTO `#@__goodsattr`(
															`goodsid`,
															`attrname`,
															`housenum`,
															`price`,
															`goodsNO`,
															`buyprice`,
															`old_price`
															) VALUES(
															'$id',
															'".$val['attrname']."',
															'".$val['num']."',
															'".$val['price']."',
															'".$val['goodsNO']."',
															'".$val['buyprice']."',
															'".$val['old_price']."'
															)");
						
						}		
					}
				}
				else
				{				
					$sql="INSERT into `#@__goodsattr` 
					VALUES(NULL,'{$id}','','{$housenum}','{$salesprice}','{$goodsNO}','{$buyprice}','{$old_price}')";
					$dosql->execnonequery($sql);
				}
				showsucceed($_LANG['php']['edit_succeed'], '','goods.php?act=edit&id='.$id);
			}
		exit();
	}

}


/* 删除商品 */
if ($act == 'subdel')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_goods_del") : chk_privilege("goods_del");
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if (!is_array($id))
	{
		$id = explode(",", $id);
	}	
	if(isset($sign) and $sign=="com")
	{
		$tbname="#@__usercomment";
		$content="goods_com";
		$sql="DELETE FROM `#@__usercomment`";
	}else
	{
		$content="goods";
		$deltime = GetMkTime(time());
		$sql="UPDATE `$tbname` SET `delstate`='true', `deltime`='$deltime' ";
	}
	foreach ($id as $v)
	{
		$r = $dosql->getone("SELECT `title` FROM `$tbname` WHERE `id` = $v {$public_where}");
		$title = empty($r['title']) ? '' : $r['title'];
		//添加日志
		insert_log($title, 'del', $content);
		$dosql->execnonequery($sql." WHERE `id` = $v {$public_where}");
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}

/* 回收站还原商品 */
if ($act == 'recycleedit')
{
	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_recycle_edit") : chk_privilege("recycle_edit");
	
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
		$r = $dosql->getone("SELECT `title` FROM `$tbname` WHERE `id` = $v {$public_where}");
		$title = empty($r['title']) ? '' : $r['title'];
		
		//添加日志
		insert_log($title, 'restore', 'goods_recycle');
		$deltime = GetMkTime(time());
		$dosql->execnonequery("UPDATE `$tbname` SET `delstate`='', `deltime`='' WHERE `id` = $v {$public_where}");
	}	
	$from = dencode64($from);
	header("location:$from");
	exit();
}

/* 回收站删除商品 */
if ($act == 'recycledel')
{
	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_recycle_del") : chk_privilege("recycle_del");
	
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
		$r = $dosql->getone("SELECT `title` FROM `$tbname` WHERE `id` = $v {$public_where}");
		$title = empty($r['title']) ? '' : $r['title'];
		
		//添加日志
		insert_log($title, 'del', 'goods_recycle');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v {$public_where}");
		$dosql->execnonequery("DELETE FROM `#@__goodsattr` WHERE `goodsid` = $v ");
		$dosql->execnonequery("DELETE FROM `#@__goodsattr_value` WHERE `goodsid` = $v ");
	}
	 
	$from = dencode64($from);
	header("location:$from");
	exit();
}

?>