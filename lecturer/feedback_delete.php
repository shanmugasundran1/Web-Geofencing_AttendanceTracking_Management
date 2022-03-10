<?php

require('../config.php');
$feedback_id = $_REQUEST['feedback_id'];
$course_check = $_REQUEST['course_code'];
$course_occurenceCheck = $_REQUEST['course_occurence'];
$feedbackdel = "DELETE FROM feedback WHERE id='$feedback_id'";
$result = mysqli_query($mysqli, $feedbackdel) or die(mysqli_error($mysqli));

header("Location: feedback.php?course_code=$course_check&course_occurence=$course_occurenceCheck");
