<?php

namespace app\controllers;

class Krs_MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDetail()
    {
        return $this->render('detail');
    }

}
