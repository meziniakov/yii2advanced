<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class GalleryAsset extends AssetBundle
{
  public $css = [
    'css/isotop.css',
  ];
  public $js = [
    'js/jquery-isotope.js',
    'js/isotope.js',
  ];
  public $depends = [
    'yii\web\JqueryAsset',
  ];
}