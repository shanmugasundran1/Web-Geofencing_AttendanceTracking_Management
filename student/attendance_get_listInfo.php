<?php
$sqltd = "SELECT * FROM lecturer_course WHERE subject_id = '$course_id'";
$resulttd = mysqli_query($mysqli, $sqltd);

if (mysqli_num_rows($resulttd) > 0) {
  while ($row = mysqli_fetch_array($resulttd)) {
    $lecturer_id = $row["acc_uname"];
  }
}



$sqlts = "SELECT * FROM lecturer_profile WHERE acc_uname = '$lecturer_id'";
$resultts = mysqli_query($mysqli, $sqlts);

if (mysqli_num_rows($resultts) > 0) {
  while ($row = mysqli_fetch_array($resultts)) {
	$lecturer_name = $row["acc_fullname"];
  }
}



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
