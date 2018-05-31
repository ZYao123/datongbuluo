<?php
/***文章数据调用***/

/**
 * 返回文章分类
 *
 * @param   int      $c_id   父类id
 * @param   int      $num   显示数目
 */
function GetArticle_type($c_id=false,$num=false)
{
	global $dosql;
	$where="";
	$c_id and $where.=" AND parentid='{$c_id}' ";
	$limit=$num ? " LIMIT {$num} ": "";
	$sql = "select classname,id,description,lc_content from #@__article_category where `checkinfo`='true' {$where}  order by  orderid desc {$limit}";
	$result=$dosql->getall($sql);
	return $result;
}
/**
 * 返回文章列表
 *
 * @param   int      $c_id   类别id
 * @param   int      $num   显示数目
 * @param   string      $img   图片
 */
function GetArticle_list($c_id=false,$num=false,$img=false,$phone=false,$page=false)
{
	global $dosql,$dopage,$smarty;
	$where="";
	$c_id and $where.=" AND classid='{$c_id}' or parentstr like '%,{$c_id},%'";

	$img and $where.=" AND picurl!='' ";
	($page and $num) or $limit=$num ? " LIMIT {$num} ": "";
	$phone and  $where.=" AND `#@__article`.phone=1";
	$sql="SELECT id,title,classid,picurl,description,posttime,linkurl,content,phone_content,phone_picurl FROM `#@__article` WHERE  `checkinfo`='true' {$where} ORDER BY orderid DESC {$limit}";
	if($page and $num)
	{
		$result =$dopage->GetPage($sql,$num);
		$page=$dopage->GetList1_S();
		$result=array("info"=>$result,"page"=>$page);
	}else
	{
		$result = $dosql->getall($sql);
	}
	return $result;
}

/**
 * 返回某一大类下小类文章
 *
 * @param   int      $c_id   类别id
 * @param   int      $num   显示数目
 * @param   string      $img   图片
 */
function GetArticle_lists($p_id=false,$num=false)
{
	global $dosql;
	$where="";
	$p_id and $where.=" AND parentid='{$p_id}' ";
	$limit=$num ? " LIMIT {$num} ": "";
	$bottom = array();
	$dosql->execute("select id,classname from `#@__article_category` where  checkinfo='true' {$where} order by orderid DESC $limit");
	$i=0;
	while($row = $dosql->GetArray())
	{
		$i++;
		$bottom[$i]['classname'] = $row['classname'];
		$bottom[$i]['list'] 	 = $dosql->getall("select id,title,classid,linkurl from `#@__article` where classid = ".$row['id']." and checkinfo='true' order by orderid DESC LIMIT 0,4", $row['id']);
	}
	
	return $bottom;
}

/**
 * 返回文章分类内容
 *
 * @param   int      $c_id   分类ID
 */
function GetArticle_type_show($c_id=false)
{
	global $dosql;
	$where="";
	if(!$c_id)
	{
		echo "错误请求";die;
	}
	$sql = "select * from #@__article_category where `checkinfo`='true' AND id='{$c_id}' ";
	$result=$dosql->getone($sql);
	return $result;
}
/**
 * 返回文章内容
 *
 * @param   int      $c_id   分类ID
 */
function GetArticle_show($c_id=false,$id=false)
{
	global $dosql;
	$where="";
	if(!$c_id and !$id)
	{
		echo "错误请求";die;
	}
	$where="1=1 ";
	$c_id and $where.=" and classid = '{$c_id}'";
	$id and $where.=" and id = '{$id}'";
	$sql = "select * from #@__article   where  {$where} and checkinfo='true' order by orderid";
	$result=$dosql->getone($sql);
	return $result;
}
?>