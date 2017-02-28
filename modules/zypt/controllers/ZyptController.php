<?php

namespace app\Modules\zypt\controllers;

use yii\web\Controller;

class ZyptController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionGetName(){
    	return $this->render('getname');
    }
}
