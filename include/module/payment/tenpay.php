<?php
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 引入语言包 */
$payment_lang = LCSHOP_LANG . 'payment/tenpay.php';
if (file_exists($payment_lang))
{
    global $_LANG;
    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_module) && $set_module == true)
{
    $i = isset($module) ? count($module) : 0;
    $module[$i]['code']    		= basename(__FILE__, '.php');	//代码 
    $module[$i]['depict']  		= 'tenpay_depict';				//描述
    $module[$i]['is_cod']  		= '0';							//是否支持货到付款 1 支持 0 不支持
    $module[$i]['is_online']  	= '1';							//否支持在线支付 1 支持 0 不支持
    $module[$i]['author']  		= 'LCSHOP TEAM';				//作者
    $module[$i]['website'] 		= 'http://www.tenpay.com';		//网址
    $module[$i]['version'] 		= '1.0.0';						//版本
    //配置信息
    $module[$i]['config']  = array(
        array('name' => 'tenpay_account',   'type' => 'text', 'value' => ''),
        array('name' => 'tenpay_key',       'type' => 'text', 'value' => ''),
        array('name' => 'magic_string',     'type' => 'text', 'value' => '')
    );
    return;
}
?>