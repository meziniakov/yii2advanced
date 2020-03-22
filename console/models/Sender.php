<?php

namespace console\models;

use Yii;

class Sender
{
  public static function run($subscribers, $newsList)
  {
    foreach ($subscribers as $subscriber) {
      $result = Yii::$app->mailer->compose('/mailer/newslist', [
        'newsList' => $newsList,
      ])->setFrom('mezin.fasie@yandex.ru')
        ->setTo($subscriber['email'])
        ->setSubject('Subject mail')
        ->send();
     var_dump($result);
    }
  }
}