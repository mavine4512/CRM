<!DOCTYPE html>
<html>
<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'Lawyers';
$this->params['breadcrumbs'][] = $this->title;
// print_r($dataProvider);
// exit;

?>
<div class=" ">

    <h1><?= Html::encode($this->title) ?></h1>
       <p>
        <?= Html::a('Add Lawyer', ['create'], ['class' => 'btn btn-success']) ?>
      </p>


    <?php // echo $this->render('_search', ['model' => $searchModel]);
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
              'name',
              'email',
              'phone',

          ['class' => 'yii\grid\ActionColumn'],

         ],
    ]); ?>
<div>
</div>
</html>
