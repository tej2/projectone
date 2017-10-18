<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Manage {
	public static function autoload($class) {
	include $class . '.php';
	}
}
spl_autoload_register(array('Manage', 'autoload'));

$obj = new main();

class main {

	public function  __construct()
	{
		$requestPageType = 'homepage';
		if(isset(REQUEST['page'])) {
			$requestPageType = $_REQUEST['page'];
			}
			$page = new $requestPageType;

			if($_SERVER['REQUEST_METHOD'] == 'GET') {
				$page->get();
			} else {
				$page->post();
				}
			}
		}
abstract class page

{
protected $html;

public function __construct()
{
        $this->html .= '<html>';
	 $this->html .= '<link rel="stylesheet" href="styles.css">';
	  }
		public function __destruct()
		{
        $this->html .= '</html>';
	 stringFunctions::printThis($this->html);
		 }
		public function get(){
			echo 'Get method parent class';
			}
		public function post(){
			echo 'Post method parent class';
			}
		}

class homepage extends page

        public function get()
	        {
		 $form = '<form method="post" enctype="multipart/form-data">';
		 $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
 	         $form .= '<input type="submit"	value"Upload CSV File" name="submit">';		              $form .= '</form>';
		 $this->html .= '<h1><b>Upload your CSV File Here!</h1></b>';
		 $this->html .= $form;
		 }
	public function post()
	{
	$target_dir = "uploads/";
	$target_file = str_replace(' ', '_', $target_dir . basename($FILES["fileToUpload"]["name"]));
	$csvFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$csvFileName = pathinfo($target_file,PATHINFO_BASENAME);
	header('Location: index.php?page=DisplayWebTable&fileName='.$csvFileName);

			
			}
			}
