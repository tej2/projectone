<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Manage {
	public static function autoload($class){
	include $class . '.php';
	}
}
spl_autoload_register(array('Manage', 'autoload'));

$fileUploadObject = new fileUploadMsg();

class fileUploadMsg
{
	public function _construct()
	{
		global $errorMsg;
		$target_dir = "Uploads/";
		$target_file = $target_dir .
		basename($FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$csvFileType = pathinfo($target_file, PATHINFO_EXTENSION;
		
		if ($csvFileType != "csv"){
		$errorMsg .= "Only CSVs are allowed.";
		$uploadOk = 0;
	}
		if ($uploadOk == 0){
		$errorMsg .= "File unable to upload.";
		} else
		{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
		$target_file))
		{
		$errorMsg .= "File has been uploaded.";
		} else
		{
		$errorMsg .= "Error uploading file.";
		}
	}
}

public function _destruct()
{
	global $errorMsg;
	if ($errorMsg) 
	{
		echo "Error!";
		}
	}


}

?>

