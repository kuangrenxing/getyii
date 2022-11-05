<?php


use yii\helpers\Html;

/** @var \common\models\PostComment $model */
$this->title = Yii::t('app', '更新回复: ') . ' ' . $model->post->title;
?>
    <div class="col-md-9 topic-create" contenteditable="false" style="">

        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <?= '更新回复： ' . Html::a($model->post->title, ['/topic/default/view', 'id' => $model->post_id]) ?>
            </div>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

<?= \frontend\widgets\TopicSidebar::widget([]) ?>
