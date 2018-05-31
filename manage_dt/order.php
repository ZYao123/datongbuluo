<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/order.php');

/* 此页公共变量 */
$tbname	= '#@__goodsorder';
$act 	= isset($act) ? $act : 'list';

if(isset($phone_sign_s))
{
	 $_SESSION['phone_sign']=$phone_sign_s ? 1: 0;//1:移动管理 0:所有
}
$public_where=$_SESSION['phone_sign']==1 ? " AND `$tbname`.phone_sign='1' " : " ";

/* 订单列表 */
if($act == 'list')
{
	 
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_order_manage") : chk_privilege("order_manage");
    $where='';

	$url = 'excelorder.php?act=list';
	
	if(@$starttime!='' && @$endtime!=''){
		$starttime = strtotime($starttime.' 00:00:00');
		$endtime = strtotime($endtime.' 23:59:59');
		if($endtime>=$starttime){
		   $where.=" and `$tbname`.`posttime`>='{$starttime}' and  `$tbname`.`posttime`<='{$endtime}' ";	
		   $url.='&starttime='.$starttime.'&endtime='.$endtime;
		}else{
			echo '<script>
			   alert("请选择正确的时间区间");
			   window.history.back(-1); 
			</script>';	 
    	}
	   $url.='';	
	}else if(@$starttime!='' && @$endtime==''){
		$starttime = strtotime($starttime.' 00:00:00');
		$where.=" and `$tbname`.`posttime`>='{$starttime}' ";
		$url.='&starttime='.$starttime;
	}else if(@$starttime=='' && @$endtime!=''){
		$endtime = strtotime($endtime.' 23:59:59');
		$where.=" and `$tbname`.`posttime`<'{$endtime}' ";
		$url.='&endtime='.$endtime;
	
	}
	
	if(isset($checkinfo)){
		$url.='&checkinfo='.$checkinfo;
	}

	$info = array();
	//全部
	$sql1 = "SELECT count(*) FROM `$tbname` where delstate='' {$public_where} order by orderid desc ";
	$all = $dosql->GetOne($sql1);
	$countAll = $all['count(*)'];
	$smarty->assign("countAll", $countAll);
	
	//自动将未付款订单设置为无效订单 时间差3600为1小时，86400（3600*24）为1天
	$time_Poor_0 = $cfg_checkinfo * 86400;
	$time_Cur = GetMkTime(date("Y-m-d H:i:s"));
	$sql = "UPDATE `$tbname` SET `checkinfo` = '-1' where checkinfo = 0 and delstate='' {$public_where}  and  ".$time_Cur." - posttime >= ".$time_Poor_0." ";
	$dosql->execnonequery($sql);
	
	
	//待付款
	$sql2 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 0  {$public_where} order by orderid desc";
	$payfor = $dosql->GetOne($sql2);
	$countPayfor = $payfor['count(*)'];
	$smarty->assign("countPayfor", $countPayfor);
	
	//待发货
	$sql4 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 1 {$public_where}  order by orderid desc";
	$Ship = $dosql->GetOne($sql4);
	$countShip = $Ship['count(*)'];
	$smarty->assign("countShip", $countShip);	
	
	//待收货
	$sql3 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 2  {$public_where} order by orderid desc";
	$Receipt = $dosql->GetOne($sql3);
	$countReceipt = $Receipt['count(*)'];
	$smarty->assign("countReceipt", $countReceipt);		
	
	//已收货
	$sql4 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo = 3 {$public_where} order by orderid desc";
	$Receipted = $dosql->GetOne($sql4);
	$countReceipted = $Receipted['count(*)'];
	$smarty->assign("countReceipted", $countReceipted);		
	$smarty->assign("checkinfo3", $_LANG['checkinfo3']);	

	//退货
	$sql4 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo in (4,7) {$public_where} order by orderid desc";
	$Receipted = $dosql->GetOne($sql4);
	$countReturned = $Receipted['count(*)'];
	$smarty->assign("countReturned", $countReturned);		
	$smarty->assign("checkinfo4", $_LANG['checkinfo4']);
	
	//退款
	$sql5 = "SELECT count(*) FROM `$tbname` where delstate='' and checkinfo in (5,6) {$public_where} order by orderid desc";
	$Tuikuan = $dosql->GetOne($sql5);
	$countTuikuan = $Tuikuan['count(*)'];
	$smarty->assign("countTuikuan", $countTuikuan);		
	$smarty->assign("checkinfo5", $_LANG['checkinfo5']);

	//其它状态
	$sql5 = "SELECT count(*) FROM `$tbname` where delstate='' and  checkinfo not in(0,1,2,3,4,5,6,7) {$public_where} order by orderid desc";
	$Other = $dosql->GetOne($sql5);
	$countOther = $Other['count(*)'];
	$smarty->assign("countOther", $countOther);		
	$smarty->assign("checkinfoOther", $_LANG['checkinfoOther']);//没用上	

	//新订单
	$curtimeS = GetMkTime(date("Y-m-d 00:00:00",time()));
	$curtimeE = GetMkTime(date("Y-m-d 23:59:59",time()));
	$sql6 = "select count(id) AS tot from `$tbname` where posttime >= ".$curtimeS." and posttime<= ".$curtimeE." {$public_where}";
	$new_result = $dosql->GetOne($sql6);
	$smarty->assign("countnew", $new_result['tot']);
	//新任务	
	$sql7 = "select count(id) AS tot from `$tbname` where checkinfo in (1,2,3) {$public_where}";
	$task_result = $dosql->GetOne($sql7);
	$smarty->assign('counttask', $task_result['tot']);
	$searchstr = '';
	if(isset($sign) && $sign!='')
	{	
		$sign=="new" and $searchstr .= " AND posttime >= ".$curtimeS." and posttime<= ".$curtimeE."";
		$sign=="task" and $searchstr .= " AND checkinfo in (1,2,3)";
	}else
	{
		if (@$checkinfo != '')
		{
			if ($checkinfo == '-1')
			{
				$searchstr .= " and  checkinfo not in(0,1,2,3,4,5,6,7)";
			}elseif($checkinfo == '5')
			{
				$searchstr .= " and  checkinfo  in(5,6)";
			}elseif($checkinfo == '4')
			{
				$searchstr .= " and  checkinfo  in(4,7)";
			}
			else
			{
				$searchstr .= " and checkinfo=".$checkinfo;
			}
		}
	}
		if (@$orderlistnum != '' && $orderlistnum != $_LANG['searchnum'])
		{
			$searchstr .= " AND orderlistnum LIKE '%".$orderlistnum."%'";
			$url.='&orderlistnum='.$orderlistnum;
			$_LANG['searchnum']=$orderlistnum;
		}
		if (@$rec_name != '' && $rec_name != $_LANG['searchname'])
		{
			$searchstr .= " AND rec_name LIKE '%".$rec_name."%'";
			$_LANG['searchname']=$rec_name;
			$url.='&rec_name='.$rec_name;
		}
		isset($sign)?$checkinfo="":$sign="";
		$smarty->assign("checkinfo", $checkinfo);
		$smarty->assign("sign", $sign);
	$sql = "SELECT * FROM `$tbname` where delstate='' ".$searchstr.$where." {$public_where} order by id desc";
	
	
	$info = $dopage->getpage($sql);
	
	foreach($info as $k=>$v)
	{
		if ($v['checkinfo'] == 3)
		{
			$time_Poor_4 = $cfg_rgdeadline * 86400 ;
			//$time_Cur = GetMkTime(date("Y-m-d H:i:s"));
			if ($time_Cur - $v['ReceiptTime'] >= $time_Poor_4)
			{
				$returnid = 1;
			}
			else
			{
				$returnid = 0;
			}
		}
		else
		{
			$returnid = 0;
		}
		$info[$k]['returnid'] = $returnid;
	}
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("act" , $act);
	$smarty->assign("info", $info);
	$smarty->assign("url" , $url);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('order.html');
}


