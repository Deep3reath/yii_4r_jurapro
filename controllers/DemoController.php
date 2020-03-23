<?php

namespace app\controllers;
// используем Класс Controller из пространства имен web
use yii\web\Controller;
use app\models\SupportForm;

// контроллер Demo наследуется от Controller
class DemoController extends Controller
{
    public function actionHello()
    {
        $comments = [
            "Lorem ipsum dolor sit amet",
            "Dolor dolore magni quasi ullam voluptas",
            "Delectus eum, libero? Culpa error fugiat impedit",
            "Accusamus"
        ];
        return $this->render('hello', [
            'name' => 'Повелитель',
            'comments' => $comments
        ]);
    }

    public function actionSupport()
    {
        // создаем экземпляр класса Модели
        $model = new SupportForm();
        $model->load($_POST);


        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            // действия в случае успешной валидации
        }

        // передаем ее в представление
        return $this->render('support', [
            'model' => $model
        ]);
    }
}

