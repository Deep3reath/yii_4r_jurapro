<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="body-content" style="display: flex; flex-flow: column">
        <?php foreach ($content as $row): ?>
        <div class="row">
            <div class="col-lg-4">
                <h2><?= $row->title?></h2>

                <p><?= $row->body ?></p>
                <p style="color: lightgray; font-size: 11px">
                    Комментарии:
                </p>
                <?php foreach ($comments as $row): ?>
                    <p style="color: gray; font-size: 10px;">
                        <?= $row->text ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
