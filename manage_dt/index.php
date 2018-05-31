<?php	
define('IN_LCSHOP', true);
include_once('lcyunchack.php');
require_once(dirname(__FILE__).'/include/config.php');
include_once(ADMIN_INC . '/inc_menu.php');
include_once(ADMIN_INC . '/inc_privilege.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/privilege.php');
include_once(LCSHOP_LANG . 'admin/order.php');

/* 此页公共变量 */
$tbname = '#@__admin';
$act 	 = isset($act) 		? $act 		: 'login';
$menukey = isset($menukey)  ? $menukey  : '00_custom';

/* 验证码获取函数 */
function GetCkVdValue()
{
	if(!isset($_SESSION)) session_start();
	return isset($_SESSION['ckstr']) ? $_SESSION['ckstr'] : '';
}

/* 验证码重置函数 */
function ResetVdValue()
{
	if(!isset($_SESSION)) session_start();
	$_SESSION['ckstr'] = '';
}


/* 登陆界面 */
if ($act == 'login')
{
 
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
			
	$smarty->assign("home"			 , $_LANG['home']);
	$smarty->assign("lang_js"		 , $_LANG['js']);
	$smarty->assign("lang_login"	 , $_LANG['login']);
	$smarty->assign("version"		 , $cfg_vernum);
	$smarty->display('login.html');
}

