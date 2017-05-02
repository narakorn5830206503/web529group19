<?php
 use google\appengine\api\users\UserService;
 global $appid,$page,$title,$userdata;
 //ไฟล์ความคิดเห็นจะบันทึกไว้ในไฟล์ json ตามชอื่ $page เช่นหน้า home ก็จะบันทึกข้อมูลไว้ในไฟล์ home.json 
 $fbfile = "gs://$appid/$page.json";
 $fbdata = array();
 
 // ถ้ามีไฟล์ข้อมูลให้อ่านไฟล์มาแสดงผล
 if(file_exists($fbfile)){
 $fbjson = file_get_contents($fbfile);
 $fbdata = json_decode($fbjson, true);
 echo "<hr>";
 foreach($fbdata as $fb){
 $text = htmlspecialchars($fb['feedback']);
 $time=date("d/m/Y H:i:s",$fb['time']);

 //  มีการเรียก userpic เพื่อแสดงภาพผู้ใช้
 $pic = userpic($fb['user']);
 echo "<div class='row'>";
 echo "<div class='col-xs-1'><img class='img-circle' src='$pic' width='60'></div>";
 echo "<div class='col-xs-10'>";
 echo "<a href='#'>$fb[name]</a><br>$text <br>";
 echo "<a href='#'>ถูกใจ</a> $time<hr>";
 echo "</div>";
 echo "</div>";
 }
 }

 // กรณีที่ผู้ใช้ login แล้ว ให้สามารถแสดงความคิดเห็นได้
 $user = UserService::getCurrentUser();
 if($user){
 include("work8_feedback_add.php");
 }
?>