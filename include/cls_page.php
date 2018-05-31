<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/*
 * 分页类
 *
**************************
(C)2010-2013 phpMyWind.com
update: 2011-4-26 15:00:19
person: Feng
**************************
*/


$dopage = new Page();

class Page
{
	var $page;      //当前页码
	var $totalpage; //总共页数
	var $pagenum;   //每页记录数
	var $total;     //总共记录数

    function __construct()
    {
		$this->Init();
    }

    function Page()
    {
		$this->__construct();
    }
	
	function Init()
    {
		if(!isset($_GET['page']))
		{
			$this->page = 1;
		}
		else
		{
			$this->page = $_GET['page'];
		}
    }
	
	//获取分页变量
	function GetPage($sql,$pagenum=20)
	{
		global $dosql;
		$dosql->Execute($sql);
		$this->total = $dosql->GetTotalRow();

		$this->pagenum = $pagenum;

		$this->totalpage = ceil($this->total / $this->pagenum);

		if(!isset($this->page) || !intval($this->page) || $this->page > $this->totalpage || $this->page<=0)
		{
			$this->page = 1;
		}

		$startnum = ($this->page-1) * $this->pagenum;

		$sql .= " limit $startnum, $this->pagenum";
		return $dosql->GetAll($sql);
	}

	//显示分页列表
	function GetList()
	{
		global $cfg_isreurl;

		$pagetxt = '';

		if($this->total <= $this->pagenum)
		{
			$pagetxt = '<span class="pro_link">共'.$this->totalpage.'页'.$this->total.'条记录</span>';
		}

		else
		{
			//获取除page参数外的其他参数
			$query_str = explode('&',$_SERVER["QUERY_STRING"]);

			if($query_str[0] != '')
			{
				$query_strs = '';

				foreach($query_str as $k)
				{
					$query_str_arr = explode('=', $k);

					if(strstr($query_str_arr[0],'page') == '')
					{
						$query_str_arr[0] = isset($query_str_arr[0]) ? $query_str_arr[0] : '';
						$query_str_arr[1] = isset($query_str_arr[1]) ? $query_str_arr[1] : '';

						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$query_strs .= $query_str_arr[0].'='.$query_str_arr[1].'&';		
						}
						else
						{
							$query_strs .= '-'.$query_str_arr[1];	
						}
					}
				}
		
				$nowurl = '?'.$query_strs;
			}
			else
			{
				$nowurl = '?';
			}
			
			//伪静态设置
			if($cfg_isreurl == 'Y')
			{
				$request_arr  = explode('.',$_SERVER['PHP_SELF']);
				$request_rui  = explode('/',$request_arr[count($request_arr)-2]);
				$nowurl = ltrim($request_rui[count($request_rui)-1],'/').ltrim($nowurl,'?');
			}
			$previous = $this->page - 1;
			if($this->totalpage == $this->page) $next = $this->page;
			else $next = $this->page + 1;

			$pagetxt = '<span class="pro_link">';

			//上一页 第一页
			if($this->page > 1)
			{
				//伪静态设置
				if($cfg_isreurl != 'Y')
				{
					$pagetxt .= '<a href="'.$nowurl.'page=1" title="第一页">&lt;&lt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'page='.$previous.'" title="上一页">&lt;</a>';
				}
				else
				{
					$pagetxt .= '<a href="'.$nowurl.'-1.html" title="第一页">&lt;&lt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'-'.$previous.'.html" title="上一页">&lt;</a>';
				}
			}
			else
			{
				$pagetxt .= '<a href="javascript:;" title="已是第一页">&lt;&lt;</a>';
				$pagetxt .= '<a href="javascript:;" title="已是第一页">&lt;</a>';
			}

			//当总页数小于10
			if($this->totalpage < 10)
			{
				for($i=1; $i <= $this->totalpage; $i++)
				{
					if($this->page == $i)
					{
						$pagetxt .= '<a href="javascript:;" class="on">'.$i.'</a>';
					}
					else
					{
						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$pagetxt .= '<a href="'.$nowurl.'page='.$i.'" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
						else
						{
							$pagetxt .= '<a href="'.$nowurl.'-'.$i.'.html" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
					}
				}
			}
			else
			{
				if($this->page==1 or $this->page==2 or $this->page==3)
				{
					$m = 1;
					$b = 7;
				}
				//如果页面大于前三页并且小于后三页则显示当前页前后各三页链接
				if($this->page>3 and $this->page<$this->totalpage-2)
				{
					$m = $this->page-3;
					$b = $this->page+3;
				}
				//如果页面为最后三页则显示最后7页链接
				if($this->page==$this->totalpage or $this->page==$this->totalpage-1 or $this->page==$this->totalpage-2)
				{
					$m = $this->totalpage - 7;
					$b = $this->totalpage;
				}
				if($this->page > 4)
				{
					$pagetxt .= '<a href="javascript:;">...</a>';
				}
				//显示数字页码
				for($i=$m; $i<=$b; $i++)
				{
					if($this->page == $i)
					{
						$pagetxt .= '<a href="'.$nowurl.'page='.$i.'" class="on">'.$i.'</a>';
					}
					else
					{
						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$pagetxt .= '<a href="'.$nowurl.'page='.$i.'" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
						else
						{
							$pagetxt .= '<a href="'.$nowurl.'-'.$i.'.html" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
					}
				}
				if($this->page < $this->totalpage-3)
				{
					$pagetxt .= '<a href="javascript:;">...</a>';
				}
			}

			//下一页 最后页
			if($this->page < $this->totalpage)
			{
				//伪静态设置
				if($cfg_isreurl != 'Y')
				{
					$pagetxt .= '<a href="'.$nowurl.'page='.$next.'" title="下一页">&gt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'page='.$this->totalpage.'" title="最后一页">&gt;&gt;</a>';
				}
				else
				{
					$pagetxt .= '<a href="'.$nowurl.'-'.$next.'.html" title="下一页">&gt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'-'.$this->totalpage.'.html" title="最后一页">&gt;&gt;</a>';
				}
			}
			else
			{
				$pagetxt .= '<a href="javascript:;" title="已是最后一页">&gt;</a>';
				$pagetxt .= '<a href="javascript:;" title="已是最后一页">&gt;&gt;</a>';
			}
			$pagetxt .= '</span>';
		}
		
		return $pagetxt;
	}
	//显示分页列表
	function GetList1()
	{
		global $cfg_isreurl;

		$pagetxt = '';

		if($this->total > $this->pagenum)
		{
			//获取除page参数外的其他参数
			$query_str = explode('&',$_SERVER["QUERY_STRING"]);

			if($query_str[0] != '')
			{
				$query_strs = '';

				foreach($query_str as $k)
				{
					$query_str_arr = explode('=', $k);

					if(strstr($query_str_arr[0],'page') == '')
					{
						$query_str_arr[0] = isset($query_str_arr[0]) ? $query_str_arr[0] : '';
						$query_str_arr[1] = isset($query_str_arr[1]) ? $query_str_arr[1] : '';

						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$query_strs .= $query_str_arr[0].'='.$query_str_arr[1].'&';		
						}
						else
						{
							$query_strs .= '-'.$query_str_arr[1];	
						}
					}
				}
		
				$nowurl = '?'.$query_strs;
			}
			else
			{
				$nowurl = '?';
			}
			
			//伪静态设置
			if($cfg_isreurl == 'Y')
			{
				$request_arr  = explode('.',$_SERVER['PHP_SELF']);
				$request_rui  = explode('/',$request_arr[count($request_arr)-2]);
				$nowurl = ltrim($request_rui[count($request_rui)-1],'/').ltrim($nowurl,'?');
			}
			$previous = $this->page - 1;
			if($this->totalpage == $this->page) $next = $this->page;
			else $next = $this->page + 1;

			$pagetxt = '';

			//上一页 第一页
			if($this->page > 1)
			{
				//伪静态设置
				if($cfg_isreurl != 'Y')
				{
					$pagetxt .= '<a href="'.$nowurl.'page=1" title="第一页">&lt;&lt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'page='.$previous.'" title="上一页">&lt;</a>';
				}
				else
				{
					$pagetxt .= '<a href="'.$nowurl.'-1.html" title="第一页">&lt;&lt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'-'.$previous.'.html" title="上一页">&lt;</a>';
				}
			}
			else
			{
				$pagetxt .= '<a href="javascript:;" title="已是第一页">&lt;&lt;</a>';
				$pagetxt .= '<a href="javascript:;" title="已是第一页">&lt;</a>';
			}

			//当总页数小于10
			if($this->totalpage < 3)
			{
				for($i=1; $i <= $this->totalpage; $i++)
				{
					if($this->page == $i)
					{
						$pagetxt .= '<a href="javascript:;" class="on">'.$i.'</a>';
					}
					else
					{
						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$pagetxt .= '<a href="'.$nowurl.'page='.$i.'" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
						else
						{
							$pagetxt .= '<a href="'.$nowurl.'-'.$i.'.html" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
					}
				}
			}
			else
			{
				if($this->page==1 or $this->page==2 or $this->page==3)
				{
					$m = 1;
					$b = 3;
				}
				//如果页面大于前三页并且小于后三页则显示当前页前后各一页链接
				if($this->page>3 and $this->page<$this->totalpage-1)
				{
					$m = $this->page;
					$b = $this->page+2;
				}
				//如果页面为最后三页则显示最后7页链接
				if($this->page==$this->totalpage or $this->page==$this->totalpage-1 or $this->page==$this->totalpage-2)
				{
					$m = $this->totalpage - 2;
					$b = $this->totalpage;
				}
				if($this->page > 4)
				{
					$pagetxt .= '<a href="javascript:;">...</a>';
				}
				//显示数字页码
				for($i=$m; $i<=$b; $i++)
				{
					if($this->page == $i)
					{
						$pagetxt .= '<a href="'.$nowurl.'page='.$i.'" class="on">'.$i.'</a>';
					}
					else
					{
						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$pagetxt .= '<a href="'.$nowurl.'page='.$i.'" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
						else
						{
							$pagetxt .= '<a href="'.$nowurl.'-'.$i.'.html" class="num" title="第 '.$i.' 页">'.$i.'</a>';
						}
					}
				}
				if($this->page < $this->totalpage-2)
				{
					$pagetxt .= '<a href="javascript:;">...</a>';
				}
			}

			//下一页 最后页
			if($this->page < $this->totalpage)
			{
				//伪静态设置
				if($cfg_isreurl != 'Y')
				{
					$pagetxt .= '<a href="'.$nowurl.'page='.$next.'" title="下一页">&gt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'page='.$this->totalpage.'" title="最后一页">&gt;&gt;</a>';
				}
				else
				{
					$pagetxt .= '<a href="'.$nowurl.'-'.$next.'.html" title="下一页">&gt;</a>';
					$pagetxt .= '<a href="'.$nowurl.'-'.$this->totalpage.'.html" title="最后一页">&gt;&gt;</a>';
				}
			}
			else
			{
				$pagetxt .= '<a href="javascript:;" title="已是最后一页">&gt;</a>';
				$pagetxt .= '<a href="javascript:;" title="已是最后一页">&gt;&gt;</a>';
			}
			
		}
		
		return $pagetxt;
	}
	
		//显示分页列表
	function GetList1_S()
	{
		global $cfg_isreurl;

		$pagetxt = '';

		if($this->total > $this->pagenum)
		{
			//获取除page参数外的其他参数
			$query_str = explode('&',$_SERVER["QUERY_STRING"]);

			if($query_str[0] != '')
			{
				$query_strs = '';

				foreach($query_str as $k)
				{
					$query_str_arr = explode('=', $k);

					if(strstr($query_str_arr[0],'page') == '')
					{
						$query_str_arr[0] = isset($query_str_arr[0]) ? $query_str_arr[0] : '';
						$query_str_arr[1] = isset($query_str_arr[1]) ? $query_str_arr[1] : '';

						//伪静态设置
						if($cfg_isreurl != 'Y')
						{
							$query_strs .= $query_str_arr[0].'='.$query_str_arr[1].'&';		
						}
						else
						{
							$query_strs .= '-'.$query_str_arr[1];	
						}
					}
				}
		
				$nowurl = '?'.$query_strs;
			}
			else
			{
				$nowurl = '?';
			}
			$this->nowurl=$nowurl;
			//伪静态设置
			if($cfg_isreurl == 'Y')
			{
				$request_arr  = explode('.',$_SERVER['PHP_SELF']);
				$request_rui  = explode('/',$request_arr[count($request_arr)-2]);
				$nowurl = ltrim($request_rui[count($request_rui)-1],'/').ltrim($nowurl,'?');
			}
			$previous = $this->page - 1;
			if($this->totalpage == $this->page) $next = $this->page;
			else $next = $this->page + 1;

			$pagetxt = '';

		}
		for($i=1; $i <= $this->totalpage; $i++)
		{
			if($this->page == $i)
			{
				$pagetxt .= "<li ><a class='on33' href='javascript::void(0);' title='第{$i}页'>";

				$pagetxt .= $i . "</a></li>\n";
			}
			else
			{
				//伪静态设置
				if($cfg_isreurl != 'Y')
				{
					
					$pagetxt .= "<li ><a href='{$nowurl}page={$i}' title='第{$i}页'>";

					$pagetxt .= $i . "</a></li>\n";
				}
				else
				{
					$pagetxt .= "<li ><a href='{$nowurl}-{$i}.html' title='第{$i}页'>";

					$pagetxt .= $i . "</a></li>\n";
				}
			}
		}
		
		$pagetxt .= $this -> myde_next();

		$pagetxt .= $this -> myde_last();
		
		$pagetxt.="<li class=\"sum\"><span>每页显".$this->pagenum ."个 共".$this->totalpage."页</span></li><li class=\"tiaozhuan\" style=\"border:none\">&nbsp;转到
			<select name=\"UIPageNoSelect\" onchange=\"goToPage(this)\" style=\"width:50px;\">";
			for($page_for_i = 1;$page_for_i <= $this->totalpage; $page_for_i++){

			if($this -> page == $page_for_i){
					
			$pagetxt.="<option value='{$this->nowurl}page={$page_for_i}'  selected=\"selected\">".$page_for_i."</option>";

			}

			else{
					
				$pagetxt.="<option value='{$this->nowurl}page={$page_for_i}' >".$page_for_i."</option>";

			}
		}
		
			$pagetxt.="</select>页";
		$pagetxt .= "  </ul>\n ";
		
		return $pagetxt;
	}
	
		private function myde_next() //下一页
	{
		if($this->page  != $this->totalpage ){
			$page=$this->page+1;
			return "<li style='padding-top:0px; *padding-top:0px; _padding-top:0px;'>
			<a href='{$this->nowurl}page={$page}'  title='下一页' >下一页</a></li>\n";

		}else{

			return "<li class=\"page_zong\">下一页</li>\n";

		}
	}

	private function myde_last($sign=false) //尾页
	{
		if($this->page != $this->totalpage ){
			return "<li class='end'><a href='{$this->nowurl}page={$this->totalpage}'  title='尾页' ><span>尾页</span></a></li>\n";
		
		}else{

			return "<li class=\"page_zong\">尾页</li>\n";

		}
	}
}
?>