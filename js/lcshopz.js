// JavaScript Document

/*
***生成随机数
*/
function random1(min1,max1){
    return Math.floor(min1+Math.random()*(max1-min1));
}


/**
  *加入收藏
  **/
function add_collect(gid,uri){
	$.ajax({
		url : 'member.php',
		async: false,
		type: "get",
		dataType: "json",
		data:{act:'add_collect',gid:gid,uri:uri,rn:random1(0,100000)},
		success:function(data){
              if(data==0){
			window.location.href='member.php?act=login&from='+uri;  
			  }else if(data==1){
				alert('收藏成功');  
			  }else if(data==2){
			    alert('收藏失败'); 
			  }else if(data==3){
			    alert('该商品您已经收藏过了');  
			  }else{
				alert('参数错误'); 
			 }
			 
		}
	});	
}


function jia()
{	
var housenum=parseInt($("#show_housenum").val());
	mum = parseInt($("#goods_num").val());
	var num=parseInt(mum)+1;
	if(num>housenum)
	{
		num=housenum;
	
		$('#show_kc').html("超库存").show().fadeOut(4000);
	}
	$("#goods_num").val(num);
	
}
function jian()
{
	
	mum = $("#goods_num").val();
	if(mum>1)
	{
		$("#goods_num").val(parseInt(mum)-1);
	}
	
}
function num_blur()
{
	
	if($("#goods_num").val()>0)
	{
		mum = parseInt($("#goods_num").val());
	}else
	{
		mum=1;
	}
	
	var housenum=parseInt($("#show_housenum").val());
	if(mum>housenum)
	{
		
		$("#goods_num").val(housenum);
	}else
	{
		$("#goods_num").val(mum);
	}
	
}

/**
 *添加购物车
**/
function AddShopCart(divid,sign)
{
	sign=(typeof(sign)=="undefined")?'pc':sign; 
	if($("#goods_num").val()=="" || $("#goods_num").val()<=0)
	{
		$("#goodsnum").html("&nbsp;&nbsp;请正确的输入数量！");
		return false;
	}
	goods_norm = '';
	if($("input[name^='goods_norm']").length>0)
	{
		norminput = false;
		$("input[name^='goods_norm']").each(function(index){
			if($(this).val()=="")
			{
				norminput = true;
			}
			if(index==0)
			{
				goods_norm = $(this).val();
			}
			else
			{
				goods_norm += ','+$(this).val();
			}
		});
		if(norminput)
		{
			$("#goodsnum").show().fadeOut(4000);
			$("#goodsnum").html("&nbsp;&nbsp;请选择完整的规格！");
			if(sign!='pc')
			{
				$("#before_attr").css("display",'block');
			}
			return false;
		}
	}
	$("#goodsnum").html("&nbsp;");	
	$.ajax({
		url : 'shopcart.php',
		async: false,
		type: "get",
		dataType: "json",
		data:{act:'add', goods_id:$("#goods_id").val(), goods_num:$("#goods_num").val(), goods_price:$("#goods_price").val(),housenum:$("#show_housenum").val(), goods_norm:goods_norm, rn:random1(0,100000)},
		success:function(data){

			if (data.act == '1')
			{	

				if(sign=='pc')
				{
				$("#"+divid).html(SCSuccess+"<br>"+SCQuantity1+"<span>&nbsp;"+data.nums+"&nbsp;</span>"+SCQuantity2+"<br><span onclick='window.open(\"shopcart.php?act=list\",\"_self\")'>"+SCSettlement+"</span>&nbsp;&nbsp;<span onclick=\"javascript:fadeOut('"+divid+"')\">"+SCContinue+"</span>"); 
				$("#shop_item_num").html(data.nums);
				$("#"+divid).css("display",'block');
				}else
				{
				$("#goodsnum").html(SCSuccess+'!'+SCQuantity1+data.nums+SCQuantity2).show().fadeOut(4000,function(){$('#buy').animate({height:'0px'},'slow');$("#gray").fadeOut(2000);});
				$('#gmnums').html(data.nums).show();
				}
				
			}
		}
	});	
}

