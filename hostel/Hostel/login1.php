<?php 
if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    include 'conndb.php';
    $sql="SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password' ";
    $result=mysqli_query($conn,$sql);
    $nor=mysqli_num_rows($result);
    if($nor==1)
    {
        session_start();
        $_SESSION["user"]=$username;
        header("location:home.php");
    }
    else{
      echo "<script type='text/javascript'>
                alert('username and password didnot match');
              </script>";
    }
}


?>