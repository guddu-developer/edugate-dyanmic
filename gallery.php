<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <style>
        .g {
            border-bottom: 5px solid #86bc42;
            color: #86bc42;
            font-weight: bold;
        }
    </style>
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
                                <h2 class="captions">Gallery</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active"><a href="#">Gallery</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="section section-padding gallery-page gallery-3column">
                        <div class="container">
                            <div class="group-title-index">
                                <h2 class="center-title">OUR GALLERY</h2>
                                <h4 class="top-title">Having over <b>7 million students</b> worldwide and more than <b>30,000 online courses</b></h4>

                            </div>

                            <div class="grid">

                                <?php $gal = "SELECT * FROM gallery WHERE status='publish'";
                                $gall = $conn->prepare($gal);
                                $gall->execute();
                                $galle = $gall->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($galle as $gallery) { ?>
                                    <div class="grid-item">
                                        
                                        <a href="edu-admin/login/images/gallery/<?= $gallery['image']; ?>"  class="content fancybox-button link">

                                            <span class="content">
                                                <span class="content-title"><?= $gallery['heading']; ?></span>
                                                <span class="content-edu"><i class="icons fa fa-file-text"></i><span><?= $gallery['description']; ?></span></span>
                                            </span><img class="img-responsive" src="edu-admin/login/images/gallery/<?= $gallery['image']; ?>" alt="<?= $gallery['img_alt']; ?>"  /></a>
                                    </div>


                                <?php } ?>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BUTTON BACK TO TOP-->
            <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
        <?php include_once "include/footer.php"; ?>
        <script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
        <script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
        <script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
        <script src="assets/libs/appear/jquery.appear.js"></script>
        <script src="assets/libs/count-to/jquery.countTo.js"></script>
        <script src="assets/libs/wow-js/wow.min.js"></script>
        <script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
        <script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
        <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
        <!-- MAIN JS-->
        <script src="assets/js/main.js"></script>
        <!-- LOADING SCRIPTS FOR PAGE-->
        <script src="assets/js/pages/gallery.js"></script>
        <script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
</body>

</html>
