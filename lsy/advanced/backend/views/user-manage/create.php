<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserManage */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'User Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-manage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
