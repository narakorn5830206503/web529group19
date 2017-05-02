<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head><title>ป้อนข้อมูล</title></head>

 <center>
<body background = "http://3.bp.blogspot.com/_IwbCppTeH0E/TJtfqUlEuuI/AAAAAAAAAbs/x8zgYvh4W3E/s1600/5.jpg" bgproperties ="fixed" >
<h1 style="color:#FF3399" MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%">
<font face=Webdings>4</font></MARQUEE>
<MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>
เพิ่มข้อมูลหนังสือ
<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE>
<MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%">
<font face=Webdings>3</font></MARQUEE></h1>
	<form method='post' action='work4save.php' onsubmit="return checkform()">
<center>
<table>
<tr><td>ชื่อหนังสื่อ <td colspan=3><input name='title' type='text' size='40' id='ftitle'>
<tr><td>ผู้แต่ง <td colspan=3><input name='author' type='text' size='40'>
<tr>
<td>ปีที่พิมพ์ <td><input name='year' type='text' size='5' id='fyear' id='ftitle'>
<td>ราคา<td><input name='price' type='text' size='10' id='fprice' id='ftitle'> บาท
<tr>
<tr>
<td>สำนักพิมพ์ <td><input name='press' type='text' size='20'>
<td>หมวดหมู่<td>
<select name='category' type='select' >
  <option>คอมพิวเตอร์</option>
  <option>วิทยาศาสตร์</option>
  <option>ประวัติศาสตร์</option>
  <option>นิยาย</option>
  <option>อาหาร</option>
  <option>ท่องเที่ยว</option>
  
</select>
<tr><td colspan=4>
เรื่องย่อ <br>
<textarea name='txt' rows=10 cols=60>
</textarea>
<tr><td>Link <td colspan=3><input name='link' type='text' size='40'>
<tr><td>ภาพปก(url) <td colspan=3><input name='pic' type='text' size='40'>
</table>
<input type='submit' value='บันทึก'>
</form>
<br>
<br>
<button style = “background-color:#FDB4BF”>
<a href="/"><img src="http://upic.me/i/v3/one_piece_full_equipage_by_delang-d4mce6t.png" width="100" height="30" align="absmiddle">กลับสู่หน้าหลัก</button> </a>

</body>
	<script>
 function checkform(){
	 try{
	  if(ftitle.value.length<3){
		alert("โปรดกรอกข้อมูล ชื่อหนังสือ");
		return false;
		}
		if(fyear.value.length<4 ||parseInt(fyear.value)<1900){
		alert("โปรดกรอกข้อมูล ปีที่พิมพ์");
		return false;
		}
		if(fprice.value.length<1 ||parseFloat(fprice.value)<=0){
		alert("โปรดกรอกข้อมูล ราคา");
		return false;
		}
	 }
	 catch(err){
		 alert("เกิดข้อผิดพลาด "+err.message);
		 return false;
	 }
 return true;
 }
 
</script>

