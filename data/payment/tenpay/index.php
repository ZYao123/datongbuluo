<?php
   require_once ("classes/RequestHandler.class.php");
   require_once ("tenpay_config.php");
  $curDateTime = date("YmdHis");
 
  
  //date_default_timezone_set(PRC);
		$strDate = date("Ymd");
		$strTime = date("His");
		
		//4位随机数
		$randNum = rand(1000, 9999);
		
		//10位序列号,可以自行调整。
		$strReq = $strTime . $randNum;
		 /* 商家的定单号 */
  	$mch_vno = $curDateTime . $randNum;
	$orderlistnum=$_GET["orderlistnum"];
	$orderamount=$_GET["orderamount"];
?>
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>财付通付款通道</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META 
content=网上购物/网上支付/安全支付/安全购物/购物，安全/支付,安全/财付通/安全,支付/安全，购物/支付,在线/付款,收款/网上,贸易/网上贸易. 
name=description>
<META 
content=网上购物/网上支付/安全支付/安全购物/购物，安全/支付,安全/财付通/安全,支付/安全，购物/支付,在线/付款,收款/网上,贸易/网上贸易. 
name=keywords>
<META content="MSHTML 6.00.3790.2577" name=GENERATOR>

<style type="text/css">
<!--
a:link {
	color: #003399;
}
.px12 {
	font-size: 12px;
}
a:visited {
	color: #003399;
}
a:hover {
	color: #FF6600;
}
.px14 {
	font-size: 14px;
}
.px12hui {
	font-size: 12px;
	color: #999999;
}
.STYLE2 {font-size: 14px; font-weight: bold; }
-->
</style>
<script type='text/javascript' src='http://union.tenpay.com/bankList/jquery.js'></script>
<link rel="stylesheet" type="text/css" href="http://union.tenpay.com/bankList/css_col4.css"/>
</HEAD>
<BODY topMargin=0>


<div align="center">
  <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="381" align="left" valign="middle"><a href="https://www.tenpay.com/" target="_blank"><img src="image/logo.jpg" width="537" height="145" border="0"></a></td>
      <td width="379" align="right" valign="middle" font style="color:#000000;font-size:12px;">您好，请 <A 
      href="https://www.tenpay.com/" target="_blank">注册</A> 或 <A 
      href="https://www.tenpay.com/" target="_blank">登录</A> | <A 
      href="https://www.tenpay.com/" target="_blank">财付通首页</A></td>
    </tr>
  </table>
  <table width="760" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td></td>
    </tr>
  </table>
  <table width="760" height="406" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="top"><table width="760" border="0" cellspacing="0" cellpadding="3" align="center">
        <tr>
          <td height="30" width="5" bgcolor="#666666"></td>
          <td width="743" height="30" bgcolor="#FF6600"><font style="color:#FFFFFF;font-size:14px;"><B> 　财付通快速付款通道 方便 快捷 安全</B></font></td>
        </tr>
      </table>
          <table width="760" height="42" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr> <td height="30" ><span class="STYLE2"><img src="image/arrow_02_01.gif"> 填写订单信息</span></td>
            </tr>
        </table>
        <table width="760" border="0" cellspacing="0" cellpadding="0" align="center" height="1">
            <tr>
              <td width="740" bgcolor="#CCCCCC"></td>
              <td width="20"></td>
            </tr>
        </table>
        <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                        <script language="javascript">
	function payFrm()
	{
		if (directFrm.order_no.value=="")
		{
			alert("提醒：请填写订单编号；如果无特定的订单编号，请采用默认编号！（刷新一下页面就可以了）");
			directFrm.order_no.focus();
			return false;
		}
		if (directFrm.product_name.value=="")
		{
			alert("提醒：请填写商品名称(付款项目)！");
			directFrm.product_name.focus();
			return false;
		}
		if (directFrm.order_price.value=="")
		{
			alert("提醒：请填写订单的交易金额！");
			directFrm.order_price.focus();
			return false;
		}
		
		if (directFrm.remarkexplain.value=="")
		{
			alert("提醒：请填写您的简要说明！");
			directFrm.remarkexplain.focus();
			return false;
		}
		if (directFrm.remarkexplain.value.length>31)
		{
			alert("提醒：超出规定的字数,请重新输入");
  			event.returnValue=false;   
  			return   false;   
		}
		
		return true;
	}
  </script>