/* 判断登陆请求 */
elseif($act=='sublogin')
{
	//初始化参数
	$username = empty($username) ? '' 	 : $username;
	$password = empty($password) ? '' 	 : md5(md5($password));

	//验证输入数据
	if($username == '' || $username == $_LANG['js']['username'])
	{
		ShowMsg($_LANG['js']['username'],'index.php?act=login');
		exit();
	}
	
	if($password == '' || $password == $_LANG['js']['password'])
	{
		ShowMsg($_LANG['js']['password'],'index.php?act=login');
		exit();
	}
	if($validate == '' || $validate != strtolower(GetCkVdValue()))
	{
		ResetVdValue();
		ShowMsg($_LANG['validate_error'],'index.php?act=login');
		exit();
	}
	
	//删除已过时记录
	$dosql->ExecNoneQuery("DELETE FROM `#@__failedlogin` WHERE (UNIX_TIMESTAMP(NOW())-time)/60>15");


	//判断是否被暂时禁止登录
	$r = $dosql->GetOne("SELECT * FROM `#@__failedlogin` WHERE username='$username'");
	if(is_array($r))
	{
		$min = round((time()-$r['time']))/60;
		if($r['num']==0 and $min<=15)
		{
			ShowMsg($_LANG['js']['error'],'index.php?act=login');
			exit();
		}
	}

	$row = $dosql->GetOne("SELECT `$tbname`.*,#@__admin_role.privilege AS r_privilege,#@__admin_role.sign FROM `$tbname` LEFT JOIN #@__admin_role 
	ON `$tbname`.role_id=#@__admin_role.id
	WHERE username='$username' and password='$password'");
	
	//密码错误
	if(!is_array($row) or $password!=$row['password'])
	{
		$logintime = time();
		$loginip   = getip();

		$r = $dosql->getone("SELECT * FROM `#@__failedlogin` WHERE username='$username'");
		if(is_array($r))
		{
			$num = $r['num']-1;
			if($num == 0)
			{
				$dosql->ExecNoneQuery("UPDATE `#@__failedlogin` SET time=$logintime, num=$num WHERE username='$username'");
				ShowMsg($_LANG['js']['error'],'index.php?act=login');
				exit();
			}
			else if($r['num']<=5 and $r['num']>0)
			{
				
				$dosql->ExecNoneQuery("UPDATE `#@__failedlogin` SET time=$logintime, num=$num WHERE username='$username'");
				ShowMsg(str_replace("strnum", $num, $_LANG['js']['n_error']),'index.php?act=login');
				exit();
			}
		}
		else
		{
			$num=5;
			$dosql->ExecNoneQuery("INSERT INTO `#@__failedlogin` (username, ip, time, num, isadmin) VALUES ('$username', '$loginip', '$logintime', 5, 1)");
			ShowMsg(str_replace("strnum", $num, $_LANG['js']['n_error']), 'index.php?act=login');
			exit();
		}
	}


	//密码正确，查看是否被禁止登录
	else if($row['checkadmin'] == 'false')
	{
		ShowMsg($_LANG['js']['nologin'] ,'index.php?act=login');
		exit();
	}


		//用户名密码正确
		else
		{
			$logintime = time();
			$loginip = GetIP();


			//删除禁止登录
			if(is_array($r))
			{
				$dosql->ExecNoneQuery("DELETE FROM `#@__failedlogin` WHERE username='$username'");
			}
			
			$_SESSION['adminid'] 		= $row['id'];			//提取当前用户账号id
			$_SESSION['admin'] 			= $username;			//提取当前用户账号
			$_SESSION['adminpwd'] 		= md5($password);		//提取当前用户账号密码
			if($row['privilege']!="all")//提取当前用户权限
			{
				$_SESSION['admin_pri']=$row['role_id']!=0?$row['r_privilege']:$row['privilege'];
			}else
			{
				$_SESSION['admin_pri']='all';
			}
		
			$_SESSION['lastlogintime'] 	= $row['logintime'];	//提取上次登录时间
			$_SESSION['lastloginip']	= $row['loginip'];		//提取上次登录IP
			$_SESSION['r_sign']			= $row['sign'];			//提取用户角色标识
			$_SESSION['logintime'] 		= $logintime;			//记录本次登录时间
			$dosql->ExecNoneQuery("UPDATE `$tbname` SET loginip='$loginip',logintime='$logintime' WHERE username='$username'");
			header('location:index.php?act=mywork');
			exit();
		}
}

/* 退出 */
elseif($act == 'unlogin')
{
	$_SESSION = array();
	session_destroy();
	header('location:index.php');
	exit();
}

/* 生成快捷方式 */
elseif($act == 'desktop')
{
	$url = 'http://';
	$url .= $_SERVER['HTTP_HOST'];
	$url .= $_SERVER['PHP_SELF'];
	
	$Shortcut = "[InternetShortcut]
	URL=$url
	IDList=
	IconIndex=43
	IconFile=C:\Windows\system32\SHELL32.dll
	HotKey=1626
	[{000214A0-0000-0000-C000-000000000046}]Prop3=19,2";
	Header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".iconv("utf-8","gb2312",'LCSHOP').".url;");
	echo $Shortcut;
	exit();
}
/* 我的工作台 */
elseif ($act == 'mywork')
{
	foreach ($module AS $key => $value)
    {
        ksort($module[$key]);
    }
    ksort($module);
	
	foreach ($module AS $key => $val)
	{
		if (is_array($val))
		{
			foreach ($val AS $k => $v)
			{
				if (isset($privilege[$k]))
				{
					if (is_array($privilege[$k]))
					{
						$boole = false;

						foreach ($privilege[$k] as $linkurl)
						{
							$boole = $boole || chk_privilege($linkurl, false);
							
						}
						
						if (!$boole)
						{
							continue;
						}

					}
					else
					{
						if (!chk_privilege($purview[$k], false))
						{
							continue;
						}
					}
					
				}
				
				$nav[$key]['label']  = $_LANG[$key];
				$nav[$key]['linkurl'] = $key;
			}
		}
		else
		{
			$nav[$key]['label'] = $_LANG[$key];
			$nav[$key]['linkurl'] = $key;
		}

		if(empty($nav[$key]))
		{
			unset($nav[$key]);
		}
	}

	//订单统计
	if (@$endtime == '' && @$starttime == '')
	{
		$starttime = date("Y-m-d",strtotime('-30 day'));	
		$endtime = date("Y-m-d",time());	
	}	
	$smarty->assign("endtime",$endtime);
	$smarty->assign("starttime",$starttime);	
	
	//会员统计
	
	if (@$time1 == '')
	{
		$time1 = date("Y-m",time());	
	}	
	$smarty->assign("time1",$time1);
	$smarty->assign("time2",@$time2);
	$smarty->assign("time3",@$time3);
	$smarty->assign("time4",@$time4);
	$smarty->assign("time5",@$time5);	

	//会员数
	$sql2 = "select count(id) from `#@__member`";
	$row2 = $dosql->GetOne($sql2);
	$MemberCount = $row2['count(id)'];	
	$smarty->assign('MemberCount', $MemberCount);
	/*验证登录用户角色标识*/
	$order_where="";
	if($_SESSION['sign'])//订单
	{
		$order_where="  AND `#@__goodsorder`.orderlistnum IN (select gorderlistnum from #@__goodsshopcart inner join 
		#@__goods 
		on #@__goodsshopcart.gid=#@__goods.id
		where #@__goods.uid='{$_SESSION['adminid']}'
		group by #@__goodsshopcart.gorderlistnum) ";
	}
	
	$goods_where= $_SESSION['sign'] ? " AND  `#@__goods`.uid='{$_SESSION['adminid']}'": "";//验证登录用户角色标识（商品）
	
	$cart_where="";
	if($_SESSION['sign'])//购物车表
	{
		$cart_where="  AND `#@__goodsshopcart`.gid 
		IN (select id from #@__goods 
		where uid='{$_SESSION['adminid']}')
		";
	}
	/*验证登录用户角色标识END*/
	//新订单
	$curtimeS = GetMkTime(date("Y-m-d 00:00:00",time()));
	$curtimeE = GetMkTime(date("Y-m-d 23:59:59",time()));
	$sql2 = "select count(id) from `#@__goodsorder` where posttime >= ".$curtimeS." and posttime<= ".$curtimeE." {$order_where}";
	$row2 = $dosql->GetOne($sql2);
	$NewOrderCount = $row2['count(id)'];	
	$smarty->assign('NewOrderCount', $NewOrderCount);	
	
	//新任务
	$sql2 = "select count(id) from `#@__goodsorder` where checkinfo in (1,2,3) {$order_where}";
	$row2 = $dosql->GetOne($sql2);
	$OrderCount = $row2['count(id)'];	
	$smarty->assign('OrderCount', $OrderCount);
	
	//库存
	$sql2="SELECT sum(#@__goodsattr.housenum) as tot FROM #@__goods inner join #@__goodsattr
	on #@__goodsattr.goodsid=#@__goods.id
	WHERE checkinfo = 'true' and delstate = '' {$goods_where}
	";
	$row2 = $dosql->GetOne($sql2);
	$HouseCount = $row2['tot']?$row2['tot']:0;;	
	$smarty->assign('HouseCount', $HouseCount);	
	//评论数
	$sql="SELECT  count(`#@__usercomment`.id) as tot
			FROM `#@__usercomment` INNER JOIN  (`#@__goods`,`#@__member`) 
			ON  `#@__usercomment`.gid=`#@__goods`.id AND `#@__usercomment`.uid=`#@__member`.id 
			WHERE `#@__goods`.delstate='' AND `#@__usercomment`.reply='' {$goods_where}";
	$row = $dosql->GetOne($sql);
	$CommentCount = $row['tot'];	
	$smarty->assign('CommentCount', $CommentCount);	
	//新BUG数
	$sql = "select count(id) AS tot from `#@__bug` WHERE checkinfo='0'";
	$row = $dosql->GetOne($sql);
	$BugCount = $row['tot'];	
	$smarty->assign('BugCount', $BugCount);	
	//利润总额
	$now= GetMkTime(date("Y-m-d H:i:s"));
	$time_Poor_4 = $cfg_rgdeadline * 86400 ;
	$time=$now-$time_Poor_4;
	$sql="select sum((price-buyprice)*num) as money from #@__goodsshopcart where gorderlistnum in
	( select orderlistnum from #@__goodsorder where checkinfo=3 and ReceiptTime<={$time}) {$cart_where}";
	$row = $dosql->GetOne($sql);
	!$row['money'] and $row['money']=0;
	$smarty->assign('ProfitsMoney', $row['money']);	
	//总销售额
	$SalesTotal = 0;
	$sales = $dosql->getall("select `price`,`num` from `#@__goodsshopcart` where Status = 'order' and gorderlistnum in(select orderlistnum from #@__goodsorder where (checkinfo=1 or checkinfo=2 or checkinfo=3))  {$cart_where}");
	foreach ($sales as $k => $v)
	{
		$SalesTotal += $v['price']*$v['num']; 
	}
	$smarty->assign('SalesTotal', $SalesTotal);	
	
	//管理员
	$admins = $dosql->getall("select id , username from `#@__admin` order by regtime desc limit 0,10");
	$smarty->assign('admins', $admins);
	
	//新会员
	$members = $dosql->getall("select id , username, avatar from `#@__member` order by regtime desc limit 0,10");
	$smarty->assign('members', $members);	
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	
	$smarty->assign('lang', $_LANG);
	$smarty->assign('Server_Stoptime', isset($cfg_serverstoptime) ?$cfg_serverstoptime:0);
	$smarty->assign('name', $_LANG['name']);
	$smarty->assign('Unit', $_LANG['Unit']);
	$smarty->assign('home', $_LANG['home']);
	$smarty->assign('session', $_SESSION);	
    $smarty->assign('nav' , $nav);	
	$smarty->display('mywork.html');
}
/* 左侧菜单 */
else if($act=='menu')
{
	$menukey = $menukey;
	$menu = array();
	foreach ($module AS $key => $value)
	{
		if(isset($menukey) && $key != $menukey)
		{
			unset($module[$key]);
		}
		/*else
		{
			ksort($module[$key]);
		}*/
		
	}
	ksort($module);
	foreach ($module AS $key => $val)
	{
		$menu[$key]['label'] = $_LANG[$key];
		if (is_array($val))
		{
			foreach ($val AS $k => $v)
			{
				if (isset($privilege[$k]))
				{
					if (is_array($privilege[$k]))
					{
						$boole = false;

						foreach ($privilege[$k] as $linkurl)
						{
							$boole = $boole || chk_privilege($linkurl, false);
							
						}
						
						if (!$boole)
						{
							continue;
						}

					}
					else
					{
						if (!chk_privilege($purview[$k], false))
						{
							continue;
						}
					}
					
				}
				$menu[$key]['children'][$k]['label']  = $_LANG[$k];
				$menu[$key]['children'][$k]['linkurl'] = $v;
			}
		}
		else
		{
			$menu[$key]['linkurl'] = $val;
		}
		
		if(empty($menu[$key]['children']))
		{
			unset($menu[$key]);
		}
		if(!isset($menukey))
		{
			break;
		}
	}
	$smarty->assign('home', $_LANG['home']);
	$smarty->assign('session', $_SESSION);	
    $smarty->assign('menu', $menu);	
	$smarty->display('menu.html');
}
/* 欢迎界面 */
elseif($act=='home')
{
	$smarty->assign('count', '');	
	$smarty->display('home.html');
}

/* 个性定制页面 */
elseif ($act == 'custom')
{
	$custom_info = array();
	$r = $dosql->getone("SELECT custom FROM `#@__admin` WHERE `id` = ".$_SESSION['adminid']);
	if($r)
	{
		$custom_info=string2array($r['custom']);
	}
	$smarty->assign('custom_info', $custom_info);
	$smarty->assign('lang', $_LANG);
	$smarty->display('custom.html');
}

/* 菜单设置显示页面 */
elseif($act=='edit')
{
	$custom_info = array();
	$r = $dosql->getone("SELECT custom FROM `#@__admin` WHERE `id` = ".$_SESSION['adminid']);
	if($r)
	{
		$custom_info=string2array($r['custom']);
	}
	
	foreach ($module AS $key => $value)
	{
		ksort($module[$key]);		
	}
	ksort($module);

	foreach ($module AS $key => $val)
	{
		$menu[$key]['label'] = $_LANG[$key];
		if (is_array($val))
		{
			foreach ($val AS $k => $v)
			{
				if (isset($privilege[$k]))
				{
					if (is_array($privilege[$k]))
					{
						$boole = false;

						foreach ($privilege[$k] as $linkurl)
						{
							$boole = $boole || chk_privilege($linkurl, false);
							
						}
						
						if (!$boole)
						{
							continue;
						}

					}
					else
					{
						if (!chk_privilege($purview[$k], false))
						{
							continue;
						}
					}
					
				}
				
				$menu[$key]['children'][$k]['label']  = $_LANG[$k];
				$menu[$key]['children'][$k]['linkurl'] = $v;
				if(isset($custom_info[$k]))
				{
					$menu[$key]['children'][$k]['checked'] = '1';
				}
				else
				{
					$menu[$key]['children'][$k]['checked'] = '0';
				}
			}
		}
		else
		{
			$menu[$key]['linkurl'] = $val;
		}

		if(empty($menu[$key]['children']))
		{
			unset($menu[$key]);
		}
	}
	unset($menu['00_custom']);
	$smarty->assign('custom_info', $custom_info);
	$smarty->assign('lang', $_LANG);
    $smarty->assign('menu' , $menu);	
	$smarty->display('custom_edit.html');
}

/* 菜单设置 */
elseif($act=='subedit')
{
	if(isset($custom))
	{
		$custom = array2string($custom);
	}
	else
	{
		$custom = '';
	}
	$sql = "UPDATE `#@__admin` SET `custom` = '$custom' WHERE `id` = ".$_SESSION['adminid'];
	$dosql->execnonequery($sql);
	showsucceed($_LANG['php']['edit_succeed'], '','index.php?act=edit');
	exit();
	
}
/* 清除缓存 */
elseif ($act == 'clearcache')
{
    $count = clear_tpl_files(false)+clear_tpl_files(true);
	$smarty->assign('count', $count);	
	$smarty->display('home.html');
}
/* 首页新任务订单 */
elseif ($act == 'getneworders')
{
	//新任务
	$str = "";
	$orderlistnum=trim($orderlistnum,' ');
	if ($orderlistnum != '' and $orderlistnum !=$_LANG['searchnum'])
	{
		$str = " and orderlistnum LIKE '%".$orderlistnum."%'";
	}
	$sql2 = "select * from `#@__goodsorder` where checkinfo in (0,1,2,3) ".$str."";
	$NewOrders = $dopage->getpage($sql2,6);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign('NewOrders', $NewOrders);
	$smarty->assign('page', $dopage->AjaxGetList());
	$smarty->assign('lang', $_LANG);	
	$smarty->display('NewOrders.html');
	
}
/* 首页信息 */
elseif($act == 'default')
{
/*	foreach ($module AS $key => $value)
    {
        ksort($module[$key]);
    }*/
    ksort($module);
	//print "<pre>";
	//print_r($privilege);die;
	foreach ($module AS $key => $val)
	{
		if (is_array($val))
		{
			foreach ($val AS $k => $v)
			{
				
				if (isset($privilege[$k]))
				{
					if (is_array($privilege[$k]))
					{
						$boole = false;

						foreach ($privilege[$k] as $linkurl)
						{
							
							$boole = $boole || chk_privilege($linkurl, false);					
						}
						
						if (!$boole)
						{
							continue;
						}

					}
					else
					{
						if (!chk_privilege($purview[$k], false))
						{
							continue;
						}
					}
					
				}
				if (!isset($nav[$key]['righturl']))
				{
					$nav[$key]['righturl'] = $module[$key][$k];
				}
				$nav[$key]['label']  = $_LANG[$key];
				$nav[$key]['linkurl'] = $key;
			}
		}
		else
		{
			$nav[$key]['label'] = $_LANG[$key];
			$nav[$key]['linkurl'] = $key;
			$nav[$key]['righturl'] = $module[$key][0];
		}

		if(empty($nav[$key]))
		{
			unset($nav[$key]);
		}
	}
	$smarty->assign('home', $_LANG['home']);
	if(isset($from) && $from=='mywork')
	{
		$smarty->assign('lefturl', 'index.php?act=menu&menukey='.$menukey);
		foreach ($module[$menukey] as $key => $val)
		{	
			$righturl=$module[$menukey][$key];
			if($menukey=="09_orders" and isset($sign))
			{
				$righturl.=strstr($righturl,"?")?"&sign={$sign}":"?sign={$sign}";
			}
			if($menukey=="10_goods" and isset($sign))
			{
				$righturl.=strstr($righturl,"?")?"&nav={$sign}":"?nav={$sign}";
			}
			$smarty->assign('righturl', $righturl);
			break;
		}
	}
	else
	{
		$smarty->assign('lefturl', 'index.php?act=menu');
		$smarty->assign('righturl', 'index.php?act=custom');
	}
	
    $smarty->assign('nav' , $nav);

	$smarty->display('default.html');
}
?>