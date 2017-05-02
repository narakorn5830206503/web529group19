<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>ภาษา PHP</title>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
rel="stylesheet">

<style type='text/css'> 

a:link {color:#4A9586 ; text-decoration: none}
a:visited {color:#FF3E96; text-decoration: none}
a:hover {color:#EE7600; text-decoration: none}</style>



</head>
<body role="document">
<header class="page-header text-center">

<h1><font COLOR=#C85A17>
ภาษา PHP เบื้องต้น</h1></font>


<style type="text/css"> 
body { 
background-image: url(http://s.img.kapook.com/photo/84/kapook_world-83086.jpg) ; 
background-color: #fee7ea;
background-attachment:fixed; 
background-repeat:repeat; }  
</style>
<button style = “background-color:#FDB4BF”>
<li><a href="/"><img src="http://upic.me/i/v3/one_piece_full_equipage_by_delang-d4mce6t.png" width="100" height="30" align="absmiddle">กลับสู่หน้าหลัก</button> </a>
</ul>

</header>
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Menu</h3>
</div>
<div class="panel-body">
<ul class="nav nav-pills nav-stacked">
<?php
 $menu=array(
 "home" =>array("home"," หน้าหลัก"),
 "info" =>array("info-sign","PHP Info"),
 "if" =>array("random","ประโยคเงื่อนไข"),
 "for" =>array("retweet","คำสั่งวนลูป"),
 "function" =>array("tasks","Function"),
 "form" =>array("check","Form Handling")
 
 );
 
 $page= $_GET['page'];
 if($page==""){$page="home";}
 
 foreach($menu as $k=>$m){
 $active="";
 if($k==$page) $active="class='active'";
 echo "<li $active>
 <a href='work6.php?page=$k'>
 <span class='glyphicon glyphicon-$m[0]'></span>
 $m[1]</a>
 </li>";
 }
?>
 </ul>
</div>
</div>
</div>

<div class="col-md-9">
<div class="panel panel-primary">
<div class="panel-heading"> 
<h3 class="panel-title"><?php echo $menu[$page][1] ?></h3>
</div>
<div class="panel-body" id="content">
<?php
$filename="work6_$page.php";
echo "Filename: $filename <br>";
if(file_exists($filename)) include($filename);
?>
</div>
</div>
</div>

</div>
<footer class="text-center page-footer"><br><br>
<div style="color:#555599;background-color:#FFDDDD;border:3px solid #FDB4BF;height:116px">
<img src="https://pbs.twimg.com/profile_images/523118765068673024/nvI23RJ7.jpeg" height="100" align="left" hspace=10 vspace="5">
<b><br>จัดทำโดย : </b> นางสาวมณฑิฌา ดวงวียง รหัส 583020675-7 <hr>
สาขา : เทคโนโลยีสารสนเทศและการสื่อสาร       ภาควิชา:  วิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ <a href='http://www.kku.ac.th'>มหาวิทยาลัยขอนแก่น</a><br></div>
</footer>
</div>
</body>
</html>
