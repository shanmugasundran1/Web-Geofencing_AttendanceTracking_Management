<?php
ob_start();
$action = $_GET['action'];
include 'schedule_class.php';
$crud = new Action();
if($action == "get_schecdule"){
	$get = $crud->get_schecdule();
	if($get)
		echo $get;
}	
ob_end_flush();
?>