/**
 *立刻购买
**/
function NowBuy(divid,sign)
{
	
	sign=(typeof(sign)=="undefined")?'pc':sign; 
	if($("#goods_num").val()=="" || $("#goods_num").val()<=0)
	{
		$("#goodsnum").html("&nbsp;&nbsp;请正确的输入数量！");
		return false;
	}
	goods_norm = '';
	if($("input[name^='goods_norm']").length>0)
	{
		norminput = false;
		$("input[name^='goods_norm']").each(function(index){
			if($(this).val()=="")
			{
				norminput = true;
			}
			if(index==0)
			{
				goods_norm = $(this).val();
			}
			else
			{
				goods_norm += ','+$(this).val();
			}
		});
		if(norminput)
		{    $("#goodsnum").show().fadeOut(4000);
			$("#goodsnum").html("&nbsp;&nbsp;请选择完整的规格！");
			return false;
		}
	}
	$("#goodsnum").html("&nbsp;");	
	$.ajax({
		url : 'shopcart.php',
		async: false,
		type: "get",
		dataType: "json",
		data:{act:'NowBuy', goods_id:$("#goods_id").val(), goods_num:$("#goods_num").val(), goods_price:$("#goods_price").val(),housenum:$("#show_housenum").val(), goods_norm:goods_norm, rn:random1(0,100000)},
		success:function(data){
			if(data.error)
			{
				var from=$("#goods_from").val();
				window.location.href="member.php?act=login&from="+from+"";
			}else
			{
				window.location.href="orderinfo.php?id="+data.cart_id+"";
			}
		}
	});	
}

/**
 *积分兑换
**/
function points_convert(divid,sign)
{
	sign=(typeof(sign)=="undefined")?'pc':sign; 
	if($("#goods_num").val()=="" || $("#goods_num").val()<=0)
	{
		$("#goodsnum").html("&nbsp;&nbsp;请输入正确的数量！");
		return false;
	}
	goods_norm = '';
	if($("input[name^='goods_norm']").length>0)
	{
		norminput = false;
		$("input[name^='goods_norm']").each(function(index){
			if($(this).val()=="")
			{
				norminput = true;
			}
			if(index==0)
			{
				goods_norm = $(this).val();
			}
			else
			{
				goods_norm += ','+$(this).val();
			}
		});
		if(norminput)
		{    $("#goodsnum").show().fadeOut(4000);
			$("#goodsnum").html("&nbsp;&nbsp;请选择完整的规格！");
			return false;
		}
	}

	$("#goodsnum").html("&nbsp;");	
	$.ajax({
		url : 'member.php',
		async: false,
		type: "get",
		dataType: "json",
		data:{act:'points_convert', goods_id:$("#goods_id").val(), goods_num:$("#goods_num").val(), goods_price:$("#goods_price").val(),housenum:$("#show_housenum").val(), goods_norm:goods_norm, rn:random1(0,100000)},
		success:function(data){
			if(data.login)
			{
				var from=$("#goods_from").val();
				window.location.href="member.php?act=login&from="+from+"";
			}else if(data.error)
			{
				$("#goodsnum").html("&nbsp;&nbsp;异常行为！");
			}else if(data.points)
			{
				$("#goodsnum").html("&nbsp;&nbsp;您的剩余积分不够！");
			}else
			{
				window.location.href="orderinfo.php?id="+data.cart_id+"";
			}
		}
	});	
}
//关闭弹出层 
function fadeOut(divid){  
   $("#"+divid).css("display",'none');
}

/* 购物车loading.. */
function loading(divclass)
{
	
	var SHeight = $("."+divclass).height();
	$(".regist_suc").css("height",SHeight);
	$(".regist_suc").fadeIn(300);//
}

