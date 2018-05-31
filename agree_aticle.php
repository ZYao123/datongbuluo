<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
$type   = (int)$type;//类信号
$Aticle_id   = (int)$Aticle_id;//文章ID
$result = array('yes' => 0,'no' => 0);
if($Aticle_id)
{
	$sql="SELECT yes,no FROM `#@__article_agree` WHERE a_id='{$Aticle_id}'";
	
	if($dosql->GetOne($sql))
	{
		$set=$type==1 ? " yes=yes+1":" no=no+1" ;
		$sql="UPDATE `#@__article_agree` SET {$set} WHERE a_id='{$Aticle_id}'";
		$dosql->Query($sql);
	}else
	{
		$yes=$type==1 ? 1:0 ;
		$no=$type==0 ? 1:0 ;
		$sql="INSERT INTO `#@__article_agree` VALUES ('{$Aticle_id}','{$yes}','{$no}')";
		$dosql->Query($sql);
	}
	
	

	$sql="SELECT yes,no FROM `#@__article_agree` WHERE a_id='{$Aticle_id}'";
	$result=$dosql->GetOne($sql);

}
echo "{\"yes\":\"".$result['yes']."\",\"no\":\"".$result['no']."\"}";
?>