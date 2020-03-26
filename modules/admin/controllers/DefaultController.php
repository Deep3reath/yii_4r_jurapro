<?php

namespace app\modules\admin\controllers;

use app\models\News;
use app\models\User;
use app\models\NewsSearch;
use app\models\Comments;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $lastUsers = User::find()->orderBy('id desc')->limit(3)->all();
        $news = News::find()->orderBy('id desc')->all();
        $comments = Comments::find()->orderBy('id desc')->all();

        return $this->render('index', [
            'lastUsers' => $lastUsers,
            'news' => $news,
            'comments' => $comments
        ]);
    }
}
