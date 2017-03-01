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
<?php
	//print_r($res);exit;
	if($res){
		foreach($res as $k=>$v){
			echo $v['user']."-----".$v['accessToken']."<br/>";
		}
	}
?>
</div>
</body>
</html>