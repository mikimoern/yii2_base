<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Movies */

$this->title = $model->movie_id;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->movie_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->movie_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'movie_id',
            'movie_name',
            'movie_img',
            'movie_description:ntext',
            'movie_trailler_id',
            'movie_genre',
            'movie_year',
            'movie_country_id',
            'movie_manager',
            'movie_producer',
            'movie_scenario',
            'movie_cast:ntext',
        ],
    ]) ?>

</div>
