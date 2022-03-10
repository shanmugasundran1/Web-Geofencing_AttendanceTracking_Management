<?php
error_reporting(0);
include '../session.php';
include '../config.php';
/* include 'analysis_get_chart.php'; */
include 'analysis_get_viewCourse.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Absence | E-Attendance@UM</title>
  <link rel="icon" href="../sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/uplot/uPlot.min.css">

  <style>
    td.max-width-50 {
      max-width: 300px;
      max-height: 50px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      color: black;
    }

    .scroll {
      max-height: 300px;
      overflow-y: auto;
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
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;"><?php echo strtoupper($course_name); ?> - <?php echo strtoupper($course_occurence); ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="analysis_select_course.php">Analysis</a></li>
              <li class="breadcrumb-item">Analysis View</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col">
          <div class="card border border-dark" style="height : 180px;">
            <div class="card-header" style="background-color:black; color:white;">
              <h3 class="card-title">Class Detail</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
              </div>
            </div>
            <div class="card-body p-0 bg-primary">
              <table class="table projects">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 5%"> Code </th>
                    <th style="width: 20%"> Course</th>
                    <th style="width: 5%"> Occurence </th>
                    <th style="width: 5%; text-align:center"> Day </th>
                    <th style="width: 20%; text-align:center"> Time </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $course_code; ?></td>
                    <td><b><?php echo $course_name; ?><b></td>
                    <td><i><?php echo $course_occurence; ?><i></td>
                    <td><b><?php echo $course_day; ?><b></td>
                    <td><b><?php echo $start_time; ?> - <?php echo $end_time; ?><b></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card border border-dark bg-warning" style="height : 180px;">
            <div class="card-header" style="background-color:black; color:white;">
              <h3 class="card-title">Action</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table projects table-borderless">
                <tbody>
                  <tr>
                    <td><a class="btn btn-success" href="analysis_collection.php?course_id=<?php echo $course_id ?>">Analysis Update</a></td>
                    <td><a class="btn btn-danger" href="absence.php?course_id=<?php echo $course_id ?>">Absence Management</a></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Attendance Track <i class="fas fa-arrow-circle-down"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="attendance_classViewOverall.php?course_id=<?php echo $course_id ?>" class="btn btn-secondary" title="Click to View More">Overall</a>
                        <?php
                        include 'analysis_get_selectCourseInfo.php';
                        for ($weekcount = 1; $weekcount <= $total; $weekcount++) {
                          echo '<a class="dropdown-item" href="attendance_classView.php?course_id=' . $course_id . '&weekcount=' . $weekcount . '" class="btn btn-secondary" title="Click to View More">Week ' . $weekcount . '</a>';
                        }
                        ?>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="content">

      <div class="container-fluid">
        <div class="row">

          <div class="col-7">

            <div class="row">

              <div class="col">
                Select Graph Type :
              </div>

              <div class="col">
                <select id="chartType" class="form-control-sm bg-dark" style="width: 90%; border:1px black solid; border-radius: 5px; margin-bottom: 5px">
                  <option>spline</option>
                  <option>line</option>
                </select>
              </div>

            </div>


            <div id="chartContainer" style="height: 500px; width: 95%; border:2px black solid"></div>
            <br>

            <?php include 'analysis_get_graphAnalysis.php'; ?>

            <div class="card text-white bg-dark mb-1 rounded" style="max-width: 36.5rem;">

              <?php if ($finaloutcome == 'Upward') { ?>
                <div class="card-header bg-success text-white text-bold border border-primary">Good Attendance</div>
              <?php } elseif ($finaloutcome == 'Downward') {
              ?>
                <div class="card-header bg-warning text-bold border border-warning">WARNING&nbsp;<i class="fa fa-exclamation-triangle" style="color:red" aria-hidden="true"></i></div>
              <?php } ?>

              <div class="card-body">
                <p class="card-text">The overall trend of the attendance graph is <b><?php echo $finaloutcome; ?></b>.</p>
                <?php if ($weekcounter != 0) { ?>
                  <p class="card-text ">Attendance rate is predicted to reach 50% total capacity on Week <?php echo $weekcounter; ?>.</p>
                <?php } elseif ($weekcounter == 0) { ?>
                  <p class="card-text ">However, the attendance rate is predicted to remain above 50% capacity for every week.</p>
                <?php } ?>
              </div>
            </div>
          </div>

          <div class="col-5">
            <!-- ================================================================================================================= -->
            <div class="row">
              <div class="card border border-dark">
                <div style="background-color:green; height:40px">
                  <h6 style="font-family:Helvetica; font-weight:bold; color:white; padding-top:10px; padding-left:20px;">Good Attendance
                    <span>
                      <button type="button" class="btn btn-tool" data-toggle="modal" data-target=".bd-example-modal-lgGood"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                        </svg></button>
                    </span>
                  </h6>
                </div>
                <div class="card-body scroll">
                  <table id="example1" class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead class="thead-dark">
                      <tr>
                        <th style="width: 10%">Matric ID</th>
                        <th style="width: 30%">Student Name</th>
                        <th style="width: 30%">Rate</th>
                        <th style="width: 20%">View</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT DISTINCT student_uname FROM attendance_data WHERE course_id = '$course_id'";
                      $result = mysqli_query($mysqli, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                          $student_uname = $row['student_uname'];

                          include 'analysis_get_goodAttendance.php';
                      ?>

                          <?php
                          $percentage_attended = ($count / $total) * 100;
                          $percentage_absent = (1 - ($count / $total)) * 100;

                          if ($percentage_attended >= 60) {

                          ?>
                            <tr>
                              <td>
                                <?php echo strtoupper($student_uname); ?>
                              </td>

                              <td>
                                <?php echo $acc_fullname; ?>
                              </td>

                              <td class="project_progress">
                                <div class="progress progress-sm">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percentage_attended ?>%" aria-valuenow="<?php echo $percentage_attended ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $percentage_absent ?>%" aria-valuenow="<?php echo $percentage_absent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small> <?php echo $count; ?> / <?php echo $total; ?> </small>
                              </td>

                              <td class="project-actions text-center"><a class="btn btn-primary btn-sm" href="attendance_studentView.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>"> <i class="fas fa-folder"></i>View</a></td>

                            <?php
                          }
                            ?>
                            </tr>
                        <?php
                        }
                      } else {
                      }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- ================================================================================================================= -->
            <div class="row">
              <div class="card border border-dark">
                <div style="background-color:red; height:40px">
                  <h6 style="font-family:Helvetica; font-weight:bold; color:white; padding-top:10px; padding-left:20px;">Poor Attendance
                    <span>
                      <button type="button" class="btn btn-tool" data-toggle="modal" data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                        </svg></button>
                    </span>
                  </h6>
                </div>
                <div class="card-body scroll">
                  <table id="example3" class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead class="thead-dark">
                      <tr>
                        <th style="width: 10%">Matric ID</th>
                        <th style="width: 30%">Student Name</th>
                        <th style="width: 30%">Rate</th>
                        <th style="width: 20%">View</th>
                        <th style="width: 20%">Warning</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT DISTINCT student_uname FROM attendance_data WHERE course_id = '$course_id'";
                      $result = mysqli_query($mysqli, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                          $student_uname = $row['student_uname'];

                          include 'analysis_get_poorAttendance.php';
                      ?>

                          <?php
                          $percentage_attended = ($count / $total) * 100;
                          $percentage_absent = (1 - ($count / $total)) * 100;

                          if ($percentage_attended < 60) {

                          ?>
                            <tr>
                              <td>
                                <?php echo strtoupper($student_uname); ?>
                              </td>

                              <td>
                                <?php echo $acc_fullname; ?>
                              </td>

                              <td class="project_progress">
                                <div class="progress progress-sm">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percentage_attended ?>%" aria-valuenow="<?php echo $percentage_attended ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $percentage_absent ?>%" aria-valuenow="<?php echo $percentage_absent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small> <?php echo $count; ?> / <?php echo $total; ?> </small>
                              </td>

                              <td class="project-actions text-center"><a class="btn btn-primary btn-sm" href="attendance_studentView.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>"> <i class=""></i>View</a></td>

                              <td class="project-actions text-center"><a onClick="javascript: return confirm('Are you sure want to send this warning?');" class="btn btn-warning btn-sm" href="analysis_warning.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>&lecturer_uname=<?php echo $loggedin_session; ?>&percentage_attended=<?php echo $percentage_attended; ?>&count=<?php echo $count; ?>&total=<?php echo $total; ?>"><i class=""></i>Send</a></td>

                            <?php
                          }
                            ?>
                            </tr>

                        <?php
                        }
                      } else {
                      }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- ================================================================================================================= -->
          </div>

        </div>
      </div>

      <!-- ================================================================================================================= -->

      <div class="modal fade bd-example-modal-lgGood" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: green">
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Good Attendance</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="card-body scroll">
              <table id="example5" class="table table-striped" cellspacing="0" cellpadding="0">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 10%">Matric ID</th>
                    <th style="width: 30%">Student Name</th>
                    <th style="width: 30%">Rate</th>
                    <th style="width: 20%">View</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT DISTINCT student_uname FROM attendance_data WHERE course_id = '$course_id'";
                  $result = mysqli_query($mysqli, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                      $student_uname = $row['student_uname'];

                      include 'analysis_get_goodAttendance.php';
                  ?>

                      <?php
                      $percentage_attended = ($count / $total) * 100;
                      $percentage_absent = (1 - ($count / $total)) * 100;

                      if ($percentage_attended >= 60) {

                      ?>
                        <tr>
                          <td>
                            <?php echo strtoupper($student_uname); ?>
                          </td>

                          <td>
                            <?php echo $acc_fullname; ?>
                          </td>

                          <td class="project_progress">
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percentage_attended ?>%" aria-valuenow="<?php echo $percentage_attended ?>" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $percentage_absent ?>%" aria-valuenow="<?php echo $percentage_absent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small> <?php echo $count; ?> / <?php echo $total; ?> </small>
                          </td>

                          <td class="project-actions text-center"><a class="btn btn-primary btn-sm" href="attendance_studentView.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>"> <i class="fas fa-folder"></i>View</a></td>

                        <?php
                      }
                        ?>
                        </tr>
                    <?php
                    }
                  } else {
                  }
                    ?>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <!-- ================================================================================================================= -->

      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: red">
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Poor Attendance</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="card-body scroll">
              <table id="example7" class="table table-striped" cellspacing="0" cellpadding="0">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 10%">Matric ID</th>
                    <th style="width: 30%">Student Name</th>
                    <th style="width: 30%">Rate</th>
                    <th style="width: 20%">View</th>
                    <th style="width: 20%">Warning</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT DISTINCT student_uname FROM attendance_data WHERE course_id = '$course_id'";
                  $result = mysqli_query($mysqli, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                      $student_uname = $row['student_uname'];

                      include 'analysis_get_poorAttendance.php';
                  ?>

                      <?php
                      $percentage_attended = ($count / $total) * 100;
                      $percentage_absent = (1 - ($count / $total)) * 100;

                      if ($percentage_attended < 60) {

                      ?>
                        <tr>
                          <td>
                            <?php echo strtoupper($student_uname); ?>
                          </td>

                          <td>
                            <?php echo $acc_fullname; ?>
                          </td>

                          <td class="project_progress">
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percentage_attended ?>%" aria-valuenow="<?php echo $percentage_attended ?>" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $percentage_absent ?>%" aria-valuenow="<?php echo $percentage_absent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small> <?php echo $count; ?> / <?php echo $total; ?> </small>
                          </td>

                          <td class="project-actions text-center"><a class="btn btn-primary btn-sm" href="attendance_studentView.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>"> <i class=""></i>View</a></td>

                          <td class="project-actions text-center"><a onClick="javascript: return confirm('Are you sure want to send this warning?');" class="btn btn-warning btn-sm" href="analysis_warning.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>&lecturer_uname=<?php echo $loggedin_session; ?>&percentage_attended=<?php echo $percentage_attended; ?>&count=<?php echo $count; ?>&total=<?php echo $total; ?>"><i class=""></i>Send</a></td>

                        <?php
                      }
                        ?>
                        </tr>

                    <?php
                    }
                  } else {
                  }
                    ?>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================================================================================= -->
    </section>

  </div>
