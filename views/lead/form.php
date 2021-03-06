<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
       <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
          <?= $form->field($model, 'phone')->textInput() ?>
          <?= $form->field($model, 'password')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
