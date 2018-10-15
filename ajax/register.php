<?php 

define('__CONFIG__', true);

require_once "../inc/config.php"; 


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		header('Content-Type: application/json');

		$return = [];


		echo json_encode($return, JSON_PRETTY_PRINT);

	} else {
		exit('test');
	}
?>