<?php

namespace frontend\components;

use Yii;

class StringHelper
{
  private $limit;
  private $limitWord;

  public function __construct()
  {
    $this->limit = Yii::$app->params['shortTextLimit'];
    $this->limitWord = Yii::$app->params['shortTextLimitByWord'];
  }

  public function getShortBySpace($string, $limit = null)
  {
    if ($limit === null) {
      $limit = $this->limit;
    }

    $str = mb_substr($string, 0, $limit);

    return mb_substr($str, 0, mb_strrpos($str, ' ')) . " ...";
  }

  public function getShortByWord($string)
  {
    $array = explode(" ", $string);
    
    $limitWord = $this->limitWord;
    $array = array_slice($array, 0, $limitWord);

    $string = implode(" ", $array);

    return $string;
  }

  public function getShort($string, $limit = null)
  {
    if ($limit === null) {
      $limit = $this->limit;
    }

    return mb_substr($string, 0, $limit);
  }
}