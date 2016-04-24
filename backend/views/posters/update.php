<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Posters */

$this->title = 'Update Posters: ' . ' ' . $model->poster_id;
$this->params['breadcrumbs'][] = ['label' => 'Posters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->poster_id, 'url' => ['view', 'id' => $model->poster_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posters-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
