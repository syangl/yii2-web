<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

global $num;
$num = 0;
?>
<h1>Answers</h1>
<ul>

<li>
<?php if($_POST["q1"]==$trueans[0]->TF)
{
    echo "第一题答对了";
    $num = $num + 1;
}
else{
    echo "第一题答错了";
}
?>
</li>
<?php  "<br>";?>

<li>
<?php if($_POST["q2"]==$trueans[1]->TF)
{
    echo "第二题答对了";
    $num = $num + 1;
}
else{
    echo "第二题答错了";
}
?>
</li>

</ul>

<?= "一共答对了{$num}道题！" ?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>