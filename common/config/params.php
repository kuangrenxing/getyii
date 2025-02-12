<?php
return [
    'adminEmail' => '462635006@qq.com',
    'backupEmail' => '462635006@qq.com',
    'supportEmail' => '462635006@qq.com',
    'user.passwordResetTokenExpire' => 3600,
//    'avatarPath' => Yii::$app->basePath . '/uploads/avatars/',
//    'avatarUrl' => Yii::$app->urlManager->baseUrl . '/uploads/avatars/',
    'avatarPath' => '/web/uploads/avatars/',
    'avatarUrl' => '/uploads/avatars/',
    'avatarCachePath' => '/web/uploads/avatars/cache/',
    'avatarCacheUrl' => '/uploads/avatars/cache/',
    'icon-framework' => 'fa',  // Font Awesome Icon framework
    'qrCodePath' => '/web/uploads/qr-code/',
    'qrCodeUrl' => '/uploads/qr-code/',
    'newUserPostLimit' => 0, // 防止 spam，可限制新注册用户多少秒之后才能发帖，默认0代表不限制，单位是秒
    'smToken' => '', // https://sm.ms/home/apitoken
];
