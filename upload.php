<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$extension = pathinfo($_FILES['csvFileRep']['name'], \PATHINFO_EXTENSION);
if($info['extension'] == 'csv'){
 // Good to go
 }
						?>
