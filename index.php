<!DOCTYPE html>
<html lang="en">

<head>
    <title>EDUGATE</title>
    <?php include_once "include/links.php"; ?>
    <style>
        .h {
            border-bottom: 5px solid #86bc42;
            color: #86bc42;
            font-weight: bold;
        }
    </style>
</head>

<body></body>
<?php
include_once "include/header.php";
?>
<div id="wrapper-content">
    <!-- PAGE WRAPPER-->
    <div id="page-wrapper">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- CONTENT-->
            <div class="content">
                <!-- SLIDER BANNER-->
                <div class="section slider-banner set-height-top">
                    <?php $sli = "SELECT * FROM slider";
                    $slid = $conn->prepare($sli);
                    $slid->execute();
                    $slidd = $slid->fetchAll(PDO::FETCH_ASSOC);
                    $i = 1;
                    foreach ($slidd as $slider) {
                    ?>
                        <div class="slider-item">
                            <div class="slider-<?php echo $i; ?>">
                                <div class="slider-caption">
                                    <div class="container">
                                        <h5 class="text-info-2"><?= $slider['paragraph']; ?></h5>

                                        <h1 class="text-info-1"><?= $slider["heading"]; ?></h1>

                                        <p class="text-info-3"><?= $slider["description"]; ?></p>
                                        <button class="btn btn-green"><span>Start learning now !</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    } ?>

                </div>

                <!-- CHOOSE COURSES     not-done-->
                <div class="section section-padding choose-course">
                    <div class="container">
                        <div class="group-title-index">
                            <h4 class="top-title">CHOOSE YOUR COURSE</h4>

                            <h2 class="center-title">GET THE WORLD CLASS & VERIFIED COURSE</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-a-1-01-01"></i></div>
                        </div>
                        <div class="choose-course-wrapper row">
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-1">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img icon-globe"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="course.php">You already learned one, remember?</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="course.php">Language</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-2">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img fa fa-database"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="course.php">You already learned one, remember?</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="course.php">Software</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-3">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img icon-computer_network"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="course.php">You already learned one, remember?</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="course.php">Social Media</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-4">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img icon-photocamera_1"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="course.php">You already learned one, remember?</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="course.php">Photography</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-5">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img icon-credit_card"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="course.php">You already learned one, remember?</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="course.php">Business</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-6">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img icon-chat_bubbles"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="course.php">You already learned one, remember?</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="course.php">Communication</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- PROGRESS BARS-->
                <div class="section progress-bars section-padding">
                    <div class="container">
                        <div class="progress-bars-content">
                            <div class="progress-bar-wrapper">
                                <h2 class="title-2">Some important facts about us</h2>

                                <div class="row">
                                    <div class="content">
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="90" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">teachers</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="56" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">courses</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="545" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">members</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="15" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Countries</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <button onclick="window.location.href='contact.php'" class="btn btn-green-3"><span>start Learn now</span></button>
                                </div>
                                <div class="group-btn-slider">
                                    <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- TOP COURSES-->
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="group-title-index">
                            <h4 class="top-title">CHOOSE YOUR COURSE</h4>

                            <h2 class="center-title">the top popular courses for you</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="top-courses-wrapper">
                            <div class="top-courses-slider">

                                <?php
                                $cou = "SELECT * FROM course WHERE popular=1 LIMIT 4";
                                $cour = $conn->prepare($cou);
                                $cour->execute();
                                $cours = $cour->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($cours as $course) {
                                ?>
                                    <div class="top-courses-item">
                                        <div class="edugate-layout-2">
                                            <div class="edugate-layout-2-wrapper">
                                                <div class="edugate-content"><a href="courses-detail.html" class="title"><?= $course["name"]; ?></a>

                                                    <div class="info">
                                                        <div class="author item"><a href="#">By Admin</a></div>
                                                        <div class="date-time item"><a href="#"><?= $course['duration']; ?></a></div>
                                                    </div>
                                                    <div class="info-more">
                                                        <div class="view item"><i class="fa fa-user"></i>

                                                            <p> 56</p>
                                                        </div>
                                                        <div class="comment item"><i class="fa fa-comment"></i>

                                                            <p> 239</p>
                                                        </div>
                                                    </div>
                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    <div class="description"><?= $course["description"]; ?></div>
                                                    <button onclick="window.location.href='courses-detail.php'" class="btn btn-green"><span>learn now</span></button>
                                                </div>
                                                <div class="edugate-image"><img src="edu-admin/login/images/course/<?= $course['image']; ?>" alt="" class="img-responsive" /></div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="top-courses-slider">
                                <?php
                                $cou = "SELECT * FROM course WHERE popular=1 ORDER BY id DESC LIMIT 4";
                                $cour = $conn->prepare($cou);
                                $cour->execute();
                                $cours = $cour->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($cours as $course) {
                                ?>
                                    <div class="top-courses-item">
                                        <div class="edugate-layout-2">
                                            <div class="edugate-layout-2-wrapper">
                                                <div class="edugate-content"><a href="course.php" class="title"><?= $course['name']; ?></a>

                                                    <div class="info">
                                                        <div class="author item"><a href="#">By Admin</a></div>
                                                        <div class="date-time item"><a href="#"><?= $course['duration']; ?></a></div>
                                                    </div>
                                                    <div class="info-more">
                                                        <div class="view item"><i class="fa fa-user"></i>

                                                            <p> 56</p>
                                                        </div>
                                                        <div class="comment item"><i class="fa fa-comment"></i>

                                                            <p> 239</p>
                                                        </div>
                                                    </div>
                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-10"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    <div class="description"><?= $course['description']; ?></div>
                                                    <button onclick="window.location.href='courses-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                                </div>
                                                <div class="edugate-image"><img src="edu-admin/login/images/course/<?= $course['image']; ?>" alt="" class="img-responsive" /></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>


                            <div class="group-btn-top-courses-slider">
                                <div class="btn-prev">&lsaquo;</div>
                                <div class="btn-next">&rsaquo;</div>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- WHY CHOOSE US-->
                <div class="section why-choose-us">
                    <div class="why-choose-us-wrapper-top">
                        <div class="container">
                            <div class="why-choose-us-wrapper">
                                <h2 class="title-2">Why Edugate?</h2>

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <button onclick="window.location.href='categories.html'" class="btn btn-green-2"><span>start Learn now</span></button>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1.2s" class="background-girl-1 wow fadeInUp"><img src="assets/images/girl-1.png" alt="" class="img-responsive" /></div>
                        </div>
                    </div>
                    <div class="why-choose-us-wrapper-bottom background-opacity">
                        <div class="container">
                            <div data-wow-delay="0.4s" data-wow-duration="1s" class="row why-choose-us-wrapper wow zoomIn">
                                <div class="customs-row">
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-pencil-square-o"></i>

                                        <p> Over 600 free tutorial</p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-compress"></i>

                                        <p> Refund if not Satisfied</p>
                                    </div>
                                </div>
                                <div class="customs-row">
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-paper-plane"></i>

                                        <p> Easy to learning everytime, everywhere</p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-folder-open"></i>

                                        <p> Over 3000 Ebook a-vailable</p>
                                    </div>
                                </div>
                                <div class="customs-row">
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-external-link"></i>

                                        <p> Free updates & support</p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-stumbleupon-circle"></i>

                                        <p> Flexible payment methods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- SLIDER TALK ABOUT US-->
                <div class="section background-opacity slider-talk-about-us">
                    <div class="container">
                        <div id="people-talk" data-ride="carousel" data-interval="5000" class="slider-talk-about-us-wrapper carousel slide">
                            <div role="listbox" class="slider-talk-about-us-content carousel-inner">

                              <?php
                                $te = "SELECT * FROM testimonials WHERE status='publish'";
                                $tes = $conn->prepare($te);
                                $tes->execute();
                                $tesd = $tes->fetchAll(Pdo::FETCH_ASSOC);

                                foreach ($tesd as $test) {
                                ?>

                                    <div class="peopel-item item <?php if($test['id']==1){ echo "active"; }else{ echo "";} ?>">
                                        <p class="peopel-comment">"<?= $test['description']; ?>"</p>

                                        <div class="group-peole-info">
                                            <div class="peopel-avatar"><img src="edu-admin/login/images/testimonials/<?= $test['image']; ?>" alt="" class="img-responsive" /></div>
                                            <div class="peopel-name"><?= $test['name']; ?></div>
                                            <div class="people-job"><?= $test['designation']; ?></div>
                                        </div>
                                    </div>

                                <?php } ?>


                            </div>
                        </div>
                    </div>
                    <div class="group-btn-slider"><a href="#people-talk" role="button" data-slide="prev">
                            <div class="btn-prev carousel-control left"><i class="fa fa-angle-left"></i></div>
                        </a><a href="#people-talk" role="button" data-slide="next">
                            <div class="btn-next carousel-control right"><i class="fa fa-angle-right"></i></div>
                        </a></div>
                </div>




                <!--LATEST NEW-->
                <div class="section section-padding latest-news">
                    <div class="container">
                        <div class="group-title-index">
                            <h4 class="top-title">latest Blogs</h4>

                            <h2 class="center-title">all about edugate updates</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                        </div>
                        <div class="latest-news-wrapper">


                            <?php

                            $bl = "SELECT * FROM blog WHERE showhome=1 ORDER BY id DESC LIMIT 3 ";
                            $blo = $conn->prepare($bl);
                            $blo->execute();

                            $bldt = $blo->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($bldt as $blog) {
                            ?>


                                <div class="edugate-layout-1">
                                    <div class="edugate-image"><img src="edu-admin/login/images/blog/<?= $blog['image']; ?>" alt="" class="img-responsive" /></div>
                                    <div class="edugate-content"><a href="blog.php" class="title">
                                            <?= $blog['heading']; ?>
                                        </a>

                                        <div class="info">
                                            <div class="author item"><a href="#">By Admin</a></div>
                                            <div class="date-time item"><a href="#"><?= $blog['add_time']; ?></a></div>
                                        </div>
                                        <div class="info-more">
                                            <div class="view item"><i class="fa fa-user"></i>

                                                <p> 56</p>
                                            </div>
                                            <div class="comment item"><i class="fa fa-comment"></i>

                                                <p> 239</p>
                                            </div>
                                        </div>
                                        <div class="description"><?= $blog['description']; ?></div>
                                        <button onclick="window.location.href='blog.php'" class="btn btn-green"><span>learn now</span></button>
                                    </div>
                                </div>
                            <?php } ?>
                            <button class="btn btn-green btn-latest-new p-20" onclick="window.location.href='blog.php';"><span>Browser All Post<i class="fa fa-long-arrow-right"></i></span></button>
                        </div>
                    </div>
                </div>





                <!-- PICTURE AND GALLERY-->
                <div class="section section-padding picture-gallery">
                    <div class="group-title-index">
                        <h4 class="top-title">see and feel it</h4>

                        <h2 class="center-title">Pictures and gallery</h2>

                        <div class="bottom-title"><i class="bottom-icon icon-a-1-01"></i></div>
                    </div>
                    <div class="picture-gallery-wrapper">
                        <!-- Nav tabs-->
                        <ul role="tablist" class="nav nav-tabs edugate-tabs">
                            <li role="presentation" class="active"><a href="#campus" data-toggle="tab" class="text">GALLERY</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="gallery-content">
                            <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                <div class="grid">
                                    <div class="grid-item grid-item-height3"><a href="assets/images/lib-pictures/pictures-1.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-1.jpg" alt="" class="img-responsive" /></a></div>
                                    <div class="grid-item grid-item-height2"><a href="assets/images/lib-pictures/pictures-2.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-2.jpg" alt="" class="img-responsive" /></a></div>
                                    <div class="grid-item grid-item-height3"><a href="assets/images/lib-pictures/pictures-3.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-3.jpg" alt="" class="img-responsive" /></a></div>
                                    <div class="grid-item grid-item-height1"><a href="assets/images/lib-pictures/pictures-4.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-4.jpg" alt="" class="img-responsive" /></a></div>
                                    <div class="grid-item grid-item-height2"><a href="assets/images/lib-pictures/pictures-6.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-6.jpg" alt="" class="img-responsive" /></a></div>
                                    <div class="grid-item grid-item-height1"><a href="assets/images/lib-pictures/pictures-5.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-5.jpg" alt="" class="img-responsive" /></a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>






                <!-- SLIDER LOGO-->
                <div class="section slider-logo">
                    <div class="container">
                        <div class="slider-logo-wrapper">
                            <div class="slider-logo-content">
                                <div class="carousel-logos owl-carousel">
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive" /></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive" /></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- ===========content end============== -->
            </div>
        </div>
    </div>
</div>



<?php include_once "include/footer.php"; ?>
</body>

</html>
