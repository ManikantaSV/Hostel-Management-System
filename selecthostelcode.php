<?php
include "conndb.php";
$sql="SELECT `code` FROM `HOSTEL`";
$code=mysqli_query($conn,$sql);
$nor=mysqli_num_rows($code);

if($nor==0)
{
    echo "No hostels in the database";
}
else {
    {
        echo '<select class="form-select" aria-label="Default select example" name="code">
        <option selected disabled value="" >Select hostel code</option>';
        while($hcode=mysqli_fetch_assoc($code))
        {
            $phcode=$hcode["code"];
            echo '<option value="'.$phcode.'">'.$phcode. '</option>';
        }
      echo '</select>';
    }
}

?>