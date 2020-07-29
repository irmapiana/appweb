<?php

namespace app\controllers;

use Yii;
use app\models\Mregistration;
use app\models\MregistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Mproduct model.
 */
class RegistrationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mproduct models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MregistrationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mproduct model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mproduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mregistration();
        $model->flag = '0';

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save(false)) {
                Yii::$app->session->setFlash('success', Yii::$app->params['berhasil']);
                return $this->redirect(['index']);
            } else {
                //Yii::$app->session->setFlash('error', "Ada error ketika meyimpan data");
                //return $this->redirect(Yii::$app->request->referrer);
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            //return $this->redirect(['view', 'id' => $model->productid]); 
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Updates an existing Mproduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->request->isGet) {
            $session = Yii::$app->session;
            $session->set('halamanFilter', Yii::$app->request->referrer);
            // var_dump(Yii::$app);
        }
        
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::$app->params['update']); 
            // Jika method yang dioperasikan adalah update dan url sebelumnya adalah halaman filter index, maka redirect ke halaman filter tsb.
            if (Yii::$app->controller->action->id == 'update' && !is_null(Yii::$app->session->get('halamanFilter'))) {
                return $this->redirect(Yii::$app->session->get('halamanFilter'));
            } else {
                return $this->redirect(['index']);
            }
        } else {
            foreach ($model->getErrors() as $key => $message) {
                Yii::$app->session->setFlash('error', $message);
            }
            return $this->render('update', [
                'model' => $model,
                'used' => $used,
            ]);
        }
    }

    /**
     * Deletes an existing Mproduct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
     public function actionDelete($account_no, $flag)
    {
        
        //$post=$request->post();
        //$model = $this->findModel($flag);

        if ($flag == 1) {
            //$delete = $this->findModel($account_no)->delete();
            Yii::$app->session->setFlash('warning', 'Pengguna Tidak Dapat Dihapus');
            # code...
        }elseif($flag == 0){
        //$delete = \app\models\Mregistration::find()->where(['account_no' => $id])->one();
        // $msg = "Data tidak dapat dihapus. Data masih digunakan di tabel yang lain.";
        // if () {
        //     Yii::$app->session->setFlash('warning', $msg);
        // } else {
            $this->findModel($account_no)->delete();
            //return $this->redirect(['index']);
            Yii::$app->session->setFlash('success', 'Data terhapus');
            //return $this->redirect(Yii::$app->request->referrer);
        // }
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Mproduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Mproduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mregistration::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
?>