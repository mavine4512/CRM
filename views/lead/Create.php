<?php

use yii\helpers\Html;


$this->title = 'New Lawyer';
$this->params['breadcrumbs'][] = ['label' => 'Index', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-create">

    <div class='row'>
    	<div class="col-lg-4 col-md-4 col-sm-4">
    		<h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>
    	</div>
    </div>

</div>
