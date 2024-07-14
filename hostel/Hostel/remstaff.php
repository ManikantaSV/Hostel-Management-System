<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style><?php include('style2.css'); ?></style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="main">
    <?php require('navbar.php');?> 
    <?php include('remstaff1.php'); ?>
      <h1  id="title">REMOVE STAFF</h1>
        <div class="main-content">
             <form action="remstaff.php" method="POST" id="survey-form">
                <div class="form-cantent">
               <label for="ssn" id="name-label">SSN</label>
               <input class="common" name="ssn" type="text" required placeholder="Enter your ssn">

               <button type="submit" name="submit" id="submit">Remove</button>
                </div>
             </form>
        </div>
    </div>
  </body>
</html>