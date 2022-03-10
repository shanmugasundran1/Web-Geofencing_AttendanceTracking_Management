<?php
error_reporting(0);
include '../session.php';
include '../config.php';

$subjectid = $_GET['id'];
$lecturerid = $loggedin_id;
$results = mysqli_query($mysqli, "SELECT * FROM class_notification WHERE courseid = '$subjectid' AND lecturer_id = '$lecturerid'");
$rows = mysqli_fetch_array($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Notification | E-Attendance@UM</title>
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
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">View <?php echo $rows['CourseCode']; ?>&nbsp<?php echo $rows['ClassDetail']; ?> Notification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Notification</li>
                <li class="breadcrumb-item active">View Notifications</li>
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
                <table id="example1" class="table table-striped table-sm" cellspacing="0" cellpadding="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Student Username</th>
                            <th>Student Name</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Files</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Get member rows
                        $courseid = $_GET['id'];
                        $result = mysqli_query($mysqli, "SELECT * FROM response WHERE courseid = '$courseid' ORDER BY courseid ASC");
                            while($row = mysqli_fetch_array($result)){
                        ?> 
                        <tr>
                            <td><?php echo $row['student_uname']; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php
                             if ($row['status'] == 1){
                                echo "Accepted";
                             } else {
                                echo "Rejected";
                             } ?>
                            </td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['files']; ?></td>
                            <td><?php if ($row['status'] == 0){ ?>
                              <a href="notification_view_reason.php?id=<?php echo $row['student_id']; ?>" class="btn btn-primary">Reason</a>
                              <?php } else {
                                echo '';
                              } ?>
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