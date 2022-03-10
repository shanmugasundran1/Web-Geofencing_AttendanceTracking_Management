<?php
error_reporting(0);
include("../session.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Attendance@UM | Dashboard</title>

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

<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="scheduler.php" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
	  
	  <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php">
          SignOut
        </a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="scheduler.php" class="brand-link"> <img src="../sources/um_logo_only.png" alt="UM~ Logo" class="brand-image " style="opacity: 8"> <span class="brand-text font-weight-light">E-Attendance@UM</span> </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <img src="img/admin-image.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jalaluddin &nbsp; | &nbsp;Admin</a>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="scheduler.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Backup/Restore</p>
            </a>
          </li>
          <li class="nav-item">
              <a href="student_browse.php" class="nav-link">
                <i class="nav-icon fa fa-plane"></i>
                <p>Visa Renewal List</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="keyincourse.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Key In Course Data</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="keyingeo.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Key In Geolocation Data</p>
              </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>