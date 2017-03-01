<?php
namespace app\models;
use Yii;
use yii\base\Model;
use app\models\YiiUser;

class UserForm extends Model{
    public  $user;
    public  $pwd;
    public  $verifyCode;
    private $_user = false;
    public $search; //模型先设置相应的属性。
    //？验证规则是否可以设置作用域（不同表单的数据同一模型的情况）
    public function rules(){

        return [
            [['user', 'pwd'], 'required','message'=>'{attribute}不能为空！'],
            ['user', 'string', 'max' => 50,'tooLong'=>'{attribute}长度必需在100以内'],
            ['pwd', 'string', 'max' => 32,'tooLong'=>'{attribute}长度必需在32以内'],
            ['pwd','validatePassword','message'=>'账号或密码不正确！'],
            ['search','string','message'=>'{attribute}搜索条件为空！请重新输入'], //添加模型验证规则
        ];
    }


    /**
     * @
     */
    public function attributeLabels()
    {
        return [
            'user' => '账号',
            'pwd' => '密码',
            'verifyCode'=>'验证',
            'search' =>"搜索用户名："
        ];
    }

    /**
     * @
     */
    public function validatePassword($attribute,$params){

        if(!$this->hasErrors()){
            $user = $this->getUser();
            if(!$user){
                $this->addError($attribute, '账号或密码不正确');
            }
        }

    }

    /**
     * @根据用户名密码查询用户
     */
    public function getUser(){
        if($this->_user===false){
            $this->_user=YiiUser::find()->where(['user'=>$this->user,'pwd'=>md5($this->pwd)])->one();
        }
        return $this->_user;
    }


    /**
     * @用户登录
     */
    public function login(){

        if($this->validate()){
            return Yii::$app->user->login($this->getUser(),3600*24*1);
        }else{
            return false;
        }

    }






}
?>