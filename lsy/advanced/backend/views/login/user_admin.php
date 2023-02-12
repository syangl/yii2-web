<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BackAccount */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Back Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="login-container">
    <h1><b>欢迎！管理员</b><?= Html::encode($this->title) ?></h1>
        <form class="login-form">
            <h2 align="center">进行用户管理</h2>
            <h3 align="center" >
                <a href="\advanced\backend\web\index.php?r=user-manage/index"><b>确认</b></a>
            </h3>
            <h2 align="center">进行新闻添加</h2>
            <h3 align="center" >
                <a href="\advanced\backend\views\home\newsadd.php"><b>确认</b></a>
            </h3>
        </form>
</div>
