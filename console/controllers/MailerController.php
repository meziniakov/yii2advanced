<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;

class MailerController extends Controller
{
  /**
   * 
   */
  public function actionSend()
  {
    $newsList = News::getNewsList();
    $subscribers = Subscriber::getList();
    $result = Sender::run($subscribers, $newsList);
    $status = News::newsStatusSend();
    return $status;
  }

  public function actionTime()
  {
    Yii::$app->formatter->locale = 'ru-RU';
    $date = Yii::$app->formatter->asDate('now','dd-MM-yyyy HH:mm:ss')."\n";
    $filename = "/var/www/yii2/frontend/web/log.txt";
    file_put_contents($filename, $date, FILE_APPEND);
    //echo date("H:i:s");
  }
}