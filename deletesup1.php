<?php

if (isset($_POST["submit"])) {
    include 'conndb.php';
    $userid=$_POST["userid"];
    $sqld= "DELETE FROM `supervisior` WHERE `supervisior`.`userid` = '$userid'";
    $delete = mysqli_query($conn, $sqld);
    if ($delete) {
        echo '<div class="alert alert-success my-3" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>RECORD DELETED SUCCESSFULLY.</p>
  <hr>
  <p class="mb-0">Click <a href="./adminhome.php">here</a> to go to home page</p>
</div>';
    } 
    else {
        echo '<div class="alert alert-danger my-3" role="alert">
        <h4 class="alert-heading">Error!</h4>
        <p>Can\'t delete the record.</p>
        <hr>
        <p class="mb-0">' . mysqli_error($conn) . '</p>
      </div>';
    }
}

?>