/*
 * 全选函数(文字按钮)
 *
 * @parma  form  string  表单的名称
 * @parma  mode  string  选择多选的状态
 */

function CheckAll(form, mode)
{
	for(var i=0; i<form.elements.length; i++)
	{
		var e = form.elements[i];
		if(e.name.indexOf('tbname') != -1 && e.disabled != true)
		{
			e.checked = mode;
		}
	}

	form.checkall.checked = mode;
}


/*
 * 全选函数(多选按钮)
 *
 * @parma  form  string  表单的名称
 */
 
function CheckAllBtn(form)
{
	for(var i=0; i<form.elements.length; i++)
	{
		var e = form.elements[i];
		if(e.name.indexOf('tbname') != -1 && e.disabled != true)
		{
			e.checked = form.checkall.checked;
		}
	}
}

/* 删除选中提示 */
function ConfDelAll(formid)
{
	if($("input[type='checkbox'][name!='tbname'][name^='tbname']:checked").size() > 0)
	{
		DialogConfirm(tips,0,title,button,cancelButton,"question",formid);
	}
	else
	{
		DialogAlert(nocheck,0,title,button,'warning');
	}
	return false;
}

/* 删除单条提示 */
function ConfDel(url)
{
	DialogConfirm(tips,url,title,button,cancelButton,"question",'');
}

/*
 * 表单提交函数
 *
 * @parma  dopost  string  操作字符串
 */
function Repair(dopost)
{
    document.forms[0].action = dopost;
    document.forms[0].submit();   
}

/* sql */
function mfg_sqlquery()
{
	alert(sqlquery)
	return false;
	if($("#sqlquery").val()=="")
	{
		DialogAlert(sqlquery,0,title,button,'warning','sqlquery');
		return false;
	}
}
