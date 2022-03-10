<?php
error_reporting(0);
include('../session.php');
include('../config.php');
?>

<?php include 'profile_get_accessInfo.php'; ?>
<?php include 'profile_get_profileInfo.php'; ?>
<?php include 'visa_getInfo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Profile | E-Attendance@UM</title>
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
  <link rel="stylesheet" href="../src/css/bootstrap.css" />
  <script src="../src/js/jquery-3.3.1.min.js"></script>
  <script src="../src/js/bootstrap.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php include 'header_student.php'; ?>
  <div class="content-wrapper">
    <section class="content-header card bg-dark rounded-0">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">MY VISA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="visa_home.php">Visa</a></li>
              <li class="breadcrumb-item">My Visa</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-primary border border-secondary">
              <div class="card-header p-3" style="background:black; color:white;">
                <h3 class="card-title">Profile Picture</h3>
              </div>
              <div class="card-body box-profile" style="">
                <div class="text-center"><img class="img-thumbnail" src="student_profile/<?php echo $profile_pic; ?>" alt="User profile picture" /></div>
                <br>
                <h3 class="profile-username text-center"><?php echo $acc_fullname; ?></h3>
                <p class="text-center"><?php echo strtoupper($loggedin_session); ?></p>
              </div>
            </div>

            <div class="card card-primary border border-secondary">
              <div class="card-header p-3 bg-primary">
                <h3 class="card-title">Application Status</h3>
              </div>
              <div class="card-body text-center">
                <?php
                if ($approval_status == 1) {
                  echo '<button class="btn btn-success" style=" pointer-events: none; text-align: center;">Approved</button>';
                } elseif ($approval_status == 2) {
                  echo '<button class="btn btn-danger" style=" pointer-events: none;">Rejected</button>';
                } elseif ($approval_status == 0) {
                  echo '<button class="btn btn-warning" style=" pointer-events: none;">Pending</button>';
                }
                ?>
              </div>
            </div>


            <div class="card card-primary border border-secondary">
              <div class="card-header p-3" style="background: black; color:white;">
                <h3 class="card-title">About Me</h3>
              </div>
              <div class="card-body"> <strong><i class="fas fa-book mr-1"></i>Course</strong>
                <p class="text-active text-right"><?php echo $course; ?></p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Year of Study</strong>
                <p class="text-active text-right"><?php echo $year_study; ?></p>
              </div>
            </div>


            <?php include 'attendance_get_average.php'; ?>
            <div class="card card-success border border-secondary">
              <div class="card-header p-3">
                <h3 class="card-title">Current Attendance</h3>
              </div>
              <div class="card-body">
                <h5 class="text-active text-center text-blue">
                  <button class="btn btn-primary" style=" pointer-events: none;">Average: <?php echo round((($countavg / $totalavg) * 100), 0); ?>%</button>
                </h5>
                <?php
                $sqlcourse = "SELECT * FROM student_course where acc_uname ='$loggedin_session' ORDER BY CourseCode ASC";
                $resultcourse = mysqli_query($mysqli, $sqlcourse);
                ?>
                <div class="card-body p-1">
                  <table class="table table-striped table-sm">
                    <tbody>
                      <?php
                      if (mysqli_num_rows($resultcourse) > 0) {
                        while ($row = mysqli_fetch_array($resultcourse)) {
                          $course_id = $row['subject_id'];
                          $course_code = $row['CourseCode'];
                          $course_occurence = $row['ClassDetail'];
                          include 'attendance_get_listInfo.php';
                      ?>
                          <tr>
                            <td><b><?php echo $course_code; ?><b></td>
                            <td><?php echo $course_occurence; ?></td>
                            <td class="project_progress">
                              <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo ($count / $total) * 100; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($count / $total) * 100; ?>%"> </div>
                              </div>
                              <small><?php echo $count; ?> / <?php echo $total; ?> </small>
                            </td>
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

          <!--=====================================================================================================================================-->

          <div class="col-md-9">
            <div class="card border border-secondary">
              <div class="card-header p-2" style="background: black; color:white;">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab" style="color:white">Profile</a></li>
                  <?php
                  if (is_null($matric_id)) {
                    echo '<li class="nav-item"><a class="nav-link" href="#register" data-toggle="tab" style="color:white">Apply</a></li>';
                  } 
				  else if (!(is_null($matric_id))){
                    echo
					'<li class="nav-item"><a class="nav-link" href="#details" data-toggle="tab" style="color:white">Application Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="#passport" data-toggle="tab" style="color:white">Passport</a></li>
                    <li class="nav-item"><a class="nav-link" href="#transcript" data-toggle="tab" style="color:white">Academic Transcript</a></li>';
                  }
                  ?>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card card-primary">
                      <div class="card-header text-white bg-dark mb-3">
                        <h6 class="card-title text-white">Student Details</h6>
                      </div>
                      <div class="card-body"> <strong><i class="fas fa-book mr-1"></i>Mobile</strong>
                        <p class="text-active"><?php echo $mobile; ?></p>
                        <hr>
                        <div class="row">
                          <div class="col"> <strong><i class="fas fa-map-marker-alt mr-1"></i>Siswamail</strong>
                            <p class="text-active"><?php echo $acc_email; ?></p>
                          </div>
                          <hr>
                          <div class="col"> <strong><i class="far fa-file-alt mr-1"></i>Secondary Email</strong>
                            <p class="text-active"><?php echo $priv_email; ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col"> <strong><i class="fas fa-map-marker-alt mr-1"></i>Address</strong>
                            <p class="text-active"><?php echo $address; ?></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <p class="text-bold">Postcode</p>
                            <p class="text-active"><?php echo $postcode; ?></p>
                          </div>
                          <div class="col">
                            <p class="text-bold">City</p>
                            <p class="text-active"><?php echo $city; ?></p>
                          </div>
                          <div class="col">
                            <p class="text-bold">State</p>
                            <p class="text-active"><?php echo $state; ?></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <p class="text-bold">Nationality</p>
                            <p class="text-active"><?php echo $nationality; ?></p>
                          </div>
                          <div class="col">
                            <p class="text-bold">Country</p>
                            <p class="text-active"><?php echo $country; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-primary">
                      <div class="card-header text-white bg-dark mb-3">
                        <h6 class="card-title text-white">Parents/Guardian Details</h6>
                      </div>
                      <div class="card-body"> <strong><i class="fas fa-book mr-1"></i>Name</strong>
                        <p class="text-active"><?php echo $parent_name; ?></p>
                        <hr>
                        <strong><i class="fas fa-book mr-1"></i>Mobile</strong>
                        <p class="text-active"><?php echo $parent_mobile; ?></p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i>E-mail</strong>
                        <p class="text-active"><?php echo $parent_email; ?></p>
                        <hr>
                        <div class="row">
                          <div class="col"> <strong><i class="fas fa-map-marker-alt mr-1"></i>Address</strong>
                            <p class="text-active"><?php echo $parent_address; ?></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <p class="text-bold">Postcode</p>
                            <p class="text-active"><?php echo $parent_postcode; ?></p>
                          </div>
                          <div class="col">
                            <p class="text-bold">City</p>
                            <p class="text-active"><?php echo $parent_city; ?></p>
                          </div>
                          <div class="col">
                            <p class="text-bold">State</p>
                            <p class="text-active"><?php echo $parent_state; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--=====================================================================================================================================-->

                  <div class="tab-pane" id="register">
                    <form class="form-horizontal" enctype="multipart/form-data" action="visa_setInfo.php" method="post">
                      <input type="hidden" name="new" value="1" />
                      <div class="card card-primary">
                        <div class="card-header text-white bg-warning mb-3">
                          <h6 class="card-title">Passport Details</h6>
                        </div>
                        <div class="card-body">
                          <label for="inputmobile" class="col-sm-2 col-form-label">Post Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputmobile" name="inputpost_name" placeholder="Without any symbols" required>
                          </div>
                          <label for="inputpriv_email" class="col-sm-5 col-form-label">Given Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputpriv_email" name="inputgiven_name" placeholder="Without any symbols" required>
                          </div>
                          <label for="inputaddress" class="col-sm-2 col-form-label">Surname</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputmobile" name="inputsur_name" placeholder="Without any symbols" required>
                          </div>
                          <label for="inputcity" class="col-sm-2 col-form-label">Birthdate</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputcity" name="inputbirth_date" required>
                          </div>
                          <label for="inputstate" class="col-sm-5 col-form-label">Passport ID</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputstate" name="inputpass_number" placeholder="Passport ID" required>
                          </div>
                          <label for="inputcountry" class="col-sm-5 col-form-label">Country of Issue</label>
                          <?php include 'country_list.php'; ?>
                          <label for="inputstate" class="col-sm-5 col-form-label">Issue Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputstate" name="inputissue_date" required>
                          </div>
                          <label for="inputstate" class="col-sm-5 col-form-label">Expiration Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputstate" name="inputexpiry_date" required>
                          </div>
                          <label for="inputstate" class="col-sm-5 col-form-label">Visa Renewal Period</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputstate" name="inputrenewal_period" placeholder="Enter duration in years" required>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary">
                        <div class="card-header text-white bg-warning mb-3">
                          <h6 class="card-title">Supporting Documents</h6>
                        </div>
                        <div class="card-body">
                          <label for="inputparent_name" class="col-sm-10 col-form-label">Passport Photo</label>
                          <div class="input-group mt-1">
                            <div class="custom-file">
                              <input type="file" name="passport" class="custom-file-input" id="customFile" required>
                              <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                            </div>
                          </div>
                          <label for="inputparent_name" class="col-sm-10 col-form-label">Latest Academic Transcript</label>
                          <div class="input-group mt-1">
                            <div class="custom-file">
                              <input type="file" name="transcript" class="custom-file-input" id="customFile" required>
                              <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-10 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Apply</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!--=====================================================================================================================================-->

                  <div class="tab-pane" id="details">
                    <div class="card card-primary">
                      <div class="card-header bg-warning mb-3">
                        <h6 class="card-title">Passport Details</h6>
                      </div>
                      <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i>Post Name</strong>
                        <p class="text-active"><?php echo $post_name; ?></p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i>Given Name</strong>
                        <p class="text-active"><?php echo $given_name; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i>Surname</strong>
                        <p class="text-active"><?php echo $sur_name; ?></p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i>Birthdate</strong>
                        <p class="text-active"><?php echo $birth_date; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i>Passport Number</strong>
                        <p class="text-active"><?php echo $pass_number; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i>Country of Issue</strong>
                        <p class="text-active"><?php echo $issue_country; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i>Issue Date</strong>
                        <p class="text-active"><?php echo $issue_date; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i>Expiration Date</strong>
                        <p class="text-active"><?php echo $expiry_date; ?></p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i>Visa Renewal Period</strong>
                        <p class="text-active"><?php echo $renewal_period; ?></p>
                        <hr>
                      </div>
                    </div>
                  </div>

                  <!--=====================================================================================================================================-->


                  <div class="tab-pane" id="passport">
                    <div class="card-header text-white bg-warning mb-3">
                      <h6 class="card-title">Passport</h6>
                    </div>
                    <iframe src="../admin/visa_passport/<?php echo $passport; ?>" height="750px" width="750px"></iframe>
                  </div>


                  <!--=====================================================================================================================================-->

                  <div class="tab-pane" id="transcript">
                    <div class="card card-primary">
                      <div class="card-header text-white bg-warning mb-3">
                        <h6 class="card-title">Academic Transcript</h6>
                      </div>
                      <iframe src="../admin/visa_transcript/<?php echo $transcript; ?>" height="750px" width="750px"></iframe>
                    </div>
                    <!--=====================================================================================================================================-->
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