/**
 * 计算优惠价格
 *
 * 返回值可为正、负数，总价做加法处理
 * 
**/
function Preferential()
{
	return 0;
}

/* 购物车选择所有 */
function cart_chk_all(checked,n)
{	
	loading("gwc");
	setTimeout(function () 
	{	
		if(checked != 'checked')
		{
			//全不选
			$("input[type='checkbox'][name^='id'][disabled!='true']").removeAttr("checked");
			$("#totalnum").html("0");
			$('#gmnums').html("0");
			$("#totalgoodsprice").html("0.00");
			$("#totalprice").html("0.00");
			$("#jiesuan").css("display",'none');
		}
		else
		{
			//全选
			$('.s_checkbox').addClass("s_checked");
			$("input[type='checkbox'][name^='id'][disabled!='true']").attr("checked","checked");
			var totalgoodsprice =0;
			var totalprice = 0; 
			var actual_num=$(".gwc_actual_z").length;
			for (var i = 0 ; i < n ; i++ )
			{
				tmp=$("#total"+i).html();
				if(tmp!=null)
				{
					totalgoodsprice += parseInt(tmp);
				}
			 
			}
			
			//商品总价＝ 所有商品总价 + 优惠价格(返回值可为正、负数，总价做加法处理)
			totalprice = totalgoodsprice + Preferential();
			
			$("#totalnum").html(actual_num);
			$('#gmnums').html(actual_num);
			$("#totalgoodsprice").html(totalgoodsprice.toFixed(2));
			$("#totalprice").html(totalprice.toFixed(2));	
			$("#jiesuan").css("display",'');
			
		}
		$(".regist_suc").fadeOut(300);//
	},1000);		
}
/* 购物车选择单个 */
function cart_chk_one(n)
{
	loading("gwc");
	setTimeout(function () 
	{
		var gwczs = $("input[type='checkbox'][name='id[]']").size();//购物车所有商品数量
		
		if (document.getElementById("id"+n).checked == false)
		{
			var totalnum = $("#totalnum").html() - 1;
			if ( totalnum < 0 ) { totalnum = 0;}
			$("#totalnum").html( totalnum );
			var totalgoodsprice = $("#totalgoodsprice").html() - $("#total"+n).html();
			if ( totalgoodsprice < 0 ) { totalgoodsprice = 0;}
			$("#totalgoodsprice").html( totalgoodsprice.toFixed(2) );
			var totalprice = $("#totalprice").html() - $("#total"+n).html();
			if ( totalprice < 0 ) { totalprice = 0;}
			$("#totalprice").html( totalprice.toFixed(2) );
			document.getElementById("checkall").checked = false;
			$('#checkall').removeClass("s_checked");
		}
		else
		{
			var totalnum = parseInt($("#totalnum").html())+1;
			$("#totalnum").html( totalnum );
			var totalgoodsprice = parseFloat($("#totalgoodsprice").html()) + parseFloat($("#total"+n).html());
			$("#totalgoodsprice").html( totalgoodsprice.toFixed(2) );
			var totalprice = parseFloat($("#totalprice").html()) + parseFloat($("#total"+n).html());
			$("#totalprice").html( totalprice.toFixed(2) );		
			
		}	
		
		
		if(totalnum==gwczs){
			$('#checkall').attr('checked','checked');
			$('#checkall').addClass('s_checked');
		}
		if(totalnum==0)
		{
		
			$("#jiesuan").css("display",'none');
			
		}else{
			
			if(totalprice.toFixed(2)<=0){
				$("#jiesuan").css("display",'none');
			}else{
				$("#jiesuan").css("display",'');
			}
			
		}
		$('#gmnums').html(totalnum);
		$(".regist_suc").fadeOut(300);//
	},1000);
}
/*gmnums*/


