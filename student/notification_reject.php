<?php
error_reporting(0);
include '../session.php';
include('../config.php');
$_SESSION['courseid'] = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reject Notification | E-Attendance@UM</title>
  <link rel="icon" href="../sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .rate {
      float: left;
      height: 46px;
      padding: 0 10px;
    }

    .rate:not(:checked)>input {
      position: absolute;
      top: -9999px;
    }

    .rate:not(:checked)>label {
      float: right;
      width: 1em;
      overflow: hidden;
      white-space: nowrap;
      cursor: pointer;
      font-size: 30px;
      color: #ccc;
    }

    .rate:not(:checked)>label:before {
      content: '★ ';
    }

    .rate>input:checked~label {
      color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
      color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
      color: #c59b08;
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
                    <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">Reject Notification</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Notification</li>
                        <li class="breadcrumb-item active">Reject Notification</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card card-primary col-md-12">
      <div class="card-header">
        <h3 class="card-title">Submit Reject Reason</h3>
      </div>
      <form enctype="multipart/form-data" action="notification_reject_reason.php" name="form" method="post">
        <div class="card-body border border-secondary  col-md-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Reason</label>
            <textarea name="message" class="form-control" id="exampleInputPassword1" placeholder="I cannot attend the class because..." required></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Supporting Document</label>
            <div class="input-group mt-1">
              <div class="custom-file">
                <input type="file" name="photo" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" value="SUBMIT" name="submit" class="btn btn-danger">
        </div>
      </form>
    </div>
  </div>
</body>

<footer class="main-footer" style="background-color: black; color:white;"> <strong>FCSIT ATTENDANCE &copy; 2021 </strong> FYP 1.
  <div class="float-right d-none d-sm-inline-block"> <b>University of Malaya</b> </div>
</footer>

</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../src/js/profanities.js"></script>
<?php include 'feedback_add_profanityScript.php'; ?>
<script>
  $(function() {
    $('#inputfeedback').summernote({
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
    });
  })
</script>

</html>