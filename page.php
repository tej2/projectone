<?php
abstract class page

{
protected $html;

public function _construct()
{
	$this->html .= '<html>';
	$this->html .= '<link rel="stylesheet" href="styles.css">';
	}
public function _destruct()
{
	$this->html .= '</html>';
	stringFunctions::printThis($this->html);
	}
public function get()
{
echo 'Get method's parent class';
}
public function post()
{
echo 'Post method's parent class';
}
}
?>
