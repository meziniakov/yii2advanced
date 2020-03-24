<?php

namespace frontend\controllers;

use Yii;
use yii\base\Controller;
use frontend\models\Subscriber;

class NewsletterController extends Controller
{
  public function actionSubscriber()
  {
    $formData = Yii::$app->request->post();
    $model = new Subscriber();

    if (Yii::$app->request->isPost) {
      $model->email = $formData['email'];
      if ($model->validate() && $model->save()) {
        Yii::$app->session->setFlash('success', 'Success!');
      } else {
        Yii::$app->session->setFlash('danger', "Danger");
      }
    }

    return $this->render('subscribe', [
      'model' => $model,
    ]);
  }
}