<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/../../../include/config.php');
$reslut=get_pay_msg('alipay');
$pay_config['WIDseller_config'] = string2array($reslut['config']);
$userid=$_COOKIE["userid"];
/* *
 * 功能：支付宝服务器异步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。


 *************************页面功能说明*************************
 * 创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
 * 该页面不能在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
 * 该页面调试工具请使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyNotify
 * 如果没有收到该页面返回的 success 信息，支付宝会在24小时内按一定的时间策略重发通知
 */

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
preg_match("/(\/[\w]+\/)*/i",$_SERVER['REQUEST_URI'],$array);
$date_uri=$array[0] ? $array[0]:"/"; 
$rtnUrl="http://".$_SERVER['HTTP_HOST'].$date_uri;

if($verify_result) {//验证成功
//////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代

	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
	
	//获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
	
	//商户订单号

	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];
	
	if ($_GET['trade_status'] == 'TRADE_SUCCESS' or $_GET['trade_status'] == 'TRADE_FINISHED') {

		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
				
		//注意：
		//该种交易状态只在一种情况下出现——开通了高级即时到账，买家付款成功后。

		//调试用，写文本函数记录程序运行情况是否正常
		//logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
		
		$r=$dosql->getone("select id from #@__goodsorder where  orderlistnum='{$out_trade_no}' and checkinfo=0 "); 
		if(is_array($r)){

			$sql="UPDATE `#@__goodsorder` SET checkinfo='1', paynum='$trade_no' WHERE  orderlistnum='{$out_trade_no}' and checkinfo=0";
			// 商品出售排行在此处修改
			if($dosql->ExecNoneQuery($sql))
			{

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
			$rtnUrl.="../member.php?act=ordercontent&orderid={$r['id']}";
		}
		
	}
	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
		
	//echo "success";		//请不要修改或删除
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}

header("location:".$rtnUrl);
?>