<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Account */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Good - Bootstrap Corporate Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/flat-ui/css/flat-ui.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

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
          <li><a href="TODO:">News</a></li>
          <li><a href="TODO:">Questions</a></li>
          <li><a href="TODO:">Message Board</a></li>
          <li><a href="TODO:">Documents</a></li>
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
  <!-- Aboutrwrap -->
  <div id="aboutwrap">
    <div class="container">
      <div class="row">
        <h1><br/> <b>欢迎</b>, <?= Html::encode($this->title) ?></h1>
      </div>
    </div>
  </div>
  <!-- /aboutrwrap -->


  <!-- Intro Section -->
  <div class="container sinfo">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h4><b>Welcome</b>!</h4>
      </div>
    </div>
    <!-- /row -->
    <hr>
  </div>
  <!-- /container -->

</body>
</html>

