<!doctype html>
<?php
$appid = "web592group19.appspot.com";
$page = $_GET['p']; if($page=='') $page='Admin';
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
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page ?> </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header">
<?php
readfile("gs://$appid/projectheader.html");
?></header>
<div>
<div class="col-sm-3">
<?php panel_include("User","project_user.php"); ?>
</div>
<div class="col-sm-9">
<?php panel_include($title,"project_body.php" ,"primary");
global $appid;
use google\appengine\api\users\UserService;
if (UserService::isCurrentUserAdmin()){ 
echo "<a href='?p=edit&file=projectheader.html' class='btn btn-default'>แก้ไข header</a>";
echo "<a href='?p=edit&file=projectfooter.html' class='btn btn-default'>แก้ไข footer</a>";
echo "<a href='?p=edit&file=projectmain.html' class='btn btn-default'>แก้ไข Main Page</a>";
echo "<a href='?p=edit&file=projectcanon1.txt' class='btn btn-default'>แก้ไข Canon Page 1</a>";
echo "<a href='?p=edit&file=projectcanon2.txt' class='btn btn-default'>2</a>";
echo "<a href='?p=edit&file=projectcanon3.txt' class='btn btn-default'>3</a>";
echo "<a href='?p=edit&file=projectnikon1.txt' class='btn btn-default'>แก้ไข Nikon Page 1</a>";
echo "<a href='?p=edit&file=projectnikon2.txt' class='btn btn-default'>2</a>";
echo "<a href='?p=edit&file=projectnikon3.txt' class='btn btn-default'>3</a>";
echo "</br>";
echo "</br>";
}
?>
</div>
</div>
<footer><?php
readfile("gs://$appid/projectfooter.html");
?>
</footer>
</body>
</html>