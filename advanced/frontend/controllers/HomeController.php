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
    public function actionShortnews()
    {
        return $this->render('shortnews');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNews3()
    {
        return $this->render('news3');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNews4()
    {
        return $this->render('news4');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNews5()
    {
        return $this->render('news5');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNews6()
    {
        return $this->render('news6');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewscomment3()
    {
        return $this->render('newscomment3');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewscomment4()
    {
        return $this->render('newscomment4');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewscomment5()
    {
        return $this->render('newscomment5');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
    public function actionNewscomment6()
    {
        return $this->render('newscomment6');
        // $sql="select * from news where id=1";
        // $r=news::findBySql($sql)->all();
        // print_r($r);
    }
}