<?php

namespace frontend\models;

use common\models\User;
use Yii;


/**
 * Team：Novas
 * Author：刘嗣旸
 * Date：2023/2/8
 * Statement：用户账号
 */

/**
 * This is the model class for table "{{%account}}".
 *
 * @property int $aid
 * @property string $username
 * @property string $password
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%account}}';
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

    /**
     * Summary of myFind
     * @param mixed $condition
     * @return array|bool
     */
    public function myFind($condition){
        return User::find()->where($condition)->one();
    }
}
