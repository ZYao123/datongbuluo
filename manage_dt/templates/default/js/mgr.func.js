
/***生成随机数***/
function random1(min1,max1){
    return Math.floor(min1+Math.random()*(max1-min1));
}

/* 权限选择所有 */
function chk_privilege(name)
{	
	if($("input[type='checkbox'][name='"+ name +"'][disabled!='true']").attr("checked")!='checked')
	{
		$("input[type='checkbox'][id^='"+ name +"'][disabled!='true']").removeAttr("checked");
	}
	else
	{
		$("input[type='checkbox'][id^='"+ name +"'][disabled!='true']").attr("checked","checked");
	}
}

/* 选择所有 */
function chk_privilege_all(name)
{	
	if($("input[type='checkbox'][id='"+ name +"'][disabled!='true']").attr("checked")!='checked')
	{
		$("input[type='checkbox'][name^='"+ name +"'][disabled!='true']").removeAttr("checked");
	}
	else
	{
		$("input[type='checkbox'][name^='"+ name +"'][disabled!='true']").attr("checked","checked");
	}
}

/* 公共选择所有 */
function chk_all(checked)
{	
	if(checked != 'checked')
	{
		$("input[type='checkbox'][name^='id'][disabled!='true']").removeAttr("checked");
	}
	else
	{
		$("input[type='checkbox'][name^='id'][disabled!='true']").attr("checked","checked");
	}
}

/* 删除选中提示 */
function ConfDelAll(formid)
{
	if($("input[type='checkbox'][name!='id'][name^='id']:checked").size() > 0)
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
	DialogConfirm(tips,url,titletips,button,cancelButton,"question",'');
}
/* 显示评论提示 */
function Confcom_y(url)
{
	DialogConfirm(tips_y,url,titletips,button,cancelButton,"question",'');
}
/* 不显示评论提示 */
function Confcom_n(url)
{
	DialogConfirm(tips_n,url,titletips,button,cancelButton,"question",'');
}


/* 展开合并下级 */
function DisplayRows(id)
{
	var rowpid = $("li[rel='rowpid_"+id+"']");
	var rowid  = $("span[id='rowid_"+id+"']");

	if(rowid.attr("class") == "disimg")
	{
		rowpid.hide();
		rowid.attr("class","disimg2");
	}
	else
	{
		rowpid.show();
		rowid.attr("class","disimg");
	}
}

/* 全部显示行 */
function ShowAllRows()
{
	$("tr[rel^='rowpid'][rel!='rowpid_0']").show();
	$("span[id^='rowid']").attr("class","disimg");
}

/* 全部隐藏行 */
function HideAllRows()
{
	$("tr[rel^='rowpid'][rel!='rowpid_0']").hide();
	$("span[id^='rowid']").attr("class","disimg2");
}



/* 隐藏子行 */
function Hide_Srows(id,str)
{
	var str_list_id='str_'+str+"_";
	var rowid='rowid_'+id;
	if($('span[id='+rowid+']').attr("name")=="hide")
	{
		$('tr[name^='+str_list_id+']').hide();
		$('span[id='+rowid+']').attr("class","disimg2");
		$('span[id='+rowid+']').attr("name","show");
	}else
	{
		$('tr[name^='+str_list_id+']').show();
		$('span[id='+rowid+']').attr("class","disimg");
		$('span[id='+rowid+']').attr("name","hide");
	}

}

/* 更新排序 */
function UpOrderID(url)
{
	$("#act").val('uporder');
	$("#form").attr("action", url).submit();
}



/* 查询 */
function Upselect(url,act)
{

	linkurl = url+'?act='+act+'&keyword='+$("#keyword").val();
	if($("#classid").val()!=''){
		linkurl += '&classid='+$("#classid").val();	
	}
	if($("#nav").val()!=''){
		linkurl += '&nav='+$("#nav").val();	
	}
	if($("#buie").val()!=''){
		linkurl += '&buie='+$("#buie").val();	
	}
	
	location.href=linkurl;
	
}


