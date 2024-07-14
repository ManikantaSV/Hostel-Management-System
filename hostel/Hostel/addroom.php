<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style><?php include('style2.css'); ?></style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="main">
    <?php require('navbar.php');?> 
    <?php include('addroom1.php'); ?>
      <h1  id="title">ADD ROOMS</h1>
        <div class="main-content">
             <form action="addroom.php" method="POST" id="survey-form">
                <div class="form-cantent">
                <label for="droupdown">Select Hostel No:</label>
               <select name="hostelid" id="dropdown">
               <option desabled selected value>select</option>
               <option value="1b">boys hostel</option>
                <option value="1g">girls hostel</option>
              </select>
               <label for="room" id="name-label">Enter Room No:</label>
               <input class="common" name="roomid" type="text" required placeholder="Room No">

               <label for="droupdown">Select Room Type:</label>
               <select name="type" id="dropdown">
               <option desabled selected value>select</option>
                <option value="cw">Room with common washroom</option>
                <option value="aw">Room with attached washroom</option>
              </select>

              <label for="droupdown">No of Beds:</label>
               <select nmame="beds" id="dropdown">
               <option desabled selected value>select</option>
                <option value="2">2 sharing</option>
              </select>
        
             <button type="submit" name="submit" id="submit">Submit</button>
               </div>
          </form>
        </div>
    </div>
  </body>
</html>