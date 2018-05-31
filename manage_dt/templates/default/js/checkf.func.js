/*验证可带长度为2位的小数表单*/
$(function(){
	$('.checkKey').keydown(function(e){
                // 190、229、110 点
                // 48~57 和 96~105是数字
                // 8退格
                if(e.keyCode != 8 && e.keyCode != 46){
                        var self = $(this);
                        var value = self.val();
                        if(e.keyCode == 229){ 	 // 按下的是其它标点符号
                                if(value == '' || !parseFloat(value)){
                                $(this).val(self[0].defaultValue);
                                }else{
                                self.val(parseFloat(value).toFixed(2));
                                }
                                return false;
                        }else{
                                var selectionStart = self[0].selectionStart;
                                var selectionEnd = self[0].selectionEnd;
                                var float_index = value.indexOf('.');
                                if( (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode == 110 || e.keyCode == 190 || e.keyCode == 229){
                                        if(float_index != -1){	// 有个点
                                                if(e.keyCode == 110 || e.keyCode == 190 || e.keyCode == 229){	// 按下的还是点
                                                        if(float_index < selectionStart || float_index >= selectionEnd ){	 // 如果没点被选中
                                                        return false;	 // 取消事件
                                                        }
                                                }else
                                                {	 // 按下的不是点
                                                        if(selectionEnd > float_index && value.length - float_index >= 3 && selectionStart == selectionEnd){	 // 如果在点的后面 并且点后的长度大于等于2 并且没有选中任何值
                                                        return false;	// 取消事件
                                                        }
                                                }
                                        }
                                }else{
                                        return false;
                                }
                        }
                }
        })	
        $('.checkKey').blur(function(e){
                var value = $(this).val();
                if(value == '' || !parseFloat(value) && parseFloat(value) !=0){
                $(this).val('0.00');
                }else{
                $(this).val(parseFloat(value).toFixed(2));
                }
        })	
})
//验证管理员添加
function cfm_admin()
{
	//验证用户名
	var ckuname = /^[0-9a-zA-Z_@\.-]+$/;
	if($("#username").val() == "")
	{
		DialogAlert(usernameformat,0,title,button,'warning','username');
		return false;
	}
	else if($("#username").val().length < 5 || $("#username").val().length > 16)
	{
		DialogAlert(usernameformat,0,title,button,'warning','username');
		return false;
	}
	else if(!ckuname.test($("#username").val()))
	{
		DialogAlert(usernameformat,0,title,button,'warning','username');
		return false;
	}
	else
	{
		$.ajax({
			url : "privilege.php?act=usernameexist&username="+$("#username").val(),
			type:'get',
			dataType:'html',
			success:function(data){
				if (data == 1)
				{
					DialogAlert(usernameexist,0,title,button,'warning','username');
					return false;
				}
			}
		});
		
	}
	
	var ckupwd = /^[0-9a-zA-Z_-]+$/;
	if($("#password").val() == "")
	{
		DialogAlert(passwordformat,0,title,button,'warning','password');
		return false;
	}
	else if($("#password").val().length < 5 || $("#password").val().length > 16)
	{
		DialogAlert(passwordformat,0,title,button,'warning','password');
		return false;
	}
	else if(!ckupwd.test($("#password").val()))
	{
		DialogAlert(passwordformat,0,title,button,'warning','password');
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
	
	
	
	
	//验证邮箱
	var ckmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
	if($("#email").val() == "")
	{
		DialogAlert(emailformat,0,title,button,'warning','email');
		return false;
	}
	else if(!ckmail.test($("#email").val()))
	{
		DialogAlert(emailformat,0,title,button,'warning','email');
		return false;
	}	
	
	var ckmobile = /^1[3|4|5|8][0-9]\d{4,8}$/;
	if($("#mobile").val() == "")
	{
		DialogAlert(mobileformat,0,title,button,'warning','mobile');
		return false;
	}
	else if(!ckmobile.test($("#mobile").val()))
	{
		DialogAlert(mobileformat,0,title,button,'warning','mobile');
		return false;
	}
  
}



//验证管理员修改
function cfm_upadmin()
{	

	if($("#password").val() != "" && $("#repassword").val() != "")
	{
		if($("#password").val().length < 5 || $("#password").val().length > 16)
		{
			DialogAlert(passwordformat,0,title,button,'warning','password');
			return false;
		}
		else if(!ckupwd.test($("#password").val()))
		{
			DialogAlert(passwordformat,0,title,button,'warning','password');
			return false;
		}
	
		if($("#password").val() != $("#repassword").val())
		{
			DialogAlert(nopassword,0,title,button,'warning','repassword');
			return false;
		}
	}
	
	//验证邮箱
	var ckmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
	if($("#email").val() == "")
	{
		DialogAlert(emailformat,0,title,button,'warning','email');
		return false;
	}
	else if(!ckmail.test($("#email").val()))
	{
		DialogAlert(emailformat,0,title,button,'warning','email');
		return false;
	}	
	
	var ckmobile = /^1[3|4|5|8][0-9]\d{4,8}$/;
	if($("#mobile").val() == "")
	{
		DialogAlert(mobileformat,0,title,button,'warning','mobile');
		return false;
	}
	else if(!ckmobile.test($("#mobile").val()))
	{
		DialogAlert(mobileformat,0,title,button,'warning','mobile');
		return false;
	}
  
}

//角色添加
function cfm_role()
{
	if($("#rolename").val() == "")
	{
		DialogAlert(rolename,0,title,button,'warning','rolename');
		return false;
	}
	
	if($("#roledescription").val() == "")
	{
		DialogAlert(roledescription,0,title,button,'warning','roledescription');
		return false;
	}

}

/* 产品分类验证 */
function cfm_goodscategory()
{
	if($("#classname").val() == "")
	{
		DialogAlert(classname,0,title,button,'warning','classname');
		return false;
	}
	/*if($("#unit").val() == "")
	{
		DialogAlert(unit,0,title,button,'warning','unit');
		return false;
	}*/
}

/* 产品类型验证 */
function cfm_goodstype()
{
	if($("#classname").val() == "")
	{
		DialogAlert(classname,0,title,button,'warning','classname');
		return false;
	}
}

/* 选择性显示隐藏内容 */
function setdisplay(val)
{
	//属性
	if(val == '1')
	{
		$("#tboption0").hide();
		$("#tboption1").hide();
		$("#tboption2").show();
		$("#tboption3").show();
		$("#tboption4").show();
		$("#tboption5").show();
		
	}
	//规格
	if(val == '2')
	{
		$("#tboption0").show();
		$("#tboption1").show();
		$("#tboption2").hide();
		$("#tboption3").hide();
		$("#tboption4").hide();
		$("#tboption5").hide();
	}
	//品牌扩展
	if(val == '3')
	{
		$("#tboption0").hide();
		$("#tboption1").hide();
		$("#tboption2").hide();
		$("#tboption3").hide();
		$("#tboption4").hide();
		$("#tboption5").show();
		$("#checklist").removeAttr("disabled")
	}
	
}

/* 添加属性验证 */
function cfm_goodsattr()
{

	if($("#attrname").val() == "")
	{
		DialogAlert(attrname,0,title,button,'warning','attrname');
		return false;
	}
	
	if($("#attrtype").val() == 3)
	{
		if($("#checklist").val() == "")
		{
			DialogAlert(checklist,0,title,button,'warning','checklist');
			return false;
		}
	}
}

/* 添加规格验证 */
function cfm_goodsnorm()
{

	if($("#normname").val() == "")
	{
		DialogAlert(normname,0,title,button,'warning','normname');
		return false;
	}
	input=false;
	$("input[name^='norm']").each(function(index){
		if($("input[name='norm["+index+"][name]']").val()=="")
		{
			inputname="norm["+index+"][name]";
			input=true;
		}
	});
	if(input)
	{
		DialogAlert(norm_colorname,0,title,button,'warning',inputname);
		return false;
	}
}

/* 验证商品添加 */
function cfm_goods()
{
	
	if($("#classid").val() == 0)
	{
		DialogAlert(classid,0,title,button,'warning','classid');
		return false;
	}
	
	input=false;
	inputnull=false;
	$("input[name^='norm']").each(function(index){
		input=true
		if($(this).attr("checked"))
		{
			inputnull=true;
		}
	});

	if(input)
	{
		if(!inputnull)
		{
			DialogAlert(norm,0,title,button,'warning','norm');
			return false;
		}
	}
	
	if($("#wz1").val() == 0)
	{
		DialogAlert(wz1,0,title,button,'warning','wz1');
		return false;
	}
	
	if($("#title").val() == "")
	{
		DialogAlert(title,0,title,button,'warning','title');
		return false;
	}
	
	/*if($("#goodsNO").val() == "")
	{
		DialogAlert(goodsNOformat,0,title,button,'warning','goodsNO');
		return false;
	}*/
	if($("#buyprice").val() == "")
	{
		DialogAlert(buyprice,0,title,button,'warning','buyprice');
		return false;
	}
	if($("#salesprice").val() == "")
	{
		DialogAlert(salesprice,0,title,button,'warning','salesprice');
		return false;
	}
	if($("#weight").val() == "")
	{
		DialogAlert(weight,0,title,button,'warning','weight');
		return false;
	}
	if($("#housenum").val() == "")
	{
		DialogAlert(housenumformat,0,title,button,'warning','housenum');
		return false;
	}
	if($("#orderid").val() == "")
	{
		DialogAlert(orderid,0,title,button,'warning','orderid');
		return false;
	}
}

/* 广告位置 */
function cfm_ads_category()
{
	if($("#classname").val() == "")
	{
		DialogAlert(classname,0,title,button,'warning','classname');
		return false;
	}

	if($("#temp").val() == "")
	{
		DialogAlert(temp,0,title,button,'warning','temp');
		return false;
	}
}

/* 广告 */
function cfm_ads_list()
{
	if($("#classid").val() == "0")
	{
		DialogAlert(classid,0,title,button,'warning','classid');
		return false;
	}
	if($("#title").val() == "")
	{
		DialogAlert(title,0,title,button,'warning','title');
		return false;
	}
	if($("#starttime").val() == "")
	{
		DialogAlert(starttime,0,title,button,'warning','starttime');
		return false;
	}
	if($("#endtime").val() == "")
	{
		DialogAlert(endtime,0,title,button,'warning','endtime');
		return false;
	}
	admode = false;
	$("input[name^='admode']").each(function(index){
		if($(this).attr("checked"))
		{
			var admode_val=$(this).attr("value");
			if(admode_val=="image" || admode_val=="flash")
			{
				admode=true;
			}
		}
	});
	if(admode)
	{
		if($("#width").val() == "")
		{
			DialogAlert(width,0,title,button,'warning','width');
			return false;
		}
		if($("#height").val() == "")
		{
			DialogAlert(height,0,title,button,'warning','height');
			return false;
		}
	}
}

/* 购物券 */
function point_check()
{
	if($("#title").val() == "")
	{
		DialogAlert(title,0,title,button,'warning','title');
		return false;
	}
	if($("#classid").val() == "0")
	{
		DialogAlert(classid,0,title,button,'warning','classid');
		return false;
	}
	if($("#picurl").val() == "")
	{
		DialogAlert(picurl,0,title,button,'warning','picurl');
		return false;
	}
	if($("#money").val() == 0)
	{
		DialogAlert(money,0,title,button,'warning','money');
		return false;
	}
	if($("#meet_money").val() == 0)
	{
		DialogAlert(meet_money,0,title,button,'warning','meet_money');
		return false;
	}
	if($("#width").val() == "")
	{
		DialogAlert(width,0,title,button,'warning','width');
		return false;
	}
	if($("#height").val() == "")
	{
		DialogAlert(height,0,title,button,'warning','height');
		return false;
	}
	if($("#starttime").val() == "")
	{
		DialogAlert(starttime,0,title,button,'warning','starttime');
		return false;
	}
	if($("#endtime").val() == "")
	{
		DialogAlert(endtime,0,title,button,'warning','endtime');
		return false;
	}
	
}
/* BUG反馈 */
function cfm_bug()
{
	if($("#title").val() == "")
	{
		DialogAlert(title,0,title,button,'warning','title');
		return false;
	}
}

/* 新闻分类验证 */
function cfm_article_category()
{
	if($("#classname").val() == "")
	{
		DialogAlert(classname,0,title,button,'warning','classname');
		return false;
	}
}

/* 新闻验证 */
function cfm_article()
{
	if($("#classid").val() == "")
	{
		DialogAlert(classid,0,title,button,'warning','classid');
		return false;
	}
	if($("#title").val() == "")
	{
		DialogAlert(title,0,title,button,'warning','title');
		return false;
	}
}

/* 地区管理 */
function cfm_area()
{
	if($("#classname").val() == "")
	{
		if($("#classname").val() == "")
		{
			DialogAlert(classname,0,title,button,'warning','classname');
			return false;
		}
	}
}

/* 接口验证 */
function cfm_payment()
{
	if($("#name").val() == "")
	{
		DialogAlert(pay_name,0,title,button,'warning','name');
		return false;
	}
	if($("#depict").val() == "")
	{
		DialogAlert(depict,0,title,button,'warning','depict');
		return false;
	}
}

/* 自定义导航验证 */
function cfm_nav()
{
	if($("#classname").val() == "")
	{
		DialogAlert(classname,0,title,button,'warning','classname');
		return false;
	}
	if($("#linkurl").val() == "")
	{
		DialogAlert(linkurl,0,title,button,'warning','linkurl');
		return false;
	}
}

function fun_excel(url){
	var linkurl =url;
	var chk_value =[]; 
    $('input[type="checkbox"]:checked').each(function(){ 
		if(!isNaN($(this).val())){
         chk_value.push($(this).val()); 
		}
	});

 	if(chk_value.length>0){
		var checkstr = chk_value.join(",");
		linkurl+='&checkid='+checkstr;
	}
	
	location.href=linkurl;
}


function DelAll3(url,from)
{
	$("#form").attr("action", url+"?act=subdel&from="+from).submit();
	 
}

/* 友情链接 */
function cfm_link()
{
	if($("#webname").val() == "")
	{
		DialogAlert(webname,0,title,button,'warning','webname');
		return false;
	}
	if($("#linkurl").val() == "")
	{
		DialogAlert(linkurl,0,title,button,'warning','linkurl');
		return false;
	}
}
function select_con(id1,id2)
{
	$("#"+id1).css('display','block');
	$("#"+id2).css('display','none');

}