$(function(){

	$(".viewport").css("height", $(".overview").height());
	$("#scrollmenu").tinyscrollbar();

	FirstLoad();

	$(window).resize(function(){
		FirstLoad();
	});
});


//点击操作
function DisplayMenu(id)
{
	$("div[id^=leftmenu][id!="+id+"]").hide();
	$(".title").removeClass("ton");
	
	var t = $("#"+id);
	t.toggle();
	
	if(t.css("display") == "block"){
		t.prev().addClass("ton");
	}else{
		t.prev().removeClass("ton");
	}
	FirstLoad();
}


//载入初始化
function FirstLoad()
{
	if($(".overview").height() > $(window).height()-50)
	{
		if($.browser.msie){ 
			$(".tGradient").show();
			$(".bGradient").show();
		}else{
			$(".tGradient").fadeIn(100);
			$(".bGradient").fadeIn(100);
		}

		$(".viewport").css({"height":$(window).height()-50, "overflow":"hidden"});
	}
	else
	{
		if($.browser.msie){ 
			$(".tGradient").hide();
			$(".bGradient").hide();
		}else{
			$(".tGradient").fadeOut(100);
			$(".bGradient").fadeOut(100);
		}

		$(".viewport").css({"height":$(".overview").height(), "overflow":"none"});
	}

	$("#scrollmenu").tinyscrollbar_update("relative");
}

/* 改变左侧a标签样式 */
function setmenuclass(id)
{
	$("li").each(function(index) {
 		$(this).attr("class","leftl_bj2");
    });
	$("#"+id).attr("class","leftl_bj1");
}
 