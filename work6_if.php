<h1>ภาษา PHP: การใช้ IF </h1>
<h2><span style="font-size:20px"><strong>การใช้คำสั่ง if</strong></span></h2>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; คำสั่ง if ใช้ในการเปรียบเทียบเงื่อนไขว่าตรงตามที่ต้องการหรือไม่ หากตรงกับเงื่อนไขจะทำตามคำสั่งที่กำหนดไว้ แต่หากไม่ตรงกับเงื่อนไขก็จะข้ามไปยังคำสั่งถัดไป นอกจากคำสั่ง if แล้วยังมีคำสั่งอื่นๆที่เกี่ยวข้องกันอีก เช่น else เป็นต้น ซึ่งตอนนี้เรามาดูคำสั่ง if กันก่อน เพื่อจะได้เข้าใจคำสั่งต่อไปได้ง่ายขึ้น</span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif">if(เงื่อนไข){</span></span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif">&nbsp; &nbsp; &nbsp;สิ่งที่เราจะให้ทำเมื่อเข้าเงื่อนไข</span></span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:rgb(0, 0, 205); font-family:tahoma,geneva,sans-serif">}</span></span></p>

<p><span style="font-size:14px"><span style="color:#FF0000"><strong>TIP :</strong> เงื่อนไขคำสั่ง if นั้นจะต้องให้ผลลัพธ์ออกมาเป็น true หรือ false อย่างใดอย่างหนึ่งเท่านั้น และต้องกำหนดเงื่อนไขไว้ในวงเล็บปีกกาเสมอ</span> เช่น&nbsp;</span></p>

<p style="margin-left:40px"><span style="font-size:14px"><strong>Ex. if แบบเงื่อนไขเดียว</strong></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">if($a == $b){</span></span></p>

<p style="margin-left:120px"><span style="font-size:14px"><span style="color:#0000CD">echo &quot;ตัวแปร a เท่ากับ ตัวแปร b&quot;;</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><strong>Ex. if แบบ หลายเงื่อนไข</strong></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">if($a == $b &amp;&amp; $a &gt; 0){</span></span></p>

