<?php

namespace app\controllers;

use yii\web\Controller;

class TestCleanCode extends Controller
{

    public function actionSum($num1 = 0, $num2 = 0)
    {
        return $num1 + $num2;
    }

  
}
