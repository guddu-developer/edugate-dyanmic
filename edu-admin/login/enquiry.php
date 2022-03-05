
<?php
   require "conn/conn.php";
if (isset($_GET["did"])) {
    $did = $_GET["did"];
    $delete = "DELETE FROM enquiry WHERE id=:did";
    $query = $conn->prepare($delete);
    $query->bindParam(":did", $did, PDO::PARAM_STR);
    $query->execute();
    echo "<script>alert('deleted');window.location.href='enquiry.php';</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
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
            <div class="bg-white p-50">
                <h2 class="text-center mb-50">ENQUIRYS</h2>

                <table id="ble" class="display" class="text-center">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Mobile</th>
                            <th>Message</th>
                            <th>Receving-time</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     

                        $select = "SELECT * FROM enquiry";
                        $query = $conn->prepare($select);
                        $query->execute();

                        $value = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($value as $val) {
                        ?>
                            <tr>
                                <td><?php echo $val["id"]; ?></td>
                                <td><?php echo $val["name"]; ?></td>
                                <td><?php echo $val["email"]; ?></td>
                                <td><?php echo $val["course"]; ?></td>
                                <td><?php echo $val["mobile"]; ?></td>
                                <td><?php echo $val["message"]; ?></td>
                                <td><?php echo $val["timestamp"]; ?></td>
                                <td><a href="enquiry.php?did=<?php echo $val['id']; ?>" class="text-danger">DELETE</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div>



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
