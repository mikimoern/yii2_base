<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Posters */

$this->title = 'Create Posters';
$this->params['breadcrumbs'][] = ['label' => 'Posters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
