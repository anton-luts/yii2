<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Admin;

class AdminController extends Controller
{
    public function actionIndex()
    {
       return $this->render('index');
       
}
}