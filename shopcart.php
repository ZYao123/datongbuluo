<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once('bottom.php');
include_once(LCSHOP_LANG . '/shopcart.php');
!isset($act) and $act='list';
$smarty->assign("title", $_LANG['title']['shopcart']);

//添加购物车
if ($act == "add")
{

	//判断会员是否登录，登录会员购物车信息直接写入数据库，未登录会员信息写入cookies
	$housenum=(int)$housenum;
	$housenum<$goods_num and $goods_num=$housenum;//超出库存自动将商品数量化为商品库存
	if (@$_COOKIE['username'] != '')
	{
		AddShopCartSql($goods_id,$goods_num,$goods_norm,$goods_price);
	}
	else
	{
		AddShopCart($goods_id,$goods_num,$goods_norm,$goods_price);
	}
	exit();
}
//立刻购买
if ($act == "NowBuy")
{

	//判断会员是否登录，登录会员购物车信息直接写入数据库，未登录会员信息写入cookies
	$housenum=(int)$housenum;
	$housenum<$goods_num and $goods_num=$housenum;//超出库存自动将商品数量化为商品库存
	if (@$_COOKIE['username'] != '')
	{
		NowBuyShopCartSql($goods_id,$goods_num,$goods_norm,$goods_price,$housenum);
	}
	else
	{
			echo "{\"error\":1}";
	}
	exit();
}
require_once(dirname(__FILE__).'/include/checkmember.php');
//修改购物车数量
if ($act == "update")
{
	
	update_cart($goods_num,$num,$id,$housenum);
}
//删除购物车数量
elseif ($act == "del")
{
	delcart($id);
}
//删除购物车数量
elseif ($act == "delall")
{
	delcartall();
}

//显示购物车中的内容
elseif ($act == 'list')
{
	//判断会员是否登录，未登录跳转至会员登录页面

		$totalgoodsprice = 0;
		$totalnum = 0;
		$sql = "select `#@__goodsshopcart`.id, `#@__goodsshopcart`.gid,
		`#@__goodsshopcart`.gpicurl as picurl,`#@__goodsshopcart`.gtitle as title,
		`#@__goodsshopcart`.price as salesprice,
		`#@__goodsshopcart`.num,`#@__goodsattr`.housenum,`#@__goodsshopcart`.norm,`#@__goodsshopcart`.consume_points 
		from `#@__goodsshopcart`,
		`#@__goodsattr` where `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid
		AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm
		 AND `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." AND `#@__goodsshopcart`.Status = 'cart'";
		$dosql->Execute($sql);
		$totalnum = $dosql->GetTotalRow();
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
		$quality_goods = array();
		$quality_goods = $dosql->getall("SELECT `#@__goods`.id,picurl,title,description,classid,`#@__goodsattr`.`price` FROM `#@__goods` 
		INNER JOIN (`#@__goodsattr`,`#@__goodsattribute`) 
		ON `#@__goods`.`id`=`#@__goodsattr`.`goodsid`
		AND `#@__goodsattribute`.g_id=`#@__goods`.id
		 WHERE `#@__goodsattribute`.a_id like '%,2,%' AND `#@__goods`.`checkinfo`='true' AND `#@__goods`.`delstate` = ''  ORDER BY RAND() LIMIT 5");
		 
		$smarty->assign("quality_goods", $quality_goods);
		$smarty->assign("cart_info", $cart_info);
		$smarty->assign("norm", $norm);
		$totalprice = $totalgoodsprice + Preferential();
		$smarty->assign("totalprice", sprintf("%01.2f", $totalprice));
		$smarty->assign("totalgoodsprice", sprintf("%01.2f", $totalgoodsprice));
		$smarty->assign("totalnum", $totalnum);
		$smarty->display('shopcart.html');		
}

?>
