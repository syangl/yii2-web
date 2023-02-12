<?php
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="pen">
<!-- 留言板 -->
<div class="panel-title box-title">
    <span><strong>留言板</strong></span>
    <!-- <span class="pull-right"><a href="#" class="font-12">更多》</a></span> -->
</div>

<div class="feeds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content')->textarea(['maxlength' => true, 'style'=>'width:800px;height:400px']) ?>

    <div class="form-group">
        <?= Html::submitButton('发表', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<div class="panel-body">

    <?php if (!empty($data['feed'])):?>
        <ul class="media-list media-feed feed-index ps-container ps-active-y">
            <?php foreach ($data['feed'] as $list):?>
                <li class="media">
                    <div class="media-left"><a href="#" rel="author" data-original-title="" title="">
                            <img alt="" class="avatar-img" style="width:37px;height:37px;" src="/advanced/frontend/web/statics/img/bocchi.jpg"/></a></div>
                    <div class="media-body">
                        <div class="media-content">
                            <a href="#" ><?=$list['username']?>: </a>
                            <span><?=$list['content']?></span>
                        </div>
                        <div class="media-action">
                            <?=date('Y-m-d h:i:s',$list['created_at'])?>
                        </div>
                    </div>

                </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
</div>