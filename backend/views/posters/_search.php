<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PostersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posters-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'poster_id') ?>

    <?= $form->field($model, 'poster_name') ?>

    <?= $form->field($model, 'poster_date') ?>

    <?= $form->field($model, 'poster_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
