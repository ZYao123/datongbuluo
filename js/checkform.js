// JavaScript Document
//formValidator准备函数，用之前必须先执行此函数
function ReadyValidator(formid)
{
	$.formValidator.initConfig
	({
		formID:formid,
		debug:false,
		submitOnce:true,
		onError:function(msg,obj,errorlist)
		{
			$("#errorlist").empty();
			$.map(errorlist,function(msg)
			{
				$("#errorlist").append("<li>" + msg + "</li>")
			});
			//alert(msg);
		},
		submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
	});
}
/**
 *判断是否为空
 *
 *@inputid        需要要判断是否为空的inputid
 *@onShowText     没有焦点的提示语
 *@onFocusText    有焦点的提示语
 *@onCorrectText  输入正确的提示语
 *@leftEmptyVal   输入内容左边是否允许为空true允许false不允许
 *@rightEmptyVal  输入内容右边是否允许为空true允许false不允许
 *@emptyErrorText 如果左右两边其中一边不允行为空时的报错信息
 *@onErrorText    输入内容为空的报错信息
**/
function isempty(inputid,onShowText,onFocusText,onCorrectText,leftEmptyVal,rightEmptyVal,emptyErrorText,onErrorText)
{
	
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.inputValidator
	({
		min:1,
		empty://判断输入信息是否为空
		{
			leftEmpty:leftEmptyVal,
			rightEmpty:rightEmptyVal,
			emptyError:emptyErrorText
		},
		onError:onErrorText//信息为空时提示信息
	})
	return false;
}


function passwd(inputid,onShowText,onFocusText,onCorrectText,onErrorText,url,ajaxErrorText,ajaxWaitText,act)
{
	
	var gourl = url+"?"+inputid+"="+$("#"+inputid).val()+"&act="+act;
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.ajaxValidator
	({
		dataType : "html",
		async : true,
		url : gourl,
		contentType: "application/json",
		processData: false,
		success:function(msg)
		{
			//alert(msg);
			if(msg == '0') 
			{
				return false
			}
			else
			{
				return true
			}
		},
		onError : ajaxErrorText,
		onWait : ajaxWaitText
	});
}

/**
 *比较输入的内容
 *
 *@inputid        当前需要要判断是否为空的inputid
 *@onShowText     没有焦点的提示语
 *@onFocusText    有焦点的提示语
 *@onCorrectText  输入正确的提示语
 *@leftEmptyVal   输入内容左边是否允许为空true允许false不允许
 *@rightEmptyVal  输入内容右边是否允许为空true允许false不允许
 *@emptyErrorText 如果左右两边其中一边不允行为空时的报错信息
 *@onErrorText    输入内容为空的报错信息
 *@desinputID     被比较的inputid
 *@operate        比较运算符
 *@ConErrorText   为假时的提示消息
**/
function Comparetext(inputid,onShowText,onFocusText,onCorrectText,leftEmptyVal,rightEmptyVal,emptyErrorText,onErrorText,desinputID,operate,ConErrorText)
{
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.inputValidator
	({
		min:1,
		empty://判断输入信息是否为空
		{
			leftEmpty:leftEmptyVal,
			rightEmpty:rightEmptyVal,
			emptyError:emptyErrorText
		},
		onError:onErrorText//信息为空时提示信息
	})
	.compareValidator
	({
		desID:desinputID,
		operateor:operate,
		onError:ConErrorText
	})	
	return false;
}


//判断手机和电话必填一个
function telandphone(inputid,onShowText,onFocusText,onCorrectText,onErrorText)
{
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:isphone,
		onError:onErrorText
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:function(){
			  if ( $("#phone").val() == '' && $("#telephone").val() == '' )
			  {
				  return onShowText;
			  }
			  return true;
			
	     }
	});
}




