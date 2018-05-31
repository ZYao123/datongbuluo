<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/shipping.php');

/* 此页公共变量 */
$tbname	  = '#@__shipping';
$act 	  = isset($act) ? $act : 'list';
$parentid = isset($parentid) ? $parentid : 0;

/* 模板列表 */
if($act == 'list')
{

	//验证权限
	chk_privilege("shipping_manage");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` WHERE 1=1 ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND TemName like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
	}
	$sql .= " order by orderid desc";
	$info = $dopage->getpage($sql);
	
	$smarty->assign("js"		, $_LANG['js']);
	$smarty->assign("lang"		, $_LANG);
	$smarty->assign("info"		, $info);
	$smarty->assign("keyword"	, $keyword);
	$smarty->assign("page"		, $dopage->getlist());
	$smarty->assign("parentid"	, $parentid);
	$smarty->assign("from"		, encode64(getcururl()));	//页面来源
	$smarty->display('shipping.html');
}

/* 添加模板界面 */
if ($act == 'add')
{	
	//验证权限
	chk_privilege("shipping_add");
	
	//地址信息
	$sql = "SELECT id,classname FROM `#@__area` where parentid = 0";
	$info = $dosql->getall($sql); 
	$smarty->assign("info"  , $info);
	
	//配送方式
	$sql = "SELECT id,classname FROM `#@__postmode`";
	$postinfo = $dosql->getall($sql); 
	$smarty->assign("postinfo"  , $postinfo);
		
	$smarty->assign("orderid"   , getorderid($tbname));
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('shipping_add.html');
}

/* 添加模板 */
if ($act == 'subadd')
{
	//验证权限
	chk_privilege("shipping_add");
	
	if($TemName=='')
	{
		showmsg($_LANG['js']['TemName'], '1');
		exit();
	}
	if($AddrCity=='')
	{
		showmsg($_LANG['js']['AddrCity'], '1');
		exit();
	}
	//获得sid
	$sidrow = array();
	$sql	= "show table status like '#@__shipping'";
	$sidrow = $dosql->getone($sql); 
	$sid = $sidrow['Auto_increment'];
	
	//获取地址名称
	$TemAddressID = "0,".$AddrCountry.",".$AddrProvince.",".$AddrCity.",".$AddrArea;
	$postid = implode(',',$pid);
	foreach ($pid as $k => $v)
	{
		//获得运送方式名称
		$sql		 = "SELECT classname FROM `#@__postmode` where id = ".$pid[$k]." order by id desc";
		$pidrow 	 = $dosql->getone($sql); 
		$pclassname  = $pidrow['classname'];	
		
		$first		 = "first".$v;
		$area		 = "area".$v;
		$fprice		 = "fprice".$v;
		$second		 = "second".$v;
		$sprice		 = "sprice".$v;
		
		$first1		 = $$first;
		$area1		 = $$area;
		$fprice1	 = $$fprice	;
		$second1	 = $$second;
		$sprice1	 = $$sprice;		
		
		
		foreach ($first1 as $k1 => $v1)
		{
			if( $area1[$k1] == '0' )
			{
				
				/* 数据验证 */

				if ($TemPricing == 0)
				{
					$Text = $_LANG['js']['ShipWeight'];
				}
				else if ($TemPricing == 1)
				{
					$Text = $_LANG['js']['ShipItem'];
				}
				else if ($TemPricing == 2)
				{
					$Text = $_LANG['js']['ShipVolume'];
				}
				
				if($first1[$k1]=='')
				{
					showmsg($_LANG['js']['TemName'].$Text.$_LANG['js']['ShipNone'], '1');
					exit();
				}
				if($fprice1[$k1]=='')
				{
					showmsg($_LANG['js']['ShipFirst'].$_LANG['js']['ShipPrice1'].$_LANG['js']['ShipNone'], '1');
					exit();
				}	
				if($second1[$k1]=='')
				{
					showmsg($_LANG['js']['ShipSecond'].$Text.$_LANG['js']['ShipNone'], '1');
					exit();
				}	
				
				if($sprice1[$k1]=='')
				{
					showmsg($_LANG['js']['ShipSecond'].$_LANG['js']['ShipPrice1'].$_LANG['js']['ShipNone'], '1');
					exit();
				}	
				if($area1[$k1]=='')
				{
					showmsg($_LANG['js']['Shiparea'].$_LANG['js']['ShipNone'], '1');
					exit();
				}											
				/* 数据验证 */
				
				$arows = $_LANG['ShipDefault'];
				
				$dosql->execnonequery("INSERT INTO `#@__shipinfo` ( `pid` , `sid` , `first` , `fprice` , `second` , `sprice` , `area` , `TemPricingId` ) VALUES ( '".$pid[$k]."' , '$sid' , '".$first1[$k1]."' , '".$fprice1[$k1]."' , '".$second1[$k1]."' , '".$sprice1[$k1]."' , '".$area1[$k1]."' , '$TemPricing' ) ");
			}
			elseif( $area1[$k1] != '' && $first1[$k1] != '' && $fprice1[$k1] != '' && $second1[$k1] != '' && $sprice1[$k1] != '' )
			{
				
				//获取配送地址
				$arow = array();
				$arows = '';
				$sql	= "SELECT classname FROM `#@__area` where id in (0".$area1[$k1]."0) order by id desc";
				$arow = $dosql->getall($sql); 
				if (count($arow) > 0)
				{
					//$arows = implode("&nbsp;",$arow);
					foreach ($arow as $key=>$value)
					{
						$arows .= $value['classname']."&nbsp;";
					}
				}
			
				$dosql->execnonequery("INSERT INTO `#@__shipinfo` ( `pid` , `sid` , `first` , `fprice` , `second` , `sprice` , `area` , `TemPricingId` ) VALUES ( '".$pid[$k]."' , '$sid' , '".$first1[$k1]."' , '".$fprice1[$k1]."' , '".$second1[$k1]."' , '".$sprice1[$k1]."' , '".$area1[$k1]."' , '$TemPricing'  ) ");
			}
			insert_log($TemName."&nbsp;".$pclassname."&nbsp;".$arows, 'add', 'shipping');

		}
	}
	if ($checkinfo == 'true')
	{
		$sql = "UPDATE `$tbname` SET `checkinfo` = 'false'";
		$dosql->execnonequery($sql);
	}
	
	$sql = "INSERT INTO `$tbname` (
									`TemName`,
									`TemFree`,
									`TemPricing`,
									`orderid`,
									`checkinfo`,
									`TemAddressID`,
									`postid`
								) VALUES (
									'$TemName',
									'$TemFree',
									'$TemPricing',
									'$orderid',
									'$checkinfo',
									'$TemAddressID',
									'$postid'
								)";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($TemName, 'add', 'shipping');
		showsucceed($_LANG['php']['add_succeed'], '','shipping.php?act=add&parentid='.$parentid);
		exit();
	}



}



