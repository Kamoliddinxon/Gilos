<?php

namespace frontend\controllers;

use common\models\Phone;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class PhoneController extends Controller
{
    public function actionApple()
    {

        $query = Phone::find()->where(['between', 'id', 1, 48]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('apple', ['dataProvider' => $dataProvider]);
    }


    public function actionSamsung()
    {

        $query = Phone::find()->where(['between', 'id', 49, 92]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('samsung', ['dataProvider' => $dataProvider]);
    }


    public function actionMi()
    {

        $query = Phone::find()->where(['NOT between', 'id', 1, 92]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('mi', ['dataProvider' => $dataProvider]);
    }
}