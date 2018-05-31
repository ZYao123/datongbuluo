//检查会员注册表单
function cfm_member(act)
{
	//验证用户名
	var ckuname = /^[\u4E00-\u9FA5a-z0-9A-Z_@\.-]+$/;
	if($("#username").val() == "")
	{
		DialogAlert(usernameblank,0,title,button,'warning','username');
		return false;
	}
	else if($("#username").val().length < 6 || $("#username").val().length > 16)
	{
		DialogAlert(usernameformat,0,title,button,'warning','username');
		return false;
	}
	else if(!ckuname.test($("#username").val()))
	{
		DialogAlert(usernameformat1,0,title,button,'warning','username');
		return false;
	}
	else if (chkUnique('username',act) == '1')
	{
		DialogAlert(usernameexist,0,title,button,'warning','username');
		return false;
	}

	
	//验证邮箱
	var ckmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	if($("#email").val() == "")
	{
		DialogAlert(emailblank,0,title,button,'warning','email');
		return false;
	}
	else if(!ckmail.test($("#email").val()))
	{
		DialogAlert(emailformat,0,title,button,'warning','email');
		return false;
	}
	else if (chkUnique('email',act) == '1')
	{
		DialogAlert(emailexist,0,title,button,'warning','email');
		return false;
	}		

	var ckupwd = /^[0-9a-zA-Z_-]+$/;
	if($("#password").val() == "")
	{
		DialogAlert(password,0,title,button,'warning','password');
		return false;
	}
	else if($("#password").val().length < 6 || $("#password").val().length > 16)
	{
		DialogAlert(passwordformat,0,title,button,'warning','password');
		return false;
	}
	else if(!ckupwd.test($("#password").val()))
	{
		DialogAlert(passwordformat1,0,title,button,'warning','password');
		return false;
	}

	if($("#repassword").val() == "")
	{
		DialogAlert(repassword,0,title,button,'warning','repassword');
		return false;
	}
	else if($("#password").val() != $("#repassword").val())
	{
		DialogAlert(nopassword,0,title,button,'warning','repassword');
		return false;
	}
	if($("#mobile").val() != "")
	{
		
		var ckmobile = /^1[3|4|5|7|8][0-9]\d{4,8}$/;
		if($("#mobile").val().length != 11 )
		{
			
			DialogAlert(mobile,0,title,button,'warning','mobile');
			return false;
		}
		else if(!ckmobile.test($("#mobile").val()))
		{
			
			DialogAlert(mobileformat,0,title,button,'warning','mobile');
			return false;
		}
		
		if (chkUnique('mobile',act) == '1')
		{
			
			DialogAlert(emailexist,0,title,button,'warning','mobile');
			return false;
		}	
	}
	
	
}


function cfm_member_level(act)
{
	//验证用户名
	var ckuname = /^[0-9a-zA-Z_@\.-]+$/;
	if($("#levelname").val() == "")
	{
		DialogAlert(levelnameblank,0,title,button,'warning','levelname');
		return false;
	}
	
	if($("#levelprice").val() == "")
	{
		DialogAlert(levelpriceblank,0,title,button,'warning','levelprice');
		return false;
	}
	
}




//验证会员名、邮箱、手机号唯一性
function chkUnique(id,act)
{
		var url;
		var teval='';
		if (act == 'subedit')
		{
			url = "member.php?tid="+$("#id").val()+"&act=Unique&id="+id+"&"+id+"="+$("#"+id).val();
		}
		else
		{
			url = "member.php?act=Unique&id="+id+"&"+id+"="+$("#"+id).val();
		}
		$.ajax({
			url : url,
			async: false,
			type: "get",
			dataType: "html",
			success:function(data){
				teval = data;
			}
		});
		return teval;
}

