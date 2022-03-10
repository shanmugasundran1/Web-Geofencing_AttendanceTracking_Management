<?php
error_reporting(0);
include("../session.php");
include('../config.php');
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
              <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">Key In Course Data</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="attendance_select_course.php">Attendance</a></li>
                <li class="breadcrumb-item">Key In Course Data</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2">
                    <button onclick="location.href='insertcourse.php'" type="submit" name="submit" class="btn btn-primary">Insert New Course</button>
                  </div>
                  <form action="importcourse.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-7">
                        <input type="file" name="file"> 
                      </div>
                      <div class="col-md-3">                    
                        <input type="submit" class="btn btn-success" name="import" value="IMPORT">
                      </div>
                    </div>
                  </form> 
                </div>
              </div>                                                             
              <br>
              <div class="card border border-dark" style="border-radius: 10px;">
                <div class="card-body">
                  <table id="example1" class="table table-striped" style="background: white; color:black;">
                    <thead class="thead-dark">
                      <tr>
                        <th>ID</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Class Detail</th>
                        <th>Class Day</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Location</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      // Get member rows
                      $query = "SELECT * FROM course ORDER BY courseid ASC";
                      $result = mysqli_query($mysqli, $query);
                          while($row = mysqli_fetch_array($result)){
                    ?>
                      <tr>
                        <td><?php echo $row['courseid']; ?></td>
                        <td><?php echo $row['CourseCode']; ?></td>
                        <td><?php echo $row['CourseName']; ?></td>
                        <td><?php echo $row['ClassDetail']; ?></td>
                        <td><?php echo $row['ClassDay']; ?></td>
                        <td><?php echo $row['StartTime']; ?></td>
                        <td><?php echo $row['EndTime']; ?></td>
                        <?php 
                        $geoid = $row['location_ID'];
                        $search = mysqli_query($mysqli, "SELECT * FROM geolocation WHERE location_ID = '$geoid'");
                        $getname = mysqli_fetch_array($search); ?>
                        <td><?php echo $getname['location_name']; ?></td>
                        <td>
                          <a href="editcourse.php?id=<?php echo $row['courseid']; ?>" class="badge badge-success">Edit</a>
                          <a onClick="javascript: return confirm('Are you sure want to delete this course?');" href="deletecourse.php?id=<?php echo $row['courseid']; ?>" class="badge badge-danger">Delete</a>
                        </td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
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
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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