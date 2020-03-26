<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

<div class="admin-default-index">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Контент</h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($news as $row): ?>
                        <div style="border: .5px solid lightgray; display: grid; grid-template-columns: 1fr 1fr 1fr;">
                            <div>
                                <p>
                                    ID - <?= $row->id ?>
                                </p>
                            </div>
                            <div>
                                <h4>
                                    Заголовок
                                </h4>
                                <p>
                                    <?= $row->header ?>
                                </p>
                            </div>
                            <div>
                                <h4>
                                    Текст
                                </h4>
                                <p>
                                    <?= $row->text ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">Комментарии</h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($comments as $row): ?>
                        <div style="border: .5px solid lightgray; display: grid; grid-template-columns: 1fr 1fr 1fr;">
                            <div>
                                <p>
                                    ID - <?= $row->id ?>
                                </p>
                            </div>
                            <div>
                                <h4>
                                    Заголовок к какому посту
                                </h4>
                                <p>
                                    <?= $row->news_id ?>
                                </p>
                            </div>
                            <div>
                                <h4>
                                    Текст
                                </h4>
                                <p>
                                    <?= $row->text ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Последние зарегистрировавшиеся пользователи
                    </h3>
                </div>
                <div class="panel-body">
                    <?php
                    foreach ($lastUsers as $user): ?>
                        <div class="media">
                            <a href="<?= yii\helpers\Url::to(['user/view', 'id' => $user->id]) ?>" target="_blank">
                                <div class="media-left">
                                    <img class="media-object" style="width: 50px;" src="<?= $user->image ?>"
                                         alt="<?= $user->login ?>">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?= $user->login ?>
                                    </h4>
                                    <?= $user->fio ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div>
                <?php
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Edit News', 'url' => ['/admin/news/']],
                        ['label' => 'Edit Comments', 'url' => ['/admin/comments/']],
                    ],
                ]);


                ?>
            </div>
        </div>
    </div>
</div>
