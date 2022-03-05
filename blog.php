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
    <title>Blogs</title>
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
                                <h2 class="captions">Blogs & update</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="">Blogs</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>







                    <div class="section section-padding news-page">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="news-page-wrapper">
                                <?php

                            $con = mysqli_connect("localhost", "root", "", "edugate");

                                if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                                $page_no = $_GET['page_no'];
                                } else {
                                $page_no = 1;
                                }

                                $total_records_per_page = 5;
                                $offset = ($page_no - 1) * $total_records_per_page;
                                $previous_page = $page_no - 1;
                                $next_page = $page_no + 1;
                                $adjacents = "2";

                                $result_count = mysqli_query($con, "SELECT COUNT(*) As total_records FROM blog WHERE status='publish'");
                                $total_records = mysqli_fetch_array($result_count);
                                $total_records = $total_records['total_records'];
                                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                $second_last = $total_no_of_pages - 1; // total page minus 1

                                $result = mysqli_query($con, "SELECT * FROM blog WHERE status='publish' LIMIT $offset, $total_records_per_page ");
                                // while ($blog = mysqli_fetch_array($result)) {                            
                                    foreach($result as $blog){
                                ?>
                                      
                                            <div class="edugate-layout-1">
                                                <div class="edugate-image"><img src="edu-admin/login/images/blog/<?= $blog['image']; ?>" alt="<?= $blog['image']; ?>" class="img-responsive" /></div>
                                                <div class="edugate-content"><a href="blog-detail.php?get=<?= $blog['id']; ?>" class="title"><?= $blog['heading']; ?></a>

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
                                                    <div class="description"><?= $blog['details']; ?></div>
                                                    <button class="btn btn-green" onclick="window.location.href='blog-detail.php?get=<?= $blog['id']; ?>'"><span>read more</span></button>
                                                </div>
                                            </div>
                                        <?php }
                                         mysqli_close($con); ?>



                                    </div>

                                </div>















                                <div class="col-md-3 sidebar layout-right">
                                    <div class="row">

                                        <div class="popular-course-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                            <div class="title-widget">popular courses</div>
                                            <div class="content-widget">

                                                <?php

                                                $cou = "SELECT * FROM course WHERE popular=1";
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
                                    </div>
                                </div>


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

                      
                            

                                <!-- <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                                    <strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
                                </div> -->
                                <nav class="pagination col-md-12">
                                    <ul class="pagination__list">

                                    <li>
                                        <a  rel="prev" class="pagination__previous btn-squae <?php 
                                        if ($page_no <= 1) {
                                            echo 'disable';} ?>" 
                                            <?php                                       
                                        if ($page_no > 1) {
                                                echo "href='?page_no=$previous_page'";
                                            } ?>>&#8249;</a>
                                    </li>

                                    <?php
                                    if ($total_no_of_pages <= 10) {
                                        for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                                            if ($counter == $page_no) {
                                                echo "<li class='pagination__page btn-squae active'><a>$counter</a></li>";
                                            } else {
                                                echo "<li><a class='pagination__page btn-squae' href='?page_no=$counter'>$counter</a></li>";
                                            }
                                        }
                                    } elseif ($total_no_of_pages > 10) {

                                        if ($page_no <= 4) {
                                            for ($counter = 1; $counter < 8; $counter++) {
                                                if ($counter == $page_no) {
                                                    echo "<li ><a class='pagination__page btn-squae active'>$counter</a></li>";
                                                } else {
                                                    echo "<li><a class='pagination__page btn-squae' href='?page_no=$counter'>$counter</a></li>";
                                                }
                                            }
                                            echo "<li><a>...</a></li>";
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=$second_last'>$second_last</a></li>";
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                        } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=1'>1</a></li>";
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=2'>2</a></li>";
                                            echo "<li><a class='pagination__page btn-squae'>...</a></li>";
                                            for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                                                if ($counter == $page_no) {
                                                    echo "<li class='pagination__page btn-squae active'><a>$counter</a></li>";
                                                } else {
                                                    echo "<li><a class='pagination__page btn-squae' href='?page_no=$counter'>$counter</a></li>";
                                                }
                                            }
                                            echo "<li><a class='pagination__page btn-squae'>...</a></li>";
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=$second_last'>$second_last</a></li>";
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                        } else {
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=1'>1</a></li>";
                                            echo "<li><a class='pagination__page btn-squae' href='?page_no=2'>2</a></li>";
                                            echo "<li><a class='pagination__page btn-squae'>...</a></li>";

                                            for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                                if ($counter == $page_no) {
                                                    echo "<li class='pagination__page btn-squae'><a>$counter</a></li>";
                                                } else {
                                                    echo "<li><a class='pagination__page btn-squae' href='?page_no=$counter'>$counter</a></li>";
                                                }
                                            }
                                        }
                                    }
                                    ?>

                                    <li <?php if ($page_no >= $total_no_of_pages) {
                                            echo "class='disabled'";
                                        } ?>>
                                        <a class='pagination__next btn-squae' <?php if ($page_no < $total_no_of_pages) {
                                                echo "href='?page_no=$next_page'";
                                            } ?>>&#8250;</a>
                                    </li>
                                    <?php if ($page_no < $total_no_of_pages) {
                                        echo "<li><a class='pagination__page btn-squae' href='?page_no=$total_no_of_pages'>&rsaquo;&rsaquo;</a></li>";
                                    } ?>
                                </ul>
                                </nav>



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
