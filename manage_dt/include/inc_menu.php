<?php
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}


/* 系统设置 */
$module['01_system']['shop_set']     		= 'shopconfig.php';
/*$module['01_system']['shop_pay']   			= 'payment.php';*/
$module['01_system']['shop_ship']			= 'shopship.php';
$module['01_system']['area']				= 'area.php?act=list';
$module['01_system']['Shipping']			= 'Shipping.php?act=list';
$module['01_system']['link']				= 'link.php?act=list';
$module['01_system']['nav']					= 'nav.php?act=list';
//$module['01_system']['email_set']			= 'developer.php';
//$module['01_system']['site_map']			= 'developer.php';

/* 模板管理 
$module['01_system']['select_template']   = 'template.php?act=list';*/
//$module['02_template']['set_lanage']   	= 'developer.php';
//$module['02_template']['email_template']	= 'developer.php';
//$module['02_template']['sms_template']	= 'developer.php';

/* 数据库管理 
$module['03_db']['db_backup']             	= 'database.php?act=backup';
$module['03_db']['db_restore']              = 'database.php?act=restore';
$module['03_db']['db_sql']            		= 'database.php?act=sql';
*/

/* 权限管理 */
$module['04_privilege']['admin_log']        = 'log.php?act=list';
$module['04_privilege']['admin_list']       = 'privilege.php?act=list';
$module['04_privilege']['admin_role']       = 'role.php?act=list';

/* 会员管理 */
$module['05_member']['member_list'] 		= 'member.php?act=list&phone_sign_s=0';
$module['05_member']['member_level'] 		= 'member_level.php?act=list&phone_sign_s=0';
//$module['05_member']['member_integral'] 	= 'member_integral.php?act=list&phone_sign_s=0';
//$module['05_member']['member_add'] 		= 'developer.php';
//$module['05_member']['member_level'] 		= 'developer.php';
//$module['05_member']['member_post'] 		= 'developer.php';
//$module['05_member']['money_manage'] 		= 'developer.php';

/* 文章管理 */
$module['06_article']['article_category'] 	= 'article_category.php?act=list';
$module['06_article']['article'] 			= 'article.php?act=list';

/* 报表统计 */
$module['00_custom']['client_statistics']= 'chart_user.php';
$module['00_custom']['order_statistics'] = 'chart_order.php';
//$module['07_statement']['sell_detail'] 	= 'developer.php';
//$module['07_statement']['sell_top'] 		= 'developer.php';

/* 广告管理 */
$module['06_article']['ads_category']    = 'ads_category.php?act=list';
$module['06_article']['ads_list'] 	     = 'ads_list.php?act=list';

/* 订单管理 */
$module['09_orders']['order_list'] 			= 'order.php?act=list&checkinfo=1&phone_sign_s=0';
//$module['09_orders']['order_select'] 		= 'developer.php';
//$module['09_orders']['order_merge'] 		= 'developer.php';
//$module['09_orders']['stockout'] 			= 'developer.php';
//$module['09_orders']['ship_list'] 		= 'developer.php';
//$module['09_orders']['return_goods'] 		= 'developer.php';

/* 商品管理 */
$module['10_goods']['goods_list'] 			= 'goods.php?act=list&phone_sign_s=0';
$module['10_goods']['goods_category'] 		= 'goodscategory.php?act=list';
$module['10_goods']['goods_type'] 			= 'goodstype.php?act=list';
$module['10_goods']['goods_norm'] 			= 'goodsnorm.php?act=list';
/*$module['10_goods']['goods_brand'] 			= 'goodsbrand.php?act=list';*/
$module['10_goods']['goods_recycle'] 		= 'goods.php?act=recycle&phone_sign_s=0';
$module['10_goods']['goods_attribute'] 		= 'goodsattribute.php?act=list';//其他属性
/* BUG反馈
$module['11_bug']['bug_list'] 				= 'bug.php?act=list';
*/
/*留言列表
$module['11_bug']['gbook'] 				    = 'gbook.php?act=list';
*/
/*购物券
$module['10_goods']['point'] 		        = 'point.php?act=list';//点券
$module['10_goods']['point_site'] 		    = 'point_size.php?act=list';//位置
*/
/*移动管理
$module['13_phone']['phone_goods_list'] 		    = 'goods.php?act=list&phone_sign_s=1';//位置
$module['13_phone']['phone_goods_recycle'] 		    = 'goods.php?act=recycle&phone_sign_s=1';
$module['13_phone']['phone_order_list'] 		    = 'order.php?act=list&checkinfo=1&phone_sign_s=1';//位置
$module['13_phone']['phone_member_list'] 		    = 'member.php?act=list&phone_sign_s=1';
*/
/*移动管理END*/

/*上传图片管理*/
$module['14_uplodepic']['uplodepic_list'] 		    = 'uplodepic.php?act=list';//列表
$module['14_uplodepic']['uplodepic_clear'] 		    = 'uplodepic.php?act=clear';//未使用图片

?>