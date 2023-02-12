<div>
    <!--留言板-->
    <?= $model->username = Yii::$app->request->getQueryParam('username')?>
    <?= \frontend\views\chat\ChatWidget::widget(['model' => $model])?>
</div>