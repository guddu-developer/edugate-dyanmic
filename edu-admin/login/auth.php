

<?php
session_start();
if((!isset($_SESSION["userlog"])) && (!isset($_SESSION["userpass"]))){
 header("location:../index.php");
}
?>
