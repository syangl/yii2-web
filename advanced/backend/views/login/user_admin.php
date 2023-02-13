<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BackAccount */

// $this->title = $model->username;
// $this->params['breadcrumbs'][] = ['label' => 'Back Accounts', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="statics/assets/css/layui.css">
    <link rel="stylesheet" href="statics/assets/css/view.css" />
    <link rel="icon" href="favicon.ico">
    <title>管理后台</title>
</head>

<body>
    <div class="layui-card-body">
        <div class="form-box">
            <div class="layui-form layui-form-item">
                <div class="layui-inline">
                    <!-- <div class="layui-form-mid">
                                    <h1></h1>
                                </div> -->
                    <div class="blogcontent">
                        <!-- First Post -->
                        <img class="img-responsive" src="statics\assets\images\blog-post03.jpg" alt="" style="width:1100px;height:200px;">
                        <h2><b>欢迎！管理员</b>
                            <!-- <?= Html::encode($this->title) ?> -->
                        </h2>
                        <small><span class="fui-user"></span> Novas | <span class="fui-calendar"></span> Feb 13, 2023 |
                            <span class="fui-chat"></span> 3 functions</small>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="login-container">

        <form class="login-form">
            <h3 align="center">进行用户管理</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=user-manage/index">确认</a>
            </h3>
            <br>
            <br>
            <br>
            <h3 align="center">进行新闻添加</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=home/newsadd">确认</a>
            </h3>
            <br>
            <br>
            <br>
            <h3 align="center">进行团队成员信息更新</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=home/messshow">确认</a>
            </h3>
        </form>
    </div>
</body>