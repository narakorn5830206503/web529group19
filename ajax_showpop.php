<?php
 $data = file("province.txt");
 $t=$_GET['id'];
 $found=false;
 foreach($data as $p){
 $row = explode("\t",$p);
 $id=$row[0];
 if($id==$t){
 $found=$row;
 break;
 }
 }
 if(!$found){
 echo "ไม่พบข้อมูล $t ";
 exit;
 }
 echo "<h2>ชื่อจังหวัด $found[1]</h2>";
 echo "<table class='table'>";
 echo "<tr><td>ปี พศ.<td>จำนวนประชากร(คน)";
 echo "<tr><td>2559<td>$found[2]";
 echo "</table>";
?>
<h2>ชื่อจังหวัด<?=$found[1]?></h2>
<table class='table'>
<tr><td>ปี พศ.<td>จำนวนประชากร(คน)
<tr><td>2559<td><?= $found[2] ?>
<tr><td>2558<td><?= $found[3] ?>
<tr><td>2557<td><?= $found[4] ?>
<tr><td>2556<td><?= $found[5] ?>
<tr><td>2555<td><?= $found[6] ?>
<tr><td>2554<td><?= $found[7] ?>
<tr><td>2553<td><?= $found[8] ?>
<tr><td>2552<td><?= $found[9] ?>
<tr><td>2551<td><?= $found[10] ?>
<tr><td>2550<td><?= $found[11] ?>
<tr><td>2549<td><?= $found[12] ?>
<tr><td>2548<td><?= $found[13] ?>
<tr><td>2547<td><?= $found[14] ?>
<tr><td>2546<td><?= $found[15] ?>
<tr><td>2545<td><?= $found[16] ?>
</table>