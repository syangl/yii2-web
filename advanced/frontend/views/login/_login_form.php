<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Account */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="account-form">

    <h1><?= Html::encode('Login Please') ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'width:700px;']) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'style' => 'width:700px;']) ?>

    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary','name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