/* 修改订单页面 */
if ($act == 'edit')
{
	//验证权限
	
	 $_SESSION['phone_sign']==1 ? chk_privilege("phone_order_edit") : chk_privilege("order_edit");
	 
	if(!is_numeric($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	$info = array();
	$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $id {$public_where}");
	$smarty->assign("id"		, $id);

	$totalgoodsprice = 0;
	$totalnum = 0;
	$sql = "select `#@__goodsshopcart`.id, `#@__goodsshopcart`.gid,`#@__goodsshopcart`.gpicurl AS picurl,`#@__goodsshopcart`.gtitle as title,`#@__goodsshopcart`.price,`#@__goodsshopcart`.num,`#@__goodsshopcart`.norm,`#@__goodsshopcart`.consume_points ,`#@__goodsattr`.housenum
	from `#@__goodsshopcart`, 
	`#@__goodsattr` where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid
	AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm
	AND `#@__goodsshopcart`.gorderlistnum = '".$info['orderlistnum']."' and `#@__goodsshopcart`.Status = 'order'";
	
	
	$goodsarr= $dosql->getall($sql);
	
	$dosql->Execute($sql);
	$totalnum = $dosql->GetTotalRow();

	if ($totalnum == 0 ) {$id = '';}
	$cart_info = array();
	$k=0;
	while ($v = $dosql->GetArray())
	{
		
		if(!$v['consume_points'])
		{
			$v['total'] = sprintf("%01.2f",$v['price'] * $v['num']);//单个商品价格合计
			$v['salesprice'] = sprintf("%01.2f", $v['price']);

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
	
	if ($info['checkinfo'] == 3)
	{
		$time_Poor_0 = $cfg_rgdeadline * 86400 ;
		$time_Cur = GetMkTime(date("Y-m-d H:i:s"));
		if ($time_Cur - $info['ReceiptTime'] >= $time_Poor_0)
		{
			$returnid = 1;
		}
		else
		{
			$returnid = 0;
		}
	}
	else
	{
		$returnid = 0;
	}
	//退货信息
	$sql="select * from `#@__order_refund` where  `o_id`= '{$id}' ";
	$refun_row = $dosql->getone($sql);
	$smarty->assign('refun_row',$refun_row);
	//退货信息end
	$smarty->assign("returnid", $returnid);
	$postid_info = array();
	$postid_info = $dosql->getone("select id , TemPricing , postid from `#@__shipping` where checkinfo = 'true'");
	$postid = $postid_info['postid'] ?$postid_info['postid']:0;
	$postmode_info = array();
	$postmode_info = $dosql->getall("select * from `#@__postmode` where id in (0,".$postid.",0)");
	$payment_info = $dosql->getone("SELECT is_cod,is_online FROM `#@__payment` WHERE id='{$info['paymode']}'");
	
	$smarty->assign("postmode_info",  $postmode_info);
	$smarty->assign("cart_info", $cart_info);	
	$smarty->assign("payment_info", $payment_info);	
	$smarty->assign("totalnum", $totalnum);
	$smarty->assign("info"		, $info);
	$smarty->assign("js"        , $_LANG['js']);
	$smarty->assign("lang"      , $_LANG);
	
	/**显示所有配送公司**/
	/*$postmodeinfo = $dosql->getall("SELECT * FROM `#@__postmode` ORDER BY orderid ASC");
	$smarty->assign("postmodeinfo", $postmodeinfo);*/
	
	
	$smarty->display('order_edit.html');

}

/* 修改订单 */
if ($act == 'subedit')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_order_edit") : chk_privilege("order_edit");
	$sqlstr = '';
	if (@$postid != '' && @$postid != $_LANG['postid'])
	{
		$checkinfo = 2;
		$sqlstr .= "`Courierid` = '$Courierid',`postid` = '$postid',`sendtime`='".GetMkTime(date("Y-m-d H:i:s"))."',";
	}
	if ($checkinfo == '3')
	{
		//如果改订单状为已收货，会员加积分，更新收货时间为当前时间
		$sql = "select orderlistnum,userid from `$tbname` where  `id`= ".$id." {$public_where}";
		$row = $dosql->getone($sql);
		$gintegral = 0;
		$gprice = 0;
		
		$row1 = $dosql->getall("select * from `#@__goodsshopcart` where gorderlistnum = '".$row['orderlistnum']."' and Status = 'order'");
		foreach($row1 as $k=>$v)
		{
			$gintegral += $v["gintegral"]*$v["num"];
			$gprice += $v['price']*$v['num'];
		}
		
		$sqlstr .= "integral = '$gintegral', ReceiptTime = '".GetMkTime(date("Y-m-d H:i:s"))."' , ";
					
						
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
		
		
	}
	else if ($checkinfo == '4')
	{
		//如果改订单状为已退货，会员减积分
		$sql = "select orderlistnum,userid,checkinfo from `$tbname` where  `id`= ".$id." {$public_where}";
		$row = $dosql->getone($sql);
		$orderlistnum=$row['orderlistnum'];
		if($row['checkinfo']=='3'){
		
			$gintegral = 0;
			$row1 = $dosql->getall("select * from `#@__goodsshopcart` where gorderlistnum = '".$row['orderlistnum']."' and Status = 'order'");
			foreach($row1 as $k=>$v)
			{
				$gintegral += $v["gintegral"]*$v["num"];
				$gprice += $v['price']*$v['num'];
			}
			$sqlstr .= "integral = '0', ";
			//会员减积分
			
			$sql = "select integral,spendprice from `#@__member` where  `id`= ".$row['userid']." ";
			$row1 = $dosql->getone($sql);
			if ($row1['spendprice'] != '')
			{
				
				$integral   = $row1['integral']-$gintegral;
				$spendprice = $row1['spendprice']-$gprice;
				if ($integral<0)  $integral = 0 ;
				$sql = "UPDATE `#@__member` SET integral = ".$integral.", spendprice = ".$spendprice."  where id = ".$row['userid']."";
				$dosql->execnonequery($sql);
				if($gintegral>0){
					integral_notes($gintegral,'2','退货扣积分订单号：'.$row['orderlistnum'],$row['userid']);	
				}
				$rowlevel = $dosql->getone("select spendprice,user_rank  from `#@__member` where `id`= ".$row['userid']." ");	
		
				update_level2($row['userid'],$rowlevel['spendprice'],$rowlevel['user_rank']); 		
			}
					
		}
	}

	$sql = "UPDATE `$tbname` SET 
								`cur_address`    = '$cur_address',
								`telephone`  	 = '$telephone',
								`phone` 		 = '$phone',
								`zipcode`  	     = '$zipcode',
								`postmode` 		 = '$postmode',
								`orderamount`    = '$totalprice',
								`buyremark`      = '$buyremark',
								`Invoice`   	 = '$Invoice',
								`companyname`    = '$companyname',
								".$sqlstr."
								`checkinfo` 	 = '$checkinfo'
								 WHERE `id`	 	 = $id {$public_where}";
	if($dosql->execnonequery($sql))
	{
		$result=$dosql->getone("SELECT delhouse FROM `$tbname` WHERE `id`='{$id}' {$public_where}");
		if($cfg_delhouse==$checkinfo and $result['delhouse']==0)//减库存(待收货,已收货,退货)
		{
			$sql="SELECT `gid`,`num`,`norm` FROM `#@__goodsshopcart` 
			WHERE `gorderlistnum`='{$orderlistnum}' AND `Status`='order'";
			$row=$dosql->GETALL($sql);
			foreach($row as $v)
			{
				$sql="UPDATE `#@__goodsattr` SET `housenum`=housenum-{$v['num']}
					WHERE `goodsid`='{$v['gid']}' AND `attrname`='{$v['norm']}'" ;
				$upsql="UPDATE `$tbname` SET delhouse=1 WHERE `id`='{$id}'";
				if($dosql->execnonequery($sql))//成功减掉库存之后必须修改订单表是否检点库存字段防止多次减库存
				{
					$dosql->execnonequery($upsql);
				}
				if($v['norm']=="")//再更新商品表的库存字段
				{
					$sql="UPDATE `#@__goods` SET `housenum`=housenum-{$v['num']}
					WHERE `id`='{$v['gid']}'" ;
					$dosql->execnonequery($sql);
				}
			}
		}
		//添加日志
		insert_log($orderlistnum, 'edit', 'order');
		showsucceed($_LANG['php']['edit_succeed'], '','order.php?act=edit&id='.$id);
		exit();
	}
}

/* 设置无效订单 */
if ($act == 'Invalid')
{
	
	//验证权限
	 $_SESSION['phone_sign']==1 ? chk_privilege("phone_order_Invalid") : chk_privilege("order_Invalid");
	
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
		$r = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $v {$public_where}");
		$title = empty($r['orderlistnum']) ? '' : $r['orderlistnum'];
		if ($r['checkinfo'] == '0')//只允许将未付款订单设置为无效订单
		{
			//添加日志
			insert_log($title, 'Invalid', 'order');
			$deltime = GetMkTime(time());
			$dosql->execnonequery("UPDATE `$tbname` SET checkinfo = '-1' WHERE `id` = $v {$public_where}");
		}
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}




/* 删除订单 */
if ($act == 'subdel')
{
	
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_order_del") : chk_privilege("order_del");
	
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
		$r = $dosql->getone("SELECT * FROM `$tbname` WHERE `id` = $v {$public_where}");
		$title = empty($r['orderlistnum']) ? '' : $r['orderlistnum'];
		if ($r['checkinfo'] == '-1')//只允许删无效订单
		{
			//添加日志
			insert_log($title, 'del', 'order');
			$deltime = GetMkTime(time());
			$dosql->execnonequery("DELETE FROM `$tbname`,`#@__goodsshopcart`  USING `$tbname` JOIN `#@__goodsshopcart`
	ON `$tbname`.orderlistnum=`#@__goodsshopcart`.gorderlistnum  WHERE `$tbname`.`id` = $v {$public_where}");
		}
	}	
	$from = dencode64($from);
	header("location:$from");
	exit();
}


?>