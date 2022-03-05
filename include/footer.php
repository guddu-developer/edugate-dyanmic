 <!-- BUTTON BACK TO TOP-->
 <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>


 <?php

    foreach ($sitedata as $site) {

    ?>



     <!-- FOOTER-->
     <footer>
         <div class="footer-main">
             <div class="container">
                 <div class="footer-main-wrapper">
                     <div class="row">
                         <div class="col-2">
                             <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                                 <div class="edugate-widget widget">
                                     <div class="title-widget">CONTACT US</div>
                                     <div class="content-widget">
                                         <!-- <p>Edugate is a great start for an education personnel or organization to start the online business with 1 Click.</p> -->

                                         <div class="info-list">
                                             <ul class="list-unstyled">
                                                 <li><i class="fa fa-envelope-o"></i><a href="mailto:<?= $site['email']; ?>"><?= $site["email"]; ?></a></li>
                                                 <li><i class="fa fa-phone"></i><a href="tel:<?= $site['mobile']; ?>">P: <?= $site['mobile']; ?></a></li>
                                                 <li><i class="fa fa-map-marker"></i><a href="<?= $site['address_link']; ?>">
                                                         <p><?= $site['address']; ?></p>
                                                     </a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                                 <div class="useful-link-widget widget">
                                     <div class="title-widget">USEFUL LINKS</div>
                                     <div class="content-widget">
                                         <div class="useful-link-list">
                                             <div class="row">
                                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                                     <ul class="list-unstyled pl-3">
                                                         <!-- <li><i class="fa fa-angle-right"></i><a href="index.php">Home</a></li> -->
                                                         <li><i class="fa fa-angle-right"></i><a href="course.php">Courses</a></li>
                                                      
                                                         <li><i class="fa fa-angle-right"></i><a href="blog.php">Blog</a></li>
                                                         <li><i class="fa fa-angle-right"></i><a href="contact.php">Contact</a></li>
                                                       <li><i class="fa fa-angle-right"></i><a href="about.php">About us</a></li>
                                                         <li><i class="fa fa-angle-right"></i><a href="gallery.php">Gallery</a></li>
                                                       
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-2">
                             <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                                 <div class="gallery-widget widget">
                                     <div class="title-widget">GALLERY</div>
                                     <div class="content-widget">
                                         <div class="gallery-list"><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-01.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-02.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-03.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-04.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-05.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-06.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-07.jpg" alt="" class="img-responsive" /></a><a href="gallery.php" class="thumb"><img src="assets/images/gallery/gallery-08.jpg" alt="" class="img-responsive" /></a></div>
                                         <div class="clearfix"></div>
                                         <a href="gallery.php" class="view-more">View more&nbsp;<i class="fa fa-angle-double-right mls"></i></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                                 <div class="mailing-widget widget">
                                     <div class="title-widget">SOCIAL MEDIA</div>
                                     <div class="content-wiget">


                                         <div class="socials stu"><a href="<?= $site['facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>


                                             <a href="<?= $site['linkedin']; ?>" class="google">
                                                 <i class="fa fa-linkedin"></i></a>



                                             <a href="<?= $site['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>


                                             <a href="<?= $site['instagram']; ?>" class="pinterest"><i class="fa fa-instagram"></i></a>
                                             
                                        
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="hyperlink">
                     <div class="pull-left hyper-left">
                         <ul class="list-inline">
                             <li><a href="index.php">HOME</a></li>
                             <li><a href="course.php">COURSES</a></li>
                             <li><a href="about.php">ABOUT</a></li>
                             <li><a href="blog.php">BLOG</a></li>
                             <li><a href="contact.php">CONTACT</a></li>
                         </ul>
                     </div>
                     <div class="pull-right hyper-right">@ COPYRIGHT EDUGATE </div>
                 </div>
             </div>
         </div>
     </footer>
 <?php } ?>


 <!-- LOADING-->
 <div class="body-2 loading">
     <div class="dots-loader"></div>
 </div>
 <!-- ///////////scripts -->
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
 <script src="assets/js/pages/homepage.js"></script>
