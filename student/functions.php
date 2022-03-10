<?php
// getUserName
include '../session.php';

// getlat 
function getAssignedLocationLat($emp_id, $loggedin_id)
{
    include "db.php";
    $stdid = $loggedin_id;
    $sql = "SELECT geolocation.location_lat FROM student_course LEFT JOIN geolocation ON student_course.location_ID=geolocation.location_ID WHERE student_course.subject_id='$emp_id' AND student_course.student_id='$stdid'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        return $row["location_lat"];
    } else {
        echo "error in get Location";
    }
}

// getlng
function getAssignedLocationLng($emp_id, $loggedin_id)
{
    include "db.php";
    $stdid = $loggedin_id;
    $sql = "SELECT geolocation.location_long FROM student_course LEFT JOIN geolocation ON student_course.location_ID=geolocation.location_ID WHERE student_course.subject_id='$emp_id'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        return $row["location_long"];
    } else {
        echo "error in get Location";
    }
}

//getTheme
function getAssignedLocation($emp_id, $loggedin_id)
{
    include "db.php";
    $stdid = $loggedin_id;
    $sql = "SELECT geolocation.location_name AS assigned_address FROM student_course LEFT JOIN geolocation ON student_course.location_ID=geolocation.location_ID WHERE student_course.subject_id='$emp_id' AND student_course.student_id='$stdid'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        echo $row["assigned_address"];
    } else {
        return "error";
    }
}


//get subject
function getSubject($emp_id, $loggedin_id)
{
    include "db.php";
    $stdid = $loggedin_id;
    $sql = "SELECT * FROM student_course WHERE subject_id = '$emp_id' AND student_id = '$stdid'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        echo $row["subject_id"];
    } else {
        return "error";
    }
}
?>