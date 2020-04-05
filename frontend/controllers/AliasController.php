<?php

namespace frontend\controllers;

use Yii;
use yii\base\Controller;

class AliasController extends Controller
{
  public function actionExample()
  {
    $result = mkdir(Yii::getAlias('@uploads') . "/test3");
    var_dump($result);
  }
}