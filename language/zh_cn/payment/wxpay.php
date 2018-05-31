<?php
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

$_LANG['wxpay']            = '微信扫码支付';
$_LANG['wxpay_depict']     = '<b>微信扫码支付</b> - 是基于微信的支付方式。商户后台系统调用微信支付生成预付交易，将接口返回的链接生成二维码，用户扫码后输入密码完成支付交易';
$_LANG['APPID']    = 'APPID';
$_LANG['MCHID']    = '商户账号';
$_LANG['KEY']      = '商户密钥(微支付商户平台设置的32位API密钥)';
$_LANG['APPSECRET']= 'APPSECRET';
?>