<?php

namespace console\models;

use Yii;

class News
{

  const STATUS_NOT_SEND = 1;
  const STATUS_SEND = 2;

  /**
   * 
   */
  public static function getNewsList()
  {
    $sql = "SELECT * FROM news WHERE status = " . self::STATUS_NOT_SEND;
    $result = Yii::$app->db->createCommand($sql)->queryAll();
    return self::prepareList($result);
  }
  
  public static function prepareList($result)
  {
    if (!empty($result) && is_array($result)) {
      foreach ($result as &$item) {
        $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
      }
    }
    return $result;
  }

  public static function newsStatusSend()
  {
    $sql = "UPDATE news SET status = " . self::STATUS_SEND . " WHERE status = " . self::STATUS_NOT_SEND;
    return Yii::$app->db->createCommand($sql);
  }
}