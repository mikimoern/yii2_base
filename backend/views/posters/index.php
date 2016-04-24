<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posters-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posters', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'poster_id',
            'poster_name',
            'poster_status',
            [
                'attribute' => 'poster_date',
                'value' => 'poster_date',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'poster_date',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                ])
            ],
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