//判断手机和电话必填一个
function telandphone2(inputid,onShowText,onFocusText,onCorrectText,onErrorText)
{
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:function(){
			  if ( $("#phone").val() == '' && $("#telephone").val() == '' )
			  {
				  return onShowText;
			  }else{
				 var rexTel= /^1\d{10}$/;
	             var rexTel2= /^0\d{2,3}-?\d{7,8}$/;  
			 
			    if(!rexTel.test($("#phone").val()) && !rexTel2.test($("#telephone").val()))
	            {
		           return false;
	            }
	
	            return true;
			 }
			 
		}
	});
}

//文字验证验证
function wenzi(inputid,onShowText,onFocusText,onCorrectText,onErrorText)
{
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:function(){
			  if ( $("#"+inputid).val() == '' )
			  {
				  return onShowText;
			  }else{
				 var rexTel= /^[\u4e00-\u9fa5 ]{2,6}$/;
	             var rexTel2= /^[a-zA-Z\/ ]{2,20}$/;  
			  
			    if(!rexTel.test($("#"+inputid).val()) && !rexTel2.test($("#"+inputid).val()))
	            {
		           return false;
	            }
	
	            return true;
			 }
			 
		}
	});
}


function checkzipcode(inputid,onShowText,onFocusText,onCorrectText,onErrorText)
{
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:isZipCode,
		onError:onErrorText
	});
}


function checkuname(inputid,onShowText,onFocusText,onCorrectText,onErrorText,url,ajaxErrorText,ajaxWaitText,act)
{
	var gourl = url+"?"+inputid+"="+$("#"+inputid).val()+"&act="+act;
	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:isuser,
		onError:onErrorText
	})
	.ajaxValidator
	({
		dataType : "html",
		async : true,
		url : gourl,
		contentType: "application/json",
		processData: false,
		success:function(msg)
		{
			//alert(msg);
			if(msg == '0') 
			{
				return false
			}
			else
			{
				return true
			}
		},
		onError : ajaxErrorText,
		onWait : ajaxWaitText
	});
}

function checkpsw(inputid,onShowText,onFocusText,onCorrectText,onErrorText,url,ajaxErrorText,ajaxWaitText,act)
{
	var gourl = url+"?"+inputid+"="+$("#"+inputid).val()+"&act="+act;

	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.ajaxValidator
	({
		dataType : "html",
		async : true,
		url : gourl,
		contentType: "application/json",
		processData: false,
		success:function(msg)
		{
			if(msg == '0') 
			{
				return false
			}
			else
			{
				return true
			}
		},
		onError : ajaxErrorText,
		onWait : ajaxWaitText
	});
}

function checkboxs(divID,checkboxName,onShowText,onFocusText,onCorrectText,onErrorText)
{
	$(":checkbox[name='"+checkboxName+"']")
	.formValidator
	({
		tipID:divID,
		onShow:onShowText,
		onFocus:onFocusText,
		onCorrect:onCorrectText
	})
	.inputValidator
	({
		min:1,
		onError:onErrorText
	});
}
function ajaxdosubmit(fromid,url,divid)
{
	if ($.formValidator.pageIsValid('1')==true) 
	{ 
		$.ajax({
			cache: true,
			type: "POST",
			url:url,
			data:$('#'+fromid).serialize(),// 你的formid
			async: false,
			dataType: "text",
			success: function(data) {
					$("#"+divid).html(data);
			}
		});	
	}
}


