<?php
if(isset($_POST["next"]))
{
    $fname=$_POST["fname"];
    $mname=$_POST["mname"];
    $lname=$_POST["lname"];
    $dob=$_POST["dob"];
    $code=$_POST["code"];
    $hostel=$_POST["hostel"];
    $address=$_POST["address"];
    session_start();
    $userid=$_SESSION["userid"];
    $status="NA";
    include 'conndb.php';
    $sqla="INSERT INTO `application` (`fname`, `mname`, `lname`, `dob`, `address`, `Hostel`, `hostelcode`, `satus`, `userid`, `datetime`) VALUES ('$fname', '$mname', '$lname', '$dob', '$address', '$hostel', '$code', '$status', '$userid', current_timestamp())";
    $appins=mysqli_query($conn,$sqla);
    if ($appins) {
        $sqlapno="SELECT * FROM `application` WHERE `userid` = '$userid' ORDER BY `datetime` DESC";
        $appno=mysqli_query($conn,$sqlapno);
        $row=mysqli_fetch_assoc($appno);
        $no=$row['app_no'];
       setcookie("appno","$no", time()+86400,"/");
        header("location: gaurdian.php");
        exit();
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">ERROR!</h4>
        <p>Can\'t insert ur application details into database.</p>
        <hr>
        <p class="mb-0">'.mysqli_error($conn).'</p>
      </div>';
    }

}



?>