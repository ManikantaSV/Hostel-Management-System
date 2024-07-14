<?php
    session_start();
    if(!isset ($_SESSION["loggedin"])){
        header("location : logintype.html");
        exit();
    }
?>