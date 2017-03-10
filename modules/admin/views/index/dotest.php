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
<div class="admin-index-index">
    dotest-aaaa
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
<div class="header">
	ActiveForm的使用方法。
这里是yii变量：<?=Yii::$app->user->getId()?>-------<?=$data?>
<br>
这里是yii的版本：<?=Yii::$app->version?>&nbsp;调用过程:yii/web/application->yii/base/application->version;
<br/>
以下使用创建一个表单
<?php $form = ActiveForm::begin(['id' => 'contact-form','action'=>'/admin/index/usersearch','method'=>'post']); ?>
    <?= $form->field($model, 'search') ?>
    <div class="form-group">
    	<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>
<?php ActiveForm::end(); ?>
</div>

</body>
</html>