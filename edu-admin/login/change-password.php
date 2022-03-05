<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <?php include_once "include/link.php"; include_once "auth.php";
    include_once "conn/conn.php"; 
    $select="SELECT * FROM admin";
    $qry=$conn->prepare($select);
    $qry->execute();
    $value=$qry->fetchAll(PDO::FETCH_ASSOC);
    if(isset($_POST["change"])){
        if($_POST["pass"]===$_POST["pass2"]){
            $update="UPDATE admin SET password=:newpass";
            $query=$conn->prepare($update);
            $query->bindParam(":newpass",$_POST["pass"],PDO::PARAM_STR);
            $query->execute();
            echo "<script>alert('PASSWORD CHANGE SUCCESSFULLY');window.location.href='logout.php';</script>";
        }
        else{
            echo "<script>alert('PASSWORD NOT MATCHED');</script>";
        }
    }
   
    ?>
</head>
<body class="menubar-enabled navbar-top-fixed">
    <div class="wrapper">
        <?php  
          include_once "include/header.php";
          include_once "include/side.php";
          
          foreach($value as $val){
        ?>


   <div class="card-body">
       <form class="form-horizontal bg-white p-50" method="POST">
           <h2 class="text-center  mb-50">UPDATE PASSWORD</h2>
    <div class="mb-15 row">
        <label for="inputEmail3" class="col-sm-3 col-form-label" >Username</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" value="<?php echo $val['username']; }?>" readonly>
        </div>
    </div>
    <div class="mb-15 row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
        </div>
    </div>
    <div class="mb-15 row">
        <label for="inputPassword5" class="col-sm-3 col-form-label">Re Password</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword5"
                placeholder="Retype Password" name="pass2">
        </div>
    </div>
    <div class="mb-15 row justify-content-end">
        <div class="col-sm-9">
            <div class="checkbox checkbox-primary">
                <input id="checkbox2" type="checkbox">
                <label for="checkbox2">
                    ACCEPT TEMS & CONDITIONS!
                </label>
            </div>
        </div>
    </div>
    <div class="mb-15 mb-0 justify-content-end row">
        <div class="col-sm-9">
            <button type="submit" class="btn btn-info" name="change">CHANGE </button>
        </div>
    </div>
</form>
   </div>




<?php include_once "include/script.php"; ?>
    </div>
    
</body>
</html>
