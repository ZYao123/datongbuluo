<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
require_once(dirname(__FILE__).'/include/checkmember.php');
include_once(LCSHOP_LANG . '/orderinfo.php');
include_once('bottom.php');
$smarty->assign("title", $_LANG['title']['orderinfo']);
$smarty->assign("js"   , $_LANG['js']);
if (@$act=='addr')
{
	
	$info1 = array();
	$userid = $_COOKIE['userid'];
	$is_first = 0;
	
	
	if (@$_POST["is_first"] == 1)
	{
		$sql0 = "UPDATE `#@__member_address` SET is_first='0' WHERE userid = " . $userid;
		$dosql->execnonequery($sql0);
		$is_first = 1;
	}
	if(@$act1=='add')
	{
		if(@$rec_name=='')
		{
			$smarty->assign("error",$_LANG['js']['rec_name']);
			$smarty->display('505.html');				
			//showmsg($_LANG['js']['rec_name'], '1');
			exit();
		}
		if(@$cur_address=='')
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
		$sql = "INSERT INTO `#@__member_address` (`rec_name`,`userid`,`cur_address`,`zipcode`,`telephone`,`phone`, `is_first` , `address_id` , `road_address`) VALUES ('$rec_name','$userid','$cur_address','$zipcode','$telephone','$phone', '$is_first', '$address_id', '$road_address')";
		$dosql->execnonequery($sql);
	}
	elseif(@$act1=='update1')
	{
		
		$sql = "select * from `#@__member_address` where id = ".$id." ";
		$info1 = $dosql->getone($sql);		
		//获取地区id
		if ($info1['address_id'] !='' )
		{
			$TemAddressID = explode(',' ,$info1['address_id']);
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
	}
	elseif(@$act1=='updatepost')
	{
		if(@$rec_name=='')
		{
			$smarty->assign("error",$_LANG['js']['rec_name']);
			$smarty->display('505.html');				
			//showmsg($_LANG['js']['rec_name'], '1');
			exit();
		}
		if(@$cur_address=='')
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
		
			
		$sql0 = "UPDATE `#@__member_address` SET `rec_name` = '$rec_name' , `cur_address` = '$cur_address' ,`zipcode` = '$zipcode' ,`telephone` = '$telephone' ,`phone` = '$phone' , address_id='$address_id' ,road_address='$road_address' , is_first='$is_first' WHERE id = " . $id;
		$dosql->execnonequery($sql0);
	}	
	elseif(@$act1=='update')
	{
		//获取地区id

		$TemAddressID = explode(',' ,"0,");;
		$TemAddressIDS = array();
		for($i = 0 ; $i < count($TemAddressID)-1 ; $i++)
		{
			$TemAddressIDS[$i] = $dosql -> getall("SELECT * FROM `#@__area` WHERE `parentid` = " . $TemAddressID[$i]);
		}
	
		$smarty->assign("TemAddressID"		, $TemAddressID);
		$smarty->assign("TemAddressIDS"		, $TemAddressIDS);			
	}
	elseif(@$act1=='isfirst')
	{
		$sql = "UPDATE `#@__member_address` SET is_first='1' WHERE id=$id";
		$sql0 = "UPDATE `#@__member_address` SET is_first='0' WHERE id!=$id";
		$dosql->execnonequery($sql);
		$dosql->execnonequery($sql0);
	}
	
	$info = array();
	$sql = "select id ,road_address, rec_name,cur_address,zipcode,phone,telephone,is_first from `#@__member_address` where userid = ".$userid." ";
	$dosql->Execute($sql);
	$divid = 0;
	$totalnum = $dosql->GetTotalRow();
	while ($v = $dosql->GetArray())
	{
		$info[] = $v;
		if ($v['is_first'] == '1')
		{
			$divid = $v['id'];
		}
	}
		
	$smarty->assign("lang"				, $_LANG);		
	$smarty->assign("totalnum", $totalnum);
	$smarty->assign("divid", $divid);
	$smarty->assign("act1", $act1);
	$smarty->assign("info", $info);
	$smarty->assign("info1", $info1);
	@$smarty->display('orderaddr.html');
	
}
/* 计算运费 */
elseif (@$act == 'Calculate')
{
	if (@$aid == '0' || !isset($aid)) 
	{
		echo "{\"con\":\"aideq0\"}";
		exit();		
	}	
	if ($pid == '' || $sid =='' || $TemPricing =='')
	{
		echo "{\"con\":\"pideq0\"}";
		exit();			
	}	
	if ($cartids == '') 
	{
		echo "{\"con\":\"cartideq0\"}";
		exit();
	}	
	
	/* 计算商总重量/件数/立方数 */
	$sum = 0;
	if ($TemPricing == 0)//按重量
	{
		$goods_info = $dosql->getall("select `#@__goodsshopcart`.num,`#@__goods`.weight from `#@__goods`,`#@__goodsshopcart` where `#@__goods`.id = `#@__goodsshopcart`.gid and `#@__goodsshopcart`.id in (0,".$cartids.",0) and `#@__goods`.payfreight='false'  AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and `#@__goodsshopcart`.Status = 'cart'");
		$sign=false;//默认所有商品都免运费
		!empty($goods_info) and $sign=true;//有不是免运费的
		foreach ($goods_info as $k => $v)
		{
			$sum += $v['num']*$v['weight'];
		}
	}
	elseif ($TemPricing == 1)//按件数
	{
		$goods_info = $dosql->getone("select sum(`#@__goodsshopcart`.num) as num from `#@__goods`,`#@__goodsshopcart` where `#@__goods`.id = `#@__goodsshopcart`.gid and `#@__goodsshopcart`.id in (0,".$cartids.",0) and `#@__goods`.payfreight='false'  AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and `#@__goodsshopcart`.Status = 'cart'");
		$sign=false;//默认所有商品都免运费
		$sum = $goods_info['num'];
		$sum>0 and $sign=true;//有不是免运费的
	}
	else//按立方
	{
		$goods_info = $dosql->getall("select `#@__goodsshopcart`.num,`#@__goods`.weight from `#@__goods`,`#@__goodsshopcart` where `#@__goods`.id = `#@__goodsshopcart`.gid and `#@__goodsshopcart`.id in (0,".$cartids.",0) and `#@__goods`.payfreight='false'  AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and `#@__goodsshopcart`.Status = 'cart'");
		
		$sign=false;//默认所有商品都免运费
		!empty($goods_info) and $sign=true;//有不是免运费的
		foreach ($goods_info as $k => $v)
		{
			$sum += $v['num']*$v['weight'];
		}		
	}
	/* 获取会员地址信息 */
	$addr_info = $dosql->getone("select address_id from `#@__member_address` where id = " . $aid);
	if ($addr_info != '')
	{
		$addr_id = $addr_info['address_id'];
		if ($addr_id != '')
		{
			$addrid = explode(",",$addr_id);
			/* 计算运费 */
			for($i=0; $i < count($addrid); $i++)
			{
				$sql = "select * from `#@__shipinfo` where TemPricingId = ".$TemPricing." and pid = ".$pid." and sid = ".$sid." and area like '%,".$addrid[$i].",%' order by fprice asc , sprice asc";
				$ship = $dosql->getone($sql);
				if($ship != '')
				{
					break;
				}
			}
			
			if ($ship == '')//为空时选择默认运费
			{
				$ship = $dosql->getone("select * from `#@__shipinfo` where TemPricingId = ".$TemPricing." and pid = ".$pid." and sid = ".$sid." and area = '0'");
				if ($ship == '')
				{
					echo "{\"con\":\"pideq0\"}";
					exit();						
				}
			}
			if($sign)
			{
				$first = $ship['first'];
				$fprice = $ship['fprice'];
				$second = $ship['second'];
				$sprice = $ship['sprice'];
				$yprice = $fprice; //运费初值为首费
				if ($sum > $first)  
				{
					$sum = $sum - $first;// 将首重减掉计算续费
					$yprice += ($sum/$second)*$sprice;
				}
				
				$deyprice = sprintf("%.2f", $yprice);//加密运费
				$intotal = sprintf("%.2f",AuthCode($intotal,'DECODE',14,60*60*24));//解密总额
				$deintotal = sprintf("%.2f", ($intotal+$deyprice));
				echo "{\"con\":\"".$yprice."\",\"decon\":\"".AuthCode($deyprice,'ENCODE',14,60*60*24)."\",\"deintotal\":\"". $deintotal."\"}";
			}else
			{
				//echo 0;
				$intotal = AuthCode($intotal,'DECODE',14,60*60*24);//解密总额
				$decon = AuthCode('0','ENCODE',14,60*60*24);//加密运费
				echo "{\"con\":\"0\",\"decon\":\"". $decon."\",\"deintotal\":\"". $intotal."\"}";
			}


		}
		else
		{
			echo "{\"con\":\"aideq0\"}";
			exit();				
		}
	}
	else
	{
		echo "{\"con\":\"aideq0\"}";
		exit();	
	}
}
else{
	

	if (!isset($id))
	{
		$smarty->assign("error",$_LANG['error']['shopcartnone']);
		$smarty->display('505.html');
		exit();
	}
	if (is_array($id))
	{
		$id = implode("," , $id);
	}
	  $totalgoodsprice = 0;
	  $totalnum = 0;
	  $sql = "select `#@__goodsshopcart`.id, `#@__goodsshopcart`.gid,`#@__goodsshopcart`.gpicurl as picurl,`#@__goodsshopcart`.gtitle as title,`#@__goodsattr`.price as salesprice,`#@__goodsshopcart`.num ,
	  `#@__goodsshopcart`.num,`#@__goodsattr`.housenum,`#@__goodsshopcart`.norm,`#@__goodsshopcart`.consume_points 
	  from`#@__goodsshopcart`,`#@__goodsattr` 
	  where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid
	  AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm
	   AND `#@__goodsshopcart`.id in ( 0,".$id.",0 )  AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and `#@__goodsshopcart`.Status = 'cart'";
	   
	  $dosql->Execute($sql);
	  $totalnum = $dosql->GetTotalRow();
	  if ($totalnum == 0 ) {$id = '';}
	  $cart_info = array();
	  $k=0;
	  while ($v = $dosql->GetArray())
	  {
		  if($v['housenum']<$v['num'])
		  {
			$sql="UPDATE `#@__goodsshopcart` SET num='{$v['housenum']}' WHERE id='{$v['id']}'";
			$dosql->ExecNoneQuery($sql);
			$v['num']=$v['housenum'];
		  }
		
		  if(!$v['consume_points'])
			{
			$v['total'] = sprintf("%01.2f",$v['salesprice'] * $v['num']);//单个商品价格合计
			$v['salesprice'] = sprintf("%01.2f", $v['salesprice']);

			$totalgoodsprice += $v['total'];//所有商品价格合计
			}else
			{
				$v['total'] = 0;//单个商品价格合计
				$v['salesprice'] = 0;
			}
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
	  
	  $postid_info = array();
	  $postid_info = $dosql->getone("select id , TemPricing , postid from `#@__shipping` where checkinfo = 'true'");
	  
	  $postid = $postid_info['postid'] ?$postid_info['postid']:0;
	  
	  $postmode_info = array();
	  $postmode_info = $dosql->getall("select * from `#@__postmode` where id in (0,".$postid.",0)");
	  
	  $smarty->assign("sid", 			$postid_info['id']);
	  $smarty->assign("TemPricing", 	$postid_info['TemPricing']);
	  $smarty->assign("postmode_info",  $postmode_info);
	  $smarty->assign("cart_info", 		$cart_info);
	 
	  $totalprice = $totalgoodsprice + Preferential();
	  
	  $smarty->assign("totalprice", 	sprintf("%01.2f", $totalprice));
	  $smarty->assign("hidetotalprice", AuthCode(sprintf("%01.2f", $totalprice),'ENCODE',14,60*60*24));
	  $smarty->assign("totalgoodsprice",AuthCode(sprintf("%01.2f", $totalgoodsprice),'ENCODE',14,60*60*24));
	  $smarty->assign("totalnum", 		$totalnum);
	  $smarty->assign("cartids", 		$id);
	  $smarty->display('orderinfo.html');

}

?>