function Upselectorder(url,act)
{

	linkurl = url+'?act='+act+'&keyword='+$("#keyword").val();
	if($("#demo").val()!=''){
		linkurl += '&kstime='+$("#demo").val();	
	}
	if($("#demo1").val()!=''){
		linkurl += '&jstime='+$("#demo1").val();	
	}
	if($("#zt").val()!=''){
		linkurl += '&zt='+$("#zt").val();	
	}
	if($('#user_rank').val()!=''){
		linkurl += '&user_rank='+$("#user_rank").val();	
	}
	
	
	location.href=linkurl;
	
}

function Upselect1(url,act)
{
	linkurl = url+'?act='+act+'&keyword='+$("#keyword").val();
	location.href=linkurl;
}

/* 文件上传提示 */
function UploadPrompt(string)
{
	if(string == 0)
	{
		$(".uploading").html('<div class="upload_newfile_loading"><img src="templates/default/images/loading.gif">...</div>');
	}
	else
	{
		$('.uploading').html(string);
	}
}

/* 检查是否存在上传文件 */
function CheckIsUpload()
{
	if($("#upfile").val() == "")
	{
		UploadPrompt("请选择上传文件！");
		return false;
	}
	else
	{
		UploadPrompt(0);
		return true;
	}
}

/* 显示上传窗口 */
function showupload(inputname)
{
	DialogIframe('uploadfile.php?inputname='+inputname,'上传',400,130,'','上传','','dosubmit');
}

/* 规格显示类型 */
function shownorm(m)
{
	if(m == "text")
	{
		$("span[name='color[]']").hide();
		$("span[name='image[]']").hide();
	}
	if(m == "color")
	{
		$("span[name='color[]']").show();
		$("span[name='image[]']").hide();
	}
	if(m == "image")
	{
		$("span[name='color[]']").hide();
		$("span[name='image[]']").show();
	}
}

/* 增加规格html */
function AddDmTr(id, str)
{
	var a= $(".red:last").attr('data');
	a++;
	if(str==''){
		j = a-1;
		m = '';
		$("input[type=radio][name='rdotype']").each(function() {
			if($(this).attr("checked"))
			{
				m = $(this).val();	
			}
        });
		if(m == "text")
		{
			colordn='dn';
			imagedn='dn';
		}
		if(m == "color")
		{
			colordn='';
			imagedn='dn';
		}
		if(m == "image")
		{
			colordn='dn';
			imagedn='';
		}
		str = '<tr><td><span class="delvote">[<a href="javascript:;" onclick="DelDmTr($(this),\'\')">-</a>]</span> ';
		str += '<span class="delvote"><span class="red" data="'+a+'">*</span>'+norm_name+'：<input type="hidden" name="norm['+j+'][id]"/><input type="text" name="norm['+j+'][name]" class="v5-input in180" />&nbsp;</span> ';
		str += '<span class="'+colordn+'" name="color[]">'+color+'：<input type="text" name="norm['+j+'][color]" id="color_'+a+'" class="v5-input in180"  onclick="colorpicker(\'colorpanel_'+a+'\', \'color_'+a+'\', \'color_'+a+'\');" /> <span id="colorpanel_'+a+'"></span>&nbsp;</span> ';
		str += '<span class="'+imagedn+'" name="image[]">'+pic+'：<input type="text" name="norm['+j+'][pic]" id="pic_'+a+'" class="v5-input in180" />&nbsp;<a href="javascript:;" onclick="showupload(\'pic_'+a+'\')">'+uploadpic+'</a></span>';
		str += '</td></tr>';
	}
	$("#"+id).append(str);
	

}
/* 减少规格html */
function DelDmTr(trobj,id)
{
	if(id != '')
	{
		$.ajax({
			url : "goodsnorm.php?act=delnorm&id="+id+"&default="+Math.random(),
			type:'get',
			dataType:'html',
			success:function(data){
				trobj.parent().parent().remove();
			}
		});
	}
	else
	{
		trobj.parent().parent().remove();
	}
}

/* 减少规格html */
function DelDmTr2(trobj,id)
{
	if(id != '')
	{
		$.ajax({
			url : "goodstype.php?act=delnorm&id="+id+"&default="+Math.random(),
			type:'get',
			dataType:'html',
			success:function(data){
				trobj.parent().parent().remove();
			}
		});
	}
	else
	{
		trobj.parent().parent().remove();
	}
}

