<?php if (empty($_GET['get'])) {
    header("location:course.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .c {
            border-bottom: 5px solid #86bc42;
            color: #86bc42;
            font-weight: bold;
        }
    </style>
    <title>COURSES</title>
    <?php include_once "include/links.php"; ?>
</head>

<body>
    <?php include_once "include/header.php"; ?>

    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- PAGE WRAPPER-->
        <div id="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- CONTENT-->
                <div class="content">

                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper">
                                <!--.page-title-content-->
                                <?php
                                if (isset($_GET['get'])) {
                                    $id = $_GET['get'];
                                    $so = "SELECT * FROM course WHERE id=$id";
                                    $selid = $conn->prepare($so);
                                    $selid->execute();

                                    $seledata = $selid->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($seledata as $course) { ?>
                                        <h2 class="captions"><?= $course['name']; ?></h2>
                                    <?php } ?>
                                    <ol class="breadcrumb">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="course-detail.php" class="active">Courses Detail</a></li>
                                    </ol>
                            </div>
                        </div>
                    </div>










                    <div class="section section-padding courses-detail">
                        <div class="container">
                            <div class="courses-detail-wrapper">
                                <div class="row">

                                    <?php
                                    foreach ($seledata as $data) {
                                    ?>
                                        <div class="col-md-9 layout-left">
                                            <h1 class="course-title"><?= $data['name']; ?></h1>

                                            <div class="course-info info">
                                                <div class="author item"><a href="#"><span>By&nbsp;</span><span>Emma Watson</span></a></div>
                                                <div class="date-time item"><a href="#">20 Aug 2015</a></div>
                                            </div>
                                            <div class="course-video">
                                                <img src="edu-admin/login/images/course/<?= $data['image']; ?>">
                                                <div class="video-btn">
                                                    <button class="btn btn-grey video-btn-right pull-right"><span>next lesson</span><i class="fa fa-angle-right"></i></button>
                                                    <button class="btn btn-grey video-btn-left pull-right"><i class="fa fa-angle-left"></i><span>previous lesson</span></button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="course-des">
                                                <div class="course-des-title underline">Courses Info</div>
                                                <div class="course-des-content">
                                                    <p><?= $data['description']; ?></p>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius ultricies metus. Donec ac ex porta libero venenatis sodales. Sed efficitur eget risus sed molestie. Nulla blandit bibendum metus ut sagittis. Etiam quis semper justo. Sed tristique facilisis felis ut tincidunt. Phasellus auctor convallis nisl ut accumsan. Suspendisse ullamcorper fermentum lectus, vel tincidunt ligula mollis sit amet. Aliquam at ante at elit efficitur tincidunt a quis neque. Donec ut pulvinar metus. Pellentesque lobortis volutpat eros sed sagittis.</p>
                                                </div>

                                        <?php }
                                } ?>
                                        <div class="news-list">
                                            <div class="list-expand-title">Requirements</div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <ul class="list-unstyled list-detail">
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Phasellus sit amet velit auctor turpis rhoncus.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Phasellus sed dolor sodales, eleifend ipsum eu.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Nullam id dolor in ex eleifend tempus.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Etiam id lorem vel neque faucibus fermentum.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Nunc tincidunt augue in enim sollicitudin feugiat.</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <ul class="list-unstyled list-detail">
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Phasellus sit amet velit auctor turpis rhoncus.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Phasellus sed dolor sodales, eleifend ipsum eu.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Nullam id dolor in ex eleifend tempus.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Etiam id lorem vel neque faucibus fermentum.</a></li>
                                                        <li><i class="fa fa-angle-right"></i><a href="#">Nunc tincidunt augue in enim sollicitudin feugiat.</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 sidebar layout-right">
                                            <div class="row">

                                                <div class="author-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                                    <div class="title-widget">about emma watson</div>
                                                    <div class="content-widget">
                                                        <div class="staff-item author-widget-wrapper customize">
                                                            <div class="staff-item-wrapper">
                                                                <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-3.jpg" alt="" class="img-responsive" /></a><a href="#" class="staff-name">ROHIT KUMARI</a>

                                                                    <div class="staff-job">vice head teacher</div>
                                                                    <div class="staff-desctiption">Nam libelo tempore, cum soluta nobis est eligendi optio cumque nilhi impedil quo minus end maximie fade posimus the end.</div>
                                                                </div>
                                                            </div>
                                                            <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="popular-course-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                                    <div class="title-widget">popular courses</div>
                                                    <div class="content-widget">

                                                        <?php

                                                        $cou = "SELECT * FROM course WHERE popular=1 LIMIT 5";
                                                        $cour = $conn->prepare($cou);
                                                        $cour->execute();
                                                        $cours = $cour->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach ($cours as $course) {
                                                        ?>
                                                            <div class="media">
                                                                <div class="media-left"><a href="course-detail.php" class="link"><img src="edu-admin/login/images/course/<?= $course['image']; ?>" alt="" class="media-image" /></a></div>
                                                                <div class="media-right">
                                                                    <div class="cur">35</div>
                                                                    <a href="course-detail.php" class="link title"><?= $course['name']; ?></a>

                                                                    <div class="info">
                                                                        <div class="author item"><a href="#"><span>By Guddu</span></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>
            </div>
        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
</body>

</html>
