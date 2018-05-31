<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 			    = '编号';
$_LANG['username'] 		    = '用户名';
$_LANG['email'] 		    = '邮箱地址';
$_LANG['enteruser'] 	    = '是否认证';
$_LANG['user_money'] 	    = '可用资金';
$_LANG['frozen_money'] 	    = '冻结资金';
$_LANG['rank_points'] 	    = '积分';
$_LANG['pay_points'] 	    = '消费积分';
$_LANG['regtime'] 		    = '注册日期';
$_LANG['checkuser'] 	    = '状态';
$_LANG['action_admin_list'] = '操作';
$_LANG['zt'] 		    	= '积分状态';
$_LANG['jifen'] 		    = '积分';
$_LANG['posttime'] 		    = '时间'; 
$_LANG['jianjie'] 		    = '描述';

/*会员添加修改字段信息*/
$_LANG['addPassword']       = '登录密码';
$_LANG['editPassword']      = '新密码';
$_LANG['repassword']        = '确认密码';
$_LANG['user_rank']         = '会员等级';
$_LANG['birthday']          = '出生日期';
$_LANG['mobile']            = '手机号码';
$_LANG['sex']               = '性别';
$_LANG['credit_line']       = '信用额度';
$_LANG['MSN']               = 'MSN';
$_LANG['QQ']                = 'QQ';
$_LANG['telephone']         = '固定电话';
$_LANG['secret']            = '保密';
$_LANG['w']                 = '女';
$_LANG['m']                 = '男';
$_LANG['normal']            = '正常';
$_LANG['freeze']            = '冻结';
/*添加修改弹窗title*/
$_LANG['addTitle'] 		    = '添加会员';
$_LANG['updateTitle'] 		= '修改会员';
$_LANG['log'] 				= '日志';
$_LANG['pri'] 				= '权限';


/* 会员管理页js验证 */          
$_LANG['js']['tips']			= '确定要删除选中的会员吗？';
$_LANG['js']['nocheck']			= '没有选中会员！';

/* 会员表单页js验证 */  
$_LANG['js']['usernameblank']	= '请输入用户名！';
$_LANG['js']['usernameformat']	= '请输入正确的用户名格式！请使用[0-9a-zA-Z_]内的字符,由6-20个字符组成！';
$_LANG['js']['usernameformat1']	= '请使用[数字/字母/中划线/下划线/@.]！';
$_LANG['js']['password']		= '请输入密码！';
$_LANG['js']['passwordformat']	= '密码长度为6~16位字符！';
$_LANG['js']['passwordformat1']	= '请使用[数字/字母/中划线/下划线]';
$_LANG['js']['repassword']		= '请输入确认密码！';
$_LANG['js']['nopassword']		= '两次密码输入的不一致!';
$_LANG['js']['emailblank']		= '请输入邮箱地址！';
$_LANG['js']['emailformat']		= '请输入正确的邮箱格式！';
$_LANG['js']['mobileformat']	= '请输入正确的手机号码格式！';
$_LANG['js']['emailexist']		= '邮箱已被注册使用！';
$_LANG['js']['mobileexist']	    = '此手机号码已被注册使用！';
$_LANG['js']['usernameexist']	= '用户名已存在！';
$_LANG['js']['mobile']	        = '手机号码为11位数字！';
$_LANG['js']['mobileformat']	= '请输入正确的手机号码格式！';
$_LANG['js']['tips']			= '确定要删除选中的信息吗？';
$_LANG['js']['nocheck']			= '没有选中信息！';
$_LANG['js']['tipstitle']		= '操作提示';

?>