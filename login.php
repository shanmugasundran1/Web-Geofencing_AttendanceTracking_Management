<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in | E-Attendance@UM</title>
  <link rel="icon" href="sources/um_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<style>
  body {
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  .divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
</style>

<body background="sources/black.jpg" class="hold-transition login-page">
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="sources/um_logo.png" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-8 col-lg-5 col-xl-5 offset-xl-1" style="background-color:none; padding:20px; border-radius:10px; border:2px solid white">
            <h4 class="login-box-msg" style="font-family:Helvetica; font-weight:bold; color:white"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/63/University_of_Malaya_coat_of_arms.svg/1200px-University_of_Malaya_coat_of_arms.svg.png" style="height:40px;;">&nbsp;&nbsp;E-ATTENDANCE</h4>
      <h4 class="login-box-msg" style="font-family:Helvetica; font-weight:bold; color:white">Sign <span style="color:gold">In!</span></h4>
        <form action="login_check.php" method="post" name="login">
          <?php include 'login_remarks.php'; ?>
          <br>
          <!-- Email input -->
          <div class="form-outline mb-2">
            <input name="uname" type="text" class="form-control form-control-lg" placeholder="Username">
          </div>
          <br>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input name="pass" type="password" class="form-control form-control-lg" placeholder="Password">
          </div>


          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: purple" href="register.php" role="button">
            <i class=""></i>Register</a>

        </form>
      </div>
    </div>
  </div>
</section>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>