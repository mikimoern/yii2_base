<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Posters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posters-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'poster_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poster_date')->widget(
	    DatePicker::className(), [
	        // inline too, not bad
	         'inline' => false, 
	         // modify template for custom rendering
	       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
	        'clientOptions' => [
	            'autoclose' => true,
	            'format' => 'yyyy-mm-dd'
	        ]
	]);?>

    <?= $form->field($model, 'poster_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
