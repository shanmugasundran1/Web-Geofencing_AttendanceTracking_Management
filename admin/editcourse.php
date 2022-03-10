<?php
error_reporting(0);
include("../session.php");
include('../config.php');
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Key In Course Data | E-Attendance@UM</title>
    <link rel = "icon" href ="../sources/um_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <style>
    thead input 
    {
      width: 100%;
    }
    </style>
    <script language ="javascript" >
          var tmp;
          function f1() {
              tmp = setTimeout("callitrept()", 1000000);
          }
          function callitrept() {
              document.getElementById("testbutton").click();
          }
    </script>
  </head>
  <body onload="f1()"; class="hold-transition sidebar-mini" style="background-color:black;">
    <?php
    include("header-admin.php");
    ?>
    <div class="content-wrapper">
      <section class="content-header card bg-dark rounded-0">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-family:Helvetica; font-weight:bold;">Edit Course</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" style="color:white">Edit Course</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card border border-dark" style="border-radius: 10px;">
                <div class="card-body">
              <?php
              $oldcourseid = $_GET['id'];
              $default = mysqli_query($mysqli, "SELECT * FROM course where courseid = '$oldcourseid'");
              $row = mysqli_fetch_array($default); 
                  if(isset($_POST['submit'])){
                    header("Location: keyincourse.php");
                    $newcourseid = $_POST['courseid'];
                    $coursetype = $_POST['coursetype'];
                    $coursecode = $_POST['coursecode'];
                    $coursename = $_POST['coursename'];
                    $classdetail = $_POST['classdetail'];
                    $classday = $_POST['classday'];
                    $classdate = $_POST['classdate'];
                    $starttime = $_POST['starttime'];
                    $endtime = $_POST['endtime'];
                    $locationid = $_POST['locationid'];
                    $result = mysqli_query($mysqli, "UPDATE course SET courseid = '$newcourseid', CourseType='$coursetype', CourseCode='$coursecode', CourseName='$coursename', ClassDetail='$classdetail', ClassDay='$classday', ClassDate='$classdate', StartTime='$starttime', EndTime='$endtime', location_ID='$locationid' WHERE courseid='$oldcourseid '");                  
                  }
              ?>
                  <form action="" method="post">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Course ID</label>
                        </div>
                        <div class="col-md-2">
                          <input type="number" name="courseid" class="form-control" value="<?php echo $row[0]; ?>" required>
                        </div>   
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Course Type</label>
                        </div>  
                        <div class="col-md-2">
                          <select name="coursetype" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required>
                            <?php if ($row[1] == 1) { ?> 
                              <option value="1" selected>Faculty Core Course</option>
                              <option value="2">Program Core Course</option>
                              <option value="3">Faculty Elective Courses</option>
                              <option value="4">Specialization Elective Courses</option>
                            <?php } elseif ($row[1] == 2) { ?> 
                              <option value="1">Faculty Core Course</option>
                              <option value="2" selected>Program Core Course</option>
                              <option value="3">Faculty Elective Courses</option>
                              <option value="4">Specialization Elective Courses</option>
                            <?php } elseif ($row[1] == 3) { ?> 
                              <option value="1">Faculty Core Course</option>
                              <option value="2">Program Core Course</option>
                              <option value="3" selected>Faculty Elective Courses</option>
                              <option value="4">Specialization Elective Courses</option>
                            <?php } else { ?> 
                              <option value="1">Faculty Core Course</option>
                              <option value="2">Program Core Course</option>
                              <option value="3">Faculty Elective Courses</option>
                              <option value="4" selected>Specialization Elective Courses</option>
                            <?php }  ?>
                          </select>
                        </div>  
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Course Code</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="coursecode" class="form-control" value="<?php echo $row[2]; ?>" required>
                        </div>   
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Course Name</label>
                        </div>
                        <div class="col-md-4">
                          <input type="text" name="coursename" class="form-control" value="<?php echo $row[3]; ?>" required>
                        </div>
                      </div>                   
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Class Detail</label>
                        </div>
                        <div class="col-md-4">
                          <select name="classdetail" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required> 
                            <option value="K1">Lecture 1</option>
                            <option value="K2">Lecture 2</option>
                            <option value="K3">Lecture 3</option>
                            <option value="K4">Lecture 4</option>
                            <option value="T1">Tutorial 1</option>
                            <option value="T2">Tutorial 2</option>
                            <option value="T3">Tutorial 3</option>
                            <option value="T4">Tutorial 4</option>
                            <option value="T5">Tutorial 5</option>
                            <option value="T6">Tutorial 6</option>
                            <option value="T7">Tutorial 7</option>
                            <option value="T8">Tutorial 8</option>
                            <option value="T9">Tutorial 9</option>
                            <option value="T10">Tutorial 10</option>
                            <option value="T11">Tutorial 11</option>
                            <option value="T12">Tutorial 12</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Class Day</label>
                        </div>
                        <div class="col-md-4">
                          <select name="classday" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required> 
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                          </select>
                        </div>
                      </div>    
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Class Date</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="classdate" class="form-control" value="<?php echo $row[6]; ?>" required> 
                        </div>
                      </div> 
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Start Time</label>
                        </div>
                        <div class="col-md-2"> 
                          <input type="time" name="starttime" class="form-control"  value="<?php echo $row[7]; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">End Time</label>
                        </div>
                        <div class="col-md-2">
                          <input type="time" name="endtime" class="form-control"  value="<?php echo $row[8]; ?>" required>
                        </div>
                      </div>    
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="">Location</label>
                        </div>
                        <div class="col-md-2">
                          <?php
                            $query1 = "SELECT * FROM geolocation";
                            $result1 = mysqli_query($mysqli, $query1);
                          ?>
                          <select name="locationid" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>                            
                              <?php while($row1 = mysqli_fetch_array($result1)):;?>
                              <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1];?></option>
                              <?php endwhile;?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="main-footer" style="background-color: black; color:white;">
      <strong>FCSIT ATTENDANCE &copy; 2021 </strong>
      FYP 1.
      <div class="float-right d-none d-sm-inline-block">
        <b>University of Malaya</b>
      </div>
    </footer>
    <script src="../plugins/jquery/jquery.min.js"></script> 
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script> 
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> 
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> 
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> 
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> 
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> 
    <script src="../plugins/jszip/jszip.min.js"></script> 
    <script src="../plugins/pdfmake/pdfmake.min.js"></script> 
    <script src="../plugins/pdfmake/vfs_fonts.js"></script> 
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script> 
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script> 
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> 
    <script src="../dist/js/adminlte.min.js"></script> 
    <script src="../dist/js/demo.js"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> 
  </body>
</html>