<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Serials */

$this->title = $model->serial_id;
$this->params['breadcrumbs'][] = ['label' => 'Serials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->serial_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->serial_id], [
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
            'serial_id',
            'serial_name',
            'serial_img',
            'serial_description:ntext',
            'serial_trailler_id',
            'serial_genre',
            'serial_period',
            'serial_country_id',
            'serial_producer',
            'serial_cast:ntext',
        ],
    ]) ?>

</div>
