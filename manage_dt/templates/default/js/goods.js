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

var list	  = new Array();	//规格数组
var listname  = new Array();	//规格页眉数组
var normsname = new Array();	//规格内元素数组
var normsid   = new Array();	//规格id

/* 排列组合 
 * 调用方法 var combinedGroups = $.getCombineArray(list[0],list[1]);
 * 参数必须固定
 * return array
 */
$.getCombineArray = function () {
	var _groups = arguments;
	var _result = new Array();
	var _tempArray = new Array();
	
	function createSubTree(index)
	{         
		for (var i in _groups[index]) 
		{                
			_tempArray[index] = _groups[index][i]; 
			if (index == _groups.length - 1) 
			{                    
				_result.push(_tempArray.concat());               
			}                
			else 
			{                    
				createSubTree(index + 1);                
			}            
		}
	}
	createSubTree(0);
	return _result;  
};

/* 排列组合 
 * 调用方 法var ret = doExchange(temparr); 
 * 参数为数组灵活添加
 * return array
 */
function doExchange(doubleArrays){    
	var len=doubleArrays.length;    
	if(len>=2){        
		var len1=doubleArrays[0].length;       
		var len2=doubleArrays[1].length;        
		var newlen=len1*len2;        
		var temp=new Array(newlen);        
		var index=0;        
		for(var i=0;i<len1;i++)
		{          
			for(var j=0;j<len2;j++)
			{                
				temp[index]=doubleArrays[0][i]+","+doubleArrays[1][j];                
				index++;            
			}       
		}        
		var newArray=new Array(len-1);        
		for(var i=2;i<len;i++)
		{            
			newArray[i-1]= doubleArrays[i];       
		}        
		newArray[0]=temp;        
		return doExchange(newArray); 
	}    
	else
	{        
		return doubleArrays[0];    
	} 
}

function setattr(key, colorname, normsedit, key2, goodsid)
{	
	/* 添加规格数组 */
	var ttt = true; 
	if(list[key].length>0)
	{
		for (i in list[key])
		{            
			if(list[key][i] == key2)
			{
				list[key].splice(i,1)
				ttt = false;
			}
		}  
		if(ttt)
		{
			list[key].push(key2);
		}
	}
	else
	{
		list[key].push(key2);
	}
	
	/* 添加规格id */
	ttt = true;
	if(normsid.length>0)
	{
		for (i in normsid)
		{            
			if(normsid[i] == key2)
			{
				normsid.splice(i,1)
				ttt = false;
			}
		}  
		if(ttt)
		{
			normsid.push(key2);
		}
	}
	else
	{
		normsid.push(key2);
	}
	
	$("#normsedit").hide();
	/* 修改规格背景颜色 */
	if(normsedit == 'true')
	{
		if($("#edit").html() == null)
		{
			edit = '<tr id="edit"><td colspan="2" align="left">修改背景颜色</td></tr><tr><td align="center" width="50">名称</td><td align="left">背景图片</td></tr>';
			AddDmTr("normsedit", edit)
		}
		
		if($("#"+key2).html() == null)
		{
			str = '<tr id="'+key2+'"><td width="60">'+colorname+'</td><td><a href="javascript:showupload(\'pic_'+key2+'\')">上传</a></td></tr>';
			AddDmTr("normsedit", str)
		}
		else
		{
				
			$("#"+key2).remove();
		}		
	}

	/* 判断是否选择全部规格 */
	var t = false;
	for (var i  in list)
	{ 
		if(list[i].length == 0)
		{
			t = true;
		}
	}
	
	if(t)
	{
		$("#attrlist").empty();
		AddDmTr("attrlist", '<tr id="wz"><td>请选择完整的数据！<input id="wz1" type="hidden" value="0"/><td></tr>')
	}
	else
	{
		$("#normsedit").show();
		$("#tr_salesprice").hide();
		$("#tr_buyprice").hide();
		$("#old_price").hide();
		$("#tr_housenum").hide();
		/* 设置页眉 */
		var nav_start = '<tr id="attrnav">';
		var nav = '';
		for (i in listname)
		{            
			nav += '<td>'+listname[i]+'</td>';
		}      
		nav += '<td width="80">售价</td><td width="80">进价</td><td width="80">原价</td><td width="80">数量</td><td width="140">货号</td>';
		
		var str_end = '</tr>';
		
		if($("#attrnav").html() == null || $("#attrnav").html() == "")
		{
			$("#attrlist").empty();
			AddDmTr("attrlist", nav_start+nav)
		}
		else
		{
			$("#attrnav").html(nav);
		}
				
		var combinedGroups = doExchange(list); 
		var count = combinedGroups.length;
		var trids = ',';
		
		for (var i  in combinedGroups)
		{   
			var items = combinedGroups[i].toString().split(",");
			var trid = items.join("");
					
			str_tr = '<tr id="body_'+trid+'">';
			str = '';
			for (var j in items) {
				str += '<td>'+normsname[items[j]]['name']+'</td>';
				if(j==0) 
					attrname = items[j];
				else
					attrname += ','+items[j];
			}   
			
				
			str += '<td>';
			str += '<input type="hidden" name="norms[1]['+trid+'][attrname]" id="'+trid+'_attrname" value="'+attrname+'"/>';
			str += '<input type="hidden" name="norms[1]['+trid+'][id]" value="" id="'+trid+'_id"/>';
			str += '<input type="text" name="norms[1]['+trid+'][price]" id="'+trid+'_price"  class="v5-input in60 checkKey"/>';
			str += '</td><td>';
			str += '<input type="text" name="norms[1]['+trid+'][buyprice]" id="'+trid+'_buyprice"   class="v5-input in60 checkKey"/>';
			str += '</td><td>';
			str += '<input type="text" name="norms[1]['+trid+'][old_price]" id="'+trid+'_old_price"   class="v5-input in60 checkKey"/>';
			str += '</td><td>';
			str += '<input type="text" name="norms[1]['+trid+'][num]"  id="'+trid+'_num" onblur="setnum();"  class="v5-input in60"/>';
			str += '</td><td>';
			str += '<input type="text" name="norms[1]['+trid+'][goodsNO]"  id="'+trid+'_goodsNO" class="v5-input in120"/>';
			str += '</td>';
			
			str_tr2 = '</tr>';
			if($("#body_"+trid).html() == null)
			{
				AddDmTr("attrlist", str_tr+str+str_tr2);
			}
			trids += 'body_'+trid+',';
			
		}
		normsid_str='';
		for(i in normsid)
		{
			normsid_str += '<input type="text" name="norms[0]['+normsid[i]+'][id]" id="id_'+normsid[i]+'" value="0" />';
			normsid_str += '<input type="text" name="norms[0]['+normsid[i]+'][attrid]" id="attrid_'+normsid[i]+'" value="'+normsname[normsid[i]]['id']+'" />';
			normsid_str += '<input type="text" name="norms[0]['+normsid[i]+'][name]" id="name_'+normsid[i]+'" value="'+normsname[normsid[i]]['name']+'" />';
			normsid_str += '<input type="text" name="norms[0]['+normsid[i]+'][color]" id="color_'+normsid[i]+'" value="'+normsname[normsid[i]]['color']+'" />';
			normsid_str += '<input type="text" name="norms[0]['+normsid[i]+'][pic]"  id="pic_'+normsid[i]+'" value="'+normsname[normsid[i]]['pic']+'" />';
			normsid_str += '<input type="text" name="norms[0]['+normsid[i]+'][goodsid]" id="goodsid_'+normsid[i]+'"  value="'+goodsid+'" />';
		}
		$("#norm_attr").html(normsid_str);
		$("tr[id^='body_']").each(function(){
			s_attr_name = $(this).attr("id");
			if(trids.indexOf(','+s_attr_name+',')<0)
			{
				$("#"+s_attr_name).remove();
			}
		});
		
	}
	if(goodsid>0)
	{
		getprice(goodsid);
	}
}


