<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Traillers */

$this->title = 'Update Traillers: ' . ' ' . $model->trailler_id;
$this->params['breadcrumbs'][] = ['label' => 'Traillers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->trailler_id, 'url' => ['view', 'id' => $model->trailler_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="traillers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
