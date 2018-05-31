<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 				= '编号';
$_LANG['TemFree'] 			= '是否包邮';
$_LANG['TemFree0'] 			= '买家承担运费';
$_LANG['TemFree1'] 			= '卖家承担运费';
$_LANG['TemPricing'] 		= '计价方式';
$_LANG['TemPricing0'] 		= '按重量';
$_LANG['TemPricing1'] 		= '按件数';
$_LANG['TemPricing2'] 		= '按立方';
$_LANG['TemName'] 			= '运费模板名称';
$_LANG['orderid'] 			= '排序';
$_LANG['checkinfo'] 		= '是否启用';
$_LANG['TemAddressID'] 		= '仓库地址';
$_LANG['shippingMethod']	= '运送方式';
$_LANG['shippingMethodInfo']= '除指定地区外，其余地区的运费采用“默认运费”';

$_LANG['checkinfocontent'] 	= '只能启用一个仓库';
$_LANG['checkno'] 			= '未启用';
$_LANG['checkyes'] 			= '已启用';

$_LANG['AddrCountry'] 		= '选择国家';
$_LANG['AddrProvince'] 		= '选择省';
$_LANG['AddrCity'] 			= '选择城市';
$_LANG['AddrArea'] 			= '选择区(县)';

$_LANG['ShipDefault'] 		= '默认运费';
$_LANG['ShipItem'] 			= '件';
$_LANG['ShipWeight'] 		= '重';
$_LANG['ShipWeightUnit'] 	= 'kg';
$_LANG['ShipVolume'] 		= '体积';
$_LANG['ShipVolumeUnit'] 	= 'm<sup>3</sup>';
$_LANG['Shipfirst']			= '首';
$_LANG['Shipsecond']		= '续';
$_LANG['ShipPrice']			= '费';
$_LANG['ShipPriceUnit']		= '元';
$_LANG['ShipWithin']		= '内';
$_LANG['ShipAdd']			= '赠加';
$_LANG['ShipEach']			= '每';
$_LANG['ShipSpecial']		= '为指定地区城市设置运费';
$_LANG['ShipTransportedTo']	= '运送到';
$_LANG['ShipAreaNone']		= '未添加地区';
$_LANG['ShipSelectArea']	= '选择地区';


/* js验证 */          
$_LANG['js']['TemName']		= '请输入模板名称!';
$_LANG['js']['TemAddressID']= '请选择仓库地址!';
$_LANG['js']['AddrCity'] 	= '选择城市';
$_LANG['js']['AddrArea'] 	= '选择区(县)';
$_LANG['js']['AddrArea'] 	= '选择区(县)';
$_LANG['js']['action_del'] 	= '删除'; 
$_LANG['js']['action_edit'] = '编辑';
$_LANG['js']['ShipAreaNone']= '未添加地区';
$_LANG['js']['ShipSelectArea']	= '选择地区';
$_LANG['js']['ShipSelectPcid']	= '选择运送方式';

$_LANG['js']['ShipFirst'] 		= '首';
$_LANG['js']['ShipSecond'] 		= '续';
$_LANG['js']['ShipItem'] 		= '件';
$_LANG['js']['ShipWeight'] 		= '重';
$_LANG['js']['ShipVolume'] 		= '立方';
$_LANG['js']['ShipPrice1']		= '费';
$_LANG['js']['Shiparea']		= '地区';
$_LANG['js']['ShipNone']		= '不能为空';

?>