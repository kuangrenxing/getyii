<?php


namespace frontend\assets;


use yii\web\AssetBundle;

class AtJsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
    ];

    public $js = [
        'js/At.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'common\assets\AtJs',
        'common\assets\CaretJs',
    ];
}
