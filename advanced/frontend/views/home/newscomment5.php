<?php 
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\newscom5;

$newscom5= new newscom5();
// $newscom->id=6;
$newscom5->content=$_POST["content"];
$newscom5->date=date('Y-m-d h:i:s', time()); 
$data=$newscom5->insert();
$sql="select*from newscom5";
$r=newscom5::findBySql($sql)->asArray()->all();
?>

    <div class="container">
     

    <p align="center"><span style="font-size: 40px">评论区</span></p>


    </div>

<p align="center"><span style="font-size: 25px">
<?php
foreach($r as $v) 
{
    echo $v["content"];
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo$v["date"].'<br/>'.'<br/>';
}
// echo '<br/>';
// print_r($r[0]["content"]);
?>
</span></p>