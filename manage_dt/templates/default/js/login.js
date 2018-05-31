/* 加入收藏 */
function addfavorite(){
	if(document.all){
		try{
			window.external.addFavorite(window.location.href,document.title);
		}catch(e){
			DialogAlert(favorite,0,title,button,'warning');
			
		}
	}else if(window.sidebar){
		window.sidebar.addPanel(document.title, window.location.href, "");
	}else{
		DialogAlert(favorite,0,title,button,'warning');		
	}
}

/* js生成快捷方式 */
function jsDesktop(sUrl,sName){
	
  var WshShell = new ActiveXObject("WScript.Shell");
  //捷方式的指向
  var url="http://192.168.6.205";
  //捷方式的名称
  var title="公证业务管理系统";
  WshShell.RegWrite ("HKEY_CURRENT_USER\\Software\\Microsoft\\Internet Explorer\\Main\\Start Page", url);
  var DesktopPath = WshShell.SpecialFolders("Desktop");
  var MyShortcut = WshShell.CreateShortcut(DesktopPath +'\\'+title+ ".lnk");
  MyShortcut.TargetPath = url;
  MyShortcut.WindowStyle = 4;
  MyShortcut.IconLocation = WshShell.ExpandEnvironmentStrings("%windir%\\SYSTEM\\SHELL32.DLL,47");;
  MyShortcut.Save();
     
	/*try
	{
		var WshShell = new ActiveXObject("WScript.Shell");
		var oUrlLink = WshShell.CreateShortcut(WshShell.SpecialFolders("Desktop") + "\\" + sName + ".url");
		oUrlLink.TargetPath = sUrl;
		oUrlLink.Save();
	}
	catch(e)
	{
		DialogAlert(desktop,0,title,button,'warning');
	}*/
}


/* 验证登陆 */
function CheckForm()
{
	if($("#username").val() == "" || $("#username").val() == u)
	{
		DialogAlert(u,0,title,button,'warning','username');
		return false;
	}

	if($("#password").val() == "" || $("#password").val() == p)
	{
		DialogAlert(p,0,title,button,'warning','password');
		return false;
	}
	if($("#validate").val() == "")
	{
		DialogAlert(validate,0,title,button,'warning','validate');
		return false;
	}

}

$(function(){
	$("#username").focus(function(){
		if($("#username").val()==u){
			$("#username").val("");
		} 
	}).blur(function(){
		if($("#username").val()==''){
			$("#username").val(u);
		}
	});
	
	$("#password").focus(function(){
		if($("#password").val()==p){
			$("#password").val("");
		}
		this.type='password';
	}).blur(function(){
		if($("#password").val()==''){
			$("#password").val(p);
			this.type='text'
		}
	});

	$("#validate").focus(function(){
		if($("#validate").val()==validate){
			$("#validate").val("");
		} 
	}).blur(function(){
		if($("#validate").val()==''){
			$("#validate").val(validate);
		}
	});
	
});