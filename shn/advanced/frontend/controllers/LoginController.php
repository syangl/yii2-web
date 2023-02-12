<?php

namespace frontend\controllers;
use frontend\models\Account;
use frontend\models\Feeds;
use frontend\models\StaticVar;
use Yii;

class LoginController extends \yii\web\Controller
{
    /**
     * 用户登录
     *
     * @return mixed
     */
    public function actionLogin(){
        $model = new Account();
        if ($this->request->isPost && $model->load($this->request->post())){
            $model2 = Account::findOne(['username' => $model->username]);
            if ($model2 && $model && (!strcmp($model->password, $model2->password))) {
                StaticVar::$username = $model->username;
                Yii::$app->params['username'] = $model->username;
                return $this->render('welcome', ['model' => $model]);
            }
        }

        return $this->render('_login_form', [
            'model' => $model,
        ]);
    }

    public function actionFeed()
    {
        $model = new Feeds();
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->username = Yii::$app->request->getQueryParam('username');
                $model->created_at = time();
                if($model->save())
                    return $this->redirect(['feed', 'model' => $model]);
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('feed', [
            'model' => $model,
        ]);
    }

}
