<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Edit hostel</title>
  </head>

  <body>
    <div class="container">
      <?php
      include 'edithostelsup1.php';
      ?>
    </div>
    <div class="container my-3">
    <form action="edithostelsup.php" method="post" autocomplete="on">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <h2>Edit hostel</h2>
  
  <!--  hostel Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="hostel" pattern="[a-zA-Z]+"/>
    <label class="form-label" for="form6Example3">Hostel name</label>
  </div>
  <!-- Address input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4" name="location"></textarea>
    <label class="form-label" for="form6Example7">Address</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="warden" pattern="[a-zA-Z]+"/>
    <label class="form-label" for="form6Example4">Warden name </label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" name="email" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" name="phone" pattern="[0-9]+"/>
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4" name="type"></textarea>
    <label class="form-label" for="form6Example7">About hostel</label>
  </div>
  <div class="row g-3">
    <div class="col-sm">
      <?php
        include 'suphstlcode.php';
      ?>
    </div>
    <div class="col-sm">
      <input type="number" class="form-control" placeholder="Capacity" aria-label="Capacity" name="capacity"/>
    </div>
    <div class="col-sm">
      <input type="number" class="form-control" placeholder="Vacancy" aria-label="Vacancy" name="vacancy"/>
    </div>
  </div>
  <div class="form-outline mb-4 my-3">
    <input type="text" id="form6Example4" class="form-control" name="img" />
    <label class="form-label" for="form6Example4">Image location</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
