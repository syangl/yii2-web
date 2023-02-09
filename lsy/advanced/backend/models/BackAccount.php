<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%back_account}}".
 *
 * @property int $aid
 * @property string $username
 * @property string $password
 */
class BackAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%back_account}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
