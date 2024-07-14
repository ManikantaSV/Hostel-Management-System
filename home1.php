<?php
    include 'conndb.php';
    $slcths="SELECT * FROM `hostel`";
    $hstls=mysqli_query($conn,$slcths);
    if ($hstls) {
        while($row=mysqli_fetch_assoc($hstls))
        {
            echo '<div class="col">
            <div class="card h-100">
              <img src="'.$row["image"].'" class="card-img-top" alt="image" height="250" height="250">
              <div class="card-body">
                <h5 class="card-title">'.$row["name"].'</h5>
                <br>
                <div class="container">
                <p class="card-text">Location:<br>'.$row["location"].'</p>
                <hr>
              </div>
              <ul class="list-group list-group-flush mx-3">
              <li class="list-group-item">'. $row["type"].'</li>
                <li class="list-group-item">Vacancy:'. $row["vacancy"].'</li>
                <li class="list-group-item">Code:'. $row["code"].'</li>
                <li class="list-group-item">Contact:'.$row["phno"].','.$row["email"].'</li>
              </ul>
              <div class="card-body">
                <a href="./apply.php" class="btn btn-outline-success">Apply</a>
                </div>
              </div>
            </div>
          </div>';
        }
    }
?>