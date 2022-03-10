<?php
include("../config.php");
$course_id = $_REQUEST['course_id'];

$query = $mysqli->query("CREATE TABLE IF NOT EXISTS analysis_data (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,course_id INT(6) NOT NULL,week INT(6) NOT NULL,attendance_count INT(30) NOT NULL)");

for ($i = 1; $i <= 14; $i++) {
	$queryData = $mysqli->query("INSERT IGNORE INTO analysis_data (course_id, week, attendance_count) VALUES ('$course_id','$i', NULL)");
}

for ($i = 1; $i <= 14; $i++) {
	$sql = "SELECT * FROM attendance_data WHERE course_id = '$course_id' AND week = '$i' AND attendance_status = 1";
	if ($result = mysqli_query($mysqli, $sql)) {
		$rowcount = mysqli_num_rows($result);
		echo "The total number of rows are: " . $rowcount;
		echo "<br>";
	}

	$queryUpdate = $mysqli->query("UPDATE analysis_data SET attendance_count = '$rowcount' WHERE course_id = '$course_id' AND week = '$i'");
}

if ($queryData) {
	$python = shell_exec('C:\Python39\python.exe index.py "' . $course_id . '"');
	echo "Python is printing:" . $python;
	header("location: analysis_view.php?course_id=$course_id");
}
