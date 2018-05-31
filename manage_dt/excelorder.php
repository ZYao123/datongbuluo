<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
  
//引入PHPExcel相关文件  
require_once "excel/PHPExcel.php";  
require_once 'excel/PHPExcel/IOFactory.php';  
require_once 'excel/PHPExcel/Writer/Excel5.php'; 

function postname($classid){
	global $dosql;
	$row = $dosql->getone("select `classname` from `#@__postmode` where classid='".$classid."'");
	if(isset($row['classname'])){
		return $row['classname'];
	}else{
	  return '';	
	}
}


//新建 
$resultPHPExcel = new PHPExcel(); 
//设置参数 
//设值 
$resultPHPExcel->getActiveSheet()->setCellValue('A1', 'ID'); 
$resultPHPExcel->getActiveSheet()->setCellValue('B1', '用户名'); 
$resultPHPExcel->getActiveSheet()->setCellValue('C1', '订单编号');
$resultPHPExcel->getActiveSheet()->setCellValue('D1', '支付金额'); 
$resultPHPExcel->getActiveSheet()->setCellValue('E1', '运 费');
$resultPHPExcel->getActiveSheet()->setCellValue('F1', '购买时间');
$resultPHPExcel->getActiveSheet()->setCellValue('G1', '发货时间');
$resultPHPExcel->getActiveSheet()->setCellValue('H1', '完成时间');
$resultPHPExcel->getActiveSheet()->setCellValue('I1', '订单状态');
$resultPHPExcel->getActiveSheet()->setCellValue('J1', '快递名称');
$resultPHPExcel->getActiveSheet()->setCellValue('K1', '快递单号');
$resultPHPExcel->getActiveSheet()->setCellValue('L1', '订单备注');
$resultPHPExcel->getActiveSheet()->setCellValue('M1', '收件人');
$resultPHPExcel->getActiveSheet()->setCellValue('N1', '收件人手机');
$resultPHPExcel->getActiveSheet()->setCellValue('O1', '收件人省份');
$resultPHPExcel->getActiveSheet()->setCellValue('P1', '收件人城市');
$resultPHPExcel->getActiveSheet()->setCellValue('Q1', '收件人区县');
$resultPHPExcel->getActiveSheet()->setCellValue('R1', '收件人街道地址');
$resultPHPExcel->getActiveSheet()->setCellValue('S1', '商品名称');

$tbname	= '#@__goodsorder';
$where = '';
  if(@$starttime!='' && @$endtime!=''){
		if($endtime>=$starttime){
		   $where.=" and `$tbname`.`posttime`>='{$starttime}' and  `$tbname`.`posttime`<='{$endtime}' ";		  
		}
	}else if(@$starttime!='' && @$endtime==''){
		$where.=" and `$tbname`.`posttime`>='{$starttime}' ";	
	}else if(@$starttime=='' && @$endtime!=''){	
		$where.=" and `$tbname`.`posttime`<'{$endtime}' ";
	}
 
   if(@$checkinfo != '')
		{
			if ($checkinfo == '-1')
			{
				$where .= " and  checkinfo not in(0,1,2,3,4,5,6,7)";
			}elseif($checkinfo == '5')
			{
				$where .= " and  checkinfo  in(5,6)";
			}elseif($checkinfo == '4')
			{
				$where .= " and  checkinfo  in(4,7)";
			}
			else
			{
				$where .= " and checkinfo=".$checkinfo;
			}
		}
  if(@$rec_name != '')
  {
	 $where .= " AND rec_name LIKE '%".$rec_name."%'";
	
  }
  if(@$orderlistnum != '')
  {
	 $where .= " AND orderlistnum LIKE '%".$orderlistnum."%'";
  }
  
  if(isset($checkid) && $checkid!=''){
	$where.=' AND id in('.$checkid.')';  
  }
 $sql = "SELECT * FROM `$tbname` where delstate='' ".$where." order by id desc";

$data = array();

$data = $dosql->getall($sql);

$i = 2; 
 
