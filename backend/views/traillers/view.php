<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Traillers */

$this->title = $model->trailler_id;
$this->params['breadcrumbs'][] = ['label' => 'Traillers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="traillers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->trailler_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->trailler_id], [
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
            'trailler_id',
            'trailler_name',
            'trailler_link:ntext',
            'trailler_active',
        ],
    ]) ?>

</div>
