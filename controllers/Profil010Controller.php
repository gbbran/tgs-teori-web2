<?php

namespace app\controllers;

use app\models\Profil010;
use yii\data\ActiveDataProvider;

class Profil010Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil010::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}