<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
$keywords   = !empty($keywords)   ? trim($keywords)     : '';
$result   = array('error' => 0, 'content' => '');
if($keywords!="")
{
	$sql="SELECT `#@__goods`.title,
		sum(`#@__goodsattr`.housenum) as tot_housenum
		FROM `#@__goods` 
		left join `#@__goodsattr` on `#@__goods`.id=`#@__goodsattr`.goodsid
		WHERE `#@__goods`.`title` LIKE '%".$keywords."%' AND `#@__goods`.checkinfo='true' 
		and `#@__goods`.delstate = '' group by `#@__goods`.id
		";
	$dosql->execute($sql);
	$arr = array();
	while ($row = $dosql->getarray())
	{
		$count = $row['tot_housenum'];
		$result['content']=$result['content']."<li onmouseout='javascript:suggestOut(this);' onmouseover='javascript:suggestOver(this);' onclick='javascript:form_submit(this);'><span class='suggest-key'>".restrlen($row['title'],20,"")."</span><span class='suggest-result'>".$count."个商品</span></li>";
	}
	if($result['content']!="") $result['content']="<ol>".$result['content']."</ol>";
}
die(JSON($result));
?>