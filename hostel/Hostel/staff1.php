<?php
if(isset($_POST["submit"]))
{
    $ssn=$_POST["ssn"];
    $ssn=strtoupper($ssn);
    $fname=$_POST["firstname"];
    $lname=$_POST["lastname"];
    $phone=$_POST["phone"];
    $salary=$_POST["salary"];
    $dob=$_POST["dob"];
    $worksfor=$_POST["worksfor"];
    $address=$_POST["address"];
    include("conndb.php");
    $sql="INSERT INTO `staff` (`ssn`, `fname`, `lname`, `salary`, `phone`, `dob`, `address`, `workfor`) VALUES ('$ssn','$fname','$lname','$salary','$phone','$dob','$address','$worksfor')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script type='text/javascript'>
                alert('inserted Successfully');
              </script>";
    }
    else
    {
        echo '<div class="insert"><p style="color:red;">Record Not Inserted <br> '.mysqli_error($conn).'</p></div>';
    }

}
?>
