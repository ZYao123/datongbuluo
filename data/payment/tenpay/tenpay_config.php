<?php
if(!isset($pay_config))
{
	$reslut=get_pay_msg('tenpay');
	$pay_config['config'] = string2array($reslut['config']);
}
$spname=$pay_config['config']['magic_string'];
$partner = $pay_config['config']['tenpay_account'];        							//财付通商户号
$key = $pay_config['config']['tenpay_key'];										//财付通密钥

preg_match("/(\/[\w]+\/)*/i",$_SERVER['REQUEST_URI'],$array);
$date_uri=$array[0] ? $array[0]:"/"; 
$rtnUrl="http://".$_SERVER['HTTP_HOST'].$date_uri;
$return_url = $rtnUrl."data/payment/tenpay/payReturnUrl.php";	//显示支付结果页面,*替换成payReturnUrl.php所在路径
$notify_url = $rtnUrl."data/payment/tenpay/payNotifyUrl.php";	//支付完成后的回调处理页面,*替换成payNotifyUrl.php所在路径
?>