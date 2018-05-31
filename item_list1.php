<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/item_list.php');
include_once('bottom.php');
$cid = empty($cid) ? 0 : intval($cid);

$sql = "select * from `#@__goodscategory` WHERE checkinfo = true ";
if($cid>0)
{
	$sql .= " AND `id` = $cid ";
}
else
{
	$sql .= " AND `parentid` = 0 ";
}
$sql .= "order by orderid desc";
$r = $dosql->getone($sql);
if($r)
{
	/* 没有获取到cid 赋值顶级类的id*/
	if($cid ==0) $cid = $r['id'];
	
	$parentstr = explode(",", $r['parentstr']);
	$count = count($parentstr)-3;
	if($count>0)
	{
		$parentid = $parentstr[$count];
	}
	else
	{
		$parentid = 0;
	}
	
	/* 产品分类 */
	$class_info = array();
	$class_info = $dosql->getall("select id, classname from `#@__goodscategory` WHERE `parentid` = $parentid order by orderid asc");
	foreach($class_info as $key => $val)
	{
		$class_info[$key]['son'] = $dosql->getall("select id, classname from `#@__goodscategory` WHERE `parentid` = ".$val['id']." order by orderid asc",$val['id']);
	}
	
	/* 获取所点击id的子类 */
	$class_son = array();
	$class_son = $dosql->getall("select id, classname from `#@__goodscategory` WHERE `parentid` = $cid order by orderid asc");
	
	/* 品牌筛选 */
	$brand_info = array();
	$nocheckstyle = true;
	if($r['attrstr'])
	{
		$brand_list = $dosql->getone('SELECT brand FROM `#@__goodstype` where `id`='.$r['attrstr'].' AND checkinfo=true');
		if($brand_list)
		{
			$brand_list = string2array($brand_list['brand']);
			foreach($brand_list as $k => $v)
			{

				$brand_info[$k] = $dosql->getone('SELECT id,classname FROM `#@__goodsbrand` where `id`='.$v.' AND checkinfo=true');
				if(isset($brand) && $brand === $v)
				{
					$stylename = 'on';
					$nocheckstyle = false;
				}
				else
				{
					$stylename = '';
				}
				$brand_info[$k]['url'] 		 = seturlquery('brand',$brand_info[$k]['id']);
				$brand_info[$k]['stylename'] = $stylename;
			}
		}
		

		$brand_info['p'] = $brand_info;
		/* 不限链接配置 */	
		$nocheck_url = seturlquery('brand','');
		$brand_info['b']['nocheck']	    = $_LANG['nocheck'];
		$brand_info['b']['nocheckurl']  = $nocheck_url;
		$brand_info['b']['nocheckstyle']= $nocheckstyle ? 'on' : '';
	}
	/* 价格筛选 */
	$section_info = array();
	if($r['section']>0)
	{
		//最大价格
		$max=$dosql->Getone("SELECT max(price) as maxprice FROM `#@__goodsattr` INNER JOIN `#@__goods` ON `#@__goodsattr`.`goodsid` = `#@__goods`.`id` WHERE (`#@__goods`.`classid` = $cid or `#@__goods`.`parentstr` like '%,$cid,%') AND `#@__goods`.checkinfo=true AND `#@__goods`.delstate=''");
		if($max)
		{
			$maxprice = $max['maxprice'];
		}
		else
		{
			$maxprice = 0;
		}
		//最小价格
		$min=$dosql->Getone("SELECT min(price) as minprice FROM `#@__goodsattr` INNER JOIN `#@__goods` ON `#@__goodsattr`.`goodsid` = `#@__goods`.`id` WHERE (`#@__goods`.`classid` = $cid or `#@__goods`.`parentstr` like '%,$cid,%') AND `#@__goods`.checkinfo=true AND `#@__goods`.delstate=''");
		if($min)
		{
			$minprice = $min['minprice'];
		}
		else
		{
			$minprice = 0;
		}
		
		if($maxprice>0)
		{
			$num = ceil($maxprice/$r['section']);
			$nocheckstyle = true;
			for($i=1; $i<=$r['section'];$i++)
			{
				$str   = ($i-1)*$num . "-" . $i*$num;
				$prices = ($i-1)*$num . "." . $i*$num;
				if(isset($price) && $price === $prices)
				{
					$stylename = 'on';
					$nocheckstyle = false;
				}
				else
				{
					$stylename = '';
				}
					
				$section_info['p'][] = array('name' => $str, 'url' => seturlquery('price',$prices), 'stylename' => $stylename);
			}
			/* 不限链接配置 */	
			$nocheck_url = seturlquery('price','');
			$section_info['b']['nocheck']	  = $_LANG['nocheck'];
			$section_info['b']['nocheckurl']  = $nocheck_url;
			$section_info['b']['nocheckstyle']= $nocheckstyle ? 'on' : '';
		}
	}
	
	
	/* 属性筛选 */
	$attr_info = array();
	$attr_info = $dosql->getall('SELECT * FROM `#@__goodstypeattr` where `typeid`='.$r['attrstr'].' AND checkinfo=true AND showtype <> 0');
	if($attr_info)
	{
		/* attribute参数设置 */
		if(isset($attribute) && !empty($attribute))
		{
			$attr_arr = explode(".", $attribute);
		}
		else
		{
			$attr_arr = array();
			foreach($attr_info as $kk => $vv)
			{
				$attr_arr[$kk] = 0;
			}
		}

		foreach($attr_info as $k => $v)
		{
			/* 筛选选项配置 */
			$nocheckstyle = true;
			$checklist = string2array($v['attrvalue']);
			
			foreach($checklist as $ks => $vs)
			{
				$attr_str = $attr_arr;
				if(dencode64($attr_str[$k])===trim($vs))
				{
					$stylename = 'on';
					$nocheckstyle = false;
				}
				else
				{
					$stylename = '';
				}
			   	$attr_str[$k]=encode64(trim($vs));
				$url = seturlquery('attribute',implode(".",$attr_str));
				$checklist[$ks]=array('name' => trim($vs),'url' => $url, 'stylename' => $stylename);
			}
			/* 不限链接配置 */
			$nocheck_str = $attr_arr;
			$nocheck_str[$k] = 0;
			$nocheck_url = seturlquery('attribute',implode(".",$nocheck_str));
			$attr_info[$k]['nocheck']	= $_LANG['nocheck'];
			$attr_info[$k]['nocheckurl']= $nocheck_url;
			$attr_info[$k]['nocheckstyle']= $nocheckstyle ? 'on' : '';
			/* 筛选选项 */
			$attr_info[$k]['attrvalue'] = $checklist;
		}		
	}
	
	/* 最终购买 */
	$final_info = array();
	$final_info = $dosql->getall("SELECT * FROM `#@__goods` WHERE (`classid` = $cid or `parentstr` like '%,$cid,%') AND `checkinfo`=true AND `delstate`='' order by orderid desc LIMIT 0, 6");
	
	/* 产品列表 */
	$cid = empty($cid) ? 0 : intval($cid);

	$sql = "select  (SELECT COUNT(id) FROM `#@__usercomment` WHERE `gid` = `#@__goods`.`id`) AS counter ,(SELECT SUM(num)  FROM `#@__goodsshopcart` WHERE `gid` = `#@__goods`.`id` and `#@__goodsshopcart`.norm = `#@__goodsattr`.attrname and `#@__goodsshopcart`.Status='order') AS sumer ,`#@__goods`.`id`,`#@__goods`.`classid`,`#@__goods`.`title`,`#@__goods`.`picurl`,`#@__goodsattr`.`price` 
		from `#@__goodsattr`,`#@__goods` LEFT JOIN `#@__goodsattribute`  
		ON    `#@__goodsattribute`.g_id=`#@__goods`.id
		WHERE `#@__goods`.`id`=`#@__goodsattr`.`goodsid` AND `#@__goodsattr`.housenum>0 AND `#@__goods`.checkinfo=true AND `#@__goods`.delstate=''  ";
	if(isset($keywords) && !empty($keywords))
	{
		$sql .= " AND `#@__goods`.`title` like '%".$keywords."%'";
	}
	elseif($cid !=0)
	{
		$sql .= " AND `#@__goods`.`id`=`#@__goodsattr`.`goodsid` AND (`#@__goods`.`classid` = $cid or `#@__goods`.`parentstr` like '%,$cid,%') ";
	}
	$aid!=0 and $sql .=" AND `#@__goodsattribute`.a_id={$aid} ";
	isset($point) and $sql.=" AND `#@__goods`.`need_integral`>0";
	if(isset($brand) && $brand>0)
	{
		$sql .= " AND (`#@__goods`.`brandid` = $brand or `#@__goods`.`brandpid` = $brand or `#@__goods`.`brandpstr` like '%,$brand,%')";
	}
	if(isset($price))
	{
		$price_arr = explode(".", $price);
		if(count($price_arr)==2)
		{
			$sql .= " AND `#@__goodsattr`.`price` > ".$price_arr['0']." AND `#@__goodsattr`.`price` <= ".$price_arr['1'];
		}
	}
	
	if(isset($attribute))
	{
		$attribute_arr = explode(".", $attribute);
		if(count($attribute_arr)>0)
		{
			foreach($attribute_arr as $v)
			{
				if($v != '0') $sql .= " AND `#@__goods`.`flag` like '%".dencode64(trim($v))."%' ";
			}
		}
	}

		$sql.=" GROUP BY `#@__goods`.id ";
	

	//排序
	if (@$ordername == '')
	{
		$sql .= " order by orderid desc";
	}
	elseif ($ordername == 'price')
	{
		$sql .= " order by  cast(`#@__goodsattr`.price as signed) ".$ordersort.", orderid desc";
	}
	else
	{
		$sql .= " order by  ".$ordername." ".$ordersort.", orderid desc";
	}
	
	
	
	
	$info=$dopage->GetPage($sql);
	
	foreach($info as $key => $val)
	{
		//属性
		$attrname = '';
		foreach(explode(",", $info[$key]['attrname']) as $v)
		{
			if($v != ' ' && $v != '' && !empty($v))
			{
				$r = $dosql->getone("SELECT attrname FROM `#@__goodsattr_value` WHERE `goodsid`=".$val['id']." AND `attrid`=$v");
				
				if(is_array($r)) $attrname .= " ".$r['attrname'];
			}
		}
		$info[$key]['attrname'] = $attrname;
	}
	


	//排序
	$class1 = 'links_color';
	$class2 = '';
	$class3 = '';
	$class4 = '';
	$class5 = '';
	if (@$ordername != '' && count($info) != 0)
	{

		if ($ordername == 'id')
		{
		  $class1 = '';
		  $class2 = '';
		  $class3 = '';
		  $class4 = 'links_color';
		  $class5 = '';			
		}
		elseif ($ordername == 'price')
		{
		  $class1 = '';
		  $class2 = '';
		  $class3 = '';
		  $class4 = '';
		  $class5 = 'links_color';			
		}
		elseif ($ordername == 'counter')
		{
		  $class1 = '';
		  $class2 = '';
		  $class3 = 'links_color';
		  $class4 = '';
		  $class5 = '';			
		}elseif ($ordername == 'sumer')
		{
		  $class1 = '';
		  $class2 = 'links_color';
		  $class3 = '';
		  $class4 = '';
		  $class5 = '';			
		}				
		
	}
	
	//获取除page参数外的其他参数
	$query_str1 = explode('&',$_SERVER["QUERY_STRING"]);
	//print_r($query_str1);

	if($query_str1[0] != '')
	{
		$query_str1s = '';

		foreach($query_str1 as $k)
		{
			$query_str1_arr = explode('=', $k);

			if(strstr($query_str1_arr[0],'page') == '' && strstr($query_str1_arr[0],'ordername') == '' && strstr($query_str1_arr[0],'ordersort') == '' )
			{
				$query_str1_arr[0] = isset($query_str1_arr[0]) ? $query_str1_arr[0] : '';
				$query_str1_arr[1] = isset($query_str1_arr[1]) ? $query_str1_arr[1] : '';
				$query_str1s .= $query_str1_arr[0].'='.$query_str1_arr[1].'&';		
			}
		}

		$orderurl = '?'.$query_str1s;
	}
	else
	{
		$orderurl = '?';
	}

	$smarty->assign("orderurl"		, $orderurl);
	
	
	//print_r($info);
	$smarty->assign("left_ads"      , get_ads(8));
	$smarty->assign("info"			, $info);
	$smarty->assign("page"			, $dopage->getlist());
	$smarty->assign("final_info"	, $final_info);
	$smarty->assign("GetPosStr"		, GetPosStr('goodscategory', 'item_list', $cid));
	$smarty->assign("class_info"	, $class_info);
	$smarty->assign("class_son"		, $class_son);
	$smarty->assign("brand_info"	, $brand_info);
	$smarty->assign("section_info"	, $section_info);
	$smarty->assign("attr_info"		, $attr_info);
	$smarty->assign("class1"		, $class1);
	$smarty->assign("class2"		, $class2);
	$smarty->assign("class3"		, $class3);
	$smarty->assign("class4"		, $class4);
	$smarty->assign("class5"		, $class5);
	
	
	
	$smarty->display('item_list.html');
}
else
{
	$smarty->display('404.html');
}

?>