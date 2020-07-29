<?php

namespace app\controllers;

use Yii;
use app\models\Museraccount;
use app\models\MuseraccountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\EntryForm;

/**
 * BankController implements the CRUD actions for Bank model.
 */
class FormController extends Controller
{
    public function actionIndex()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('index', ['model' => $model]);
        }
    }}
