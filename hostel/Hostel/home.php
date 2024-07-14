<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      <?php //include 'fotter.css'; ?>
      body{
        background-color:rgba(255, 204, 0);
    }
.navbar{
        background-color:rgba(255, 204, 0);
    }
    .img{
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      }
      .header{
        display:flex;
        flex-direction: row;
        margin-left: 15%;
        gap:12px;
        margin-top:5px;
      }
      .logo{
         width: 40px;
      }
      h1{
        text-transform: uppercase;
        font-size: 50px;
      }
</style>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
 

<?php include('navbar.php');?> 
  <div class="img">
        <img  src="https://sjbit.edu.in/wp-content/uploads/2021/07/hostel-dept-banner-2021-1a.jpg" class=" image d-block w-100" alt="...">

    </div>
  </div>
  <div class="header">
  <img src="https://i1.wp.com/sjbit.edu.in/wp-content/uploads/2021/06/SJBIT-logo-scaled.jpg?fit=1035%2C1200&ssl=1&w=640" class="logo" alt="...">
  <h1><strong>SJB Institute of Technology hostels</strong></h1>
  <hr>
  <?php //include 'footer.html'; ?>
</div>
</body>
</html>
