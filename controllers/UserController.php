<?php

namespace app\controllers;
use app\models\User;
use yii\data\ActiveDataProvider;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = User::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionView($id)
{
    $user = User::findOne($id);
    return $this->render('view');

}

    public function actionTambah()
    {
        $user = new User;
        $user->nim = '123';
        $user->password = '1234';
        $user->name = 'Andi Khalil';
        $user->image = 'AndiKhalil';
        $user->tgl_lahir = 'A';
        if ($user->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($user->getError());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $user = User::findOne($id);
        $user->password = '2223';
        if ($user->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($user->getError());
            die();
        }
    }

    public function actionDelete($id)
    {
        $user = User::findOne($id);
        if ($user->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($user->getError());
            die();
        }
    }
}



