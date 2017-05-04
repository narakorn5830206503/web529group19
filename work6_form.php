<h1>ภาษา PHP: การใช้ FORM </h1>
<h2><span style="font-size:20px"><strong>การใช้คำสั่ง form</strong></span></h2>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;การรับข้อมูลที่ส่งมาจากฟอร์ม Form นั้น มีวิธีการส่งอยู่ 2 แบบนั่นคือ แบบ GET กับแบบ POST
แบบ GET นั้น จะส่งค่าผ่านทาง URL ทำให้ผู้ใช้งานสามารถมองเห็นข้อมูลที่ส่งไปได้
แบบ POST นั้น เวลาส่งข้อมูลผู้ใช้งานจะไม่มองเห็นข้อมูลที่ส่งไป และไม่มีข้อจำกัดของเรื่องขนาดของข้อมูลที่ส่งด้วย
ดูวิธีการสร้าง form สำหรับการส่งข้อมูลได้ที่ การสร้าง Form ในภาษา HTML
</span></p>

<hr>

<p style="margin-left:45px"><span style="font-size:14px"><span style="color:#0000CD"><b>การรับข้อมูลแบบ GET</b></span></span></p>


<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;การรับข้อมูลแบบ GET ในภาษา PHP จะใช้ตัวแปร $_GET ในการรับข้อมูล
ในการจะรับข้อมูลแบบ GET นั้น Form ที่ส่งข้อมูลมา จะต้องกำหนด method="get"</span></p>


 <b>ตัวอย่างการส่งข้อมูลแบบ GET</b> <br><br>
 <p><span style="font-size:14px">Form HTML ที่ต้องการส่งข้อมูล</span></p>

<pre>
&lt;?form action="welcome.php" method="get">
Name: &lt;input type="text" name="name" /&gt;
Age : &lt;input type="text" name="age" /&gt;
&lt;input type="submit" /&gt;
&lt;/form&gt;
</pre>
<p><span style="font-size:14px"><span style="color:#FF0000"> 
*** ไฟล์ PHP ที่รับข้อมูลที่ส่งมาจาก Form จากตัวอย่างข้างบน มีการ action ไปที่ไฟล์ welcome.php ฉะนั้นไฟล์ PHP ที่รับข้อมูลจะต้องชื่อไฟล์ว่า welcome.php
</span> </p>

<pre>
&lt;Welcome &lt;?php echo $_GET["name"]; ?>.
You are &lt;?php echo $_GET["age"]; ?> years old!
&lt;/form&gt;
</pre>


<hr>
<p style="margin-left:45px"><span style="font-size:14px"><span style="color:#0000CD"><b>การรับข้อมูลแบบ POST</b></span></span></p>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;การรับข้อมูลแบบ POST ในภาษา PHP จะใช้ตัวแปร $_POST ในการรับข้อมูล
ในการจะรับข้อมูลแบบ POST นั้น Form ที่ส่งข้อมูลมา จะต้องกำหนด method="post"</span></p>


  <b>ตัวอย่างการส่งข้อมูลแบบ POST</b> <br><br>
 <p><span style="font-size:14px">Form HTML ที่ต้องการส่งข้อมูล</span></p>
<pre>
&lt;form action="welcome.php" method="post">
Name: &lt;input type="text" name="name" /&gt;
Age : &lt;input type="text" name="age" /&gt;
&lt;input type="submit" /&gt;
&lt;/form&gt;
</pre>

<p><span style="font-size:14px"><span style="color:#FF0000"> 
*** ไฟล์ PHP ที่รับข้อมูลที่ส่งมาจาก Form จากตัวอย่างข้างบน มีการ action ไปที่ไฟล์ welcome.php ฉะนั้นไฟล์ PHP ที่รับข้อมูลจะต้องชื่อไฟล์ว่า welcome.php
</span> </p>

<pre>
&lt;Welcome &lt;?php echo $_POST["name"]; ?&gt;.
You are &lt;?php echo $_POST["age"]; ?&gt; years old!
&lt;/form&gt;
</pre>

<hr>
<p style="margin-left:45px"><span style="font-size:14px"><span style="color:#0000CD"><b>แล้วเมื่อไหร่ควรใช้ POST เมื่อไหร่ควรใช้ GET ดี???</b></span></span></p>

 <p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ควรใช้ POST เมื่อข้อมูลที่ส่ง เป็นความลับ เช่น พาสเวิร์ด รหัสบัตรเครดิต และอื่น ๆ
ถ้าข้อมูลที่ส่งเป็นความลับแต่ต้องการส่งข้อมูลแบบ GET จริง ๆ ควรเข้ารหัสไว้ด้วย
ควรใช้ GET เมื่อข้อมูลที่ส่ง เกี่ยวข้องกับ keyword ในการค้นหา
ควรใช้ POST เมื่อต้องการส่งข้อมูลขนาดใหญ่</span></p>

<hr>
 <b>Example 1</b> <br>
<pre>
&lt;form action="welcome.php" method="post">
Name: &lt;input type="text" name="name" /&gt;
Age : &lt;input type="text" name="age" /&gt;
&lt;p style="margin-left:100px">&lt;input type="submit" /&gt; &lt;/p>
&lt;/form&gt;
</pre>

<b>Result</b> <br>
<pre>
<form action="welcome.php" method="post">
Name: <input type="text" name="name" />
Age : <input type="text" name="age" />
<p style="margin-left:100px"><input type="submit" />
</form>
</pre><br>

<hr>
 <b>Example 2</b> <br>
<pre>
&lt;?form action="welcome.php" method="get">
Name: &lt;input type="text" name="name" /&gt;
Age : &lt;input type="text" name="age" /&gt;
&lt;p style="margin-left:100px">&lt;input type="submit" /&gt; &lt;/p>
&lt;/form&gt;
</pre>

<b>Result</b> <br>
<pre>
<form action="welcome.php" method="get">
Name: <input type="text" name="name" />
Age : <input type="text" name="age" />
<p style="margin-left:100px"><input type="submit" />
</form>
</pre>