function cfm_upmember(act)
{
	
	//验证用户名
	var ckuname = /^[\u4E00-\u9FA5a-z0-9A-Z_@\.-]+$/;
	if($("#username").val() == "")
	{
		DialogAlert(usernameblank,0,title,button,'warning','username');
		return false;
	}
	else if($("#username").val().length < 6 || $("#username").val().length > 16)
	{
		DialogAlert(usernameformat,0,title,button,'warning','username');
		return false;
	}
	else if(!ckuname.test($("#username").val()))
	{
		DialogAlert(usernameformat1,0,title,button,'warning','username');
		return false;
	}
	else if (chkUnique('username',act) == '1')
	{
		DialogAlert(usernameexist,0,title,button,'warning','username');
		return false;
	}
	
	//验证邮箱
	var ckmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	if($("#email").val() == "")
	{
		DialogAlert(emailblank,0,title,button,'warning','email');
		return false;
	}
	else if(!ckmail.test($("#email").val()))
	{
		DialogAlert(emailformat,0,title,button,'warning','email');
		return false;
	}
	else if (chkUnique('email',act) == '1')
	{
		DialogAlert(emailexist,0,title,button,'warning','email');
		return false;
	}		
	
	
	//验证密码
	if($("#password").val() != "")
	{
		var ckupwd = /^[0-9a-zA-Z_-]+$/;
		if($("#password").val() == "")
		{
			alert("密码不能为空！");
			$("#password").focus();
			return false;
		}
		else if($("#password").val().length < 6 || $("#password").val().length > 16)
		{
			alert("密码长度为6~16位字符！");
			$("#password").focus();
			return false;
		}
		else if(!ckupwd.test($("#password").val()))
		{
			alert("请使用[数字/字母/中划线/下划线]！");
			$("#password").focus();
			return false;
		}
		else
		{
			
		}

		if($("#repassword").val() == "")
		{
			alert("确认密码不能为空！");
			$("#repassword").focus();
			return false;
		}
		else if($("#password").val() != $("#repassword").val())
		{
			alert("两次输入的密码不相同！");
			$("#repassword").focus();
			return false;
		}

		var ckmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if($("#email").val() == "")
		{
			alert("E-mail不能为空！");
			$("#email").focus();
			return false;
		}
		else if(!ckmail.test($("#email").val()))
		{
			alert("E-mail格式不正确！");
			$("#email").focus();
			return false;
		}
	}

	//验证手机号
	if($("#mobile").val() != "")
	{
		var ckmobile = /^1[3|4|5|7|8][0-9]\d{4,8}$/;
		if($("#mobile").val().length != 11 )
		{
			DialogAlert(mobile,0,title,button,'warning','mobile');
			return false;
		}
		else if(!ckmobile.test($("#mobile").val()))
		{
			DialogAlert(mobileformat,0,title,button,'warning','mobile');
			return false;
		}
		
		if (chkUnique('mobile',act) == '1')
		{
			DialogAlert(emailexist,0,title,button,'warning','mobile');
			return false;
		}	
	}
	
	
	
	
}

//验证商品添加
function cfm_goods()
{
	if($("#classid").val() == "-1")
	{
		alert("请选择所属类别！");
		$("#classid").focus();
		return false;
	}
	if($("#title").val() == "")
	{
		alert("请填写商品名称！");
		$("#title").focus();
		return false;
	}
	if($("#marketprice").val() == "")
	{
		alert("请填写商品市场价！");
		$("#marketprice").focus();
		return false;
	}
	if($("#salesprice").val() == "")
	{
		alert("请填写商品销售价！");
		$("#salesprice").focus();
		return false;
	}
	if($("#goodsid").val() == "")
	{
		alert("请填写商品编号！");
		$("#goodsid").focus();
		return false;
	}
}

//验证评论
function cfm_review()
{
	if($("#goodsid").val() == "-1")
	{
		alert("请选择商品名称！");
		$("#goodsid").focus();
		return false;
	}
	if($("#nickname").val() == "")
	{
		alert("请填写用户昵称！");
		$("#nickname").focus();
		return false;
	}
	if($("#content").val() == "")
	{
		alert("请填写评论内容！");
		$("#content").focus();
		return false;
	}
}

