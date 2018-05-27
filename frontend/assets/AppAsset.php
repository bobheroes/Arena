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
        // 'css/site.css',
        'css/style.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/fontawesome-all.min.css',
    ];
    public $js = [
        'js/main.js',
        'js/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
