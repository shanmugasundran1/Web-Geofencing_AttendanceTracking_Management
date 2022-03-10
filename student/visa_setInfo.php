<?php
error_reporting(0);
include('../session.php');
include('../config.php');
?>

<?php
if (isset($_POST['new']) && $_POST['new'] == 1) {
  $matric_id = $loggedin_session;
  $student_name = $loggedin_name;
  $post_name = mysqli_real_escape_string($mysqli, $_POST['inputpost_name']);
  $given_name = mysqli_real_escape_string($mysqli, $_POST['inputgiven_name']);
  $sur_name = mysqli_real_escape_string($mysqli, $_POST['inputsur_name']);
  $birth_date = mysqli_real_escape_string($mysqli, $_POST['inputbirth_date']);
  $pass_number = mysqli_real_escape_string($mysqli, $_POST['inputpass_number']);
  $issue_country = mysqli_real_escape_string($mysqli, $_POST['inputcountry']);
  $issue_date = mysqli_real_escape_string($mysqli, $_POST['inputissue_date']);
  $expiry_date = mysqli_real_escape_string($mysqli, $_POST['inputexpiry_date']);
  $renewal_period = mysqli_real_escape_string($mysqli, $_POST['inputrenewal_period']);
  $approval_status = '0';

  $name_passport = $_FILES['passport']['name'];
  $size_passport = $_FILES['passport']['size'];
  $type_passport = $_FILES['passport']['type'];
  $temp_passport = $_FILES['passport']['tmp_name'];
  $newfilename_passport = $matric_id . $name_passport;
  move_uploaded_file($temp_passport, '../admin/visa_passport/' . $newfilename_passport);

  $name_transcript = $_FILES['transcript']['name'];
  $size_transcript = $_FILES['transcript']['size'];
  $type_transcript = $_FILES['transcript']['type'];
  $temp_transcript = $_FILES['transcript']['tmp_name'];
  $newfilename_transcript = $matric_id . $name_transcript;
  move_uploaded_file($temp_transcript, '../admin/visa_transcript/' . $newfilename_transcript);


  $sqlreg = "INSERT INTO visa_application (matric_id,student_name,post_name,given_name,sur_name,birth_date,pass_number,issue_country,issue_date,expiry_date,renewal_period,passport,transcript,approval_status) VALUES ('$matric_id','$student_name','$post_name','$given_name','$sur_name','$birth_date','$pass_number','$issue_country','$issue_date','$expiry_date','$renewal_period','$newfilename_passport','$newfilename_transcript','$approval_status')";

  $resultreg = mysqli_query($mysqli, $sqlreg);

  if ($resultreg) {
    header('location: visa_home.php');
  }
}
?>