<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div style="display: grid; grid-template-columns: 120px 100px;">
        <p>
            <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <p>
            <?= Html::a('Admin', ['/admin/default'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'header',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
