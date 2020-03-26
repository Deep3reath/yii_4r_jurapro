<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>
<div class="site-register">

    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'enableAjaxValidation' => true
    ]); ?>

    <?= $form->field($model, 'fio') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'login') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'repeat_password')->passwordInput() ?>
    <?= $form->field($model, 'file', ['enableAjaxValidation' => false])->fileInput()
    ?>

    <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
