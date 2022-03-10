<?php
error_reporting(0);
include("../session.php");
include('../config.php');
?>

<?php
$frequencies = array();
$resultchart = mysqli_query($mysqli, "SELECT course_name,AVG(rating), COUNT(*) AS frequencies FROM feedback WHERE lecturer_name = '$loggedin_name'  and course_code='$course_check' and course_occurence='$course_occurenceCheck'");

if (mysqli_num_rows($resultchart) > 0) {
  while ($rowchart = mysqli_fetch_array($resultchart)) {

    $subject_chart[] = $rowchart["course_name"];
    $frequencies[] = $rowchart["frequencies"];
    $rating = $rowchart["AVG(rating)"];
    $checking = $rating;
  }
}
?>