function dosubmit(fromid,url)
{
	
	if ($.formValidator.pageIsValid('1')==true) 
	{ 
		 $('#'+fromid).submit();
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
	if (selectid == 'AddrProvince')
	{
		$("#AddrArea option").remove();
		$("#AddrArea").append("<option value='' >"+AddrArea+"</option>");		
	}	
	$.ajax({
		url : 'member.php?act=selectarea&parentid='+parentid,
		async: false,
		type: "get",
		dataType: "html",
		success:function(data){
			$("#"+changeid).append(data);
		}
	});	
}

function checkemail(inputid,onShowText,onFocusText,onCorrectText,onErrorText,url,ajaxErrorText,ajaxWaitText,act)
{
	var gourl = url+"?"+inputid+"="+$("#"+inputid).val()+"&act="+act;

	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:isemail,
		onError:onErrorText
	})
	.ajaxValidator
	({
		dataType : "html",
		async : true,
		url : gourl,
		contentType: "application/json",
		processData: false,
		success:function(msg)
		{
			//alert(msg);
			if(msg == '0') 
			{
				return false
			}
			else
			{
				return true
			}
		},
		onError : ajaxErrorText,
		onWait : ajaxWaitText
	});
}

function checkemailorname(inputid,onShowText,onFocusText,onCorrectText,onErrorText,url,ajaxErrorText,ajaxWaitText,act)
{
	var gourl = url+"?"+inputid+"="+$("#"+inputid).val()+"&act="+act;

	$("#"+inputid)
	.formValidator
	({
		onShow:onShowText,//没有焦点的提示语
		onFocus:onFocusText,//有焦点的提示语
		onCorrect:onCorrectText//输入正确的提示语
	})
	.functionValidator//调用外部函数
	({//外部函数名
		fun:isemailorname,
		onError:onErrorText
	})
	.ajaxValidator
	({
		dataType : "html",
		async : true,
		url : gourl,
		contentType: "application/json",
		processData: false,
		success:function(msg)
		{
			//alert(msg);
			if(msg == '0') 
			{
				return false
			}
			else
			{
				return true
			}
		},
		onError : ajaxErrorText,
		onWait : ajaxWaitText
	});
}

function checkaddr_m()
{
	var rec_name_val = $('#rec_name').val();//收货人
	if(rec_name_val=='')
	{
		$('#dialog_ext').html(rec_name);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var	s_patterns =	{
		mobile: function(text){
			return	/^0?(13|15|18|14|17)[0-9]{9}$/.test(text);
		},
		postCode	: function(text){
			return 	 /^[0-9]\d{5}$/.test(text);
		}
	};
	var phone_val = $('#phone').val();//手机号
	if(!s_patterns.mobile(phone_val))
	{
		$('#dialog_ext').html(mobileformat	);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var AddrCountry_id=document.getElementById("AddrCountry");//国家
	var AddrCountry_val = AddrCountry_id.options[AddrCountry_id.selectedIndex].value;
	if(AddrCountry_val=='')
	{
		$('#dialog_ext').html(AddrCountry);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var AddrProvince_id=document.getElementById("AddrProvince");//省份
	var AddrProvince_val = AddrProvince_id.options[AddrProvince_id.selectedIndex].value;
	if(AddrProvince_val=='')
	{
		$('#dialog_ext').html(AddrProvince);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var AddrCity_id=document.getElementById("AddrCity");//城市
	var AddrCity_val = AddrCity_id.options[AddrCity_id.selectedIndex].value;
	if(AddrCity_val=='')
	{
		$('#dialog_ext').html(AddrCity);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var AddrArea_id=document.getElementById("AddrArea");//地区
	var AddrArea_val = AddrArea_id.options[AddrArea_id.selectedIndex].value;
	if(AddrArea_val=='')
	{
		$('#dialog_ext').html(AddrArea);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var zipcode_val = $('#zipcode').val();//邮政编码
	if(zipcode_val=='')
	{
		$('#dialog_ext').html('请输入邮政编码');
		$('#dialog').show().fadeOut(1000);
		return false;
	}else if (!s_patterns.postCode(zipcode_val))
	{
		$('#dialog_ext').html(zipcodeerror);
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	var cur_address_val = $('#cur_address').val();//详细地址
	if(cur_address_val=='')
	{
		$('#dialog_ext').html('请输入详细地址');
		$('#dialog').show().fadeOut(1000);
		return false;
	}
}
	
