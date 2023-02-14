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
<h1>Answers</h1>
<img class="img-responsive" src="statics\img\about-bg.jpg" alt="" style="width:1400px;height:200px;">
<ul>

<li>
<p style="font-size:20px;">
<?php
if($_POST["q1"]==$trueans[0]->TF)
{
    echo "第一题答对了";
    $num = $num + 1;
}
else{
    echo "第一题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[0]->reason;
?>
</li>

<p>
<li>
<p style="font-size:20px;">
<?php if($_POST["q2"]==$trueans[1]->TF)
{
    echo "第二题答对了";
    $num = $num + 1;
}
else{
    echo "第二题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[1]->reason;
?>
</li>

<p>
<li>
<p style="font-size:20px;">
<?php if($_POST["q3"]==$trueans[2]->TF)
{
    echo "第三题答对了";
    $num = $num + 1;
}
else{
    echo "第三题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[2]->reason;
?>
</li>

<p>
<li>
<p style="font-size:20px;">
<?php if($_POST["q4"]==$trueans[3]->TF)
{
    echo "第四题答对了";
    $num = $num + 1;
}
else{
    echo "第四题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[3]->reason;
?>
</li>

<p>
<li>
<p style="font-size:20px;">
<?php if($_POST["q5"]==$trueans[4]->TF)
{
    echo "第五题答对了";
    $num = $num + 1;
}
else{
    echo "第五题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[4]->reason;
?>
</li>

</ul>

<p style="font-size:20px;">
<?php 
echo "一共答对了{$num}道题,";
if($num==5)
    echo "恭喜您全部答对！";
else{
    echo "您有";
    echo 5-$num;
    echo "道题未回答正确。";
}
?>
</p>

<?= LinkPager::widget(['pagination' => $pagination]) ?>