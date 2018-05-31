<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/uplodepic.php');

/* 此页公共变量 */
$tbname	  = '#@__uploads';
$act 	  = isset($act) ? $act : 'list';
$parentid = isset($parentid) ? $parentid : 0;
$goodsid  = isset($goodsid) ? $goodsid : 0;
/* 产品品牌列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("uplodepic_list");
	
	$info = array();
	$sql = "SELECT * FROM `$tbname` ";
	$info = $dopage->getpage($sql);
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->display('uplodepic.html');
}

/* 修改品牌界面 */
if ($act == 'clear')
{
	//验证权限
	chk_privilege("uplodepic_clear");
	$tbl_array=array(
	      'ads_list'         => array('picurl'),
		  'article'          => array('content','picurl','phone_content','phone_picurl'),
		  'article_category' => array('lc_content'),
		  'bug'              => array('content'),
		  'gbook'   		 => array('lc_content'),
		  'goods'			 => array('content','picurl','picarr','phone_picurl','phone_content'),
		  'goodscategory'    => array('picurl'),
		  'goodsattr_value'  => array('pic'),
		  'goodsbrand'       => array('logo'),
		  'goodsnorm_value'  => array('pic'),
		  'link'             => array('picurl'),
		  'member'           => array('picurl'),
		  'point'            => array('picurl','content')
	  );
	$img_txt = $cfg_upload_img_type;
	$str_pic = '';
	foreach($tbl_array as $k=>$tablename){
		
		foreach($tablename as $vo){
			
			$dosql->Execute("SELECT `$vo` FROM `#@__$k`");
			while($row = $dosql->GetArray())
		    {
			     if($vo == 'content' || $vo == 'lc_content' || $vo == 'phone_content')
				 {
					 preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:['.$img_txt.']))[\'|\"].*?[\/]?>/', $row[$vo], $match);
						if(!empty($match[1]) && is_array($match[1]))
						{
							foreach($match[1] as $path)
							{
								$str_pic .= "'".$path."'".',';
								preg_match('/uploads\/image\/(.+\.(jpg|gif|bmp|bnp|png))/', $path, $path2);
								$str_pic .= "'".$path2[0]."'".',';
							}
						}
					 
				 }else if($vo == 'picarr'){
					 $voarr = string2array($row[$vo]);
					 if(!empty($voarr)){ 
					
					   $str_pic .= '\''.implode('\',\'',$voarr).'\',';
					 }
				 }else{
					 if($row[$vo]!=''){
					    $str_pic .= "'".$row[$vo]."'".',';
					 }
				 }
		    }
		}	
	}
	$info = array();
	$str_pic = str_replace_once(',','',$str_pic);

	$sql = "SELECT * FROM `$tbname` where path not in (".$str_pic.")";
	$info = $dopage->getpage($sql);
	
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("page", $dopage->getlist());
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	
	$smarty->assign("lang"      , $_LANG);
	$smarty->display('uplodepic_clear.html');
	



}


/* 删除商品 */
if ($act == 'subdel')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("uplodepic_del") : chk_privilege("uplodepic_del");
	if(empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	
	if (!is_array($id))
	{
		$id = explode(",", $id);
	}	
    $sql="DELETE FROM `$tbname` ";
	foreach ($id as $v)
	{
		$r = $dosql->getone("SELECT `name`,`path` FROM `$tbname` WHERE `id` = $v ");
		$name = empty($r['name']) ? '' : $r['name'];
		//添加日志
		insert_log($name, 'del', $content);
		@unlink('../'.$r['path']);
		$dosql->execnonequery($sql." WHERE `id` = $v");
	}
	$from = dencode64($from);
	header("location:$from");
	exit();
}
?>