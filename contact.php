<!doctype html>
<?php
$appid = "web592group19.appspot.com";
$page = $_GET['p']; if($page=='') $page='contact';
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
<?php
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
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header">
<?php
readfile("gs://$appid/projectheader.html");
?></header>
<div align="center">
  <h2>Review</h2>
</div>
<div class="container">
<div class="col-sm-3">
<?php panel_include("User","project_user1.php"); ?>
</div>
<div class="col-sm-9">
<?php panel_include($title,"project_body1.php" ,"primary"); ?>
</div>
</div>
<footer><?php
readfile("gs://$appid/projectfooter.html");
?>
</footer>
</body>
</html>
