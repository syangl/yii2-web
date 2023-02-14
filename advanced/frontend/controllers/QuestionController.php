<?php

namespace frontend\controllers;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Question;
use app\models\Trueans;

/**
 * Team：Novas
 * Author：田翔宇
 * Date：2023/2/11
 * Statement：问答互动
 */

class QuestionController extends Controller
{
    public function actionIndex()
    {
        $query = Question::find();
       
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $questions = $query->orderBy('ID')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


        return $this->render('index', [
            'questions' => $questions,
            'pagination' => $pagination
        ]);
    }

    public function actionAnswer()
    {
        $query = Trueans::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $trueans = $query->orderBy('ID')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('answer',[
            'trueans' => $trueans,
            'pagination' => $pagination
        ]);
    }
}


