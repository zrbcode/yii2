<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>做测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div class="header">
这里是yii变量：<?=Yii::$app->user->getId()?>
<br>
这里是yii的版本：<?=Yii::$app->version?>&nbsp;调用过程:yii/web/application->yii/base/application->version;
</body>
</html>