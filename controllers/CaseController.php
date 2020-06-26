<?php

namespace app\controllers;

use Yii;
use app\models\Cases;
use app\models\CaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
  // access is used for authentication and is place at the header for user to see index page
use yii\filters\AccessControl;

use app\models\UploadForm;
use yii\web\UploadedFile;


class CaseController extends Controller
{

    public function behaviors()
    {
        return [
          'access' => [
            //authentication for user to see index page
              'class' => AccessControl::className(),
              'only' => ['login', 'logout', 'signup','index'],
              'rules' => [
                [
                     'allow' => true,
                     'actions' => ['login', 'signup','create'],
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
        $searchModel = new CaseSearch();
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
        $model = new Cases();
        // making userid and customerId unique in another table
        $id=Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post())){
           $model->userId = $id && $model->customerId=$id; $model->save();
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

// delete action
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    //update action
     public function actionUpload()
    {
        $model = new UploadForm();

        // if (Yii::$app->request->isPost) {
        //     $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
        //     if ($model->upload()) {
        //         // file is uploaded successfully
        //         return;
        //     }
        if (Yii::$app->request->isPost) {
          //If validation is successful, then we're saving the file:
       $model->file = UploadedFile::getInstance($model, 'file');

       if ($model->validate()) {
           $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
       }
   }
   return $this->render('upload', ['model' => $model]);

        }

    //     return $this->render('upload', ['model' => $model]);
    // }

    protected function findModel($id)
    {
        if (($model = Cases::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
