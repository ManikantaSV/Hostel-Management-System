<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style><?php include('style2.css'); ?></style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="main">
      <?php include('navbar.php'); ?>
      <?php include('staff1.php'); ?>
      <h1  id="title">STAFF APPLICATION FORM</h1>
        <div class="main-content">
             <form action="staffapp.php" method="POST" id="survey-form">
                <div class="form-cantent">
               <label for="SSN" id="name-label">SSN</label>
               <input class="common" name="ssn" type="text" required placeholder="Enter your SSN">

               <label for="name" id="name-label"> First Name</label>
               <input class="common" name="firstname" type="text" required placeholder="Enter your first name">
               
               <label for="name" id="name-label">Last Name</label>
               <input class="common" name="lastname" type="text" required placeholder="Enter your last name">
            
              <label for="Phone" id="name-label">Phone</label>
               <input class="common" name="phone" type="phone" required placeholder="Enter your Phone">

               <label for="salary" id="name-label">Salary</label>
               <input class="common" name="salary" type="salary" required placeholder="salary">

               <label for="number" id="number-label">Date of birth</label>
               <input class="common" name="dob" name="dob" type="date"  required placeholder="Age"> 

               <label for="droupdown">Worksfor</label>
               <select name="worksfor" id="dropdown">
               <option desabled selected value>select</option>
                <option  value="1B">boys hostel</option>
                <option  value="1G">girls hostel</option>
              </select>

               <label for="adress" id="address-label">Address</label>
               <textarea class="common" name="address" class="input-textarea" placeholder="Enter Adress"></textarea>
        
             <button type="submit" name="submit" id="submit">Submit</button>
               </div>
          </form>
        </div>
    </div>
  </body>
</html>