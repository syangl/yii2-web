<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\news;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
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
}