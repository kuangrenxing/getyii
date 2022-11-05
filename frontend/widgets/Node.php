<?php


namespace frontend\widgets;

use common\models\PostMeta;

class Node extends \yii\bootstrap\Widget
{
    public function run()
    {
        $nodes = PostMeta::getNodes();

        return $this->render('node', [
            'nodes' => $nodes
        ]);
    }
}
