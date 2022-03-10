<?php 
    /*  include "db.php";
      $userId=$_POST["userId"];
      $userLat=$_POST["userLat"];
      $userLng=$_POST["userLng"];
      $address=addslashes($_POST["address"]);
      $distance=$_POST["distance"];
      $sql="INSERT INTO checkin(userId,lat,longi,address,distance)VALUES('$userId','$userLat','$userLng','$address','$distance')";
      $result=$conn->query($sql);
      if($result==TRUE){
            echo "Success";
      }
      else{
            echo "error";
      }*/

      include "db.php";
      $courseid=1;
      $studentuname="wif180069";
      $lectureruname="17093605";
      $date="16/12/2021";
      $week="8";
      $attstatus="1";
      $sql="INSERT INTO attendance_data(course_id,student_uname,lecturer_uname,date,week,attendance_status)VALUES('$courseid','$studentuname','$lectureruname','$date','$week','$attstatus')";
      $result=$conn->query($sql);
      if($result==TRUE){
            echo "Success";
      }
      else{
            echo "error";
      }
?>