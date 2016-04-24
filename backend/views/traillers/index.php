<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TraillersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Traillers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="traillers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Traillers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'trailler_id',
            'trailler_name',
            'trailler_link:ntext',
            'trailler_active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
