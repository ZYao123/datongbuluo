<?php
define('IN_LCSHOP', true);
session_start();
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/member.php');
include_once(LCSHOP_LANG . '/orderinfo.php');
include_once('bottom.php');
$fromurl = ($from = empty($from) ? '' : $from);

//全局变量
$smarty->assign('member'    , $_LANG['member']);//会员管理相关信息验证
$smarty->assign('js'    , $_LANG['register']);//会员注册登录js验证
$act = isset($act) ? $act : 'login';//定义变量
//登录
if($act=='login')
{			
	if(isset($_COOKIE['username']))
	{
		header("Location:member.php?act=default");
		exit();
	}
	if (@$error != '')
	{
		@$smarty->assign("error","<span style='color:#f00'>".$error."</span>");//会员订单
	}
	else
	{
		@$smarty->assign("error",$_LANG['register']['log_error']);//会员订单
	}

	$smarty->assign("from"          , $from);
	$smarty->display('login.html');
}
elseif($act=='login_acc')
{
	if($username == '')
	{
		header("Location:member.php?act=login&from=".$from."&error=".urlencode($_LANG['register']['username_input']) );
		//showmsg($_LANG['register']['username_ero'], '1');
		exit();
	}
	//echo $username;
	if($password == '')
	{
		header("Location:member.php?act=login&from=".$from."&error=".urlencode($_LANG['register']['password']) );
		//showmsg($_LANG['register']['password'], '1');
		exit();
	}

	//会员登录
	$r = $dosql->GetOne("SELECT * FROM `#@__member` WHERE `username`='$username' or email='{$username}'");
	if($r){
		if($r['checkuser']==0){
		if(md5(md5($password)) == $r['password'])
		{
			$from     = empty($from)     ? '' : $from;
			
			if(isset($autologin))
				$cookie_time = time()+14*24*60*60;
			else
				$cookie_time = time()+3600*1;

			setcookie('username',      AuthCode($r['username']      ,'ENCODE'), $cookie_time);
			setcookie('lastlogintime', AuthCode($r['logintime'],'ENCODE'), $cookie_time);
			setcookie('lastloginip',   AuthCode($r['loginip']  ,'ENCODE'), $cookie_time);
			setcookie('userid',        $r['id'],                    $cookie_time);
			/*更新购物车*/
			//如果购物车cookies不为空，则将cookies写入数据库
			$goods_ids = ',,';
			if (@$_COOKIE['shop_cart'] != '')
			{
				//将数据库购物车表中的数据取出，将所有商品id放在字符串中
				$sql = "select gid,norm from `#@__goodsshopcart` where  Status = 'cart' and uid = '{$r['id']}' and consume_points=0";
				$dosql->Execute($sql);
				$array=array();
				while($row = $dosql->GetArray())
				{
					$goods_ids.= $row['gid'].",";
					$array[$row['gid']]=$row['norm'];

				}
				
				$cur_cart_array = unserialize(stripslashes(@$_COOKIE['shop_cart']));
				//遍历每个商品信息数组的0值，如果键值为0且货号相同则购物车存在相同货品
				foreach($cur_cart_array as $keys=>$goods_current_cart)
				{
					if(array_key_exists($goods_current_cart[0],$array) 
						and $goods_current_cart[2]==$array[$goods_current_cart[0]])
					{
						//存在相同商品时，数量相加，更新数据库
						$sql = "UPDATE `#@__goodsshopcart` SET num = num + ".$cur_cart_array[$keys][1]." WHERE uid = ".$r['id']." and gid = ".$cur_cart_array[$keys][0]." AND Status = 'cart' AND norm='{$goods_current_cart[2]}' and consume_points=0";
					}   
					else  //否则插入数据库
					{
						$sql="select title,picurl FROM `#@__goods` WHERE 
						id='{$cur_cart_array[$keys][0]}'";
						$row=$dosql->getone($sql);
						$title=$row['title'] ?$row['title']:"";
						$picurl=$row['picurl'] ?$row['picurl']:"";
						if($row['integral']>0){
							$gintegral = $row['integral'];
						}else{
							$gintegral = 0;
						}
						$sql="select buyprice FROM `#@__goodsattr` WHERE goodsid='{$cur_cart_array[$keys][0]}' and attrname='{$goods_current_cart[2]}'";
						$attr_row=$dosql->getone($sql);
						$buyprice=$attr_row['buyprice'] ?$attr_row['buyprice']:0;
		
						$sql = "INSERT INTO `#@__goodsshopcart` (`gtitle`,`gpicurl`,`price`,`gid`,`num`,`uid`,`Status`,`norm`,`buyprice`) 
						VALUES ('{$title}','{$picurl}','{$goods_current_cart[3]}','".$cur_cart_array[$keys][0]."','".$cur_cart_array[$keys][1]."','".$r['id']."','cart','{$cur_cart_array[$keys][2]}','{$buyprice}')";
					}  
					$dosql->ExecNoneQuery($sql);
				}				
			}
			
			setcookie('shop_cart','');
			/*更新购物车*/
			//登录成功
			$from=dencode64($from);
			
			preg_match("/member\.php\?act\=regist/i",$from) and $from="index.php";
			
			header("Location:".$from);		
		}else{
			//用户名密码不正确
			header("Location:member.php?act=login&from=".$from."&error=".urlencode($_LANG['register']['log_faulsepsw']) );
		}
	  }else{
		  header("Location:member.php?act=login&from=".$from."&error=".urlencode($_LANG['register']['log_freeze']) );
	  }	
	}
	else
	{
		//用户名不存在
		header("Location:member.php?act=login&from=".$from."&error=".urlencode($_LANG['register']['log_faulsepsw']) );
	}


}

