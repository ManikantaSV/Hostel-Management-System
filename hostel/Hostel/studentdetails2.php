<?php 
include('conndb.php');
echo '<table>
   <tr>
   <th>USN</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Department</th>
   <th>Year Of Study</th>
   <th>Gender</th>
   <th>Phone</th>
   <th>Email</th>
   <th>Date Of Birth</th>
   <th>Address</th>
   <th>Alloted Room</th>
   </tr>';
$sql="SELECT * FROM `student` ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    echo ' <tr>
    <td>'.$row["usn"].'</td>
    <td>'.$row["fname"].'</td>
    <td>'.$row["lname"].'</td>
    <td>'.$row["department"].'</td>
    <td>'.$row["yearofstudy"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["dob"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["artroom"].'</td>
    </tr>';
}
echo '</table>';
?>