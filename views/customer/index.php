<!DOCTYPE html>
<html>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Customer';
$this->params['breadcrumbs'][] = $this->title;
// print_r($dataProvider);
// exit;

?>
<div class=" ">

    <h1><?= Html::encode($this->title) ?></h1>

 <p>
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success']) ?>
      </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
              'name',
              'email',
              'Phone',

          ['class' => 'yii\grid\ActionColumn'],

         ],
    ]); ?>
<div>
</div>
</html>
