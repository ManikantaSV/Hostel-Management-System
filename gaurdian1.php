<?php
if(isset($_POST["submit"]))
{
    $father=$_POST["father"];
    $mother=$_POST["mother"];
    $gaurdian=$_POST["gaurdian"];
    $phone=$_POST["phone"];
    $altphno=$_POST["altphno"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $appno=$_COOKIE["appno"];
    include 'conndb.php';
    $sqlg="INSERT INTO `gaurdian_details` (`app_no`, `father`, `mother`, `gaurdian`, `f_phno`, `alt_phno`, `email`, `address`) VALUES ('$appno', '$father', '$mother', '$gaurdian', '$phone', '$altphno', '$email', '$address')";
    $insertg=mysqli_query($conn,$sqlg);
    if ($insertg) {
      echo  '<div class="container my-3">
        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Submitted successfully</h4>
  <p>Your application has been submitted successfully.Your application number is <strong>'.$appno.'</strong> </p>
  <hr>
  <p class="mb-0"><a class="btn btn-primary" href="home.php" role="button">Go to home</a></p>
</div>
        </div>';
        exit();
    }
    else {
      echo  '<div class="container my-3">
        <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Error!</h4>
  <p>can\'t submit ur application.</p>
  <hr>
  <p class="mb-0">'.mysqli_error($conn).'.</p>
</div>
        </div>';
    }
}

?>