<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Country;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Serials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serials-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'serial_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'serial_description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'serial_trailler_id')->textInput() ?>

    <?= $form->field($model, 'serial_genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_country_id')->dropDownList(
            ArrayHelper::map(Country::find()->all(),'country_id','country_name'),
            ['prompt'=> 'Select Country']
    ) ?>

    <?= $form->field($model, 'serial_producer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_cast')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
