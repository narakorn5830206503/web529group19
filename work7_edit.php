<?php
 // Read File in Cloud Storage
 // Filename must be gs://xxxxxx.appspot.com/filename
 $file = $_REQUEST['file'];
 $filename = "gs://$appid/$file";
 if($_POST["file"] && $_POST["filedata"]){
 file_put_contents($filename,$_POST["filedata"]);
 }
 $filedata = "";
 if(file_exists($filename)){
 $filedata = file_get_contents($filename);
 }
?>
<h1>Edit File</h1>
<form method="post" action="">
<div class="form-group">
 <label for="file">File Name</label>
 <input class="form-control" type='text' name='file'
value="<?=$file?>">
</div>
<div class="form-group">
 <label for="filedata">File Data</label>
 <textarea class="form-control" name='filedata' rows=15><?=
htmlspecialchars($filedata) ?></textarea>
</div>
<button class="btn btn-primary">
<span class="glyphicon glyphicon-floppy-save"></span>
Save
</button>
</form>