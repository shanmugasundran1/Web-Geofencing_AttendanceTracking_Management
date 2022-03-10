<?php
error_reporting(0);
include '../session.php';
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notification | E-Attendance@UM</title>
  <link rel="icon" href="../sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    td.max-width-50 {
      max-width: 250px;
      max-height: 50px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      color: white;
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
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">Notification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Notification</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card border border-secondary">
              <div class="card-body">
                <a class="btn btn-primary" href="notification_add.php"><i class="fas fa-pen-alt"></i>&nbsp;&nbsp;New Notification</a>
                <br>
                <br>
                <table id="example1" class="table table-striped table-sm" cellspacing="0" cellpadding="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Course and Occurence</th>
                            <th>Week</th>
                            <th>New Class Date</th>
                            <th>New Start Time</th>
                            <th>New End Time</th>
                            <th>New Location</th>
                            <th>Messages</th>
                            <th>Accepted</th>
                            <th>Rejected</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Get member rows
                        $result = mysqli_query($mysqli, "SELECT * FROM class_notification WHERE lecturer_id = '$loggedin_id' ORDER BY courseid ASC");
                            while($row = mysqli_fetch_array($result)){
                        ?> 
                        <tr>
                            <td><?php echo $row['CourseCode']; ?>&nbsp<?php echo $row['ClassDetail']; ?></td>
                            <td><?php echo $row['week']; ?></td>
                            <td><?php echo $row['classdate']; ?></td>
                            <td><?php echo $row['starttime']; ?></td>
                            <td><?php echo $row['endtime']; ?></td>
                            <td><?php echo $row['locationname']; ?></td>
                            <td><?php echo $row['addmessage']; ?></td>
                            <?php 
                            $courseid = $row['courseid'];
                            $resultcount = mysqli_query($mysqli, "SELECT * FROM class_notification LEFT JOIN student_course ON class_notification.courseid = student_course.subject_id WHERE subject_id = '$courseid'");
                            $headcount = 0;
                            $acccount = 0;
                            $rejcount = 0;
                            if (mysqli_num_rows($resultcount) > 0) {
                              while ($row1 = mysqli_fetch_array($resultcount)) {
                                $headcount = $headcount + 1;
                              }
                            }
                            else{
                              $headcount = 0;
                            }
                            $resultres = mysqli_query($mysqli, "SELECT * FROM response WHERE courseid = '$courseid'");
                            if (mysqli_num_rows($resultres) > 0) {
                              while ($row2 = mysqli_fetch_array($resultres)) {
                                if ($row2['status'] == 1) {
                                  $acccount = $acccount + 1;
                                }
                                else {
                                  $rejcount = $rejcount + 1;
                                }
                              }
                            }
                            else{
                              $acccount = 0;
                              $rejcount = 0;
                            }
                             ?>
                            <td><?php echo $acccount; ?> / <?php echo $headcount; ?></td>
                            <td><?php echo $rejcount; ?> / <?php echo $headcount; ?></td>
                            <td>
                              <a href="notification_view.php?id=<?php echo $row['courseid']; ?>" class="btn btn-info">View</a>
                            </td>
                        </tr>
                        <?php
                        }
                      ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>

<footer class="main-footer" style="background-color: black; color:white;"> <strong>FCSIT ATTENDANCE &copy; 2021 </strong> FYP 1.
  <div class="float-right d-none d-sm-inline-block"> <b>University of Malaya</b> </div>
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
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>