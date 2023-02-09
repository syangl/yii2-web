<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BackAccount */

$this->title = 'Update Back Account: ' . $model->aid;
$this->params['breadcrumbs'][] = ['label' => 'Back Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aid, 'url' => ['view', 'aid' => $model->aid, 'username' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="back-account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
