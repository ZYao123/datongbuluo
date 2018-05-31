<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 			= '编号';
$_LANG['username'] 		= '用户名';
$_LANG['password'] 		= '密码';
$_LANG['loginip'] 		= '登录ip';
$_LANG['logintime'] 	= '最后登录时间';
$_LANG['regtime'] 		= '注册时间';
$_LANG['checkadmin'] 	= '审核';
$_LANG['email'] 		= '邮箱';
$_LANG['mobile'] 		= '手机';
$_LANG['actionlist'] 	= '权限列表';
$_LANG['role_id'] 		= '角色';
$_LANG['repassword'] 	= '确认密码';
$_LANG['log'] 			= '日志';
$_LANG['pri'] 			= '权限';

/* 登录页js验证 */     
$_LANG['js']['validate']		= '请输入验证码';     
$_LANG['js']['username']		= '请输入账号或邮箱';
$_LANG['js']['password']		= '请输入密码';
$_LANG['js']['error']			= '您的密码已连续错误6次，请15分钟后再进行登录！';
$_LANG['js']['n_error']			= '用户名或密码不正确！您还有strnum次尝试的机会！';
$_LANG['js']['nologin']			= '抱歉，您的账号被禁止登陆！';
$_LANG['js']['favorite']		= '加入收藏失败，请使用Ctrl+D进行添加！';
$_LANG['js']['desktop']			= '当前IE安全级别不允许操作！';
$_LANG['validate_error']		= '验证码错误！';


/* 权限管理页js验证 */          
$_LANG['js']['usernameformat']	= '请输入正确的用户名格式！请使用[0-9a-zA-Z_]内的字符,由5-20个字符组成！';
$_LANG['js']['passwordformat']	= '请输入正确的密码格式！请使用[0-9a-zA-Z_]内的字符,由5-20个字符组成！';
$_LANG['js']['repassword']		= '请输入确认密码！';
$_LANG['js']['nopassword']		= '两次密码输入的不一致!';
$_LANG['js']['emailformat']		= '请输入正确的邮箱格式！';
$_LANG['js']['mobileformat']	= '请输入正确的手机号码格式！';
$_LANG['js']['usernameexist']	= '用户名已存在！';
$_LANG['js']['usernamenoexist']	= '用户名不存在，可以使用！';

?>