<?php    require "conn/conn.php";

 date_default_timezone_set("Asia/Kolkata");
if(isset($_POST["slideimg"])){
        $idimg=$_POST['id'];
    $updatetime = date("Y-m-d h:i:s:a");
       $filename = $_FILES['img']["name"];
        $tmpname = $_FILES["img"]["tmp_name"];
        $updateimg="UPDATE slider SET image=:img,modify_time=:ti WHERE id=:uimg";
        $query=$conn->prepare($updateimg);
        $query->bindParam(":uimg",$idimg,PDO::PARAM_STR);
        $query->bindParam(":img",$filename,PDO::PARAM_STR);
        $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
        $query->execute();
         $uploaded = move_uploaded_file($tmpname, "images/slider/".$filename);
         if($uploaded){
        echo "<script>alert('IMGAGE UPDATED');window.location.href='slider.php';</script>";
         }
}
    if (isset($_POST["slideupdate"])) {
        $para = $_POST["para"];
        $head = $_POST["head"];
        $btname = $_POST["btnname"];
        $btnurl = $_POST["btnurl"];
        $desc = $_POST["desc"];
        $updatetime = date("Y-m-d h:i:s:a");
        $uid=$_POST["id"];     
            
            $insert = "UPDATE slider SET paragraph=:para,heading=:head,button=:btnn,url=:btnu,description=:de,modify_time=:ti WHERE id=:uid";
            $query = $conn->prepare($insert);
            $query->bindParam(":uid", $uid, PDO::PARAM_STR);
            $query->bindParam(":para", $para, PDO::PARAM_STR);
            $query->bindParam(":head", $head, PDO::PARAM_STR);
            $query->bindParam(":btnn", $btname, PDO::PARAM_STR);
            $query->bindParam(":btnu", $btnurl, PDO::PARAM_STR);
            $query->bindParam(":de", $desc, PDO::PARAM_STR);
            $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
            $query->execute();
           
            echo "<script>alert('DATA MDIFIED');window.location.href='slider.php';</script>";
       
    }


if (isset($_GET["did"])) {
    $did = $_GET["did"];
    $delete = "DELETE FROM slider WHERE id=:did";
    $query = $conn->prepare($delete);
    $query->bindParam(":did", $did, PDO::PARAM_STR);
    $query->execute();
    echo "<script>alert('deleted');window.location.href='testimonial.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Slider</title>
    <?php include_once "include/link.php";
    include_once "auth.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="table/datatables.css">
    <script type="text/javascript" charset="utf8" src="table/datatables.js"></script>
</head>

<body class="menubar-enabled navbar-top-fixed">
    <div class="wrapper">
        <?php
        include_once "include/header.php";
        include_once "include/side.php";
        ?>

        <div class="card-body">
            <div class="bg-white p-50" id="not">
                <h2 class="text-center mb-50">SLIDER</h2>

                <table id="ble" class="display" class="text-center">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Image</th>
                            <th>paragraph</th>
                            <th>Heading</th>
                            <th>description</th>
                            <th>Button</th>
                            <th>URL</th>
                            <th>Add-time</th>
                            <th>Modify-time</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      

                        $select = "SELECT * FROM slider";
                        $query = $conn->prepare($select);
                        $query->execute();

                        $value = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($value as $val) {
                        ?>
                            <tr>
                                <td><?php echo $val["id"]; ?></td>
                                <td><img height="200" width="200" src="images/slider/<?php echo $val["image"]; ?>"></td>
                                <td><?php echo $val["paragraph"]; ?></td>
                                <td><?php echo $val["heading"]; ?></td>
                                <td><?php echo $val["description"]; ?></td>
                                <td><?php echo $val["button"]; ?></td>
                                <td><?php echo $val["url"]; ?></td>
                                <td><?php echo $val["add_time"]; ?></td>
                                <td><?php echo $val["modify_time"]; ?></td>
                                <td><a href="slider.php?eid=<?php echo $val['id']; ?>" class="text-primary">EDIT</a></td>
                                <td><a href="slider.php?did=<?php echo $val['id']; ?>" class="text-danger" onclick="return confirm('ARE YOU SURE')">DELETE</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div></div>
      




<!-- ============================================end of page start edit -->





<?php if(isset($_GET["eid"])){
    $eid=$_GET["eid"];
    echo "<script>document.getElementById('not').style.display='none';</script>";
    // echo "<script>alert('".$eid."');</script>";
    $selectid="SELECT * FROM slider WHERE id=:eid";
    $query=$conn->prepare($selectid);
    $query->bindParam(":eid",$eid,PDO::PARAM_STR);
    $query->execute();
   $get=$query->fetchAll(PDO::FETCH_ASSOC);
    foreach($get as $e){
?>

        <div class="card-body shadow" > 

            <form class="form-horizontal bg-white p-50" method="POST" enctype="multipart/form-data">
                <a href="slider.php" class="avatar avatar-md bg-light text-muted float-right">X</a>
                <h2 class="text-center mb-50">UPDATE SLIDER IMAGE</h2>
               
              <input type="hidden" name="id" value="<?=$e['id']; ?>">
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

<div class="col-md-6"><button type="submit" class="btn btn-warning m-20" name="slideimg">UPDATE IMAGE</button></div>


                    </div>
                                                                     
                    <div class="col-md-5 col-sm-12 col-xs-12 px-15">
                        <img class="float-right mr-50" height="200" width="300px" src="images/slider/<?php echo $e['image']; ?>">
                    </div>
                </div>

                <div class="mb-15 row mt-50">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Paraghaph</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="slider paragraph" name="para" 
                        value="<?=$e["paragraph"]; ?>">
                    </div>
                </div>
                <div class="mb-15 row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Heading</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="desig" placeholder="Slider heading" name="head" value="<?=$e["heading"]; ?>">
                    </div>
                </div>
                <div class="mb-15 row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Button Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="desig" placeholder="button name" name="btnname" value="<?=$e["button"]; ?>">
                    </div>
                </div>
                <div class="mb-15 row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Button url</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="desig" placeholder="Button url" name="btnurl" value="<?=$e["url"]; ?>">
                    </div>
                </div>

                <div class="mb-15 row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea rows="10" id="desc" class="form-control" placeholder="slider description" name="desc"> <?=$e["description"]; ?></textarea>
                    </div>
                </div>

             


                <div class="my-50 justify-content-end row">
                    <div class="col-md-3"><button type="submit" class="btn btn-success" name="slideupdate">UPDATE SLIDER</button></div>
                    <div class="col-md-2"><button type="button" class="btn btn-danger float-right"  onclick="window.location.href='slider.php';">close</button></div>
                </div>
            </form>
        </div>

        <?php } } ?>











        <?php include_once "include/script.php"; ?>
    </div>  


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
        });
    </script>
</body>

</html>
