<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $body
 * @property string|null $date
 * @property int|null $category_id
 * @property int|null $user_id
 * @property int|null $status
 * @property string|null $photo
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['date'], 'safe'],
            [['category_id', 'user_id', 'status'], 'integer'],
            [['title', 'photo'], 'string', 'max' => 255],
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
            'body' => 'Body',
            'date' => 'Date',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'photo' => 'Photo',
        ];
    }
}
