<?php

if (!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 系统设置 */
$privilege['link']    			 = array('link_manage', 'link_add', 'link_edit', 'link_del');
$privilege['area']    			 = array('area_manage', 'area_add', 'area_edit', 'area_del');
$privilege['shop_pay']    		 = array('shop_pay_manage', 'shop_pay_add', 'shop_pay_edit', 'shop_pay_del');
$privilege['Shipping']    		 = array('shipping_manage', 'shipping_add', 'shipping_edit', 'shipping_del');
$privilege['shop_ship']    		 = array('ship_manage', 'ship_add', 'ship_edit', 'ship_del','ship_Setup');
$privilege['shop_set']    		 = array('shop_manage', 'shop_add', 'shop_edit');
$privilege['select_template']    = array('template_manage', 'template_setup');
$privilege['nav']    			 = array('nav_manage', 'nav_add', 'nav_edit', 'nav_del');

/* 数据库管理 */
$privilege['db_backup']          = array('backup_manage');
$privilege['db_restore']         = array('restore_manage');
$privilege['db_sql']			 = array('sql_manage');

/* 权限管理 */
$privilege['admin_log']          = array('log_manage', 'log_del');
$privilege['admin_list']         = array('admin_manage', 'admin_add', 'admin_edit', 'admin_del', 'allot_priv');
$privilege['admin_role']         = array('role_manage', 'role_add', 'role_edit', 'role_del');

/* 文章管理 */
$privilege['article_category'] 	 = array('article_category_manage', 'article_category_add', 'article_category_edit', 'article_category_del');
$privilege['article'] 			 = array('article_manage', 'article_add', 'article_edit', 'article_del');

/* 广告管理 */
$privilege['ads_category'] 		 = array('ads_category_manage', 'ads_category_add', 'ads_category_edit', 'ads_category_del');
$privilege['ads_list'] 			 = array('ads_list_manage', 'ads_list_add', 'ads_list_edit', 'ads_list_del');

/* 订单管理 */
$privilege['order_list']		 = array('order_manage', 'order_add', 'order_edit', 'order_del', 'order_Invalid');

/* 商品管理 */
$privilege['goods_list']		 = array('goods_list_manage', 'goods_list_add', 'goods_list_edit', 'goods_list_del');
$privilege['goods_category']	 = array('goodscat_manage', 'goodscat_add', 'goodscat_edit', 'goodscat_del');
$privilege['goods_type']		 = array('goodstype_manage', 'goodstype_add', 'goodstype_edit', 'goodstype_del');
$privilege['goods_norm']		 = array('norm_manage', 'norm_add', 'norm_edit', 'norm_del');
$privilege['goods_brand']		 = array('goodsbrand_manage', 'goodsbrand_add', 'goodsbrand_edit', 'goodsbrand_del');
$privilege['goods_list']		 = array('goods_manage', 'goods_add', 'goods_edit', 'goods_del');
$privilege['goods_recycle']		 = array('recycle_manage', 'recycle_edit', 'recycle_del');
$privilege['goods_attribute']	 = array('goodsattr_manage', 'goodsattr_add', 'goodsattr_del');

/*会员管理*/
$privilege['member_list']        = array('member_list_manage', 'member_list_add', 'member_list_edit', 'member_list_del');
$privilege['member_level']       = array('member_level_manage', 'member_level_add', 'member_level_edit', 'member_level_del');
$privilege['member_integral']    = array('member_integral_manage');
/*BUG 反馈*/
$privilege['bug_list']           = array('bug_list', 'bug_edit', 'bug_del'); 
$privilege['gbook']              = array('gbook', 'gbook_edit', 'gbook_del'); 
/* 购物券*/
$privilege['point']		         = array('point_manage', 'point_add', 'point_edit','point_del');
$privilege['point_site']         = array('point_site_manage', 'point_sit_add', 'point_sit_edit','point_sit_del');

/*移动管理*/
/*商品管理*/
$privilege['phone_goods_list']	 = array('phone_goods_manage', 'phone_goods_add', 'phone_goods_edit', 'phone_goods_del');
$privilege['phone_goods_recycle']= array('phone_recycle_manage', 'phone_recycle_edit', 'phone_recycle_del');
/* 订单管理 */
$privilege['phone_order_list']	 = array('phone_order_manage', 'phone_order_add', 'phone_order_edit', 'phone_order_del', 'phone_order_Invalid');
/*会员管理*/
$privilege['phone_member_list']  = array('phone_member_manage', 'phone_member_add', 'phone_member_edit', 'phone_member_del');
/*移动管理END*/


/*上传图片管理*/
$privilege['uplodepic_list']     = array('uplodepic_list','uplodepic_edit');
$privilege['uplodepic_clear']    = array('uplodepic_clear','uplodepic_edit','uplodepic_del');

?>