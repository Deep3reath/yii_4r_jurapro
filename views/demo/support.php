<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<div style="width: 300px; height: 150px; background-color: #222222; display: flex; padding-left: 45px; flex-wrap: wrap;">
        <?php if(isset($model->name, $model->email, $model->message)): ?>
            <h3 style="color: white">Ваше Имя: <?= $model->name; ?></h3>
            <p style="color: white">Ваша почта: <?= $model->email; ?></p>
            <p style="color: white">Ваше сообщение: <?= $model->message; ?></p>
        <?php else: ?>

        <?php endif; ?>
</div>


<?php $form = ActiveForm::begin(); ?>


<?= $form->field($model, 'name')->textInput()->label('Имя') ?>
<?= $form->field($model, 'email')->textInput()->label('Почта') ?>
<?= $form->field($model, 'message')->textInput()->label('Сообщение') ?>

<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
