<?php	
if(!defined('IN_LCSHOP'))
{
    exit('Request Error!');
}

/* 备份 */
$_LANG['repair'] 			= '修复';
$_LANG['optimize'] 			= '优化';
$_LANG['backup'] 			= '备份数据';
$_LANG['structure'] 		= '结构';
$_LANG['backup_structure'] 	= '备份表结构';
$_LANG['volume_size']	 	= '分卷大小';
$_LANG['totalrow']	 		= '共';
$_LANG['total']	 			= '共有';
$_LANG['table']	 			= '个表';
$_LANG['table_name']	 	= '表名';
$_LANG['table_rows']	 	= '记录数';
$_LANG['table_size']	 	= '数据大小';
$_LANG['message_history']	= '点这里返回上一页';
$_LANG['message_close']		= '点这里关闭本页';
$_LANG['message_location']	= '如果您的浏览器没有自动跳转，请点击这里';
$_LANG['error_structure']	= '请选择要查看的数据表!';
$_LANG['error_repair']		= '没有指定要修复的表名!';
$_LANG['error_optimize']	= '没有指定要优化表名!';
$_LANG['error_backup']		= '请选择要备份的数据表!';
$_LANG['succeed_repair']	= '数据表修复完毕!';
$_LANG['succeed_optimize']	= '数据表优化完毕!';
$_LANG['backup_1']			= '<span color="blue">数据表结构备份完成...</span><br /><br />!';
$_LANG['backup_2']			= '<span color="blue">正在进行数据备份的初始化工作，请稍后...</span>';
$_LANG['backup_3']			= '<span color="red">完成到{%s1}条记录的备份，继续备份{%s2}表...</span>';
$_LANG['backup_4']			= '<strong color="blue">完成所有数据备份！</strong>';
$_LANG['backup_tips']		= '正在执行备份操作...';		
$_LANG['restore_tips']		= '正在准备还原其它数据...';						  
/* 还原 */						  
$_LANG['folder_name']		= '目录名';		
$_LANG['folder_size']		= '目录大小';	
$_LANG['folder_create_time']= '创建时间';	
$_LANG['backup_folder']	 	= '个备份目录';
$_LANG['see']	 			= '查看';
$_LANG['see_folder']	 	= '查看目录';	
$_LANG['no_folder']	 		= '没有找到 {%s} 备份目录！';	
$_LANG['file_name']			= '文件名';
$_LANG['file_size']			= '文件大小';	
$_LANG['backup_time']		= '备份时间';	
$_LANG['sql']				= '个SQL文件';	
$_LANG['no_file']	 		= '没有找到 {%s} 备份文件！';
$_LANG['restore']			= '还原备份';	

/* SQL */	
$_LANG['js']['sqlquery']	= '请输入要执行的SQL语句。';
$_LANG['sqldel']			= '删除\'数据表\'或\'数据库\'的语句不允许在这里执行。';
$_LANG['sqlno']				= '运行SQL：{%s}，无返回记录！';
$_LANG['sqlyes']			= '运行SQL：{%s}，共有 {%s1} 条记录，最大返回100条！';
$_LANG['sqlone']			= '成功执行{%s}个SQL语句！';
$_LANG['sqlfile']			= '删除失败，{%s}备份目录中可能还存在其他文件夹，请手动删除！';
$_LANG['rows']	 			= '记录';
$_LANG['restore_1']			= '<span color="blue">完成数据表结构还原，准备还原数据...</span><br /><br />';
$_LANG['restore_2']			= '<strong color="blue">完成所有数据还原！</strong>';
$_LANG['restore_3']			= '<div color="red">成功还原 [{%s}] 的{%s1}条记录...</div>';
$_LANG['querytype_0']		='单行命令（支持简单查询）';
$_LANG['querytype_2']		='多行命令';
$_LANG['querytype_submit']	='执行语句';
$_LANG['sql_query']			='执行结果';

/* 结构 */
$_LANG['structure_field'] 	= '字段[备注]';
$_LANG['structure_type'] 	= '类型(长度)';
$_LANG['structure_arrange'] = '整理';
$_LANG['structure_null'] 	= '允许为空';
$_LANG['structure_default'] = '默认值';
$_LANG['structure_extra'] 	= '额外';
$_LANG['total_field'] 		= '个字段';
?>