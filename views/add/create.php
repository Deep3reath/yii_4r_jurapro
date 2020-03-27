<?php

use app\models\Users;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$id = Yii::$app->user->identity->getId();

$this->title = 'Create Comments';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'content' => \app\models\Content::find()->orderBy('order')->all(),
        'user' => Users::findOne(['id' => $id])->id,
    ]) ?>

</div>
