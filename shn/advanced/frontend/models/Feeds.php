<?php

namespace frontend\models;

use Yii;

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
            [['created_at'], 'integer'],
            [['username', 'content'], 'string', 'max' => 255],
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