/* 设置价格 */
function setprice(){
	var combinedGroups = doExchange(list); 
	var num = combinedGroups.length;
	var salesprice='';
	var newprice = new Array();
	j=0;
	for(var i=0;i<num; i++)
	{
		var trid = combinedGroups[i].toString().split(",").join("");
		var	price = $("#"+trid+"_price");			
		if(price.val()!="")
		{
			price.formatCurrency();// 如将页面所有表格的金额单元格格式化显示parseInt
			price.toNumber();	
			newprice[j] = price.val();
			j++;
		}	
	}

	if(newprice.length>0)
	{
		salesprice = Math.min.apply(null, newprice).toString();
		
		if(salesprice.indexOf(".")<=0)
		{
			salesprice += '.00';
		}
		if(newprice.length>1)
		{
			maxprice = Math.max.apply(null, newprice).toString();
			if(maxprice.indexOf(".")<=0)
			{
				maxprice += '.00';
			}
			salesprice += ' - ' + maxprice;
		}
	}
	$("#salesprice").val(salesprice);
	
}


/* 设置数量 */
function setnum(){
	var combinedGroups = doExchange(list); 
	var j = combinedGroups.length;
				
	var nums=0;
	for(var i=0;i<j; i++)
	{
		var trid = combinedGroups[i].toString().split(",").join("");
		num = $("#"+trid+"_num");
		if(!parseInt(num.val()))
		{
			num.val("");
		}
		else
		{
			num.val(parseInt(num.val()));
		}
		if(num.val()!='')
		{
			nums += parseInt(num.val());
		}
	}
	if(nums!=0)
	{
		$("#housenum").val(nums);
	}
	else
	{
		$("#housenum").val("");
	}
}

function getprice(goodsid)
{
	$.ajax({
		url : "goods.php?act=edit_select&goodsid="+goodsid+"&default="+Math.random(),
		type:'get',
		dataType:'html',
		success:function(data){
			var json = eval("("+data+")");
			for(i in json)
			{
				$("#"+json[i]['attrname']+"_id").val(json[i]['id']);
				$("#"+json[i]['attrname']+"_price").val(json[i]['price']);
				$("#"+json[i]['attrname']+"_buyprice").val(json[i]['buyprice']);
				$("#"+json[i]['attrname']+"_old_price").val(json[i]['old_price']);
				$("#"+json[i]['attrname']+"_num").val(json[i]['housenum']);
				$("#"+json[i]['attrname']+"_goodsNO").val(json[i]['goodsNO']);
			}			
		}
	});
	
	$.ajax({
		url : "goods.php?act=edit_norm_select&goodsid="+goodsid+"&default="+Math.random(),
		type:'get',
		dataType:'html',
		success:function(data){
			var json = eval("("+data+")");
			for(i in json)
			{			
				$("#id_"+json[i]['attrid']).val(json[i]['id']);
				$("#attrid_"+json[i]['attrid']).val(json[i]['attrid']);
				$("#nameid_"+json[i]['attrid']).val(json[i]['attrname']);
				$("#color_"+json[i]['attrid']).val(json[i]['color']);
				$("#pic_"+json[i]['attrid']).val(json[i]['pic']);
				$("#goodsid_"+json[i]['attrid']).val(json[i]['goodsid']);
			}			
		}
	});
	
}

