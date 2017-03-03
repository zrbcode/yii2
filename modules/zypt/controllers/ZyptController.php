<?php

namespace app\modules\zypt\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use Yii;
class ZyptController extends Controller
{
	//public $layout  = 'layout';
    /**
     * @用户授权规则
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index','get-name','show-live-list','test-data','show-ext'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionGetName(){
    	return $this->render('getname');
    }
    //显示正在直播的列表
    public function actionShowLiveList(){
    	$connection = Yii::$app->db1;
        $sql = "select * from hvideo_db_3_1_0.hv_live_video h join service.agency a on h.agency_id=a.agency_id join service.user u on h.userid=u.user_id";
        $res = $connection->createCommand($sql)->queryAll();
        return $this->render("showlivelist",array("res"=>$res));
    }
    public function actionTestData(){
    	$connection = Yii::$app->db1;
    	$sql = "select * from hvideo_db_3_1_0.hv_live_video h join service.agency a on h.agency_id=a.agency_id";
    	$res = $connection->createCommand($sql)->queryAll();
    	var_dump($res);
    }
    //show ext
    public function actionShowExt(){
        print_r($_SESSION);exit;
        
    }



}
