<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\news;

// header("Content-type: text/html;charset=utf-8n");
// $link=new mysqli('localhost','root','root', 'yii');
// $link->set_charset("utf8");
// $sql="select* from news";
// $res=$link->query($sql);
// $data=$res->fetch_all();
// echo $data[0][1].'<br/>';
// foreach($data as $v) 
// {echo $v[1].'<br/>';
// }
$sql="select*from news";
$r=news::findBySql($sql)->asArray()->all();
print_r("                       ");
print_r($r[0]["title"]);

echo '<br/>';
print_r($r[0]["content"]);
?>