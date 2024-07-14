<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style><?php include('style2.css'); ?></style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="main">
    <?php require('navbar.php');?> 
    <?php include('student1.php'); ?>
      <h1  id="title">STUDENT APPLICATION FORM</h1>
        <div class="main-content">
             <form action="student.php" method="POST" id="survey-form">
                <div class="form-cantent">
               <label for="USN" id="name-label">USN</label>
               <input class="common" name="usn" type="text" required placeholder="Enter your USN">

               <label for="name" id="name-label"> First Name</label>
               <input class="common" name="FirstName" type="text" required placeholder="Enter your first name">
               
               <label for="name" id="name-label">Last Name</label>
               <input class="common" name="lastname" type="text" required placeholder="Enter your last name">
               
               <label for="droupdown">Gender</label>
               <select name="gender" id="dropdown">
               <option desabled selected value>select</option>
                <option  value="MALE">Male</option>
                <option  value="FEMALE">Female</option>
                <option  value="OTHERS">Others</option>
              </select>
              <label for="Phone" id="name-label">Phone</label>
               <input class="common" name="phone" type="number" required placeholder="Enter your Phone">

               <label for="droupdown">Department</label>
               <select name="dpt" id="dropdown">
                <option desabled selected value>select</option>
                <option  value="cse">CSE</option>
                <option  value="ise">ISE</option>
                <option  value="ece">ECE</option>
                <option  value="eee">EEE</option>
                <option  value="mech">MECH</option>
                <option  value="civil">CIVIL</option>
                <option  value="mba">MBA</option>
              </select>

              <label for="year" id="name-label">Year of study</label>
               <input class="common" name="yearofstudy" type="year" required placeholder="Enter Year">

               <label for="email" id="email-label">Email</label>
               <input class="common" name="email" type="email" required placeholder="Enter your email">
               
               <label for="number" id="number-label">Date of birth</label>
               <input class="common"name="dob" type="date"  required placeholder="Age"> 

               <label for="adress" id="address-label">Address</label>
               <textarea class="common" name="address" class="input-textarea" row="3" placeholder="Enter Adress"></textarea>
        
             <button type="submit" name="submit" id="submit">Submit</button>
               </div>
          </form>
        </div>
    </div>
  </body>
</html>