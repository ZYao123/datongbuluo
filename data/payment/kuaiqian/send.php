<?PHP

/*
 * @Description: 快钱人民币支付网关接口范例
 * @Copyright (c) 上海快钱信息服务有限公司
 * @version 2.0
 */
//人民币网关账户号
///请登录快钱系统获取用户编号，用户编号后加01即为人民币网关账户号。
$merchantAcctId=$pay_config['config']['kq_account'];

//人民币网关密钥
///区分大小写.请与快钱联系索取
$key=$pay_config['config']['kq_key'];

//字符集.固定选择值。可为空。
///只能选择1、2、3.
///1代表UTF-8; 2代表GBK; 3代表gb2312
///默认值为1
$inputCharset="1";

//服务器接受支付结果的后台地址.与[pageUrl]不能同时为空。必须是绝对地址。
///快钱通过服务器连接的方式将交易结果发送到[bgUrl]对应的页面地址，在商户处理完成后输出的<result>如果为1，页面会转向到<redirecturl>对应的地址。
///如果快钱未接收到<redirecturl>对应的地址，快钱将把支付结果GET到[pageUrl]对应的页面。
preg_match("/(\/[\w]+\/)*/i",$_SERVER['REQUEST_URI'],$array);
$date=$array[0] ? $array[0]:"/"; 
$bgUrl="http://".$_SERVER['HTTP_HOST'].$date."data/payment/kuaiqian/receive.php";
//网关版本.固定值
///快钱会根据版本号来调用对应的接口处理程序。
///本代码版本号固定为v2.0
$version="v2.0";

//语言种类.固定选择值。
///只能选择1、2、3
///1代表中文；2代表英文
///默认值为1
$language="1";

//签名类型.固定值
///1代表MD5签名
///当前版本固定为1
$signType="1";	
   
//支付人姓名
///可为中文或英文字符
$payerName=$pay_config['rec_name'];

//支付人联系方式类型.固定选择值
///只能选择1
///1代表Email
$payerContactType="1";	

//支付人联系方式
///只能选择Email或手机号
$payerContact="";

//商户订单号
///由字母、数字、或[-][_]组成
//$orderId=date('YmdHis');
$orderId=$pay_config['orderId'];		

//订单金额
///以分为单位，必须是整型数字
///比方2，代表0.02元
//$orderAmount="2";
$orderAmount=$pay_config['orderAmount']*100;
//echo $orderAmount;
//exit();
	
//订单提交时间
///14位数字。年[4位]月[2位]日[2位]时[2位]分[2位]秒[2位]
///如；20080101010101
$orderTime=date('YmdHis');

//商品名称
///可为中文或英文字符
$productName="";

//商品数量
///可为空，非空时必须为数字
$productNum=1;

//商品代码
///可为字符或者数字
$productId="";

//商品描述
$productDesc="";
	
//扩展字段1
///在支付结束后原样返回给商户
$ext1="";

//扩展字段2
///在支付结束后原样返回给商户
$ext2="";
	
//支付方式.固定选择值
///只能选择00、10、11、12、13、14
///00：组合支付（网关支付页面显示快钱支持的各种支付方式，推荐使用）10：银行卡支付（网关支付页面只显示银行卡支付）.11：电话银行支付（网关支付页面只显示电话支付）.12：快钱账户支付（网关支付页面只显示快钱账户支付）.13：线下支付（网关支付页面只显示线下支付方式）
$payType=$pay_config['payType'];
//银行代码
//实现直接跳转到银行页面去支付,只在$payType=10时才需设置参数
//具体代码参见 接口文档银行代码列表
 $bankId=$pay_config['bankId'];

//同一订单禁止重复提交标志
///固定选择值： 1、0
///1代表同一订单号只允许提交1次；0表示同一订单号在没有支付成功的前提下可重复提交多次。默认为0建议实物购物车结算类商户采用0；虚拟产品类商户采用1
$redoFlag="0";

