<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BackAccount */

$this->title = 'Signup Back Account';
$this->params['breadcrumbs'][] = ['label' => 'Back Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="back-account-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
