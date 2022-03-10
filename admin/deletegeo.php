<?php 
	include('../config.php');
	$id = $_REQUEST['id'];
	$delete = mysqli_query($mysqli, "DELETE FROM geolocation where location_ID = '$id'");
	if ($delete) {
		echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'keyingeo.php';</script>";
	}
 ?>