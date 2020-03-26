<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div style="display: grid; grid-template-columns: 150px 100px;">
        <p>
            <?= Html::a('Create Comments', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <p>
            <?= Html::a('Admin', ['/admin/default'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'news_id',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