//会员信息
elseif($act=='memberinfo')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$smarty->assign('js'    , $_LANG['js']);
	$userid = $_COOKIE['userid'];
	$row_member = $dosql->GetOne("select * from `#@__member` where id = $userid");
	$smarty->assign("row_member",$row_member);//会员地址
	$smarty->assign("user_rank",levelname($row_member['user_rank']));
	$smarty->display('member_info.html');
}
//订单信息
elseif($act=='ordercontent')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$id = $_GET['orderid'];
	$userid = $_COOKIE['userid'];
	if (@$id == '')
	{
		$smarty->display('404.html');
		exit();
	}
	$row_order = array();
	$row_order = $dosql->GetOne("select * from `#@__goodsorder` where id = $id and userid=".$userid);
	if ($row_order == '')
	{
		$smarty->display('404.html');
		exit();
	}	
		$smarty->assign("returnid", $returnid);
		
	//配送方式
	$postmode_info = $dosql->getone("select classname from `#@__postmode` where id  ='{$row_order['postmode']}'");
	$smarty->assign("postmode_info", $postmode_info['classname']);
	
	$payment_info = $dosql->getone("SELECT is_cod,is_online FROM `#@__payment` WHERE id='{$row_order['paymode']}'");
	$smarty->assign("payment_info", $payment_info);
	$smarty->assign("type", '2');
	$smarty->assign("expressid", $row_order['Courierid']);
	$smarty->assign("expressno", $row_order['postid']);	
	
	$orderlistnum = $row_order['orderlistnum'];
	$sql="SELECT `#@__goodsshopcart`.*,`#@__goods`.integral FROM `#@__goodsshopcart` RIGHT JOIN `#@__goods` ON `#@__goodsshopcart`.gid= `#@__goods`.id where gorderlistnum = '".$orderlistnum."'";
	$goodslist = $dopage->GetPage($sql,1000000);
	$cart_info = array();
	$k=0;
	foreach ($goodslist as $key=>$v)
	{
		$cart_info[$k] = $v;
		$cart_info[$k]['attrname']="";
		if($v['norm']!="")
			{
				$arr = explode(",",$v['norm']);
				foreach($arr as $vs)
				{
					$r = $dosql->getone("SELECT attrname FROM `#@__goodsattr_value` WHERE `goodsid`=".$v['gid']." AND `attrid`=$vs");
					if($r)
					{
						$cart_info[$k]['attrname'] .= " ".$r['attrname'];
					}
				}
			}
			$k+=1;
	}
	
	//购物车数量

		if (@$_COOKIE['userid'] != '')
		{
		
			$sql = "select count(1) as tot
				from `#@__goodsshopcart`,
				`#@__goodsattr` where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid
				AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm
				 AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." AND `#@__goodsshopcart`.Status = 'cart'";
			$result=$dosql->getone($sql);
			$shop_item_num = $result['tot'];
		}
	
	$invalid = $cfg_checkinfo*24;	
		
	$smarty->assign('invalid',$invalid);//订单失效时间（小时）	
	$smarty->assign("shop_item_num", $shop_item_num);
	@$smarty->assign("goodslist",$cart_info);//商品列表
	$smarty->assign("order",$row_order);//订单信息
	$smarty->display('ordercontent.html');
}
//进入会员中心页
//订单列表页
elseif($act=='default')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	//自动将未付款订单设置为无效订单 时间差3600为1小时，86400（3600*24）为1天
	
	$time_Poor_0 = $cfg_checkinfo * 86400;
	$time_Cur = GetMkTime(date("Y-m-d H:i:s"));
	
	$sql = "UPDATE `#@__goodsorder` SET `checkinfo` = '-1' where checkinfo = 0 and delstate='' {$public_where}  and  ".$time_Cur." - posttime >= ".$time_Poor_0." ";
	$dosql->execnonequery($sql);
	
	$sql="SELECT * FROM `#@__goodsorder` where userid = '".$_COOKIE['userid']."' order by id desc";
	$memberorder = $dopage->GetPage($sql,10);
	$smarty->assign("time", '');
	@$smarty->assign("memberorder",$memberorder);//会员订单
	$smarty->assign("page", $dopage->getlist());//分页信息
	$smarty->display('member.html');
}
//筛选订单列表页
elseif($act=='select')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');		
	$username = AuthCode($_COOKIE['username']);
	$time = $_GET['time'];
	$cur_time = time();
	$time_cha = $cur_time - 2592000;
	$sql="SELECT * FROM `#@__goodsorder` where ($cur_time > posttime and $time_cha < posttime) AND username = '".$username."'";

	$memberorder = $dopage->GetPage($sql,10);
	 
	@$smarty->assign("memberorder",$memberorder);//会员订单
	$smarty->assign("page", $dopage->getlist());//分页信息
	$smarty->assign("time", $time);//分页信息
	$smarty->display('member.html');
}
//删除订单
elseif($act=='orderdel')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');		
	$id = $_GET['orderid'];
	$sql = "DELETE FROM `#@__goodsorder`,`#@__goodsshopcart` USING `#@__goodsorder` JOIN `#@__goodsshopcart`
	ON `#@__goodsorder`.orderlistnum=`#@__goodsshopcart`.gorderlistnum
	WHERE `#@__goodsorder`.id=$id";
	if($dosql->execnonequery($sql))
	{
		echo '1';
	}else{
		echo '0';
	}
	die;
}

