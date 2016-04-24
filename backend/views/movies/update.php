<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Movies */

$this->title = 'Update Movies: ' . ' ' . $model->movie_id;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->movie_id, 'url' => ['view', 'id' => $model->movie_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
