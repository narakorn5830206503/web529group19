<h1>ภาษา PHP: การใช้ Function </h1>

<h2><span style="font-size:20px"><strong>การสร้างและการเรียกใช้ Function</strong></span></h2>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ฟังก์ชันใน PHP มีอยู่ 2 แบบ นั่นคือ <b>ฟังก์ชันมาตรฐาน (Built-In Function)</b> ซึ่งเป็นฟังก์ชันที่ภาษา PHP มีให้อยู่แล้วสามารถเรียกใช้ได้เลย เช่น ฟังก์ชัน Date, sort เป็นต้น และฟังก์ชันอีกแบบคือ <b>ฟังก์ชันแบบที่เราสร้างขึ้นเอง (User-Defined Function: UDF)</b> </span></p>

<p><span style="font-size:14px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>รูปแบบ</b> </span></p>

 <p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif"> &nbsp;  &nbsp; &nbsp;function functionName(){
</span></span></span></p>

<p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif">&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; code to be executed;
</span></span></span></p>

 <p style="margin-left:40px"><span style="font-size:14px">
<span style="color:#0000CD"><span style="font-family:tahoma,geneva,sans-serif">  &nbsp; &nbsp; &nbsp;}
</span></span></span></p>

<p><span style="font-size:14px"><span style="color:#FF0000"><strong>TIP :</strong> วิธีการตั้งชื่อฟังก์ชัน
ชื่อของฟังก์ชันควรสื่อความหมายที่ฟังก์ชันทำงานและ
ชื่อของฟังก์ชันต้องขึ้นต้นด้วยตัวอักษรหรือขีดล่างเท่านั้น</span> </p>

<hr>
 <b>Example 1</b> <br>
<pre>
&lt;?php
$t = date("H");
echo "&lt;?php
	function helloDoesystem(){
		echo "สวัสดี นี่เป็นการทดสอบการเขียนฟังก์ชัน PHP ";
	}
	helloDoesystem();
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php
	function helloDoesystem(){
		echo "สวัสดี นี่เป็นการทดสอบการเขียนฟังก์ชัน PHP ";
	}
	helloDoesystem();
?>
</pre>
<p><span style="font-size:14px"><span style="color:#FF0000">*** ฟังก์ชันนี้ชื่อ helloDoesystem เวลาต้องการเรียกใช้ ก็แค่เรียกชื่อฟังก์ชัน</span> </p>

<hr>
 <b>Example 2</b> <br>
<pre>
&lt;?php
	function helloName($name){
		echo "สวัสดีครับ คุณ ".$name."
";
	}
	helloName("Somchai");
	helloName("SomYing");
	helloName("Sompong");
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php
	function helloName($name){
		echo "สวัสดีครับ คุณ ".$name."
";
	}
	helloName("Somchai");
	helloName("SomYing");
	helloName("Sompong");
?>
</pre>
<p><span style="font-size:14px"><span style="color:#FF0000">*** ฟังก์ชันนี้ชื่อ helloName เวลาต้องการเรียกใช้ ก็แค่เรียกชื่อฟังก์ชันแล้วตามด้วยพารามิเตอร์ name ที่ต้องการให้แสดงออก</span> </p>

<hr>
 <b>Example 3</b> <br>
<pre>
&lt;?php
	function helloName2($name, $lastname){
		echo "สวัสดีครับ คุณ ".$name." ".$lastname."
";
	}
	helloName("นารัตน์", "พัดลมโชย");
	helloName("หรูหรา", "ออมตง");
	helloName("นางหวด", "สวามิพัก");
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php
	function helloName2($name, $lastname){
		echo "สวัสดีครับ คุณ ".$name." ".$lastname."
";
	}
	helloName("นารัตน์", "พัดลมโชย");
	helloName("หรูหรา", "ออมตง");
	helloName("นางหวด", "สวามิพัก");
?>
</pre>
<p><span style="font-size:14px"><span style="color:#FF0000">*** ฟังก์ชันนี้ชื่อ helloName2 เวลาต้องการเรียกใช้ ก็แค่เรียกชื่อฟังก์ชันแล้วตามด้วยพารามิเตอร์ name กับ lastname ที่ต้องการให้แสดงออก</span> </p>

<hr>
 <b>Example 4</b> <br>
<pre>
&lt;?php
	function add($x, $y){
		return $x+$y;
	}
	echo add(2, 3)."
";
	echo "5 + 2 = ".add(5, 2)."
";
	add(4, 2)."
";
?&gt;
</pre>

<b>Result</b> <br>
<pre>
<?php
	function add($x, $y){
		return $x+$y;
	}
	echo add(2, 3)."
";
	echo "5 + 2 = ".add(5, 2)."
";
	add(4, 2)."
";
?>
</pre>
<p><span style="font-size:14px"><span style="color:#FF0000">*** ฟังก์ชันนี้ชื่อ add เป็นฟังก์ชันบวกเลขสองตัว เวลาต้องการเรียกใช้ ก็แค่เรียกชื่อฟังก์ชันแล้วตามด้วยพารามิเตอร์ x กับ y ที่ต้องการบวกกัน เวลาต้องการแสดงก็สั่ง echo ด้วยเพราะว่า ในฟังก์ชัน return ค่าออกมา</span> </p>













