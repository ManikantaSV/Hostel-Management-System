<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'conndb.php';
    $uname=$_POST["username"];
    $pass=$_POST["password"];
    $search="SELECT * FROM `users` WHERE `userid`='$uname' AND `password`='$pass'";
    $login=mysqli_query($conn,$search);
    $nor=mysqli_num_rows($login);
    if($nor==1)
    {
        session_start();
        $_SESSION["loggedin"]="stu";
        $_SESSION["userid"]=$uname;
        $_SESSION["password"]=$pass;
        header("location: home.php");
    }
    else{
        echo '<div class="signup-link">ERROR!username and password does not match.</div>';
    }

}


?>