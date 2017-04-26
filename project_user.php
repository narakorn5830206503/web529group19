<?php
// ส่วนตั้งค่ำ เรียกใช้งำน UserService ของ Google
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
global $user;
$user = UserService::getCurrentUser();
if($user){
$url = UserService::createLogoutUrl('/project.php');
echo "Login as <br>".$user->getNickname();
echo "<br><a href='$url'>Logout</a>";
}else{
$url = UserService::createLoginUrl('/project.php');
echo "<a href='$url'>Login or Register</a>";
}
?>