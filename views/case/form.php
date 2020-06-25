<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="Case-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

  <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descriptions')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
