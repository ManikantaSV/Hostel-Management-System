<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phno"];
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $position = $_POST["position"];
    $salary=$_POST["salary"];
    $code=$_POST["code"];
    $worksin=$_POST["worksin"];
    $address=$_POST["address"];
    include 'conndb.php';
    $sqlu="UPDATE `supervisior` SET `name` = '$name', `worksin` = '$worksin', `position` = '$position', `salary` = '$salary', `address` = '$address', `phno` = '$phone', `email` = '$email', `password` = '$password' WHERE `supervisior`.`userid` = '$userid'";
    $update = mysqli_query($conn, $sqlu);
    if ($update) {
        echo '<div class="alert alert-success my-3" role="alert">
  <h4 class="alert-heading">Success!</h4>
  <p>RECORD UPDATED SUCCESSFULLY.</p>
  <hr>
  <p class="mb-0">Click <a href="./adminhome.php">here</a> to go to home page</p>
</div>';
    } 
    else {
        echo '<div class="alert alert-danger my-3" role="alert">
        <h4 class="alert-heading">Error!</h4>
        <p>Can\'t Update the record.</p>
        <hr>
        <p class="mb-0">' . mysqli_error($conn) . '</p>
      </div>';
    }
}
    ?>