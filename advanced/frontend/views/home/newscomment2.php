<?php 
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\newscom2;

$newscom2= new newscom2();
// $newscom->id=6;
$newscom2->content=$_POST["content"];
$newscom2->date=date('Y-m-d h:i:s', time()); 
$data=$newscom2->insert();
$sql="select*from newscom2";
$r=newscom2::findBySql($sql)->asArray()->all();
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