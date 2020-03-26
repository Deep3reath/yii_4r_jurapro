<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>
<div class="site-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fio') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'login') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'repeat_password') ?>
        <?= $form->field($model, 'role') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'file') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-form -->
