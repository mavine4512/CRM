<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;


class CustomerSearch extends Customer
{

    public function rules()
    {
        return [
             [[ 'Phone'], 'integer'],
            [['name','email','signupDate'], 'string'],
        ];
    }


    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = Customer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'Phone' => $this->Phone,
            'signupDate' => $this->signupDate,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
