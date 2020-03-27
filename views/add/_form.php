<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id_content')->dropDownList(ArrayHelper::map($content, 'id', 'title')) ?>
    <?= $form->field($model, 'id_user')->textInput(['maxlength' => 255])->label(false)->hiddenInput(['value' => $user]); ?>

    <?= $form->field($model, 'time_comments')->dropDownList([date('Y-m-d')]) ?>


    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
