<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
  public function actionIndex()
  {
    $max = Yii::$app->params['maxNewsInList'];
    $list = Test::getNewsList($max);

    return $this->render('index',[
      'list' => $list,
    ]);
  }

  public function actionView($id)
  {
    $item = Test::getItem($id);

    return $this->render('view', [
      'item' => $item,
    ]);
  }

  public function actionMail()
  {
    $result = Yii::$app->mailer->compose()
        ->setFrom('mezin.fasie@yandex.ru')
        ->setTo('z2941@yandex.ru')
        ->setSubject('Subject mail')
        ->setTextBody('Text body')
        ->setHtmlBody('<b>text</b>')
        ->send();

    var_dump($result);
    die;
  }
}