<?php
include 'isloggedin.php';
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Admin home</title>
</head>

<body>
  <div class="container my-3">
    <?php
     include 'welcome.php';
    ?>
  </div>
  <div class="container my-3">
    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title">Add hostel</h5>
        <p class="card-text">You can add hostel by clicking on the bellow button.</p>
        <a href="./addhostel.php" class="btn btn-primary">Add hostel</a>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title">Edit hostel</h5>
        <p class="card-text">You can edit hostel details here.But you can't change the hostel code.</p>
        <a href="./edithostel.php" class="btn btn-primary">Edit hostel</a>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title">Delete hostel</h5>
        <p class="card-text">Delete the hostel by entering its code.On deleting everything releated to the selected hostel gets deleted.</p>
        <a href="./deletehostel.php" class="btn btn-primary">Delete hostel</a>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title">Add supervisior</h5>
        <p class="card-text">Add supervisior .</p>
        <a href="./addsup.php" class="btn btn-primary">Add sup.</a>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title">Edit supervisior</h5>
        <p class="card-text">Edit supervisior details without changing the userid.</p>
        <a href="./editsup.php" class="btn btn-primary">Edit sup.</a>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <div class="card border-dark">
      <div class="card-body">
        <h5 class="card-title">Delete supervisior</h5>
        <p class="card-text">Delete sup. by userid.</p>
        <a href="./deletesup.php" class="btn btn-primary">Delte sup.</a>
      </div>
    </div>
  </div>
  <div class="container my-3">
    <v class="card border-dark">
      <v class="card-body">
        <h5 class="card-title">Log out</h5>
        <p class="card-text">Log out from this account</p>
        <a href="./logout.php" class="btn btn-primary">logout<a>
  </div>
<br><br><br>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