//验证配送区域
function cfm_postarea()
{
	if($("#classname").val() == "")
	{
		alert("请填写配送区域名称！");
		$("#classname").focus();
		return false;
	}
	if($("#freight").val() == "")
	{
		alert("请填写配送区域价格！");
		$("#freight").focus();
		return false;
	}
}

//自定义菜单
function cfm_diymenu()
{
	if($("#classname").val() == "")
	{
		alert("请填写菜单名称！");
		$("#classname").focus();
		return false;
	}
}

//投票选项
function cfm_vote()
{
	if($("#title").val() == "")
	{
		alert("请填写投票标题！");
		$("#title").focus();
		return false;
	}
}

//导航菜单
function cfm_nav()
{
	if($("#classname").val() == "")
	{
		alert("请填写导航名称！");
		$("#classname").focus();
		return false;
	}
	if($("#linkurl").val() == "")
	{
		alert("请填写链接地址！");
		$("#linkurl").focus();
		return false;
	}
}


//自定义字段验证
function cfm_diyfield()
{
	if($("#fieldname").val() == "")
	{
		alert("请填写字段名称！");
		$("#fieldname").focus();
		return false;
	}
	if($("#fieldtitle").val() == "")
	{
		alert("请填写字段标题！");
		$("#fieldtitle").focus();
		return false;
	}
	if($("#fieldlong").val() == "")
	{
		var fieldtype = $('input[name="fieldtype"]:checked').val();
		if(fieldtype != "text" && fieldtype != "mediumtext" && fieldtype != "fileall" && fieldtype != "datetime")
		{
			alert("请填写字段长度！");
			$("#fieldlong").focus();
			return false;
		}
	}
}


//碎片数据
function cfm_fragment()
{
	if($("#title").val() == "")
	{
		alert("请填写碎片数据标识！");
		$("#title").focus();
		return false;
	}
}

//增加规格html
function AddDmTr(id, str)
{
	
	if(str==''){
		i++;
		j = i - 1;
		str = '<tr><td><span class="delvote">[<a href="javascript:;" onclick="DelDmTr($(this))">-</a>]</span> '+colorname+'：<input type="text" name="specification['+j+'][0]" class="class_input" />&nbsp;'+color+'：<input type="text" name="specification['+j+'][1]" id="color'+i+'" class="class_input"  onclick="colorpicker(\'colorpanel'+i+'\', \'color'+i+'\', \'title\');" /> <span id="colorpanel'+i+'"></span>&nbsp;'+pic+'：<input type="text" name="specification['+j+'][2]" id="pic_'+i+'" class="class_input" /><a href="javascript:;" onclick="showupload(\'pic_'+i+'\')">'+uploadpic+'</a></td></tr>';
	}
	//alert(str);
	$("#"+id).append(str);
	
	
}
//减少规格html
function DelDmTr(trobj)
{
	trobj.parent().parent().remove();
}

//显示上传窗口
function showupload(inputname)
{
	$("#graybg").show();
	$("#popup_window").show();
	$("#msg_area").html('<iframe frameborder="0" src="uploadfile.php?inputname='+inputname+'" width="100%" height="100" scrolling="no"></iframe>');
}


//隐藏上传窗口
function hideupload(data)
{
	$("#graybg").hide();
	$("#popup_window").hide();
}


////创建上传窗口
//$(function(){
//	$("body").append('<div id="graybg"> </div> <div id="popup_window"><div class="header"><span class="title">上传文件：</span> <span class="close_div"><a href="javascript:hideupload();" ></a></span><div class="cl"></div></div><div class="msg_area" id="msg_area"> </div></div>');
//});


