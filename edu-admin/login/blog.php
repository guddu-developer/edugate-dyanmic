<?php  include_once "auth.php";
require_once "conn/conn.php";
date_default_timezone_set("Asia/Kolkata");
if (isset($_POST["blogimg"])) {
    $idimg = $_POST['id'];
    $updatetime = date("Y-m-d h:i:s:a");
    $filename = $_FILES['img']["name"];
    $tmpname = $_FILES["img"]["tmp_name"];
    $updateimg = "UPDATE blog SET image=:img,modify_time=:ti WHERE id=:uimg";
    $query = $conn->prepare($updateimg);
    $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
    $query->bindParam(":img", $filename, PDO::PARAM_STR);
    $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
    $query->execute();
    $uploaded = move_uploaded_file($tmpname, "images/blog/" . $filename);
    if ($uploaded) {
        echo "<script>alert('IMGAGE UPDATED');window.location.href='blog.php';</script>";
    }
}
if (isset($_POST["blogupdate"])) {
    $head = $_POST["head"];
    $desc = $_POST["desc"];
    $detail = $_POST["detail"];
    $status = $_POST["status"];
    $updatetime = date("Y-m-d h:i:s:a");
    $uid = $_POST["id"];

    $insert = "UPDATE blog SET heading=:head,details=:deta,description=:de,status=:st,modify_time=:ti WHERE id=:uid";
    $query = $conn->prepare($insert);
    $query->bindParam(":uid", $uid, PDO::PARAM_STR);
    $query->bindParam(":head", $head, PDO::PARAM_STR);
    $query->bindParam(":deta", $detail, PDO::PARAM_STR);
    $query->bindParam(":de", $desc, PDO::PARAM_STR);
    $query->bindParam(":st", $status, PDO::PARAM_STR);
    $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
    $query->execute();

    echo "<script>alert('DATA MDIFIED');window.location.href='blog.php';</script>";
}






if (isset($_GET["did"])) {
    $did = $_GET["did"];
    $delete = "DELETE FROM blog WHERE id=:did";
    $query = $conn->prepare($delete);
    $query->bindParam(":did", $did, PDO::PARAM_STR);
    $query->execute();
    echo "<script>alert('deleted');window.location.href='blog.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs</title>
    <?php include_once "include/link.php";
   ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="table/datatables.css">
    <script type="text/javascript" charset="utf8" src="table/datatables.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="table/Buttons-2.2.2/js/buttons.bootstrap.js"> 
    <script type="text/javascript" charset="utf8" src="Buttons-2.2.2/js/buttons.bootstrap4.js"></script>
    <script type="text/javascript" charset="utf8" src=""></script>
    <script type="text/javascript" charset="utf8" src="table/datatables.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>
</head>

<body class="menubar-enabled navbar-top-fixed">
    <div class="wrapper">
        <?php
        include_once "include/header.php";
        include_once "include/side.php";
        ?>

        <div class="card-body">
            <div class="bg-white p-50" id="not">
                <h2 class="text-center mb-50 text-primary">BLOGS</h2>

                <table id="ble" class="display" class="text-center">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>details</th>
                            <th>description</th>
                            <th>Status</th>
                            <th>Add-time</th>
                            <th>Modify-time</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT * FROM blog";
                        $query = $conn->prepare($select);
                        $query->execute();

                        $value = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($value as $val) {
                        ?>
                            <tr>
                                <td><?php echo $val["id"]; ?></td>
                                <td><img height="200" width="200" src="images/blog/<?php echo $val["image"]; ?>"></td>
                                <td><?php echo $val["heading"]; ?></td>
                                <td><?php echo $val["details"]; ?></td>
                                <td><?php echo $val["description"]; ?></td>
                                <td><?php echo $val["status"]; ?></td>
                                <td><?php echo $val["add_time"]; ?></td>
                                <td><?php echo $val["modify_time"]; ?></td>
                                <td><a href="blog.php?eid=<?php echo $val['id']; ?>" class="text-primary">EDIT</a></td>
                                <td><a href="blog.php?did=<?php echo $val['id']; ?>" onclick="return confirm('ARE YOU SURE TO DELETE')" class="text-danger">DELETE</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>






                


            </div>
        </div>


        <?php if (isset($_GET["eid"])) {
            $eid = $_GET["eid"];
            echo "<script>document.getElementById('not').style.display='none';</script>";
            // echo "<script>alert('".$eid."');</script>";
            $selectid = "SELECT * FROM blog WHERE id=:eid";
            $query = $conn->prepare($selectid);
            $query->bindParam(":eid", $eid, PDO::PARAM_STR);
            $query->execute();
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($get as $e) {
        ?>

                <div class="card-body">

                    <form class="form-horizontal bg-white p-50" method="POST" enctype="multipart/form-data">
                        <a href="blog.php" class="avatar avatar-md bg-light text-muted float-right">X</a>
                        <h2 class="text-center mb-50">UPDATE BLOG </h2>

                        <input type="hidden" name="id" value="<?= $e['id']; ?>">
                        <h3 class="text-center text-primary">IMAGE</h3>

                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12 px-50">
                                <label for="">Upload image here:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="img">
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>
                                <script>
                                    // Add the following code if you want the name of the file appear on select
                                    $(".custom-file-input").on("change", function() {
                                        var fileName = $(this).val().split("\\").pop();
                                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                    });
                                </script>

                                <div class="col-md-6"><button type="submit" class="btn btn-warning m-20" name="blogimg">UPDATE IMAGE</button></div>


                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12 px-15">
                                <img class="float-right mr-50" height="200" width="300" src="images/blog/<?php echo $e['image']; ?>">
                            </div>
                        </div>

                        <div class="mb-15 row mt-50">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Heading</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Heading Name" name="head" value="<?= $e["heading"]; ?>">
                            </div>
                        </div>

                        <div class="mb-15 row">
                            <label for="inputEmail4" class="col-sm-3 col-form-label">Details</label>
                            <div class="col-sm-9">
                                <textarea rows="10" id="detail" class="form-control" placeholder="blog description" name="detail"> <?= $e["details"]; ?></textarea>
                            </div>
                        </div>


                        <div class="mb-15 row">
                            <label for="inputEmail4" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea placeholder="blog description" id="example" name="desc" style="height: 350px;width:100%;"><?=$e['description'];?></textarea>
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
                            <div class="col-md-3"><button type="submit" class="btn btn-success" name="blogupdate">UPDATE TESTIMONIAL</button></div>
                            <div class="col-md-2"><button type="button" class="btn btn-danger float-right" onclick="window.location.href='blog.php';">close</button></div>
                        </div>
                    </form>
                </div>

        <?php }
        } ?>
    </div>
    <?php include_once "include/script.php"; ?>



    <script>
        $(document).ready(function() {
            $('#ble').DataTable();
            $('#myTable').DataTable({
                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [4],
                    orderData: [4, 0]
                }]
            });


            // $('#jsadhj').DataTable({
            //     dom: 'Bfrtip',
            //     buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            // });

            // var table = $('#ble').DataTable({
            //     buttons: [
            //         'copy', 'excel', 'pdf'
            //     ]
            // });

            // table.buttons().container()
            //     .appendTo($('.card-body:eq(0)', table.table().container()));

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/formats/xhtml.min.js"></script>
    <script>
        // Replace the textarea #example with SCEditor
        var textarea = document.getElementById('example');
        sceditor.create(textarea, {
            format: 'xhtml',
            style: 'https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/content/default.min.css'
        });

        </script>
        </body>

        </html>
