<?php

namespace backend\controllers;

use backend\models\BackAccount;
use backend\models\BackAccountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BackAccountController implements the CRUD actions for BackAccount model.
 */
class BackAccountController extends Controller
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
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all BackAccount models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BackAccountSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BackAccount model.
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
     * Creates a new BackAccount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BackAccount();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['login_please',]);//, 'aid' => $model->aid, 'username' => $model->username
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BackAccount model.
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
     * Deletes an existing BackAccount model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($aid, $username)
    {
        $this->findModel($aid, $username)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BackAccount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $aid
     * @param string $username
     * @return BackAccount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aid, $username)
    {
        if (($model = BackAccount::findOne(['aid' => $aid, 'username' => $username])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
