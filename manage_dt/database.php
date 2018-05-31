<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
include_once(LCSHOP_LANG . 'admin/database.php');

//定义登入常量
define('IN_BKUP', true);

//初始化变量
$act 	= isset($act)    ? $act    : 'backup';
$tbname = isset($tbname) ? $tbname : '';
$backup_dir = LCSHOP_BACKUP;

/* 数据表 */
if($act == 'backup')
{
	//验证权限
	chk_privilege("backup_manage");
	
	$info = array();
	$i = $total_size = 0;

	$dosql->Execute("SHOW TABLE STATUS");
	while($r = $dosql->GetArray())
	{
		$info[$i]['name']    = $r['Name'];
		$info[$i]['rows']    = $r['Rows'];
		$info[$i]['size']    = GetRealSize($r['Data_length']);
		$total_size += $r['Data_length'];
		$i++;
	}
	$total_size = GetRealSize($total_size);
	$smarty->assign("info"		, $info);
	$smarty->assign("total_size", $total_size);
	$smarty->assign("lang"		, $_LANG);
	$smarty->display('database_backup.html');
}
/* 查看表结构 */
elseif($act == 'struct')
{
	//验证权限
	chk_privilege("backup_manage");
	
	if(empty($tbname))
	{
		ShowDataMsg($_LANG['error_structure'],'?act=backup','red','1');
		exit();
	}
	$info = array();
	$info = $dosql->getall("SHOW FULL COLUMNS FROM `$tbname`");
	$smarty->assign("info"		, $info);
	$smarty->assign("lang"		, $_LANG);
	$smarty->display('database_struct.html');	
}
/* 修复数据表 */
elseif($act == 'repair')
{
	//验证权限
	chk_privilege("backup_manage");
	
	if(empty($tbname))
	{
		ShowDataMsg($_LANG['error_repair'],'?act=backup','red','1');
		exit();
	}

	if(is_array($tbname))
	{
		foreach($tbname as $k=>$v)
		{
			$dosql->ExecNoneQuery("REPAIR TABLE `$v`");
		}
	}
	else
	{
		$dosql->ExecNoneQuery("REPAIR TABLE `$tbname`");
	}
	
	ShowDataMsg($_LANG['succeed_repair'],'?act=backup','blue','1');
	exit();
}
/* 优化数据表 */
elseif($act == 'optimize')
{
	//验证权限
	chk_privilege("backup_manage");
	
	if(empty($tbname))
	{
		ShowDataMsg($_LANG['error_optimize'],'?act=backup','red','1');
		exit();
	}

	if(is_array($tbname))
	{
		foreach($tbname as $k => $v)
		{
			$dosql->ExecNoneQuery("OPTIMIZE TABLE `$v`");
		}
	}
	else
	{
		$dosql->ExecNoneQuery("OPTIMIZE TABLE `$tbname`");
	}
	
	ShowDataMsg($_LANG['succeed_optimize'],'?act=backup','blue','1');
	exit();
}
/* 备份数据表 */
elseif($act == 'subbackup')
{
	//验证权限
	chk_privilege("backup_manage");
	
	if(empty($tbname))
	{
		ShowDataMsg($_LANG['error_backup'],'?act=backup','red','1');
		exit();
	}
	$database_msg = $_LANG['backup_tips'];
	
	@set_time_limit(0);
	
	if(empty($isstruct)) $isstruct = 0;  //表结构是否备份	
	if(empty($startpos)) $startpos = 0;  //当前备份条数（分卷号）
	if(empty($nowtable)) $nowtable = ''; //当前备份表
	if(empty($fsize))    $fsize = 2048;  //分卷大小，单位KB
	$fsizeb = $fsize * 1024;             //分卷大小，单位K

	//第一次跳转表名属于形式，之后为字符形式
	//$tbales 为字符串形式表名集
	//$tbname 为数组形式表名集
	if(!is_array($tbname))
	{
		$tbname = explode(',', $tbname);
	}
	$tables = implode(',', $tbname);

	//设置此次备份的时间目录
	//如果备份时间为空，则认为首次，创建目录
	if(empty($backup_date))
	{
		$backup_date = date('Y_mdHis',time()).'_'.GetRandStr();
		mkdir($backup_dir .= $backup_date);
	}
	else
	{
		$backup_dir .= $backup_date;
	}

	$tmsg = '';

	//当前备份表为空，则认为首次，备份表结构
	if($nowtable == '')
	{
		//如果备份表结构，则执行
		if($isstruct == 1)
		{
			//表结构文件
			$tbstruct_file = $backup_dir.'/table_struct_'.GetRandStr().'.txt';

			//创建并写入表结构备份文件
			$fp = fopen($tbstruct_file, 'w');
			foreach($tbname as $t)
			{
				fwrite($fp, "DROP TABLE IF EXISTS `$t`;\r\n\r\n");
				$dosql->Execute("SHOW CREATE TABLE ".$dosql->db_name.".".$t);
				$row = $dosql->GetArray('me', MYSQL_BOTH);
				fwrite($fp, $row[1].";\r\n\r\n");
			}
			fclose($fp);

			$tmsg .= $_LANG['backup_1'];
		}


		$tmsg .= $_LANG['backup_2'];
		$doform = array();
		$doform['act'] 			= 'subbackup';
		$doform['isstruct'] 	= $isstruct;
		$doform['tbname'] 		= $tables;
		$doform['nowtable'] 	= $tbname[0];
		$doform['fsize'] 		= $fsize;
		$doform['startpos'] 	= 0;
		$doform['backup_date'] 	= $backup_date;
		PutInfo($tmsg, $doform);
		exit();
	}

	//开始备份表数据
	else
	{
		$fsn         = 0;  //字段数
		$fields      = ''; //字段名称
		$bakstr      = ''; //备份字符串
		$nowtable    = isset($nowtable) ? $nowtable : ''; //当前表
		$intable     = "INSERT INTO `$nowtable` VALUES("; //备份插入字符串
		$backup_file = "$backup_dir/{$nowtable}_{$startpos}_".GetRandStr().'.txt'; //当前备份文件


		//分析表里的字段信息
		$j = 0;
		$dosql->GetTableFields($nowtable);
		while($r = $dosql->GetFieldObject())
		{
			$fields[$j] = trim($r->name);
			$j++;
		}
		$fsn = $j-1;


		//读取表的内容
		$m = 0;
		$dosql->Execute("SELECT * FROM `$nowtable`");
		while($row = $dosql->GetArray())
		{
			if($m < $startpos)
			{
				$m++;
				continue;
			}

			//检测数据是否达到规定大小
			//达到后跳转页面
			if(strlen($bakstr) > $fsizeb)
			{
				$fp = fopen($backup_file,'w');
				fwrite($fp,$bakstr);
				fclose($fp);

				$tmsg .= str_replace("{%s1}", $m, str_replace("{%s2}", $nowtable, $_LANG['backup_3']));
				
				$doform = array();
				$doform['act'] 			= 'subbackup';
				$doform['isstruct'] 	= $isstruct;
				$doform['tbname'] 		= $tables;
				$doform['nowtable'] 	= $nowtable;
				$doform['fsize'] 		= $fsize;
				$doform['startpos'] 	= $m;
				$doform['backup_date'] 	= $backup_date;
				PutInfo($tmsg,$doform);
				exit();
			}


			//形成插入样式
			$line = $intable;
			for($j=0; $j<=$fsn; $j++)
			{
				if($j < $fsn)
					$line .= "'".RpLine(addslashes($row[$fields[$j]]))."',";
				else
					$line .= "'".RpLine(addslashes($row[$fields[$j]]))."');\r\n";
			}

			$bakstr .= $line;
			$m++;
		}


		//如果数据比卷设置值小
		if($bakstr != '')
		{
			$fp = fopen($backup_file, 'w');
			fwrite($fp, $bakstr);
			fclose($fp);
		}


		//执行下一个表
		$tbnum = count($tbname);
		for($i=0; $i<$tbnum; $i++)
		{
			if($tbname[$i] == $nowtable)
			{
				if(isset($tbname[$i+1]))
				{
					$nowtable = $tbname[$i+1];
					$startpos = 0;
					break;
				}
				else
				{
					PutInfo($_LANG['backup_4'],array());
					exit();
				}
			}
		}
	
		$tmsg .= str_replace("{%s1}", $m, str_replace("{%s2}", $nowtable, $_LANG['backup_3']));
		
		$doform = array();
		$doform['act'] 			= 'subbackup';
		$doform['isstruct'] 	= $isstruct;
		$doform['tbname'] 		= $tables;
		$doform['nowtable'] 	= $nowtable;
		$doform['fsize'] 		= $fsize;
		$doform['startpos'] 	= $startpos;
		$doform['backup_date'] 	= $backup_date;
		PutInfo($tmsg,$doform);
		exit();
		//分页备份代码结束
	}
}
/* 还原数据表 */
elseif($act == 'restore')
{
	//验证权限
	chk_privilege("restore_manage");
	
	$handler = opendir($backup_dir);
	$i = $total_size = 0;
	$info = array();
	while(($fname = readdir($handler)) !== false)
	{
		if($fname != '.' && $fname != '..' && $fname != 'index.htm' && $fname != 'index.html')
		{
			$files['name'] = $fname;
			$files['mktime'] = GetDateTime(filemtime($backup_dir.$fname));

			$backup_file = glob($backup_dir.$fname.'/*.txt');
			$files_size = 0;

			foreach($backup_file as $name)
			{
				$files_size += filesize($name);
			}

			$files['size'] = GetRealSize($files_size);
			$total_size += $files_size;
			$info[] = $files;
		}
		$i++;
	}

	closedir($handler);
	
	$total_size = GetRealSize($total_size);
	$smarty->assign("info"		, $info);
	$smarty->assign("total_size", $total_size);
	$smarty->assign("lang"		, $_LANG);
	$smarty->display('database_restore.html');
}
/* 删除备份目录 */
elseif($act == 'deldir')
{
	//验证权限
	chk_privilege("restore_manage");
	
	$backup_file = $backup_dir.$tbname.'/';

	if(!file_exists($backup_file))
	{
		showmsg(str_replace("{%s}", $tbname, $_LANG['no_folder']), 'database.php?act=restore');
		exit();
	}
	else
	{
		DelDataDir($backup_file);
		header("location:database.php?act=restore");
		exit();
	}
}
/* 删除全部目录 */
elseif($act == 'deldirall')
{
	//验证权限
	chk_privilege("restore_manage");
	
	$oknum = 0;

	for($i=0; $i<count($tbname); $i++)
	{
		$backup_file = $backup_dir.$tbname[$i].'/';
		if(file_exists($backup_file))
		{
			DelDataDir($backup_file);
			$oknum++;
		}
	}
	header("location:database.php?act=restore");
	exit();
}
/* 删除.sql文件 */
elseif($act == 'del')
{
	//验证权限
	chk_privilege("restore_manage");
	
	$backup_file = $backup_dir.$dirname.'/'.$tbname;
	
	if(!file_exists($backup_file))
	{
		showmsg(str_replace("{%s}", $tbname, $_LANG['no_file']), 'database.php?act=sqldir&tbname='.$dirname);
		exit();
	}
	else
	{
		unlink($backup_file);
		header("location:database.php?act=sqldir&dirname=".$dirname."&tbname=".$tbname);
		exit();
	}
}
/* 删除全部.sql文件 */
elseif($act == 'delall')
{
	//验证权限
	chk_privilege("restore_manage");
	
	$oknum = 0;

	for($i=0; $i<count($tbname); $i++)
	{
		$backup_file = $backup_dir.$dirname.'/'.$tbname[$i];
		if(file_exists($backup_file))
		{
			unlink($backup_file);
			$oknum++;
		}
	}
	header("location:database.php?act=sqldir&dirname=".$dirname."&tbname=".$tbname);
	exit();
}
/* 展示.sql文件列表 */
elseif($act == 'sqldir')
{
	//验证权限
	chk_privilege("restore_manage");
	
	$backup_file = $backup_dir.$dirname.'/';

	if(!file_exists($backup_file))
	{
		ShowDataMsg(str_replace("{%s}", $tbname, $_LANG['no_folder']),'database?act=restore','red','1');
		exit();
	}

	$backup_files = glob($backup_file.'*.txt');
	$info = array();
	
	if(is_array($backup_files))
	{
		$files_size = 0;
		foreach($backup_files as $name)
		{
			$files['name']   = basename($name);
			$files['size']   = GetRealSize(filesize($name));
			$files['mktime'] = GetDateTime(filemtime($name));
			$files_size += filesize($name);
			$info[] = $files;
		}
	}

	$files_size = GetRealSize($files_size);
	$smarty->assign("info"		, $info);
	$smarty->assign("dirname"	, $dirname);
	$smarty->assign("files_size", $files_size);
	$smarty->assign("lang"		, $_LANG);
	$smarty->display('database_sqldir.html');
}
/* 还原数据表 */
elseif($act == 'reset')
{

	//验证权限
	chk_privilege("restore_manage");
	
	$database_msg = $_LANG['restore_tips'];
	
	$backup_dir .= $dirname.'/';
	$structfile = '';

	//第一次跳转应该是数组形式，之后就变成了字符形式
	if(!is_array($tbname))
		$bakfiles = explode(',', $tbname);
	else
		$bakfiles = $tbname;


	//设置当前记录条数
	if(empty($startgo))
	{
		$startgo = 0;
	}


	//循环备份文件
	foreach($bakfiles as $fname)
	{
		if(!preg_match("#txt$#", $fname))
		{
			continue;
		}


		//如果包含表结构
		if(preg_match("#table_struct#", $fname))
		{
			$structfile = $fname;
		}


		//备份文件列表，排除表结构
		if(filesize($backup_dir.$fname) > 0)
		{
			if($fname != $structfile)
			{
				$filelists[] = $fname;
			}
		}
		else
		{
		 	$filelists = '';
		}


		//如果包含配置表，则需要更新配置文件
		if(preg_match("#webconfig#", $fname))
			$conftb = 1;
		else
			$conftb = '';
	}


	//设置文件列表字符串
	if(!empty($filelists) && is_array($filelists))
		$bakfilesTmp = implode(',', $filelists);
	else
		$bakfilesTmp = '';


	//开始还原表结构
    if($startgo==0 && $structfile!='')
    {
        $tbdata = '';
        $fp = fopen($backup_dir.$structfile, 'r');
        while(!feof($fp))
        {
            $tbdata .= fgets($fp, 1024);
        }
        fclose($fp);


        $querys = explode(';', $tbdata);
        foreach($querys as $q)
        {
			if(trim($q) == '') continue;
			$dosql->ExecNoneQuery(trim($q).';');
        }

		$tmsg = $_LANG['restore_1'];
		$doform = array();
		$doform['act'] 			= 'reset';
		$doform['dirname'] 		= $dirname;
		$doform['startgo'] 		= '1';
		$doform['conftb'] 		= $conftb;
		$doform['tbname'] 		= $bakfilesTmp;
	
        PutInfo($tmsg, $doform);
        exit();
    }


	//开始还原表数据
    else
    {

		$oknum = 0;
        $nowfile = $bakfiles[0];
        $bakfilesTmp = preg_replace("#".$nowfile."[,]{0,1}#", "", $bakfilesTmp);

		//如果备份文件不为空
		if(filesize($backup_dir.$nowfile) > 0)
        {
            $fp = fopen($backup_dir.$nowfile, 'r');
            while(!feof($fp))
            {
                $line = trim(fgets($fp, 512*1024));
                if($line == '') continue;
                $rs = $dosql->ExecNoneQuery($line);
                $oknum++;
            }
            fclose($fp);
        }
	

		//当需要还原的文件为空
        if($bakfilesTmp == '')
        {

			//如果还原了webconfig表
			//重新生成配置文件
			if($conftb != '')
			{
				//生成全局配置文件
				$config_cache = LCSHOP_DATA.'/config.php';
				$str = '<?php	if(!defined(\'IN_LCSHOP\')) exit(\'Request Error!\');'."\r\n\r\n";
				$dosql->Execute("SELECT `varname`,`vartype`,`varvalue`,`vargroup` FROM `#@__webconfig` ORDER BY orderid ASC");
				while($row = $dosql->GetArray())
				{
					if($row['vartype'] == 'number')
					{
						if($row['varvalue'] == '')
						{
							$row['varvalue'] = 0;
						}
			
						$str .= "\${$row['varname']} = ".$row['varvalue'].";\r\n";
					}
					else
					{
						$str .= "\${$row['varname']} = '".str_replace("'",'',$row['varvalue'])."';\r\n";
					}
				}
				$str .= '?>';
				Writef($config_cache,$str);
			}
            PutInfo($_LANG['restore_2'], array());
			exit();
        }


		$tmsg  = str_replace("{%s}", $nowfile, str_replace("{%s1}", $oknum, $_LANG['restore_3']));
		$doform = array();
		$doform['act'] 			= 'reset';
		$doform['dirname'] 		= $dirname;
		$doform['startgo'] 		= '1';
		$doform['conftb'] 		= $conftb;
		$doform['tbname'] 		= $bakfilesTmp;
        PutInfo($tmsg, $doform);
        exit();
		//还原操作结束
    }
}
/* SQL查询 */
elseif($act == 'sql')
{
	$smarty->assign("lang" , $_LANG);
	$smarty->display('database_sql.html');
}
/* 执行SQL语句 */
elseif($act == 'runsql')
{

	//整理需要执行SQL语句
	$sqlquery = trim(stripslashes($sqlquery));


	if(empty($sqlquery))
	{
		ShowDataMsg($_LANG['js']['sqlquery'],'?act=sql','red','1');
		exit();
	}

	if(preg_match("#^drop(.*)table#i", $sqlquery) or
	   preg_match("#^drop(.*)database#i", $sqlquery))
	{
		ShowDataMsg($_LANG['sqldel'],'?act=sql','red','1');
		exit('a');
	}


	//运行查询语句
	if(preg_match("#^select #i", $sqlquery) or
	   preg_match("#^show #i", $sqlquery))
	{

		$dosql->Execute($sqlquery);
		if($dosql->GetTotalRow() <= 0)
		{
			ShowDataMsg(str_replace("{%s}", $sqlquery, $_LANG['sqlno']),'?act=sql','red','1');
			exit('1');
		}
		else
		{
			echo str_replace("{%s}", $sqlquery, str_replace("{%s1}", $dosql->GetTotalRow(), $_LANG['sqlyes']));
			$j = 0;
			while($row = $dosql->GetArray())
			{
				$j++;
				if($j > 100)
				{
					break;
				}

				echo "<div style='border-bottom:1px dotted #666;padding:10px 0;margin-bottom:8px;'>".$_LANG['rows']."：$j</div>";

				foreach($row as $k=>$v)
				{
					echo "<span style='color:#900'>{$k}：</span><span style='color:#039;'>{$v}</span><br />";
				}
			}
			exit();
		}
	}

	//多行SQL语句
	if($querytype == 2)
	{
		$sqlquery = str_replace("\r", "", $sqlquery);
		$sqls = preg_split("#;[\t]{0,}\n#", $sqlquery);
		$i = 0;
		foreach($sqls as $q)
		{
			$q = trim($q);
			if($q == '') continue;
			
			$dosql->ExecNoneQuery($q);
			$i++;
		}

		ShowDataMsg(str_replace("{%s}", $i, $_LANG['sqlone']),'?act=sql','red','1');
		exit();
	}

	//单行SQL语句
	else
	{
		$dosql->ExecNoneQuery($sqlquery);
		ShowDataMsg(str_replace("{%s}", "1", $_LANG['sqlone']),'?act=sql','red','1');
		exit();
	}

}


