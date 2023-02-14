<?php

namespace backend\models;

use Yii;

/**
 * Team：Novas
 * Author：刘嗣旸 2013458
 * Date：2023/2/8
 * Statement：管理员账号表
 */


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
