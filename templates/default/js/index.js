
$(function(){
	  
	$('.pro_list').bxSlider({
	    slideWidth: 137,
	    minSlides: 1,
	    maxSlides: 1,
		moveSlides: 1,
		pager:false,
	    slideMargin: 10
	  });
	  
	  	
	var oNav = $('#LoutiNav'); //导航壳
    var aNav = oNav.find('li'); //导航
    var aDiv = $('#main .floor'); //楼层
    var oTop = $('#goTop'); //回到顶部 
    $(window).scroll(function() {
            var winH = $(window).height();//可视窗口高度
            var iTop = $(window).scrollTop();//鼠标滚动的距离

            if(iTop >= 600) {
                oNav.fadeIn();
                oTop.fadeIn();
                //鼠标滑动样式改变
                aDiv.each(function() {
                    if(winH + iTop - $(this).offset().top > winH / 2) {
                        aNav.removeClass('active');
                        aNav.eq($(this).index()).addClass('active');
                    }
                })
            } else {
                oNav.fadeOut();
                oTop.fadeOut();
            }
        })
    //点击回到当前楼层
    aNav.click(function() {
        var t = aDiv.eq($(this).index()).offset().top;
        $('body,html').animate({
            "scrollTop": t
        }, 500);
//      $(this).addClass('active').siblings().removeClass('active');
    });
    //回到顶部
    oTop.click(function() {
        $('body,html').animate({
            "scrollTop": 0
        }, 500)
    })
    
    
//  产品详情页
    $(".pro_xx_head>li").mouseover(function(){
		    		$(this).addClass('current').siblings().removeClass('current');
		var index = $(this).index();
		$('.pro_xx_txt').eq(index).show().siblings('.pro_xx_txt').hide();
    })
    
//  登录注册
	$(".reg_tit>li").click(function(){
		    		$(this).addClass('current').siblings().removeClass('current');
		var index = $(this).index();
		$('.reg_con').eq(index).show().siblings('.reg_con').hide();
    })
    
})
   
