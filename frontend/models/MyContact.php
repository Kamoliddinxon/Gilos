<?php

namespace frontend\models;

use yii\base\Model;

class MyContact extends Model
{
    public $malumot;

    public function rules()
    {
        return [
            [['malumot'], 'required']
        ];
    }
}