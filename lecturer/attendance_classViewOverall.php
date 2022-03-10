<?php
error_reporting(0);
include '../session.php';
include '../config.php';

include 'attendance_get_classViewOverall_Info.php';

$sqlav = "SELECT DISTINCT week FROM attendance_data WHERE course_id = '$course_id'";
$resultav = mysqli_query($mysqli, $sqlav);
$total = 0;
if (mysqli_num_rows($resultav) > 0) {
  while ($row = mysqli_fetch_array($resultav)) {
    $total = $total + 1;
  }
}

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
      color: black;
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
              <li class="breadcrumb-item"><a href="attendance_select_course.php">Attendance</a></li>
              <li class="breadcrumb-item">Overall</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col">
          <div class="card border border-dark" style="height : 200px;">
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
                    <th style="width: 10%"> Code</th>
                    <th style="width: 20%"> Course </th>
                    <th style="width: 10%"> Occurence </th>
                    <th style="width: 10%"> Week </th>
                    <th style="width: 10%"> Capacity </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $course_code; ?></td>
                    <td><b><?php echo $course_name; ?><b></td>
                    <td><i><?php echo $course_occurence; ?><i></td>
                    <td> Week <i><?php echo $weekcount ?><i></td>
                    <td><?php echo $headcount ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card border border-dark bg-warning" style="height : 200px;">
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
                    <td><a class="btn btn-danger" href="absence.php?course_id=<?php echo $course_id ?>">Absence Management</a></td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Attendance Track <i class="fas fa-arrow-circle-down"></i></button>

                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="attendance_classViewOverall.php?course_id=<?php echo $course_id ?>" class="btn btn-secondary" title="Click to View More">Overall</a>
                        <?php
                        include 'attendance_get_selectCourseInfo.php';
                        for ($attendance_week = 1; $attendance_week <= $total; $attendance_week++) {
                          echo '<a class="dropdown-item" href="attendance_classView.php?course_id=' . $course_id . '&weekcount=' . $attendance_week . '" class="btn btn-secondary" title="Click to View More">Week ' . $attendance_week . '</a>';
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
          <div class="col-12">

            <div class="card border border-dark">
              <div class="card-body">
                <table id="example1" class="table table-bordered border border-dark" cellspacing="0" cellpadding="0">

                  <thead class="thead-dark">
                    <tr>
                      <th style="width: 10%"></th>
                      <th style="width: 10%">Student</th>
                      <?php for ($colCount = 1; $colCount <= 14; $colCount++) {
                        echo '<th style="width: 10%; text-align:center" >' . $colCount . '</th>';
                      }
                      ?>
                      <th style="width: 10%; text-align:center">List</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $sqlsc = "SELECT * FROM student_course WHERE subject_id = '$course_id' ";
                    $resultsc = mysqli_query($mysqli, $sqlsc);

                    if (mysqli_num_rows($resultsc) > 0) {
                      while ($row = mysqli_fetch_array($resultsc)) {
                        $acc_uname = $row["acc_uname"];
                    ?>


                        <tr>
                          <?php
                          $sqlts = "SELECT * FROM student_profile WHERE acc_uname = '$acc_uname' ";
                          $resultts = mysqli_query($mysqli, $sqlts);

                          if (mysqli_num_rows($resultts) > 0) {
                            while ($row = mysqli_fetch_array($resultts)) {
                              $profile_pic = $row["profile_pic"];
                              $acc_fullname = $row["acc_fullname"];
                              $acc_email = $row["acc_email"];
                              $course = $row["course"];
                              $year_study = $row["year_study"];
                          ?>
                          <?php }
                          } ?>


                          <td><img class="img-thumbnail" src="../student/student_profile/<?php echo $profile_pic; ?>" alt="User profile picture" /></td>
                          <td><?php echo strtoupper($acc_uname); ?><br><?php echo $acc_fullname; ?></td>

                          <?php
                          for ($sWeek = 1; $sWeek <= $total; $sWeek++) {

                            $sql = "SELECT * FROM attendance_data WHERE course_id = '$course_id' AND student_uname = '$acc_uname' AND week = '$sWeek'";
                            $result = mysqli_query($mysqli, $sql);

                            if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_array($result)) {

                                $attendance_id = $row['attendance_id'];
                                $course_id = $row['course_id'];
                                $student_uname = $row['student_uname'];
                                $lecturer_uname = $row['lecturer_uname'];
                                $date = $row['date'];
                                $week = $row['week'];
                                $attendance_status = $row['attendance_status'];
                                $absence_category = $row['absence_category'];
                                $absence_reason = $row['absence_reason'];
                                $absence_doc = $row['absence_doc'];
                                $absence_submit = $row['absence_submit'];
                                $absence_status = $row['absence_status'];
                              }
                            }

                            if ($attendance_status == 1 || $attendance_status == 2) {
                              echo '<td><i class="fas fa-check" style="color:green"></i></td>';
                            } elseif ($attendance_status == 0) {
                              echo '<td><i class="fas fa-times"  style="color:red"></i></td>';
                            }
                          }

                          for ($sWeek = $total + 1; $sWeek <= 14; $sWeek++) {
                            echo '<td> - </td>';
                          }
                          ?>


                          <td class="project-actions text-center"><a class="btn btn-primary btn-sm" href="attendance_studentView.php?course_id=<?php echo $course_id; ?>&student_uname=<?php echo $student_uname; ?>"> <i class="fas fa-folder"> </i> View </a></td>
                        </tr>
                      <?php
                      }
                      ?>
                  </tbody>
                </table>
              <?php
                    } else {
                      echo '0 results';
                    }
              ?>
              </div>
            </div>
          </div>
        </div>
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
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
  });
</script>

</html>