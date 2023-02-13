<?php

namespace backend\controllers;
use backend\models\BackAccount;


class LoginController extends \yii\web\Controller
{
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }
    /**
     * 管理员登录
     *
     * @return mixed
     */
    public function actionLogin(){
        $model = new BackAccount();
        if ($this->request->isPost && $model->load($this->request->post())){
            $model2 = BackAccount::findOne(['username' => $model->username]);
            if ($model2 && $model && (!strcmp($model->password, $model2->password))) {
                return $this->redirect('/advanced/backend/web/index.php?r=login/user-admin');
            }
        }

        return $this->render('_login_form', [
            'model' => $model,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionUserAdmin(){
        return $this->render('user_admin');
    }

}