<!doctype html>
<?php
error_reporting(0);
 $appid = "solticha-137.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='main';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }
 
 use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}

 
?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title><?= $page ?> </title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <link rel="stylesheet"
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body role="document">
<header class="page-header text-center">
<h1>งานที่ 8 PHP Simple File CMS with Google User
</h1>
<button style = “background-color:#FDB4BF”>
<a href="/"><img src="http://upic.me/i/v3/one_piece_full_equipage_by_delang-d4mce6t.png" width="100" height="30" align="absmiddle">กลับสู่หน้าหลัก</button> </a>
</header>

<div class="container">
<div class="col-sm-3">
<?php panel_include("User","work8_user.php"); ?>
<?php panel_include("Menu","work8_menu.php"); ?>
</div>
<div class="col-sm-9">
<?php panel_include($title,"work8_body.php" ,"primary"); ?>
</div>
</div>

<style>
   .nav-pills li.active a{
     background: #FFD700;
   }
   .panel{
   background: url(11.pg);
box-shadow: 5px 20px 60px #aea;
   }
   .panel-primary .panel-heading{
     background:#FF73B9;
box-shadow: 5px 20px 60px #aea;
   }
.panel-default .panel-heading{
     background:#FF73B9;
box-shadow: 5px 20px 60px #aea;
   }
body{
 background: url(http://keedkean.com/files/members/actual/93_25c74c4d8fbd1960e32388185ba68897.jpg)
}


</style>

 <footer class="text-center page-footer">

 <?php
			 readfile("gs://$appid/footer.html");
			 use google\appengine\api\users\UserService;
             if (UserService::isCurrentUserAdmin()){
			 echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
			 echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
			 }
			?><br>
			จัดทำโดย : นางสาว มณฑิฌา ดวงเวียง รหัส : 583020675-7<br>
			ภาควิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น
			
			
 </footer>
</body>
</html>
