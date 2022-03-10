<?php 
error_reporting(0);
include '../session.php';
include '../config.php';

$studentid = $loggedin_id;
$studentname = $loggedin_name;
$student_uname = $loggedin_session;
$courseid = $_GET['id'];
$status = 1;
$message = "I accept the change in class time and location!";
$files = "NA";

mysqli_query($mysqli, "INSERT INTO response (student_id,courseid,student_name,student_uname,status,message,files) 
                        VALUES ('$studentid','$courseid','$studentname','$student_uname','$status','$message','$files')");

header("Location: notification.php");
exit();
?>