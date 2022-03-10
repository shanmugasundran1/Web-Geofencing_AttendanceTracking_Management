<?php
session_start();
?>
<?php
$_SESSION["emp_id"] = 1;
header("Location: ./attendance_choose_course.php");
?>