/* 运费模板管理 */
function cfm_ship()
{

	if($("#TemName").val() == "")
	{
		DialogAlert(TemName,0,title,button,'warning','TemName');
		return false;
	}
	if($("#AddrCity").val() == "")
	{
		DialogAlert(TemAddressID,0,title,button,'warning','TemName');
		return false;
	}
	
	var pcid;
	var i = 0 ;
	var j = 0 ;
	var Text;
	var TemPricing=$('input:radio[name="TemPricing"]:checked').val();
	if (TemPricing == 0)
	{
		Text = ShipWeight;
	}
	else if (TemPricing == 1)
	{
		Text = ShipItem;
	}
	else if (TemPricing == 2)
	{
		Text = ShipVolume;
	}
	var DialogText = '';
	
	$("input[name='pid[]']").each(function(){
		if ($(this).attr('checked') == 'checked')
		{
			pcid = $(this).val();
			$("input[name='first"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipFirst+Text;
					j++;
				}
			});
			
			$("input[name='fprice"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipFirst+ShipPrice1;
					j++;
				}
			});	
			
			$("input[name='second"+pcid+"[]']").each(function(){
				
				if ($(this).val() == '')
				{
					DialogText += ShipSecond+Text;
					j++;
				}
			});
			
			$("input[name='sprice"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipSecond+ShipPrice1;
					j++;
				}
			});	
			
			$("input[name='area"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += Shiparea;
					j++;
				}
			});			
						
			i++;
		}
	});
	
	if (j != 0)
	{
		DialogAlert(DialogText+ShipNone,0,title,button,'warning','TemName');
		return false;
	}
	if (i == 0)
	{
		DialogAlert(ShipSelectPcid,0,title,button,'warning','');
		return false;
	}	
}
function cfm_ship_edit()
{

	if($("#TemName").val() == "")
	{
		DialogAlert(TemName,0,title,button,'warning','TemName');
		return false;
	}
	if($("#AddrCity").val() == "")
	{
		DialogAlert(TemAddressID,0,title,button,'warning','TemName');
		return false;
	}
	
	var pcid;
	var i = 0 ;
	var j = 0 ;
	var Text;
	var TemPricing=$('input:radio[name="TemPricing"]:checked').val();
	if (TemPricing == 0)
	{
		Text = ShipWeight;
	}
	else if (TemPricing == 1)
	{
		Text = ShipItem;
	}
	else if (TemPricing == 2)
	{
		Text = ShipVolume;
	}
	var DialogText = '';
	
	$("input[name='pid[]']").each(function(){
		if ($(this).attr('checked') == 'checked')
		{
			pcid = $(this).val();
			
			$("input[name='first_edit"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipFirst+Text;
					j++;
				}
			});
			
			$("input[name='fprice_edit"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipFirst+ShipPrice1;
					j++;
				}
			});	
			
			$("input[name='second_edit"+pcid+"[]']").each(function(){
				
				if ($(this).val() == '')
				{
					DialogText += ShipSecond+Text;
					j++;
				}
			});
			
			$("input[name='sprice_edit"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipSecond+ShipPrice1;
					j++;
				}
			});	
			
			$("input[name='area_edit"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += Shiparea;
					j++;
				}
			});
						
			$("input[name='first"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipFirst+Text;
					j++;
				}
			});
			
			$("input[name='fprice"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipFirst+ShipPrice1;
					j++;
				}
			});	
			
			$("input[name='second"+pcid+"[]']").each(function(){
				
				if ($(this).val() == '')
				{
					DialogText += ShipSecond+Text;
					j++;
				}
			});
			
			$("input[name='sprice"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += ShipSecond+ShipPrice1;
					j++;
				}
			});	
			
			$("input[name='area"+pcid+"[]']").each(function(){
				if ($(this).val() == '')
				{
					DialogText += Shiparea;
					j++;
				}
			});
			
			i++;
		}
	});
	
	if (j != 0)
	{
		DialogAlert(DialogText+ShipNone,0,title,button,'warning','TemName');
		return false;
	}
	if (i == 0)
	{
		DialogAlert(ShipSelectPcid,0,title,button,'warning','');
		return false;
	}	
}

