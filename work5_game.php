<style>
#menu{
 text-align:center;
 margin-top: 50px;
}
#menu button{
 font-size: 16pt;
 width: 300px;
 height:50px;
 border: 2px solid #F4A460;
 margin: 10px;
 display:block;
 margin-left:auto;
 margin-right:auto;
 }
button.level1 { background-image: url("http://sp-maya.com/wp-content/uploads/2015/12/128.jpg")  }
button.level2 { background-image: url("http://3.bp.blogspot.com/-2wnq3SKar9k/UCB31PsEILI/AAAAAAAAABw/y8VxXQH8b-0/s1600/mugiwuaras.png") }
button.level3 { background-image: url("http://www.toonzaa.com/wp-content/uploads/2014/07/One-Piece.jpg") }
#menu button:hover {
 background-color:#00FF7F;
 color:#FFFF00;
}
#play_pane {
 display:none;
 font-size: 24pt;
 background-color: #DB7093;
 height:300px;
 margin: 20px;
 border: 3px outset #DB7093;

}
.box {
border: 1pt solid #FFFF00;
width: 80px; height: 70px;
text-align: center;
background-color: #FF0066;
display: inline-block;
padding-top:20px;
font-size: 28pt;
}
#msg_pane{
position:absolute;
display:none;
left:250px;
top:250px;
text-align: center;
font-size: 28pt;
width:400px; height:100px;
border: 2px solid #FF0066;
padding:30px;
}
.wrong { background: red; }
.right { background : green; }
</style>




<div id='menu'>
<h2>เลือกระดับความยาก</h2> <br>
<button class='level1' onclick="startGame(1)">ง่าย ตัวเลขไม่เกิน 20</button>
<button class='level2'onclick="startGame(2)">ปานกลาง ตัวเลขไม่เกิน 50</button>
<button class='level3'onclick="startGame(3)">ยาก ตัวเลขไม่เกิน 100</button>

</div>
<div id='play_pane'>
<div>
ระดับ :<span id='lb_level'>1</span> ข้อที่ :<span id='lb_pbno'>1</span>
ตอบถูก:<span id='lb_score'>0</span> ตอบผิด:<span id='lb_wrong'>0</span>
</div>

<div >
<span id='lb_num1' class='box'>0</span> +<span id='lb_num2' class='box'>0</span> =
<span class='box'>?</span>
</div>

<div>
<b>ให้เลือกคำตอบที่ถูกต้อง</b> <br>
<span id='lb_ans1' class='box' onclick='ansclick(this)'>0</span>
<span id='lb_ans2' class='box' onclick='ansclick(this)'>0</span>
<span id='lb_ans3' class='box' onclick='ansclick(this)'>0</span>
<span id='lb_ans4' class='box' onclick='ansclick(this)'>0</span>
<span id='lb_ans5' class='box' onclick='ansclick(this)'>0</span>
<span id='lb_ans6' class='box' onclick='ansclick(this)'>0</span>
</div>
<div id='msg_pane'></div>
</div>

</div>
<script>
/* แสดง Element */
function show(x){
 x.style.display = 'block';
}
/* ซอ่ น Element */
function hide(x){
 x.style.display = 'none';
}
/* เพอื่ ใชเ้รยี งตัวเลข */
function sortNumber(a,b) {
 return a - b;
}
var level=0; // ระดับความยาก
var score=0,wrong=0,pbno=1;
var num1=0,num2=0;

function startGame(lv){
 level = lv;
 hide(menu); // ซอ่ นหนา้เลอื กระดับ
 show(play_pane); // แสดงหนา้เลน่ เกมส์
 score=0; // ให้คะแนนที่ตอบถูก
 wrong=0; // ใชน้ ับจ านวนครัง้ ทตี่ อบผดิ
 pbno=1; // ข ้อที่
 showPlayPane();

}
function showPlayPane(){
 lb_level.innerHTML = level;
 lb_pbno.innerHTML = pbno; // ข ้อที่
 lb_score.innerHTML = score; // คะแนน
 lb_wrong.innerHTML = wrong; // จ านวนที่ตอบผิด
 max=20;
if(level==2) max=50;
if(level==3) max=100;
do{
 num1 = Math.round(Math.random()*max);
 num2 = Math.round(Math.random()*15);
}while(num1+num2 > max);
 lb_num1.innerHTML = num1;
 lb_num2.innerHTML = num2;
  num3 = num1 + num2;
 ans = new Array();
 ans.push(num3); // คำตอบ
 x=Math.round(num3-Math.random()*10); // หาตัวเลือกอีก 5 ตัว
 for(i=0;i<5;i++){
 do{
 x+=2;
 }while(x==num3);
 ans.push(x);
 }
 ans = ans.sort(sortNumber); // เรียงล าดับตัวเลือก
 for(i=1;i<=6;i++){
 document.getElementById('lb_ans'+i).innerHTML = ans[i-1];
 document.getElementById('lb_ans'+i).style.backgroundColor='';
 }
}

function ansclick(x){
ans = Number(x.innerHTML);
if(ans == num1+num2){
 score++;
 pbno++;
 msg_pane.innerHTML = "ถูกต้องเก่งมาก";
  msg_pane.className = 'right';
 msg_pane.style.display = "block";
 x.style.backgroundColor='#3366CC';
 window.setTimeout("hide(msg_pane)",2000);
 window.setTimeout("showPlayPane()",2000);
 showPlayPane();
}else{
 wrong++;
 lb_wrong.innerHTML = wrong;
 msg_pane.innerHTML = "ไม่ถูกลองตอบใหม่อีกที";
  x.style.backgroundColor='#990000';
 msg_pane.className = 'wrong';
 msg_pane.style.display = "block";
 window.setTimeout("hide(msg_pane)",3000);
}
}
</script>

