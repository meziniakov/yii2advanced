<?php
$this->title = 'Подпишись на новости!';
$this->registerMetaTag([
      'name' => 'description',
      'content' => 'Описание страницы подписки',
]);
$this->registerMetaTag([
      'name' => 'keywords',
      'content' => 'subscribe, page',
]);
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