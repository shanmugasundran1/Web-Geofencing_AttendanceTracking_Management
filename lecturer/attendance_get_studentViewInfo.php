<?php
$student_check = $_REQUEST['student_uname'];
$course_id = $_REQUEST['course_id'];

$sqlcourse = "SELECT * FROM course where courseid = '$course_id'";
$resultcourse = mysqli_query($mysqli, $sqlcourse);
$rowcourse = mysqli_fetch_array($resultcourse);

$course_id = $rowcourse['courseid'];
$course_code = $rowcourse['CourseCode'];
$course_name = $rowcourse['CourseName'];
$course_occurence = $rowcourse['ClassDetail'];
$course_day = $rowcourse['ClassDay'];
$start_time = $rowcourse['StartTime'];
$end_time = $rowcourse['EndTime'];

$sqltd = "SELECT * FROM lecturer_course WHERE subject_id = '$course_id'";
$resulttd = mysqli_query($mysqli, $sqltd);
$rowtd = mysqli_fetch_array($resulttd);
$lecturer_id = $rowtd["acc_uname"];

$sqlts = "SELECT * FROM lecturer_profile WHERE acc_uname = '$lecturer_id'";
$resultts = mysqli_query($mysqli, $sqlts);
$rowts = mysqli_fetch_array($resultts);
$lecturer_name = $rowts["acc_fullname"];
$lecturer_dept = $rowts["department"];
$lecturer_picture = $rowts["profile_pic"];

$sqlstudent = "SELECT * FROM student_profile WHERE acc_uname = '$student_check'";
$resultstudent = mysqli_query($mysqli, $sqlstudent);
$rowstudent = mysqli_fetch_array($resultstudent);
$student_namecheck = $rowstudent["acc_fullname"];
$student_picturecheck = $rowstudent["profile_pic"];

$sqlap = "SELECT * FROM attendance_data WHERE course_id = '$course_id' AND student_uname = '$student_check' AND (attendance_status = 1 OR attendance_status = 2)";
$resultap = mysqli_query($mysqli, $sqlap);
$count = 0;
if (mysqli_num_rows($resultap) > 0) {
  while ($row = mysqli_fetch_array($resultap)) {
    $count = $count + 1;
  }
}
else{
	$count = 1;
}

$sqlav = "SELECT * FROM attendance_data WHERE course_id = '$course_id' AND student_uname = '$student_check'";
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
