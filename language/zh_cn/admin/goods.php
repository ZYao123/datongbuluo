<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 字段信息 */
$_LANG['id'] 				= '编号';
$_LANG['classid'] 			= '分类';
$_LANG['parentid'] 			= '父类';
$_LANG['parentstr'] 		= '族类';
$_LANG['brandid'] 			= '品牌';
$_LANG['brandpid'] 			= '父类';
$_LANG['brandpstr'] 		= '族类';
$_LANG['title'] 			= '名称';
$_LANG['retitle'] 			= '副标题';
$_LANG['colorval'] 			= '颜色';
$_LANG['boldval'] 			= '加粗';
$_LANG['flag'] 				= '属性';
$_LANG['goodsNO'] 			= '货号';
$_LANG['payfreight'] 		= '是否为免运费商品';
$_LANG['weight'] 			= '重量';
$_LANG['salesprice'] 		= '本店售价';
$_LANG['buyprice'] 		    = '商品进价';
$_LANG['old_price'] 		= '商品原价';
$_LANG['need_integral'] 	= '所需积分';
$_LANG['promotionprice'] 	= '促销价格';
$_LANG['promotiontime'] 	= '促销时间';
$_LANG['housenum'] 			= '库存';
$_LANG['housewarn'] 		= '库存警告';
$_LANG['warnnum'] 			= '警告数量';
$_LANG['integral'] 			= '赠送积分';
$_LANG['author'] 			= '作者';
$_LANG['linkurl'] 			= '链接';
$_LANG['keywords'] 			= '商品关键词';
$_LANG['description'] 		= '商品简单描述';
$_LANG['content'] 			= '商品描述';
$_LANG['remark'] 			= '商家备注';
$_LANG['picurl'] 			= '图片';
$_LANG['picarr'] 			= '图组';
$_LANG['hits'] 				= '点击';
$_LANG['orderid'] 			= '排序';
$_LANG['posttime'] 			= '更新时间';
$_LANG['checkinfo'] 		= '上架';
$_LANG['delstate'] 			= '删除';
$_LANG['deltime'] 			= '删除时间';
$_LANG['ercode'] 			= '产品二维码';
$_LANG['norms'] 			= '规格';
$_LANG['ser_conent'] 		= '售后服务';
$_LANG['com_posttime']      ="评论时间";
$_LANG['com_tit']           ="评论标题";
$_LANG['com_goods_del']     ="删除评论";
$_LANG['con_username']      ="评论人";
$_LANG['com_edit']          ="查看详细";
$_LANG['com_con']           ="评论内容";
$_LANG['com_reply']         ="回复内容";
$_LANG['show']              ="显示";
$_LANG['goodbute']          ="商品属性";
$_LANG['view']              ="销售视图";
$_LANG['see']               ="查看";
$_LANG['reply']             ="回复";



/* lc_goodattr字段信息 */
$_LANG['goodsid'] 			= '商品ID';
$_LANG['attrname'] 			= '规格名称';
$_LANG['bgcolor'] 			= '背景颜色';
$_LANG['bgurl'] 			= '背景图片';
$_LANG['housenum'] 			= '库存';
$_LANG['price'] 			= '价格';
$_LANG['goodsNO'] 			= '货号';

$_LANG['attrname'] 			= '属性';
$_LANG['normname'] 			= '规格';


/* JS验证提示 */
$_LANG['js']['title']				= '请输入标题！';
$_LANG['js']['norm']				= '请选择商品规格！';
$_LANG['js']['classid']				= '请选择分类！';
$_LANG['js']['salesprice']			= '请输入本店售价！';
$_LANG['js']['salespriceformat']	= '本店售价格式错误！';
$_LANG['js']['buyprice']			= '请输入商品进价！';
$_LANG['js']['buypriceformat']	    = '商品进价格式错误！';
$_LANG['js']['goodsNOformat']		= '请输入商品货号！';
$_LANG['js']['housenumformat']		= '请输入商品库存！';

$_LANG['js']['integral']			= '请输入赠送积分！';
$_LANG['js']['promotionprice']		= '请正确的输入促销价格！';
$_LANG['js']['promotiontime']		= '请正确的输入促销时间！';
$_LANG['js']['weight']				= '请输入产品重量！';
$_LANG['js']['housenum']			= '请输入产品库存！';
$_LANG['js']['warnnum']				= '请正确输入库存警告数量！';
$_LANG['js']['content']				= '请正确商品描述！';
$_LANG['js']['attrname'] 			= '规格名称';
$_LANG['js']['bgcolor'] 			= '背景颜色';
$_LANG['js']['bgurl'] 				= '背景图片';
$_LANG['js']['housenum'] 			= '库存';
$_LANG['js']['price'] 				= '价格';
$_LANG['js']['goodsNO'] 			= '货号';
$_LANG['js']['wz1'] 				= '请选择完整的数据！';
$_LANG['js']['tips_y']				= '确定要显示此条评论吗？';
$_LANG['js']['tips_n']				= '确定要不显示此条评论吗？';

/* 分页信息 */
$_LANG['page']['goodsNO'] 			= '货号';

/* 列表页导航 */
$_LANG['total'] 					= '全部';
$_LANG['oos'] 						= '缺货产品';
$_LANG['warn'] 						= '库存警告';
$_LANG['com'] 						= '评论';
$_LANG['showcom'] 					= '显示评论';
$_LANG['hidecom'] 					= '未显示评论';

//$_LANG['goods_tips']['weight'] 		= 'g 已克录入，程序自动转换为千克。';
$_LANG['goods_tips']['weight'] 		= '千克';
$_LANG['goods_tips']['integral'] 	= '默认为空，不赠送积分。';
$_LANG['goods_tips']['price'] 	    = '单位元,可带2位长度的小数';
$_LANG['goods_tips']['need_integral'] 	= '有值代表是积分换购商品。';
?>
