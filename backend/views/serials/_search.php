<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SerialsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serials-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'serial_id') ?>

    <?= $form->field($model, 'serial_name') ?>

    <?= $form->field($model, 'serial_img') ?>

    <?= $form->field($model, 'serial_description') ?>

    <?= $form->field($model, 'serial_trailler_id') ?>

    <?php // echo $form->field($model, 'serial_genre') ?>

    <?php // echo $form->field($model, 'serial_period') ?>

    <?php // echo $form->field($model, 'serial_country_id') ?>

    <?php // echo $form->field($model, 'serial_producer') ?>

    <?php // echo $form->field($model, 'serial_cast') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
