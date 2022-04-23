<?php

namespace common\models;

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

class Phone extends ActiveRecord
{

    public static function tableName()
    {
        return '{{phone}}';
    }

}