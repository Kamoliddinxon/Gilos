<?php

namespace frontend\widgets\sidebar;

use yii\base\Widget;

class sidebar extends Widget
{
    public function run()
    {
        return $this->render('sidebar');
    }
}