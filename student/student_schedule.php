<?php
error_reporting( 0 );
include( '../session.php' );
include( '../config.php' );
?>
<!DOCTYPE html>
<html lang="en">
	
<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>School Faculty Scheduling System</title>
<?php
 include('./header.php'); 
 ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php
  include( "header_student.php" );
  ?>
  <div class="content-wrapper">
    <section class="content-header card bg-dark rounded-0">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Helvetica; font-weight:bold;">My Schedule</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">My Schedule</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
      <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
      <main id="view-panel" >
          <?php $page = isset($_GET['page']) ? $_GET['page'] :'schedule'; ?>
        <?php include $page.'.php' ?>
      </main>
    </section>
  </div>
</body>
<script>
	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }
  $(document).ready(function(){
    $('#preloader').fadeOut('fast', function() {
        $(this).remove();
      })
  })
  $('.datetimepicker').datetimepicker({
      format:'Y/m/d H:i',
      startDate: '+3d'
  })
  $('.select2').select2({
    placeholder:"Please select here",
    width: "100%"
  })
</script>	
</html>