<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/shopcart.php');
include_once('bottom.php');
//include_once('bottom.php');
$cid = empty($cid) ? 0 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);
$act  = isset($act)  ? $act : '';
if($act == 'selectprice')
{
	$sql = "select `#@__goodsattr`.`price`,`#@__goodsattr`.`housenum` from `#@__goods`,`#@__goodsattr` WHERE `#@__goods`.checkinfo=true AND `#@__goods`.delstate=''  and `#@__goods`.`id`=`#@__goodsattr`.`goodsid` and `#@__goodsattr`.`attrname`='$norm' AND `#@__goodsattr`.`goodsid`='{$id}'";
	$r = $dosql->getone($sql);
	if(!empty($r))
	{
		$price = AuthCode($r['price'],'ENCODE',14,60*60*24);
		echo "{\"price\":\"".$r['price']."\",\"housenum\":\"".$r['housenum']."\",\"salesprice\":\"".$price."\"}";
	}
	else
	{
		echo 0;
	}
	exit;
}
else
{
	$info = array();
	$sql="SELECT `#@__goods`.norm,`#@__goods`.integral,`#@__goods`.picarr,`#@__goods`.classid,`#@__goods`.flag,
		`#@__goods`.id,`#@__goods`.retitle,`#@__goods`.content,`#@__goods`.ser_conent,
		`#@__goods`.picurl,`#@__goods`.title,`#@__goods`.need_integral,
		min(`#@__goodsattr`.price) as min_price,
		max(`#@__goodsattr`.price) as max_price,
		sum(`#@__goodsattr`.housenum) as tot_housenum
		FROM `#@__goods` 
		left join `#@__goodsattr` on `#@__goods`.id=`#@__goodsattr`.goodsid
		WHERE `#@__goods`.`id` = $id AND `#@__goods`.checkinfo='true' 
		and `#@__goods`.delstate = '' group by `#@__goods`.id
		";
	$info = $dosql->getone($sql);	
	if($info)
	{
		$norm_arr = string2array($info['norm']);
		foreach($norm_arr as $key => $val)
		{			
			foreach($val as $k => $v)
			{	
				unset($norm_arr[$key]['normid']);
				if($k == 'selected')
				{
					foreach($v as $ks => $vs)
					{
						if(is_numeric($ks))
						{
							
							$r = $dosql->getone("SELECT color,pic FROM `#@__goodsattr_value` WHERE `goodsid`= $id and `attrid` = $ks ORDER BY id DESC");	
							unset($norm_arr[$key]['selected'][$ks]);
							if($r)
							{
								$norm_arr[$key]['selected'][$ks]['attrname']   =  $vs;
								$norm_arr[$key]['selected'][$ks]['color'] 	  =  $r['color'];
								$norm_arr[$key]['selected'][$ks]['pic']        =  $r['pic'];
							}
						}
					}
				}
			}
			
		}
		$info['norm']    = $norm_arr;
		$info['picarr']  = string2array($info['picarr']);
		$info['classid'] = get_field_value('classname', 'goodscategory', $info['classid']);
		$flag = string2array($info['flag']);
		$flag_info = array();
		if(count($flag)>0)
		{
			foreach($flag as $key => $val)
			{
				if(is_array($val)) $val = implode(" ", $val);
				$flag_info[] = array('name'=>get_field_value('attrname', 'goodstypeattr', $key), 'val'=>$val);
			}
		}
		
		/* 最终购买 */
		$final_info = array();
		$final_info = $dosql->getall("SELECT `#@__goods`.`id`,`#@__goods`.`classid`,`#@__goods`.`title`,`#@__goods`.`picurl`,`#@__goodsattr`.`price` AS salesprice FROM `#@__goodsattr`,`#@__goods` WHERE `#@__goods`.`id`=`#@__goodsattr`.`goodsid` AND 
		`#@__goodsattr`.housenum>0  AND 
		(`#@__goods`.`classid` = $cid or `#@__goods`.`parentstr` like '%,$cid,%') AND `#@__goods`.`checkinfo`=true AND `#@__goods`.`delstate`='' order by orderid desc LIMIT 0, 6");
		/* 获得默认配送地址 */
		//如果会员已登录，则直接获取会员的默认地址
		//如果会员未登录，则读配送地址的cookies,如果该cookies为空则
		
		$row=$dosql->getone("SELECT  count(gid) as gid  FROM `#@__usercomment` where isshow=1 AND  gid =".$id.""); //产品评论总数
		$counts=$row['gid'];
		$smarty->assign("counts"		, $counts);

		$comments=$dosql->getall("SELECT * FROM `#@__usercomment` where isshow=1 AND gid =".$id.""); //循环商品评论
		foreach($comments as $key => $val)
		{
			$comments[$key]['uid'] = $dosql->getone("select * from `#@__member` where id=".$comments[$key]['uid']);
		}
		//salesprice
		if($info['min_price']==$info['max_price'])
		{
			$info['salesprice']=$info['max_price'];
			$info['hideprice']=AuthCode($info['max_price'],'ENCODE',14,60*60*24);
			
		}else
		{
			$info['salesprice']=$info['min_price']."-".$info['max_price'];
			$info['hideprice']=AuthCode($info['min_price'],'ENCODE',14,60*60*24)."-".AuthCode($info['max_price'],'ENCODE',14,60*60*24);
		}
	
		$smarty->assign("comments"		, $comments);
		$smarty->assign("from"		, $from);
		$smarty->assign("left_ads"      , get_ads(8));
		$smarty->assign("flag_info"     , $flag_info);
		$smarty->assign("final_info"    , $final_info);
		$smarty->assign("info"          , $info);
		$smarty->assign("month_sale"          , GetMonthSale($id));
		$smarty->assign("Rank"          , GetGoodsRank($id));
		$smarty->assign("js"            , $_LANG['js']);
		$smarty->assign("GetPosStr"		, getposstr('goodscategory', 'item_list', $cid, $id));
		$smarty->display('item_show.html');
	}
	else
	{
		$smarty->display('404.html');
	}
}

?>