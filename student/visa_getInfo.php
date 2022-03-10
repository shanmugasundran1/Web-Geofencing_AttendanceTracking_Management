<?php
$queryvisa = "SELECT * FROM visa_application WHERE matric_id='".$loggedin_session."'";
( $resultvisa = mysqli_query( $mysqli, $queryvisa ) )or die( mysqli_error( $mysqli ) );

$rowvisa = mysqli_fetch_assoc( $resultvisa );
$matric_id = $rowvisa[ 'matric_id' ];
$student_name = $rowvisa[ 'student_name' ];
$post_name = $rowvisa[ 'post_name' ];
$given_name = $rowvisa[ 'given_name' ];
$sur_name = $rowvisa[ 'sur_name' ];
$birth_date = $rowvisa[ 'birth_date' ];
$pass_number = $rowvisa[ 'pass_number' ];
$issue_country = $rowvisa[ 'issue_country' ];
$issue_date = $rowvisa[ 'issue_date' ];
$expiry_date = $rowvisa[ 'expiry_date' ];
$renewal_period = $rowvisa[ 'renewal_period' ];
$passport = $rowvisa[ 'passport' ];
$transcript = $rowvisa[ 'transcript' ];
$approval_status = $rowvisa[ 'approval_status' ];
