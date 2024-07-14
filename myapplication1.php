<?php
    include 'conndb.php';
    session_start();
    $userid=$_SESSION["userid"];
    $allapn="SELECT * FROM `application` WHERE `userid` = '$userid' ORDER BY `datetime` DESC";
    $apn=mysqli_query($conn,$allapn);
    $nor=mysqli_num_rows($apn);
    if ($nor>0) {
        while($row=mysqli_fetch_assoc($apn))
        {
          echo '<div class="card border-info my-3">
  <div class="card-body">
    <h5 class="card-title">Application no : '.$row["app_no"].'</h5>
    <p class="card-text">Hostel:'. $row["Hostel"] .'</p>
    <p class="card-text">Hostel code: '. $row["hostelcode"] .'</p>
    <p class="card-text"><strong>Status:'. $row["satus"] .'</strong></p>
  </div>
</div>';
        }
    }
    else {
        echo '<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Oops!</h4>
  <p>No application has been applied from your side.</p>
  <hr>
  <p class="mb-0">Click <a href="apply.php">here</a> to apply new application.</p>
</div>';
    }
?>