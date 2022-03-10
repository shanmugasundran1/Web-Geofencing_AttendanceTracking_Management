<?php
error_reporting(0);
include("../session.php");
include('../config.php');
$course_check = $_REQUEST['course_code'];
$course_occurenceCheck = $_REQUEST['course_occurence'];
include 'feedback_get_chartInfo.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Feedbacks | E-Attendance@UM</title>
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
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: yellow;
      color: black;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <?php
  include("header_lecturer.php");
  ?>
  <div class="content-wrapper">
    <section class="content-header card bg-dark rounded-0">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">FEEDBACK LIST</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="feedback_select_course.php">Feedback</a></li>
              <li class="breadcrumb-item">Feedback List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="card border border-dark" style="background: white; color:black; border-radius: 25px;">
          <div class="card-body">
            <table id="example1" class="table table-striped" cellspacing="0" cellpadding="0">
              <thead class="thead-dark">
                <tr>
                  <th>Rating</th>
                  <th>Course</th>
                  <th>Occurence</th>
                  <th>Feedback</th>
                  <th>Date</th>
                  <th>View</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php


                $sql = "SELECT * FROM feedback where lecturer_uname ='$loggedin_session' and course_code='$course_check' and course_occurence='$course_occurenceCheck'";
                $result = mysqli_query($mysqli, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {

                    $feedback_id = $row['id'];
                    $lecturer_name = $row['lecturer_name'];
                    $course_code = $row['course_code'];
                    $course_name = $row['course_name'];
                    $course_occurence = $row['course_occurence'];
                    $rating = $row['rating'];
                    $subject = $row['subject'];
                    $feedback = $row['feedback'];
                    $date = $row['date'];
                ?>
                    <tr>
                      <td><?php
                          for ($count = 0; $count < $rating; $count++) {
                            echo "<i class=\"fas fa-star text-warning\"></i>";
                          }
                          ?></td>
                      <td><b><?php echo $course_code; ?></b> - <?php echo $course_name; ?></td>
                      <td><?php echo $course_occurence; ?></td>
                      <td class="max-width-50"><b><?php echo $subject; ?></b> - <?php echo $feedback; ?></td>
                      <td><?php echo $date; ?></td>
                      <td align-items="center" style="width: 10%"><a href="feedback_view.php?feedback_id=<?php echo $feedback_id; ?>" class="btn btn-primary" style="color:white;font-weight:bold;">View</a></td>
                      <td align-items="center" style="width: 10%"><a onClick="javascript: return confirm('Are you sure want to delete this feedback?');" href="feedback_delete.php?feedback_id=<?php echo $feedback_id; ?>&course_code=<?php echo $course_code; ?>&course_occurence=<?php echo $course_occurence; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php
                  }
                } else {
                  echo '';
                }
                ?>
              </tbody>
            </table>

          </div>
        </div>
        <div class="card card-primary border border-dark">
          <div class="card-header">
            <h3 class="card-title">Feedback Statistics</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="barChart" style="max-width: 100%;"></canvas>
          </div>
        </div>
        <canvas id="areaChart"></canvas>
      </div>
    </section>

  </div>
</body>

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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
<?php include 'feedback_show_chartInfo.php'; ?>

</html>