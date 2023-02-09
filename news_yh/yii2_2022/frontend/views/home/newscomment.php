<?php 
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\news;

$newscom= new news();
// $news->id=6;
$newscom->title=$_POST["title"];
$news->content=$_POST["content"];
$data=$news->insert();
print_r($data);
?>
