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
        <form class="login-form">
            <h2>请登录</h2>
            <h3 align="center" >
                <a href="\advanced\backend\web\"><b>确认</b></a>
            </h3>
        </form>
</div>
