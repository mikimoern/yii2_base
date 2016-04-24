<?php

namespace backend\controllers;

use Yii;
use backend\models\Serials;
use backend\models\SerialsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SerialsController implements the CRUD actions for Serials model.
 */
class SerialsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Serials models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SerialsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Serials model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Serials model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Serials();

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('../../frontend/web/uploads/tv/' . $model->file->baseName . '.' . $model->file->extension);

            //save in db
            $model->serial_img = 'uploads/tv/' . $model->file->baseName . '.' . $model->file->extension;
            $model->save();  
            return $this->redirect(['view', 'id' => $model->serial_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Serials model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) 
        {
              //check if new img has been browsed or not
            if (UploadedFile::getInstance($model,'file'))
            {
                //get the instance of the uploaded file
                $model->file =  UploadedFile::getInstance($model,'file');
                $model->file->saveAs('../../frontend/web/uploads/tv/' . $model->file->baseName . '.' . $model->file->extension);
                //save the path to the DB
                $model->serial_img = 'uploads/tv/' . $model->file->baseName . '.' . $model->file->extension;
            }            
            $model->save();
            return $this->redirect(['view', 'id' => $model->serial_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Serials model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Serials model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Serials the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Serials::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
