<div class="zypt-default-index">
    test
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

<?php

if($res){
	echo "直播列表";
	echo "<hr/>";
	echo "直播间-----直播密码------讲师------直播时间-------结束时间------直播地址-------所属机构----创建人<br/>";
	foreach($res as $k=>$v){
		echo $v['room_name']."-----".$v['video_password']."------".$v['teacher_name']."------".$v['start_time']."-------".$v['end_time']."------".$v['code']."------".$v['agency_name']."------".$v['user_realname']."<br/>";
	}
}
else{
	echo "xxx";
}
	

?>