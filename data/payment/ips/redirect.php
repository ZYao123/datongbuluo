<?php
//提交地址
if($pay_config['test'] == '1')
{
	$form_url = 'https://pay.ips.net.cn/ipayment.aspx'; //测试
}
else
{
	$form_url = 'https://pay.ips.com.cn/ipayment.aspx'; //正式
}

//商户号
$Mer_code = $pay_config['config']['ips_account'];

//商户证书：登陆http://merchant.ips.com.cn/商户后台下载的商户证书内容
$Mer_key = $pay_config['config']['ips_key'];

//商户订单编号
$Billno = $pay_config['Billno'];

//订单金额(保留2位小数)
$Amount = number_format($pay_config['Amount'], 2, '.', '');

//订单日期
$Date = $pay_config['Date'];

//币种
$Currency_Type = $pay_config['Currency_Type'];

//支付卡种
$Gateway_Type = $pay_config['Gateway_Type'];

//语言
$Lang = $pay_config['Lang'];

//支付结果成功返回的商户URL
$Merchanturl = $pay_config['Merchanturl'];

//支付结果失败返回的商户URL
$FailUrl = $pay_config['FailUrl'];

//支付结果错误返回的商户URL
$ErrorUrl = "";

//商户数据包
$Attach = $pay_config['Attach'];

//显示金额
$DispAmount = $pay_config['DispAmount'];

//订单支付接口加密方式
$OrderEncodeType = $pay_config['OrderEncodeType'];

//交易返回接口加密方式 
$RetEncodeType = $pay_config['RetEncodeType'];

//返回方式
$Rettype = $pay_config['Rettype'];

//Server to Server 返回页面URL
$ServerUrl = $pay_config['ServerUrl'];
//OrderEncodeType设置为5，且在订单支付接口的Signmd5字段中存放MD5摘要认证信息。
//交易提交接口MD5摘要认证的明文按照指定参数名与值的内容连接起来，将证书同时拼接到参数字符串尾部进行md5加密之后再转换成小写，明文信息如下：
//billno+【订单编号】+ currencytype +【币种】+ amount +【订单金额】+ date +【订单日期】+ orderencodetype +【订单支付接口加密方式】+【商户内部证书字符串】
//例:(billno000001000123currencytypeRMBamount13.45date20031205orderencodetype5GDgLwwdK270Qj1w4xho8lyTpRQZV9Jm5x4NwWOTThUa4fMhEBK9jOXFrKRT6xhlJuU2FEa89ov0ryyjfJuuPkcGzO5CeVx5ZIrkkt1aBlZV36ySvHOMcNv8rncRiy3DQ)
//订单支付接口的Md5摘要，原文=订单号+金额+日期+支付币种+商户证书 
$orge = 'billno'.$Billno.'currencytype'.$Currency_Type.'amount'.$Amount.'date'.$Date.'orderencodetype'.$OrderEncodeType.$Mer_key ;
//echo '明文:'.$orge ;
//$SignMD5 = md5('billno'.$Billno.'currencytype'.$Currency_Type.'amount'.$Amount.'date'.$Date.'orderencodetype'.$OrderEncodeType.$Mer_key);
$SignMD5 = md5($orge) ;
//echo '密文:'.$SignMD5 ;
//sleep(20);
$html_text = '
			<form action="'.$form_url.'" method="post" id="frm1">
				<input type="hidden" name="Mer_code" value="'.$Mer_code.'">
				<input type="hidden" name="Billno" value="'.$Billno.'">
				<input type="hidden" name="Amount" value="'.$Amount.'" >
				<input type="hidden" name="Date" value="'.$Date.'">
				<input type="hidden" name="Currency_Type" value="'.$Currency_Type.'">
				<input type="hidden" name="Gateway_Type" value="'.$Gateway_Type.'">
				<input type="hidden" name="Lang" value="'.$Lang.'">
				<input type="hidden" name="Merchanturl" value="'.$Merchanturl.'">
				<input type="hidden" name="FailUrl" value="'.$FailUrl.'">
				<input type="hidden" name="ErrorUrl" value="'.$ErrorUrl.'">
				<input type="hidden" name="Attach" value="'.$Attach.'">
				<input type="hidden" name="DispAmount" value="'.$DispAmount.'">
				<input type="hidden" name="OrderEncodeType" value="'.$OrderEncodeType.'">
				<input type="hidden" name="RetEncodeType" value="'.$RetEncodeType.'">
				<input type="hidden" name="Rettype" value="'.$Rettype.'">
				<input type="hidden" name="ServerUrl" value="'.$ServerUrl.'">
				<input type="hidden" name="SignMD5" value="'.$SignMD5.'">
			</form>
			<script language="javascript">
				document.getElementById("frm1").submit();
			</script>';
?>