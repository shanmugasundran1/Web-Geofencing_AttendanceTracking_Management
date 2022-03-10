<!DOCTYPE html>

<html class="loglogin">

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
  .loglogin {
    padding-top: 0px;
    margin: 0px;
    background-size: cover;
    font-family: 'Raleway', sans-serif;
    color: #FFF;
    height: 90%;
  }


  .loglogintitle {
    text-align: center;
    font-size: 50px;
    color: black;
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
  }

  .logcontainer {
    min-height: 350px;
    max-width: 450px;
    margin: 0px auto;
    background: #FFF;
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    overflow: hidden;
    -webkit-animation: hi 2s;
    animation: hi 2s;
    -webkit-transform: translateZ(0px);
    opacity: 0.9;
    border-radius: 9px;

  }

  .logcontainer * {
    box-sizing: border-box;
  }

  .logpages {
    -webkit-box-flex: 1;
    flex: 1;
    white-space: nowrap;
    position: relative;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    display: -webkit-box;
    display: flex;
  }

  .logpages .logpage {
    min-width: 100%;
    padding: 20px 0px;
    padding-top: 15px;
    padding-left: 0px;
    background: -webkit-gradient(linear, right top, left top, from(black), to(grey));
    background-image: url("sources/black.jpg");
  }

  .logpages .logpage.logplay {
    background: -webkit-gradient(linear, right top, left top, from(black), to(grey));
    background-image: url("sources/black.jpg");
  }

  .logpages .logpage .logtitle {
    margin-bottom: 10px;
    font-size: 14px;
    position: relative;
    line-height: 14px;
  }

  .logpages .logpage .logtitle i {
    vertical-align: text-bottom;
    font-size: 19px;
  }

  .logpages .logpage .loginput {
    margin-top: 20px;
  }

  .logpages .logpage input.logtext {
    background: #F6F7F9;
    border: none;
    border-radius: 4px;
    width: 100%;
    height: 40px;
    line-height: 40px;
    padding: 0px 10px;
    color: black;
    outline: none;
  }

  .logpages .logpage .logbutlog {
    background: black;
    color: #F6F7F9;
    height: 40px;
    line-height: 40px;
    width: 100%;
    border: none;
    border-radius: 4px;
    font-weight: 600;
  }

  .logtabs {
    max-height: 50px;
    height: 50px;
    display: -webkit-box;
    display: flex;
    background: goldenrod;
    color: white;
  }

  .logtabs .logtab {
    -webkit-box-flex: 1;
    flex: 1;
    text-align: center;
    line-height: 50px;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
  }

  .logtabs .logtab .logtext {
    font-size: 14px;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
  }

  .logpages .logpage:nth-of-type(1) .loginput {
    -webkit-transform: translateX(-100%) scale(0.5);
    transform: translateX(-100%) scale(0.5);
  }

  .logpages .logpage:nth-of-type(2) .loginput {
    -webkit-transform: translateX(100%) scale(0.5);
    transform: translateX(100%) scale(0.5);
  }

  .logpages .logpage .loginput {
    -webkit-transition: all 1s;
    transition: all 1s;
    opacity: 0;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
  }

  input[type=radio] {
    display: none;
  }

  input[type=radio]:nth-of-type(1):checked~.logtabs .logtab:nth-of-type(1) {
    box-shadow: inset -3px 2px 5px rgba(0, 0, 0, 0.25);
    color: #3F4C7F;
  }

  input[type=radio]:nth-of-type(1):checked~.logtabs .logtab:nth-of-type(1) .logtext {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  input[type=radio]:nth-of-type(1):checked~.logpages {
    -webkit-transform: translateX(0%);
    transform: translateX(0%);
  }

  input[type=radio]:nth-of-type(1):checked~.logpages .logpage:nth-of-type(1) .loginput {
    opacity: 1;
    -webkit-transform: translateX(0%);
    transform: translateX(0%);
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  input[type=radio]:nth-of-type(1):checked~.logpages .logpage:nth-of-type(1) .loginput:nth-child(1) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  input[type=radio]:nth-of-type(1):checked~.logpages .logpage:nth-of-type(1) .loginput:nth-child(2) {
    -webkit-transition-delay: 0.4s;
    transition-delay: 0.4s;
  }

  input[type=radio]:nth-of-type(1):checked~.logpages .logpage:nth-of-type(1) .loginput:nth-child(3) {
    -webkit-transition-delay: 0.6s;
    transition-delay: 0.6s;
  }

  input[type=radio]:nth-of-type(1):checked~.logpages .logpage:nth-of-type(1) .loginput:nth-child(4) {
    -webkit-transition-delay: 0.8s;
    transition-delay: 0.8s;
  }

  input[type=radio]:nth-of-type(1):checked~.logpages .logpage:nth-of-type(1) .loginput:nth-child(5) {
    -webkit-transition-delay: 1s;
    transition-delay: 1s;
  }

  input[type=radio]:nth-of-type(2):checked~.logtabs .logtab:nth-of-type(2) {
    box-shadow: inset 3px 2px 5px rgba(0, 0, 0, 0.25);
    color: #3F4C7F;
  }

  input[type=radio]:nth-of-type(2):checked~.logtabs .logtab:nth-of-type(2) .logtext {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  input[type=radio]:nth-of-type(2):checked~.logpages {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
  }

  input[type=radio]:nth-of-type(2):checked~.logpages .logpage:nth-of-type(2) .loginput {
    opacity: 1;
    -webkit-transform: translateX(0%);
    transform: translateX(0%);
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }

  input[type=radio]:nth-of-type(2):checked~.logpages .logpage:nth-of-type(2) .loginput:nth-child(1) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  input[type=radio]:nth-of-type(2):checked~.logpages .logpage:nth-of-type(2) .loginput:nth-child(2) {
    -webkit-transition-delay: 0.4s;
    transition-delay: 0.4s;
  }

  input[type=radio]:nth-of-type(2):checked~.logpages .logpage:nth-of-type(2) .loginput:nth-child(3) {
    -webkit-transition-delay: 0.6s;
    transition-delay: 0.6s;
  }

  input[type=radio]:nth-of-type(2):checked~.logpages .logpage:nth-of-type(2) .loginput:nth-child(4) {
    -webkit-transition-delay: 0.8s;
    transition-delay: 0.8s;
  }

  input[type=radio]:nth-of-type(2):checked~.logpages .logpage:nth-of-type(2) .loginput:nth-child(5) {
    -webkit-transition-delay: 1s;
    transition-delay: 1s;
  }

  @-webkit-keyframes hi {
    from {
      -webkit-transform: translateY(50%) scale(0, 0);
      transform: translateY(50%) scale(0, 0);
      opacity: 0;
    }
  }

  @keyframes hi {
    from {
      -webkit-transform: translateY(50%) scale(0, 0);
      transform: translateY(50%) scale(0, 0);
      opacity: 0;
    }
  }
</style>


<body class="loglogin" background="sources/black.jpg">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="sources/um_logo.png" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-8 col-lg-5 col-xl-5 offset-xl-1" style="background-color:none; padding:20px; border-radius:10px; border:2px solid white">
          <h4 class="login-box-msg" style="font-family:Helvetica; font-weight:bold;color:white"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/63/University_of_Malaya_coat_of_arms.svg/1200px-University_of_Malaya_coat_of_arms.svg.png" style="height:40px;">&nbsp;&nbsp;E-ATTENDANCE</h4>
          <h4 class="login-box-msg" style="font-family:Helvetica; font-weight:bold; color:white">Register <span style="color:gold">Account!</span></h4>
          <?php include 'register_remarks.php'; ?>
          <div class="logcontainer">
            <input id="organizer" type="radio" name="tab" checked="checked" />
            <input id="player" type="radio" name="tab" />
            <div class="logpages">
              <div class="logpage play">
                <form action="register_execute.php" method="post" name="reg" onsubmit="return validateForm()">
                  <div class="input-group mb-3">
                    <input name="fname" type="text" class="form-control" placeholder="Full Name" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-user"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input name="uname" type="text" class="form-control" placeholder="Username (Matric ID)" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-user"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control" placeholder="Email (SiswaMail)" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-envelope"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input name="pass" type="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-lock"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <select id="inputStatus" class="form-control custom-select" name="role" disabled required>
                      <option value="1">Student</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <div class="col"> <a href="login.php" class="btn btn-primary btn-block" style="background-color: purple">Sign In</a> </div>
                  </div>
                </form>
              </div>

              <div class="logpage play">
                <form action="register_execute.php" method="post" name="reg" onsubmit="return validateForm()">
                  <div class="input-group mb-3">
                    <input name="fname" type="text" class="form-control" placeholder="Full Name" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-user"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input name="uname" type="text" class="form-control" placeholder="Username (ID)" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-user"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control" placeholder="Email (UM Email)" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-envelope"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input name="pass" type="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                      <div class="input-group-text"> <span class="fas fa-lock"></span> </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <select id="inputStatus" class="form-control custom-select" name="role" disabled required>
                      <option value="2">Lecturer</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <div class="col"> <a href="login.php" class="btn btn-primary btn-block" style="background-color: purple">Sign In</a> </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="logtabs">
              <label class="logtab" for="organizer">Student</label>
              <label class="logtab" for="player">Lecturer</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>