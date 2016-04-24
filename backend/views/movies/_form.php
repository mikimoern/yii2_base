<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Country;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'movie_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'movie_description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'movie_trailler_id')->textInput() ?>

    <?= $form->field($model, 'movie_genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_country_id')->dropDownList(
            ArrayHelper::map(Country::find()->all(),'country_id','country_name'),
            ['prompt'=> 'Select Country']
    ) ?>

    <?= $form->field($model, 'movie_manager')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_producer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_scenario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_cast')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
