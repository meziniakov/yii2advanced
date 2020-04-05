<?php
if ($model->hasErrors()) {
    echo "<pre>";
    print_r($model->getErrors());
    echo "</pre>";
}
?>
<h1>Welcome to our company</h1>
<form method="POST">
  <p>First Name</p>
  <input name="firstName" type="text">
  <br><br>
  <p>Last Name</p>
  <input name="lastName" type="text">
  <br><br>
  <p>Middle Name</p>
  <input name="middleName" type="text">
  <br><br>
  <input type="submit">
  <br>
</form>