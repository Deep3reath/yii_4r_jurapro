<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Новости</h2>
        <?php for ($i = 0; $i < count($news); $i++): ?>
            <div style="display: flex; flex-flow: column;">
                <div>

                    <h3 style="font-size: 18px;">
                        <span>#<?= $news[$i]->id ?> </span><?= $news[$i]->header ?>
                    </h3>
                </div>
                <div>
                    <p style="font-size: 14px;">
                        <?= $news[$i]->text ?>
                    </p>
                </div>
                <div>
                    <p style="font-size: 11px;">Комментарии:</p>
                    <?php for ($j = 0; $j < count($comments); $j++): ?>
                        <?php if($comments[$j]->news_id == $news[$i]->id): ?>
                        <div>
                            <p style="font-size: 10px;">
                                <?= $comments[$j]->text;?>
                            </p>
                        </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

