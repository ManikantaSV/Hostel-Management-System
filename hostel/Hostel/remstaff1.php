<?php 
if(isset($_POST['submit']))
{
    $ssn=$_POST['ssn'];
    include('conndb.php');
    $sql="DELETE FROM `staff` WHERE `staff`.`ssn` = '$ssn'";
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