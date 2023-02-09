<?php

namespace backend\controllers;

use backend\models\UserManage;
use backend\models\UserManageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserManageController implements the CRUD actions for UserManage model.
 */
class UserManageController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    // 'actions' => [
                    //     'delete' => ['POST'],
                    // ],
                ],
            ]
        );
    }

    /**
     * Lists all UserManage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserManageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserManage model.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($aid, $username)
    {
        return $this->render('view', [
            'model' => $this->findModel($aid, $username),
        ]);
    }

    /**
     * Creates a new UserManage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserManage();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'aid' => $model->aid, 'username' => $model->username]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserManage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($aid, $username)
    {
        $model = $this->findModel($aid, $username);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'aid' => $model->aid, 'username' => $model->username]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserManage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteDefault($aid, $username)
    {
        $this->findModel($aid, $username)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserManage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $aid
     * @param string $username
     * @return UserManage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aid, $username)
    {
        if (($model = UserManage::findOne(['aid' => $aid, 'username' => $username])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Summary of actionDelete
     * @param integer $aid
     * @param string $username
     * @return void
     */
    public function actionDelete($aid, $username){
        $this->actionDeleteDefault($aid, $username);
    }
}
