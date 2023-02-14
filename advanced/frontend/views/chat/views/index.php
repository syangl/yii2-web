<?php
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="/advanced/frontend/web/">GOOD</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown active">
            <a href="/advanced/frontend/web/">Home</a>
          </li>
          <li><a href="/advanced/frontend/web/index.php?r=home/news">News</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=question/index">Questions</a></li>
          <!-- <li><a href="/advanced/frontend/web/index.php?r=site/feed& {{ $model->username }}">Message Board</a></li> -->
          <li><?=HTML::a('Message Board',['/login/feed', 'username' => $this->title]) ?></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documents <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="statics\doc1.html">需求文档</a></li>
              <li><a href="statics\doc2.html">设计文档</a></li>
              <li><a href="statics\doc3.html">实现文档</a></li>
              <li><a href="statics\doc4.html">用户手册</a></li>
              <li><a href="statics\doc5.html">部署文档</a></li>
              <li><a href="statics\doc6.html">项目展示PPT</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/advanced/frontend/web/index.php?r=account/create">Signup</a></li>
              <li><a href="/advanced/frontend/web/index.php?r=login/login">Login</a></li>
              <li><a href="/advanced/frontend/web/">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
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