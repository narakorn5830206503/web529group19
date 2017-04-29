<?php
use google\appengine\api\users\UserService;
global $appid,$page,$title;
$phpfile="project_body_$page.php";
if(file_exists($phpfile)){
include($phpfile);
}else{
$htmlfile = "gs://$appid/$page.html";
if(file_exists($htmlfile)){
readfile($htmlfile);
}
if (UserService::isCurrentUserAdmin()){
}
include("project_feedback.php");
}
?>