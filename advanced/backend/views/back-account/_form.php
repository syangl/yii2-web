<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BackAccount */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="back-account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    <div class="form-group">
        <?= Html::submitButton('Signup', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
