<?php	
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(ADMIN_INC . '/inc_menu.php');
include_once(ADMIN_INC . '/inc_privilege.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/member.php');


/* 此页公共变量 */
$tbname	= '#@__integral_notes';
$act 	= isset($act) ? $act : 'list';

if(isset($phone_sign_s))
{
	 $_SESSION['phone_sign']=$phone_sign_s ? 1: 0;//1:移动管理 0:所有
}

/* 会员列表 */
if($act == 'list')
{
	//验证权限
	$_SESSION['phone_sign']==1 ? chk_privilege("phone_member_manage") : chk_privilege("member_list_manage");
	 
	$info = array();
	$sql = "SELECT i.*,m.username,m.email,m.mobile  FROM `$tbname` as i left join `#@__member` as m on i.uid=m.id where 1=1 ";
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND m.username like '%".$keyword."%'";
	}
	else
	{
		$keyword = '';
		
	}
	
	if(@$kstime!='' && @$jstime!=''){
		$kstime = strtotime($kstime.' 00:00:00');
		$jstime = strtotime($jstime.' 23:59:59');
		if($jstime>=$kstime){
		   $sql.=" and i.`posttime`>='{$kstime}' and  i.`posttime`<='{$jstime}' ";	
		   
		}else{
			echo '<script>
			   alert("请选择正确的时区间");
			 location.href= history.back();
			</script>';	 
    	}
	   	
	}else if(@$kstime!='' && @$jstime==''){
		$kstime = strtotime($kstime.' 00:00:00');
		$sql.=" and i.`posttime`>='{$kstime}' ";
	}else if(@$kstime=='' && @$jstime!=''){
		$jstime = strtotime($jstime.' 23:59:59');
		$sql.=" and i.`posttime`<='{$jstime}'";
		
	}
	
	if(isset($zt) && $zt==1){
		$sql.=' and i.zt=1 ';
		$smarty->assign("zt", 1);
	}else if(isset($zt) && $zt==2){
		$sql.=' and i.zt=2 ';
		$smarty->assign("zt", 2);
	}
		
	
	$sql .= " {$public_where} order by i.id desc";

	$info=$dopage->GetPage($sql,14);
	$smarty->assign("js"  , $_LANG['js']);
	$smarty->assign("lang", $_LANG);
	$smarty->assign("info", $info);
	$smarty->assign("from", encode64(getcururl()));	//页面来源
	$smarty->assign("keyword", $keyword);
	$smarty->assign("page", $dopage->getlist());
	$smarty->display('member_integral.html');
}



?>