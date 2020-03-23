<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FilmStorage */

$this->title = 'Create Film Storage';
$this->params['breadcrumbs'][] = ['label' => 'Film Storages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-storage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
