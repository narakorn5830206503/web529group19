<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>แสดงข้อมูล</title>
 
<style type='text/css'> 
a:link {color:#4A9586 ; text-decoration: none}
a:visited {color:#FF3E96; text-decoration: none}
a:hover {color:#EE7600; text-decoration: none}</style>


<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/games/gam-14/gam1379.ani), url(http://cur.cursors-4u.net/games/gam-14/gam1379.png), progress !important;}
</style><a href="http://www.cursors-4u.com/cursor/2011/11/11/halo-energy-sword-15.html" target="_blank" title="Halo Energy Sword"><img src="http://cur.cursors-4u.net/cursor.png" border="0" 
alt="Halo Energy Sword" style="position:absolute; top: 0px; right: 0px;" /></a>

 </head>
 
 <body> 
  
 <center>
<body background = "http://www.bloggang.com/data/inkispy/picture/1272351665.jpg" bgproperties ="fixed" >
<h1 style="color:#FF3399" MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%">
<font face=Webdings>4</font></MARQUEE>
<MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>
รายละเอียดหนังสือ
<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE>
<MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%">
<font face=Webdings>3</font></MARQUEE></h1>
 
<body bgcolor = "#fee7ea">
<style type="text/css"> 
body { 
background-image: url(http://sp-maya.com/wp-content/uploads/2015/07/2.jpg) ; 
background-attachment:fixed; 
background-repeat:repeat; }  
</style>
<center>
<br> 
<table border=1>
 <tr><td>ชื่อหนังสือ <td colspan=3><?= $_POST['title'] ?>
 <tr><td>ผู้แต่ง <td colspan=3><?= $_POST['author'] ?>
 <tr>
  <td>สำนักพิมพ์<td><?= $_POST['publisher'] ?>
  <td>หมวดหมู่<td><?= $_POST['category'] ?>
 <td>ปีที่พิมพ์<td><?= $_POST['year'] ?>
 <td>ราคา<td><?= $_POST['price'] ?> บาท
 <tr>
 <tr><td colspan=4>
 เรื่องย่อ
<div id='txt'>
 <?= $_POST['txt'] ?>
</div>
 <tr><td>Link <td colspan=3>
 <a href="<?= $_POST['link'] ?>"><?= $_POST['link'] ?></a>
 </table>
</body>
</html>
