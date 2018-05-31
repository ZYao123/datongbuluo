<META http-equiv=Content-Type content="text/html; charset=utf-8">
<?php

//---------------------------------------------------------
//财付通即时到帐支付页面回调示例，商户按照此文档进行开发即可
//---------------------------------------------------------
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/../../../include/config.php');
require_once ("./classes/ResponseHandler.class.php");
require_once ("./classes/function.php");
require_once ("./tenpay_config.php");

 if(!isset($_SESSION)) session_start();
$olnum=$_SESSION['olnum'];
$orderid=$_SESSION['orderid']; 
$userid=$_COOKIE["userid"];
log_result("进入前台回调页面");


/* 创建支付应答对象 */
$resHandler = new ResponseHandler();
$resHandler->setKey($key);

//判断签名
if($resHandler->isTenpaySign()) {
	
	//通知id
	$notify_id = $resHandler->getParameter("notify_id");
	//商户订单号
	$out_trade_no = $resHandler->getParameter("out_trade_no");
	//财付通订单号
	$transaction_id = $resHandler->getParameter("transaction_id");
	//金额,以分为单位
	$total_fee = $resHandler->getParameter("total_fee");
	//如果有使用折扣券，discount有值，total_fee+discount=原请求的total_fee
	$discount = $resHandler->getParameter("discount");
	//支付结果
	$trade_state = $resHandler->getParameter("trade_state");
	//交易模式,1即时到账
	$trade_mode = $resHandler->getParameter("trade_mode");
	//付款银行
	$bankId=$resHandler->getParameter("bank_type");
	preg_match("/(\/[\w]+\/)*/i",$_SERVER['REQUEST_URI'],$array);
	$date_uri=$array[0] ? $array[0]:"/"; 
	$rtnUrl="http://".$_SERVER['HTTP_HOST'].$date_uri;
	if(("1" == $trade_mode or "2" == $trade_mode) and "0" == $trade_state) {
			$orderamount=$total_fee/100;
			$paynum=$transaction_id;
			$result=$dosql->getone("select id from #@__goodsorder where userid='{$userid}' and orderlistnum='{$out_trade_no}' and checkinfo=0"); 
			if($result['id'])
			{
				//修改支付状态为1已支付
				$sql="update #@__goodsorder set  checkinfo=1,paynum='{$paynum}',bankId='{$bankId}' where userid='{$userid}' and orderlistnum='{$out_trade_no}' 
				and checkinfo=0";
				if($dosql->ExecNoneQuery($sql))
				{
					$rtnUrl.="member.php?act=ordercontent&orderid={$result['id']}";
					if($cfg_delhouse==1)//用户设为待发货减库存
					{
						/*待发货减库存*/
						$sql="SELECT `gid`,`num`,`norm` FROM `#@__goodsshopcart` 
						WHERE `gorderlistnum`='{$out_trade_no}' AND `Status`='order'";
						$row=$dosql->GETALL($sql);
						foreach($row as $v)
						{
							$sql="UPDATE `#@__goodsattr` SET `housenum`=housenum-{$v['num']}
								WHERE `goodsid`='{$v['gid']}' AND `attrname`='{$v['norm']}'" ;
							$dosql->execnonequery($sql);
							if($v['norm']=="")//再更新商品表的库存字段
							{
								$sql="UPDATE `#@__goods` SET `housenum`=housenum-{$v['num']}
								WHERE `id`='{$v['gid']}'" ;
								$dosql->execnonequery($sql);
							}
						}
					}
				}
			}
	}
		header("location:".$rtnUrl);
} else {
	echo "<br/>" . "认证签名失败" . "<br/>";
	echo $resHandler->getDebugInfo() . "<br>";
}

?>