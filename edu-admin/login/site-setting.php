<?php
  require_once "conn/conn.php";
    date_default_timezone_set("Asia/Kolkata");
if(isset($_POST["logoupdate"])){
  // $idimg = $_POST['id'];
  $idimg = 1;
  $logoalt=$_POST["logoalt"];
  // echo "<script>alert('$logoalt')</script>";
  $updatetime = date("Y-m-d h:i:s:a");
  $filename = $_FILES['log']["name"];
  $tmpname = $_FILES["log"]["tmp_name"];
  $logou="UPDATE sitesetting SET logo=:logo,logo_alt=:logoalt,logo_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($logou);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":logo", $filename, PDO::PARAM_STR);
  $query->bindParam(":logoalt", $logoalt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
  $query->execute();
  $uploaded = move_uploaded_file($tmpname,"images/logo/".$filename);
  if ($uploaded) {
    echo "<script>alert('LOGO UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["emailupdate"])){
  $idimg = 1;
  $email=$_POST["email"];
  $emailalt=$_POST["emailalt"];
  $updatetime = date("Y-m-d h:i:s:a");
  $emailu="UPDATE sitesetting SET email=:email,email_alt=:emailalt,email_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($emailu);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":email", $email, PDO::PARAM_STR);
  $query->bindParam(":emailalt", $emailalt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('EMAIL UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["mobileupdate"])){
  $idimg = 1;
  $mobile=$_POST["mobile"];
  $mobilealt=$_POST["mobilealt"];
  $updatetime = date("Y-m-d h:i:s:a");
  $mobileu="UPDATE sitesetting SET mobile=:mobile,mobile_alt=:mobilealt,mobile_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($mobileu);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":mobile", $mobile, PDO::PARAM_STR);
  $query->bindParam(":mobilealt", $mobilealt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('MOBILE UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["facebookupdate"])){
  $idimg = 1;
  $facebook=$_POST["facebook"];
  $facebookalt=$_POST["facebookalt"];
  $updatetime = date("Y-m-d h:i:s:a");
  $facebooku="UPDATE sitesetting SET facebook=:facebook,facebook_alt=:facebookalt,facebook_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($facebooku);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":facebook", $facebook, PDO::PARAM_STR);
  $query->bindParam(":facebookalt", $facebookalt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('FACEBOOK UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["twitterupdate"])){
  $idimg = 1;
  $twitter=$_POST["twitter"];
  $twitteralt=$_POST["twitteralt"];
  $updatetime = date("Y-m-d h:i:s:a");
  $twitu="UPDATE sitesetting SET twitter=:twitter,twitter_alt=:twitteralt,twitter_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($twitu);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":twitter", $twitter, PDO::PARAM_STR);
  $query->bindParam(":twitteralt", $twitteralt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('TWITTER UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["linkedinupdate"])){
  $idimg = 1;
  $linkedin=$_POST["linkedin"];
  $linkedinalt=$_POST["linkedinalt"];
  $updatetime = date("Y-m-d h:i:s:a");
  $linku="UPDATE sitesetting SET linkedin=:linkedin,linkedin_alt=:linkedinalt,linkedin_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($linku);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":linkedin", $linkedin, PDO::PARAM_STR);
  $query->bindParam(":linkedinalt", $linkedinalt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('LINKEDIN UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["instaupdate"])){
  $idimg = 1;
  $insta=$_POST["insta"];
  $instaalt=$_POST["instaalt"];
  $updatetime = date("Y-m-d h:i:s:a");
  $instau="UPDATE sitesetting SET instagram=:insta,instagram_alt=:instaalt,instagram_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($instau);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":insta", $insta, PDO::PARAM_STR);
  $query->bindParam(":instaalt", $instaalt, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('INSTAGARAM UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["addressupdate"])){
  $idimg = 1;
  $address=$_POST["address"];
  $addresslnk=$_POST["gaddress"];
  $updatetime = date("Y-m-d h:i:s:a");
  $addu="UPDATE sitesetting SET address=:address,address_link=:addresslnk,address_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($addu);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":address", $address, PDO::PARAM_STR);
  $query->bindParam(":addresslnk", $addresslnk, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('ADDRESS UPDATED');window.location.href='site-setting.php';</script>";
  }
}
if(isset($_POST["titleupdate"])){
  $idimg = 1;
  $title=$_POST["title"];
  $updatetime = date("Y-m-d h:i:s:a");
  $titleu="UPDATE sitesetting SET page_title=:page,page_title_update=:ti WHERE id=:uimg";
  $query = $conn->prepare($titleu);
  $query->bindParam(":uimg", $idimg, PDO::PARAM_STR);
  $query->bindParam(":page", $title, PDO::PARAM_STR);
  $query->bindParam(":ti", $updatetime, PDO::PARAM_STR);
   if ($query->execute()) {
    echo "<script>alert('PAGE TITLE UPDATED');window.location.href='site-setting.php';</script>";
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SITE-SETTINGS</title>
    <?php include_once "include/link.php"; include_once "auth.php"; ?>

</head>

<body class="menubar-enabled navbar-top-fixed">

    <div class="wrapper">

    <?php
    include_once "include/header.php";
    include_once "include/side.php";
    ?>

<div class="conatiner-fluid mt-15 ">
<?php 
$select="SELECT * FROM sitesetting";
$query=$conn->prepare($select);
$query->execute();
$value=$query->fetchAll(PDO::FETCH_ASSOC);
foreach($value as $data){
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div style="background-color: white;margin:10px 20px;border-radius:7px;box-shadow:1px 1px 5px gray">
     <h1 class="text-center text-black py-50">WELCOME TO SITE SETTING</h1>
            <h2 class="text-center text-primary">LOGO</h2>
<div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 px-50">
<form method="POST" enctype="multipart/form-data">
 
      <label for="">Upload logo here:</label>
          <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="log">
    <label class="custom-file-label" for="customFile">Choose Logo</label>
  </div>
      
          <div class="form-group mb-20>"><label for="">logo alt here:</label>
    <input type="text" class="form-control"   placeholder="Logo alt here" value="<?=$data["logo_alt"];?>" name="logoalt">
  </div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    <button type="submit" class="btn btn-primary m-50 float-right" name="logoupdate">UPDATE LOGO</button>
  </form>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 px-15">
                <img class="float-right mr-50" height="70" width="200px" src="images/logo/<?php echo $data["logo"]; ?>">
            </div>
     
</div>     


            
<div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-danger">EMAIL</h2>
<form method="POST"  >      
          <div class="form-group mb-20"><label for="">Email here:</label>
    <input type="email" class="form-control"   placeholder="email here" name="email" value="<?=$data["email"];?>">
  </div>
      
          <div class="form-group mb-20"><label for="">Email alt here:</label>
    <input type="text" class="form-control"   placeholder="email alt here" name="emailalt"  value="<?=$data["email_alt"];?>">
  </div>
 
    <button type="submit" class="btn btn-danger m-50 float-right" name="emailupdate">UPDATE EMAIL</button>
  </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-success">MOBILE</h2>
                 <form  method="POST">
          <div class="form-group mb-20"><label for="">Mobile here:</label>
    <input type="text" class="form-control"   placeholder="mobile here" value="<?=$data['mobile'];?>" name="mobile">
  </div>
          <div class="form-group mb-20"><label for="">Mobile alt here:</label>
    <input type="text" class="form-control"   placeholder="mobile alt here" value="<?=$data['mobile_alt'];?>" name="mobilealt">
  </div>
 
    <button type="submit" class="btn btn-success m-50 float-right" name="mobileupdate">UPDATE MOBILE</button>
  </form>
            </div>
     
</div> 


            
<div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-info">FACEBOOK</h2>
<form method="POST" >      
          <div class="form-group mb-20"><label for="">FACEBOOK PROFILE LINK here:</label>
    <input type="text" class="form-control"   placeholder="Facebook Profile Link here" value="<?=$data['facebook'];?>" name="facebook">
  </div>
      
          <div class="form-group mb-20"><label for="">facebook alt here:</label>
    <input type="text" class="form-control"   placeholder="Facebook alt here" value="<?=$data['facebook_alt'];?>" name="facebookalt">
  </div>
 
    <button type="submit" class="btn btn-info m-50 float-right" name="facebookupdate">UPDATE FACEBOOK LINK</button>
  </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-primary">TWITTER</h2>
                 <form method="POST" >
          <div class="form-group mb-20"><label for="">Twitter Profile Link here:</label>
    <input type="text" class="form-control"   placeholder="Twitter here" name="twitter" value="<?=$data['twitter'];?>">
  </div>
          <div class="form-group mb-20"><label for="">Twitter alt here:</label>
    <input type="text" class="form-control"   placeholder="Twitter alt here" name="twitteralt" value="<?=$data['twitter_alt'];?>">
  </div>
 
    <button type="submit" class="btn btn-primary m-50 float-right" name="twitterupdate">UPDATE TWITTER</button>
  </form>
            </div>
     
</div> 


            
<div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-danger">LINKEDIN</h2>
<form method="POST" >      
          <div class="form-group mb-20"><label for="">Linkedin here:</label>
    <input type="text" class="form-control"   placeholder="Linked Profile Link here" name="linkedin" 
    value="<?=$data["linkedin"];?>" >
  </div>
      
          <div class="form-group mb-20"><label for="">Linkedin Profile alt here:</label>
    <input type="text" class="form-control"   placeholder="Linkedin alt here" name="linkedinalt" 
    value="<?=$data["linkedin_alt"];?>">
  </div>
 
    <button type="submit" class="btn btn-danger m-50 float-right" name="linkedinupdate">UPDATE LINKEDIN</button>
  </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-success">INSTAGRAM</h2>
                 <form method="POST" >
          <div class="form-group mb-20"><label for="">Instagaram here:</label>
    <input type="text" class="form-control"   placeholder="Istagram Profile Link here" name="insta" 
    value="<?=$data["instagram"];?>">
  </div>
          <div class="form-group mb-20"><label for="">Instagaram alt here:</label>
    <input type="text" class="form-control"   placeholder="Instagram profile alt here" name="instaalt"
     value="<?=$data["instagram_alt"];?>">
  </div>
 
    <button type="submit" class="btn btn-success m-50 float-right" name="instaupdate">UPDATE INSTAGRAM</button>
  </form>
            </div>
     
</div> 


            
<div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-warning">ADDRESS</h2>
<form method="POST" >      
          <div class="form-group mb-20"><label for="">Address here:</label>
    <input type="text" class="form-control"   placeholder="Address here" name="address" value="<?=$data['address'];?>">
  </div>
      
          <div class="form-group mb-20"><label for="">Google Map Address Link here:</label>
    <input type="text" class="form-control"   placeholder="Map address here" name="gaddress" 
    value="<?=$data['address_link'];?>">
  </div>
 
    <button type="submit" class="btn btn-warning m-50 float-right" name="addressupdate">UPDATE ADDRESS</button>
  </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 px-20">
                <h2 class="text-center text-secondary">PAGE TITLE</h2>
                 <form method="POST">
          <div class="form-group mb-20"><label for="">Page Title:</label>
    <input type="text" class="form-control"   placeholder="Page Title here" name="title" value="<?=$data['page_title'];?>">
  </div>
          <!-- <div class="form-group"><label for="">Page alt here:</label>
    <input type="text" class="form-control"   placeholder="mobile alt here">
  </div> -->
 
    <button type="submit" class="btn btn-secondary m-50 float-right" name="titleupdate">UPDATE PAGE TITLE</button>
  </form>
            </div>
     
</div> 
            <?php } ?>
 


    </div>
    <!-- --------col-md-12 end-------  -->
</div>
<!-- --------row end-------  -->

</div>
<!-- --------container end-------  -->
</div>

    </div>

    <?php include_once "include/script.php"; ?>
</body>

</html>
