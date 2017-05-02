<ul ul class="nav nav-pills nav-stacked">
<?php
 $data = file("gs://$appid/menu.txt");
 $menu = "";
 $title = $page;
 foreach($data as $line){
 $s = trim($line);
 if($s!=''){
 list($key,$value) = explode("=",$s);
 $active="";
if($key==$page){
 $active=" class='active' ";
 $title = $value;
}

 echo "<li $active><a href='work7.php?p=$key'>$value</a>";
 }
 }
?>
</ul>