/* 修改模板界面 */
if ($act == 'edit')
{
	//验证权限
	chk_privilege("shipping_edit");
	
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	//配送方式
	$sql = "SELECT id,classname FROM `#@__postmode`";
	$postinfo = $dosql->getall($sql); 
	$smarty->assign("postinfo"  , $postinfo);
		
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id");
	$postid = explode(",",$info['postid']);
	

	//获取id
	if ($info['TemAddressID'] !='' )
	{
		$TemAddressID = explode(',' ,$info['TemAddressID']);
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
	
	$smarty->assign("postid" 			, $postid);
	$smarty->assign("id" 				, $id);
	$smarty->assign("TemAddressID"		, $TemAddressID);
	$smarty->assign("TemAddressIDS"		, $TemAddressIDS);
	$smarty->assign("info"				, $info);
	$smarty->assign("js"     		    , $_LANG['js']);
	$smarty->assign("lang"   	   		, $_LANG);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('shipping_edit.html');

}

/* 修改模板 */
if ($act == 'subedit')
{
	//验证权限
	chk_privilege("shipping_edit");
	
	if($TemName=='')
	{
		showmsg($_LANG['js']['TemName'], '1');
		exit();
	}
	if($AddrCity=='')
	{
		showmsg($_LANG['js']['AddrCity'], '1');
		exit();
	}

	foreach ($pid as $key => $val)
	{
		
		//获得运送方式名称
		$sql		 = "SELECT classname FROM `#@__postmode` where id = ".$pid[$key]." order by id desc";
		$pidrow 	 = $dosql->getone($sql); 
		$pclassname  = $pidrow['classname'];	
		
		$first		 = "first".$val;
		$area		 = "area".$val;
		$fprice		 = "fprice".$val;
		$second		 = "second".$val;
		$sprice		 = "sprice".$val;
		
		@$first1	 = $$first;
		@$area1		 = $$area;
		@$fprice1	 = $$fprice	;
		@$second1	 = $$second;
		@$sprice1	 = $$sprice;
		if ( count($first1) > 0 )
		{
			foreach ($first1 as $k=>$v)
			{
			
				//insert into
				//获取配送地址
				$arow = array();
				$arows = '';
				$sql	= "SELECT classname FROM `#@__area` where id in (0".$area1[$k]."0) order by id desc";
				$arow = $dosql->getall($sql); 
				if (count($arow) > 0)
				{
					//$arows = implode("&nbsp;",$arow);
					foreach ($arow as $akey=>$aval)
					{
						$arows .= $aval['classname']."&nbsp;";
					}
				}
							
				$sql = "INSERT INTO `#@__shipinfo` ( `pid` , `sid` , `first` , `fprice` , `second` , `sprice` , `area` , `TemPricingId` ) VALUES ( '".$pid[$key]."' , '$id' , '".$first1[$k]."' , '".$fprice1[$k]."' , '".$second1[$k]."' , '".$sprice1[$k]."' , '".$area1[$k]."' , '$TemPricing'  ) ";
				$dosql->execnonequery($sql);
				insert_log($TemName."&nbsp;".$pclassname."&nbsp;".$arows, 'add', 'shipping');	
				
			}
			
		}
		
		
		$first_edit		 = "first_edit".$val;
		$area_edit		 = "area_edit".$val;
		$fprice_edit	 = "fprice_edit".$val;
		$second_edit	 = "second_edit".$val;
		$sprice_edit	 = "sprice_edit".$val;
		$id_edit		 = "id_edit".$val;
		
		@$first_edit1	 = $$first_edit;
		@$area_edit1		 = $$area_edit;
		@$fprice_edit1	 = $$fprice_edit;
		@$second_edit1	 = $$second_edit;
		@$sprice_edit1	 = $$sprice_edit;
		@$id_edit1		 = $$id_edit;
			
		if ( count($first_edit1) > 0 )
		{
			//update
			foreach ($id_edit1 as $k=>$v)
			{

				//获取配送地址
				$arow = array();
				$arows = '';
				$sql	= "SELECT classname FROM `#@__area` where id in (0".$area1[$k]."0) order by id desc";
				$arow = $dosql->getall($sql); 
				if (count($arow) > 0)
				{
					//$arows = implode("&nbsp;",$arow);
					foreach ($arow as $akey=>$aval)
					{
						$arows .= $aval['classname']."&nbsp;";
					}
				}

				$sql = "UPDATE `#@__shipinfo` SET 
											`pid`	 		= '".$pid[$key]."',
											`sid`			= '$id',
											`first` 		= '".$first_edit1[$k]."',
											`fprice`		= '".$fprice_edit1[$k]."',
											`second` 		= '".$second_edit1[$k]."',
											`sprice` 		= '".$sprice_edit1[$k]."',
											`area`	 		= '".$area_edit1[$k]."',
											`TemPricingId`	= '$TemPricing'
											 WHERE `id`		= ".$id_edit1[$k]."";
						
				$dosql->execnonequery($sql);
				insert_log($TemName."&nbsp;".$pclassname."&nbsp;".$arows, 'edit', 'shipping');				
			}
		}
	}
	
	//删除与当前计价方式不符的记录
	if ($dosql->execnonequery("DELETE FROM `#@__shipinfo` WHERE `TemPricingId` <> $TemPricing "))
	{
		insert_log($_LANG['TemPricing'], 'edit', 'shipping');
	}	
	
	//删除与当前运送方式不符的记录
	$pids = implode(',',$pid);
	if ($dosql->execnonequery("DELETE FROM `#@__shipinfo` WHERE not `pid` in( $pids )"))
	{
		insert_log($_LANG['shippingMethod'], 'edit', 'shipping');
	}	
	
	if ($checkinfo == 'true')
	{
		$sql = "UPDATE `$tbname` SET `checkinfo` = 'false'";
		$dosql->execnonequery($sql);
	}
		
	$TemAddressID = "0,".$AddrCountry.",".$AddrProvince.",".$AddrCity.",".$AddrArea;
	$sql = "UPDATE `$tbname` SET 
								`TemName`	  = '$TemName',
								`TemFree`	  = '$TemFree',
								`TemPricing`  = '$TemPricing',
								`orderid`	  = '$orderid',
								`checkinfo`   = '$checkinfo',
								`postid`  	  = '$pids',
								`TemAddressID`= '$TemAddressID'
								 WHERE `id` = $id";
	if($dosql->execnonequery($sql))
	{
		//添加日志
		insert_log($TemName, 'edit', 'shipping');
		showsucceed($_LANG['php']['add_succeed'], '','shipping.php?act=edit&id='.$id);
		exit();
	}
}


/* 删除模板 */
if ($act == 'subdel')
{
	//验证权限
	chk_privilege("shipping_del");
	
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
		$r = $dosql->getone("SELECT `TemName` FROM `$tbname` WHERE `id` = $v ");
		$classname = empty($r['TemName']) ? '' : $r['TemName'];
		
		//添加日志
		insert_log($classname, 'del', 'shipping');
		$dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $v ");
		//删除运费模板中相关的数据
		$dosql->execnonequery("DELETE FROM `#@__shipinfo` WHERE `sid` = $v ");		
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}
/* 删除运送方式*/
if ($act == 'ShipinfoDel')
{
	$sql = "SELECT sid,area FROM `#@__shipinfo` WHERE `id` = $id ";
	$r = $dosql->getone($sql);
	$sql1 = "SELECT TemName FROM `$tbname` WHERE `id` = '".$r['sid']."' ";
	$r1 = $dosql->getone($sql1);
	$TemName = $r1['TemName'];
	
	$arow = array();
	$arows = '';
	$sql	= "SELECT classname FROM `#@__area` where id in (0".$r['area']."0) order by id desc";
	$arow = $dosql->getall($sql); 
	if (count($arow) > 0)
	{
		//$arows = implode("&nbsp;",$arow);
		foreach ($arow as $akey=>$aval)
		{
			$arows .= $aval['classname']."&nbsp;";
		}
	}	
	
	if ($dosql->execnonequery("DELETE FROM `#@__shipinfo` WHERE `id` = $id "))
	{
		insert_log($TemName."&nbsp;".$arows, 'del', 'shipping');
		echo "1";
	}
}

/* 地区联动 */
if ($act == 'selectarea')
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

/* 显示配送方式 */
if ($act == 'selectship')
{
	//验证权限
	chk_privilege("shipping_manage");
	if (@$sid !='' && $pid != '')
	{
		$sqldefault = "select * from `#@__shipinfo` where sid = ".$sid." and pid = ".$pid." and TemPricingId = ".$TemPricing." and area = '0' ";
		$ShipDefault = $dosql->getone($sqldefault);
		$smarty->assign("ShipDefault" 	, $ShipDefault);
		$sql = "select * from `#@__shipinfo` where sid = ".$sid." and pid = ".$pid." and TemPricingId = ".$TemPricing." and area <> '0'";
		$ShipSpecial = $dosql->getall($sql);
		foreach ($ShipSpecial as $k=>$v)
		{
			$sql1 = "select classname from `#@__area` where id in (0".$v['area']."0)";
			$ShipSpecial[$k]['areaname'] = $dosql->getall($sql1);
		}
		$smarty->assign("ShipSpecial" 	, $ShipSpecial);
	}
	else
	{
		$smarty->assign("ShipDefault" 	, '');
		$smarty->assign("ShipSpecial" 	, '');
	}

	$smarty->assign("pid" 			, $pid);
	$smarty->assign("TemPricing" 	, $TemPricing);
	$smarty->assign("lang" 			, $_LANG);
	$smarty->display('ship.html');
}
/* 选择配送地区 */
if ($act == 'shiparea')
{
	chk_privilege("shipping_manage");
	$smarty->assign("lang" 			, $_LANG);
	
	$area = array();
	$area = $dosql->getall("select * from `#@__area` where parentid = 0 order by orderid asc");
	foreach($area as $key => $val)
	{
		$area[$key]['two'] = $dosql->getall("SELECT * FROM `#@__area` where parentid=".$val['id']." order by orderid desc",2);
		foreach($area[$key]['two'] as $key1 => $val1)
		{
			$area[$key]['two'][$key1]['three'] = $dosql->getall("SELECT * FROM `#@__area` where parentid=".$val1['id']." order by orderid desc",3);
		}		
	}
	$smarty->assign("area" 	, $area);
	$smarty->display('shiparea.html');
}

/* 显示被选区域 */
if ($act == 'getarea')
{
	$echo_str = '';
	$area = array();
	$area = $dosql->getall("select classname from `#@__area` where id in (0".$inputValue."0) order by orderid asc");
	if (count($area) > 0)
	{
		foreach($area as $k => $v)
		{
			$echo_str .= $v['classname']."&nbsp;";
		}
	}
	else
	{
		
	}
	echo $echo_str ;
	
}
?>