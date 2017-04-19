<!doctype html>
<?php
error_reporting(0);
 $appid = "jirawan-5830206503.appspot.com";
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
 background: url(11.png)
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
			จัดทำโดย : นางสาว จิราวรรณ เพ็งน้ำคำ รหัสนักศึกษา 583020650-3<br>
			ภาควิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น
			
			
 </footer>
</body>
</html>
