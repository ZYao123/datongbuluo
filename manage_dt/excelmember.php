<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
  
//引入PHPExcel相关文件  
require_once "excel/PHPExcel.php";  
require_once 'excel/PHPExcel/IOFactory.php';  
require_once 'excel/PHPExcel/Writer/Excel5.php'; 


//新建 
$resultPHPExcel = new PHPExcel(); 
//设置参数 
//设值 
$resultPHPExcel->getActiveSheet()->setCellValue('A1', 'ID'); 
$resultPHPExcel->getActiveSheet()->setCellValue('B1', '用户名'); 
$resultPHPExcel->getActiveSheet()->setCellValue('C1', '性　别');
$resultPHPExcel->getActiveSheet()->setCellValue('D1', '邮　箱');
$resultPHPExcel->getActiveSheet()->setCellValue('E1', '手机号');
$resultPHPExcel->getActiveSheet()->setCellValue('F1', '积　分');
$resultPHPExcel->getActiveSheet()->setCellValue('G1', '会员等级');


$tbname	= '#@__member';
$where = '';
  
  
    if(@$starttime!='' && @$endtime!=''){
		if($endtime>=$starttime){
		   $where.=" and `$tbname`.`regtime`>='{$starttime}' and  `$tbname`.`regtime`<='{$endtime}' ";
		}
	   	
	}else if(@$starttime!='' && @$endtime==''){
		$where.=" and `$tbname`.`regtime`>='{$starttime}' ";
	
	}else if(@$starttime=='' && @$endtime!=''){
		$where.=" and `$tbname`.`regtime`<'{$endtime}' ";
	} 
	 
	if(isset($user_rank) && $user_rank>0){
	    $where.=" and `$tbname`.`user_rank`='".$user_rank."' ";	
	
    } 
	
	$sql = "SELECT id,username,sex,email,mobile,integral,user_rank  FROM `$tbname` where 1=1 ".$where;
	if(isset($keyword) && $keyword!='')
	{
		$sql .= " AND username like '%".$keyword."%'";
	}
    if(isset($checkid) && $checkid!=''){
	
	    $sql.=" AND id in(".$checkid.")";
	}
 
   $sql .= " order by id desc";
   $data = array();

   $data = $dosql->getall($sql);

   $i = 2; 
 
foreach($data as $item){
	
	switch ($item['sex'])
	{
		case 0:
		  $item['sex'] = '保密';
		  break;
		case 1:
		  $item['sex'] = '男';
		  break;
		case 2:
		  $item['sex'] = '女';
		  break;
		
	}
	
$resultPHPExcel->getActiveSheet()->setCellValue('A' . $i, $item['id']);
$resultPHPExcel->getActiveSheet()->setCellValue('B' . $i, $item['username']); 
$resultPHPExcel->getActiveSheet()->setCellValue('C' . $i, $item['sex']);
$resultPHPExcel->getActiveSheet()->setCellValue('D' . $i, $item['email']);  
$resultPHPExcel->getActiveSheet()->setCellValueExplicit('E' . $i, $item['mobile'],PHPExcel_Cell_DataType::TYPE_NUMERIC);
$resultPHPExcel->getActiveSheet()->setCellValue('F' . $i, $item['integral']);
$resultPHPExcel->getActiveSheet()->setCellValue('G' . $i, levelname($item['user_rank'])); 



  
$i++; 
}



$resultPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
$resultPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
$resultPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getStyle('E2')->getNumberFormat()->setFormatCode('000000'); 
$resultPHPExcel->getActiveSheet()->duplicateStyle( $resultPHPExcel->getActiveSheet()->getStyle('E2'), 'E2:E'.$i );
$resultPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$resultPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);




//设置导出文件名 
$outputFileName = '会员表.xls'; 
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