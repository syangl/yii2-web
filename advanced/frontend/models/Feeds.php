<?php

namespace frontend\models;

use Yii;

/**
 * Team：Novas
 * Author：施浩南
 * Date：2023/2/11
 * Statement：留言板功能
 */

/**
 * This is the model class for table "{{%feeds}}".
 *
 * @property int $id
 * @property string $username 用户名
 * @property string $content 留言内容
 * @property int $created_at 留言时间
 */
class Feeds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%feeds}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'content', 'created_at'], 'required'],
            [['content'], 'string'],
            [['created_at'], 'integer'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'content' => '留言内容',
            'created_at' => '留言时间',
        ];
    }
}
