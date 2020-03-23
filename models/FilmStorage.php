<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film_storage".
 *
 * @property int $id
 * @property string $header
 * @property string $description
 * @property string $date
 */
class FilmStorage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film_storage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['header', 'description', 'date'], 'required'],
            [['date'], 'safe'],
            [['header', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header',
            'description' => 'Description',
            'date' => 'Date',
        ];
    }
}
