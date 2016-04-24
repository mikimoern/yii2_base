<?php

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use backend\models\Movies;

use frontend\models\SearchForm;
use yii\helpers\Html;

class MoviesController extends \yii\web\Controller
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

    public function actionMovie()
    {	
    	$query = Movies::find();

        $pages = new Pagination([
            'defaultPageSize' => 8,
            'totalCount' => $query->count()
        ]);

        $model = $query->orderBy(['movie_id' => SORT_DESC])
        	->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('movie',[
        	'movies'=> $model,
            'pagination' => $pages,
        ]);
    }

    public function actionShow($id)
    {
    	$model = Movies::find()->where(['movie_id'=>$id])->one();

    	return $this->render('show',[
    		'tv' => $model,
    	]);
    }

}
