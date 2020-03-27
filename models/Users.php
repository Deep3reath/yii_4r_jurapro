<?php

namespace app\models;
use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property int $role
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{/**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }
    public function validatePassword($password)
    {
        return $this->password == $password;
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password'], 'required'],
            [['role'], 'integer'],
            [['login'],'string', 'max' => 31],
            [['login'],'unique'],
            [['password'], 'string', 'max' => 61],
            [
                ['password'],'match',
                'pattern'=> '/^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]{6,}$/u'
            ],
        ];
    }



    public function upload()
    {
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'password' => 'Пароль',
            'repeat_password' => 'Повторите пароль',
        ];

    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }

    public function findByLogin($login)
    {
        return self::findOne(['login' => $login]);
    }

}
