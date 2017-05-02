<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
</head>
<body>
<strong>File Read From : test.txt </strong><br>
<?php
 $appid="solticha-137.appspot.com";
 echo file_get_contents("gs://$appid/test.txt");
?>
</body>
</html>