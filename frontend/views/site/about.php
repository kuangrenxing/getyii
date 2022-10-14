<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '关于';
$content = '
#### 

- 爱 PHP
- 爱学习，爱沟通，也爱传播
';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        关于
    </div>
    <div class="panel-body">
        <?= Markdown::process($content, 'gfm') ?>
    </div>
</div>