//快钱的合作伙伴的账户号
///如未和快钱签订代理合作协议，不需要填写本参数
$pid=""; ///合作伙伴在快钱的用户编号


   
//生成加密签名串
///请务必按照如下顺序和规则组成加密串！
	@ $signMsgVal=appendParam($signMsgVal,"inputCharset",$inputCharset);
	$signMsgVal=appendParam($signMsgVal,"pageUrl",$bgUrl);
	$signMsgVal=appendParam($signMsgVal,"bgUrl",$bgUrl);
	$signMsgVal=appendParam($signMsgVal,"version",$version);
	$signMsgVal=appendParam($signMsgVal,"language",$language);
	$signMsgVal=appendParam($signMsgVal,"signType",$signType);
	$signMsgVal=appendParam($signMsgVal,"merchantAcctId",$merchantAcctId);
	$signMsgVal=appendParam($signMsgVal,"payerName",$payerName);
	$signMsgVal=appendParam($signMsgVal,"payerContactType",$payerContactType);
	$signMsgVal=appendParam($signMsgVal,"payerContact",$payerContact);
	$signMsgVal=appendParam($signMsgVal,"orderId",$orderId);
	$signMsgVal=appendParam($signMsgVal,"orderAmount",$orderAmount);
	$signMsgVal=appendParam($signMsgVal,"orderTime",$orderTime);
	$signMsgVal=appendParam($signMsgVal,"productName",$productName);
	$signMsgVal=appendParam($signMsgVal,"productNum",$productNum);
	$signMsgVal=appendParam($signMsgVal,"productId",$productId);
	$signMsgVal=appendParam($signMsgVal,"productDesc",$productDesc);
	$signMsgVal=appendParam($signMsgVal,"ext1",$ext1);
	$signMsgVal=appendParam($signMsgVal,"ext2",$ext2);
	$signMsgVal=appendParam($signMsgVal,"payType",$payType);
	$signMsgVal=appendParam($signMsgVal,"bankId",$bankId);	
	$signMsgVal=appendParam($signMsgVal,"redoFlag",$redoFlag);
	$signMsgVal=appendParam($signMsgVal,"pid",$pid);
	$signMsgVal=appendParam($signMsgVal,"key",$key);
$signMsg= strtoupper(md5($signMsgVal));
	
	//功能函数。将变量值不为空的参数组成字符串
	Function appendParam($returnStr,$paramId,$paramValue){

		if($returnStr!=""){
			
				if($paramValue!=""){
					
					$returnStr.="&".$paramId."=".$paramValue;
				}
			
		}else{
		
			If($paramValue!=""){
				$returnStr=$paramId."=".$paramValue;
			}
		}
		
		return $returnStr;
	}
	//功能函数。将变量值不为空的参数组成字符串。结束
	

$html_text= '<form name="kqPay" method="post" action="https://www.99bill.com/gateway/recvMerchantInfoAction.htm">
				<input type="hidden" name="inputCharset" value="'.$inputCharset.'"/>
				<input type="hidden" name="pageUrl" value="'.$bgUrl.'"/>
				<input type="hidden" name="bgUrl" value="'.$bgUrl.'"/>
				<input type="hidden" name="version" value="'.$version.'"/>
				<input type="hidden" name="language" value="'.$language.'"/>
				<input type="hidden" name="signType" value="'.$signType.'"/>
				<input type="hidden" name="signMsg" value="'.$signMsg.'"/>
				<input type="hidden" name="merchantAcctId" value="'.$merchantAcctId.'"/>
				<input type="hidden" name="payerName" value="'.$payerName.'"/>
				<input type="hidden" name="payerContactType" value="'.$payerContactType.'"/>
				<input type="hidden" name="payerContact" value="'.$payerContact.'"/>
				<input type="hidden" name="orderId" value="'.$orderId.'"/>
				<input type="hidden" name="orderAmount" value="'.$orderAmount.'"/>
				<input type="hidden" name="orderTime" value="'.$orderTime.'"/>
				<input type="hidden" name="productName" value="'.$productName.'"/>
				<input type="hidden" name="productNum" value="'.$productNum.'"/>
				<input type="hidden" name="productId" value="'.$productId.'"/>
				<input type="hidden" name="productDesc" value="'.$productDesc.'"/>
				<input type="hidden" name="ext1" value="'.$ext1.'"/>
				<input type="hidden" name="ext2" value="'.$ext2.'"/>
				<input type="hidden" name="payType" value="'.$payType.'"/>
				<input type="hidden" name="bankId" value="'.$bankId.'"/>
				<input type="hidden" name="redoFlag" value="'.$redoFlag.'"/>
				<input type="hidden" name="pid" value="'.$pid.'"/>
				<script language="javascript">
					document.kqPay.submit();
				</script>		
			</form>';
?>