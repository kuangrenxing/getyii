<?php


use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Markdown;

/** @var \common\models\PostComment $model */
$index += +1 + $widget->dataProvider->pagination->page * $widget->dataProvider->pagination->pageSize;
?>
<?php if (!$model->status): ?>
    <div class="deleted text-center"><?= $index ?>楼 已删除.</div>
<?php else: ?>
    <div class="avatar pull-left">
        <?= Html::a(Html::img($model->user->userAvatar, ['class' => 'media-object avatar-48 img-circle']),
            ['/user/default/show', 'username' => $model->user['username']]
        ); ?>
    </div>

    <div class="infos" id="comment<?= $index ?>">

        <div class="media-heading meta info opts">
            <?php
            echo Html::a($model->user['username'], ['/user/default/show', 'username' => $model->user['username']], ['class' => 'author']), '•',
            Html::a("#{$index}", "#comment{$index}", ['class' => 'comment-floor']), '•',
            Html::tag('addr', Yii::$app->formatter->asRelativeTime($model->created_at), ['title' => Yii::$app->formatter->asDatetime($model->created_at)]);
            ?>

            <span class="opts pull-right">
                <?php

                if ($model->isCurrent()) {
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->like_count) . ' 个赞',
                        'javascript:;'
                    );

                    echo Html::a('',
                        ['/topic/comment/update', 'id' => $model->id],
                        ['title' => '修改回帖', 'class' => 'fa fa-pencil']
                    );
                    echo Html::a('',
                        ['/topic/comment/delete', 'id' => $model->id],
                        [
                            'title' => '删除回复',
                            'class' => 'fa fa-trash',
                            'data' => [
                                'confirm' => "您确认要删除回复吗？",
                                'method' => 'post',
                            ],
                        ]
                    );
                } else {
                    echo Html::a(
                        Html::tag('i', '', ['class' => 'fa fa-thumbs-o-up']) . ' ' . Html::tag('span', $model->like_count) . ' 个赞',
                        '#',
                        [
                            'data-do' => 'like',
                            'data-id' => $model->id,
                            'data-type' => 'comment',
                            'class' => ($model->like) ? 'active' : ''
                        ]
                    );
                    echo Html::a('', '#',
                        [
                            'data-username' => $model->user['username'],
                            'data-floor' => $index,
                            'title' => '回复此楼',
                            'class' => 'fa fa-mail-reply btn-reply'
                        ]
                    );
                }
                ?>
            </span>

        </div>

        <div class="media-body markdown-reply article">
            <?= HtmlPurifier::process(Markdown::process($model->comment, 'gfm')) ?>
        </div>
    </div>
<?php endif ?>
