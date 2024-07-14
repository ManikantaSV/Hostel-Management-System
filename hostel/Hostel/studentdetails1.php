<?php
if(isset($_POST['submit']))
{
    $usn=$_POST['usn'];
    include('conndb.php');
    $sql="SELECT * FROM `student` WHERE `usn` = '$usn'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        echo '<p><strong>USN:</strong>'.$row["usn"].'</p>';
        echo '<p><strong>fname:</strong>'.$row["fname"].'</p>';
        echo '<p><strong>Lname:</strong>'.$row["lname"].'</p>';
        echo '<p><strong>Fname:</strong>'.$row["gender"].'</p>';
        echo '<p><strong>Phone:</strong>'.$row["phone"].'</p>';
        echo '<p><strong>date of birth:</strong>'.$row["dob"].'</p>';
        echo '<p><strong>Depatment:</strong>'.$row["department"].'</p>';
        echo '<p><strong>Year of study:</strong>'.$row["yearofstudy"].'</p>';
        echo '<p><strong>Mail:</strong>'.$row["email"].'</p>';
        echo '<p><strong>Alloted Room:</strong>'.$row["artroom"].'</p>';
        echo '<p><strong>Address:</strong>'.$row["address"].'</p>';
        

    }
}
?>