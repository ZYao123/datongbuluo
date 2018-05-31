<?php 

/* 版权 */	
$smarty->assign("keyword", $cfg_keyword);
$smarty->assign("description", $cfg_description);
$smarty->assign("copyright", $cfg_copyright);
$smarty->assign("tel"	   , $cfg_tel);
$smarty->assign("qq"	   , $cfg_qq);

//购物车数量

if (@$_COOKIE['userid'] != '')
{
	/*$sql1 = "select gid from `#@__goodsshopcart`,`#@__goods` where `#@__goods`.id = `#@__goodsshopcart`.gid AND  `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." and Status = 'cart'";
	$dosql->Execute($sql1,1);*/
	$sql1 = "select gid from `#@__goodsshopcart`,`#@__goods`,`#@__goodsattr`  where `#@__goods`.id = `#@__goodsshopcart`.gid AND `#@__goodsattr`.goodsid = `#@__goodsshopcart`.gid  and  `#@__goodsshopcart`.uid = ".$_COOKIE['userid']." AND `#@__goodsattr`.attrname = `#@__goodsshopcart`.norm  and Status = 'cart'";
	$dosql->Execute($sql1,1);
	$shop_item_num = $dosql->GetTotalRow(1);
}
else
{
	$shop_item_num = 0;
	if (@$_COOKIE['shop_cart'] != '')
	$shop_item_num = count(unserialize(stripslashes(@$_COOKIE['shop_cart'])));
}
$smarty->assign("shop_item_num", $shop_item_num);
/* 热门搜索 */	
$hotkeywords = explode("|",$cfg_hotkeywords);
$smarty->assign("hotkeywords", $hotkeywords);
/* 搜索关键词 */
if (!isset($keywords))
{
	$key = '';
}
$smarty->assign("keywords", $keywords);

?>