<p style="margin-left:120px"><span style="font-size:14px"><span style="color:#0000CD">echo &quot;ค่า a เท่ากับ&nbsp;&quot;.$a;</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<hr />
<h2><span style="font-size:20px"><strong><span style="color:#000000">การใช้คำสั่ง if และ&nbsp;else</span></strong></span></h2>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp;คำสั่ง if else นั้นเป็นการกำหนดทางเลือกอื่นๆ&nbsp;หากกรณีโปรแกรมนั้นไม่ตรงกับเงื่อนไขที่อยู่ใน if โปรแกรมก็จะทำงานคำสั่งต่างๆ ที่อยู่ในวงเล็บปีกกาของ else แทน ซึ่งโครงสร้างของ if else มีรูปแบบดังนี้</span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">if(เงื่อนไข){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่จะทำ ถ้าตรงกับเงื่อนไข if&nbsp;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else{</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่จะทำ <u>ถ้าไม่ตรง</u>กับเงื่อนไข if&nbsp;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p><span style="font-size:14px">ตัวอย่างต่อไป จะแสดงโปรแกรมที่ไม่ตรงกับเงื่อนไข if ซึ่งโปรแกรมด้านล่างจะไปทำคำสั่งภายใต้วงเล็บปีกกาของ else แทน</span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">$a = 12;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">if($a % 5 = 1){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">echo &quot;เข้าเงื่อนไข if &quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else{</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">echo &quot;เข้าเงื่อนไข else &quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p><span style="font-size:14px">จากตัวอย่างด้านบน จะได้ผลลัพธ์การแสดงผลข้อความ &quot;เข้าเงื่อนไข else &quot;&nbsp;เพราะ $a % 5 จะได้เท่ากับ 2 จึงไม่เข้าเงื่อนไข if&nbsp;</span></p>

<p>&nbsp;</p>

<hr>
<h2><span style="font-size:20px"><strong>การใช้คำสั่ง else if</strong></span></h2>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; การใช้เงื่อนไข else if เราจะใช้ในกรณีที่เรามีเงื่อนไขคำสั่งเยอะๆ ซึ่งแต่ละเงื่อนไขนั้นแตกต่างกันครับ ซึ่งสามารถพูดได้ว่า else if นั้นเป็นสิ่งที่มาเสริมให้กับคำสั่ง if นั้นสมบูรณ์รัดกุมกับเงื่อนไขมากขึ้นก็ว่าได้
 ซึ่งเราสามารถเขียน else if เพิ่มมากี่อันก็ได้ แต่ต้องใช้ควบคู่กับ if เสมอ (ห้ามเขียนโดยไม่มี if เปิดให้ก่อน) อีกทั้งเรายังสามารถนำมาใช้ควบคู่กับ if else ได้ด้วย แบบว่าหากไม่เข้าเงื่อนไขอันใดอันนึงก็ต้องเข้า else &nbsp;ซึ่งเราสามารถเขียนโครงสร้าง else if&nbsp;ได้ดังนี้</span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">if(เงื่อนไขที่ 1){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่ 1</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else if(เงื่อนไขที่ 2){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่ 2</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px">&nbsp;</p>

<p><span style="color:#FF0000"><span style="font-size:14px"><strong>TIP : </strong>else ต้องอยู่ท้ายเสมอ else if จะอยู่ตรงกลางระหว่าง if กับ else</span></span></p>

<p><strong><span style="font-size:14px">ตัวอย่างโครงสร้างหากเพิ่ม else เข้ามา&nbsp;</span></strong></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">if(เงื่อนไขที่ 1){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่จะทำหากตรงกับเงื่อนไขที่ 1 ในวงเล็บ if</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else if(เงื่อนไขที่ 2){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่จะทำหากตรงกับเงื่อนไขที่ 2&nbsp;ในวงเล็บ else if</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else{</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">คำสั่งที่จะทำหากว่าไม่ตรงกับเงื่อนไขใดๆเลย ทั้ง if และ else if</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px">&nbsp;</p>

<p><span style="font-size:14px"><span style="color:#000000"><strong>ตัวอย่างการใช้เงื่อนไข else if กับโปรแกรมตัดเกรด</strong> (แน่นอนว่าผู้หัดเขียนโปรแกรมใหม่ต้องเจอกับโปรแกรมนี้แทบทุกคน&nbsp;)</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">$score = 77;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">if($score &gt;= 80){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">$grade &nbsp;= &nbsp;&quot;A&quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else if($score &gt;= 70){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">$grade &nbsp;= &nbsp;&quot;B&quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else if($score &gt;= 60){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">$grade &nbsp;= &nbsp;&quot;C&quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else if($score &gt;= 50){</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">$grade &nbsp;= &nbsp;&quot;D&quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">else{</span></span></p>

<p style="margin-left:80px"><span style="font-size:14px"><span style="color:#0000CD">$grade &nbsp;= &nbsp;&quot;F&quot;;</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">}</span></span></p>

<p style="margin-left:40px"><span style="font-size:14px"><span style="color:#0000CD">echo &quot;คะแนนของคุณคือ&nbsp;&quot;.$score.&quot; ดังนั้นเกรดที่ได้คือ &quot;.$grade;</span></span></p>

<p style="margin-left:40px">&nbsp;</p>

<p><span style="font-size:14px">จาก code ด้านบนเราจะได้ผลลัพธ์ข้อความ <strong>คะแนนของคุณคือ 77 ดังนั้นเกรดที่ได้คือ B</strong></span></p>

<p><span style="font-size:14.4444446563721px">&nbsp; &nbsp; &nbsp; &nbsp;นอกจากการเขียน if, if else และ else if แล้ว คำสั่ง ในแต่ละคำสั่งเราก็สามารถซ้อนคำสั่งพวกนี้เข้าไปข้างในวงเล็บปีกกาได้อีก เพื่อใช้ตรวจสอบเงื่อนไขที่ละเอียดขึ้น &nbsp;นอกจากนี้แล้วยังมีเทคนิคการใช้ if อีกรูปแบบหนึ่งในภาษา php อยู่เหมือนกัน ก็คือการใช้ shorthand if นั่นเอง ซึ่งเป็นการเขียน if แบบ สั้นๆ โดยไม่มีวงเล็บปีกกาลองศึกษาดูได้ที่นี่ --&gt; <a href="http://itnews4u.com/shorthand-if.html"><u><strong>เทคนิคการใช้ shorthand if</strong></u></a></span></p>


<hr>
 <b>Example 1</b> <br>
<pre>
&lt;?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>
</pre>


<hr>
 <b>Example 2</b> <br>
<pre>
&lt;?php
$t = date("H");
echo "&lt;p&gt;The hour (of the server) is " . $t; 
echo ", and will give the following message:&lt;/p&gt;";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
</pre>





















