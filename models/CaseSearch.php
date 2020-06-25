<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cases;


class CaseSearch extends Cases
{

    public function rules()
    {
        return [

            [['file','status','title','descriptions','date_at'], 'string'],
        ];
    }


    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = Cases::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
        
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'file'=> $this->file,
            'title'=>$this->title,
            'description'=>$this->descriptions,
            'date_at'=>$this->date_at,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
