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
                     if($uploadOK == true){
		       echo "<script language='javascript'>\n";
		         echo "alert('Upload successful!');
			 window.location.href='https://web.njit.edu/~tej2/project1/forwardpage.html';";
			   echo "</script>\n";
			   }
			   
			   ?>
