<?php

namespace app\models;

use Yii;

use yii\base\Model;
use yii\web\UploadedFile;

class Cases extends \yii\db\ActiveRecord
{
  public $file;
      //public $imageFiles;

    public static function tableName()
    {
        return 'cases';
    }

    public function rules()
    {
        return [

            [['status','title','descriptions','date_at'], 'string'],
         //[['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
         [['file'], 'file'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'status' => 'Status',
            'title'=>'Title',
            'descriptions'=>'Description',
            'date_at'=>'Date',
            'file' => 'Upload File',

        ];
    }

    // public function upload()
    // {
    //     if ($this->validate()) {
    //         foreach ($this->imageFiles as $file) {
    //             $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
    //         }
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

//not in user.
 //    public static function createNew($name,$email,$id) {
 //        $model = new cases();
 //        // $model->id = $id;
 //        $model->custId = $custId;
 //        $model->userId = $userId;
 //        $model->status = $status;
 //        $model->file = $file;
 //        $model->save();
 //        if($model) {
 //            return true;
 //        }
 //        else {
 //            return false;
 //        }
 //
 // }
}
