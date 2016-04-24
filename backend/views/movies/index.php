<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MoviesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Movies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'movie_id',
            'movie_name',
           // 'movie_img',
           // 'movie_description:ntext',
          //  'movieTrailler.trailler_link',
            'movie_genre',
            'movie_year',
            [
                'attribute' => 'movie_country_id',
                'value' => 'movieCountry.country_name',
            ],
            // 'movie_manager',
            // 'movie_producer',
            // 'movie_scenario',
            'movie_cast:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
