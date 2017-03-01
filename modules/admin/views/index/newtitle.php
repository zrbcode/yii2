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
    <?=Html::jsFile('@web/assets/js/jquery-1.8.1.min.js')?>
    <script>
    	$(document).ready(function(){
    		$(this).css("border","1px solid #fff");
    		$(".uppass").focus(function(){
    			$(this).css("border","1px solid #A9BAC9");
    		});
    		$(".uppass").blur(function(){
    			$(this).css("border","1px solid #fff");
    			$.post("/admin/index/loadpa",{'val':$(this).val(),'uid':$(this).attr("id")},function(data){
                    if(data==1){
                        alert("成功："+data);
                    }
                    else{
                        alert("失败："+data);
                    }
    			});
    		});
    	});
    </script>
</head>
<body>

<div class="header">
<?php
foreach($list as $k=>$u){
	echo $u['user']."---".$u['accessToken']."---更新密码：<input type='password' id=".$u['id']." class='uppass'><br/>";
}
?>
</div>
</body>
</html>