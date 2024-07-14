<?php

if(isset($_POST["submit"]))
{
    $hostelid=$_POST["hostelid"];
    $roomid=$_POST["roomid"];
    $roomtype=$_POST["type"];
    include("conndb.php");
    $sql="INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES ('$roomid', '$roomtype', '2', '$hostelid', '0')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script type='text/javascript'>
        alert('inserted Successfully');
        </script>";

    }
    else{
        echo '<div class="insert"><p style="color:red;">Record Not Inserted <br> '.mysqli_error($conn).'</p></div>';
    }
}
?>