</body>

<footer class="main-footer" style="background-color: black; color:white;"> <strong>FCSIT ATTENDANCE &copy; 2021 </strong> FYP 1.
  <div class="float-right d-none d-sm-inline-block"> <b>University of Malaya</b> </div>
</footer>

<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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

<script>
  $(function() {
    $("#example3").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $('#example4').DataTable({
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

<script>
  $(function() {
    $("#example5").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

    }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');
    $('#example6').DataTable({
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

<script>
  $(function() {
    $("#example7").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

    }).buttons().container().appendTo('#example7_wrapper .col-md-6:eq(0)');
    $('#example8').DataTable({
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


<?php
$keyweek = $total + 1;
$dataPoints = array();
try {

  $link = new \PDO(
    "mysql:host=localhost;dbname=attendanceum;charset=utf8mb4",
    "root",
    "",
    array(
      \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      \PDO::ATTR_PERSISTENT => false
    )
  );

  $handle = $link->prepare("Select week, attendance_count from analysis_data where course_id = '$course_id'");
  $handle->execute();
  $result = $handle->fetchAll(\PDO::FETCH_OBJ);

  foreach ($result as $row) {
    array_push($dataPoints, array("x" => $row->week, "y" => $row->attendance_count));
  }
  $link = null;
} catch (\PDOException $ex) {
  print($ex->getMessage());
}

?>

<?php
$dataPrediction = array();
try {

  $link = new \PDO(
    "mysql:host=localhost;dbname=attendanceum;charset=utf8mb4",
    "root",
    "",
    array(
      \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      \PDO::ATTR_PERSISTENT => false
    )
  );

  $handle = $link->prepare("Select week, attendance_count from analysis_data where course_id = '$course_id' and week > '$total'");
  $handle->execute();
  $result = $handle->fetchAll(\PDO::FETCH_OBJ);

  foreach ($result as $row) {
    array_push($dataPrediction, array("x" => $row->week, "y" => $row->attendance_count));
  }
  $link = null;
} catch (\PDOException $ex) {
  print($ex->getMessage());
}

?>

<script>
  var chart;
  chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    axisX: {
      interval: 1,
      title: "Week",
    },
    axisY: {
      minimum: 0,
      title: "Attendance Count",
    },
    title: {
      text: "ATTENDANCE GRAPH",
    },
    legend: {
      cursor: "pointer",
      verticalAlign: "top",
      horizontalAlign: "center",
      dockInsidePlotArea: true,
    },
    data: [{
        type: "spline",
        showInLegend: true,
        name: "Recorded",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      },
      {
        type: "spline",
        showInLegend: true,
        name: "Predicted",
        dataPoints: <?php echo json_encode($dataPrediction, JSON_NUMERIC_CHECK); ?>
      },
    ]
  });
  chart.render();

  $("#chartType").change(function() {
    var selectedChartType = $("#chartType option:selected").text();
    chart.options.data[0].type = selectedChartType;
    chart.options.title.text = "ATTENDANCE GRAPH";
    chart.render();
  })
</script>

</html>