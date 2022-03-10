<?php
include("../config.php");

$matric_id = $_REQUEST['matric_id'];

echo $matric_id;

$query = $mysqli->query("UPDATE visa_application SET approval_status = '2' WHERE matric_id = '" . $matric_id . "' ");

if ($query) {
  header("location: student_browse.php");
}