<form action='tenpay.php' method='post' name='directFrm' onSubmit="return payFrm();">
            <tr>
              <td align="left"><table width="760" height="30" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#FFCC00">
                  <tr>
                    <td align="center" valign="top" bgcolor="#FFFFEE"><table width="760" height="351" border="0" cellpadding="6" cellspacing="0" class="px14">
                        <tr>
                          <td height="26" align="right" valign="top">&nbsp;</td>
                          <td valign="top"> 　 </td>
                          <td width="269" rowspan="8" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="5">
                            <tr>
                              <td height="10" align="center" valign="middle"><img src="image/cft.gif" width="180" height="81"></td>
                              </tr>
                            <tr>
                              <td height="24"><font style="color:#000000;font-size:12px;"><B>说明1：</B></font></td>
                              </tr>
                            <tr>
                              <td height="24" font style="color:#000000;font-size:12px;">本通道为采用财付通付款。请在支付前与本网站达成一致。</td>
                              </tr>
                            <tr>
                              <td height="24"><font style="color:#000000;font-size:12px;"><B>说明2：</B></font></td>
                              </tr>
                            <tr>
                              <td height="24" font style="color:#000000;font-size:12px;">请务必确认好订单和货款后，再付款。可以在快速付款通道里的“付款概要”和“订单金额”中填入相应的订单信息。</td>
                              </tr>
                            
                          </table></td>
                        </tr>
                        <tr>
                        <td width="102" height="26" align="right" valign="top">收款方：</td>
                        <td width="353" valign="top"><? echo  $spname ?></td>
                        </tr> 
                      <tr>
                        <td align="right" valign="top">订单编号：</td>
                        <td valign="top">
			              <input type="text" name="order_no" maxlength="50" size="18" readonly value="<?php echo $orderlistnum ?>" font style="color:#000000;font-size:14px;"></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">付款项目：</td>
                        <td valign="top"><span style="color:#000000;font-size:12px;">
                          <input name="product_name" type="text" size="18" maxlength="50" font style="color:#000000;font-size:14px;">
                        </span></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">付款金额：</td>
                        <td valign="top"><input type="text" name="order_price" maxlength="50" size="18" onKeyUp="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')" font style="color:#000000;font-size:14px;" value="<?php echo $orderamount;?>"> 
                        元（格式：500.01）</td>
                      </tr>
                       <tr>
                        <td align="right" valign="top">支付方式：</td>
                        <td valign="top"><span style="color:#000000;font-size:12px;">
                          <input type="radio" name="trade_mode" value="1"  checked="true">即时到帐&nbsp;
                           <input type="radio" name="trade_mode" value="2">中介担保&nbsp;
                            <input type="radio" name="trade_mode" value="3">后台选择
                        </span></td>
                      </tr>
                      <tr>
                        <td height="99" align="right" valign="top">简要说明：</td>
                        <td valign="top"><textarea name="remarkexplain" cols="40" rows="5" id="remark2"  font style="color:#000000;font-size:14px;"></textarea>
                          <br>
                          请填写您订单的简要说明（30字以内）</td></tr>
                      <tr>
                        <td align="right" valign="top">&nbsp;</td>
                        <td valign="top"><b>
                          <input name="submit" type="image" src="image/next.gif" alt="使用财付通安全支付" width="103" height="27">
                        </b></td>
                        <td valign="top">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr> </form>
        </table>
        </td>
    </tr>
  </table>


</body>
</html>
