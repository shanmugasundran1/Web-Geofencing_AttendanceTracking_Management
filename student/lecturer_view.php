<?php
error_reporting(0);
include '../session.php';
include '../config.php';

include 'lecturer_get_profileInfo.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lecturer Profile | E-Attendance@UM</title>
  <link rel="icon" href="../sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php include 'header_student.php'; ?>

  <div class="content-wrapper">

    <section class="content-header card bg-dark rounded-0">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">LECTURER PROFILE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lecturer_browse.php">Lecturers</a></li>
              <li class="breadcrumb-item">Lecturer Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-3">
            <div class="card card-primary border border-dark">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-thumbnail" src="../lecturer/lecturer_profile/<?php echo $profile_pic_lecturer; ?>" onerror="this.src='student_profile/default.png'" />
                </div>
                <br>
                <h3 class="profile-username text-center"><?php echo $acc_fullname; ?></h3>
                <p class="text-active text-center"><?php echo $acc_uname; ?></p>
              </div>
            </div>

            <div class="card card-primary border border-dark">
              <div class="card-header" style="background: black; color:white;">
                <h3 class="card-title">About Me</h3>
              </div>
              <div class="card-body"> <strong><i class="fas fa-book mr-1"></i>Department</strong>
                <p class="text-active"><?php echo $department; ?></p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i>Notes</strong>
                <p class="text-active"><?php echo $notes; ?></p>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="card  border border-dark">

              <div class="card-header p-2" style="background: black; color:white;">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Details</a></li>
                </ul>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card card-primary">
                      <div class="card-header text-white bg-primary mb-3">
                        <h6 class="card-title text-white">Lecturer Details</h6>
                      </div>
                      <div class="card-body"> <strong><i class="fas fa-map-marker-alt mr-1"></i>Siswamail</strong>
                        <p class="text-active"><?php echo $acc_email; ?></p>
                        <hr>
                        <div class="row">
                          <div class="col"> <strong><i class="fas fa-book mr-1"></i>Mobile</strong>
                            <p class="text-active"><?php echo $mobile; ?></p>
                          </div>
                          <hr>
                          <div class="col"> <strong><i class="far fa-file-alt mr-1"></i>Office Phone</strong>
                            <p class="text-active"><?php echo $mobile_office; ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col"> <strong><i class="fas fa-map-marker-alt mr-1"></i>Location</strong>
                            <p class="text-active"><?php echo $location; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../plugins/sparklines/sparkline.js"></script>
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../dist/js/adminlte.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>