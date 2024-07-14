<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sethostel=$_POST['sethstl'];
    $usn=$_POST['usn'];
    $setroom=$_POST['setroom'];
   //echo var_dump($_POST);
    include('conndb.php');
    $sql1="UPDATE `student` SET `artroom` = '$setroom' WHERE `student`.`usn` = '$usn'";
    $result1=mysqli_query($conn,$sql1);
    $sql2="SELECT * FROM `room` WHERE `roomid` = '$setroom'";
    $result2=mysqli_query($conn,$sql2);
    $row=mysqli_fetch_assoc($result2);
    $nos=$row["nos"]+1;
    $sql3="UPDATE `room` SET `nos` = '$nos' WHERE `room`.`roomid` = '$setroom'";
    $result3=mysqli_query($conn,$sql3);
    echo "<script type='text/javascript'>
    alert('Room Alloted Successfully');
  </script>";
}
?>