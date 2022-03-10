<?php 
	include('../config.php');
	$id = $_REQUEST['id'];
	$delete = mysqli_query($mysqli, "DELETE FROM course where courseid = '$id'");
	if ($delete) {
		echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'keyincourse.php';</script>";
	}
 ?>