/* 地区联动 */
function do_area(selectid,changeid,changecontent)
{
	var parentid = $("#"+selectid).val();
	$("#"+changeid+" option").remove();
	$("#"+changeid).append("<option value='' >"+changecontent+"</option>");
	if (selectid == 'AddrCountry')
	{
		$("#AddrCity option").remove();
		$("#AddrCity").append("<option value='' >"+AddrCity+"</option>");
		$("#AddrArea option").remove();
		$("#AddrArea").append("<option value='' >"+AddrArea+"</option>");		
	}
	if (selectid == 'AddrCountry')
	{
		$("#AddrCity option").remove();
		$("#AddrCity").append("<option value='' >"+AddrCity+"</option>");
		$("#AddrArea option").remove();
		$("#AddrArea").append("<option value='' >"+AddrArea+"</option>");		
	}
	if (selectid == 'AddrProvince')
	{
		$("#AddrArea option").remove();
		$("#AddrArea").append("<option value='' >"+AddrArea+"</option>");		
	}	
	$.ajax({
		url : 'shipping.php?act=selectarea&parentid='+parentid,
		async: false,
		type: "get",
		dataType: "html",
		success:function(data){
			$("#"+changeid).append(data);
		}
	});	
}
/* 重选计费方式 */
function reloadshipadd()
{
	$(".shipHidden").slideUp('3000');
	$(".shipHidden").html('&nbsp;');
	$("input[type='checkbox'][name^='pid'][disabled!='true']").removeAttr("checked");
	

}
function reloadshipedit(pids,sid,tid)
{
	$(".shipHidden").slideUp('3000');
	$(".shipHidden").html('&nbsp;');
	$("input[type='checkbox'][name^='pid'][disabled!='true']").removeAttr("checked");
	
	var TemPricing=$('input:radio[name="TemPricing"]:checked').val();
	var pid= new Array();
	pid=pids.split(",");
	for (i=0;i<pid.length ;i++ )    
    {
		//selectship(pid[i]);
		
		$.ajax({
			url : 'shipping.php?act=selectship&sid='+sid+'&pid='+$("#pid"+pid[i]).val()+"&TemPricing="+TemPricing,
			async: false,
			type: "get",
			dataType: "html",
			success:function(data){
				//alert(data);
				$("#ship"+pid[i]).html(data);
				if (tid == TemPricing)
				{
					$("input[type='checkbox'][id='pid"+pid[i]+"']").attr("checked","checked");
					$("#ship"+pid[i]).slideToggle("3000");
				}				
			}
		});
    } 
}

/* 选择配费方式 */
function selectship(id)
{
	var TemPricing=$('input:radio[name="TemPricing"]:checked').val();
	$("#ship"+id).slideToggle("3000",function()
		{
			if ($("#ship"+id).css('display') == 'none') 
			{
				$("#ship"+id).html('&nbsp;');
			}
			else
			{
				$.ajax({
					url : 'shipping.php?act=selectship&pid='+$("#pid"+id).val()+"&TemPricing="+TemPricing,
					async: false,
					type: "get",
					dataType: "html",
					success:function(data){
						$("#ship"+id).html(data);
					}
				});		
			}			
		}
	);		
}
/* 选择配费方式 */
function selectshipedit(id,sid)
{
	var TemPricing=$('input:radio[name="TemPricing"]:checked').val();
	$("#ship"+id).slideToggle("3000",function()
		{
			if ($("#ship"+id).css('display') == 'none') 
			{
				$("#ship"+id).html('&nbsp;');
			}
			else
			{
				$.ajax({
					url : 'shipping.php?act=selectship&sid='+sid+'&pid='+$("#pid"+id).val()+"&TemPricing="+TemPricing,
					async: false,
					type: "get",
					dataType: "html",
					success:function(data){
						$("#ship"+id).html(data);
					}
				});		
			}			
		}
	);		
}