/**
 *修改购物车
 *
 *@id           在购物车数据表中的id
 *@goods_num    其值可以是-1,0,1三种，当值为０时接num中的值计算，为-1或1时分别做商品数量加1或减1操作
 *@totalid      商品序号
 *@n            购物车中商品个数
 *
**/
function UpdateShopCart(id,goods_num,totalid,n)
{
	if (document.getElementById("id"+totalid).checked == false)
	{
		document.getElementById("id"+totalid).checked = true;
		$("#totalnum").html(parseInt($("#totalnum").html())+1);
	}
	
	$.ajax({
		url : 'shopcart.php',
		async: false,
		type: "get",
		dataType: "json",
		data:{act:'update', id:id,num:$("#num"+totalid).val(), goods_num:goods_num, housenum:$("#housenum"+totalid).val(), rn:random1(0,100000)},
		success:function(data){
			if ( data.More == '1' )
			{
				$('#kc'+totalid).html("超库存").show().fadeOut(4000);
			}
			
			
			$("#num"+totalid).val(data.num);
			if (data.num == 0)
			{
				//$("#tr"+id).hide();
				//document.getElementById("id"+totalid).checked = false;
				//$("#totalnum").html($("#totalnum").html()-1);
			}
			per_price=parseFloat($("#Unit_price"+totalid).html());
			var total =  data.num * per_price;
			$("#total"+totalid).html(total.toFixed(2));
			var totalgoodsprice = 0 ;
			var totalprice = 0 ;
			for (var i = 0 ; i < n ; i++ )
			{
				if(document.getElementById("id"+i).checked==false){
				    per_price=parseFloat(0);
				}else{
				    per_price=parseFloat($("#total"+i).html());
				}
				totalgoodsprice += per_price;
			}
			if($("#jiesuan").css('display')=='none'){
				$("#jiesuan").css("display",'');
			}
			//商品总价＝ 所有商品总价 + 优惠价格(返回值可为正、负数，总价做加法处理)
			totalprice = totalgoodsprice + Preferential();
			$("#totalgoodsprice").html(totalgoodsprice.toFixed(2));
			$("#totalprice").html(totalprice.toFixed(2));						
		}
	});
}

/**
 *删除购物车中单个商品
 *
 *@id           在购物车数据表中的id
 *@totalid      商品序号
 *
**/
function DelShopCart(id,totalid)
{
	
	loading("gwc");
	setTimeout(function () 
	{	
		$.ajax({
			url : 'shopcart.php',
			async: false,
			type: "get",
			dataType: "json",
			data:{act:'del', id:id, rn:random1(0,100000)},
			success:function(data){
				if (data.Success == 1)
				{
					$("#tr"+id).hide();
					node = document.getElementById("tr"+id);
					node.parentNode.removeChild(node);
					$("#totalnum").html( data.totalnum );
					$("#totalgoodsprice").html( data.totalgoodsprice );
					$("#totalprice").html(data.totalprice);
					$("#gmnums").html(data.totalnum);
					if(data.totalnum==0)
					{
						$("#jiesuan").css("display",'none');
					}else{
						$("#jiesuan").css("display",'');
					}
				}
			}
		});
		$(".regist_suc").fadeOut(300);
	},1000);
}
/**
 *删除购物车中选中的商品
**/
function DelShopCartAll()
{
	loading("gwc");
	setTimeout(function () 
	{		
		$.ajax({
			cache: true,
			type: "POST",
			url:"shopcart.php?act=del",
			data:$('#form1').serialize(),// 你的formid
			async: false,
			dataType: "json",
			success: function(data) {
				var arr=new Array();
				var str = data.ids;
				arr = str.split(",");
				for (i = 0 ; i < arr.length ;　i++)
				{
					$("#tr"+arr[i]).hide();
					node = document.getElementById("tr"+arr[i]);
					node.parentNode.removeChild(node);
				}
				data.totalnum=0;
				$("#totalnum").html( data.totalnum );
				if(data.totalnum==0)
				{
					$("#jiesuan").css("display",'none');
				}else{
					$("#jiesuan").css("display",'');
				}
				data.totalgoodsprice=0;
				data.totalprice=0;
				$("#totalgoodsprice").html( data.totalgoodsprice );
				$("#totalprice").html( data.totalprice );			
			}
		});
		$(".regist_suc").fadeOut(300);
	},1000);		
}

