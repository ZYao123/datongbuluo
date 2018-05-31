<?php /* Smarty version Smarty-3.1.14, created on 2017-10-26 17:05:19
         compiled from "F:\WWW\shopx\m\templates\web\inc_link.html" */ ?>
<?php /*%%SmartyHeaderCode:716559f1a54fcb0654-02337041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebd678614dba887b4348b02ef6daede8947eaae' => 
    array (
      0 => 'F:\\WWW\\shopx\\m\\templates\\web\\inc_link.html',
      1 => 1448326860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '716559f1a54fcb0654-02337041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f1a54fcc0054_77400526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f1a54fcc0054_77400526')) {function content_59f1a54fcc0054_77400526($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0 , user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="telephone=no" name="format-detection">
<meta name="viewport"content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
style/webstyle.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
style/public.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/jquery.touchslider.js"></script>


<script type="text/javascript">

//ios7 ����webapp

(function(){

  if(/(iPhone|iPad)\sOS\s7_/.test(window.navigator.userAgent)){

  var t=document.head.querySelector('meta[name="apple-mobile-web-app-capable"]');

  if(t)t.remove();

  }

})()



window.onerror = function(err) {

  log('window.onerror: ' + err)

  }

  

  function connectWebViewJavascriptBridge(callback) {

  if (window.WebViewJavascriptBridge) {

    callback(WebViewJavascriptBridge)

  } else {

    document.addEventListener('WebViewJavascriptBridgeReady', function() {

    callback(WebViewJavascriptBridge)

    }, false)

  }

  }

  

  connectWebViewJavascriptBridge(function(bridge) {

  

  bridge.init(function(message, responseCallback) {

    



    responseCallback(data)

  })



    var button = document.getElementById('button');

  button.onclick = function(e) {

    e.preventDefault()

    

                   var data = 'Hello from JS button'

  

      bridge.callHandler('testObjcCallback', {'tel': '15110795155'}, function(response) {

                            alert(response);

                           

                            })

                   

    bridge.send(data, function(responseData) {

    

    })

  }



  })



</script>
<!--[if IE 6]>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_dir']->value;?>
js/DD_belatedPNG_0.0.8a.js"></script>
  <script type="text/javascript">
  DD_belatedPNG.fix('*');
  </script>
  <![endif]-->
<script type="text/javascript">

  function addLoadEvent(func) { 
    var oldonload = window.onload; 
    if (typeof window.onload != 'function') { 
      window.onload = func; 
    } else { 
      window.onload = function() { 
        oldonload(); 
        func(); 
      } 
    } 
  } 
</script><?php }} ?>