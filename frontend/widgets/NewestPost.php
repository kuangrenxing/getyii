<?php


namespace frontend\widgets;

use common\models\Post;

class NewestPost extends \yii\bootstrap\Widget
{
	public $options = [];

    public function getPost()
    {
        return $model = Post::find()
            ->where(['status' => 1])
            ->orderBy(['order' => SORT_ASC, 'created_at' => SORT_DESC])
            ->limit(3)->all();
    }
}
