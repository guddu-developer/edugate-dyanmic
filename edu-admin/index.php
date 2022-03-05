<?php
require "login/conn/conn.php";
session_start();
if (isset($_POST["login"])) {
  $user = $_POST["email"];
  $pass = $_POST["password"];
  $select = "SELECT * FROM admin WHERE username=:user AND password=:pass";
  $query = $conn->prepare($select);
  $query->bindParam(":user", $user, PDO::PARAM_STR);
  $query->bindParam(":pass", $pass, PDO::PARAM_STR);
  $query->execute();

  $verify = $query->fetchAll(PDO::FETCH_ASSOC);
  if ($verify) {
    //   echo "<script>alert('".$user.$pass."')</script>";
    date_default_timezone_set("Asia/Kolkata");
    $time = date("Y-m-d h:i:s a");
    $insert = "INSERT INTO adminlogins (username,password,timestamp) VALUES (:loguser,:logpass,:time)";
    $in = $conn->prepare($insert);
    $in->bindParam(":loguser", $user, PDO::PARAM_STR);
    $in->bindParam(":logpass", $pass, PDO::PARAM_STR);
    $in->bindParam(":time", $time, PDO::PARAM_STR);
    if ($in->execute()) {
      $_SESSION["userlog"] = $user;
      $_SESSION["userpass"] = $pass;
      header("location:login/");
    }
  } else {
    echo "<script>alert('WRONG ID PASSWORD')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 15:48:25 GMT -->

<head>
  <title>Edugate | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../assets/css/color-1.css">
  <!-- LIBRARY FONT-->
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
  <link type="text/css" rel="stylesheet" href="../assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
  <link type="text/css" rel="stylesheet" href="../assets/font/font-icon/font-svg/css/Glyphter.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/animate/animate.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/bootstrap-3.3.5/css/bootstrap.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/selectbox/css/jquery.selectbox.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/fancybox/css/jquery.fancybox.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/fancybox/css/jquery.fancybox-buttons.css">
  <link type="text/css" rel="stylesheet" href="../assets/libs/media-element/build/mediaelementplayer.min.css">
  <script src="../assets/libs/jquery/jquery-2.1.4.min.js"></script>
  <script src="../assets/libs/js-cookie/js.cookie.js"></script>
</head>

<body>
   <form method="POST">
  <!-- WRAPPER-->
  <div id="wrapper-content">
    <!-- PAGE WRAPPER-->
    <div id="page-wrapper">
      <!-- MAIN CONTENT-->
      <div class="main-content">
        <!-- CONTENT-->
        <div class="content">
          <div class="page-login rlp">
            <div class="container">
            
                <div class="login-wrapper rlp-wrapper">
                  <div class="login-table rlp-table"><a href="index.html"><img src="../assets/images/logo-color-1.png" alt="" class="login" /></a>

                    <div class="login-title rlp-title">login to your edugate.com account!</div>
                    <div class="login-form bg-w-form rlp-form">
                      <div class="row">
                        <div class="col-md-12"><label for="regemail" class="control-label form-label">email <span class="highlight">*</span></label><input id="regemail" type="text" placeholder="USERNAME" class="form-control form-input" name="email" />

                        </div>
                        <div class="col-md-12"><label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label><input id="regpassword" type="password" placeholder="PASSWORD" class="form-control form-input" name="password" />
                        </div>
                      </div>
                    </div>
                    <div class="login-submit">
                      <button type="submit" name="login" class="btn btn-login btn-green"><span>Log in</span></button>
                    </div>
     
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
         </form>
  <!-- LOADING-->
  <!-- JAVASCRIPT LIBS-->
  <script src="../assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
  <script src="../assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
  <script src="../assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
  <script src="../assets/libs/appear/jquery.appear.js"></script>
  <script src="../assets/libs/count-to/jquery.countTo.js"></script>
  <script src="../assets/libs/wow-js/wow.min.js"></script>
  <script src="../assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
  <script src="../assets/libs/isotope/isotope.pkgd.min.js"></script>
  <script src="../assets/libs/fancybox/js/jquery.fancybox.js"></script>
  <script src="../assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
  <!-- MAIN JS-->
  <script src="../assets/js/main.js"></script>
  <!-- LOADING SCRIPTS FOR PAGE-->
</body>



</html>
