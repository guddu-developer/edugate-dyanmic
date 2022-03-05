<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog-add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>
    <?php include_once "include/link.php";
    include_once "auth.php";
    require_once "conn/conn.php";
    if (isset($_POST["blog"])) {
        $head = $_POST["head"];
        $details = $_POST["details"];
        $desc = $_POST["desc"];
        $filename = $_FILES['img']["name"];
        $tmpname = $_FILES["img"]["tmp_name"];
        $status = $_POST["status"];
        echo $status;
        date_default_timezone_set("Asia/Kolkata");
        $addtime = date("Y-m-d h:i:s:a");
        if (file_exists("images/blog/" . $filename)) {
            echo "<script>alert('Sorry, file already exists.\\nor Rename your file');</script>";
        } else {
            $insert = "INSERT INTO blog (heading,image,description,details,status,add_time,modify_time) VALUES (:head,:img,:de,:details,:st,:ti,'not-update-yet')";
            $query = $conn->prepare($insert);
            $query->bindParam(":img", $filename, PDO::PARAM_STR);
            $query->bindParam(":head", $head, PDO::PARAM_STR);
            $query->bindParam(":de", $desc, PDO::PARAM_STR);
            $query->bindParam(":details", $details, PDO::PARAM_STR);
            $query->bindParam(":st", $status, PDO::PARAM_STR);
            $query->bindParam(":ti", $addtime, PDO::PARAM_STR);
            $query->execute();
            $uploaded = move_uploaded_file($tmpname, "images/blog/" . $filename);
            if ($uploaded) {
                echo "<script>alert('DATA ADDED');window.location.href='blog.php';</script>";
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
                <h2 class="text-center mb-50">ADD BLOGS</h2>

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
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Heading</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="blog Heading Name" name="head">
                    </div>
                </div>

                <div class="mb-15 row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">details</label>
                    <div class="col-sm-9">
                        <textarea type="text" rows="10" class="form-control" id="inputEmail4" placeholder="blog description" name="details"></textarea>
                    </div>
                </div>

                <div class="mb-15 row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea placeholder="blog description" id="example" name="desc" style="height: 350px;width:100%;"></textarea>
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


                <div class="my-50 justify-content-end row">
                    <p class="text-center">
                        <button type="submit" class="btn btn-success" name="blog">ADD BLOG</button>
                    </p>
                </div>
            </form>
        </div>




        <?php include_once "include/script.php"; ?>

        <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/formats/xhtml.min.js"></script>
        <script>
            // Replace the textarea #example with SCEditor
            var textarea = document.getElementById('example');
            sceditor.create(textarea, {
                format: 'xhtml',
                style: 'https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/content/default.min.css'
            });
        </script>
    </div>

</body>

</html>
