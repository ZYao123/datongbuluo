<?php
/***调用品牌**/
//attr_id 类型ID
//$num 显示数量
function get_brand($attr_id=0,$num=0)
{
	global $dosql;
	$where="";
	if($attr_id)
	{
		$attr_id=(int)$attr_id;
		$sql="SELECT brand FROM `#@__goodstype` WHERE id='{$attr_id}'";
		$result=$dosql->getone($sql);
		if(!empty($result['brand']))
		{
			$array=string2array($result['brand']);
			foreach($array as $v)
			{
				$where.=$where ? ",{$v}": " AND `#@__goodsbrand`.id IN ({$v}";
			}
			$where and $where.=") ";
		}
	}
	$limit=$num ? "LIMIT 0,{$num}":"";
	$brand = $dosql->getall("select id,url,classname,logo from `#@__goodsbrand` where checkinfo='true' {$where} order by orderid desc,id ASC {$limit}");
	return $brand;
}
?>