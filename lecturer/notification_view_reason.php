<?php
error_reporting(0);
include("../session.php");
include('../config.php');

$unameid = $_GET['id'];
$results = mysqli_query($mysqli, "SELECT * FROM response WHERE student_id = '$unameid'");
$rows = mysqli_fetch_array($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Notification Reason | E-Attendance@UM</title>
  <link rel="icon" href="../sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
    .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 30px;
      margin-bottom: 30px;
      border: 1px solid black;
      border-radius: 5px;
      font-size: 16px;
      line-height: 24px;
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color: #555;
    }

    .invoice-box table {
      width: 100%;
      line-height: inherit;
      text-align: left;
    }

    .invoice-box table td {
      padding: 5px;
      vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
      text-align: right;
    }

    .invoice-box table tr.top table td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
      font-size: 45px;
      line-height: 45px;
      color: #333;
    }

    .invoice-box table tr.information table td {
      padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
      background: black;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
      color: white;
    }

    .invoice-box table tr.details td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
      border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
      border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
      border-top: 2px solid #eee;
      font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
      .invoice-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
      }

      .invoice-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
      }
    }

    /** RTL **/
    .rtl {
      direction: rtl;
      font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
      text-align: right;
    }

    .rtl table tr td:nth-child(2) {
      text-align: left;
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
                <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">View <?php echo $rows['student_uname']; ?> Notification Reason</h1>
            </div> 
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Notification</li>
                    <li class="breadcrumb-item active">View Notifications</li>
                    <li class="breadcrumb-item active">View Notification Reason</li>
                </ol>
            </div>
            </div>
        </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="invoice-box" style="background-color:white;">
                    <table>
                        <?php 
                        $studentid = $_GET['id'];
                        $result = mysqli_query($mysqli, "SELECT * FROM response WHERE student_id = '$studentid'"); 
                        $row = mysqli_fetch_array($result);
                        ?>
                        <tr class="item">
                            <td> Reason for Rejection </td>
                            <td><?php echo $row['message']; ?></td>
                        </tr>
                        <tr class="details">
                            <td>
                                <a href="notification_reason_download.php?filename=<?php echo $row['files']; ?>" title="click to download" class="btn btn-secondary" onerror="this.src='404.php'">Download</a>
                                <a href="../lecturer/response-files/<?php echo $row['files']; ?>" target="_blank" title="click to download" class="btn btn-primary">View</a>
                            </td>
                            <td>
                            <img src="../lecturer/response-files/<?php echo $row['files']; ?>" onerror="this.src='response-files/no-preview.jpeg'" style="width:400px;height:400px;">
                            </td>
                        </tr>
                        <div style="text-align:right;">
                            <span>
                                <button class="btn btn-primary" onclick="window.print()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

<footer class="main-footer" style="background-color: black; color:white;"> <strong>FCSIT ATTENDANCE &copy; 2021 </strong> FYP 1.
  <div class="float-right d-none d-sm-inline-block"> <b>University of Malaya</b> </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>

</html>