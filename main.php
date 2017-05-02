<!doctype html>
<html>
 <head>
  <title>solticha's Home Page</title>
  <script type="text/javascript">
 // <![CDATA[
 var colours=new Array("#58FAF4", "#58FAF4", "#58FAF4", "#58FAF4", "#58FAF4"); // colours for top, right, bottom and left borders and background of bubbles
 var bubbles=66; // maximum number of bubbles on screen
 var over_or_under="over"; // set to "over" for bubbles to always be on top, or "under" to allow them to float behind other objects
 
 /****************************
 * JavaScript Bubble Cursor  *
 *(c)2010-13 mf2fm web-design*
 *  http://www.mf2fm.com/rv  *
 * DON'T EDIT BELOW THIS BOX *
 ****************************/
 var x=ox=400;
 var y=oy=300;
 var swide=800;
 var shigh=600;
 var sleft=sdown=0;
 var bubb=new Array();
 var bubbx=new Array();
 var bubby=new Array();
 var bubbs=new Array();
 var sploosh=false;
 
 function addLoadEvent(funky) {
   var oldonload=window.onload;
   if (typeof(oldonload)!='function') window.onload=funky;
   else window.onload=function() {
     if (oldonload) oldonload();
     funky();
   }
 }
 
 addLoadEvent(buble);
 
 function buble() { if (document.getElementById) {
   var i, rats, div;
   for (i=0; i<bubbles; i++) {
     rats=createDiv("3px", "3px");
     rats.style.visibility="hidden";
 	rats.style.zIndex=(over_or_under=="over")?"1001":"0";
 
     div=createDiv("auto", "auto");
     rats.appendChild(div);
     div=div.style;
     div.top="1px";
     div.left="0px";
     div.bottom="1px";
     div.right="0px";
     div.borderLeft="1px solid "+colours[3];
     div.borderRight="1px solid "+colours[1];
 
     div=createDiv("auto", "auto");
     rats.appendChild(div);
     div=div.style;
     div.top="0px";
     div.left="1px";
     div.right="1px";
     div.bottom="0px"
     div.borderTop="1px solid "+colours[0];
     div.borderBottom="1px solid "+colours[2];
 
     div=createDiv("auto", "auto");
     rats.appendChild(div);
     div=div.style;
     div.left="1px";
     div.right="1px";
     div.bottom="1px";
     div.top="1px";
     div.backgroundColor=colours[4];
     if (navigator.appName=="Microsoft Internet Explorer") div.filter="alpha(opacity=50)";
     else div.opacity=0.5;
     document.body.appendChild(rats);
     bubb[i]=rats.style;
   }
   set_scroll();
   set_width();
   bubble();
 }}
 
 function bubble() {
   var c;
   if (Math.abs(x-ox)>1 || Math.abs(y-oy)>1) {
     ox=x;
     oy=y;
     for (c=0; c<bubbles; c++) if (!bubby[c]) {
       bubb[c].left=(bubbx[c]=x)+"px";
       bubb[c].top=(bubby[c]=y-3)+"px";
       bubb[c].width="3px";
       bubb[c].height="3px"
       bubb[c].visibility="visible";
       bubbs[c]=3;
       break;
     }
   }
   for (c=0; c<bubbles; c++) if (bubby[c]) update_bubb(c);
   setTimeout("bubble()", 40);
 }
 
 document.onmousedown=splash;
 document.onmouseup=function(){clearTimeout(sploosh);};
 
 function splash() {
   ox=-1;
   oy=-1;
   sploosh=setTimeout('splash()', 100);
 }
 
 function update_bubb(i) {
   if (bubby[i]) {
     bubby[i]-=bubbs[i]/2+i%2;
     bubbx[i]+=(i%5-2)/5;
     if (bubby[i]>sdown && bubbx[i]>sleft && bubbx[i]<sleft+swide+bubbs[i]) {
 	  if (Math.random()<bubbs[i]/shigh*2 && bubbs[i]++<8) {
 		bubb[i].width=bubbs[i]+"px";
 		bubb[i].height=bubbs[i]+"px";
 	  }
       bubb[i].top=bubby[i]+"px";
       bubb[i].left=bubbx[i]+"px";
     }
     else {
       bubb[i].visibility="hidden";
       bubby[i]=0;
       return;
     }
   }
 }
 
 document.onmousemove=mouse;
 function mouse(e) {
   if (e) {
     y=e.pageY;
     x=e.pageX;
   }
   else {
     set_scroll();
     y=event.y+sdown;
     x=event.x+sleft;
   }
 }
 
 window.onresize=set_width;
 function set_width() {
   var sw_min=999999;
   var sh_min=999999;
   if (document.documentElement && document.documentElement.clientWidth) {
     if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
     if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
   }
   if (typeof(self.innerWidth)=='number' && self.innerWidth) {
     if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
     if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
   }
   if (document.body.clientWidth) {
     if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
     if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
   }
   if (sw_min==999999 || sh_min==999999) {
     sw_min=800;
     sh_min=600;
   }
   swide=sw_min;
   shigh=sh_min;
 }
 
 window.onscroll=set_scroll;
 function set_scroll() {
   if (typeof(self.pageYOffset)=='number') {
     sdown=self.pageYOffset;
     sleft=self.pageXOffset;
   }
   else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {
     sdown=document.body.scrollTop;
     sleft=document.body.scrollLeft;
   }
   else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
     sleft=document.documentElement.scrollLeft;
     sdown=document.documentElement.scrollTop;
   }
   else {
     sdown=0;
     sleft=0;
   }
 }
 
 function createDiv(height, width) {
   var div=document.createElement("div");
   div.style.position="absolute";
   div.style.height=height;
   div.style.width=width;
   div.style.overflow="hidden";
   div.style.backgroundColor="transparent";
   return (div);
 }
 // ]]>
 </script>
 <meta charset="utf-8">
