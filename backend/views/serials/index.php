<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SerialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Serials', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'serial_id',
            'serial_name',
            //'serial_img',
          //  'serial_description:ntext',
           // 'serialTrailler.trailler_link',
            'serial_genre',
            // 'serial_period',
            [
                'attribute' => 'serial_country_id',
                'value' => 'serialCountry.country_name',
            ],
            'serial_producer',
            'serial_cast:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
