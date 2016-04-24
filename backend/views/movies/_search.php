<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'movie_id') ?>

    <?= $form->field($model, 'movie_name') ?>

    <?= $form->field($model, 'movie_img') ?>

    <?= $form->field($model, 'movie_description') ?>

    <?= $form->field($model, 'movie_trailler_id') ?>

    <?php // echo $form->field($model, 'movie_genre') ?>

    <?php // echo $form->field($model, 'movie_year') ?>

    <?php // echo $form->field($model, 'movie_country_id') ?>

    <?php // echo $form->field($model, 'movie_manager') ?>

    <?php // echo $form->field($model, 'movie_producer') ?>

    <?php // echo $form->field($model, 'movie_scenario') ?>

    <?php // echo $form->field($model, 'movie_cast') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
