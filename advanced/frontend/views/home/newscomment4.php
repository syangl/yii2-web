<?php 
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\newscom4;

$newscom4= new newscom4();
// $newscom->id=6;
$newscom4->content=$_POST["content"];
$newscom4->date=date('Y-m-d h:i:s', time()); 
$data=$newscom4->insert();
$sql="select*from newscom4";
$r=newscom4::findBySql($sql)->asArray()->all();
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