/**
 *清空购物车
**/
function DelShopCartAll1(n)
{
	loading("gwc");
	setTimeout(function () 
	{		
		$.ajax({
			url : 'shopcart.php',
			async: false,
			type: "get",
			dataType: "json",
			data:{act:'delall', rn:random1(0,100000)},			
			success: function(data) {
				if (data.Success == 1)
				{
					$("tr[id^='tr']").hide();
					$("#totalnum").html("0");
					$("#totalgoodsprice").html("0.00");
					$("#totalprice").html("0.00");
					$('#jiesuan').hide();	
				}
			}
		});
		$(".regist_suc").fadeOut(300);
	},1000);		
}
function Getphp(url,divid)
{
		$.ajax({
			url : url,
			async: false,
			type: "get",
			dataType: 'text',
			data:{rn:random1(0,100000)},			
			success: function(data) {
				$("#"+divid).html(data);
			}
		});
		//$(".regist_suc").fadeOut(300);
}
/* 验证订单提交页面 */
function checkorderpost()
{
	if ($('#aid').val() == '0') 
	{
		$('#contact').html(content);
		$("#souhuoren").ScrollTo(800);
		$("#souhuoren").css("background","#FFF2E6");
		return false;
	}
	if ($('#cartids').val() == '') 
	{
		$('#itemlist').html(itemlist);
		$("#goods").ScrollTo(800);
		$("#goods").css("background","#FFF2E6");
		return false;
	}
	if (!$('input[name="postmode"]:checked').val()) 
	{
		$('#postmode').html(postmode);
		$("#peisong").ScrollTo(800);
		$("#peisong").css("background","#FFF2E6");
		return false;
	}	
}

function selectaddr(id,k)
{
	$("#aid"+id).attr("checked",true);
	for (var i=0; i<=k; i++)
	{
		$("#div"+i).attr("class","addrlist");
		$("#div"+i).attr("onmouseover", 'this.className="addrlist1"');
		$("#div"+i).attr("onmouseout", 'this.className="addrlist"');
	}
	$("#div"+id).attr("class","addrlist2");
	$("#div"+id).attr("onmouseover", 'this.className="addrlist2"');
	$("#div"+id).attr("onmouseout", 'this.className="addrlist2"');
}

function areashow()
{
	$("#area").css("display","block");
}

function areahide()
{
	$("#area").css("display","none");
}
function dis(id)
{
	$("div[id^=goods_content]").hide();
	$("div[id=goods_content_"+id+"]").show();
	
	$("a[id^=goods_nav]").removeClass("on");
	$("a[id=goods_nav_"+id+"]").addClass("on");

}
function pay()
{
	t = true;
	$("input[name='paytype']").each(function() {
        if($(this).attr("checked"))
		{
			t = false;
		}
    });
	if(t)
	{
		alert('请选择支付方式！');
		return false;
	}
	
	$("#face").css("display","block");
}

function facehide()
{
	$("#face").css("display","none");
}

