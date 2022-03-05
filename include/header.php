<?php
include_once "edu-admin/login/conn/conn.php";

$sitea = "SELECT * FROM sitesetting";
$siteq = $conn->prepare($sitea);
$siteq->execute();

$sitedata = $siteq->fetchAll(PDO::FETCH_ASSOC);
foreach ($sitedata as $site) {
?>

    <header>
        <div class="header-topbar">
            <div class="container">
                <div class="topbar-left pull-left">
                    <div class="email"><a href="mailto:<?= $site['email']; ?>"><i class="topbar-icon fa fa-envelope-o">
                            </i><span><?= $site["email"]; ?></span></a></div>
                    <div class="hotline"><a href="tel:<?= $site['mobile']; ?>"><i class="topbar-icon fa fa-phone"></i><span>+91 <?= $site['mobile']; ?></span></a></div>
                </div>
                <div class="topbar-right pull-right">

                    <div class="socials">
                        <a href="<?= $site['facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="<?= $site['linkedin']; ?>" class="google"><i class="fa fa-linkedin"></i></a>
                        <a href="<?= $site['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="<?= $site['instagram']; ?>" class="pinterest"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main homepage-01">
            <div class="container">
                <div class="header-main-wrapper">
                    <div class="navbar-heade">
                        <div class="logo pull-left"><a href="index.php" class="header-logo"><img src="edu-admin/login/images/logo/<?= $site['logo']; ?>" alt="<?= $site['logo_alt']; ?>" /></a></div>
                        <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <nav class="navigation collapse navbar-collapse pull-right">
                        <ul class="nav-links nav navbar-nav">
                            <li class="dropdown h"><a href="index.php" class="main-menu">Home</a></li>
                            <li><a href="course.php" class="main-menu c">course</a></li>

                            <li><a href="blog.php" class="main-menu b">blog</a></li>

                            <li class="dropdown"><a href="gallery.php" class="main-menu g">gallery</a></li>
                            <li class="dropdown"><a href="about.php" class="main-menu a">About us</a></li>


                            <li><a href="contact.php" class="main-menu co">Contact</a></li>
                            <!-- <li class="button-search">
                                <p class="main-menu"><i class="fa fa-search"></i></p>
                            </li> -->
                            <!-- <div class="nav-search hide">
                                <form><input type="text" placeholder="Search" class="searchbox" />
                                    <button type="submit" class="searchbutton fa fa-search"></button>
                                </form>
                            </div> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<?php } ?>
