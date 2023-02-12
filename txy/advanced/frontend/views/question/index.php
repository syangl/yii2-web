<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

global $num;
$num = 0;

?>
<h1>Questions</h1>
<ul>
<form method="post" 
action="/advanced/frontend/web/index.php?r=question/answer">
<li>
    <?= Html::encode("{$questions[0]->ID} : {$questions[0]->txt}") ?>
</li>
<input type="radio" name="q1" value=1>是
<input type="radio" name="q1" value=0>否

<li>
    <?= Html::encode("{$questions[1]->ID} : {$questions[1]->txt}") ?>
</li>
<input type="radio" name="q2" value=1>是
<input type="radio" name="q2" value=0>否

<p><input type="submit" value="发送" class="sub">
    <input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" 
    value="<?=\Yii::$app->request->csrfToken?>"/></span>
</p >
</form>

</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>