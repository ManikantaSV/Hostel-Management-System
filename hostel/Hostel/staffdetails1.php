<?php 
include('conndb.php');
echo '<table>
   <tr>
   <th>Staffid</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Salary</th>
   <th>Phone</th>
   <th>Date Of Birth</th>
   <th>Worsfor</th>
   <th>Address</th>
   </tr>';
$sql="SELECT * FROM `staff` ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    echo ' <tr>
    <td>'.$row["ssn"].'</td>
    <td>'.$row["fname"].'</td>
    <td>'.$row["lname"].'</td>
    <td>'.$row["salary"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["dob"].'</td>
    <td>'.$row["workfor"].'</td>
    <td>'.$row["address"].'</td>
    </tr>';
}
echo '</table>';
?>