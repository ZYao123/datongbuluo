<?php	
if(!defined('IN_LCSHOP'))
{
	exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 			= '编号';
$_LANG['classid'] 		= '购物券位置';
$_LANG['parentid'] 		= '上级分类';
//$_LANG['parentstr'] 	= '';
$_LANG['title'] 		= '购物券标题';
$_LANG['admode'] 		= '展示类型';
$_LANG['picurl'] 		= '图片地址';
$_LANG['adtext'] 		= '购物券代码';
$_LANG['linkurl'] 		= '链接地址';
$_LANG['orderid'] 		= '排序';
$_LANG['posttime'] 		= '更新时间';
$_LANG['checkinfo'] 	= '是否开启';
$_LANG['starttime'] 	= '开始日期';
$_LANG['endtime'] 		= '结束日期';
$_LANG['contact'] 		= '联系人';
$_LANG['tel'] 			= '电话';
$_LANG['email'] 		= '邮箱';
$_LANG['hits'] 			= '点击次数';
$_LANG['order'] 		= '订单次数';
$_LANG['width'] 		= '宽度';
$_LANG['height'] 		= '高度';
$_LANG['money'] 		= '面额';
$_LANG['meet_money'] 		= '条件(达到多少钱可以使用)';
$_LANG['content'] 		= '内容';
$_LANG['integral'] 		= '所需积分';


/* js验证 */          
$_LANG['js']['classid']		= '请选择位置!';
$_LANG['js']['title']		= '请输入购物券标题!';
$_LANG['js']['starttime']	= '请输入开始日期!';
$_LANG['js']['endtime']		= '请输入结束日期!';
$_LANG['js']['width']		= '请输入购物券宽度!';
$_LANG['js']['height']		= '请输入购物券高度!';
$_LANG['js']['money']		= '请输入购物券面额!';
$_LANG['js']['meet_money']	= '请输入购物券条件!';
$_LANG['js']['picurl']		= '请上传图片!';

$_LANG['admode_list']['image']		= '图片';
$_LANG['admode_list']['flash']		= 'Flash';
$_LANG['admode_list']['writing']	= '文字';
$_LANG['admode_list']['html']		= 'HTML代码';

?>