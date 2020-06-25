<?php

namespace app\models;

use Yii;


class Customer extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return [
             [[ 'Phone'], 'integer'],
            [['name','email','signupDate'], 'string'],
            ['email','email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'Phone' => 'Phone',
            'name' => 'Name',
            'email'=>'Email',
            'signupDate'=>' Singup Date',
        ];
    }
    // not in user.
 //    public static function createNew($name,$email,$id) {
 //        $model = new Customer();
 //      //  $model->id = $id;
 //        $model->userId = $userid;
 //        $model->name = $name;
 //        $model->email = $email;
 //        $model->save();
 //        if($model) {
 //            return true;
 //        }
 //        else {
 //            return false;
 //        }
 // }
}
