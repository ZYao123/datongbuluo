// JavaScript Document
$(function(){
	$('#sub').click(function(){
		usernamez = /^[a-zA-Z0-9]{6,20}$/;
		emailz = /^\w+([-+.]\w+)*@\w+([-.]\\w+)*\.\w+([-.]\w+)*$/;
		if($("#username").val() == ''){
			$("#username").focus();
			$("#reuser").html(username_input);
			return false;
		}
		if($("#username").val() == username_tip_log){
			$("#username").val("");
			$("#username").focus();
			$("#reuser").html(username_input);
			return false;
		}else{
			username = $("#username").val()
			if ( (!(usernamez.test(username))) && (!(emailz.test(username))) ){
				$("#reuser").html(username_ero);
				$("#username").focus();
				return false;
			}
		}
		if($("#password").val() == ''){
			$("#password").focus();
			$("#repass").html(password);
			return false;
		}else{
			$("#repass").html("");
		}
		//提交登录
		sub_login();
	})
	$('#username').click(function(){
		if($("#username").val() == username_tip_log){
			$("#username").val("");
			return false;
		}
	})
	$('#username').blur(function(){
		if($("#username").val() == ''){
			$("#username").val(username_tip_log);
			$("#reuser").html(username_input);
			return false;
		}
	})
	
})
function sub_login()
{
	$.ajax({
		type: "GET",
		async: false,
		url: "member.php",
		data : {act:'login_acc', username:$("#username").val(), password:$("#password").val(), rn:random1(0,100000)},
		success: function(msg){
			sub_reg_suc(msg);
			
		}
	})
}
function sub_reg_suc(msg)
{
	$("#regist_suc").css("height",$(window).height())//浏览器最大高度
	$("#regist_suc").slideDown(3000)//
	$("#gy_bldy").addClass("gy_bldy");//满屏
	if(msg > 0){
		$("#log_return").html("<img src='templates/default/images/tucc_06.jpg' width='30' height='31' />&nbsp;&nbsp;<a href = 'member.php?act=login'>未知错误，登录失败!</a>");
	}else{
		$("#log_return").html("<img src='templates/default/images/tuc_03.jpg' width='53' height='42' />&nbsp;&nbsp;<a href = 'member.php?act=default'>登录成功!</a>");
	}
}
