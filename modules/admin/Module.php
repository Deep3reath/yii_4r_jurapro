<?php

namespace app\modules\admin;

class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        if (\Yii::$app->user->isGuest || \Yii::$app->user->identity->role != 1) {
            return \Yii::$app->response->redirect(['site/login']);
        }
        return null;
    }
}