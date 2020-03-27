<?php

use yii\helpers\Html;

?>

<div class="comments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
        'content' => $content,
    ]) ?>

</div>