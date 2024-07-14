<?php
if(isset($_POST["submit"]))
{
    $usn=$_POST["usn"];
    $usn=strtoupper($usn);
    $fname=$_POST["FirstName"];
    $lname=$_POST["lastname"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $dept=$_POST["dpt"];
    $dept=strtoupper($dept);
    $yos=$_POST["yearofstudy"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $address=$_POST["address"];
    include("conndb.php");
    $sql="INSERT INTO `student` (`usn`, `fname`, `lname`, `department`, `yearofstudy`, `gender`, `phone`, `dob`, `address`, `artroom`,`email`) VALUES ('$usn','$fname','$lname','$dept','$yos','$gender','$phone','$dob','$address', NULL,'$email')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script type='text/javascript'>
                alert('inserted Successfully');
              </script>";

    }
    else{
        echo "<script type='text/javascript'>
        alert('record cannot be inserted');
      </script>";

    }
}
?>