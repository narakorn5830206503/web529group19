<?php
 $data = file("province.txt");
 $t=$_GET['term'];
 $result=[];
 foreach($data as $p){
 $row = explode("\t",$p);
 $id=$row[0];
 $name = $row[1];
 if(strpos($p,$t)!==false){
$result[ ] = ["id"=>$id,"value"=>$name];
 }
 }
 echo json_encode($result);
?>
