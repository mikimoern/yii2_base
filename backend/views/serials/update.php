<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Serials */

$this->title = 'Update Serials: ' . ' ' . $model->serial_id;
$this->params['breadcrumbs'][] = ['label' => 'Serials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->serial_id, 'url' => ['view', 'id' => $model->serial_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="serials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
