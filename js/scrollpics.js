var speed=30 
demo12.innerHTML=demo11.innerHTML 
function Marquees(){ 
if(demo12.offsetWidth-demo10.scrollLeft<=0) 
demo10.scrollLeft-=demo11.offsetWidth 
else{ 
demo10.scrollLeft++ 
} 
} 
var MyMars=setInterval(Marquees,speed) 
demo10.onmouseover=function() {clearInterval(MyMars)} 
demo10.onmouseout=function() {MyMars=setInterval(Marquees,speed)} 