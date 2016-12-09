<?php

use yii\web\Application;

defined('YII_DEBUG') or define('YII_DEBUG', TRue);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$app = new Application([
    'id'=>'zxcasdasd',
    'basePath'=>dirname(__DIR__)
]);
$app->run();