/* 为指定地区城市设置运费 */
function ShipSpecial(id,actdel)
{
	if ($("#ShipSpecial"+id).css("display") == 'none')
	{
		$("#ShipSpecial"+id).slideToggle("3000");
	}

		var pid = random1(1,9999);
		var newRow = "<tr id='tr"+pid+"'><td><div id='area"+pid+"' class=\"shiparea1 fl\">"+ShipAreaNone+"</div><div class=\"fr\"><a href='javascript:;' onclick=\"javascript:areapostvalue('"+pid+"');DialogIframe('shipping.php?act=shiparea','"+ShipSelectArea+"','55%','70%','','','','dosubmit')\">"+action_edit+"</a></div><input type=\"hidden\" name=\"area"+id+"[]\" id=\"attrvalue_input_"+pid+"\" /></td><td align='center'><input maxlength='6' name='first"+id+"[]' value='1' type='text' id='first"+pid+"'  onblur='ShipPricing(this.id)'  /></td><td align='center'><input maxlength='6' name='fprice"+id+"[]' type='text' id='fprice"+pid+"' onblur='ShipPrice(this.id)' /></td><td align='center'><input maxlength='6' name='second"+id+"[]' value='1' type='text' id='second"+pid+"' onblur='ShipPricing(this.id)'></td><td align='center'><input maxlength='6' name='sprice"+id+"[]' type='text' id='sprice"+pid+"' onblur='ShipPrice(this.id)'></td><td align='center'><a href='javascript:;' onclick='ShipSpecialDel(\"tr"+pid+"\",\"\")'>"+action_del+"</td></tr>";
		$("#ShipSpecial"+id+" tr:last").after(newRow);

}
/* 验证数据（重量/体积/件） */
function ShipPricing(inputid)
{
	    var TemPricing=$('input:radio[name="TemPricing"]:checked').val();
		var val = $('#'+inputid).val();
	    var reg = /^[0-9]+.?[0-9]*$/;
		if (val.match(reg))//是数字
		{
			if (TemPricing == '1')
			{
				$('#'+inputid).val(parseInt(val));
			}
			else
			{
				var match = /^(\d+(\.\d)?)(\d*)$/; 
				var ok = match.test(val); 
				var newValue = RegExp.$1; 
				$('#'+inputid).val(newValue);
			}
		}
		else
		{
			$('#'+inputid).val('');
		}	
}

/* 验证数据（价格） */
function ShipPrice(inputid)
{
		var val = $('#'+inputid).val();
		
	    var reg = /^[0-9]+.?[0-9]*$/;
		if (val.match(reg))//是数字
		{
			$('#'+inputid).val(Math.floor(parseFloat(val) * 100) / 100);
		}
		else
		{
			$('#'+inputid).val('');
		}	
}
function ShipSpecialDel(id,dbid)
{
	if (dbid == '')
	{
		$('#'+id).remove();
	}
	else
	{
		
		$.ajax({
			url : 'shipping.php?act=ShipinfoDel&id='+dbid,
			async: false,
			type: "get",
			dataType: "html",
			success:function(data){
				if (data == '1')
				{
					$('#'+id).remove();
				}
			}
		});	
		
		
	}
}

/* mywork  滑动门 */
function huandong(id,count)
{
	for (var i=1; i<=count; i++)
	{
		$('#content'+i).css('display','none');
		$('#title'+i).attr('class','');
		$('#title'+i).css('color','#d04440');
		
	}
	$('#content'+id).fadeIn(1000);
	$('#title'+id).attr('class','xyh_z');
	$('#title'+id).css('color','#4d4d4d');
}

function getneworders(page,orderlistnum)
{
	$.ajax({
		url : 'index.php?act=getneworders&pagecount=6&page='+page+'&orderlistnum='+orderlistnum,
		async: false,
		type: "get",
		dataType: "html",
		success:function(data){
			$("#getneworders").html(data);
		}
	});	
}

function ShipAreaSelect(id,v)
{
	if($("input[type='checkbox'][id='"+id+"'][disabled!='true']").attr("checked")!='checked')
	{
		$("input[type='checkbox'][id='"+id+"_1'][disabled!='true']").removeAttr("checked");
		$("#span"+id).html("&nbsp;");
		$("#span1"+id).html("");
		$("#span2"+id).html("");
	}
	else
	{
		$("input[type='checkbox'][id='"+id+"_1'][disabled!='true']").attr("checked","checked");
		$("#span"+id).html(v);
		$("#spana"+id).html("(");
		$("#spanb"+id).html(")");
	}
	
}

