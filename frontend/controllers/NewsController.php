<?php

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use backend\models\News;
use frontend\models\SearchForm;
use yii\helpers\Html;

class NewsController extends \yii\web\Controller
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

    public function actionPost()
    {
    	$query = News::find();

    	$pages = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $model = $query->orderBy(['news_date' => SORT_DESC])
        	->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('post',[
        	'posts'=> $model,
            'pagination' => $pages,
        ]);
    }

    public function actionArticle($id)
    {
    	$model = News::find()->where(['news_id'=>$id])->one();

    	return $this->render('article',[
    		'post' => $model,
    	]);
    }
}
