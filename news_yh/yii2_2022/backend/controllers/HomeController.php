<?php
namespace backend\controllers;

use backend\models\ResendVerificationEmailForm;
use backend\models\VerifyEmailForm;
use backend\models\news;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\SignupForm;
use backend\models\ContactForm;
class HomeController extends Controller
{
    public function actionNews()
    {
        return $this->render('news');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewsadd()
    {
        return $this->render('newsadd');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionModifynew()
    {
        return $this->render('modifynew');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionDelnew()
    {
        return $this->render('delnew');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNews1()
    {
        return $this->render('news1');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNews2()
    {
        return $this->render('news2');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }

    public function actionAddnews()
    {
        return $this->render('addnews');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewscomment()
    {
        return $this->render('newscomment');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewscomment2()
    {
        return $this->render('newscomment2');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }

}