/* 计算运费 */
function Calculate()
{
	var phone = $('#phone').val();
	if(phone==1){
		var aid = $('#aid').val();//会员收货信息表ID
	}else{
		var aid = $('input[name="aid"]:checked').val();//会员收货信息表ID
	}
	var pid 		= $('input[name="postmode"]:checked').val();//送货方式ID
	var sid 		= $("#sid").val();//运费模板ID
	var TemPricing  = $("#TemPricing").val();//计价方式
	var cartids		= $("#cartids").val();//购物车表ID
	if (aid == '0') 
	{
		$('#contact').html(content);
		return false;
	}	
	if (pid == '' || sid =='' || TemPricing =='')
	{
		$('#postmode').html(postmode);
		return false;
	}
	if (cartids == '') 
	{
		$('#itemlist').html(itemlist);
		return false;
	}	
	$.ajax({
		url : "orderinfo.php",
		async: false,
		type: "get",
		dataType: 'json',
		data:{"act":"Calculate" , "aid":aid , "pid":pid , "sid":sid , "TemPricing":TemPricing , "cartids":cartids , rn:random1(0,100000) ,intotal:$('#intotal').val()},
		success: function(data) {
				  if (data.con == 'aideq0') 
				  {
					  $('#contact').html(content);
					  $('input[name="postmode"]:checked').attr('checked',false);
					  return false;
				  }	
				  else if (data.con == 'pideq0')
				  {
					  $('#postmode').html(postmode);
					  return false;
				  }
				  else if (data.con == 'cartideq0')
				  {
					  $('#itemlist').html(itemlist);
					  return false;
				  }
				  else
				  {
					  $('#yunfei').html(data.con);
					  $('#inyunfei').val(data.decon);
					  $('#total').html(data.deintotal);
					  return false;					  
				  }
		}
	});	
}

/**
 *文章赞与不赞
 * aid 文章ID
 * type 类型 1 赞 0 不赞
**/
function AgreeAticle(aid,type)
{
	$.ajax({
		url : 'agree_aticle.php',
		async: false,
		type: "get",
		dataType: "json",
		data:{type:type, Aticle_id:aid, rn:random1(0,100000)},
		success:function(data){
			 $('#cook_yes'+aid).html(data.yes);
			 $('#cook_no'+aid).html(data.no);
			 return false;
		}
	});	
}

/**
 *购物车添加购物券
 * aid 文章ID
 * type 类型 1 赞 0 不赞
**/
function shopPoint_add()
{
	var val=$("#point_pwd").val();

	if(val)
	{
		$.ajax({
			url : 'member.php',
			async: false,
			type: "get",
			dataType: "json",
			data:{ val:val, act:"shopcartPoint_add", rn:random1(0,100000),totmoney:$('#totmoney').val(),intotal:$('#intotal').val()},
			success:function(data){
					
				if(data.con==0){
					
					$('#total').html(data.endtotal);
					$('#intotal').val(data.codetotal);
					$('#anniu').hide();
					$('#pointnum').val(val);
					$('#youhuiquan').html('使用'+data.conmoneym+'元优惠券');
					$('#control').attr('checked','checked');
					$('#point_show').html('');
				}else{
					if(data.con=='-1'){
					}else{
					  $('#point_show').html(data.con);
				      $('#point_pwd').val('');	
					}
				   
				}
				 return false;
			}
		});	
	}else
	{
			 return false;
	}
}
/**
 *删除购物车中选中的商品
**/
function DelShopOrder(id)
{
	var zt = confirm('确定删除？');
	if(zt==true){
		$.ajax({
			url : 'member.php',
			async: false,
			type: "get",
			dataType: "json",
			data:{act:'orderdel', orderid:id, rn:random1(0,100000)},
			success:function(data){
				$("#tr"+id).hide();
				 return false;
			}
		});	
	}
				
}

/* 验证订单提交页面 */
function checkorderpost_m()
{
	if ($('#aid').val() == '0' || $('#aid').val() == '') 
	{
		$('#dialog_ext').html("请填写收货地址");
		$('#dialog').show().fadeOut(1000);
		return false;
	}
	if ($('#cartids').val() == '') 
	{
		$('#itemlist').html(itemlist);
		$("#goods").ScrollTo(800);
		$("#goods").css("background","#FFF2E6");
		return false;
	}
	if (!$('input[name="postmode"]:checked').val()) 
	{
		$('#dialog_ext').html("请选择配送方式");
		$('#dialog').show().fadeOut(1000);
		return false;
	}	
}