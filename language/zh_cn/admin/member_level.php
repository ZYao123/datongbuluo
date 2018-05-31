<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 			    = '编号';
$_LANG['levelname'] 		= '会员等级';
$_LANG['levelprice'] 		= '升级所需消费金额';
$_LANG['isbuy'] 	        = '是否可购买积分商城商品';
$_LANG['ispoint'] 	        = '是否领取使用购物券';
$_LANG['orderid'] 	        = '等级关联编号';
$_LANG['action_admin_list'] = '操作'; 
$_LANG['orderid_ts']        = '对会员等级进行排序等级越高数越大 例：普通会员填1,银牌会员填2,金牌会员填3'; 


/*添加修改弹窗title*/
$_LANG['addTitle'] 		    = '添加等级';
$_LANG['updateTitle'] 		= '修改等级';
$_LANG['log'] 				= '日志';
$_LANG['pri'] 				= '权限';


/* 会员管理页js验证 */          
$_LANG['js']['tips']			= '确定要删除选中的会员吗？';
$_LANG['js']['nocheck']			= '没有选中会员！';

/* 会员表单页js验证 */  
$_LANG['js']['levelnameblank']	= '请输入会员等级！';
$_LANG['js']['levelpriceblank']	= '请输入升级所需消费额！';

$_LANG['js']['usernameformat']	= '请输入正确的用户名格式！请使用[0-9a-zA-Z_]内的字符,由6-20个字符组成！';
$_LANG['js']['usernameformat1']	= '请使用[数字/字母/中划线/下划线/@.]！';
$_LANG['js']['tips']			= '确定要删除选中的信息吗？';
$_LANG['js']['nocheck']			= '没有选中信息！';
$_LANG['js']['tipstitle']		= '操作提示';

?>