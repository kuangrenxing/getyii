<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '贡献者';
$content = '
以下是本社区的贡献者名单，排名不分先后。

#### 赞助者

- XXX.

#### 社区维护

- [test1](/member/test1)


';
?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <?= Markdown::process($content, 'gfm') ?>
        </div>
    </div>
</div>
