<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $userid=$_POST["userid"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $gender=$_POST["gender"];
    $error=false;
    if($password!=$cpassword)
    {
       $error=true;
       $showerror="Password did\'t match";
    }
    else{
        include 'conndb.php';
        $sql="SELECT * FROM `users` WHERE `userid` LIKE '$userid'";
        $exists=mysqli_query($conn,$sql);
        $nor=mysqli_num_rows($exists);
        if($nor==0){
        $sql1="INSERT INTO `users` (`name`, `phno`, `email`, `userid`, `password`, `gender`) VALUES ('$name', '$phone', '$email', '$userid', '$password', '$gender')";
        $insert=mysqli_query($conn,$sql1);
        if($insert)
        {
            echo '<div class="container my-3"><div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Account created:)</h4>
            <p>Your account has been succesfully created.</p>
            <hr>
            <p class="mb-0">You can now login to website by clicking <a href="login.php">here</a></p>
          </div></div>';
        }
        else{
           $error=true;
           $showerror="Can\'t insert to database". mysqli_error($conn);
        }
        }
        else {
            $error=true;
            $showerror="Username has already been taken";
        }
    }
    if($error)
    {
        echo '<div class="container"><div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong>'. $showerror.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
    }
}
?>