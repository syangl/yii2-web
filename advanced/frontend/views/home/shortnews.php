<?php 
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use backend\models\news;

$news= new news();
// $newscom->id=6;
$sql="select*from news";
$r=news::findBySql($sql)->asArray()->all();
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

    <div class="container">

    <p align="center"><span style="font-size: 40px">新闻短报</span></p>


    </div>

<p align="center"><span style="font-size: 25px">
<?php
foreach($r as $v) 
{
    echo $v["title"].'<br/>';
    echo$v["date"].'<br/>';
    echo $v["content"].'<br/>'.'<br/>';
}
// echo '<br/>';
// print_r($r[0]["content"]);
?>
</span></p>