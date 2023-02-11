<?php
namespace frontend\models;

/**
 * 留言表单模型
 */
use Yii;
use yii\base\Model;

class FeedsForm extends Model
{
    public $content;

    public $_lastError;

    public function rules()
    {
        return [
            ['content', 'required'],
            ['content', 'string', 'max'=>255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '留言内容',
        ];
    }

    /**
     * 获取留言列表
     * @return array
     */
    public function getList()
    {
        $model=new Feeds();
        $res=$model->find()
            ->limit(10)
            ->with('user')
            ->orderBy(['id'=>SORT_DESC])
            ->asArray()
            ->all();

        return $res?:[];
    }
}