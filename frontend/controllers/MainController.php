<?php

namespace frontend\controllers;

use frontend\models\Image;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


}
