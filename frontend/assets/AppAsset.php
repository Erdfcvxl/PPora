<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/site.css',
        '/owl-carousel/owl.carousel.css',
        '/owl-carousel/owl.theme.css',
        '/owl-carousel/owl.transitions.css',
    ];
    public $js = [
        '/owl-carousel/owl.carousel.min.js',
        '/js/jquery.backstretch.min.js'
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
