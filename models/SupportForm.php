<?php
// определяем пространство имен
namespace app\models;
// используем пространство имен

use yii\base\Model;


class SupportForm extends Model
{
    public $name;
    public $email;
    public $message;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Почта',
            'message' => 'Сообщение'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
            [['email'], 'email'],
        ];
    }

}