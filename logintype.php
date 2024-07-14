<?php
    if(isset($_POST["submit"]))
    {
        $no=$_POST["opt"];
        switch($no)
        {
            case 1:
                header("Location: ./");
                exit();
            break;
            case 1:
                header("Location: ./");
                exit();
            break;
            case 2:
                header("Location: ./login.php");
                exit();
            break;
            case 3:
                header("Location: ./suplogin.php");
                exit();
            break;
            case 4:
                header("Location: ./adminlogin.php");
                exit();
            break;
            case 5:
                header("Location: ./signup.php");
                exit();
            break;
        }
    }
?>