
var dir33=1//每步移动像素，大＝快
var speed=30 
demo2.innerHTML=demo1.innerHTML 
function Marquee(){ 

 if (dir33>0  && (demo2.offsetWidth-demo.scrollLeft)<=0) demo.scrollLeft=0
 if (dir33<0 &&(demo.scrollLeft<=0)) demo.scrollLeft=demo2.offsetWidth
 demo.scrollLeft+=dir33
} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
function r_left1(){if (dir33=-1)dir33=1}//换向左移
function r_right1(){if (dir33=1)dir33=-1}//换向右移