<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class  Registration  extends ActiveRecord
{
    
public static function tableName(){
		return "users";
	}
public function rules()
{
    return [
        [['name','email','phone','password'],'required'],
        ['email','email'],
      
    ];
}
 public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'User Name',
             'email' => 'Email',
             'phone'=>'Phone',
             'password'=>'Password',
             
        ];
    }
}