<style type="text/css">
html{ 
background-image: url("https://i.ytimg.com/vi/TLipZ_Qh5cU/maxresdefault.jpg");
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
div.transbox
  {
  width:600px;
  height:900px;
  margin:30px 50px;
  background-color:#ffffff;
  border:1px solid black;
  /* for IE */
  filter:alpha(opacity=60);
  /* CSS3 standard */
  opacity:0.6;
  }
div.transbox p
  {
  margin:30px 40px;
  font-weight:bold;
  color:#000000;
  }


  <title>solticha's Home Page</title>
</style>
 </head>
<body >
<div class="background">
<div class="transbox">


<h1 style="color:#01DF01" MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%">
<font face=Webdings>4</font></MARQUEE>
<MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>
SolTicha's Home Page
<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE>
<MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%">
<font face=Webdings >3</font></MARQUEE></h1>

 <marquee behavior=alternate direction=up scrollamount=2 scrolldelay=65 height=80 style="Text-align;filter:wave(add=0,phase=1, freq=1,strength=15,color=:#FF0040)">
 <center>ยินดีตอนรับ<br>สู่เว็บเพจของฉัน</center></marquee>

"<img src="http://cs.lnwfile.com/9t3njr.png" width="500" height="300"/>
 <h2 style="color:#01DF3A">งานวิชา 322-236 Web Application Programming</h2>
 <body style="width: 50%;margin: 0 auto;">



 <ul>
<li>
<a href ='1.html'style="color:back">งานที่ 1 : การสร้างเว็บไซต์ด้วย Google App Engine</a></ul>วันที่ 12 มกราคม 2560<br>
<li><a href='work2.html'><b>งานที่  2 :</b>ONE PIECE วันพีช</a></ul><br>วันที่ 19 มกราคม 2560<br>
<li><a href='work3.html'><b>งานที่  3 :</b>Java Script</a></ul><br>วันที่ 26 มกราคม 2560<br>
<li><a href='work4.php'><b>งานที่  4 :</b>การสร้าง form และ การใช้ table</a></ul><br>วันที่ 2 กุมภาพันธ์ 2560<br>
<li><a href='work5.php'><b>งานที่  5 :</b>เกมบวกเลข</a></ul><br>วันที่ 9 กุมภาพันธ์ 2560<br>
<li><a href='work6.php'><b>งานที่  6 :</b>บทเรียนภาษา PHP </a></ul><br>วันที่ 16 กุมภาพันธ์ 2560<br>
<li><a href='work7.php'><b>งานที่  7 :</b>Web Application Programming Google App Engine & PHP & File</a></ul><br>วันที่ 23 กุมภาพันธ์ 2560<br>
<li><a href='work8.php'><b>งานที่  8:</b>PHP Simple File CMS with Google User</a></ul><br>วันที่ 3 มีนาคม 2560<br>
 </body>
</html>





</div> <br> <div style="color:#FFA07A;background-color:#F08080;border:1px solid #8aa;height:110px"> 
<img src="https://pbs.twimg.com/profile_images/523118765068673024/nvI23RJ7.jpeg" height="100" align="left" hspace=10 vspace="5"> <b>จัดทำโดย :</b> 
นางสาว มณฑิฌา ดวงเวียง รหัส 583020675-7<br>สาขา : เทคโนโลยีสารสนเทศและการสื่อสาร<br>
 <hr> คณะ : วิทยาศาสตรต์  <a href='http://www.kku.ac.th'>มหาวิทยาลัยขอนแก่น</a><br> </div> </body> </html>
<style type="text/css">
<div>
<b style="color:#DF0174">จัดทำโดย : <b style="color:#A901DB">นางสาวมณฑิฌา ดวงเวียง <br>
<b style="color:#DF0174">รหัสนักศึกษา :<b style="color:#A901DB">583020675-7</b><br>
<b style="color:#DF0174">สาขา : <b style="color:#A901DB">เทคโนโลยีสารสนเทศและการสื่อสาร <b style="color:#DF0174">
<br> ภาควิชา : <b style="color:#A901DB">วิทยาการคอมพิวเตอร์</b><br>
<b style="color:#0000FF">คณะวิทยาศาสตร์ <br>มหาวิทยาลัยขอนแก่น</b><br>
</div>
 </body>
</html>


