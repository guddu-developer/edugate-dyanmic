<?php
if (empty($_GET['get'])) {
    header("location:blog.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .b {
            border-bottom: 5px solid #86bc42;
            color: #86bc42;
            font-weight: bold;
        }
    </style>
    <title>Document</title>
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
                            <div class="page-title-wrapper">    <?php
                                        if (isset($_GET['get'])) {
                                            $id = $_GET['get'];
                                            $select = "SELECT * FROM blog WHERE id=$id";
                                            $quer = $conn->prepare($select);
                                            $quer->execute();
                                            $data = $quer->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($data as $blgdtl){
                                            ?>
                                <h2 class="captions"><?=$blgdtl['heading'];?></h2>
                                <?php } ?>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li class="active"><a href="#">Detail</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>



                    <div class="section section-padding news-detail">
                        <div class="container">
                            <div class="news-detail-wrapper">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12">
                                    
                                            <?php
                                            foreach ($data as $bdtl) {
                                        ?>
                                                <div class="news-detail"><img src="edu-admin/login/images/blog/<?= $bdtl['image']; ?>" alt="" class="news-image" />

                                                    <h1 class="title-news"><?= $bdtl['heading']; ?></h1>

                                                    <div class="info">
                                                        <div class="author item"><a href="#"><span>By&nbsp;</span><span>Admin</span></a></div>
                                                        <div class="category item"><a href="#">Creative and Learning</a></div>
                                                        <div class="comment item"><a href="#"><span>24</span><span>&nbsp;Comments</span></a></div>
                                                        <div class="date-time item"><a href="#"><span>Posted&nbsp;</span><span><?= $bdtl['add_time']; ?></span></a></div>
                                                        <div class="like item"><a href="#"><span>124</span><span>&nbsp;Likes</span></a></div>
                                                        <!-- <div class="share item"><a href="#">Share This Post</a></div> -->
                                                    </div>
                                                    <div class="news-content">
                                                        <div class="news-des">
                                                            <p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis.</p>
                                                        </div>
                                                        <div class="text-news">
                                                            <div class="wide-text">
                                                                <p><?= $bdtl['description']; ?></p>

                                                             
                                                            </div>
                                                            <img src="assets/images/news-detail-2.jpg" alt="" class="news-image-block pull-left" />

                                                            <div class="text-block">
                                                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi.</p>

                                                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi.</p>

                                                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi.</p>

                                                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula.</p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <blockquote>
                                                                <div class="main-quote">Video courses to build new skills from start to finish.</div>
                                                                <div class="sub-quote">Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre.</div>
                                                                <footer>Amber Ivy&nbsp;
                                                                    <small>(GUDDU KUMAR)</small>
                                                                </footer>
                                                            </blockquote>
                                                        </div>
                                                        <div class="news-list">
                                                            <div class="list-expand-title">Unordered &amp; Ordered Lists</div>
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
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius ultricies metus. Donec ac ex porta libero venenatis sodales. Sed efficitur eget risus sed molestie. Nulla blandit bibendum metus ut sagittis.</p>
                                                        </div>

                                                    </div>

                                            <?php }
                                        } ?>
                                                </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12 sidebar layout-right">
                                        <div class="row">
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







                                            <div class="popular-course-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                                <div class="title-widget">Latest Blog</div>
                                                <div class="content-widget">

                                                    <?php

                                                    $c = "SELECT * FROM blog ORDER BY id DESC LIMIT 5";
                                                    $b = $conn->prepare($c);
                                                    $b->execute();
                                                    $bl = $b->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($bl as $blog) {
                                                    ?>
                                                        <div class="media">
                                                            <div class="media-left"><a href="blog-detail.php?get=<?= $blog['id']; ?>" class="link"><img src="edu-admin/login/images/blog/<?= $blog['image']; ?>" alt="" class="media-image" /></a></div>
                                                            <div class="media-right">
                                                                <div class=""></div>
                                                                <a href="blog-detail.php?get=<?= $blog['id']; ?>" class="link title"><?= $blog['heading']; ?></a>

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
                                            <!-- <div class="archive-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                                <div class="title-widget">archive</div>
                                                <div class="content-widget">
                                                    <ul class="archive-widget list-unstyled">
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">March 2016</span><span class="pull-right">09</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">February 2016</span><span class="pull-right">14</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">January 2016</span><span class="pull-right">15</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">December 2016</span><span class="pull-right">23</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">November 2016</span><span class="pull-right">34</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">March 2015</span><span class="pull-right">09</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">February 2015</span><span class="pull-right">14</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">January 2015</span><span class="pull-right">15</span></a></li>
                                                        <li><a href="news-detail.html" class="link archive-item"><span class="pull-left">December 2012</span><span class="pull-right">23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                          
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
