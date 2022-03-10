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
            <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">MY CLASSES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="attendance_select_course.php">Attendance</a></li>
              <li class="breadcrumb-item">My Classes</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	
    <section class="content">
      <div class="card border border-dark">
	  
        <div class="card-header">
          <h3 class="card-title">My Classes</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
          </div>
        </div>
		
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead class="thead-dark">
              <tr>
                <th style="width: 10%"> Code </th>
                <th style="width: 15%"> Course </th>
                <th style="width: 10%"> Occurence </th>
                <th style="width: 10%"> Current Week </th>
                <th style="width: 10%"> Current Attendance </th>
                <th style="width: 10%"> Status </th>
                <th style="width: 10%"> Week</th>
              </tr>
            </thead>
			
            <tbody>
              <?php
              $sqlcourse = "SELECT * FROM lecturer_course where acc_uname ='$loggedin_session' ORDER BY CourseCode ASC";
              $resultcourse = mysqli_query($mysqli, $sqlcourse);
              if (mysqli_num_rows($resultcourse) > 0) {
                while ($row = mysqli_fetch_array($resultcourse)) {
                  $course_id = $row['subject_id'];
                  $course_code = $row['CourseCode'];
                  $course_name = $row['CourseName'];
                  $course_occurence = $row['ClassDetail'];
                  $course_day = $row['ClassDay'];
                  $start_time = $row['StartTime'];
                  $end_time = $row['EndTime'];

                  include 'attendance_get_selectCourseInfo.php';
              ?>

                <tr>
                    <td><b><?php echo $course_code; ?><b><b></td>
                    <td><?php echo $course_name; ?></td>
                    <td><?php echo $course_occurence; ?></td>
                    <td> Week <?php echo $total; ?></td>
                    <td class="project_progress">
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo ($count / $headcount) * 100; ?>%" aria-valuenow="<?php echo ($count / $headcount) * 100; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo (1 - ($count / $headcount)) * 100; ?>%" aria-valuenow="<?php echo (1 - ($count / $headcount)) * 100; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
					  <small> <?php echo $count; ?> / <?php echo $headcount; ?> </small>
					</td>

					<td class="project-state">
					<?php
					  $percentage = ($count / $headcount) * 100;;
					  if ($percentage >= 80) {
						echo '<span class="badge badge-success">Good</span>';
					  } elseif ($percentage >= 60 && $percentage < 80) {
						echo '<span class="badge badge-warning">Warning</span>';
					  } elseif ($percentage < 60) {
						echo '<span class="badge badge-danger">Critical</span>';
					  }
					  ?>
					</td>
					<td>
					  <div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Choose </button>
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="attendance_classViewOverall.php?course_id=<?php echo $course_id ?>" class="btn btn-secondary" title="Click to View More">Overall</a>
						  <?php
							  for ($weekcount = 1; $weekcount <= $total; $weekcount++) {
								echo '<a class="dropdown-item" href="attendance_classView.php?course_id=' . $course_id . '&weekcount=' . $weekcount . '" class="btn btn-secondary" title="Click to View More">Week ' . $weekcount . '</a>';
							  }
						  ?>
						</div>
					  </div>
					</td>
				</tr>
					<?php
				}
					} else {
						echo '<td colspan="7" style="text-align:center">No Results!</td>';
					}
					?>
				</tbody>
			</table>
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

</html>