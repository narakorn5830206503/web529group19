<h1>ภาษา PHP: การใช้ For Loop </h1>
<h2><span style="font-size:20px"><strong>การใช้คำสั่ง for</strong></span></h2>
<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;คำสั่ง Looping เป็นกลุ่มคำสั่งที่ใช้ในการวนรอบ โปรแกรมจะทำงานไปเรื่อยๆ จนกว่าเงื่อนไขที่กำหนดไว้จะเป็นเท็จ จึงหลุดออกจากการทำงาน เป็นการช่วยลดเวลาในการเขียนซ้ำๆ กันได้มาก ใน PHP ในที่นี้เราจะนำมาเสนอเพียง for loop ก่อน มีคำสั่งดังนี้  </span></p>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>For Loop</b> - จะตรวจสอบเงื่อนไข พร้อมทั้งกำหนดค่าเริ่มต้น และการเปลี่ยนแปลงค่าเริ่มต้นไปพร้อมๆ กัน โดยตราบใดที่เงื่อนไขเป็นจริง ก็จะทำงานในคำสั่งภายใน for ต่อไป </span></p>

<p><span style="font-size:14px"><b>ส่วนประกอบของคำสั่งวนรอบจะมี 3 ส่วนใหญ่ๆ คือ </b><ul>
<li>ค่าเริ่มต้น (initialization)
<li>เงื่อนไขในการทำงาน (condition)
<li>คำสั่งเปลี่ยนค่า (update) 
</span>
</ul></p>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>รูปแบบ</b> </span></p>


<p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif"> &lt;?php
</span></span></span></p>

<p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for ( initialization; condition; update ) {
</span></span></span></p>

<p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif"> statement;
</span></span></span></p>

<p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }
</span></span></span></p>
 
 <p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif"> ?> 
</span></span></span></p>

<hr>

<br> <b>Example 1</b> <br>
<pre>
&lt;?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  
</pre><br>

<hr>
 <b>Example 2</b> <br>
<pre>
&lt;?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value &lt;br>";
}
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  
</pre>
