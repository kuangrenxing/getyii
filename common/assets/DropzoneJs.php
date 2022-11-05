<?php
namespace common\assets;

use yii\web\AssetBundle;


class DropzoneJs extends AssetBundle
{
    public $sourcePath = '@vendor/enyo/dropzone/dist/min';

    public $css = [
        'dropzone.min.css',
    ];

    public $js = [
        'dropzone.min.js',
    ];
}
