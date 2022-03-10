<?php
$con = mysqli_connect('localhost', 'root', '', 'attendanceum');


$databases = ['attendanceum'];
$user = "root";
$pass = "";
$host = "localhost";

date_default_timezone_set("Asia/Kuala_Lumpur");

if (!file_exists("C:/xampp/htdocs/Attendance/admin/backup")) {
	mkdir("C:/xampp/htdocs/Attendance/admin/backup");
}

foreach ($databases as $database) {

	$result = date("D d-M-Y H-i");
	$result_date = date("D d-M");
	$result_year = date("Y");
	$result_time = date("H-i");

	$folder = "C:/xampp/htdocs/Attendance/admin/backup/shanattendanceum.sql";

	$sqlreg = "INSERT INTO backup (name, date, year, time) VALUES ('$result','$result_date','$result_year','$result_time')";
	$resultreg = mysqli_query($con, $sqlreg);

	exec("C:/xampp/mysql/bin/mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$folder}", $output);
}
print_r($output);
echo ($result);
