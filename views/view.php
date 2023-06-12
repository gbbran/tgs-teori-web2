<?php

use yii\widgets\DetailView;
use yii\grid\ActionColumn;


$this->user = $user->id;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->user;
?>
<div class="user">

    <h1><?= \yii\helpers\Html::encode($this->user) ?></h1>

    <?= DetailView::widget([
        'dataprovide' => $dataProvider,
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'username',
        'password',
        'name',
        'image',
        'tgl_lahir',
            // tambahkan atribut lainnya sesuai kebutuhan
        ])
 ?>

</div>
