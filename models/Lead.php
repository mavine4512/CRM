<?php

namespace app\models;

use Yii;


class Lead extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
             [[ 'phone'], 'integer'],
            [['name','email','password'], 'string'],
            ['email','email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'phone' => 'Phone',
            'name' => 'Name',
            'email'=>'Email',
            'password'=>' Password',
        ];
    }
    public static function createNew($name,$email,$id) {
        $model = new Lead();
        // $model->id = $id;
        $model->name = $name;
        $model->email = $email;
        $model->save();
        if($model) {
            return true;
        }
        else {
            return false;
        }

 }  
}