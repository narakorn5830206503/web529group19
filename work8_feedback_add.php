<?php
 if(!$user) return;
global $userdata;
 if($_POST["feedback"]){
//1. สร้าง record ที่จะเก็บข้อมูล feedback
$rec=array();
$rec['user']=$user->getUserId(); // รหัสผู้โพส
$rec['name']=$userdata['nick']; // ชื่อเล่นที่จะแสดง
$rec['feedback']=$_POST['feedback']; // ข้อความ
$rec['time']=mktime(); // เวลาที่โพส
//2. นำ $rec ไปต่อท้ายอาเรย์ $fbdata
$fbdata[ ] = $rec;
//3. แปลงเป็น json
$fbjson = json_encode($fbdata, JSON_PRETTY_PRINT);
 // 4. บันทึกลงไฟล์
file_put_contents($fbfile,$fbjson);
echo "<br>บันทึกเรียบร้อย <a href='work8.php?p=$page' id='pagelink'>ตกลง</a>";
 return;
 }
 $pic = userpic($user->getUserId());

?>
<br><br>
<form method="post" action="">
<div class="row">
<div class="col-xs-1">  <?= "<img class='img-circle' src='$pic' width='60'>" ?></div> 
<div class="col-xs-10">
 <label for="feedback"><?= $userdata['nick'] ?></label>
 <div class="input-group">
 <input type="text" class="form-control" placeholder="เขียนความคิดเห็น" name="feedback">
 <span class="input-group-btn">
 <button class="btn btn-default">ส่ง </button>
 </span>
 </div>
</div> <!-- /.col-10 -->
</div> <!-- /.row -->
</form>

