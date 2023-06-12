<?php
namespace app\controllers;
use app\models\Mahasiswa010;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use Yii;


class Mahasiswa010Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa010::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa010 = new Mahasiswa010;
        $mahasiswa010->no_induk_mahasiswa = '60200121010-'. rand(10,99);
        $mahasiswa010->nama_mahasiswa = 'Andi Khalil Gibran';
        $mahasiswa010->kelas = 'D';
        $mahasiswa010->status = 'Baru';
        if ($mahasiswa010->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa010 = mahasiswa010::findOne(['id' => $id]);
        if($mahasiswa010 !== null){
            $mahasiswa010->kelas = 'A';
            $mahasiswa010->status = 'Update';
            $mahasiswa010->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa010= Mahasiswa010::findOne($id);
        if ($mahasiswa010->delete()) {
        return $this->redirect(['index']);
        }
        else {
        var_dump($mahasiswa010->getError());
        die();
        }
    }

    public function actionView($id)
    {
        $mahasiswa010 = mahasiswa010::findOne($id);
        return $this->render('view', ['mahasiswa010' => $mahasiswa010]);
    }

}