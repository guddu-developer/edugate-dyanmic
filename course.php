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
                                <h2 class="captions">COURSE</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="course.php">Course</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>


<!-- 
                    <div class="section">
                        <div class="search-input">
                            <div class="container">
                                <div class="search-input-wrapper">
                                    <form action="search-course.php"> <select class="form-select style-1 selectbox">
                                            <option selected disabled>all categories</option>
                                            <option value="1">languages</option>
                                            <option value="2">science</option>
                                        </select><select class="form-select style-2 selectbox">
                                            <option value="price">price</option>
                                            <option value="datetime">datetime</option>
                                            <option value="teacher">teacher</option>
                                        </select><input type="text" placeholder="Do you want to learn today?" class="form-input" />
                                        <button type="submit" class="form-submit btn btn-blue"><span>search now<i class="fa fa-search"></i></span></button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->




                    <div class="section section-padding courses">
                        <div class="container">
                            <div class="group-title-index">
                                <h2 class="center-title">Language courses</h2>
                                <h4 class="top-title">Having over <b>7 million students</b> worldwide and more than <b>30,000 online courses</b></h4>
                                <!--.bottom-title<i class="bottom-icon icon-a-1-01"></i>-->
                            </div>
                            <div class="courses-wrapper">
                                
                                        <div class="style-show style-grid row">

                                            <?php

                                            $sele = "SELECT * FROM course";
                                            $qu = $conn->prepare($sele);
                                            $qu->execute();

                                            $cour = $qu->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($cour as $course) {
                                            ?>


                                                <div class="col-style">
                                                    <div class="edugate-layout-2">
                                                        <div class="edugate-layout-2-wrapper">
                                                            <div class="edugate-content"><a href="course-detail.php?get=<?= $course['id']; ?>" class="title"><?= $course['name']; ?></a>
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
                                                                <div class="description"><?= $course['description']; ?></div>
                                                                <button class="btn btn-green" onclick="window.location.href='course-detail.php?get=<?= $course['id']; ?>'"><span>learn now</span></button>
                                                            </div>
                                                            <div class="edugate-image"><img src="edu-admin/login/images/course/<?= $course['image']; ?>" alt="" class="img-responsive" /></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                            <!-- <nav class="pagination col-md-12">
                                                <ul class="pagination__list">
                                                    <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                                    <li><span class="pagination__page btn-squae active">1</span></li>
                                                    <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                                    <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                                    <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                                    <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                                </ul>
                                            </nav> -->

                </div>
            </div>
        </div>
    </div>












    <?php include_once "include/footer.php"; ?>
</body>

</html>
