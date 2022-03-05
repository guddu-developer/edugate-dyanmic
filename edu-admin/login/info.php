<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start(); include_once "include/link.php";include_once "auth.php"; ?>
    <title>ADMIN INFO </title>
</head>
<body class="menubar-enabled navbar-top-fixed">
    <div class="wrapper">
    <?php 
    include_once "include/header.php";
    include_once "include/side.php";

    ?>
    <div class="card-body">
        <div class="bg-white shadow">
<p class="p-50 text-center ">
<a href="info.php" class="avatar avatar-xxl avatar-on">
    <img  src="https://i.imgur.com/ROPF2fQ.png">
</a>
</p>

<h2 class="text-center text-success pb-50"> WELCOME  <?=$_SESSION['userlog'];?></h2>

</div>
</div>
</div>
    <?php include_once "include/script.php"; ?>
</body>
</html>
