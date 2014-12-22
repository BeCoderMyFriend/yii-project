<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Numbers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="numbers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'expire_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
