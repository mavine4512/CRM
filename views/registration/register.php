<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class='register_form'>
<h1 class='register'>Registration</h1>
<!-- sending data to database -->

 
 <?php $form=ActiveForm::begin(['options'=>['id'=>'Register','enctype'=>'multipart/form-data']]) ?>

  <div class='row'>
  	<div class='col-lg-3 col-md-6 mx-auto' style="width:250px">
  		<?= $form->field($model,'name')->textInput(['maxlength' => true])?>
      <?= $form->field($model,'email')->textInput(['maxlength' => true])?>
       <?= $form->field($model,'phone')->textInput()?>
         <?= $form->field($model,'password')->textInput()?>
       <?= Html::submitButton('Register',['class'=>'btn btn-success']);?>  
   <?= Html::a('Login', ['/site/login']);?>
   </br>
  	</div>
  </div>

 <?php ActiveForm::end(); ?>
 </div>