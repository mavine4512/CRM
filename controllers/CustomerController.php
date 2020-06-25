<?php

namespace app\controllers;

use Yii;
use app\models\Customer;
use app\models\CustomerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
  // access is used for authentication and is place at the header for user to see index page
use yii\filters\AccessControl;


class CustomerController extends Controller
{

    public function behaviors()
    {
        return [
          'access' => [
              'class' => AccessControl::className(),
                //authentication for user to see index page
              'only' => ['login', 'logout', 'signup','index'],
              'rules' => [
                [
                     'allow' => true,
                     'actions' => ['login', 'signup'],
                     'roles' => ['?'],
                 ],
                  [
                      'actions' => ['logout','index'],
                      'allow' => true,
                      'roles' => ['@'],
                  ],
              ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $searchModel = new CustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Customer();
        // making userid unique in another table
        $id=Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) ) {
          $model->userId = $id; $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Customer::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
