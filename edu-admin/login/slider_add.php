<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "include/link.php";
    include_once "auth.php";
    require_once "conn/conn.php";

if(isset($_POST["slider"])){

    $para = $_POST["par"];
    $head = $_POST["head"];
    $desc = $_POST["desc"];
    $btn = $_POST["btn"];
    $btnlink = $_POST["btn_link"];
    $filename = $_FILES['img']["name"];
    $tmpname = $_FILES["img"]["tmp_name"];
 
    date_default_timezone_set("Asia/Kolkata");
    $addtime = date("Y-m-d h:i:s:a");
    if (file_exists("images/slider/" . $filename)) {
        echo "<script>alert('Sorry, file already exists.');</script>";
    } else {
        $insert = "INSERT INTO slider (image,paragraph,heading,button,url,description,add_time,modify_time) VALUES (:img,:para,:head,:btn,:btnlk,:de,:ti,'not')";
        $query = $conn->prepare($insert);
        $query->bindParam(":img", $filename, PDO::PARAM_STR);
        $query->bindParam(":para", $para, PDO::PARAM_STR);
        $query->bindParam(":head", $head, PDO::PARAM_STR);
        $query->bindParam(":btn", $btn, PDO::PARAM_STR);
        $query->bindParam(":btnlk", $btnlink, PDO::PARAM_STR);
        $query->bindParam(":de", $btn, PDO::PARAM_STR);
        $query->bindParam(":ti", $addtime, PDO::PARAM_STR);
        $query->execute();
        $uploaded = move_uploaded_file($tmpname, "images/slider/" . $filename);
        if ($uploaded) {
            echo "<script>alert('SLIDER ADDED');window.location.href='slider.php';</script>";
        }
    }
}
    
    
    ?>
    <title>Slider-admin</title>
</head>

<body class="menubar-enabled navbar-top-fixed">
    <div class="wrapper">
        <?php include_once "include/header.php";
        include_once "include/side.php";

        ?>

        <div class="card-body">


            <form class="form-horizontal bg-white p-50" method="POST" enctype="multipart/form-data">
                <h2 class="text-center mb-50">ADD SLIDER IMAGE, LINK, DESCRIPTION</h2>

                <h3 class="text-center text-primary">IMAGE</h3>

                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 px-50">
                        <label for="">Upload image here:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="img">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>

                        <div class="form-group mb-20 mt-20"><label for="">Image alt here:</label>
                            <input type="text" class="form-control" placeholder="slider image alt here" name="img_alt">
                        </div>
                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });
                        </script>

                    </div>

                    <div class="col-md-5 col-sm-12 col-xs-12 px-15">
                        <img class="float-right mr-50" height="200" width="300px" src="css/image.webp">
                    </div>
                </div>
                
                <h3 class="text-center text-warning">Slider Content</h3>

                <div class="mb-15 row mt-50">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Paragraph</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="slide first paragraph" name="par">
                    </div>
                    
                <div class="mb-15 row mt-50">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Heading</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="slider heading" name="head">
                    </div>
                </div>
                <div class="mb-15 row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="slider description" name="desc">
                    </div>
                </div>
                <h3 class="text-center text-success mt-20">Slider Button </h3>
                <div class="mb-15 row mt-50">
                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Button Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="slider button name" name="btn">
                    </div>
                </div>
                <div class="mb-15 row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Button Link</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="slider button link" name="btn_link">
                    </div>
                </div>
                 

                <div class="my-50 justify-content-end row">
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary" name="slider">ADD SLIDER IMAGE</button>
                    </p>
                </div>
            </form>





        </div>


    </div>
    <?php include_once "include/script.php";  ?>

</body>

</html>