//注册
elseif($act=='regist')
{
	if (@$reshop == 'lost')
	{
		@$smarty->assign("reshop",$_LANG['register']['reg_faulse'] );//会员订单
	}
	else
	{
		@$smarty->assign("reshop",'');//会员订单
	}
	/* 头部导航 */
	$top_nav = array();
	$top_nav = $dosql->getall("SELECT * FROM `#@__nav` WHERE `checkinfo`='true' AND `position`='top' ORDER BY orderid asc");
	$smarty->assign("top_nav", $top_nav);
	$smarty->display('regist.html');
}
elseif($act=='regist_acc')
{
	
	//注册会员
	$email = $_POST['email'];
	$preg_email="/^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/";
	//邮件判断
	if(!preg_match($preg_email,$email))
	{
		$smarty->assign("error",$_LANG['register']['email_ero']);
		$smarty->display('505.html');		
		exit();
	}
	$username = $_POST['username'];
	//会员名判空
	if(!is_Uname($username))
	{
		$smarty->assign("error",$_LANG['register']['username_ero']);
		$smarty->display('505.html');		
		//showmsg($_LANG['register']['username_ero'], '1');
		exit();
	}
	
	if(!is_Uname($password))
	{
		$smarty->assign("error",$_LANG['register']['password']);
		$smarty->display('505.html');		
		//showmsg($_LANG['register']['password'], '1');
		exit();
	}
	
	if($password != $repassword)
	{
		$smarty->assign("error",$_LANG['register']['password_no']);
		$smarty->display('505.html');		
		//showmsg($_LANG['register']['password_no'], '1');
		exit();
	}
	

	
	//会员名判断是否重复
	$row = array();
	$row = $dosql->GetOne("select * from `#@__member` where username = '".$username."'");
	if($row != '')
	{
		$smarty->assign("error",$_LANG['register']['username_re']);
		$smarty->display('505.html');			
		//showmsg($_LANG['register']['username_re'], '1');
		exit();
	} 	
	
	$password = md5(md5($_POST['password']));
	$regtime = time();
	$sql = "INSERT INTO `#@__member` (`username`,`password`,`regtime`,`email`,`user_rank`) VALUES ('$username','$password','$regtime','{$email}',1)";
	if($dosql->execnonequery($sql))
	{
		echo '<script>
		     alert("注册成功请登录");
			location.href="'.$_POST['gourl'].'"; 
		</script>';
	}else{
		echo '<script>
		     alert("注册失败");
			location.href="'.$_POST['url'].'"; 
		</script>';
	}
}
//验证用户是否可用
elseif($act=='regist_jud')
{
	//判断用户名
	$username = $_GET['username'];
	//$dosql->Execute("select * from pmw_member where email = '".$email."'");
	$row = array();
	$row = $dosql->GetOne("select * from `#@__member` where username = '".$username."'");
	//echo $username;
	if($row != '')
	{
		echo '0';//有重名
	}else{
		echo '1';
	}
}

//密码验证
elseif($act=='regist_pwd')
{
	$reg = '/^(.){6,}$/';
	
	$password = $_GET['password'];
    if(preg_match($reg,$password)){
	    echo 1;	
	}else{
		echo 0;
	}
	exit;
}
//检测原密码是否
elseif($act=='checkpsw')
{
	$row = array();
	$row = $dosql->GetOne("select * from `#@__member` where password = '".md5(md5($oldpsw))."' and id = ".$_COOKIE['userid']."");	
	if($row != '')
	{
		echo '1';
	}
	else
	{
		echo '0';//密码不对
	}
}
//会员退出登录
else if($act == 'logout')
{
	setcookie('username',      '', time()-14*24*60*60);
	setcookie('lastlogintime', '', time()-14*24*60*60);
	setcookie('lastloginip',   '', time()-14*24*60*60);
	setcookie('userid',   '', time()-14*24*60*60);
	header("Location:".dencode64($from));
	exit();
}

//会员收货地址
elseif($act == 'address')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');		
	$smarty->assign("from"          , urlencode(getcururl()));
	$userid = $_COOKIE['userid'];
	$sql="SELECT * FROM `#@__member_address` where userid=$userid order by is_first desc, id desc";
	$dosql->Execute($sql);
	$addr = array();
	while($row_addr=$dosql->GetArray()){
		$addr[]=array("rec_name"=>$row_addr['rec_name'],"id"=>$row_addr['id'],"cur_address"=>$row_addr['cur_address'],"road_address"=>$row_addr['road_address'],"zipcode"=>$row_addr['zipcode'],"telephone"=>$row_addr['telephone'],"phone"=>$row_addr['phone'],"is_first"=>$row_addr['is_first']);
	}
	$smarty->assign("lang",$_LANG['addr']);
	$smarty->assign("js",$_LANG['js']);
	$smarty->assign("addr",$addr);//会员地址
	//$smarty->assign("area",$area);//所在地区
	
	//地址信息
	$sql = "SELECT id,classname FROM `#@__area` where parentid = 0";
	$info = $dosql->getall($sql); 
	$smarty->assign("info"  , $info);
		
	$smarty->display('address.html');
}
//添加收货地址
elseif($act=='address_jud')
{
	
	require_once(dirname(__FILE__).'/include/checkmember.php');		$userid = $_COOKIE['userid'];
	$is_first = 0;
	$rec_name = $_POST['rec_name'];
	$cur_address = $_POST['cur_address'];
	//$road_address = $_POST['road_address'];
	
	if($rec_name == '')
	{
		$smarty->assign("error",$_LANG['js']['rec_name']);
		$smarty->display('505.html');		
		//showmsg($_LANG['js']['rec_name'], '1');
		exit();
	}	
	if($cur_address == '')
	{
		$smarty->assign("error",$_LANG['js']['cur_address']);
		$smarty->display('505.html');			
		//showmsg($_LANG['js']['cur_address'], '1');
		exit();
	}		
	
	
	$zipcode = $_POST['zipcode'];
	$telephone = $_POST['telephone'];
	$phone = $_POST['phone'];
	
	//获取地址id及名称
	$address_id = "0,".$AddrCountry.",".$AddrProvince.",".$AddrCity.",".$AddrArea;
	$road_address = '';
	$row = array();
	$row = $dosql->getone("select classname from `#@__area` where id = ".$AddrCountry."");
	if ($row != '')
	{
		$CountryName = $row['classname'];
	}
	else
	{
		$CountryName = $_LANG['addr']['Deleted'];
	}	
	$row1 = array();
	$row1 = $dosql->getone("select classname from `#@__area` where id = ".$AddrProvince."");
	if ($row1 != '')
	{
		$ProvinceName = $row1['classname'];
	}
	else
	{
		$ProvinceName = $_LANG['addr']['Deleted'];
	}
	$row2 = array();
	$row2 = $dosql->getone("select classname from `#@__area` where id = ".$AddrCity."");
	if ($row2 != '')
	{
		$CityName = $row2['classname'];
	}	
	else
	{
		$CityName = $_LANG['addr']['Deleted'];
	}	
	$row3 = array();
	$row3 = $dosql->getone("select classname from `#@__area` where id = ".$AddrArea."");
	if ($row3 != '')
	{
		$AreaName = $row3['classname'];
	}
	else
	{
		$AreaName = $_LANG['addr']['Deleted'];
	}			
	$road_address = $CountryName." ".$ProvinceName." ".$CityName." ".$AreaName;	
	


	$sql = "INSERT INTO `#@__member_address` (`rec_name`,`userid`,`cur_address`,`zipcode`,`telephone`,`phone`,`is_first` , `address_id`, `road_address`) VALUES ('$rec_name','$userid','$cur_address','$zipcode','$telephone','$phone','$is_first', '$address_id', '$road_address')";

	$dosql->execnonequery($sql);
	header("Location:member.php?act=address");

}
//修改收货地址
elseif($act=='address_update')
{
	
	require_once(dirname(__FILE__).'/include/checkmember.php');		
	$addid = $_GET['id'];
	if(!empty($_COOKIE['username']))
	{
		$username = AuthCode($_COOKIE['username']);
		$row = $dosql->GetOne("select * from `#@__member` where username = '".$username."'");
		$userid = $row['id'];
	}
	$sql="SELECT * FROM `#@__member_address` where userid=$userid order by is_first desc, id desc";
	$dosql->Execute($sql);
	while($row_addr=$dosql->GetArray())
	{
		$addr[]=array("rec_name"=>$row_addr['rec_name'],"id"=>$row_addr['id'],"cur_address"=>$row_addr['cur_address'],"road_address"=>$row_addr['road_address'],"zipcode"=>$row_addr['zipcode'],"telephone"=>$row_addr['telephone'],"phone"=>$row_addr['phone'],"is_first"=>$row_addr['is_first']);
	}

	$row_add_up = $dosql->GetOne("select * from `#@__member_address` where id = $addid");
	
	$smarty->assign("addid",$addid);//会员地址
	$smarty->assign("addr",$addr);//会员地址
	$smarty->assign("row_add_up",$row_add_up);//会员地址
	
	//获取地区id
	if ($row_add_up['address_id'] !='' )
	{
		$TemAddressID = explode(',' ,$row_add_up['address_id']);
	}
	else
	{
		$TemAddressID = explode(',' ,"0,");;
	}
	$TemAddressIDS = array();
	for($i = 0 ; $i < count($TemAddressID)-1 ; $i++)
	{
		$TemAddressIDS[$i] = $dosql -> getall("SELECT * FROM `#@__area` WHERE `parentid` = " . $TemAddressID[$i]);
	}

	$smarty->assign("TemAddressID"		, $TemAddressID);
	$smarty->assign("TemAddressIDS"		, $TemAddressIDS);
		
	$smarty->assign("lang",$_LANG['addr']);
	$smarty->assign("js",$_LANG['js']);
	$smarty->display('address_update.html');
}


