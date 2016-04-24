<?php

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use backend\models\Serials;

use frontend\models\SearchForm;
use yii\helpers\Html;

class SerialsController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $model = new SearchForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
            $q = Html::encode($model->q);
            return $this->redirect(['/site/search', 'q' => $q]);
        }
        return true;
    }

    public function actionTvSeries()
    {
        $query = Serials::find();

        $pages = new Pagination([
            'defaultPageSize' => 8,
            'totalCount' => $query->count()
        ]);

        $model = $query->orderBy(['serial_id' => SORT_DESC])
        	->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('tv-series',[
        	'tv_series'=> $model,
            'pagination' => $pages,
        ]);
    }

    public function actionShow($id)
    {
    	$model = Serials::find()->where(['serial_id'=>$id])->one();

    	return $this->render('show',[
    		'tv' => $model,
    	]);
    }

}
