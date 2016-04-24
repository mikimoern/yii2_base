<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TraillersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="traillers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'trailler_id') ?>

    <?= $form->field($model, 'trailler_name') ?>

    <?= $form->field($model, 'trailler_link') ?>

    <?= $form->field($model, 'trailler_active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
