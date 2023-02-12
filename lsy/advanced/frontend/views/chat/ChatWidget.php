<?php
namespace frontend\views\chat;
/**
 * 留言板组件
 */
use frontend\models\Feeds;
use frontend\models\FeedsForm;
use Yii;
use yii\bootstrap4\Widget;

class ChatWidget extends Widget
{
    public $model;

    public function run()
    {
        $feed=new FeedsForm();
        $data['feed']=$feed->getList();

        return $this->render('index', ['data'=>$data, 'model'=>$this->model]);
    }
}