<?php

    namespace app\controllers;
    use app\models\Mhs;
    use yii\data\ActiveDataProvider;

class MhsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}