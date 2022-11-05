<?php


namespace frontend\widgets;

use common\services\UserService;

class Nav extends \yii\bootstrap\Widget
{

    public function run()
    {
        $notifyCount = UserService::findNotifyCount();

        return $this->render('nav', [
            'notifyCount' => $notifyCount,
        ]);
    }
}
