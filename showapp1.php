<?php
include 'conndb.php';
session_start();
$code = $_SESSION["code"];
$status="NA";
$sql="SELECT * FROM `application` WHERE `hostelcode` = '$code' AND `satus` = '$status' ORDER BY `datetime` ASC";
$app=mysqli_query($conn,$sql);
$nor=mysqli_num_rows($app);
if($nor>0)
{
    $row=mysqli_fetch_assoc($app);
    setcookie("appno",$row["app_no"],time()+86400,"/");
   // echo var_dump($row);
    $sql1="SELECT * FROM `gaurdian_details` WHERE `app_no` =".$row['app_no'];
    $app1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($app1);
    echo "<br>";
    //echo var_dump($row1);
    echo '<h3><strong>Application no : '.$row["app_no"].'</strong></h3>
                <br />
                <div class="container">
                  <p><strong>First name    : </strong><block>'.$row["fname"].'</block></p>
                  <p><strong>Middle name   : </strong><block>'.$row["mname"].'</block></p>
                  <p><strong>Last name     : </strong><block>'.$row["lname"].'</block></p>
                  <p><strong>Date of birth : </strong><block>'.$row["dob"].'</block></p>
                  <p><strong>Father name   : </strong><block>'.$row1["father"].'</block></p>
                  <p><strong>Mother name   : </strong><block>'.$row1["mother"].'</block></p>
                  <p><strong>Gaurdian      : </strong><block>'.$row1["gaurdian"].'</block></p>
                  <p><strong>Address 1     : </strong><block>'.$row["address"].'</block></p>
                  <p><strong>Address 2     : </strong><block>'.$row1["address"].'</block></p>
                  <p><strong>Phone no.     : </strong><block>'. $row1["f_phno"] , $row1["alt_phno"].'</block></p>
                  <p><strong>Email         : </strong><block>'.$row1["email"].'</block></p>
                  <form action="changestatus.php" method="POST">
                    <div class="controls">
                      <div class="row">
                        <div class="col-md-12 my-3">
                          <button
                            type="submit"
                            class="btn btn-outline-success btn-send pt-2 btn-block"
                            value="Approved"
                            name="status"
                          >
                            Approve
                          </button>
                        </div>
                        <div class="col-md-12 my-3">
                          <button
                            type="submit"
                            class="btn btn-outline-danger btn-send pt-2 btn-block"
                            value="Rejected"
                            name="status"
                          >
                            Reject
                          </button>
                        </div>
                      </div>
                      <div class="col-md-12 my-3"><a href="./suphome.php">
                        <button type="button"
                          class="btn btn-outline-primary btn-send pt-2 btn-block"
                        >
                          go to home
                        </button></a
                      ></div>
                    </div>
                  </form>
                </div>';
}
else {
    echo '<h3><strong>Oops!</strong></h3>
    <br />
    <div class="container">
    <p>No new applications for your hostel</p>
    <br>
    <div class="col-md-12 my-3"><a href="./suphome.php">
                        <button type="button"
                          class="btn btn-outline-primary btn-send pt-2 btn-block"
                        >
                          go to home
                        </button></a
                      ></div>';
}