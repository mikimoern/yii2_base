<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Traillers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="traillers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trailler_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trailler_link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trailler_active')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