/* 显示提示信息 */
function ShowDataMsg($msg, $url_forward='', $color='red', $close=0, $ms=2000)
{
	global $smarty, $_LANG;
	$smarty->assign("lang"			, $_LANG);
	$smarty->assign("close"			, $close);
	$smarty->assign("msg"			, $msg);
	$smarty->assign("url_forward" 	, $url_forward);
	$smarty->assign("color"			, $color);
	$smarty->assign("ms"			, $ms);
	$smarty->display('database_message.html');
	exit();
}

//删除数据文件夹
function DelDataDir($dirname)
{
	global $act;
	$handler = opendir($dirname);

	while(($fname = readdir($handler)) !== false)
	{
		if($fname != '.' && $fname != '..')
		{
			if(@!unlink($dirname.$fname))
			{
				ShowDataMsg(str_replace("{%s}", $dirname, $_LANG['sqlfile']),'?act='.$act,'red','1');
				exit();
			}
		}
	}

	closedir($handler);
	rmdir($dirname);
}

/* 替换转移行 */ 
function RpLine($str)
{
	$str = str_replace("\r", "\\r", $str);
	$str = str_replace("\n", "\\n", $str);
	return $str;
}


/* 输出执行信息 */
function PutInfo($msg,$doform)
{	
	global $smarty, $_LANG, $database_msg;
	$smarty->assign("database_msg"	, $database_msg);
	$smarty->assign("lang"			, $_LANG);
	$smarty->assign("msg"			, $msg);
	$smarty->assign("doform"		, $doform);
	$smarty->display('database_msg.html');
	exit();
}

?>