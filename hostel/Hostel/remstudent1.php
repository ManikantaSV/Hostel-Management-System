<?php 
if(isset($_POST['submit']))
{
    $usn=$_POST['usn'];
    include('conndb.php');
    $sql="DELETE FROM `student` WHERE `student`.`usn` = '$usn'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script type='text/javascript'>
                alert('Removed Successfully');
              </script>";

    }
    else{
        echo "<script type='text/javascript'>
        alert('record didnot deleted');
      </script>";

    }
}
?>