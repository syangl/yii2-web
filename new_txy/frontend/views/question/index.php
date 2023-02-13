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
<p style="font-size:20px;"><?= Html::encode("{$questions[0]->ID} : {$questions[0]->txt}") ?></p>
</li>
<input type="radio" name="q1" value=1>是
<input type="radio" name="q1" value=0>否
<input type="radio" name="q1" value=2 checked="checked">不知道
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[1]->ID} : {$questions[1]->txt}") ?></p>
</li>
<input type="radio" name="q2" value=1>是
<input type="radio" name="q2" value=0>否
<input type="radio" name="q2" value=2 checked="checked">不知道
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[2]->ID} : {$questions[2]->txt}") ?></p>
</li>
<input type="radio" name="q3" value=1>是
<input type="radio" name="q3" value=0>否
<input type="radio" name="q3" value=2 checked="checked">不知道
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[3]->ID} : {$questions[3]->txt}") ?></p>
</li>
<input type="radio" name="q4" value=1>是
<input type="radio" name="q4" value=0>否
<input type="radio" name="q4" value=2 checked="checked">不知道
<li>
<p style="font-size:20px;"><?= Html::encode("{$questions[4]->ID} : {$questions[4]->txt}") ?></p>
</li>
<input type="radio" name="q5" value=1>是
<input type="radio" name="q5" value=0>否
<input type="radio" name="q5" value=2 checked="checked">不知道

<p style="font-size:20px;"><input type="submit" value="发送" class="sub">
    <input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" 
    value="<?=\Yii::$app->request->csrfToken?>"/></span>
</p >
</form>

</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>