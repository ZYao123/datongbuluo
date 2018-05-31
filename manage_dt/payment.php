<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/payment.php');

/* 此页公共变量 */
$tbname	  = '#@__payment';
$act 	  = isset($act) ? $act : 'list';

/* 列表 */
if($act == 'list')
{
	//验证权限
	chk_privilege("shop_pay_manage");
	
	/* 取得插件文件中的支付方式 */
    $module = read_module('../include/module/payment');
	$j=0;
    for ($i = 0; $i < count($module); $i++)
    {
		$code = $module[$i]['code'];
		$module[$i]['pay_code'] = $module[$i]['code'];
		$info = array();
		$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `code`='".$code."'");
		if(is_array($info))
		{
			$j++;
			$module[$i]['id'] 		= $info['id'];
			$module[$i]['name'] 	= $info['name'];
			$module[$i]['is_cod'] 	= $info['is_cod'];
			$module[$i]['depict'] 	= $info['depict'];
			$module[$i]['orderid'] 	= $info['orderid'];
			$module[$i]['install'] 	= '1';
		}
		else
		{
			$module[$i]['id']		= '0';
			$module[$i]['name'] 	= $_LANG[$module[$i]['code']];
			$module[$i]['depict']	= $_LANG[$module[$i]['depict']];
			$module[$i]['orderid'] 	= '0';
			$module[$i]['install'] 	= '0';
		}
	}

	$smarty->assign('lang'	, $_LANG);
	$smarty->assign('module', $module);
	$smarty->assign('page'	, count($module));
	$smarty->assign('j'		, $j);
	$smarty->display('payment.html');
}
/* 安装界面 */
elseif($act == 'install')
{
    /* 取相应插件信息 */
	$set_module = true;
	include_once(LCSHOP_INC.'include/module/payment/' . $code . '.php');
	$data = $module[0];
	
	if(isset($id) && $id>0)
	{
		//验证权限
		chk_privilege("shop_pay_edit");
	
		$info = array();
		$info = $dosql->getone("SELECT * FROM `$tbname` WHERE `id`=$id");
		$pay['pay_id']    	= $info['id'];
		$pay['pay_code']    = $info['code'];
		$pay['pay_name']    = $info['name'];
		$pay['pay_depict']  = $info['depict'];
		$pay['is_cod']      = $info['is_cod'];
		$pay['is_online']   = $info['is_online'];
		$pay['pay_orderid'] = $info['orderid'];
		
		$info['config']  = string2array($info['config']);
		$pay['pay_config']  = $data['config'];
		foreach ($data['config'] AS $key => $value)
		{
			$pay['pay_config'][$key]['value'] = $info['config'][$pay['pay_config'][$key]['name']];
			$pay['pay_config'][$key]['lang']  = $_LANG[$data['config'][$key]['name']];
		}
	}
	else
	{
		//验证权限
		chk_privilege("shop_pay_add");
		
		$pay['pay_id']    	= '0';
		$pay['pay_code']    = $data['code'];
		$pay['pay_name']    = $_LANG[$data['code']];
		$pay['pay_depict']  = $_LANG[$data['depict']];
		$pay['is_cod']      = $data['is_cod'];
		$pay['is_online']   = $data['is_online'];
		$pay['pay_config']  = $data['config'];
		$pay['pay_orderid'] = getorderid($tbname);
		foreach ($data['config'] AS $key => $value)
		{
			$pay['pay_config'][$key]['lang'] = $_LANG[$data['config'][$key]['name']];
		}
	}
    

    $smarty->assign('pay'	, $pay);
	$smarty->assign('lang'	, $_LANG);
    $smarty->display('payment_add.html');
}
/* 执行 编辑 安装 */
elseif($act == 'subinstall')
{
	
	if($name=='')
	{
		showmsg($_LANG['js']['name'], '1');
		exit();
	}
	if($depict=='')
	{
		showmsg($_LANG['js']['depict'], '1');
		exit();
	}
	
	if(isset($config))
	{
		$config = array2string($config);
	}
	
	if(isset($id) && $id>0)
	{
		//验证权限
		chk_privilege("shop_pay_edit");
		$install_str = "edit";
		$sql = "UPDATE `$tbname` SET `code`='$code', `name`='$name', `depict`='$depict', `orderid`='$orderid', `config`='$config', `is_cod`='$is_cod', `is_online`='$is_online' WHERE `id`=$id";
	}
	else
	{
		//验证权限
		chk_privilege("shop_pay_add");
		$install_str = "install";
		$sql = "INSERT INTO `$tbname` (`code`, `name`, `depict`, `orderid`, `config`, `is_cod`, `is_online`) VALUES ('$code', '$name', '$depict', '$orderid', '$config', '$is_cod', '$is_online')";
	}
		   
	if($dosql->ExecNoneQuery($sql))
	{
		$id or $id = $dosql->GetLastID();
		//添加日志
		insert_log($name, $install_str, 'payment');
		showsucceed($_LANG['php']['add_succeed'], '',"payment.php?act=install&code={$code}&id={$id}");
		exit();
	}
}
/* 卸载 */
if ($act == 'subdel')
{
	//验证权限
	chk_privilege("shop_pay_del");
	
	if(!isset($id) || empty($id))
	{
		showmsg($_LANG['php']['inexistence'], '1');
		exit();
	}
	$r = $dosql->getone("SELECT `name` FROM `$tbname` WHERE `id` = $id ");
	$name = empty($r['name']) ? '' : $r['name'];
		
	if($dosql->execnonequery("DELETE FROM `$tbname` WHERE `id` = $id "))
	{
		//添加日志
		insert_log($name, 'uninstall', 'payment');
		header("location:payment.php?act=list");
		exit();
	}
}
/* 更新排序 */
if ($act == 'uporder')
{
	foreach($id as $k => $v)
	{
		$dosql->ExecNoneQuery("UPDATE `$tbname` SET orderid=".$orderid[$k]." WHERE id=$v");
	}
	header("location:payment.php?act=list");
}
?>
