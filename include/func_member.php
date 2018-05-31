<?php
/**会员***/
/**获取收藏列表详细**/
function get_collect($num=0,$page=false,$phone=false)
{
	global $dosql,$dopage;
	$result = array();
	($page and $num) or $limit=$num ? " LIMIT {$num} ": "";
	$now=GetMkTime(date("Y-m-d"));
	$sql = "SELECT #@__goods.id,#@__goods.title,#@__goods.picurl,
			#@__goods.classid,
			#@__goods.phone_picurl,
			#@__goodscategory.classname AS class_name,
			case when min(`#@__goodsattr`.price)=max(`#@__goodsattr`.price) then max(`#@__goodsattr`.price)
			else Concat(min(`#@__goodsattr`.price),'-',max(`#@__goodsattr`.price)) 
			end as salesprice
			FROM `#@__member_good` RIGHT JOIN #@__goods ON #@__goods.id=`#@__member_good`.g_id  
			LEFT JOIN (#@__goodscategory,`#@__goodsattr`) ON #@__goods.classid=#@__goodscategory.id
			AND `#@__goods`.id=`#@__goodsattr`.goodsid
			WHERE `#@__member_good`.m_id = '{$_COOKIE['userid']}' AND `#@__member_good`.type=0  group by #@__goods.id {$limit}";
	if($page and $num)
	{
		$result =$dopage->GetPage($sql,$num);
		if($phone)
		{
			$page=$dopage->getlist();
		}else
		{
			$page=$dopage->GetList1_S();
		}
		
		$result and $result=array("info"=>$result,"page"=>$page);
	}else
	{
		$result = $dosql->getall($sql);
		
	}

	return $result;
}
/*我的点评*/
function GetEvaluationList($num=0,$page=false,$phone=false)
{
	global $dosql,$dopage;
	$result = array();
	($page and $num) or $limit=$num ? " LIMIT {$num} ": "";
	$now=GetMkTime(date("Y-m-d"));
	$sql = "SELECT #@__goods.id,#@__goods.title,#@__goods.picurl,
			#@__goods.classid,
			#@__goods.phone_picurl,
			case when min(`#@__goodsattr`.price)=max(`#@__goodsattr`.price) then max(`#@__goodsattr`.price)
			else Concat(min(`#@__goodsattr`.price),'-',max(`#@__goodsattr`.price)) 
			end as salesprice,
			`#@__usercomment`.title as u_title,
			`#@__usercomment`.content,
			`#@__usercomment`.reply,
			`#@__usercomment`.posttime
			
			FROM `#@__usercomment` RIGHT JOIN #@__goods ON #@__goods.id=`#@__usercomment`.gid  
			LEFT JOIN (#@__goodscategory,`#@__goodsattr`) ON #@__goods.classid=#@__goodscategory.id
			AND `#@__goods`.id=`#@__goodsattr`.goodsid
			WHERE `#@__usercomment`.uid = '{$_COOKIE['userid']}' AND `#@__usercomment`.isshow=1  group by #@__goods.id {$limit}";
	if($page and $num)
	{
		$result =$dopage->GetPage($sql,$num);
		if($phone)
		{
			$page=$dopage->getlist();
		}else
		{
			$page=$dopage->GetList1_S();
		}
		
		$result and $result=array("info"=>$result,"page"=>$page);
	}else
	{
		$result = $dosql->getall($sql);
		
	}

	return $result;
}

function fun_user_rank($cid=1){
     global $dosql;
	 $row = $dosql->getall("select * from `#@__member_level`");
	 foreach($row as $v){
		 $select='';
		if($cid==$v['id']){
			$select = 'selected';
		}
	   echo '<option value="'.$v['id'].'" '.$select.'>'.$v['levelname'].'</option>';	
	}
	 
	
}


function levelname($cid){
	global $dosql;

	$row = $dosql->getone("select `levelname` from `#@__member_level` where id=".$cid);
	if($row['levelname']){
		return $row['levelname'];
	}else{
	   return '';	
	}
	
}
?>