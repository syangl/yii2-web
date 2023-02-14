<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use yii\db\ActiveRecord;

/**
 * Team：Novas
 * Author：颜欢
 * Date：2023/2/9
 * Statement：新闻表
 */

class news extends ActiveRecord
{

}
// <?php
// header("Content-type: text/html;charset=utf-8n");
// $link=new mysqli('localhost','root','root', 'yii');
// $link->set_charset("utf8");
// $sql="select* from news";
// $res=$link->query($sql);
// $data=$res->fetch_all();
// echo $data[0][1].'<br/>';
// foreach($data as $v) 
// {echo $v[1].'<br/>';
// }/