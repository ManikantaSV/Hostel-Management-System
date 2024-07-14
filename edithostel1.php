<?php
if (isset($_POST["submit"])) {
  include 'conndb.php';
  $hostel = $_POST["hostel"];
  $location = $_POST["location"];
  $warden = $_POST["warden"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $type = $_POST["type"];
  $code = $_POST["code"];
  $capacity = $_POST["capacity"];
  $vacancy = $_POST["vacancy"];
  $img = $_POST["img"];
  //$sql = "INSERT INTO `hostel` (`name`, `code`, `location`, `capacity`, `vacancy`, `warden`, `phno`, `email`, `type`, `image`) VALUES ('$hostel', '$code', '$location', '$capacity', '$vacancy', '$warden', '$phone', '$email', '$type', '$img')";
  $sqlu = "UPDATE `hostel` SET `name` = '$hostel', `location` = '$location', `capacity` = '$capacity', `vacancy` = '$vacancy', `warden` = '$warden', `phno` = '$phone', `email` = '$email', `type` = '$type', `image` = '$img' WHERE `hostel`.`code` = '$code'";
  $update = mysqli_query($conn, $sqlu);
  if ($update) {
    echo '<div class="alert alert-success my-3" role="alert">
  <h4 class="alert-heading">Success!</h4>
  <p>RECORD UPDATED SUCCESSFULLY.</p>
  <hr>
  <p class="mb-0">Click <a href="./adminhome.php">here</a> to go to home page</p>
  </div>';
  } else {
    echo '<div class="alert alert-danger my-3" role="alert">
        <h4 class="alert-heading">Error!</h4>
        <p>Can\'t Update the record.</p>
        <hr>
        <p class="mb-0">' . mysqli_error($conn) . '</p>
      </div>';
  }
}