//设置默认地址 
elseif($act=='is_first')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');
		
	$sql = "UPDATE `#@__member_address` SET is_first='1' WHERE id=$id and userid=".$_COOKIE['userid'];
	$sql0 = "UPDATE `#@__member_address` SET is_first='0' WHERE id!=$id  and userid=".$_COOKIE['userid'];
	if($dosql->execnonequery($sql) && $dosql->execnonequery($sql0))
	{
		header("Location:member.php?act=address");
	}

}
//修改地址信息
elseif($act=='addr_update')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');		
	
	$userid = $_COOKIE['userid'];
	$id = $_POST['id'];
	$rec_name = $_POST['rec_name'];
	$cur_address = $_POST['cur_address'];
	$road_address = $_POST['road_address'];
	$zipcode = $_POST['zipcode'];
	$telephone = $_POST['telephone'];
	$phone = $_POST['phone'];
	
	if($rec_name == '')
	{
		$smarty->assign("error",$_LANG['js']['rec_name']);
		$smarty->display('505.html');			
		//showmsg($_LANG['js']['rec_name'], '1');
		exit();
	}	
	if($cur_address == '')
	{
		$smarty->assign("error",$_LANG['js']['cur_address']);
		$smarty->display('505.html');			
		//showmsg($_LANG['js']['cur_address'], '1');
		exit();
	}	
	
	//获取地址id及名称
	$address_id = "0,".$AddrCountry.",".$AddrProvince.",".$AddrCity.",".$AddrArea;
	$road_address = '';
	$row = array();
	$row = $dosql->getone("select classname from `#@__area` where id = ".$AddrCountry."");
	if ($row != '')
	{
		$CountryName = $row['classname'];
	}
	else
	{
		$CountryName = $_LANG['addr']['Deleted'];
	}	
	$row1 = array();
	$row1 = $dosql->getone("select classname from `#@__area` where id = ".$AddrProvince."");
	if ($row1 != '')
	{
		$ProvinceName = $row1['classname'];
	}
	else
	{
		$ProvinceName = $_LANG['addr']['Deleted'];
	}
	$row2 = array();
	$row2 = $dosql->getone("select classname from `#@__area` where id = ".$AddrCity."");
	if ($row2 != '')
	{
		$CityName = $row2['classname'];
	}	
	else
	{
		$CityName = $_LANG['addr']['Deleted'];
	}	
	$row3 = array();
	$row3 = $dosql->getone("select classname from `#@__area` where id = ".$AddrArea."");
	if ($row3 != '')
	{
		$AreaName = $row3['classname'];
	}
	else
	{
		$AreaName = $_LANG['addr']['Deleted'];
	}			
	$road_address = $CountryName." ".$ProvinceName." ".$CityName." ".$AreaName;		
	
	$sql = "UPDATE `#@__member_address` SET rec_name='$rec_name', cur_address='$cur_address', road_address='$road_address', zipcode='$zipcode', telephone='$telephone', phone='$phone', address_id='$address_id' ,road_address='$road_address'  WHERE id=$id";
	$dosql->execnonequery($sql);
	header("Location:member.php?act=address_update&id=$id");
}
elseif($act=='address_delete')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$id = $_GET['id'];
	$sql = "DELETE FROM `#@__member_address` WHERE id=$id";
	$dosql->execnonequery($sql);
	header("Location:member.php?act=address");
}
elseif($act=='memeber_update')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	
}
/* 地区联动 */
elseif ($act == 'selectarea')
{

	$sql = "SELECT id,classname FROM `#@__area` WHERE 1=1 ";
	if(isset($parentid))
	{
		$sql .= " AND parentid=".$parentid;
	}
	else
	{
		$sql .= " AND parentid=0";
	}
	$sql .= " order by orderid asc,id asc";
	$restr = '';
	$dosql->Execute($sql);
	while ($row = $dosql->GetArray())
	{
		$str .= "<option value='".$row['id']."'>".$row['classname']."</option>\n";
	}
	echo $str;
}
//会员积分
elseif($act=="points")
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$userid = $_COOKIE['userid'];
	$points_member = $dosql->GetOne("select * from `#@__member` where id = $userid");//判断会员信息
	$uid = $points_member['id'];
	$smarty->assign("points_member",$points_member);
	
	$sql="SELECT i.*,m.username,m.email,m.mobile  FROM `#@__integral_notes` as i left join `#@__member` as m on i.uid=m.id where i.uid=".$userid;
	
	$points = $dopage->GetPage($sql,10);
	@$smarty->assign("points",$points);//会员订单
	$smarty->assign("page", $dopage->getlist());//分页信息	
	$smarty->display('member_points.html');	
}
//评论
elseif ($act == 'evaluation')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$userid = $_COOKIE['userid'];
	$gid=$_GET['gid'];
	$smarty->assign("userid",$userid);
	$smarty->assign("gid",$gid);
	$smarty->display('evaluation.html');	

	
}
//添加评论
elseif ($act == 'evaluation_add')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$uid=$_POST['userid'];
	$gid=$_POST['gid'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$posttime = time();
	$sql = "INSERT INTO `#@__usercomment` (`uid`,`gid`,`title`, `content`, `posttime`, `ip`) VALUES ('$userid','$gid','$title','$content', '$posttime', '".gethostbyname($_SERVER['REMOTE_ADDR'])."')";
	if($dosql->ExecNoneQuery($sql))
	{
		echo '<script>alert("添加成功！");window.parent.location.href="member.php?act=default";</script>';		
		exit();
	}
}


