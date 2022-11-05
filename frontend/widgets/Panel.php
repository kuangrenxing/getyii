<?php


namespace frontend\widgets;

class Panel extends \yii\bootstrap\Widget
{
    public $items = [];
    public $title = '';

    public function run()
    {
        $model = [
            'items' => $this->items,
            'title' => $this->title,
        ];

        return $this->render('panel', [
            'model' => $model,
        ]);
    }
}
