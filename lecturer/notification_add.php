<?php
error_reporting(0);
include '../session.php';
include('../config.php');
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Notification | E-Attendance@UM</title>
  <link rel="icon" href="../sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .rate {
      float: left;
      height: 46px;
      padding: 0 10px;
    }

    .rate:not(:checked)>input {
      position: absolute;
      top: -9999px;
    }

    .rate:not(:checked)>label {
      float: right;
      width: 1em;
      overflow: hidden;
      white-space: nowrap;
      cursor: pointer;
      font-size: 30px;
      color: #ccc;
    }

    .rate:not(:checked)>label:before {
      content: '★ ';
    }

    .rate>input:checked~label {
      color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
      color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
      color: #c59b08;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <?php include 'header_lecturer.php'; ?>
    <div class="content-wrapper">
        <section class="content-header card bg-dark rounded-0">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">Add Notification</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Notification</li>
                            <li class="breadcrumb-item active">Add Notification</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <?php
                if(isset($_POST['submit'])){
                    header("Location: notification.php");
                    $course = $_POST['course'];
                    $id = $loggedin_id;
                    $result2 = mysqli_query($mysqli, "SELECT * FROM lecturer_course WHERE subject_id = '$course' AND lecturer_id = '$id'");
                    $row2 = mysqli_fetch_array($result2);
                    $code = $row2['CourseCode'];
                    $name = $row2['CourseName'];
                    $detail = $row2['ClassDetail'];
                    $week = $_POST['week'];
                    $date = $_POST['date'];
                    $start = $_POST['start'];
                    $end = $_POST['end'];
                    $location = $_POST['location'];
                    $message = $_POST['message'];
                    $query = mysqli_query($mysqli, "INSERT INTO class_notification (courseid,lecturer_id,CourseCode,CourseName,ClassDetail,week,classdate,starttime,endtime,locationname,addmessage) 
                              VALUES ('$course','$id','$code','$name','$detail','$week','$date','$start','$end','$location','$message')");
                }
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">Select Course</label>
                        </div>
                        <?php 
                        $result = mysqli_query($mysqli, "SELECT * FROM lecturer_course WHERE acc_uname = '$loggedin_session'");
                        ?>
                        <div class="col-md-4">
                            <select name="course" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required> 
                                <?php while($row = mysqli_fetch_array($result)):;?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[3];?>&nbsp<?php echo $row[4];?>&nbsp<?php echo $row[5];?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">Week</label>
                        </div>
                        <div class="col-md-4">
                            <select name="week" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required>
                                <?php
                                    for ($i = 1;$i <= 15;$i++)
                                    {
                                        echo "<option>$i</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">New Class Date</label>
                        </div>
                        <div class="col-md-2">
                            <input type="date" name="date" class="form-control" required> 
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">New Start Time</label>
                        </div>
                        <div class="col-md-2"> 
                            <input type="time" name="start" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">New End Time</label>
                        </div>
                        <div class="col-md-2">
                            <input type="time" name="end" class="form-control" required>
                        </div>
                    </div>    
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">New Location</label>
                        </div>
                        <div class="col-md-2">
                            <?php
                            $query1 = "SELECT * FROM geolocation";
                            $result1 = mysqli_query($mysqli, $query1);
                          ?>
                          <select name="location" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>                            
                              <?php while($row1 = mysqli_fetch_array($result1)):;?>
                              <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1];?></option>
                              <?php endwhile;?>
                          </select>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">Message</label>
                        </div>
                        <div class="col-md-4">
                            <textarea type="text" name="message" rows="4" cols="50" class="form-control"></textarea>
                        </div>
                    </div>                   
                </div>
                <div class="col-md-7">
                    <div class="col-md-1">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

<footer class="main-footer" style="background-color: black; color:white;"> <strong>FCSIT ATTENDANCE &copy; 2021 </strong> FYP 1.
  <div class="float-right d-none d-sm-inline-block"> <b>University of Malaya</b> </div>
</footer>

</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../src/js/profanities.js"></script>
<?php include 'feedback_add_profanityScript.php'; ?>
<script>
  $(function() {
    $('#inputfeedback').summernote({
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
    });
  })
</script>

</html>