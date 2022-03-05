<?php
define("server","localhost");
define("user","root");
define("pass","");
define("db","edugate");
$conn=new PDO("mysql:host:=".server.";dbname=".db,user,pass);
?>
