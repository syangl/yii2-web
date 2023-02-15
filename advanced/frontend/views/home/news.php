<!-- <?php
     use yii\helpers\Html;

/* @var $this yii\web\View */

?>

        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://news.nankai.edu.cn/">Get started with Yii</a></p> -->
        <!doctype html>
<html lang="en">


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title></title>
    <style type="text/css">
        table{width:400px;}
        th{height:25px;}
        td{text-align:center;height:45px;}
    </style>
</head>
<style>
    body{
        width: 100%;
        text-align: center;
    }
</style>
<nav class="navbar navbar-inverse">
  <div class="container">
      <div class="navbar-brand">
              新闻系统
      </div>
  </div>
  
</nav>
<body>
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

<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<p align="center"><span style="font-size: 40px"><td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/news1" target="_blank">我校参加2023年度天津市教育工作会议</a></div></td>
<td width="20%" align="right" valign="middle" ><div align="right">2023-02-08</div></td></span></p>
</tr>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/news2" target="_blank">南开学者提出高维光量子纠缠高效表征方法</a></div></td>
<td width="20%" align="right" valign="middle" ><div align="right">2023-02-08</div></td>
</tr>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/news3" target="_blank">南开学者提出电化学转化石灰石制消石灰及有价值碳质产物的低碳水泥生产方法</a></div></td>
<td width="20%" align="right" valign="middle" ><div align="right">2023-02-09</div></td>
</tr>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/news4" target="_blank">南开团队发展膨胀单分子定位超分辨成像洞见红细胞双凹圆饼状骨架不对称性</a></div></td>
<td width="20%" align="right" valign="middle" ><div align="right">2023-02-06</div></td>
</tr>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/news5" target="_blank">我校三家科普基地被认定为天津市科普基地</a></div></td>
<td width="20%" align="right" valign="middle" ><div align="right">2023-01-27</div></td>
</tr>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/news6" target="_blank">我校师生在第四届中华经典诵写讲大赛中获佳绩
<td width="20%" align="right" valign="middle" ><div align="right">2023-02-07</div></td>
</a></div></td>
</tr>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80%" valign="middle" ><div align="left"><a href="/advanced/frontend/web/index.php?r=home/shortnews" target="_blank">查看更多新闻短报...</a></div></td>
</tr>
</table>
</html>
