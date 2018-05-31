$(function(){
	LeftMenuToggle();
});


/* 左侧菜单开关 */
function LeftMenuToggle()
{
	$(".togglemenu").click(function(){
		if($(".left").width()=='201'){
			$(".left").animate({width:"0px"},300,function(){$(this).hide()});
			$(".right").animate({left:"0px"},300);
			$(this).html('<img src="templates/default/images/left_btn2.png" border="0" />');
		}
		else{
			$(".left").show().animate({width:"201px"},300);
			$(".right").animate({left:"201px"},300);
			$(this).html('<img src="templates/default/images/left_btn02.png" border="0" />');
		}
	});
}

function TopMenu(lefturl,righturl)
{
	$('#menu').attr('src',lefturl);
	$('#main').attr('src',righturl);
}