//修改会员信息
elseif ($act == 'info_update')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	
	if(!is_email($email))
	{
		$smarty->assign("error",$_LANG['js']['emailblank']);
		$smarty->display('505.html');			
		exit();		
	}
	if($mobile!='')
	{	
		if(!is_mobile($mobile))
		{
			$smarty->assign("error",$_LANG['js']['mobileformat']);
			$smarty->display('505.html');			
			exit();
		}
	}
	$sql = "UPDATE `#@__member` SET 
								`email`       = '$email',
								`sex`         = '$sex',
								`birthday`    = '$birthday',
								`MSN`         = '$MSN',
								`QQ`          = '$QQ',
								`telephone`   = '$telephone',
								`mobile`      = '$mobile',
								`picurl`      = '$picurl'
								 WHERE `id`   = ".$_COOKIE['userid']."";
	if($dosql->execnonequery($sql))
	{
		header("location:member.php?act=memberinfo");
		exit();
	}	
	
	
	
}
//密码修改
elseif ($act == 'pswedit')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	
	$smarty->assign('suc'    , '');
	$smarty->assign('js'    , $_LANG['psw']);//会员注册登录js验证
	$smarty->display('member_pswedit.html');	
}
elseif ($act == 'pswedit1')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$smarty->assign('suc'    , $_LANG['suc']);
	$smarty->assign('js'    , $_LANG['psw']);//会员注册登录js验证
	$smarty->display('member_pswedit.html');	
}
elseif ($act == 'subpswedit')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	if ($oldpsw == '')
	{
		$smarty->assign("error",$_LANG['psw']['oldpsw']);
		$smarty->display('505.html');			
		//showmsg($_LANG['psw']['oldpsw'], '1');
		exit();	
	}
	if ($newpsw == '')
	{
		$smarty->assign("error",$_LANG['psw']['newpsw']);
		$smarty->display('505.html');			
		//showmsg($_LANG['psw']['newpsw'], '1');
		exit();	
	}
	if ($renewpsw == '')
	{
		$smarty->assign("error",$_LANG['psw']['renewpsw']);
		$smarty->display('505.html');			
		//showmsg($_LANG['psw']['renewpsw'], '1');
		exit();	
	}
	if ($renewpsw != $newpsw)
	{
		$smarty->assign("error",$_LANG['psw']['password_no']);
		$smarty->display('505.html');			
		//showmsg($_LANG['psw']['password_no'], '1');
		exit();	
	}	
	
	//判断原密是否正确
	$row = $dosql->GetOne("select * from `#@__member` where password = '".md5(md5($oldpsw))."'");	
	if($row != '')
	{
		//修改新密码
		$newpsw1 = md5(md5($newpsw));
		$sql = "UPDATE `#@__member` SET `password` = '$newpsw1' WHERE `id` = ".$_COOKIE['userid']."";
		if($dosql->execnonequery($sql))
		{
			header("location:member.php?act=pswedit1");
			exit();
		}
	}
}elseif($act == 'add_collect')//添加收藏
{

	require_once(dirname(__FILE__).'/include/checkmember.php');
	$sql = "REPLACE INTO `#@__member_good` VALUES ('{$_COOKIE['userid']}','{$_GET['gid']}',now(),0)";
	$result = $dosql->GetOne("select count(1) as tot from `#@__member_good` where m_id = '{$_COOKIE['userid']}' and g_id='{$_GET['gid']}' AND type=0");//判断会员信息
	$STR=$uri?dencode64($uri):"index.php";
	if($result['tot']==0)
	{
		if($dosql->ExecNoneQuery($sql))
		{
			echo "<script>alert('收藏成功！');window.location.href='".$STR."'</script>";	
			exit();
		}else
		{
			echo "<script>alert('收藏失败！');window.location.href='".$STR."'</script>";	
		}
	}else
	{
			echo "<script>alert('该商品您已经收藏过了！');window.location.href='".$STR."'</script>";	
	}
}
elseif($act=='collect')//收藏列表
{
	require_once(dirname(__FILE__).'/include/checkmember.php');
	if(isset($_GET['del'])  and is_numeric($_GET['gid']))
	{
		$sql="DELETE FROM #@__member_good WHERE m_id='{$_COOKIE['userid']}' and g_id='{$_GET['gid']}' AND type=0";
		$dosql->execnonequery($sql);
	}
	$sql="SELECT #@__goods.id,#@__goods.title,#@__goods.picurl,
	#@__goods.classid,#@__goodscategory.classname AS class_name,
	case when min(`#@__goodsattr`.price)=max(`#@__goodsattr`.price) then max(`#@__goodsattr`.price)
	else Concat(min(`#@__goodsattr`.price),'-',max(`#@__goodsattr`.price)) 
	end as salesprice
	FROM `#@__member_good` RIGHT JOIN #@__goods ON #@__goods.id=`#@__member_good`.g_id  
	LEFT JOIN (#@__goodscategory,`#@__goodsattr`) ON  #@__goods.classid=#@__goodscategory.id
	AND `#@__goods`.id=`#@__goodsattr`.goodsid
	WHERE `#@__member_good`.m_id = '{$_COOKIE['userid']}' AND `#@__member_good`.type=0  group by #@__goods.id";
	

	$membercoll = $dopage->GetPage($sql,10);
	$smarty->assign("time", '');
	@$smarty->assign("membercoll",$membercoll);//会员订单
	$smarty->assign("page", $dopage->getlist());//分页信息
	$smarty->display('member_collect.html');
}
elseif($act=='find')//密码找回
{
	$type=1;//找回密码:输入用户名
	if(is_emailorname($_POST['username']))
	{
		 include_once(dirname(__FILE__).'/include/email.php');
		$username=$_POST['username'];
		$row = $dosql->GetOne("select email,id,username from `#@__member` where username = '".$username."'  or email='{$username}'");
		
		$code=date("Ymd");//日期码
		$find_time=time();
		$username=$row['username'];
		$username2 = base64_encode($username);		
		$sql="UPDATE  #@__member SET code='{$code}',find_time='{$find_time}' 
		WHERE username='{$username}'";
		$dosql->execnonequery($sql);
		$str="id={$row['id']}&code=$code&username=$username2&find_time=$find_time";
		$get=AuthCode($str,'ENCODE',14,60*60*24);
		$type=2;//找回密码:密码确认信息
		$smtpserver = "smtp.163.com";//SMTP服务器 
		$smtpserverport =25;//SMTP服务器端口 
		$smtpusermail = "leaves-zhang@163.com";//SMTP服务器的用户邮箱 
		$smtpemailto = $row['email'];//发送给谁 
		$smtpuser = "leaves-zhang";//SMTP服务器的用户帐号 
		$smtppass = "741015zd";//SMTP服务器的用户密码 
		$mailsubject = $username."您好,这是您在".$cfg_webname."的密码重置链接";//邮件主题 
		if(preg_match("/^\/\S+\//",$_SERVER['SCRIPT_NAME'],$arr))
		{
			$link="http://{$_SERVER['HTTP_HOST']}{$arr['0']}member.php?act=find&get=".$get;
		}else
		{
			$link="http://{$_SERVER['HTTP_HOST']}/member.php?act=find&get=".$get;
		}
		$mailbody = "亲爱的{$username}<br>请点击下面的链接重置您的密码:<br>
		".$link."
		<br>
		链接有效时间为1天
		<br><br><br>
		如果您的E-mail程序不支持链接点击，请将上面的地址拷贝至您的浏览器(例如IE)的地址栏进入{$cfg_webname}。
		<br><br><br>感谢对{$cfg_webname}的支持，再次希望您在{$cfg_webname}玩得愉快！
		<br><br><br>{$cfg_webname} http://{$_SERVER['HTTP_HOST']}";//邮件内容 
		$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件 
		########################################## 
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
		$smtp->debug = false;//是否显示发送的调试信息 
		$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
		$smarty->assign('email'    , preg_replace("/^([a-zA-Z0-9_\-\.\+]+)@/","*******@",$row['email']));
		$smarty->assign('name'    , $username);//addslashes
	}elseif($_GET['get'])
	{
		$get=preg_replace("/\s/","+",$_GET['get']);
		$str=AuthCode($get,'DECODE',14,60*60*24);
		//取出ID
		$id=get_uri("/^id=([1-9]\d*)&?/");
		//取出code
		$code=get_uri("/^code=([1-9]\d{7})&?/");
		//取出username
		$username=get_uri("/^username=([a-zA-Z0-9]{6,20})&?/");
		$username = base64_decode($username);
		//find_time
		$find_time=get_uri("/find_time=(\d+)&?/");
		if($id and $code and $username and $find_time and ($find_time+60*60*24)>=time())
		{
			$row = $dosql->GetOne("SELECT id FROM `#@__member` WHERE username = '".$username."' AND id='{$id}' AND code='{$code}' AND find_time='{$find_time}'");
			if(empty($row))
			{
				echo "<script>alert('该链接已经失效！');window.location.href='member.php?act=login'</script>";
				exit;
			}
			$type=3;
			if($password and $password==$repassword)
			{
				$password = md5(md5($password));
				$sql="UPDATE  #@__member SET password='{$password}'
				WHERE username='{$username}' and id='{$id}' and code='{$code}' and find_time='{$find_time}'";
				$result=$dosql->execnonequery($sql);
				if($result )
				{
					echo "<script>alert('密码重置成功！');window.location.href='member.php?act=login'</script>";
				}else
				{
					echo "<script>alert('密码重置失败！');window.location.href='member.php?act=login'</script>";
				}
			}
		}
	}
	$smarty->assign('type'    , $type);
	$smarty->assign('js'    , $_LANG['find']);
	$smarty->display('member_find.html');
}
elseif($act=='name_set')//验证用户是否存在
{
	//判断用户名
	$username = $_GET['username'];
	//$dosql->Execute("select * from pmw_member where email = '".$email."'");
	$row = array();
	$row = $dosql->GetOne("select id from `#@__member` where username = '".$username."'");
	//echo $username;
	if($row != '')
	{
		echo '1';//存在
	}else{
		echo '0';
	}
}
elseif($act=='email_jud')//验证邮箱是否可用
{
	//判断用户名
	$email = $_GET['email'];
	//$dosql->Execute("select * from pmw_member where email = '".$email."'");
	$row = array();
	$row = $dosql->GetOne("select id from `#@__member` where email = '".$email."'");
	//echo $username;
	if($row != '')
	{
		echo '0';//有重名
	}else{
		echo '1';
	}
}elseif($act=='name_email_set')//验证用户或者邮箱是否存在
{
	//判断用户或者邮箱
	$username = $_GET['username'];
	//$dosql->Execute("select * from pmw_member where email = '".$email."'");
	$row = array();
	$row = $dosql->GetOne("select id from `#@__member` where username = '".$username."' OR  email = '".$username."'");
	//echo $username;
	if($row != '')
	{
		echo '1';//存在
	}else{
		echo '0';
	}
}
elseif($act == 'point_add')//添加优惠券
{

	require_once(dirname(__FILE__).'/include/checkmember.php');
	$posttime = GetMkTime(date("Y-m-d H:i:s"));
	$id=(int)$id;
	$password=date("Ymd");
	$password.=$_COOKIE['userid'].$id;
	$totintegral = $dosql->getone('select `#@__member`.`integral`,`#@__member_level`.ispoint  from `#@__member` left join `#@__member_level` on `#@__member`.user_rank=`#@__member_level`.id  where `#@__member`.id='.$_COOKIE['userid']);//查询会员现有积分
	$STR=$uri?dencode64($uri):"index.php";
	if($totintegral['ispoint']==1){
	
		$point = $dosql->getone("select `starttime`,`endtime`,`meet_money`,`money`,`integral`,`title` from `#@__point` where starttime<".$posttime." and endtime>".$posttime." and  id=".$id);
		if($point){
			
			
			
			$sql = "INSERT INTO `#@__member_point` VALUES (null,'{$_COOKIE['userid']}','{$id}','{$posttime}','{$password}',0,'".$point['starttime']."','".$point['endtime']."','".$point['money']."','".$point['meet_money']."',0)";
			$result = $dosql->GetOne("select count(1) as tot from `#@__member_point` where m_id = '{$_COOKIE['userid']}' and p_id={$id}");//判断会员信息
		
			if($result['tot']==0 and $id>0)
			{ 
				if($totintegral['integral']>=$point['integral']){
					if($dosql->ExecNoneQuery($sql))
					{
						$dosql->ExecNoneQuery('update `#@__member` set integral=integral-'.$point['integral'].' where id='.$_COOKIE['userid']);
						if($point['integral']>0){
							integral_notes($point['integral'],'2','领取购物券:'.$point['title'],$_COOKIE['userid']);
						}
						echo "<script>alert('领取成功！');window.location.href='".$STR."'</script>";	
						exit();
					}else
					{
						echo "<script>alert('领取失败！');window.location.href='".$STR."'</script>";	
					}
				}else{
					echo "<script>alert('您的当前积分不足！');window.location.href='".$STR."'</script>";	
				}
			}else
			{
					echo "<script>alert('该购物券吧您已经领取过了！');window.location.href='".$STR."'</script>";	
			}
		}
	}else{
		echo "<script>alert('您当前的会员等级不可以领取购物券！');window.location.href='".$STR."'</script>";	
	}
}
elseif($act=='point_list')//购物券列表
{
	require_once(dirname(__FILE__).'/include/checkmember.php');
	if(isset($_GET['del'])  and is_numeric($_GET['gid']))
	{
		$sql="DELETE FROM #@__member_point WHERE m_id='{$_COOKIE['userid']}' and p_id='{$_GET['gid']}'";
		$dosql->execnonequery($sql);
	}
	$now=GetMkTime(date("Y-m-d"));
	$sql="SELECT `#@__member_point`.posttime,#@__member_point.password,#@__member_point.o_id,#@__point.title,
	#@__point.id,
	#@__point.endtime,
	#@__point.money,
	#@__point.meet_money
	FROM `#@__member_point` LEFT JOIN #@__point ON #@__point.id=`#@__member_point`.p_id  
	WHERE `#@__member_point`.m_id = '{$_COOKIE['userid']}' AND `#@__point`.checkinfo='true' AND starttime<='{$now}'  AND endtime>'{$now}'";
	$membercoll = $dopage->GetPage($sql,10);
	foreach($membercoll as $k=>$v)
	{
		$membercoll[$k]['day']=(int)(($v['endtime']-$now)/86400);
		if($v['o_id']>0)
		{
			$membercoll[$k]['o_id']="已使用";
		}else
		{
			$membercoll[$k]['o_id']="未使用";
		}
	}
	$smarty->assign("time", '');
	@$smarty->assign("membercoll",$membercoll);//会员订单
	$smarty->assign("page", $dopage->getlist());//分页信息
	$smarty->display('member_point_list.html');
}elseif ($act == "shopcartPoint_add")
{
	require_once(dirname(__FILE__).'/include/checkmember.php');
     @$val = trim($val);
	
    if($val)
	{
		
		$mid = $_COOKIE['userid']; 
		$now=GetMkTime(date("Y-m-d"));
		$intotal = AuthCode($intotal,'DECODE',14,60*60*24);//总额
		
		$sql="SELECT * from `#@__member_point` WHERE  `#@__member_point`.password='{$val}'  AND  starttimem<='{$now}' AND endtimem>'{$now}'  AND #@__member_point.o_id=0 ";
		$result=$dosql->GetOne($sql);
		if($result['id'] && $result['m_id']==$mid){  
                
				if($result['meet_moneym'] and $totmoney>=$result['meet_moneym'])
				{
					$endtotal = sprintf("%01.2f",$intotal)-$result['moneym'];
					if($endtotal<=0){
						$endtotal = 0;
					}
					$endtotal = sprintf("%01.2f", $endtotal);
					$codetotal = AuthCode($endtotal,'ENCODE',14,60*60*24);	
					echo "{\"con\":\"0\",\"conmoneym\":\"".$result['moneym']."\",\"endtotal\":\"".$endtotal."\",\"codetotal\":\"".$codetotal."\"}";//添加成功
				}else
				{
					echo "{\"con\":\"总额低于购物券条件金额或者不可用的券码\"}";
				}
		}else{
			
			    echo "{\"con\":\"不存在或者不可用的券码\"}";
		}
			
	
	}else
	{

			echo "{\"con\":\"-1\"}";
	}



	/*if($val)
	{
		$now=GetMkTime(date("Y-m-d"));
		$sql="SELECT `#@__member_point`.id FROM  `#@__member_point` LEFT JOIN #@__point  
		ON #@__point.id=`#@__member_point`.p_id  
		WHERE `#@__member_point`.m_id='{$_COOKIE['userid']}' and `#@__member_point`.password='{$val}'
		AND `#@__point`.checkinfo='true' AND starttime<='{$now}'  AND endtime>'{$now}'
		AND #@__member_point.o_id=0
		";
		$result=$dosql->GetOne($sql);
		if($result['id'])
		{
			$sql="UPDATE `#@__member_point` SET o_id='0' WHERE m_id='{$_COOKIE['userid']}' and  o_id='-1'";
			$dosql->Query($sql);
			$sql="UPDATE `#@__member_point` SET o_id='-1' WHERE id='{$result['id']}'";
			$dosql->Query($sql);
			echo "{\"con\":\"添加成功\"}";
		}else
		{
			echo "{\"con\":\"不存在或者不可用的券码\"}";
		}
	}else
	{

			echo "{\"con\":\"添加失败\"}";
	}
*/
	die;
}
elseif($act == 'points_convert')//积分兑换
{

	//判断会员是否登录，登录会员购物车信息直接写入数据库，未登录会员信息写入cookies
	$housenum=(int)$housenum;
	$housenum<$goods_num and $goods_num=$housenum;//超出库存自动将商品数量化为商品库存
	if (@$_COOKIE['username'] != '')
	{
		PointsConvertShopCartSql($goods_id,$goods_num,$goods_norm,$goods_price,$housenum);
	}
	else
	{
			echo "{\"login\":1}";die;
	}
}
//退款
elseif ($act == 'tuikuan')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$userid = $_COOKIE['userid'];
	$oid=$_GET['oid'];
	$smarty->assign("oid",$oid);
	$smarty->display('tuikuan.html');	

	
}
//添加退款
elseif ($act == 'tuikuan_add')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$oid=$_POST['oid'];
	$content=$_POST['content'];
	$sql = "UPDATE  `#@__goodsorder` SET checkinfo=5,buyremark='{$content}' WHERE id='{$oid}'";
	if($dosql->ExecNoneQuery($sql))
	{
		echo '<script>alert("申请成功！");window.parent.location.href="member.php?act=ordercontent&orderid='.$oid.'";</script>';		
		exit();
	}
}
//退货
elseif ($act == 'tuihuo')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$userid = $_COOKIE['userid'];
	$oid=$_GET['oid'];
	$smarty->assign("oid",$oid);
	$smarty->display('tuihuo.html');	

	
}
//添加退货
elseif ($act == 'tuihuo_add')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	$oid=$_POST['oid'];
	$content=$_POST['content'];
	$sql = "UPDATE  `#@__goodsorder` SET checkinfo=4,buyremark='{$content}' WHERE id='{$oid}'";
	if($dosql->ExecNoneQuery($sql))
	{
		echo '<script>alert("申请成功！");window.parent.location.href="member.php?act=ordercontent&orderid='.$oid.'";</script>';		
		exit();
	}
}
//添加退货
elseif ($act == 'yes_order')
{
	require_once(dirname(__FILE__).'/include/checkmember.php');	
	
	//如果改订单状为已收货，会员加积分，更新收货时间为当前时间
        $sqlstr = '';
		$sql = "select orderlistnum,userid from `#@__goodsorder` where id='{$oid}'";
		$row = $dosql->getone($sql);
		$gintegral = 0;
		$gprice = 0;
		
		$row2 = $dosql->getall("select * from `#@__goodsshopcart` where gorderlistnum = '".$row['orderlistnum']."' and Status = 'order'");
		foreach($row2 as $k=>$v)
		{
			$gintegral += $v["gintegral"]*$v["num"];
			$gprice += $v['price']*$v['num'];
		}
		
		$sqlstr .= " ,integral = '$gintegral', ReceiptTime = '".GetMkTime(date("Y-m-d H:i:s"))."'  ";
		
						
		//会员加积分
		$sql = "select integral,spendprice from `#@__member` where  `id`= ".$row['userid']." ";
		$row1 = $dosql->getone($sql);
		if ($row1['integral'] != '')
		{
			$integral = $row1['integral']+$gintegral;
		}
		else
		{
			$integral = $gintegral;
		}
		if ($row1['spendprice'] != '')
		{
			$spendprice = $row1['spendprice']+$gprice;
		}
		else
		{
			$spendprice = $gprice;
		}
			
			$sql = "UPDATE `#@__member` SET integral = ".$integral.", spendprice = ".$spendprice." where id = ".$row['userid'].""; 
			$dosql->execnonequery($sql);
		if($gintegral>0){
			
			integral_notes($gintegral,'1','购物返积分订单号：'.$row['orderlistnum'],$row['userid']);
			
		}
	     $rowlevel = $dosql->getone("select spendprice,user_rank  from `#@__member` where `id`= ".$row['userid']." ");	
			
		 update_level($row['userid'],$rowlevel['spendprice'],$rowlevel['user_rank']); 
	
	$sql = "UPDATE  `#@__goodsorder` SET checkinfo=3 ".$sqlstr." WHERE id='{$oid}'";
	

	if($dosql->ExecNoneQuery($sql))
	{
		echo '<script>alert("确认成功！");window.parent.location.href="member.php?act=ordercontent&orderid='.$oid.'";</script>';		
		exit();
	}
}
//首页信息
else
{
	header("Location:index.php");
}
?>