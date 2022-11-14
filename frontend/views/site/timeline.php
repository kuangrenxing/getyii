<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '时间线';
$content = '

- 上线测试

';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= $this->title ?>
    </div>
    <div class="panel-body">
        <?= Markdown::process($content, 'gfm') ?>
    </div>
</div>
