<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .co {
            border-bottom: 5px solid #86bc42;
            color: #86bc42;
            font-weight: bold;
        }
    </style>
    <title>CONTACT US</title>
    <?php include "include/links.php"; ?>
</head>

<body>
    <?php include_once "include/header.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $course = $_POST['course'];
        $msg = $_POST['message'];
        date_default_timezone_set("Asia/Kolkata");
        $addtime = date("Y-m-d h:i:s:a");

        $inse = "INSERT INTO enquiry (name,email,course,mobile,message,timestamp) VALUES (:na,:em,:co,:mo,:msg,:ti)";
        $query = $conn->prepare($inse);
        $query->bindParam(":na", $name, PDO::PARAM_STR);
        $query->bindParam(":em", $email, PDO::PARAM_STR);
        $query->bindParam(":mo", $mobile, PDO::PARAM_STR);
        $query->bindParam(":co", $course, PDO::PARAM_STR);
        $query->bindParam(":msg", $msg, PDO::PARAM_STR);
        $query->bindParam(":ti", $addtime, PDO::PARAM_STR);
        if ($query->execute()) {
            echo "<script>window.location.href='thankyou.php';</script>";
        }
    }


    ?>


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
                                <h2 class="captions">Contact</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="contact.php">Contact</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="section nav-subscribe">
                        <div class="container">
                            <div class="nav-subscribe-wrapper">
                                <div class="nav-subscribe-left">
                                    <p class="subscribe-text">Subscribe <b class="focus">Edugate</b> to learn new creative skill</p>
                                </div>
                                <div class="nav-subscribe-right">
                                    <button class="btn btn-green btn-bold"><span>SUBSCRIBE NOW</span></button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- =======================formm start===================== -->


                    <div class="section section-padding contact-main">
                        <div class="container">
                            <div class="contact-main-wrapper">
                                <div class="row contact-method">
                                    <div class="col-md-4">
                                        <?php foreach ($sitedata as $site) { ?>
                                            <div class="method-item"><i class="fa fa-map-marker"></i>

                                                <p class="sub">COME TO</p>

                                                <div class="detail">
                                                    <p><?= $site['address']; ?></p>

                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-phone"></i>

                                            <p class="sub">CALL TO</p>

                                            <div class="detail">
                                                <p>Local: 1-800-123-hello</p>

                                                <p>Mobile: <?= $site['mobile']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-envelope"></i>

                                            <p class="sub">CONNECT TO</p>

                                            <div class="detail">
                                                <p><?= $site['email']; ?></p>

                                                <p>www.edugate.com</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                                <form class="bg-w-form contact-form" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">NAME <span class="highlight">*</span></label><input type="text" placeholder="NAME HERE" class="form-control form-input" name="name" />
                                                <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">EMAIL <span class="highlight">*</span></label><input type="text" placeholder="EMAIL HERE" class="form-control form-input" name="email" />
                                                <!--label.control-label.form-label.warning-label(for="")-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">COURSE</label><select class="form-control form-input selectbox" name="course">
                                                    <option disabled selected>PLEASE SELECT</option>
                                                    <option value="web-designing">WEB DESIGNING</option>
                                                    <option value="web-development">WEB DEVELOPMENT</option>
                                                    <option value="digital-marketing">DIGITAL MARKETING</option>
                                                </select>
                                                <!--label.control-label.form-label.warning-label(for="", hidden)-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">MOBILE</label><input type="text" placeholder="MOBILE HERE" class="form-control form-input" name="mobile" />
                                                <!--label.control-label.form-label.warning-label(for="", hidden)-->
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-question form-group"><label class="control-label form-label">HOW CAN WE HELP? <span class="highlight">*</span></label><textarea class="form-control form-input" name="message"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="contact-submit">
                                        <button type="submit" class="btn btn-contact btn-green" name="submit"><span>SUBMIT CONTACT</span></button>
                                    </div>
                                </form>
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
