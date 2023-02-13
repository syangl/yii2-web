<?php 
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\news;

$news= new news();
// $news->id=6;
$news->title=$_POST["title"];
$news->content=$_POST["content"];
$data=$news->insert();
print_r($data);
?>
