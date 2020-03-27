<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property int $id_page
 * @property string|null $title
 * @property string $body
 * @property int $order
 * @property string $meta
 *
 * @property Comments[] $comments
 * @property Page $page
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_page', 'body', 'order', 'meta'], 'required'],
            [['id_page', 'order'], 'integer'],
            [['body', 'meta'], 'string'],
            [['title'], 'string', 'max' => 127],
            [['id_page'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['id_page' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_page' => 'Id Page',
            'title' => 'Title',
            'body' => 'Body',
            'order' => 'Order',
            'meta' => 'Meta',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['id_content' => 'id']);
    }

    /**
     * Gets query for [[Page]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'id_page']);
    }
}
