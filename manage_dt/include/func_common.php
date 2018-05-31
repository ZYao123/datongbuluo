<?php
/* 后台功能函数库*/
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 检查外部传递的值并转义 */
function _RunMagicQuotes(&$svar)
{
	//PHP5.4已经将此函数移除
    if(@!get_magic_quotes_gpc())
    {
        if(is_array($svar))
        {
            foreach($svar as $_k => $_v) $svar[$_k] = _RunMagicQuotes($_v);
        }
        else
        {
            if(strlen($svar)>0 &&
			   preg_match('#^(cfg_|GLOBALS|_GET|_POST|_SESSION|_COOKIE)#',$svar))
            {
				exit('不允许请求的变量值!');
            }

            $svar = addslashes($svar);
        }
    }
    return $svar;
}

/**
 * 判断管理员权限。
 * @param     string    $privilege_str    操作对应的privilege_str
 * @param     bool    	$msg_output  	  是否提示
 * @return 	  true/false
 */
function chk_privilege($privilege_str, $msg_output = true)
{
    global $_LANG;
	if (isset($_SESSION['admin_pri'])){
		if ($_SESSION['admin_pri'] == 'all')
		{
			return true;
		}
		$privilege_arr = explode(",", $_SESSION['admin_pri']);
		if (!in_array($privilege_str, $privilege_arr))
		{
			if ($msg_output)
			{
				echo ($_LANG['php']['privilege_error']);
				exit();
			}
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
		return false;
	}
}

/**
 * 记录管理员的操作日志
 *
 * @access  public
 * @param   string      $title      操作的数据名称
 * @param   string      $action     操作的类型
 * @param   string      $content    操作的内容
 * @return  void
 */
function insert_log($title = '', $action, $content)
{
	global $_LANG, $dosql; 
    $action = $_LANG['log_action'][$action] . $_LANG['log_action'][$content] . ': ' . addslashes($title);

    $sql = "INSERT INTO `#@__admin_log` (userid, username, action, actiontime, actionip) 
					VALUES ('".$_SESSION['adminid']."', '".$_SESSION['admin']."', '$action', '".time()."', '".getip()."')";
	$dosql->execnonequery($sql);
}

/**
 *  清除模板缓存或编译文件
 *
 * @access  public
 * @param  bool       $is_cache  是否清除缓存还是清出编译文件
 * @param  string     $ext       需要删除的文件名，不包含后缀
 *
 * @return int        返回清除的文件个数
 */
function clear_tpl_files($is_cache = true, $ext = '')
{
    $dirs = array();

    $tmp_dir = 'temp';
    
    if ($is_cache)
    {
        $dirs[]    = LCSHOP_INC . 'templates_c/';
        /*$cache_dir = LCSHOP_INC . 'templates_c/';
		for($i = 0; $i < 16; $i++)
        {
            $hash_dir = $cache_dir . dechex($i);
            $dirs[] = $hash_dir . '/';
        }*/
    }
    else
    {
        $dirs[]    = LCSHOP_INC . 'cache/';
    }
    $str_len = strlen($ext);
    $count   = 0;

    foreach ($dirs AS $dir)
    {
        $folder = @opendir($dir);

        if ($folder === false)
        {
            continue;
        }

        while ($file = readdir($folder))
        {
            if ($file == '.' || $file == '..' || $file == 'index.htm' || $file == 'index.html')
            {
                continue;
            }
            if (is_file($dir . $file))
            {
                /* 如果有文件名则判断是否匹配 */
                $pos = ($is_cache) ? strrpos($file, '_') : strrpos($file, '.');

                if ($str_len > 0 && $pos !== false)
                {
                    $ext_str = substr($file, 0, $pos);

                    if ($ext_str == $ext)
                    {
                        if (@unlink($dir . $file))
                        {
                            $count++;
                        }
                    }
                }
                else
                {
                    if (@unlink($dir . $file))
                    {
                        $count++;
                    }
                }
            }
        }
        closedir($folder);
    }

    return $count;
}

/*
 * 获取排列序号
 *
 * @access  public
 * @param   $tbname   string  获取该表的最大ID
 * @return  $orderid  int     返回当前ID
*/
function getorderid($tbname)
{
	global $dosql;

	$r = $dosql->GetOne("SELECT MAX(orderid) AS `orderid` FROM `$tbname`");
	$orderid = (empty($r['orderid']) ? 1 : ($r['orderid'] + 1));

	return $orderid;
}

/* 获取parentstr */
function getparentstr($tbname, $parentid)
{
	global $dosql;

	if($parentid == 0)
	{
		$parentstr = '0,';
	}
	else
	{
		$row = $dosql->GetOne("SELECT parentstr FROM `$tbname` WHERE id=$parentid");
		$parentstr = $row['parentstr'].$parentid.',';
	}

	return $parentstr;
}

/* 获取parentid */
function getparentid($tbname, $classid)
{
	global $dosql;

	if($classid == 0)
	{
		$parentid = '0';
	}
	else
	{
		$row = $dosql->GetOne("SELECT parentid FROM `$tbname` WHERE id=$classid");
		$parentid = $row['parentid'];
	}

	return $parentid;
}

function getmenu($privilege_arr = array())
{
	global $module, $privilege, $_LANG;
	$menu = array();
	
	foreach ($module AS $key => $value)
    {
        ksort($module[$key]);
    }
    ksort($module);

    foreach ($module AS $key => $val)
    {
        $menu[$key]['label'] = $_LANG[$key];
		$menu[$key]['value'] = $key;
		
        if (is_array($val))
        {
            foreach ($val AS $k => $v)
            {
				if (isset($privilege[$k]) && is_array($privilege[$k]))
        		{
					foreach ($privilege[$k] AS $ks => $vs)
            		{
						$menu[$key]['children'][$k][$ks]['label']   = isset($_LANG[$vs]) ? $_LANG[$vs] : '';
						$menu[$key]['children'][$k][$ks]['value']   = $vs;
						$menu[$key]['children'][$k][$ks]['checked'] = in_array($vs, $privilege_arr) ? 1 : 0;
					}
				}								
            }
        }
		
		// 如果children的子元素长度为0则删除该组		
		if(!isset($menu[$key]['children']))
		{
			unset($menu[$key]);
		}		
    }
	return $menu;
}

//获得文章内容里的外部资源
function GetContFile($body)
{

	global $cfg_image_dir;

	//引入下载类
	require(LCSHOP_INC.'include/cls_down.php');

	//初始化变量
	$body = stripslashes($body);
	$host = 'http://'.$_SERVER['HTTP_HOST'];

	//过滤图片文件
    $pic_arr = array();
    preg_match_all("/src=[\"|'|\s]{0,}(http:\/\/([^>]*)\.(gif|jpg|png|bmp))/isU", $body, $pic_arr);
    $pic_arr = array_unique($pic_arr[1]);

	//初始化下载类
	$htd = new HttpDown();

    foreach($pic_arr as $k=>$v)
    {

        if(preg_match('#'.$host.'#i', $v)) continue;
        if(!preg_match('#^http:\/\/#i', $v)) continue;


        $htd->OpenUrl($v);
		
		
        $type = $htd->GetHead('content-type');


        if($type == 'image/gif')
            $tempfile_ext = 'gif';

        else if($type == 'image/png')
            $tempfile_ext = 'png';

        else if($type == 'image/wbmp')
            $tempfile_ext = 'bmp';

        else
            $tempfile_ext = 'jpg';


		$upload_url = 'image';
		$upload_dir = $cfg_image_dir;

		$ymd = date('Ymd');
		$upload_url .= '/'.$ymd;
		$upload_dir .= '/'.$ymd;

		if(!file_exists($upload_dir))
		{
			mkdir($upload_dir);

			$fp = fopen($upload_dir.'/index.htm', 'w');
			fclose($fp);
		}
		
		//上传文件名称
		$filename = time()+rand(1,9999).'.'.$tempfile_ext;

		//上传文件路径
		$save_url = 'uploads/'.$upload_url.'/'.$filename;

		//生成本地路径
		$self = explode('/', $_SERVER['PHP_SELF']);
		$self_size = count($self) - 2;
		$self_str  = '';
		for($i=0; $i<$self_size; $i++)
		{
			$self_str .= $self[$i].'/';
		}

		$save_url = $self_str.'uploads/'.$upload_url.'/'.$filename;
		$save_dir = $upload_dir.'/'.$filename;

        $rs = $htd->SaveToBin($save_dir);
        if($rs)
        {
            $body = str_replace(trim($v), $save_url, $body);
        }
    }

    $htd->Close();


	//回传转义字符串
    return _RunMagicQuotes($body);
}


/*
 * 获取一个远程图片
 *
 * @access  public
 * @param   $url       string  获取字段所属模型
 * @return  $save_url  string  返回上传后地址
*/
function GetRemPic($url)
{

	global $cfg_image_dir;

	//引入下载类
	require(PHPMYWIND_DATA.'/httpfile/down.class.php');

	//初始化变量
    $htd = new HttpDown();
    $htd->OpenUrl($url);

	//判断文件类型
    $sparr = array('image/pjpeg', 'image/jpeg', 'image/gif', 'image/png', 'image/xpng', 'image/wbmp');
    if(!in_array($htd->GetHead("content-type"), $sparr))
    {
        return false;
    }
    else
    {
        $type = $htd->GetHead("content-type");

        if($type == 'image/gif')
            $tempfile_ext = 'gif';

        else if($type == 'image/png')
            $tempfile_ext = 'png';

        else if($type == 'image/wbmp')
            $tempfile_ext = 'bmp';

        else
            $tempfile_ext = 'jpg';


		$upload_url = 'image';
		$upload_dir = $cfg_image_dir;

		$ymd = date('Ymd');
		$upload_url .= '/'.$ymd;
		$upload_dir .= '/'.$ymd;
	
		if(!file_exists($upload_dir))
		{
			mkdir($upload_dir);

			$fp = fopen($upload_dir.'/index.htm', 'w');
			fclose($fp);
		}

		//上传文件名称
		$filename = time()+rand(1,9999).'.'.$tempfile_ext;

		//上传文件路径
		$save_url = 'uploads/'.$upload_url.'/'.$filename;
		$save_dir = $upload_dir.'/'.$filename;

        $rs = $htd->SaveToBin($save_dir);
    }

    $htd->Close();
    return ($rs ? $save_url : '');
}


/*
 * 文档自动分页
 *
 * @access  public
 * @param   $body    string  要设置分页内容
 * @param   $spsize  string  自动分页大小
 * @param   $sptag   string  分页标示符
 * @return  $body    string  设置分页符的内容
*/
function ContAutoPage($body, $spsize, $sptag='<hr style="page-break-after:always;" class="ke-pagebreak" />')
{
	//判断是否符合分页条件
    if(strlen($body) < $spsize) return $body;

    $body    = stripslashes($body);
	$body    = str_replace($sptag,'',$body);
    $bodyarr = explode('<', $body);

	//初始化参数
	$body = '';
    $pagebody = '';
    $istable = 0;

    foreach($bodyarr as $i=>$v)
    {
        if($i == 0)
        {
            $pagebody .= $bodyarr[$i];
			continue;
        }

        $bodyarr[$i] = '<'.$bodyarr[$i];

        if(strlen($bodyarr[$i]) > 6)
        {
            $tname = substr($bodyarr[$i], 1, 5);

            if(strtolower($tname) == 'table')
			{
                $istable++;
			}
            else if(strtolower($tname) == '/tabl')
			{
                $istable--;
			}

            if($istable > 0)
            {
                $pagebody .= $bodyarr[$i];
				continue;
            }
            else
            {
                $pagebody .= $bodyarr[$i];
            }
        }
        else
        {
            $pagebody .= $bodyarr[$i];
        }

        if(strlen($pagebody) > $spsize)
        {
            $body .= $pagebody.$sptag;
            $pagebody = '';
        }
    }

    if($pagebody != '')
    {
        $body .= $pagebody;
    }
	
    return _RunMagicQuotes($body);
}

/**
 *  会对空白地方填充满
 *
 * @access    public
 * @param     string  $srcfile   图片路径
 * @param     string  $towidth   转换到的宽度
 * @param     string  $toheight  转换到的高度
 * @param     string  $tofile    输出文件到
 * @param     string  $issave    是否保存
 * @return    bool
 */
function ImageResize($srcfile, $towidth, $toheight, $tofile='', $issave=true)
{

	global $cfg_imgresize;


	//如果不需要存储到它处
	//直接覆盖原来文件位置
	if($tofile == '') $tofile = $srcfile;

	//获取图片信息
	$srcinfo = @getimagesize($srcfile);

	//检测图片扩展名
	if($srcinfo[2] != 1 &&
	   $srcinfo[2] != 2 &&
	   $srcinfo[2] != 3 &&
	   $srcinfo[2] != 6)
	{
		return false;
	}

	switch($srcinfo[2])
	{
		case 1:
			$imgfrom = imagecreatefromgif($srcfile);
			break;
		case 2:
			$imgfrom = imagecreatefromjpeg($srcfile);
			break;
		case 3:
			$imgfrom = imagecreatefrompng($srcfile);
			break;
		case 6:
			$imgfrom = imagecreatefromwbmp($srcfile);
	}

	//获取图片宽高
	$imgwidth  = $srcinfo[0];
	$imgheight = $srcinfo[1];

	if(!$imgwidth || !$imgheight) return false;

	//判断缩略方式
	//裁切方式
	if($cfg_imgresize == 'Y')
	{

		//宽高大于目标高度
		if($imgwidth > $towidth && $imgheight > $toheight)
		{
			//目标图片比例
			$toratio  = $towidth / $toheight;

			//当前图片比例
			$imgratio = $imgwidth / $imgheight;

			//如果目标比例大于当前比例定义高度
			if($toratio > $imgratio)
			{
				$newwidth  = $towidth;
				$newheight = $towidth / $imgratio;
			}
			else
			{
				$newwidth  = $imgratio * $toheight;
				$newheight = $toheight;
			}

			//创建真彩色图像
			$newimg = imagecreatetruecolor($towidth, $toheight);
			
			//缩放并合并图像
			if(!@imagecopyresampled($newimg, $imgfrom, ($towidth-$newwidth)/2, ($toheight-$newheight)/2, 0, 0, $newwidth, $newheight, $imgwidth, $imgheight))
			{
				return false;
			}
		}

		//宽大于目标高度，高小于目标高度
		else if($imgwidth >= $towidth && $imgheight <= $toheight)
		{
			$newwidth  = $towidth;
			$newheight = $imgheight;

			//创建一张真彩图像
			$newimg = imagecreatetruecolor($newwidth, $newheight);

			//裁切图像
			if(!@imagecopyresampled($newimg, $imgfrom, ($towidth-$newwidth)/2, 0, 0, 0, $newwidth, $newheight, $imgwidth, $imgheight))
			{
				return false;
			}
		}

		//宽小于目标高度，高大于目标高度
		else if($imgwidth <= $towidth && $imgheight >= $toheight)
		{
			$newwidth  = $imgwidth;
			$newheight = $toheight;

			//创建一张真彩图像
			$newimg = imagecreatetruecolor($newwidth, $newheight);

			//裁切图像
			if(!@imagecopyresampled($newimg, $imgfrom, 0, ($toheight-$newheight)/2, 0, 0, $newwidth, $newheight, $imgwidth, $imgheight))
			{
				return false;
			}
		}

		//宽小于目标高度，高小于于目标高度
		else if($imgwidth <= $towidth && $imgheight <= $toheight)
		{
			imagedestroy($newimg);
			imagedestroy($imgfrom);
			
			return true;
		}

	}
	//填充方式
	else
	{
		//目标图片比例
		$toratio  = $towidth / $toheight;
	
		//当前图片比例
		$imgratio = $imgwidth / $imgheight;
	
		//如果目标比例大于当前比例定义高度
		if($toratio > $imgratio)
		{
			$newheight = $toheight;
			$newwidth  = $imgratio * $toheight;
		}
		else
		{
			$newheight = $towidth / $imgratio;
			$newwidth  = $towidth;
		}
	
		//匹配最终宽高
		if($newwidth > $towidth)
			$newheight = $towidth;

		if($newheight > $toheight)
			$newheight = $toheight;

		//创建真彩色图像
		$newimg = imagecreatetruecolor($towidth, $toheight);

		//为一幅图像分配颜色
		$bgcolor = imagecolorallocate($newimg, 0xff, 0xff, 0xff);

		//画一矩形并填充
		if(!@imagefilledrectangle($newimg, 0, 0, $towidth-1, $toheight-1, $bgcolor))
		{
			return false;
		}

		//缩放并合并图像
		if(!@imagecopyresampled($newimg, $imgfrom, ($towidth-$newwidth)/2, ($toheight-$newheight)/2, 0, 0, $newwidth, $newheight, $imgwidth, $imgheight))
		{
			return false;
		}
	}


	//保存为目标文件
	if($issave)
	{
		switch($srcinfo[2])
		{
			case 1:
				imagegif($newimg, $tofile);
				break;
			case 2:
				imagejpeg($newimg, $tofile, 100);
				break;
			case 3:
				imagepng($newimg, $tofile);
				break;
			case 6:
				imagebmp($newimg, $tofile);
				break;
			default:
				return false;
		}
	}
	//不保存
	else
	{
		switch($srcinfo[2])
		{
			case 1:
				imagegif($newimg);
				break;
			case 2:
				imagejpeg($newimg);
				break;
			case 3:
				imagepng($newimg);
				break;
			case 6:
				imagebmp($newimg);
				break;
			default:
				return false;
		}
	}

	//销毁图像
	imagedestroy($newimg);
	imagedestroy($imgfrom);

	return true;
}


//查看数据大小
if(!function_exists('GetRealSize'))
{
	function GetRealSize($size)
	{
		$kb = 1024;          // Kilobyte
		$mb = 1024 * $kb;    // Megabyte
		$gb = 1024 * $mb;    // Gigabyte
		$tb = 1024 * $gb;    // Terabyte

		if($size < $kb)
			return $size.'B';

		else if($size < $mb)
			return round($size/$kb,2).'KB';

		else if($size < $gb)
			return round($size/$mb,2).'MB';

		else if($size < $tb)
			return round($size/$gb,2).'GB';

		else
			return round($size/$tb,2).'TB';
	}
}

?>