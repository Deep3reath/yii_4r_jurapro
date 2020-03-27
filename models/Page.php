<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Page".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $btn
 * @property int $order
 * @property int $visible
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order', 'visible'], 'required'],
            [['order', 'visible'], 'integer'],
            [['title'], 'string', 'max' => 127],
            [['btn'], 'string', 'max' => 63],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'btn' => 'Btn',
            'order' => 'Order',
            'visible' => 'Visible',
        ];
    }
}




