<?php
$course_id = $_REQUEST['course_id'];
?>

<?php
$sqlcourse = "SELECT * FROM course where courseid = '$course_id'";
$resultcourse = mysqli_query($mysqli, $sqlcourse);
$rowcourse = mysqli_fetch_array($resultcourse);

$course_id = $rowcourse['courseid'];
$course_code = $rowcourse['CourseCode'];
$course_name = $rowcourse['CourseName'];
$course_occurence = $rowcourse['ClassDetail'];
$course_day = $rowcourse['ClassDay'];
$course_time = $rowcourse['ClassTime'];
?>


<?php
$sqltd = "SELECT * FROM lecturer_course WHERE subject_id = '$course_id'";
$resulttd = mysqli_query($mysqli, $sqltd);
$rowtd = mysqli_fetch_array($resulttd);
$lecturer_id = $rowtd["acc_uname"];
?>


<?php
$sqlts = "SELECT * FROM lecturer_profile WHERE acc_uname = '$lecturer_id'";
$resultts = mysqli_query($mysqli, $sqlts);
$rowts = mysqli_fetch_array($resultts);
$lecturer_name = $rowts["acc_fullname"];
$lecturer_dept = $rowts["department"];
$lecturer_picture = $rowts["profile_pic"];
?>


<?php
$sqlap = "SELECT * FROM attendance_data WHERE course_id = '$course_id' AND student_uname = '$loggedin_session' AND (attendance_status = 1 OR attendance_status = 2)";
$resultap = mysqli_query($mysqli, $sqlap);
$count = 0;
if (mysqli_num_rows($resultap) > 0) {
  while ($row = mysqli_fetch_array($resultap)) {
    $count = $count + 1;
  }
}
else{
	$count = 0;
}



$sqlav = "SELECT * FROM attendance_data WHERE course_id = '$course_id' AND student_uname = '$loggedin_session'";
$resultav = mysqli_query($mysqli, $sqlav);
$total = 0;
if (mysqli_num_rows($resultav) > 0) {
  while ($row = mysqli_fetch_array($resultav)) {
    $total = $total + 1;
  }
}
		try {
        if ($total == 0) {
            throw new Exception('DivisionByZeroError');
        }
        } catch (Exception $e) {
		$total = 1;
        }
		echo PHP_EOL;

?>