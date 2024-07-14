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
    $error = false;
    include 'conndb.php';
    $sql = "SELECT * FROM `supervisior` WHERE `userid`='$userid'";
    $exists = mysqli_query($conn, $sql);
    $nor = mysqli_num_rows($exists);
    if ($nor == 0) {
        $sql1 = "INSERT INTO `supervisior` (`name`, `worksin`, `hostelcode`, `position`, `salary`, `address`, `phno`, `email`, `userid`, `password`) VALUES ('$name', '$worksin', '$code', '$position', '$salary', '$address', '$phone', '$email', '$userid', '$password')";
        $insert = mysqli_query($conn, $sql1);
        if ($insert) {
            echo '<div class="container my-3"><div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Account created:)</h4>
            <p>Your account has been succesfully created.</p>
            <hr>
            <p class="mb-0">click <a href="adminhome.php">here</a> to go to home page</p>
          </div></div>';
        } else {
            $error = true;
            $showerror = "Can\'t add to database" . mysqli_error($conn);
        }
    } else {
        $error = true;
        $showerror = "Username has already been taken";
    }
    if ($error) {
        echo '<div class="container"><div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong>' . $showerror . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></div>';
    }
}
