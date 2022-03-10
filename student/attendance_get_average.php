<?php
$sqlapavg = "SELECT * FROM attendance_data WHERE student_uname = '$loggedin_session' AND (attendance_status = 1 OR attendance_status = 2)";
$resultapavg = mysqli_query($mysqli, $sqlapavg);

$countavg = 0;
if (mysqli_num_rows($resultapavg) > 0) {
	while ($row = mysqli_fetch_array($resultapavg)) {
		$countavg = $countavg + 1;
	}
}
else{
	$countavg = 0;
}



$sqlavavg = "SELECT * FROM attendance_data WHERE student_uname = '$loggedin_session'";
$resultavavg = mysqli_query($mysqli, $sqlavavg);

$totalavg = 0;
if (mysqli_num_rows($resultavavg) > 0) {
	while ($row = mysqli_fetch_array($resultavavg)) {
		$totalavg = $totalavg + 1;
	}
}
		try {
        if ($totalavg == 0) {
            throw new Exception('DivisionByZeroError');
        }
        } catch (Exception $e) {
		$totalavg = 1;
        }
		echo PHP_EOL;
	
?>

