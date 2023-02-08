<?php

namespace frontend\controllers;
use frontend\models\Account;

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
            if (!strcmp($model->password, $model2->password)) {
                return $this->render('welcome', ['model' => $model]);
            }
        }

        return $this->render('_login_form', [
            'model' => $model,
        ]);
    }

}
