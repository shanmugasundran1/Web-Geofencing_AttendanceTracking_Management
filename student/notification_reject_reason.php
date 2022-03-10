<?php
error_reporting(0);
include '../session.php';
include '../config.php';
?>
<?php
if (isset($_POST['submit']) != '') {
    $studentid = $loggedin_id;
    $studentname = $loggedin_name;
    $student_uname = $loggedin_session;
    $courseid = $_SESSION['courseid'];
    $status = 0;
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $type = $_FILES['photo']['type'];
    $temp = $_FILES['photo']['tmp_name'];
    $newfilename = $student_uname . $name;
    $checkuser = $loggedin_session;
    move_uploaded_file($temp, '../lecturer/response-files/' . $newfilename);

    $query = $mysqli->query(
        "INSERT INTO response (student_id,courseid,student_name,student_uname,status,message,files) 
                        VALUES ('$studentid','$courseid','$studentname','$student_uname','$status','$message','$newfilename')"
    );
    if ($query) {
        header('location:notification.php');
    } else {
        die(mysqli_error($mysqli));
    }
}
?>