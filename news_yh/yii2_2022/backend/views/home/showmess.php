<?php 
namespace backend\controllers;

use backend\models\ResendVerificationEmailForm;
use backend\models\VerifyEmailForm;
use backend\models\messageshow;

$name=$_POST["name"];
$stu_id=$_POST["stu_id"];
$major=$_POST["major"];
$per_message=$_POST["per_message"];
$per_part=$_POST["per_part"];
// $sql = "update messageshow set name='".$name."',major='".$major."',per_message='".$per_message."',per_part='".$per_part."' where stu_id='".$stu_id."'";
$messageshow = messageshow::find()
	->where(['stu_id'=>$stu_id])
    ->one();
$messageshow->name=$name;
$messageshow->major=$major;
$messageshow->per_message=$per_message;
$messageshow->per_part=$per_part;

$messageshow->save(); 
?>
<p align="center"><span style="font-size: 30px">
<?php
//if($data)
{
    print_r("添加成功");

}
?>
</span></p>
<li><p align="center"><span style="font-size: 30px"><a href="/yii2_2022/backend/web/index.php?r=home/messshow">继续添加</a></span></p></li>
