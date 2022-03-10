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
    <?php include 'header_student.php'; ?>
    <div class="content-wrapper">
        <section class="content-header card bg-dark rounded-0">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">Choose Course to Mark Attendance</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Choose Course to Mark Attendance</li>
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
                                <form action="attendanceMark.php" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="">Select Week</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="week" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required>
                                                    <?php
                                                        for ($i = 1;$i <= 15;$i++)
                                                        {
                                                            echo "<option>$i</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="">Select Course</label>
                                            </div>
                                            <div class="col-md-4">
                                            <?php $result = mysqli_query($mysqli, "SELECT * FROM student_course WHERE acc_uname = '$loggedin_session'"); ?>
                                                <select name="course" class="form-select form-select-lg mb-9" aria-label=".form-select-lg example" required> 
                                                    <?php while($row = mysqli_fetch_array($result)):;?>
                                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[3];?>&nbsp<?php echo $row[4];?>&nbsp<?php echo $row[5];?></option>
                                                    <?php endwhile;?>
                                                </select>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-7">
                                        <div class="col-md-1">
                                            <button type="submit" name="assign" class="btn btn-primary">Next</button>
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