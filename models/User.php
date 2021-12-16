<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $e-mail
 * @property string|null $login
 * @property string|null $pass
 * @property string|null $isAdmin
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'e-mail', 'login', 'pass', 'isAdmin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'e-mail' => 'E Mail',
            'login' => 'Login',
            'pass' => 'Pass',
            'isAdmin' => 'Is Admin',
        ];
    }
}
