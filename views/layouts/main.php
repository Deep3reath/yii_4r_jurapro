<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\models\Page;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


$pages = Page::find()->where(['visible' => 1])->orderBy('order')->all();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php




    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    //Общий список для всех ролей пользователей
    $items = [];
    for ($i = 0; $i < count($pages); $i++) :
        array_push($items, ['label' => "{$pages[$i]->btn}", 'url' => ["/{$pages[$i]->title}"]]);
    endfor;

    if (!Yii::$app->user->isGuest) {

        if (Yii::$app->user->identity->role === 1) {
            $items[] =
                ['label' => 'Администрирование', 'items' => [
                    ['label' => 'Управление страницами', 'url' => ['/admin/page']],
                    ['label' => 'Управление комментариями', 'url' => ['/admin/comments']],
                    ['label' => 'Управление контентом', 'url' => ['/admin/content']],
                    ['label' => 'Управление пользователями', 'url' => ['/admin/users']],
                    ]];
        }
        $items[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->login . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    } else {
        //если не зарегистрированный пользователь
        $items = array_merge($items, [
            ['label' => 'Вход', 'url' => ['/site/login']],
            ['label' => 'Регистрация', 'url' => ['/site/register']],
        ]);
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
