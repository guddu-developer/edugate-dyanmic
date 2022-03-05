<!DOCTYPE html>
<html lang="en">

<head>
    <title>course-add</title>
    <?php include_once "include/link.php";
    include_once "auth.php";
    require_once "conn/conn.php";
    if (isset($_POST["course"])) {
        $name = $_POST["name"];
        $catid = $_POST["catid"];
        $dur = $_POST["dur"];
        $pop = $_POST["popular"];
        $desc = $_POST["desc"];
        $home = $_POST["home"];
        if(empty($home)){
            $home=0;
        }
        $filename = $_FILES['img']["name"];
        $tmpname = $_FILES["img"]["tmp_name"];
        $status = $_POST["status"];
        echo $status;
        date_default_timezone_set("Asia/Kolkata");
        $addtime = date("Y-m-d h:i:s:a");
        if (file_exists("images/course/".$filename)) {
            echo "<script>alert('Sorry, file already exists.\\nor Rename your file');</script>";
        } else {
            $insert = "INSERT INTO course (cat_id,image,name,description,duration,popular,showhome,status,add_time,modify_time) VALUES (:catid,:img,:name,:de,:dur,:pop,:home,:st,:ti,'not-update-yet')";
            $query = $conn->prepare($insert);
            $query->bindParam(":catid", $catid, PDO::PARAM_STR);
            $query->bindParam(":img", $filename, PDO::PARAM_STR);
            $query->bindParam(":name", $name, PDO::PARAM_STR);
            $query->bindParam(":dur", $dur, PDO::PARAM_STR);
            $query->bindParam(":pop", $pop, PDO::PARAM_STR);
            $query->bindParam(":de", $desc, PDO::PARAM_STR);
            $query->bindParam(":home", $home, PDO::PARAM_STR);
            $query->bindParam(":st", $status, PDO::PARAM_STR);
            $query->bindParam(":ti", $addtime, PDO::PARAM_STR);
            $query->execute();
            $uploaded = move_uploaded_file($tmpname, "images/course/" . $filename);
            if ($uploaded) {
                echo "<script>alert('DATA ADDED');window.location.href='course.php';</script>";
            }
        }
    }
    ?>
</head>

<body class="menubar-enabled navbar-top-fixed">
    <div class="wrapper">
        <?php
        include_once "include/header.php";
        include_once "include/side.php";
        ?>


        <div class="card-body">

            <form class="form-horizontal bg-white p-50" method="POST" enctype="multipart/form-data">
                <h2 class="text-center mb-50">ADD COURSE</h2>

                <div class="mb-20 row">
                    <label for="inputState" class="col-form-label col-sm-3">Select Course Category</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="catid">
                            <option selected disabled>Select Status</option>
                            <option value="1">PHP</option>
                            <option value="2">HTML</option>
                            <option value="3">CSS</option>
                        </select>
                    </div>
                </div>

                <h3 class="text-center text-primary">IMAGE</h3>

                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 px-50">
                        <label for="">Upload image here:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="img">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
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

                <div class="mb-15 row mt-50">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">NAME</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="course Name" name="name">
                    </div>
                </div>


                <div class="mb-15 row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea type="text" rows="10" class="form-control" id="inputEmail4" placeholder="course description" name="desc"></textarea>
                    </div>
                </div>

                <div class="mb-15 row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="course duration" name="dur">
                    </div>
                </div>



                <div class="mb-20 row">
                    <label for="inputState" class="col-form-label col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="status">
                            <option selected disabled>Select Status</option>
                            <option value="publish">Publish</option>
                            <option value="not-publish">NOT Publish</option>
                        </select>
                    </div>
                </div>


                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck3" name="home" value="1">
                    <label class="form-check-label" for="customCheck3">SHOW-HOME</label>
                </div>

                
                <div class="my-50 justify-content-end row">
                    <p class="text-center">
                        <button type="submit" class="btn btn-success" name="course">ADD COURSE</button>
                    </p>
                </div>
            </form>
        </div>




        <?php include_once "include/script.php"; ?>
    </div>

</body>

</html>
