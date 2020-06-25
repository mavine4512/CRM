<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Registration;


class RegistrationController extends Controller{

public function actionRegistration()
{
    $model = new Registration();

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {

        // valid data received in $model
          $model->password = password_hash($model->password,PASSWORD_BCRYPT,['cost'=>14]);
        // do something meaningful here about $model ...
       if($model->save()){
     return $this->render('confirm', ['model' => $model]);
  }else
   {
  echo "Not saved";
}
 // either the page is initially displayed or there is some validation error      
   }else {
  return $this->render('register', ['model' => $model]);
}
}

}
