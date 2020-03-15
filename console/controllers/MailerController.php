<?php

namespace console\controllers;

use yii\console\Controller;
use Yii;

class MailerController extends Controller
{
  /**
   * 
   */
  public function actionSend()
  {
    $result = Yii::$app->mailer->compose()
        ->setFrom('mezin.fasie@yandex.ru')
        ->setTo('z2941@yandex.ru')
        ->setSubject('Subject mail')
        ->setTextBody('Text body')
        ->setHtmlBody('<b>text</b>')
        ->send();
     var_dump($result);
  }
}