/* 添加商品获取品牌 属性 规格  
 * public int id 		分类id
 * public int goodsid	商品id
 * return string
 */
function add_select(id,goodsid)
{
	$.ajax({
		url : "goods.php?act=add_select&id="+id+"&goodsid="+goodsid+"&default="+Math.random(),
		type:'get',
		dataType:'html',
		beforeSend:function(){
			$("#add_select").html('<img src="templates/default/images/loading.gif">');
		},
		success:function(data){
			$('#add_select').html(data);
		}
	});	
}


/* 广告模式 */
function GetMode(m)
{
	if(m == "image")
	{
		$("#adpic").show();
		$("#adlink").show();
		$("#adtext").hide();
		$("#adwidth").show();
		$("#adheight").show();
	}
	if(m == "flash")
	{
		$("#adpic").show();
		$("#adlink").hide();
		$("#adtext").hide();
		$("#adwidth").show();
		$("#adheight").show();
	}
	if(m == "writing")
	{
		$("#adpic").hide();
		$("#adlink").show();
		$("#adtext").hide();
		$("#adwidth").hide();
		$("#adheight").hide();
	}
	if(m == "html")
	{
		$("#adpic").hide();
		$("#adlink").hide();
		$("#adtext").show();
		$("#adwidth").hide();
		$("#adheight").hide();
	}
}

function setdisabled(id, attr)
{	
	if(attr)
	{
		$("#"+id).attr("readonly","readonly");
	}
	else
	{
		$("#"+id).removeAttr("readonly");
	}
}

/* 放大图片 */
$(function(){  
	$('.tip').mouseover(function(){     
			var $tip=$('<div id="tip"><img src="'+this.alt+'" /></div>');
			$('body').append($tip);      
			$('#tip').show('fast');   
		}).mouseout(function(){      
			$('#tip').remove();   
		}).mousemove(function(e){      
			$('#tip').css({"top":(e.pageY-200)+"px","left":(e.pageX+30)+"px"
		})   
	})
})

//删除快递公司
function PostmodeDelAll(formid,url)
{

	if($("input[type='checkbox'][name!='id'][name^='id']:checked").size() > 0)
	{
		$("#"+formid).removeAttr("action");
		$("#"+formid).attr("action", url+"?act=PostmodeDel");
		DialogConfirm(tips,0,title,button,cancelButton,"question",formid);
	}
	else
	{
		DialogAlert(nocheck,0,title,button,'warning');
	}
	return false;
}

/* 商店配置 */
function tabs(tabobj,obj)
{
	$("#"+tabobj+" li[id^="+tabobj+"]").each(function(i){
		if(tabobj+"_title"+i == obj.id)
		{
			$("#"+tabobj+"_title"+i).attr("class","on");
			$("#"+tabobj+"_content"+i).show();
		}
		else
		{
			$("#"+tabobj+"_title"+i).attr("class","");
			$("#"+tabobj+"_content"+i).hide();
		}
	});
}

/* 属性值判断 */
function setattrvalue(id, i)
{
	if(id == 0 || id == 1)
	{ 
		$("#attrvalue_a_"+i).show();
	}
	else
	{
		$("#attrvalue_a_"+i).hide();
	}
}

function gr(attr_i)
{
	var aValue = '';
	$("input[type='text']").each(function(index){
		if(index != 0)
		{
			aValue += ',';
		}
		aValue += $(this).val();
	});	
	var origin = artDialog.open.origin;
	var input = origin.document.getElementById('attrvalue_input_'+attr_i);
	//origin.document.getElementById('attrvalue_span_'+attr_i).innerHTML=aValue;
	input.value = aValue;
	
	input.select();
	art.dialog.close();
}

function batch_add(name,tips,id)
{
	$("#"+id).html('<textarea name="'+name+'" id="'+name+'" class="v5-textarea tin60 w360"></textarea><br/>'+tips);
}
function gotopage(){
	var page = document.getElementById('gotopage').value;
	if(isNaN(page) || page.trim()==""){
	 return false; 
	}
	window.location.href="?page="+parseInt(page); 
}