function ShipAreaSelect1(id,check,k)
{
	var val = $("#span"+id).html();
	if (val == '&nbsp;' || val == '')
	{
		val = 0;
	}
	else
	{
		val = parseInt(val);
	}
	
	if(check)
	{//加1
		val = val+1;
	}
	else
	{//减1
		val = val-1;
		if (val<0) val = 0;
	}
	if (val >= k)
	{
		$("input[type='checkbox'][id='"+id+"'][disabled!='true']").attr("checked","checked");
	}
	else
	{
		$("input[type='checkbox'][id='"+id+"'][disabled!='true']").removeAttr("checked");
	}
	$("#span"+id).html(val);
	$("#span1"+id).html("(");
	$("#span2"+id).html(")");	
	
}

function ShipAreaShow(id,id1)
{
	$(".ShipAreaHidden").css('display','none');
	$(".ShipArea").css('border','solid 1px #fff');
	$(".ShipArea").css('border-bottom','0px');
	$(".ShipArea").css('background-color','transparent');	

	$("#"+id).css('display','block');
	$("#"+id1).css('background-color','#FFC');
}
function ShipAreaHide(id,id1)
{
	$("#"+id).css('display','none');
	$("#"+id1).css('border','solid 1px #fff');
	$("#"+id1).css('border-bottom','0px');
	$("#"+id1).css('background-color','transparent');	
	
}

function areapostvalue(id)
{
	art.dialog.data('Value', id);
	art.dialog.data('inputValue', $('#attrvalue_input_'+id).val());
}

function areadosubmit()
{
	var inputValue = ',';
	
	
	$("input[name='areaid1[]']").each(function(){
		if ( $(this).attr("checked") == 'checked')
		{
			inputValue += $(this).val()+",";
		}
		else
		{
			var areaid = $(this).attr("id");
			$("input[id='"+areaid+"_1']").each(function(){
				if ( $(this).attr("checked") == 'checked')
				{
					inputValue += $(this).val()+",";
				}
			})
		}
		
    })	

	var origin = artDialog.open.origin;
	var input = origin.document.getElementById('attrvalue_input_'+Value);
	input.value = inputValue;
	
	$.ajax({
		url : 'shipping.php?act=getarea&inputValue='+inputValue,
		async: false,
		type: "get",
		dataType: "html",
		success:function(data){
			origin.document.getElementById('area'+Value).innerHTML = data;
		}
	});	
	//
	
	art.dialog.close();
}
function shipareaload()
{
	var c1;
	if (inputValue != '')
	{
		inputValue=inputValue.split(",");
		for (i=0;i<inputValue.length ;i++ )
		{
			if (inputValue[i] != '')
			{
				var c=0;
				//alert($("#"+inputValue[i]));
				if ($("#"+inputValue[i]).length > 0)
				{
					$("#"+inputValue[i]).attr('checked','checked');
					
					$("input[id='"+inputValue[i]+"_1']").each(function(){
						$(this).attr('checked','checked')
						c++;
						})
					$("#span"+inputValue[i]).html(c);
					$("#span1"+inputValue[i]).html("(");
					$("#span2"+inputValue[i]).html(")");					
					
				}
				else
				{
					$("input[value='"+inputValue[i]+"']").attr('checked','checked');

					var spanid = $("input[value='"+inputValue[i]+"']").attr('id');
					spanid = spanid.replace(/_1/,'');
					if ($("#span"+spanid).html() == '&nbsp;')
					{
						c1 = 0;
					}
					else
					{
						c1 = parseInt($("#span"+spanid).html());
					}
					c = c1+1;
					$("#span"+spanid).html(c);
					$("#span1"+spanid).html("(");
					$("#span2"+spanid).html(")");					
				}
			}
		}
	}
}

