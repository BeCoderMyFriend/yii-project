<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Numbers */

$this->title = 'Update Numbers: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="numbers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
