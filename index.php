<?php

//turn on the debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//adding class to load classes finds the file when the program starts to
fail for calling a missing class

class Manage {
	public static function autoload($class) {
	//put any file name or directory here
	include $class . '.php';
	}
}
spl_autoload_register(array('Manage', 'autoload));

//instantiate program object

$obj = new main();

class main {

	public function _construct()
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
		?>
