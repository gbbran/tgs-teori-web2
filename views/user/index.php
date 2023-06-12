<?php

    use app\models\User;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

?>

<div>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('User Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'user name',
            'password',
            'nama',
            'image',
            'tgl-lahir',
            // 'profil015.foto_profile',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ]

        ]
    ])
    
    ?>  

</div>