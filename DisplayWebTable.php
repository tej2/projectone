<?php

class tableDisplay extends page
{
	public function get()
	{
	session_start();

	if($_SESSION['validation_message'])
	{
	$validMsg = $_SESSION['validation_message'];
	}
	echo "Displaying!";
	$csvFileName = $_GET['filename'];

	$data = array();
	$uploadedfile = fopen("Uploads/" . $csvFileName, "r");
	$formTable = '<b>Data Table</b>';
	$formTable .= '<table border="3">';
	$arraylength = 0;
	$countVar = 0;
	while (!feof($uploadedfile))
	{
		$countVar++;
		$i = 0
		$data = fgetcsv($uploadedfile);
		{
		$arraylength=count($data)
		if ($countVar == 1)
		{
			$formTable .= '<tr>';
			for ($i = 0; $i < $arraylength; $i++)
			{
			$formTable .= '<th>' . $data[$i] . '</th>';
			}
			$formTable .= '</tr>';
		} else
		{
			$formTable .= '<tr>';
			for ($i = 0; $i < $arraylength; $i++)
			{
			$formTable .= '<td>' . $data[$i] . '</td>';
			}
			$formTable .= '</tr>';
			}
		}
		$formTable .= '</table>';
		fclose($uploadedfile);
		stringFunctions::printThis($formTable);
		}
	}
	?>

