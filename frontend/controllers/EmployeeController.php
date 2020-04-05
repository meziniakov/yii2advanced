<?php

namespace frontend\controllers;

use yii\base\Controller;
use frontend\models\Employee;
use frontend\models\example\Human;
use frontend\models\example\Animal;
use Yii;

class EmployeeController extends Controller
{
  public function actionIndex()
  {
    $employee = new Employee();
    $employee->firstName = 'Alex';
    $employee->lastName = 'Smith';
    $employee->middleName = 'Jhon';
    $employee->salary = 1000;

    echo $employee['salary'];
    echo "<hr>";

    foreach ($employee as $attribute => $value) {
      echo "$attribute: $value <br>";
    }

    $array = $employee->toArray();
    echo "<pre>";
    print_r($employee->getAttributes());
    echo "</pre>";
  }

  public function actionTest()
  {
    $human = new Human();
    $animal = new Animal();
    $human->walk();
    $animal->walk();

  }

  public function actionRegister()
  {
    $model = new Employee();
    $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

    $formData = Yii::$app->request->post();
    if (Yii::$app->request->isPost) {
      $model->attributes = $formData;
      if ($model->validate() && $model->save()) {
        Yii::$app->session->setFlash('success', 'Done!');
      } else {
        Yii::$app->session->setFlash('danger', 'Fuck');
      }
    }
    return $this->render('register', [
      'model' => $model,
    ]);
  }

  public function actionUpdate()
  {
    $model = new Employee();
    $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

    $formData = Yii::$app->request->post();

    if (Yii::$app->request->isPost) {
      $model->attributes = $formData;
      if ($model->validate() && $model->save()) {
        Yii::$app->session->setFlash('success', 'Yess!');
      } else {
        Yii::$app->session->setFlash('danger', 'Noo');
      }
    }

    return $this->render('update', [
      'model' => $model,
    ]);
  }
}