foreach($data as $item){
	
	
	$posttime = $item['posttime']>0?date('Y-m-d H:i:s',$item['posttime']):'';
	$ReceiptTime = $item['ReceiptTime']>0?date('Y-m-d H:i:s',$item['ReceiptTime']):'';
	$sendtime = $item['sendtime']>0?date('Y-m-d H:i:s',$item['sendtime']):'';
	
	switch ($item['checkinfo'])
	{
		case 0:
		  $item['checkinfo'] = '待付款';
		  break;
		case 1:
		  $item['checkinfo'] = '待发货';
		  break;
		case 2:
		  $item['checkinfo'] = '待收货';
		  break;
		case 3:
		 $item['checkinfo'] = '已收货';
		  break;
		case 4:
		  $item['checkinfo'] = '需要退货';
		  break;
		case 5:
		 $item['checkinfo'] = '需要退款';
		  break;
		case 6:
		  $item['checkinfo'] = '已退款';
		  break;        
		case 7:
		  $item['checkinfo'] = '已退货';
		  break;
	}
	
	if($item['addressstr']!=''){
		$addressstr = explode('&',$item['addressstr']);
	}
    $prov = isset($addressstr[1])?$addressstr[1]:''; 
	$city = isset($addressstr[2])?$addressstr[2]:''; 
	$country = isset($addressstr[3])?$addressstr[3]:''; 
	$address = isset($addressstr[4])?$addressstr[4]:''; 

$resultPHPExcel->getActiveSheet()->setCellValue('A' . $i, $item['id']);
$resultPHPExcel->getActiveSheet()->setCellValue('B' . $i, $item['username']); 
$resultPHPExcel->getActiveSheet()->setCellValueExplicit('C' . $i, $item['orderlistnum'],PHPExcel_Cell_DataType::TYPE_NUMERIC);
$resultPHPExcel->getActiveSheet()->setCellValue('D' . $i, $item['orderamount']);
$resultPHPExcel->getActiveSheet()->setCellValue('E' . $i, $item['cost']);   
$resultPHPExcel->getActiveSheet()->setCellValue('F' . $i, $posttime);
$resultPHPExcel->getActiveSheet()->setCellValue('G' . $i, $sendtime); 
$resultPHPExcel->getActiveSheet()->setCellValue('H' . $i, $ReceiptTime);
$resultPHPExcel->getActiveSheet()->setCellValue('I' . $i, $item['checkinfo']);
$resultPHPExcel->getActiveSheet()->setCellValue('J' . $i, postname($item['Courierid'])); 
$resultPHPExcel->getActiveSheet()->setCellValue('K' . $i, $item['postid']);
$resultPHPExcel->getActiveSheet()->setCellValue('L' . $i, $item['message']);
$resultPHPExcel->getActiveSheet()->setCellValue('M' . $i, $item['rec_name']); 
$resultPHPExcel->getActiveSheet()->setCellValue('N' . $i, $item['phone']);
$resultPHPExcel->getActiveSheet()->setCellValue('O' . $i, $prov); 
$resultPHPExcel->getActiveSheet()->setCellValue('P' . $i, $city); 
$resultPHPExcel->getActiveSheet()->setCellValue('Q' . $i, $country); 
$resultPHPExcel->getActiveSheet()->setCellValue('R' . $i, $address); 
$resultPHPExcel->getActiveSheet()->setCellValue('S' . $i, ordergoods($item['orderlistnum'])); 

  
$i++; 
}



$resultPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
$resultPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getStyle('C2')->getNumberFormat()->setFormatCode('000000'); 
$resultPHPExcel->getActiveSheet()->duplicateStyle( $resultPHPExcel->getActiveSheet()->getStyle('C2'), 'C2:C'.$i );
$resultPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$resultPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$resultPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$resultPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$resultPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
$resultPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$resultPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$resultPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
$resultPHPExcel->getActiveSheet()->getStyle('K2')->getNumberFormat()->setFormatCode('000000'); 
$resultPHPExcel->getActiveSheet()->duplicateStyle( $resultPHPExcel->getActiveSheet()->getStyle('K2'), 'K2:K'.$i );
$resultPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
$resultPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(40);
$resultPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);
$resultPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getStyle('N2')->getNumberFormat()->setFormatCode('000000'); 
$resultPHPExcel->getActiveSheet()->duplicateStyle( $resultPHPExcel->getActiveSheet()->getStyle('N2'), 'N2:N'.$i );
$resultPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(40);


//设置导出文件名 
$outputFileName = '商品订单.xls'; 
$xlsWriter = new PHPExcel_Writer_Excel5($resultPHPExcel); 
//ob_start(); ob_flush(); 
header("Content-Type: application/force-download"); 
header("Content-Type: application/octet-stream"); 
header("Content-Type: application/download"); 
header('Content-Disposition:inline;filename="'.$outputFileName.'"'); 
header("Content-Transfer-Encoding: binary"); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Pragma: no-cache"); 
$xlsWriter->save( "php://output" );

?>