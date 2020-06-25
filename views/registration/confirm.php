<?php
use yii\helpers\Html;
?>

<h5>You have entered the following information as your account dateils:</h5>

<ul>
    <li><label>User Names</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->password) ?></li>
    <li><label>email</label>: <?= Html::encode($model->email) ?></li>
</ul>