<?php

class homepage extends page

	public function get()
	{
		$form = '<form method="post" enctype="multipart/form-data">';
		$form .= '<input type="file" name="fileToUpload"
		id="fileToUpload">';
		$form .= '<input type="submit" value"Upload CSV File"
		name="submit">';
		$form .= '</form>';
		$this->html .= '<h1><b>Upload your CSV File Here!</h1></b>';
		$this->html .= $form;
	}
	public function post()
	{
	session_start();
	//starting the session for storing variables
	if(isset($_POST['submit']))
	{
	//checking if the submit button was clicked on
		$errorMsg ="";
		$target_dir = "uploads/";
		$target_file = str_replace(' ', '_', $target_dir .
		basename($FILES["fileToUpload"][
		"name"]));
		$csvFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		$csvFileName = pathinfo($target_file, PATHINFO_BASENAME);

		header('Location:
		index.php?page=DisplayWebTable&fileName='.$csvFileName);

		$errorMsg =
		fileValidation::getValidationMsgs($target_file,$errorMsg,$csvFileType);
		if ($errorMsg) {
		$_SESSION['validation_message'] = $errorMsg;
		}
	}
}
}
?>
