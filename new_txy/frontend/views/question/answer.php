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
<p style="font-size:20px;">
<?php
if($_POST["q1"]==$trueans[0]->TF)
{
    echo "第一题答对了";
    $num = $num + 1;
}
else{
    echo "第一题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[0]->reason;
?>
</li>


<li>
<p style="font-size:20px;">
<?php if($_POST["q2"]==$trueans[1]->TF)
{
    echo "第二题答对了";
    $num = $num + 1;
}
else{
    echo "第二题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[1]->reason;
?>
</li>

<li>
<p style="font-size:20px;">
<?php if($_POST["q3"]==$trueans[2]->TF)
{
    echo "第三题答对了";
    $num = $num + 1;
}
else{
    echo "第三题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[2]->reason;
?>
</li>

<li>
<p style="font-size:20px;">
<?php if($_POST["q4"]==$trueans[3]->TF)
{
    echo "第四题答对了";
    $num = $num + 1;
}
else{
    echo "第四题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[3]->reason;
?>
</li>

<li>
<p style="font-size:20px;">
<?php if($_POST["q5"]==$trueans[4]->TF)
{
    echo "第五题答对了";
    $num = $num + 1;
}
else{
    echo "第五题答错了";
}
?>
</p>
<?php
echo "解析：";
echo $trueans[4]->reason;
?>
</li>

</ul>

<p style="font-size:20px;">
<?php 
echo "一共答对了{$num}道题,";
if($num==5)
    echo "恭喜您全部答对！";
else{
    echo "您有";
    echo 5-$num;
    echo "道题未回答正确。";
}
?>
</p>

<?= LinkPager::widget(['pagination' => $pagination]) ?>