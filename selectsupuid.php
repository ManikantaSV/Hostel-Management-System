<?php
include "conndb.php";
$sql="SELECT `userid` FROM `supervisior`";
$code=mysqli_query($conn,$sql);
$nor=mysqli_num_rows($code);

if($nor==0)
{
    echo "No supervisior in the database";
}
else {
    {
        echo '<select class="form-select" aria-label="Default select example" name="userid">
        <option selected disabled value="" >Select username</option>';
        while($hcode=mysqli_fetch_assoc($code))
        {
            $phcode=$hcode["userid"];
            echo '<option value="'.$phcode.'">'.$phcode. '</option>';
        }
      echo '</select>';
    }
}

?>