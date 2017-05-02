<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
</head>
<body>
<?php
 $text = "<h1>Testing Google Cloud Storage</h1>";
 for($i=0;$i<10;$i++){
 $text .= "Item $i <br>";
 }
 $appid="solticha-137.appspot.com";
 file_put_contents("gs://$appid/test.txt",$text);
 echo "<br>Writing successful.";
?>

</body>
</html>