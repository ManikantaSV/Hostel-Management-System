<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $status=$_POST["status"];
   $appno=$_COOKIE["appno"];
   include 'conndb.php';
   $sql="UPDATE `application` SET `satus` = '$status' WHERE `application`.`app_no` = $appno";
   $upst=mysqli_query($conn,$sql);
   header("location:showapp.php");
}
?>