<?php
session_start();
$code= $_SESSION["code"];
echo '<div class="mb-3">
  <input type="text" id="disabledTextInput" class="form-control" name="code" value="'.$code.'" disabled>
  <label for="disabledTextInput" class="form-label">Hostel code</label>
</div>';
?>