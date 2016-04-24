<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Posters */

$this->title = $model->poster_id;
$this->params['breadcrumbs'][] = ['label' => 'Posters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posters-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->poster_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->poster_id], [
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
            'poster_id',
            'poster_name',
            'poster_date',
            'poster_status',
        ],
    ]) ?>

</div>
