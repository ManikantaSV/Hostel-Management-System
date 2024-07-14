<?php
 include('conndb.php');
 $sql="SELECT roomid FROM room WHERE nos<2";
 $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
   echo '<option value="'.$row["roomid"].'">'.$row["roomid"].'</option>' ;

 }
?>