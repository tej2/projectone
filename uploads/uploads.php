<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$extension = pathinfo($_FILES['csvFileRep']['name'], \PATHINFO_EXTENSION);
if($info['extension'] == 'csv'){
 // Good to go
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
          $uploadOk = 0;
	  }
	   // Check file size
	   if ($_FILES["fileToUpload"]["size"] > 500000) {
	       echo "Sorry, your file is too large.";
	           $uploadOk = 0;
		   }
                                                  ?>
<?
$allowedExts = array("csv");
$allowedTypes = array("file/csv");

$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((in_array($_FILES["file"]["type"], $allowedTypes))
   && ($_FILES["file"]["size"] < 500000)
      && in_array($extension, $allowedExts))
      {
      if ($_FILES["file"]["error"] > 0)
      {
         echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	 }
	 else
	 {

	 if (file_exists("upload/" . $_FILES["file"]["name"]))
	   {
	     echo $_FILES["file"]["name"] . " already exists. ";
	       }
	         else
		   {
		       move_uploaded_file($_FILES["file"]["tmp_name"],
		       "upload/" . $_FILES["file"]["name"]);
		           header('Location:
			   https://web.njit.edu/~tej2/project1/forwardpage.html');
			     }
			       }
			       }
			       else
			       {
			       echo "Invalid file";
			       }
			       ?>
