<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

global $num;
$num = 0;

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
          <!-- <li><?=HTML::a('Message Board',['/login/feed', 'username' => $this->title]) ?></li> -->
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

<h1>Questions</h1>
<img class="img-responsive" src="statics\img\blog-post02.jpg" alt="" style="width:1400px;height:200px;">
<ul>
<form method="post"
action="/advanced/frontend/web/index.php?r=question/answer">

<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[0]->ID} : {$questions[0]->txt}") ?></p>
</li>
<p>
<input type="radio" name="q1" value=1>是
<input type="radio" name="q1" value=0>否
<input type="radio" name="q1" value=2 checked="checked">不知道
</p>
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[1]->ID} : {$questions[1]->txt}") ?></p>
</li>
<p>
<input type="radio" name="q2" value=1>是
<input type="radio" name="q2" value=0>否
<input type="radio" name="q2" value=2 checked="checked">不知道
</p>
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[2]->ID} : {$questions[2]->txt}") ?></p>
</li>
<p>
<input type="radio" name="q3" value=1>是
<input type="radio" name="q3" value=0>否
<input type="radio" name="q3" value=2 checked="checked">不知道
</p>
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[3]->ID} : {$questions[3]->txt}") ?></p>
</li>
<p>
<input type="radio" name="q4" value=1>是
<input type="radio" name="q4" value=0>否
<input type="radio" name="q4" value=2 checked="checked">不知道
</p>
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[4]->ID} : {$questions[4]->txt}") ?></p>
</li>
<p>
<input type="radio" name="q5" value=1>是
<input type="radio" name="q5" value=0>否
<input type="radio" name="q5" value=2 checked="checked">不知道
</p>

<p style="font-size:20px;"><br><input  type="submit" value="发送" class="sub">
    <input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" 
    value="<?=\Yii::$app->request->csrfToken?>"/></span>
</p >
</form>

</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>