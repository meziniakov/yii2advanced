<?php
  if ($model->hasErrors()) {
    
    // echo "<pre>";
    // print_r($model->getErrors());
    // echo "</pre>";
  }
?>
<form method="POST">
  <p>Email:</p>
  <input type="text" name="email">
  <br>
  <input type="submit">
</form>