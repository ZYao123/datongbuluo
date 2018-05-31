<?php 
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/../../../include/config.php');
include_once(LCSHOP_LANG . 'admin/index.php');
?>
var title 			= "<?php echo $_LANG['js']['titletips'];?>";
var button 			= "<?php echo $_LANG['js']['okButton']?>";
var cancelButton 	= "<?php echo $_LANG['js']['cancelButton']?>";
var closeButton 	= "<?php echo $_LANG['js']['closeButton']?>";
var curButton 		= "<?php echo $_LANG['js']['curButton'];?>";
var listButton 		= "<?php echo $_LANG['js']['listButton'];?>";

var OnFocus = '';
function DialogAlert(content,url,title,button,ico,OnFocus)
{
	art.dialog({
    	lock: true,
    	background: '#000', 
        opacity: 0.6,    
		icon:ico,
        title:title,
		content: content,
        okVal:button,
        ok: function()
        {
            if (url == 0)//无操作关闭对话框
            {
                 return true;
            }
            else if (url == 1)
            {
                 history.go(-1);
            }
            else
            {
                location.href=url;
            }
            return false;
        }
	}
    );
}

function DialogConfirm(content,url,title,button,cancelButton,ico,formid)
{
    art.dialog({
    	lock: true,
    	background: '#000', 
        opacity: 0.6,    
		icon:ico,
        title:title,
		content: content,
        button: [
            {
                name: button,
                callback: function () {
					if (url == 0)//提交表单
					{
                    	 $(formid).submit();
                    }
					else if (url == 1)
					{
						 history.go(-1);
					}
					else
					{
						location.href=url;
					}
                    return false;
                },
                focus: true
            },
            {
                name: cancelButton,
                callback: function () {
                	 return true;
                }
            }
        ]
    });
}

function DialogIframe(URL,title,width,height,opacity,okval,cancelVal,submitid)
{
	if(!width)  	width     = '100%';
	if(!height) 	height    = $(window).height();
	if(!opacity) 	opacity   = 0.2;
	if(!okval) 		okval     = button;
	if(!cancelVal)  cancelVal = closeButton;
	var okbutton;
	if(okval==='NULL'){
		okbutton =false;
	}else{
		okbutton = function (iframe) {
			var form = iframe.document.getElementById(submitid).click();
			return false;
		}
	}
    
    if(cancelVal==='NULL' && okval==='NULL'){
		art.dialog.open(URL, {
            title: title,
            width: width, 
            height: height,
            lock:true,
            opacity: opacity
        })
	}else{
		art.dialog.open(URL, {
            title: title,
            width: width, 
            height: height,
            lock:true,
            opacity: opacity,
            ok: okbutton,
            okVal:okval,
            cancel: true,
            cancelVal:cancelVal
        })
	}
}

/**
 * 操作成功提示
 *
 * @access  public
 * @param   string      title      		提示框标题
 * @param   string      content    		提示框内容
 * @param   string      url       		留在此页地址
 * @param   string      addtitle    	留在此页标题
 * @param   string      submitid    	提交按钮id  
 * @return  void
 */
function DialogIframeSucceed(content,title,url,addtitle,submitid)
{
    var dialog = art.dialog.through({
    	lock: true,
    	background: '#000', 
        opacity: 0.6,
		icon:'succeed',
        title:title,
		content: content
    });
    dialog.button({
        name: curButton,
        callback:function(){
        	location.href=url;
            return true;
        } 
    });
        
    dialog.button({
        name: listButton,
        callback:function(){
        	var win = art.dialog.open.origin;
			win.location.reload();
			return false;
        },
        focus: true
    });

}

function dialog_data(id)
{
	var Value = document.getElementById('attrvalue_input_'+id).value;
	art.dialog.data('Value', Value);// 存储数据
}
function dialog_close()
{
	var win = art.dialog.open.origin;
	win.location.reload();
	art.dialog.close();
}